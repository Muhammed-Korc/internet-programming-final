<?php
include('../config.php');
$ID=$_GET['id'];
$up = mysqli_query($con,"select * from satranc where id='$ID'");
$data=mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <style>
        input{
       display: none;
        }main{
            width: 30%;
            height: 400px;
            box-shadow: 3px 3px 5px black;
            margin: 0 auto;
        }
        @media (max-width:768px){
            main{
                width: 100%;
            }
        }
    </style>
    <main>
    <div class="container">
        <form action="insert_card.php" method="post">
        <center>Emin misiniz ? </center>
        <center>
        <input type="text" name="id" id="" value="<?php echo $data['id'];?>"><br>
        <input type="text" name="name" id="" value="<?php echo $data['name'];?>"><br>
        <input type="text" name="price" id="" value="<?php echo $data['price'];?>"><br>
        <button type="submit" name="add" class="btn btn-warning">Onayla</button>
        <br>
        <a href="index.php" class="btn btn-primary">Geri don Sayfa</a>
        </form></center>
    </div>
</main>
</body>
</html>