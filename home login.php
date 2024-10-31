<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | CLEO</title>
        <!-- Link TO CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Box Icons -->
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <style>
        /* Basic styling for the product boxes */
        .products-container {
            display: flex;
            flex-wrap: wrap;
            gap: 120px;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .popup-content {
            position: relative;
            max-width: 500px;
            max-height: 500px;
        }

        

        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            color: #fff;
            cursor: pointer;
        }
    </style>
    </head>
    <body>
       <!-- Navbar -->
       <header>
        <!-- Search Box -->
        
        <a href="home login.php" class="logo">
            <img src="Img Home/1000a862-8bd9-4d81-94a9-d4af72342ae9.jpeg" alt="">
        </a>
       
       
        <!-- Links -->
         <ul class="navbar">
            <li><a href="home login.php">Home</a></li>
            <li><a href="Productlog.php">products</a></li>
            <li><a href="home login.php">About Us</a></li>
            
            <li><a href="home login.php">customers</a></li>
        </ul>
        <!-- Icon -->
        
        <div class="header-buttons" style="margin-left: 700px;">
        </div>

            <div>

        <a href="table.php" class="bx bx-user" style="margin-left: 100px; font-size: 24px;"></a>
        </div>
            
        <div>  <button class="btn" onclick="window.location.href='home.php'">LOG OUT</button>
        </div>
        
        <div class="header-icon">
            <a href="cart.php" class="bx bx-cart-alt"></a>
        </div>
       
     </header>
            
       
     <section class="home" id="home" style="background-image: url('img Home/new.jpg');">
            <div class="home-text">
                <h1>Discover Your Beauty Journey</h1>
                <p>Embark on a transformative journey with CLEO Beauty. Discover a world where your natural beauty is <br>celebrated, 
                    enhanced, and nourished with premium products crafted to elevate your self-confidence. From <br> radiant skincare to luxurious cosmetics,
                     we offer a range of high-quality essentials designed to reveal your best self.<br> Explore new possibilities, embrace your uniqueness, 
                     and let your beauty shine. At CLEO Beauty, your journey to a <br>more confident, vibrant you starts here. Discover your beauty journey today! 
                     Experience our cruelty-free, <br>eco-friendly products that combine cutting-edge science with nature’s finest ingredients for lasting <br>results
                      and unparalleled indulgence.</p>
                    <br>
                <a href="Product.php" class="btn">Shop now</a>
            </div>
            <div class="home-img">
                <img src="img/main.png" alt="">
            </div>
        </section>
          <!-- About -->
           <br><br>
           <section class="about" id="about">
            <p>The history of beauty products dates back thousands of years, evolving with cultures and civilizations.
                 In ancient Egypt, makeup like kohl was used to enhance eyes, while Cleopatra famously bathed in milk for soft skin. The Greeks and Romans used olive oil, 
                 perfumes, and natural dyes for skin and hair. During the Middle Ages, pale skin became a status symbol, with lead-based powders being popular but dangerous. 
                 In the 20th century, iconic brands like Max Factor and Estée Lauder emerged, pioneering modern cosmetics. Today, beauty products emphasize inclusivity, sustainability, 
                 and innovative technology, blending tradition with modern science.</p>
            <div class="about-img">
                <img src="img/about.jpg" alt="">
            </div>
            <div class="about-text">
                <h2>Our History</h2>
                <p></p>
                <p></p>
                <p></p>
                <a href="#" class="btn">Learn More</a>

            </div>
           </section>
           <!-- Products -->
<section class="products" id="products">
    <div class="heading">
        <h2>Our popular products</h2>
    </div>
    <!-- Container -->
    <div class="products-container">
        <div class="box">
            <img src="product/WhatsApp Image 2024-09-02 at 19.48.58_2d6952e7.jpg" alt="">
            <div class="content">
                <span>$25</span>
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <img src="product/WhatsApp Image 2024-09-02 at 19.48.59_43ea91d3.jpg" alt="">
            <div class="content">
                <span>$29</span>
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <img src="product/WhatsApp Image 2024-09-02 at 19.48.59_d25e4261.jpg" alt="">
            <div class="content">
                <span>$15</span>
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <img src="product/WhatsApp Image 2024-09-02 at 19.49.00_d926aba6.jpg" alt="">
            <div class="content">
                <span>$22</span>
                <a href="#">Add to cart</a>
            </div>
        </div>
        <div class="box">
            <img src="product/WhatsApp Image 2024-09-02 at 19.49.00_e18d7dc6.jpg" alt="">
            <div class="content">
                <span>$26</span>
                <a href="#">Add to cart</a>
            </div>
        </div>
    </div>  
</section>

<!-- Popup Overlay -->
<div id="popup-overlay" class="popup-overlay">
    <div class="popup-content">
        <span id="popup-close" class="popup-close">&times;</span>
        <img id="popup-img" src="" alt="Popup Image">
    </div>
</div>

<script>
    // JavaScript for image popup
    const boxes = document.querySelectorAll('.products-container .box img');
    const popupOverlay = document.getElementById('popup-overlay');
    const popupImg = document.getElementById('popup-img');
    const popupClose = document.getElementById('popup-close');

    boxes.forEach(box => {
        box.addEventListener('click', () => {
            popupImg.src = box.src;
            popupOverlay.style.display = 'flex';
        });
    });

    popupClose.addEventListener('click', () => {
        popupOverlay.style.display = 'none';
    });

    // Close popup when clicking outside of the image
    popupOverlay.addEventListener('click', (event) => {
        if (event.target === popupOverlay) {
            popupOverlay.style.display = 'none';
        }
    });
</script>
            <!-- Customers -->
             <section class="customers" id="customers">
                <div class="heading">
                    <h2>Our customer's</h2>
                </div>
                <!-- Container -->
                 <div class="customers-container">
                    <div class="box">
                        <div class="stars">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                      </div>
                      <p></p>
                      <h2>Yasin Arfat</h2>
                      <img src="User image/cesar-rincon-XHVpWcr5grQ-unsplash.jpg" alt="">
                    </div>
                    <div class="box">
                        <div class="stars">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                      </div>
                      <p></p>
                      <h2>Yasin Arfat</h2>
                      <img src="User image/fatane-rahimi--8kfrn_Tjps-unsplash.jpg" alt="">
                    </div>
                    <div class="box">
                        <div class="stars">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                      </div>
                      <p></p>
                      <h2>Yasin Arfat</h2>
                      <img src="User image/jordi-espinosa-5bJBFSIB3ac-unsplash.jpg" alt="">
                    </div>
                 </div>
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















        
        <!-- Link To Js -->
         <script src="main.js"></script>
    </body>
</html>