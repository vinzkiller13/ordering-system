<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Product Cards | With Quick Popup View</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
  </head>
  <body>
  

    <div class="container">
      <div class="product">
        <div class="product-card">
          <h2 class="name">Uniform</h2>
          <span class="price">$120.00</span>
          <a class="popup-btn">Quick View</a>
          <img src="1.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="1.png" alt="">
            </div>
            <div class="info">
              <h2>Uniform<br><span>Men and Women</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">$120.00</span>
              <a href="#" class="add-cart-btn">Add to Cart</a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-card">
          <h2 class="name">PE Uniform</h2>
          <span class="price">$100.00</span>
          <a class="popup-btn">Quick View</a>
          <img src="2.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="2.png" alt="">
            </div>
            <div class="info">
              <h2>PE Uniform<br><span>Men and Women</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">$100.00</span>
              <a href="#" class="add-cart-btn">Add to Cart</a>
              
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product-card">
          <h2 class="name">Proware</h2>
          <span class="price">$250.00</span>
          <a class="popup-btn">Quick View</a>
          <img src="3.png" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="3.png" alt="">
            </div>
            <div class="info">
              <h2>Proware<br><span>Men and Women</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <span class="price">$250.00</span>
              <a href="#" class="add-cart-btn">Add to Cart</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick){
      popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
      popupBtn.addEventListener("click", () => {
        popup(i);
      });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
      closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
          popupView.classList.remove('active');
        });
      });
    });
    </script>

  </body>
</html>