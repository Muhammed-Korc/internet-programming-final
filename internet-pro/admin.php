<?php
   include('config.php');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>Anteka</title>
   <link rel="stylesheet" href="css/admin.css"> 
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
   <nav class="navbar" style="height: 60px;">
      <div class="container" style="background-color: #eee; height:60px;">
<div class="container-fluid" >
    <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" >
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="build/adminsatranc.php">satranc</a>
    <a class="dropdown-item" href="tele/admintele.php">Telefonlar</a>
  </div>
  </div>
</nav>
   <center>
      <div class="main">
            <div class="cont">
            <form action="insert.php" method="post" enctype="multipart/form-data">
               <h2>admin page</h2>
               <input type="text" name="name" id="" placeholder="name"><br><br>
               <input type="text" name="price" id="" placeholder="Fiyat"><br><br>
               <input type="file" name="image" id="file" style="display: none;"><br>
               <label for="file">Bir fotoğraf yükle</label><br><br>
               <button class="btn" name="upload">Ekle</button>
            </form><br>
            <a href="products.php">Değişiklik</a><br>
            <p>Devloper Muhammed Korc</p>
      </div>
      </div>
   </center> 

</body>
</html>