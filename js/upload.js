var fileInput = document.getElementById('file-input');

fileInput.addEventListener('change', function () {
    // Get the selected file
    var selectedFile = fileInput.files[0];


    var fileNameDisplay = document.getElementById('file-name-display');
    fileNameDisplay.textContent = 'Selected File: ' + selectedFile.name;
});
