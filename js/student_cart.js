document.addEventListener('DOMContentLoaded', function () {
    const storeItems = document.querySelectorAll('.add-to-cart');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    let total = 0;

    storeItems.forEach(item => {
        item.addEventListener('click', function () {
            const name = item.getAttribute('data-name');
            const price = parseFloat(item.getAttribute('data-price'));
            total += price;
            cartTotal.innerText = total.toFixed(2);

            const listItem = document.createElement('li');
            listItem.innerText = `${name} - $${price.toFixed(2)}`;
            cartItems.appendChild(listItem);
        });
    });

    const checkoutBtn = document.getElementById('checkout-btn');
    checkoutBtn.addEventListener('click', function () {
        alert(`Total: $${total.toFixed(2)}. Thank you for shopping!`);
        cartItems.innerHTML = '';
        total = 0;
        cartTotal.innerText = total.toFixed(2);
    });
});
