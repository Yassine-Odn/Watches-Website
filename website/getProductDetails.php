<?php
require "php/functions.php";

if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $product = getProductById($productId);
    echo json_encode($product);
}
?>
