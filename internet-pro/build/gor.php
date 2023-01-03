<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .card img{
            width: 66.67%;
            height: 400px;
        }.card h5{
            font-size: 28px;
        }.card p{
            font-size: 18px;
            font-weight: bold;
        }
        h3{
            background-color: #eee;
        }
        @media (max-width:768px){
            .card img{
                width: 100%;
            }
        }
    </style>
    <div class="cont">
        <div class="container">
    <?php
        include('../config.php');
        $ID=$_GET['id'];
    $result=mysqli_query($con,"SELECT* FROM satranc where id='$ID'");
    while($row=mysqli_fetch_array($result)){
        echo "
        <center
        <div class='container'>
        <div class='card' >
        <img src='$row[image]' class='card-img-top'  width='100%' height='200px'>
        <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
        <h3>
        Satrancın kökeni hakkında birçok teori vardı ve görüşler farklıydı ve bazı tarihçilerin satrancı icat etme fikrini Hz. Süleyman, Tutankhamun'un mezarının bulunmasından ve taşları ile birlikte Senet tahtasının bulunmasından sonra satrancın Firavun kökenli olduğunu ileri sürenler vardır, hatta Mezopotamya uygarlıklarına bir tarih atfedildiğinde daha da ileri gidenler vardır. kazılarında kakmalı bir satranç tahtası bulduktan sonra MÖ iki bin yıl öncesine, hatta satranç tarihçisi Duncan Forbes'in onu Hindistan'a atfettiğinden daha da ileri, ancak tarihi mevcut tarihimizden beş bin yıl öncesine dayanıyor.

Ancak bu ifadelerin geçerliliğini kanıtlayan kesin bir kanıt yoktur.Senet oyununa gelince, satranç oyunundan çok farklıdır ve hareketinde bir tür sopanın (zarın atası) atılması sonucuna bağlıdır. tavla oyununun atası olduğuna inanılır. Bu konuda, The History of Chess 1912 kitabının yazarı Harold Murray, Daniel Fisk'in şu sözlerini aktardı:

    Satrancın tarihi Yedinci yüzyıldan önce herhangi bir ülkede satrancın varlığı, çağdaş veya güvenilir belgesel kanıtlarla kanıtlanamaz... ve o zamandan önceki her şey aşılmaz bir karanlıktır.
    </h3>
        </div>
        </div>
        </div>
        </center>
        ";
    }
    ?>
    </div>
    </div>
</body>
</html>