<?php
  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>Anteka</title>
   <link rel="stylesheet" href="../css/admin.css"> 
</head>
<body>
   <?php
    include('../config.php');
   $ID=$_GET['id'];
   $up =mysqli_query($con,"Select * from telefonlar where id=$ID");
   $data=mysqli_fetch_array($up);
   ?>
   <center>
      <div class="main">
            <div class="cont">
            <form action="up.php" method="post" enctype="multipart/form-data">
               <h2>Değişiklik page</h2>
               <input type="text" name="id" id="" value="<?php echo $data['id']?>"><br><br>
               <input type="text" name="name" id="" value="<?php echo $data['name']?>" ><br><br>
               <input type="text" name="price" id="" value=" <?php echo $data['price']?>"><br><br>
               <input type="file" name="image" id="file" style="display: none;"><br>
               <label for="file">değişiklik fotoğraf yükle</label><br><br>
               <button class="btn" name="update" type="submit">Ekle değişiklik</button>
            </form><br>
            <a href="products.php">Ana Sayfa</a><br>
            <p>Devloper Muhammed Korc</p>
      </div>
      </div>
   </center>
</body>
</html>