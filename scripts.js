let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

setInterval(nextSlide, 3000); 
showSlide(currentSlide);

const cart = [];
function addToCart(productName, productPrice) {
    const itemExists = cart.find(item => item.name === productName);

    cart.push({ name: productName, price: productPrice });
    updateCartDisplay();
}

function updateCartDisplay() {
    const cartList = document.getElementById('cart-list');
    cartList.innerHTML = ''; 

    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - ${item.price}`;
        
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Удалить';
        removeButton.onclick = () => removeFromCart(item.name);
        
        listItem.appendChild(removeButton);
        cartList.appendChild(listItem);
    });
}

function removeFromCart(productName) {
    const itemIndex = cart.findIndex(item => item.name === productName);
    if (itemIndex > -1) {
        cart.splice(itemIndex, 1);
    }
    updateCartDisplay();
}
