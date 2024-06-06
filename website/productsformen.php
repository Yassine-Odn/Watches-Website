<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>



<div class="content">
    <?php 
     while ($row = $result->fetch_assoc()){
        ?>
     
     <p>
        <?php echo $row ["id"] ?> - <?php echo $row["product_name"] ?>
     </p>
    <?php 
     }
    ?>
</div>


</body>






</html>