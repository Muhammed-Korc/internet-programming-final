<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">  
<center><h1>sepetim</h1>
</center>
<style>
    main{
        width: 50%;
        margin-top: 30px;
    }table{
        box-shadow: 1px 1px 10px silver;
    }thead{
        background-color: #3498db;
        color: white;
        text-align: center;
    }tbody{
        text-align: center;
    }
    @media (max-width:768px){
        main{
            width: 100%;
        }
    }
</style>
    <?php
    include('../config.php');
    $result=mysqli_query($con,"SELECT * FROM card_satranc");
    while($row=mysqli_fetch_array($result)){
        echo"    <center>
        <main>
            <div class='container'>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>adi</th>
                            <th scope='col'>fiyat</th>
                            <th scope='col'>silmek</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>Silmek</a></td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </main>
    </center>
    ";
    }
    
    ?>
    <a href="index.php" class="btn btn-primary" style="margin-left: 41%;">Ürünler sayfasına dön</a>
</div>  
</body>
</html>