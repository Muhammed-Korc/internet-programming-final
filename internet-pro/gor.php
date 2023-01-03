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
        h2{
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
        include('config.php');
        $ID=$_GET['id'];
    $result=mysqli_query($con,"SELECT* FROM prod where id='$ID'");
    while($row=mysqli_fetch_array($result)){
        echo "
        <center
        <div class='container'>
        <div class='card' >
        <img src='$row[image]' class='card-img-top'  width='100%' height='200px'>
        <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
        <h2>1275 yılında İngiltere'de ilk mekanik saat icat edilmiş ve en eski çalışma saatlerinden biri aslında 1386 yılında tamamlanan ve üzerinde çalışılan Salisbury Katedrali'nde bulunmuştur ve bu saatin şekli yoktur ancak çalarak zamanı gösterir. her saat.] 1]

        13. yüzyılın başında İtalya'da üç mekanik saat inşa edildi.Bu saatlerden biri astronomik, ikincisi her saat başı zili çalıyor ve üçüncüsü saatleri, güneşin doğuşunu ve günleri takip etmede uzmanlaşmış. Zaman geçtikçe, demirciler kasabadaki her ev duyabilene kadar yüksek çanlı saati yapmaya ve inşa etmeye devam ettiler.
        On altıncı yüzyılda daha önce saat yapımında kullanılan demirin yerini bakır, gümüş ve bronz aldı ve geçen yüzyılın kırklı yıllarında İsviçre saati doğdu ve doğum sebebi reformcu John Malvin idi. insanları takı takmaya teşvik eden ve bu mesele kuyumcuları zanaat öğrenmeye zorlayan kimdir? İsviçre'deki reformcu John Malvin ve diğer Hıristiyan din adamlarının beğenisini kazanmak için bu saat bronzdan yapılmıştır.[2]
        </h2>
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