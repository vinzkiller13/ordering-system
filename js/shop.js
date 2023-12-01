const sidebar = document.getElementById('sidebar');
const open_btn = document.getElementById('open_btn');
const close_btn = document.getElementById('close_btn');
const content = document.getElementsByClassName('content')[0];

open_btn.addEventListener('click', () => {
    sidebar.style.left = '0';
    content.style.marginLeft = '200px';
});
close_btn.addEventListener('click', () => {
    sidebar.style.left = '-200px';
    content.style.marginLeft = '0';
});
