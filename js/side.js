const sidebar = document.getElementById('sidebar');
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const content = document.getElementsByClassName('content')[0];

openBtn.addEventListener('click', () => {
    sidebar.style.left = '0';
    content.style.marginLeft = '200px';
});
closeBtn.addEventListener('click', () => {
    sidebar.style.left = '-200px';
    content.style.marginLeft = '0';
});
