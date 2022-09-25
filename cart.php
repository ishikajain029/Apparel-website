<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart page</title>
    <link rel="stylesheet" href="style.css">


      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" /> 



</head>

  <script src="https://use.fontawesome.com/6a6bbc7e86.js"></script>   

<body>
    <section id="header">
        <a href="#"><img src="img1/logo2.png" class="logo" alt="" height=35px></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a  href="shop1.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a  href="about.php">About</a></li>
                <li><a  href="contact.php">Contact</a></li>
                <li><a class="active"  href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                <li><a class="nav-link logof" href="logout.php"
        <?php
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] ==true)
{
    echo 'style="display:block";';
} 
?>
        >Logout</a></li>
                <img src="xmark-solid.svg" id="close" alt="" height=20px width=20px>
            </ul>
        </div>
       
   <div id="mobile">
       
       <a href="cart.php" class="color" ><i class="fa fa-shopping-cart fa-2x"></i></a> 

  
  <img src="bars-solid.svg" id ="bar" alt="bars">
 </div>



    </section>
    <section id="page-header" class="about-header">
       
       <h2 style="color:#e1d0cd ;">#let's_Shop</h2>
        <p style="color:#a8cfcc;">Enjoy your shoping</p>
        
    </section>
    <section id="cart" class="section-p1">
        <table>
            
                <thead>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                    
                </thead>
            
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img1/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img1/products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img1/products/f3.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1"></td>
                    <td>118.19</td>
                </tr>
                
            </tbody>
        </table>

    

    </section>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
            <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$335</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>

                </tr>
                
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$ 335</strong></td>
                    </tr>
            </table>
<button clas="normal">Proceed to checkout</button>

        </div>
    </section>
   
    <footer class="section-p1">
        <div class="col">
        <img class="logo" src="img1/logo2.png" alt="" height=35px>
            <h4>Contact</h4>
            <p><strong>Address>: </strong> 562 wellington Road,Street32,san Francisco</p>
            <p><strong>Phone:</strong>+01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours:</strong>10:00-18:00,Mon-Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>

                </div>

            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>Froms App Store or Google Play</p>
            <div class="row">
                <img src="img1/pay/app.jpg" alt="">
                <img src="img1/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img1/pay/pay.png" alt="">


        </div>
        <div class="copyright">
            <p>© 2021,Tech2 etc -HTML Css Ecomerce Templete
            </p>
        </div>

    </footer>
    <script src="script.js"></script>
</body>

</html>