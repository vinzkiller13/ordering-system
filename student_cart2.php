<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student_cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>SHOPPING CART</title>
</head>
<body>
    <div class="cont">
        <header>
            <h1>Shopping Cart</h1>
            <a href="student_prod.php">< Continue Shopping?</a>
        </header>
    </div>

    <div class="container">
        <div class="checkoutLayout">
            <div class="returnCart">
                <div class="list">
                    <div class="item">
                        <img src="pants.jpg" alt="">
                        <div class="info">
                            <div class="name">PRODUCT 1</div>
                            <div class="price">Php 100/ 1 product(s)</div>
                        </div>
                        <div class="quantity">1</div>
                        <div class="returnPrice">
                        </div>
                        
                    </div>
                    <div class="item">
                        <img src="pants.jpg" alt="">
                        <div class="info">
                            <div class="name">PRODUCT 1</div>
                            <div class="price">Php 100/ 1 product(s)</div>
                        </div>
                        <div class="quantity">1</div>
                        <div class="returnPrice">
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="return">
                    <div class="row">
                        <div>Total Quantity</div>
                        <div class="totalQuantity">60</div>
                    </div>
                    <div class="row">
                        <div>Total Price</div>
                        <div class="totalPrice">Php 60</div>
                    </div>
                    <div class="row">
                        <button class="buttonCheckOut" onclick="openPopup()">PLACE ORDER</button>
                        <button class="buttonCancel" onclick="openComment()">CANCEL ORDER</button>
                    </div>
                    
                    <div class="popup" id="popup">
                        <h3>You have successfully ordered</h3>
                        <button class ="ok" type="button" onclick="closePopup()">OK</button>
                    </div>

                    <div class="comment_box" id="comment_box">
                        <h2>Comments</h2>
                        <textarea name="comment" id="" cols="30" rows="10" placeholder="Reason of cancelling your order"></textarea>
                        <button class="submit"type="button" onclick="closeComment()">Submit</button>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    <script src="comment.js"></script>
    <script src="cart.js"></script>
    <script src="std_cart.js"></script>
</body>
</html>