<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="student_homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="menu">
        <div class="header">
            <h1>STI COLLEGE</h1>
        </div>
        <ul> 
            <li><a href="pamo_orders.php">Orders</a></li>
            <li><a href="pamo_products.php">Products</a></li>
            <li><a href="pamo_user.php">User</a></li>
            <li><a href="pamo_reports.php">Reports</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="box">
            <form action="" class="search">
                <input type="text" placeholder="search...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #447ee4;"></i></button>
            </form>
        </div>
        <form action="" class="cart">
            <button type="submit"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #ffffff;"></i></button>
        </form>
        <form action="" class="user">
            <button type="submit"><i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i></button>
        </form>
    </div>
    <div class="cont">
        <div class="img-slider">
            <div class="slide active">
                <img src="1.jpg" alt="">
                <div class="info">
                    <h2>Slide 01</h2>
                </div>
            </div>
            <div class="slide">
                <img src="2.jpg" alt="">
                <div class="info">
                    <h2>Slide 02</h2>
                </div>
            </div>
            <div class="slide">
                <img src="3.jpg" alt="">
                <div class="info">
                    <h2>Slide 03</h2>
                </div>
            </div>
            <div class="slide">
                <img src="4.jpg" alt="">
                <div class="info">
                    <h2>Slide 04</h2>
                </div>
            </div>
            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        var manualNav = function(manual){
            slides.forEach((slide) =>{
                slide.classList.remove('active');

                btns.forEach((btn) => {
                    btn.classList.remove('active');
                });
            });
            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }
        btns.forEach((btn, i) => {
            btn.addEventListener("click", () =>{ 
                manualNav(i);
                currentSlide = i;
            });
        });
         var repeat = function(activeClass){
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function(){

                    [...active].forEach((activeSlide) =>{
                        activeSlide.classList.remove('active');
                    });
                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if(slides.length == i){
                        i = 0;
                    }
                    if(i >= slides.length){
                        return;
                    }
                    repeater();
                }, 10000);
            } 
            repeater();
        }
        repeat();
    </script>
</body>
</html>