<?php
include("config.php");
$id = $_GET["id"];
$product_name = $_GET["product_name"];
$product_discription = $_GET["product_discription"];
$product_piece = $_GET["product_piece"];
$product_price = $_GET["product_price"];

$edit_query = "UPDATE `products` SET `product_name`='$product_name',`product_discription`='$product_discription',
`product_piece`='$product_piece',`product_price`='$product_price' where id = '$id'";

// $edit_result = mysqli_query($conn,$edit_query);
$edit_result = mysqli_query($conn,$edit_query);

if($edit_result){
    echo "value update";
    header("Location: table_data.php");
}
else {
    echo "not update";
    
}
?>