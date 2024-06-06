<?php
session_start();

include("connect.php");


$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITAN</title>
    <link rel="stylesheet" href="Style.css">
   
    <link rel="stylesheet" href="bootsrap.min.css">
    <script defer src ="bootstrap.bundle.min.js"></script>
    <script src="javascriptzone.js"></script>

</head>
<body>
    <!-- -->
    <!-- Side panel -->
    <!-- Side panel -->
    <div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <h2 class="sidepanel-title">Shopping Cart</h2>
    <!-- Add cart items here -->
</div>

<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <!-- Add cart items here -->
</div>
    <!-- Navigation Bar -->
    <nav id="navbar">
        <div class="navbar-section navbar-left">
            <!-- Dropdown Menu for Watch Brands -->
            <button onclick="window.location.href='brand.php?brand=rolex';" class="gender-btn">Shop by Brands</button>
            <!-- Men and Women Buttons -->
            <button onclick="window.location.href='category.php?category=Men';" class="gender-btn">Men</button>
            <button onclick="window.location.href='category.php?category=Women';" class="gender-btn">Women</button>
            <button onclick="window.location.href='Homepage.php';" class="gender-btn">Home</button>
        </div>
        <!-- Website Name and logo ------------------------------------------------->
        <div id="brand-logo">
            <img src="logo/logo2.png" alt="Brand Logo" width="73" height="68" >

        </div>
        <!-- Right-aligned items -->
        <div class="navbar-section navbar-right">
            <!-- Search Bar -->
            <input type="text" id="search-bar" placeholder="Search...">
            
            <div id="cart-icon" onclick="openNav()">🛒</div>
            
            <i class="bi bi-cart"></i>
            <!-- Log In and Sign Up Buttons -->
            <?php if (!$isLoggedIn): ?>
                
                
            <button onclick="window.location.href='signup.php';" class="auth-btn">Log In / Sign up</button> 
            <?php else: ?>
                <button onclick="window.location.href='logout.php';" class="auth-btn">Logout</button>
            <?php endif; ?>
           
             <!-- ---------------------------------------------log in/signup--------------------------- -->       
    <!-- ---------------------------------------------log in/signup--------------------------- -->
        </div>            
    </nav>
    <div class="blue-line"></div>
    <main>
    </main>
    
    <video id="video" controls autoplay muted loop >
        <source src="video/watch show.mp4" type="video/mp4"><!-- You can add other video formats like webm, ogg, etc. -->
    </video>
    
    <div class="blue-line"></div>
   <!-- ---------------------------------------------container one--------------------------- -->
 





<div class="blue-line"></div>

    <section>
    
      <div class="background-container-men" >
        <div class="blur-overlay "></div>
      </div>
 
        <div class="container reveal" >
            <h2>Top watches for Men</h2>
         <div class="topcards-container">
            <div class="cardd">
                <img src="watches/3.png" alt="Denim Jeans" style="width:100%">
                <h1>Omega</h1>
                <p class="price">$1990</p>
                <p>latest release </p>
                <p><button>Add to Cart</button></p>
            </div>
            <div class="cardd">
                <img src="watches/1.png" alt="Denim Jeans" style="width:100%">
                <h1>Rolex</h1>
                <p class="price">$1100</p>
                <p>diamond bezel</p>
                <p><button>Add to Cart</button></p>
            </div>
            <div class="cardd">
                <img src="watches/5.png" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
            </div>
            <div class="cardd">
                <img src="watches/4.png" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
            </div>
            <div class="cardd">
                <img src="watches/6.png" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
                <p class="price">$19.99</p>
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
            </div>
         </div>   
        </div>
    
    </section>
    <div class="blue-line"></div>

    <section>
        <div class="background-container-women" >
            <div class="blur-overlay "></div>
        </div>
        <div class="container reveal">
            <h2>Top watches for Women</h2>
            <div class="topcards-container">
                <div class="cardd">
                    <img src="watches/w11.png" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="cardd">
                    <img src="watches/w66.png" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="cardd">
                    <img src="watches/w33.png" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="cardd">
                    <img src="watches/w44.png" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Add to Cart</button></p>
                </div>
                <div class="cardd">
                    <img src="watches/w55.png" alt="Denim Jeans" style="width:100%">
                    <h1>Tailored Jeans</h1>
                    <p class="price">$19.99</p>
                    <p>Some text about the jeans..</p>
                    <p><button>Add to Cart</button></p>
                </div>
            
        </div>
    </section>

    <div class="blue-line"></div>

    <section>
        <div class="background-container-accessories" >
            <div class="blur-overlay "></div>
        </div>
        <div class="container reveal">
            <h2>Variety of Accessories Available</h2>
            <div class="topcards-container">
                
            </div>
            
        </div>
    </section>
    
    <div class="blue-line"></div>

    <!--articles area ------------------------------------------>
    <section class="article-cards">
        
   
        <div class="article-card">
            <a href="article1.html" target="_blank">
                <img src="blogimg/Chopard-Alpine-Eagle-XL-Chrono-1500x1500.jpg" alt="Article 1" class="article-image">
                <div class="article-details">
                    <h1>Alpine Eagle XL</h1>
                    <p>XL Chrono Done in grade 5 titanium<</p>
                </div>
            </a>
        </div>
       
        <div class="article-card">
            <a href="article2.html" target="_blank">
                <img src="blogimg/Ulysse-Nardin-Freak-S-Nomad-1-1500x1500.jpg" alt="Article 2" class="article-image">
                <div class="article-details">
                    <h1>Hand Guilloché Dial</h1>
                    <p>most captivating releases of 2022</p>
                </div>
            </a>
        </div>
    
       <div class="article-card">
  <a href="article3.html" target="_blank">
    <img src="blogimg/ALS_740_055_B05_Datograph_Perpetual_T_Lumen-2-2259x3000.jpg" alt="Article 3" class="article-image">
    <div class="article-details">
      <h1>Article 3 Title</h1>
      <p>Some text about the article...</p>
    </div>
  </a>
</div>


        
    </section>
    <!-- article slider ----------------------------------------------------------------------------------- -->

<!--experimental-------------------------------------------------------------------------->
<!-- Slider container -->
<!------------------------------------------------------------------------------------------>
    
    <div class="blue-line"></div>
    <!--Footer --------------------------------------- -->
    <footer class="site-footer">
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Email: contact@example.com</p>
            <p>Phone: +1 123-456-7890</p>
        </div>
        <div class="footer-section">
            <h3>Support</h3>
            <p>FAQ</p>
            <p>Help Center</p>
        </div>
        <div class="footer-section">
            <h3>Social Media</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
    </footer>
    
    
<script type="text/javascript">
    window.addEventListener('scroll',reveal);
    function reveal (){
        var reveals = document.querySelectorAll('.reveal');
        for(var i = 0 ;i<reveals.length;i++){
            var windowheight = window.innerHeight ; 
            var revealtop=reveals[i].getBoundingClientRect().top ;
            var revealpoint = 150 ; 

            if(revealtop < windowheight - revealpoint){
                reveals[i].classList.add('active');
            }
            else{
                reveals[i].classList.remove('active');
            }
        }
    }
</script>
    <script>
        
    function toggleDropdown() {
        var dropdownContent = document.getElementById("dropdown-content");
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    }

    </script>
    <!--slider logic ----------- -->
  
</body>
</html>
