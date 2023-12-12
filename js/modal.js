function openModal() {
    document.getElementById('orderModal').style.display = 'block';
}
function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

function cancelModalOpen() {
    document.getElementById('cancelModal').style.display = 'block';
}
function cancelModalClose() {
    document.getElementById('cancelModal').style.display = 'none';
}

function placeOrder() {
    document.getElementById('status1').textContent = 'Placed';
    closeModal();
}

function cancelOrder() {
    document.getElementById('status2').textContent = 'Canceled';
    cancelModalClose();
}
