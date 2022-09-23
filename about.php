<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop page</title>
    <link rel="stylesheet" href="style.css">
<!-- 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"> -->

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />



</head>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>-->
  <script src="https://use.fontawesome.com/6a6bbc7e86.js"></script>  

<body>
    <section id="header">
        <a href="#"><img src="img1/logo2.png" class="logo" alt="" height=35px></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a  href="shop1.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                <li><a class="nav-link" href="logout.php">Login</a></li>
                <img src="xmark-solid.svg" id="close" alt="" height=20px width=20px>
            </ul>
        </div>
        <!-- <div id="mobile">
       <a href="cart.html"><i class="fa fa-shopping-cart fa-2x"></i></a>
       <i id="bar" class="fas fa-outdent"></i>

   </div> -->
   <div id="mobile">
       
       <a href="cart.php" class="color" ><i class="fa fa-shopping-cart fa-2x"></i></a> 

  
  <img src="bars-solid.svg" id ="bar" alt="bars">
 </div>
 

    </section>
    <section id="page-header" class="about-header">
       
       <h2 style="color:#e1d0cd ;">#KnowUs</h2>
        <p style="color:#a8cfcc;">Read all case studies about our projects</p>
        
    </section>
    <section id="about-head" class="section-p1">
<img src="img1/about/a6.jpg" alt="">
<div>
   <h2>Who We Are?</h2>
   <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis magnam amet culpa quia similique eum ea perferendis tenetur labore blanditiis in harum ullam, iste illo nisi quod rem, non tempore! Perspiciatis eaque corporis natus consectetur molestiae voluptatum excepturi facilis dolor minima numquam, deserunt eos quas! Voluptatibus veniam possimus voluptatum optio.</p> 
   <abbr title="">create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.</abbr>
   <br>
   <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.</marquee>

</div>
    </section>
    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a> </h1>
        <div class="video">
        <video autoplay muted loop src="img1/about/1.mp4"></video>
       </div>
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