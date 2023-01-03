<?php
include('../config.php');
$ID=$_GET['id'];
mysqli_query($con,"DELETE FROM card_telefonlar where id='$ID'");
header('location:card.php');
?>