function getSize() {
    var dropdown = document.getElementById("sizeDropdown");
    var selectedSize = dropdown.options[dropdown.selectedIndex].value;
    document.getElementById("sizeValue").innerText = selectedSize;
}