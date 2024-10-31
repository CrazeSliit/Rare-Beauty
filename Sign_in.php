<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username_db = "root"; // Your MySQL username
$password_db = ""; // Your MySQL password
$dbname = "userdetails";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Validate password length
    if (strlen($password) < 6) {
        echo "Password must be at least 6 characters long";
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, dob, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $hashed_password, $dob, $phone);

    // Execute the query
    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="new sigin.css">
    <link rel="stylesheet" href="new text.css">
    
    
</head>
<body>

<!-- Navbar -->
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

<section>
    <br><br><br>

<div class="formContainer">
        <form action="Sign_in.php" method="post" class="signin-form">
            <h2>Sign In</h2>
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-field">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input-field">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn">Sign In</button>
        </form>
    </div>
    </body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: login.php");
        exit;
    }
?>
        </form>
    </div>
</body>
</html>
    <br>

    </section>


    
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