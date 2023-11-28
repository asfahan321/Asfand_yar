<?php
include("config.php");
$query = "SELECT * FROM products";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <table class = "table table-borderd p-2 w-50 mx-auto mt-5 bg-secondary text-light">
        <thead>
            <tr>
                <th>name</th>
                <th>discription</th>
                <th>piece</th>
                <th>price</th>
                <th>edit</th>
                <th>delete</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while($data = mysqli_fetch_assoc($result)){
                ?>
                <tr class = "bg-warning">
                <td><?php echo $data ["product_name"]; ?></td>
                <td><?php echo $data ["product_discription"]; ?></td>
                <td><?php echo $data ["product_piece"]; ?></td>
                <td><?php echo $data ["product_price"]; ?></td>
                <td><a  onclick="return confirm('are you sure data edit')" href="edit.php?id=<?php echo $data["id"]; ?>" >edit</a></td>
                <td><a onclick="return confirm('are you sure data delete')" href="delete.php?id=<?php echo $data ["id"]?>">delete</a></td>
                
                

                
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <a href="product_form.php">back</a>

</body>
</html>