function increment(quantityId, priceId, totalPriceId) {
    var quantityElement = document.getElementById(quantityId);
    var priceElement = document.getElementById(priceId);
    var totalPriceElement = document.getElementById(totalPriceId);
    var totalQuantityElement = document.getElementById('totalQuantity');
    var totalAmountElement = document.getElementById('totalPrice');

    var currentQuantity = parseInt(quantityElement.textContent);
    var price = parseInt(priceElement.textContent.replace('$', ''));

    quantityElement.textContent = currentQuantity + 1;
    updateTotalPrice(totalPriceElement, price, currentQuantity + 1);
    updateTotalQuantity(totalQuantityElement, 1);
    updateOverallTotal(totalAmountElement, price);
}

function decrement(quantityId, priceId, totalPriceId) {
    var quantityElement = document.getElementById(quantityId);
    var priceElement = document.getElementById(priceId);
    var totalPriceElement = document.getElementById(totalPriceId);
    var totalQuantityElement = document.getElementById('totalQuantity');
    var totalAmountElement = document.getElementById('totalPrice');

    var currentQuantity = parseInt(quantityElement.textContent);
    var price = parseInt(priceElement.textContent.replace('$', ''));


    if (currentQuantity > 0) {
        quantityElement.textContent = currentQuantity - 1;
        updateTotalPrice(totalPriceElement, price, currentQuantity - 1);
        updateTotalQuantity(totalQuantityElement, -1);
        updateOverallTotal(totalAmountElement, -price);
    }

}

function updateTotalPrice(totalPriceElement, price, quantity) {
    totalPriceElement.textContent = '$' + (price * quantity);
}

function updateTotalQuantity(totalQuantityElement, quantity) {
    var currentTotalQuantity = parseInt(totalQuantityElement.textContent);
    totalQuantityElement.textContent = currentTotalQuantity + quantity;
}

function updateOverallTotal(totalAmountElement, price) {
    var currentTotalAmount = parseInt(totalAmountElement.textContent.replace('$', ''));
    totalAmountElement.textContent = '$' + (currentTotalAmount + price);
}
