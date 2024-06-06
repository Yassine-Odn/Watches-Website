<?php require "config.php";

function dbconnect(){
    $mysqli = new mysqli(SERVER ,USERNAME,PASSWORD,DATABASE);
    if($mysqli->connect_errno != 0)
    {
        return FALSE; 
    }else{
        return $mysqli ;
    }
}
function getcategories(){
    $mysqli =dbconnect();
    $result = $mysqli -> query("SELECT DISTINCT category FROM products");
    while($row =$result->fetch_assoc()){
        $categories[]=$row ;

    }
    return $categories ;
}

function gethomepageproducts($int){
$mysqli =dbconnect();
$result = $mysqli->query("SELECT * FROM products ORDER BY rand() LIMIT $int");
while($row = $result ->fetch_assoc()){
    $data []=$row ;
}
return $data ; 
}
function getproductsbycategory ($category){

    $mysqli = dbConnect();
   $stmt = $mysqli->prepare("SELECT * FROM products WHERE category = ?");
   $stmt->bind_param("s", $category);
   $stmt->execute();
   $result = $stmt->get_result();
   $data = $result->fetch_all(MYSQLI_ASSOC);
   if(count($data) == 0){
      header("Location: category.php");
      exit();
   }else{
      return $data;
   }
}
function getproductbytitle($title){
    $mysqli = dbConnect();
    $stmt = $mysqli->prepare("SELECT * FROM products WHERE title = ?");
    $stmt->bind_param("s", $title);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    return $data;

}




function getProductById($productId) {
    $mysqli = dbConnect();
    $stmt = $mysqli->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    return $product;
}






/*experimental -----------------------------------------------------*/ 
function getbrands(){
    $mysqli =dbconnect();
    $result = $mysqli -> query("SELECT DISTINCT brand FROM products");
    while($row =$result->fetch_assoc()){
        $brands[]=$row ;

    }
    return $brands ;
}


function getproductsbybrand ($brand){

$mysqli = dbConnect();
   $stmt = $mysqli->prepare("SELECT * FROM products WHERE brand = ?");
   $stmt->bind_param("s", $brand);
   $stmt->execute();
   $result = $stmt->get_result();
   $data = $result->fetch_all(MYSQLI_ASSOC);
   if(count($data) == 0){
      header("Location: category.php");
      exit();
   }else{
      return $data;
   }
}



