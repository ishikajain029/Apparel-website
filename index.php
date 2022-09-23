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
    <title>Ecommerce website</title>
    <link rel="stylesheet" href="style.css">
    
    



        
</head>
<script src="https://use.fontawesome.com/6a6bbc7e86.js"></script> 
<body>
    <section id="header">
       <a href="#"><img src="img1/logo2.png" class="logo" alt="" height=35px></a> 
   <div>
    <ul id="navbar">
        <li><a  class ="active" href="index.php" >Home</a></li>
        <li><a href="shop1.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
        <li><a class="nav-link" href="logout.php">Login</a></li>
    <img src="xmark-solid.svg" id="close" alt="" height=20px width=20px>
    </ul>
    
   </div>
   <div id="mobile">
       
         <a href="cart.php" class="color" ><i class="fa fa-shopping-cart fa-2x"></i></a> 

    
    <img src="bars-solid.svg" id ="bar" alt="bars">
   </div>
   
    </section>
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all product</h1>
        <p>Save more with coupons & up to 70% off!</p>
<button>Shop Now </button>
    </section>
    <section id="feature" class="section-p1">
    
        <div class="fe-box">
            <img src="img1/features/f1.png" alt="">
            <h6>Free shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img1/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
        
    </section >
<section id="product1" class="section-p1">
    <h2>Featured Product</h2>
    <P>Summer Collection New Morden Design</P>
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
             <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a> 

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

        </div>
        

    </div>

</section>
<section id="banner" class="section-m1">
    <h4>Repair service</h4>
    <h2>Up to <span>70% Off</span> - All t-Shirts & Accesories </h2>
<button class="normal">Explore More</button>
</section>
<section id="product1" class="section-p1">
    <h2>New Arrival</h2>
    <P>Summer Collection New Morden Design</P>
    <div class="pro-container">
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
             <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a> 

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

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
            <a href="#"><i class="fa fa-shopping-cart fa-1x cart" ></i></a>

        </div>
        

    </div>

</section>
<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>

        <!-- <span>The best classic dress is on sale at cara</span> -->
   <button class="white">Learn More</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>

         <span>The best classic dress is on sale at cara</span> 
   <button class="white">Collection</button>
    </div>

</section>
<section id="banner3">
    <div class="banner-box">
       
        <h2>SEASONAL SALE</h2>
        <h3>winter collection -58% OFF</h3>

         
   
    </div>
    <div  class="banner-box2">
       
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring / Summer 2022</h3>

         
   
    </div>
    <div  class="banner-box3">
       
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Print</h3>

         
   
    </div>

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
<!-- <div class="follow">
    <h4>Follow us</h4>
    <div class="icon">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-pinterest-p"></i>
        <i class="fab fa-youtube"></i>

    </div> -->

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

</footer >
    <script src="script.js"></script>
</body>
</html>