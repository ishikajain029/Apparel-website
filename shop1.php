<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop page</title>
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
                <li><a class="active" href="shop1.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
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
    <section id="page-header">
       
      
        
    </section>
    
    <section id="product1" class="section-p1">
        
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="img1\products\f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>


    
            <div class="pro">
                <img src="img1\products\n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\n6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>
            <div class="pro">
                <img src="img1\products\n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h4>$78</h4>

                </div>
                <a href="#"><i class="fa fa-shopping-cart fa-1x cart"></i></a>

            </div>


        </div>

    </section>
    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class='fas fa-arrow-right' style='font-size:13px'></i></a>
    </section>
    
    
    <section id="newsletter" class="section-p1" class="section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates About our latest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="your email address">
            <button class="normal">Sign Up</button>
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