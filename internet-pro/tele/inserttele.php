<?php
include('../config.php');
if(isset($_POST['tele'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMG=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="images/".$image_name;
    $sql="INSERT INTO telefonlar(name,price,image)VALUES
    ('$NAME','$PRICE','$image_up')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script>alert ('Başarıyla eklendi')</script>";
    }else{
        echo "<script>alert ('error')</script>";
    }
}


?>
