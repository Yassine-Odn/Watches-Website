
<?php 
session_start();
require "php/functions.php"?>

<?php 
if(isset($_GET['category'])){
    $cat = urldecode($_GET['category']);
}
?>
<?php 
if(isset($_GET['brand'])){
    $bran = urldecode($_GET['brand']);
}
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
    <script src="javascriptzone.js"></script>

</head>
<body>
    <!-- Side panel -->
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <h2 class="sidepanel-title">Shopping Cart</h2>
    <!-- Add cart items here -->
    <?php 
$product = [
    'id'=> 1,
    'name'=> 'Product A',
    'image'=> '',
];
$_SESSION['products'][]=$product ;

?>

</div>

<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <!-- Add cart items here -->
</div>
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <h2 class="sidepanel-title">Shopping Cart</h2>
    <div id="side-panel-product-details">
        <p>Title: <span id="side-panel-product-title"></span></p>
        <p>Price: <span id="side-panel-product-price"></span></p>
        <p>Description: <span id="side-panel-product-description"></span></p>
    </div>
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
            <!-- Side panel -->


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
              <?php $categories = getcategories() ?>  
              <?php
              foreach ($categories as $category) {
                ?>
                <a href="category.php?category=<?php echo urlencode($category['category']) ?>">
                <?php echo ucfirst($category['category'])?>
                </a>
                <?php
              }

              ?>
            
        </div>

        <div class="right">
           
            <div class="section-title"></div>
                <?php $products = getproductsbycategory($cat) ?>
        
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
                        <a href="product.php?title=<?php echo urldecode( $product ['title']) ?>">
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
                <!-- Add data attributes to your button -->
               
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
    <!--slider logic ----------- -->
    <script src ="javascriptzone.js"></script>
</body>
</html>
