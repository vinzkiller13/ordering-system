// // JavaScript for adding product to cart
// document.querySelector('.add-to-cart').addEventListener('click', function () {
//     // You can add your logic here to handle adding the product to the cart
//     alert('Product added to cart!');
// });
const sidebar = document.getElementById('sidebar');
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const container = document.getElementById('container');

openBtn.addEventListener('click', () => {
    sidebar.style.left = '0';
    container.style.marginLeft = '200px';
});
closeBtn.addEventListener('click', () => {
    sidebar.style.left = '-200px';
    container.style.marginLeft = '0';
});