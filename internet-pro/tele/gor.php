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
    $result=mysqli_query($con,"SELECT* FROM telefonlar where id='$ID'");
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
        Mütevazı bir ofiste, hırslı İskoç mühendis ve mucit Graham Bell ile 1876'da tüm dünyada iletişim kavramını değiştirecek olan #telefon doğdu. Telefonun Graham Bell tarafından icadı birçok tarihçi tarafından sorgulanıyor ve İtalyan Antonio Meucci'ye itibar ediliyor.. Zaten telefon ilk çağına başladığında akıllı değildi.

1876'da yan odada bulunan asistanıyla iletişim kurmayı başaran Alexander Graham Bell'in ofisinde hevesli bir iletişimci olarak başladı.

O zamanlar, telefonun küresel bir iletişim ağına dönüşeceğini asla beklemiyordu.Ağ genişledi ve onunla birlikte olasılıklar ve olasılıklar dünyası. 1973 yılında ilk cep telefonu ortaya çıktı, ancak seksenli yıllara kadar bugün 10 bin dolara eşdeğer bir fiyatla pazara girmedi ve iş adamları ve politikacıların tasarrufundaydı.

Cep telefonlarının büyük ve ağır olması ve çok fazla enerji tüketmesi, sinyali kaybetmemek için kullanıcıyı görüşme sırasında aynı yerde kalmaya zorladı.

Doksanlı yılların ortalarında IBM, bilgisayar yazılımıyla donatılmış ve internete bağlı ilk akıllı telefon olarak kabul edilen telefonu piyasaya sürdü, ancak pili yalnızca ağ kullanıldığında bir saat içinde bitiyordu.

Bu noktadan itibaren geliştirme ve geliştirme adımları hızlanmaya başlamış ve cep telefonu çok kullanımlı bir cihaz haline gelmiştir.

Bu dönüşüm, 2007 yılında “iPhone”un duyurulduğu sözde “teknik sanayi devrimi”ne yol açmış, telefon ve iletişimin özelliklerini sonsuza dek değiştirmiştir.
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