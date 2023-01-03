<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        .card{
            float: left;
            margin-left: 60px;
        }
        @media (max-width:926px){
            .card {
                float: none;
            margin: 0 auto;
            }
        }
        @media(min-width:768px) and(max-width:1280px){
            .card{
            float: left;
            margin-left: 60px;
        }
        }
    </style>
    <div class="container">
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
    <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" >
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="satranc.php">satranc</a>
    <a class="dropdown-item" href="../tele/telefon.php">Telefonlar</a>
  </div>
</div>
    <a class="navbar-brand" href="../login.php">Anteka</a>
    
    <a href="card.php" class="navbar-brand">Sepetim</a>

    </div>
    </div>
</nav>

<hr>
<center>
    <h3>Tüm ürünler</h3>
    </center>
    <?php
    include('../config.php');
    $result=mysqli_query($con,'SELECT * FROM satranc');
    while($row=mysqli_fetch_array($result)){
        echo "

        <div class='container'>
        <div class='card' style='width: 18rem; margin-bottom:50px;'>
        <img src='$row[image]' class='card-img-top'  width='100%' height='200px'>
        <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
        <a href='val.php? id=$row[id]' class='btn btn-success'>Sepete ekle</a>
        <a href='gor.php? id=$row[id]' class='btn btn-primary'>Goster</a>
        </div>
        </div>
        </div>
        ";
    }
    ?>
    
</body>
</html>