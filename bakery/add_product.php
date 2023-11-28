<?php
include("config.php");
$query = "SELECT * FROM products";
$product_name = $_GET["product_name"];
$product_discription = $_GET["product_discription"];
$product_piece = $_GET["product_piece"];
$product_price = $_GET["product_price"];

$query = "INSERT INTO `products`( `product_name`, `product_discription`,`product_piece`, `product_price`) 
VALUES ('$product_name','$product_discription','$product_piece','$product_price')";

$result = mysqli_query($conn,$query);
if ($result) {
    echo "insert";
    header("Location:table_data.php");
}
else{
    echo "no insert";
    header("Location:table_data.php");

}
?>