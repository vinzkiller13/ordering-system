// Modal functions
function openModal() {
    document.getElementById('orderModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('orderModal').style.display = 'none';
}

function cancelModalOpen() {
    document.getElementById('cancelModal').style.display = 'block';
}
function cancelModalClose() {
    document.getElementById('cancelModal').style.display = 'none';
}
// Order functions (similar to the previous example)
function placeOrder() {
    // You can update the order status or perform other actions here
    document.getElementById('status1').textContent = 'Placed';
    closeModal();
}

function cancelOrder() {
    // You can update the order status or perform other actions here
    document.getElementById('status2').textContent = 'Canceled';
    cancelModalClose();
}
