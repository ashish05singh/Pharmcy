<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
</head>
<body>
<?php
include('header.php');

?>
    
<div class="container-sec11">
        <div class="head-service">
            <div class="head-service-sec">
               CONTECT-US
             </div>
          <a href=""> Home<i class="fa-solid fa-angles-right"></i>Contect-Us </a>

        </div>
    </div>
    <!-- =====NEW GRID SEC==================================== -->
     <div class="n-grid-con">
       
        <div class="one-sec-con">
            <div class="one-sec-con-text"> 
                <h3>We’d love to hear from you</h3>
                urus tempor curae odio nascetur placerat congue.</p>
            </div>
            <br>
            <div class="one-sec-next">
                
                <div class="part part1">
                    <a href=""><i class="fa-solid fa-location-dot"></i></a>
                    <h5>Headquarters</h5>
                    <p>789 Oak St, Smalltown,<p> TX 23456</p></p>
                </div>
                <div class=" part part2">
                    <a href=""><i class="fa-solid fa-phone-volume"></i></a>
                    <h5>Call Us</h5>
                    <p>+1555.987.6543 </p>
                    <p>+1555.987.6541</p>
                </div>
                <div class=" part part3">
                    <a href=""><i class="fa-regular fa-envelope"></i></a>
                    <h5>Email Us</h5>
                    <p>info@yourdomain.com</p>
                    <p>hello@yourdomain.com</p>
                </div>
            </div>
            <br>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d113909.42213529741!2d81.04603705439452!3d26.85046420596075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1726297159436!5m2!1sen!2sin" width="690" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
           
        </div>
        <div class="one-secction2">
         <div class="form-container">
            <h2>Contact Us</h2>
            <form action="/submit_message" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="enter your email">
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" id="text" name="number" required placeholder="Enter Your Number">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required placeholder="Enter Your Subject">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required placeholder="Enter Your Message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message">
            </div>
        </form>
    </div>
        </div>
         
         </div>
         <!-- ==========brand logo sec========================================== -->
        <div class="brand-logo-sec">
            <div class="brand-logo">
                <img src="./images/brand-1.png" alt="">
            </div>
            <div class="brand-logo">
                <img src="./images/brand-2.png" alt="">
            </div>
            <div class="brand-logo">
                <img src="./images/brand-3.png" alt="">
            </div>
            <div class="brand-logo">
                <img src="./images/brand-4.png" alt="">
            </div>
            <div class="brand-logo">
                <img src="./images/brand-5.png" alt="">
            </div>
        </div>
         <!-- ==========last-sec-container============================================================= -->
     <div class="last-sec-new">
        <div class="last-sec-contant">
            <h2>Sign Up For Newsletter</h2>
            <p>Join 60,000+ Subscribers and get a new discount coupon every saturday</p>
           
        </div>
        <div class="last-sec-btn">
            <input type="text" placeholder="Enter Your Email" name="search">
            <button type="submit" name="button" class="btn-new">Sign Up</button>
        </div>
     </div>


     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="script.js"></script>
    <script src="script4.js"></script>

    <?php
    include('fotter.php');
    ?>
</body>
</html>