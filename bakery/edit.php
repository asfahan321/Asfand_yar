<?php
include("config.php");
$id = $_GET["id"];
$edit_query = "SELECT * FROM products where id = '$id'";
$edit_result = mysqli_query($conn,$edit_query);
$row = mysqli_fetch_array($edit_result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <form class="form w-50 mt-5 mx-auto p-3 bg-light rounded-2" action="edit_work.php" method="GET">
        <h1 class="text-center display-5">edit update</h1>
        <input type="hidden" value ="<?php echo $row["id"] ?>" name="id">
        <input  value ="<?php echo $row["product_name"] ?>" placeholder="product name" class="form-control p-1 mt-2" type="text" name="product_name">
        <input  value ="<?php echo $row["product_discription"] ?>" placeholder="product discription" class="form-control p-1 mt-2" type="text" name="product_discription">
        <input  value ="<?php echo $row["product_piece"] ?>" placeholder="product piece" class="form-control p-1 mt-2" type="text" name="product_piece">
       
        <input  value ="<?php echo $row["product_price"] ?>" placeholder="product price" class="form-control p-1 mt-2" type="text" name="product_price">
        <input class="btn btn-warning w-100 mt-5" type="submit" name="submit">
        <a href="table_data.php">view table</a>
    
</body>
</html>