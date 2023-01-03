<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>products</title>
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> 
</head>
<body>
    <style>
       
    </style>
    <center>
    <h3>Tüm ürünler</h3>
    </center>
    <?php
    include('config.php');
    $result=mysqli_query($con,'SELECT * FROM prod');
    while($row=mysqli_fetch_array($result)){
        echo "
        <center>
        
        <main>
        <div class='container'>
        <div class='card' style='width: 18rem;'>
        <img src='$row[image]' class='card-img-top'>
        <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
        <a href='delet.php? id=$row[id]' class='btn btn-danger'>silmek</a>
        <a href='update.php? id=$row[id]' class='btn btn-primary'>değişiklik</a>
        </div>
    </div>
    </div>
    </main>
        </center>
        ";
    }
    ?>

</body>
</html>