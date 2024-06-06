<?php require "php/functions.php"?>

<?php 
if(isset($_GET['brand'])){
    $bran = urldecode($_GET['brand']);
}
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name ="description" content ="Enjoy Finest engineered watches">
    <meta name="keywords" content ="Men , Women , Brands">
    <link rel="stylesheet" href="style.css">

    <title>TITAN</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="bootsrap.min.css">
    <script defer src ="bootstrap.bundle.min.js"></script>
</head>
<body>
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
        
        
       
        

        <!-- Right-aligned items -->
        <div class="navbar-section navbar-right">
            <!-- Search Bar -->
            <input type="text" id="search-bar" placeholder="Search...">
            <!-- Cart Icon -->
            <div id="cart-icon" onclick="openNav()">🛒</div>
            <!-- Log In and Sign Up Buttons -->
            
                
                
                <button onclick="window.location.href='signup.php';" class="auth-btn">Log In / Sign up</button> 
                
                    
               
        </div>
      
        
    </nav>

    <div class="blue-line"></div>
    <div> 
    
    </div>
    <main>
    
        <div class="left">
            <div class="section-title">Product Categories</div>
              <?php $brands = getbrands() ?>  
              <?php
              foreach ($brands as $brand) {
                ?>
                <a href="brand.php?brand=<?php echo urlencode($brand['brand']) ?>">
                <?php echo ucfirst($brand['brand'])?>
                </a>
                <?php
              }

              ?>
            
        </div>

        <div class="right">
           
            <div class="section-title"></div>
                <?php $products = getproductsbybrand($bran) ?>
        
          <div class="product">
            

            <?php 
             foreach($products as $product ){

                ?>
                 <a href="product.php?title=<?php echo urldecode($product['title']); ?>" >
              <div class="product-cardd">
                <div class="product-left">
                    <img src="<?php echo "products/{$product ['image']}"?>" alt="">
                </div>
                <div class="product-right">
                    <p class="title">
                        <a href="product.php?title=<?php echo $product ['title'] ?>">
                        <?php echo $product ['title']?>
                        </a>
                    </p>
                    <p class="price">
                    
                    &dollar; <?php echo $product ['price'] ?> 
                    </p>
                    <p class="description">
                    <?php echo $product ['description'] ?>
                    </p>
                    
                </div>
                <button >Add to Cart</button>
                </div>
                </a>
 
                <?php 
             }
            ?>
          
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
    <script src ="javascriptzone.js"></script>
</body>
</html>
