<?php
include('../config.php');
$ID=$_GET['id'];
mysqli_query($con,"DELETE FROM card_satranc where id='$ID'");
header('location:card.php');
?>