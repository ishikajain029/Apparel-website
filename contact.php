<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
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
                <li><a class="active" href="contact.php">Contact</a></li>
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
    <section id="page-header" class="about-header">
       
       <h2 style="color:#e1d0cd ;">#let's_talk</h2>
        <p style="color:#a8cfcc;">LEAVE A MESSAGE.we love to hear from you</p>
        
    </section>
    <section id="contact-details" class="section-p1">
<div class="details">
    <span>GET IN TOUCH</span>
    <h2>Visit one of our agency locations or contact us today</h2>
<h3>Head Office</h3>
<div>
    <li><i class="fa-solid fa-map-pin"></i>
        <p>s6 Glassford Street Glasgow G1 1UL New York</p>
    </li>
</div>
<div>
    <li><i class="far fa-envelope"></i>
        <p>contact@xample.com</p>
    </li>
</div>
<div>
<li><i class="fas fa-phone-alt"></i>
    <p>contact@xample.com</p>
</li>
</div>
<div>
<li><i class="far fa-clock"></i>
    <p>Monday to Saturday 9.00am to 10pm</p>
</li>
</div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28639.96781521584!2d91.67868425137353!3d26.19680914783371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5aea122132c3%3A0x44767bb468a831d1!2sIIT%20Guwahati%2C%20Guwahati%2C%20Assam!5e0!3m2!1sen!2sin!4v1660672715066!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
    </section>
    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We Love to hear from you</h2>
            <input type="text" placeholder="Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
            

        </form>
        <div class="people">
            <div>
                <img src="img1/people/1.png" alt="">
                <p><span>Shubham Denwal</span>Senior Marketing Manger<br> Phone: +000 123 000 77 88 <br>Email: contact@xample.com</p>

            </div>
            <div>
                <img src="img1/people/2.png" alt="">
                <p><span>ishika</span>Senior Marketing Manger<br> Phone: +000 123 000 77 88 <br>Email: contact@xample.com</p>

            </div>
            <div>
                <img src="img1/people/3.png" alt="">
                <p><span>idha</span>Senior Marketing Manger<br> Phone: +000 123 000 77 88 <br>Email: contact@xample.com</p>

            </div>

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
            <p>?? 2021,Tech2 etc -HTML Css Ecomerce Templete
            </p>
        </div>

    </footer>
    <script src="script.js"></script>
</body>

</html>