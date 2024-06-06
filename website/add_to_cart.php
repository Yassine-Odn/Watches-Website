<?php 

// PHP script (add_to_cart.php) to handle adding products to the cart
session_start();
require 'php/functions.php'; // Make sure to include your database functions

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $productId = $_POST['id'];
    $product = getProductById($productId); // Assume getProductById is a function that retrieves product details by ID

    // Add the product to the session cart array
    $_SESSION['products'][] = $product;

    // Generate the new side panel content
    $cartHtml = '';
    foreach ($_SESSION['products'] as $product) {
        $cartHtml .= '<div>' . htmlspecialchars($product['name']) . ' - $' . htmlspecialchars($product['price']) . '</div>';
    }

    // Return the new cart HTML
    echo $cartHtml;
}
?>
