<?php
session_start();
include 'config.php'; // Ensure this file contains the database connection


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="new sigin.css">
</head>
<body style="background-image: url('img Home/copy-space-spa-elements.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<div class="message" onclick="this.remove();">' . htmlspecialchars($msg) . '</div>';
    }
}
?>







<header>
        <!-- Search Box -->
        
        <a href="Untitled-1.html" class="logo">
            <img src="Img Home/1000a862-8bd9-4d81-94a9-d4af72342ae9.jpeg" alt="">
        </a>
       
       
        <!-- Links -->
         <ul class="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a href="Product.php">products</a></li>
            <li><a href="#about">About Us</a></li>
            
            <li><a href="#customers">customers</a></li>
        </ul>
        <!-- Icon -->
        
        <div class="header-buttons" style="margin-left: 700px;">
            <button class="btn" onclick="window.location.href='Sign_in.php'">SIGN IN</button>
            <button class="btn" onclick="window.location.href='login.php'">LOG IN</button>
        </div>
        
        <div class="header-icon">
            <a href="cart.php" class="bx bx-cart-alt"></a>
        </div>
       
     </header>
        <br><br><br><br> <br><br><br><br><br><br>

     <div class="form-container" style="width: 500px; margin: 0 auto; padding: 20px; border: 15px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <form action="logv.php" method="post" style="display: flex; flex-direction: column; gap: 10px;">
        <h2 style="margin-bottom: 20px; text-align: center; color: #333;">Login Now</h2>
        <input type="email" name="email" required placeholder="Enter email" class="box" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
        <input type="password" name="password" required placeholder="Enter password" class="box" style="padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;">
        <input type="submit" name="submit" class="btnx" value="Login Now" style="padding: 10px; border: none; border-radius: 4px; background-color: #28a745; color: white; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
        <p style="text-align: center; font-size: 14px; color: #666;">Don't have an account? <a href="sign_in.php" style="color: #007bff; text-decoration: none;">Register now</a></p>
    </form>
</div><br><br><br><br>





<section class="footer">
                <div class="footer-box">
                    <h2>Cosmetic Shop</h2>
                    <p></p>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-tiktok' ></i></a>
                  </div>
                </div>
                <div class="footer-box">
                    <h3>Support</h3>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Help & Support</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Product</a></li>
                </div>
                <div class="footer-box">
                    <h3>View Guides</h3>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog Posts</a></li>
                    <li><a href="#">Our Branches</a></li>
                </div>
                <div class="footer-box">
                    <h3>Contact</h3>
                    <div class="contact">
                        <span><i class='bx bxs-map' ></i>250 New York City, USA 10001</span>
                        <span><i class='bx bxs-phone' ></i>+1 444 744 8444</span>
                        <span><i class='bx bxs-envelope' ></i>cosmetic@shop.com</span>
                    </div>
                </div>
</section>
             <!-- Copyright -->
              <div class="Copyright">
                <p>&#169; Carpoolvenum All Right Reserverd</p>
              </div>


</body>
</html>
