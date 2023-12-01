var popupViews = document.querySelectorAll('.popup-view');
var popupBtns = document.querySelectorAll('.popup-btn');
var popSpecials = document.querySelectorAll('.special-pop');

var closeBtns = document.querySelectorAll('.close-btn');

var openSize = document.querySelectorAll('.size-btn');
var closeSize = document.querySelectorAll('.size-btn');


//javascript for quick view button
var popup = function (popupClick) {
    popupViews[popupClick].classList.add('active');
}
popupBtns.forEach((popupBtn, i) => {
    popupBtn.addEventListener("click", () => {
        popup(i);
    });
});
closeBtns.forEach((closeBtn) => {
    closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
            popupView.classList.remove('active');
        });
    });
});



