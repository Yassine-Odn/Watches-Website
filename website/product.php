<?php require "php/functions.php"?>
<?php 
if(isset($_GET['title'])){
    $title = urldecode($_GET['title']);
    $product = getproductbytitle($title);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name ="description" content ="<?php echo $product[0]['meta_description']  ?>">
    <meta name="keywords" content ="<?php echo $product[0]['meta_keywords']  ?>">
    <link rel="stylesheet" href="style.css">

    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="bootsrap.min.css">
    <script defer src ="bootstrap.bundle.min.js"></script>
    
    <script src="javascriptzone.js" defer></script>
</head>
<body>
    
   

    
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
        
        
        
        

        <!-- Right-aligned items -->
        <div class="navbar-section navbar-right">
            <!-- Search Bar -->
            <input type="text" id="search-bar" placeholder="Search...">
            <!-- Cart Icon -->
            <div id="cart-icon">🛒</div>
            <!-- Log In and Sign Up Buttons -->
           
                
                
                <button onclick="window.location.href='signup.php';" class="auth-btn">Log In / Sign up</button> 
              
        </div>
      
        
    </nav>

    <div class="blue-line"></div>
    <div> 
    
    </div>
    <main>
    
        <div>
        </div>
   
     <div class="product-page-details">
        
      <div class="right">
           
        <div class="product-page-title"></div>
                
        
            <div class="product-page-right">
    
              <div class="product-page-card">
                <div class="product-left">
                    <img src="<?php echo "products/{$product[0]['image']}"?>" alt="">
                </div>
                <div class="product-page-right">
                    <p class="product-page-title">
                       
                        <?php echo $product[0]['title']?>
                        
                    </p>
                    <p class="product-page-price">
                    
                    &dollar; <?php echo $product[0]['price'] ?> 
                    </p>
                    <div class="product-cardd">
                    <button >Add to Cart</button> 
                    </div>
                    <p class="product-page-description">
                    <?php echo $product[0]['meta_description'] ?>
                    </p>
                    
                </div>
               </div> 
 
          
            </div>
            <div class="space-between"></div>
            <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
     
      <!-- HTML structure -->
      <div class="carousel">
      <img src="<?php echo "product_variants/{$product[0]['image1']}"?>" alt="">
      <img src="<?php echo "product_variants/{$product[0]['image2']}"?>" alt="">
      <img src="<?php echo "product_variants/{$product[0]['image3']}"?>" alt="">
      <img src="<?php echo "product_variants/{$product[0]['image4']}"?>" alt="">
      <img src="<?php echo "product_variants/{$product[0]['image5']}"?>" alt="">
        
       <!-- <img src="images/2.jpg" alt="img" draggable="false"> -->
      </div>

<!-- The Modal -->

      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    
        </div>
   
            
    
</main>

 

 <section>

 </section>

    
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
   
    <div class="popup-container">
   <div class="popup-background"></div>
   <img src="" alt="" class="popup-image">
   <span class="close-button">×</span>
</div>


   
</body>
</html>
