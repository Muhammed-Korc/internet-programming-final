<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
        <div class="cont">
    <?php
    if(isset($_POST['submit'])){
        $usern=$_POST['email'];
        $passw=$_POST['pass'];
        if(($usern=="admin")&&($passw=="12345")){
            header('location:admin.php');
        }else{
            echo "<script>alert ('lufen dogru bilgi gir')</script>";
        }
    }
    ?>

                <form action='' method="post">
                <img src='images/giris.png' alt=''><br><br>
                <input type='text' name='email'  placeholder='.....@gmail.com'><br><br>
                <input type='password' name='pass'><br><br>
            <button class="btn btn-success" name='submit' type='submit' style="margin-left: 42%;">Giriş yap</button>  
            </form> 


        </div>
    </div>
</body>
</html>