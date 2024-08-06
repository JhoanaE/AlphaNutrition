//Carrito

let listProductHTML = document.querySelector('.listProduct');
let listCartHTML = document.querySelector('.listCart');
let iconCart = document.querySelector('.icon-cart');
let iconCartSpan = document.querySelector('.icon-cart span');
let body = document.querySelector('body');
let closeCart = document.querySelector('.close');
let totalAmountSpan = document.querySelector('.totalAmount');
let products = [];
let cart = [];

iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
});
closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
});

listProductHTML.addEventListener('click', (event) => {
    let positionClick = event.target;
    if(positionClick.classList.contains('addCart')){
        let id_product = positionClick.parentElement.dataset.id;
        addToCart(id_product);
    } else if (positionClick.classList.contains('product-image')) {
        let productElement = positionClick.closest('.item');
        let id_product = productElement.dataset.id;
        openModal(id_product);
    }
});

const addToCart = (product_id) => {
    let positionThisProductInCart = cart.findIndex((value) => value.product_id == product_id);
    if(cart.length <= 0){
        cart = [{
            product_id: product_id,
            quantity: 1
        }];
    }else if(positionThisProductInCart < 0){
        cart.push({
            product_id: product_id,
            quantity: 1
        });
    }else{
        cart[positionThisProductInCart].quantity = cart[positionThisProductInCart].quantity + 1;
    }
    addCartToHTML();
    addCartToMemory();
};

const addCartToMemory = () => {
    localStorage.setItem('cart', JSON.stringify(cart));
};

const addCartToHTML = () => {
    listCartHTML.innerHTML = '';
    let totalQuantity = 0;
    let totalAmount = 0;
    if(cart.length > 0){
        cart.forEach(item => {
            totalQuantity = totalQuantity +  item.quantity;
            let newItem = document.createElement('div');
            newItem.classList.add('item');
            newItem.dataset.id = item.product_id;

            let positionProduct = products.findIndex((value) => value.id == item.product_id);
            let info = products[positionProduct];
            listCartHTML.appendChild(newItem);
            newItem.innerHTML = `
            <div class="image">
                    <img src="${info.image}">
                </div>
                <div class="name">
                ${info.name}
                </div>
                <div class="totalPrice">${info.price * item.quantity}</div>
                <div class="quantity">
                    <span class="minus"></span>
                    <span>${item.quantity}</span>
                    <span class="plus"></span>
                </div>
            `;
            totalAmount += info.price * item.quantity;
        });
    }
    iconCartSpan.innerText = totalQuantity;
    totalAmountSpan.innerText = totalAmount.toFixed(2);
};

listCartHTML.addEventListener('click', (event) => {
    let positionClick = event.target;
    if(positionClick.classList.contains('minus') || positionClick.classList.contains('plus')){
        let product_id = positionClick.parentElement.parentElement.dataset.id;
        let type = 'minus';
        if(positionClick.classList.contains('plus')){
            type = 'plus';
        }
        changeQuantityCart(product_id, type);
    }
});

const changeQuantityCart = (product_id, type) => {
    let positionItemInCart = cart.findIndex((value) => value.product_id == product_id);
    if(positionItemInCart >= 0){
        let info = cart[positionItemInCart];
        switch (type) {
            case 'plus':
                cart[positionItemInCart].quantity = cart[positionItemInCart].quantity + 1;
                break;
        
            default:
                let changeQuantity = cart[positionItemInCart].quantity - 1;
                if (changeQuantity > 0) {
                    cart[positionItemInCart].quantity = changeQuantity;
                }else{
                    cart.splice(positionItemInCart, 1);
                }
                break;
        }
    }
    addCartToHTML();
    addCartToMemory();
};

const initApp = () => {
    fetch('./products.json')
    .then(response => response.json())
    .then(data => {
        products = data;
        addDataToHTML();

        if(localStorage.getItem('cart')){
            cart = JSON.parse(localStorage.getItem('cart'));
            addCartToHTML();
        }
    });
};

const checkoutCart = () => {
    if(cart.length === 0) {
        alert('El carrito está vacío. Agrega productos antes de proceder al pago.');
    } else {
        cart = [];
        addCartToHTML();
        addCartToMemory();
        alert('Gracias por su compra!');
    }
};

document.querySelector('.chekOut').addEventListener('click', checkoutCart);

initApp();

//Descripcion del producto

let modal = document.getElementById("productModal");
let modalImage = document.getElementById("modalImage");
let modalName = document.getElementById("modalName");
let modalPrice = document.getElementById("modalPrice");
let modalDescription = document.getElementById("modalDescription");
let modalAddToCart = document.getElementById("modalAddToCart");
let closeModal = document.querySelector(".close-modal");

const openModal = (product_id) => {
    let product = products.find(p => p.id == product_id);
    if (product) {
        modalImage.src = product.image;
        modalName.innerText = product.name;
        modalPrice.innerText = `$${product.price}`;
        modalDescription.innerText = product.description || 'No hay descripción disponible.';
        modalAddToCart.onclick = () => addToCart(product_id);
        modal.style.display = "block";
    }
};

closeModal.onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

//Recomendacion

const recommendations = {
    gananciaMuscular: [1, 2, 3, 4, 5],
    definicion: [3, 4],
    condicionFisica: [1, 4],
    cuerpoSaludable: [3, 5, 6, 10, 12, 13, 14, 15]
};

const addDataToHTML = () => {
    listProductHTML.innerHTML = ''; // Clear existing content
    if (products.length > 0) {
        products.forEach(product => {
            let newProduct = document.createElement('div');
            newProduct.dataset.id = product.id;
            newProduct.classList.add('item');
            newProduct.innerHTML = 
            `<img src="${product.image}" alt="" class="product-image">
            <h2>${product.name}</h2>
            <div class="price">$${product.price}</div>
            <button class="addCart">Agregar al carrito</button>`;
            listProductHTML.appendChild(newProduct);
        });
    }

    let objetivoSeleccionado = localStorage.getItem('objetivoSeleccionado');
    if (objetivoSeleccionado) {
        highlightProducts(objetivoSeleccionado);
        document.getElementById('objetivoSelect').value = objetivoSeleccionado;
    }
};

const highlightProducts = (objective) => {
    document.querySelectorAll('.item').forEach(item => {
        item.classList.remove('highlight');
    });

    if (objective && recommendations[objective]) {
        recommendations[objective].forEach(id => {
            let productElement = document.querySelector(`.item[data-id="${id}"]`);
            if (productElement) {
                productElement.classList.add('highlight');
            }
        });
    }
};

document.addEventListener('DOMContentLoaded', (event) => {
    initApp();
    let objetivoSeleccionado = localStorage.getItem('objetivoSeleccionado');
    if (objetivoSeleccionado) {
        highlightProducts(objetivoSeleccionado);
        document.getElementById('objetivoSelect').value = objetivoSeleccionado;
    }
});

