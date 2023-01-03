<?php
include('../config.php');
$ID=$_GET['id'];
mysqli_query($con,"DELETE  FROM telefonlar where id=$ID");
header('location: products.php');
?>