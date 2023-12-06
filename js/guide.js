
document.querySelectorAll('.wrapper img').forEach(image => {
    image.onclick = () => {
        document.querySelector('.popup').style.display = 'block';
        document.querySelector('.popup img').src = image.getAttribute('src');

    }
});
document.querySelector('.popup span').onclick = () => {
    document.querySelector('.popup').style.display = 'none';
}

