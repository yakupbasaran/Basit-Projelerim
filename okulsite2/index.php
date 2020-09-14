<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="tema.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
#slider {
    width:700px;
    height:306px;
    } 
    .w-100{
        
        height:550px;
    }
    #duyurualani{
    width:25%;
    height:500px;
    background:tomato;
    border:1px solid;
    position:relative;
    font-size:20px;
    float:right;
    margin-top:200px;
    }
    #footer{
      width:100%;
      height:180px;
      background-color:#395870;
    }
    #duyuru{
      width:25%;
      
      height:400px;
      text-align:center;
      position:relative;
      float:left;
      margin:50px;
    }
    #haber{
      width:25%;
      
      height:400px;
      text-align:center;
      position:relative;
      float:left;
      margin:50px;
    }
    #etkinlik{
      width:25%;
      
      height:400px;
      text-align:center;
      position:relative;
      float:left;
      margin:50px;
    }
   .icon{
     width:100px;
     height:100px;
     margin:auto;
   } 
   .icalan{
     margin:auto;
     width:auto;
     height:300px;
     border:1px solid;
     box-shadow: 3px 3px 4px #000;
     background-color:hsl(38, 39%, 75%);
     padding:10px;
   }

   #hakkımızda{
     width:80%;
     height:800px;
     
     /*background-color:hsl(38, 39%, 75%);*/
     position:relative;
     float:left;
     margin-left: 130px;
   }
   #resim1{
     width:500px;
     height:200px;
    float:center;
    margin-top:50px;
    margin-left:30%;
   }
   #resim2{
     width:500px;
     height:300px;
    float:center;
    margin-top:50px;
    margin-left:33%;
   }
   #hakkımızdaic{
     position:relative;
     float:right;
     margin-top:50px;
     margin-right:20px;
     font-size:15px;
     text-align:center;
   }
   .iletisim1{
     font-size:25px;
     text-align:center;
     margin-top:40px;
   }
   .footericon{
     width:150px;
     height:150px;
     margin-left:180px;
     margin-top:10px;
   }
   #footericon{
    width:140px;
     height:100px;
     margin-left:180px;
     margin-top:10px;
   }
</style>
</head>
<body>
    

<!--MENU ALANI-->
<ul class="nav justify-content-center" style="background-color:#395870; position:fixed; z-index:10; width:100%; height:80px; text-decoration:none; padding-top:25px; ">
  <li class="nav-item">
    <a class="nav-link active" style="color:white; font-size:20px;" href="http://localhost/okulsite2/index.php">Anasayfa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white; font-size:20px;" href="#hakkımızdakısmı">Hakkımızda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white; font-size:20px;" href="#iletişimkısmı">İletişim</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white; font-size:20px;" href="http://localhost/okulsite2/duyurular.php">Duyurular</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white; font-size:20px;" href="http://localhost/okulsite2/haberler.php">Haberler</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:white; font-size:20px;" href="http://localhost/okulsite2/etkinlikler.php">Etkinlikler</a>
  </li>
  <li class="nav-item">
  <div class="dropdown" style="margin:-10px 0px 0px 0px;">
  <button class="dropbtn" style="font-size:20px; background-color:#395870;">Personel</button>
  <div class="dropdown-content">
    <a href="#">Hasan Hüseyin Baş</a>
    <a href="#">Volkan Göreke</a>
    <a href="#">Serap Özen</a>
  </div>
</div>
  </li>
  <li class="nav-item">
  <div class="dropdown" style="margin:-10px 0px 0px 0px;">
  <button class="dropbtn" style="font-size:20px; background-color:#395870;">Öğrenci</button>
  <div class="dropdown-content">
    <a href="https://obs.cumhuriyet.edu.tr/">Öğrenci Bilgi Sistemi(OBS)</a>
    <a href="http://iso.cumhuriyet.edu.tr/">Yabancı Öğrenci(CÜYOS)</a>
    <a href="http://www.cumhuriyet.edu.tr/cengel/index.php">Engelli Öğrenciler Birimi</a>
    <a href="http://www.cumhuriyet.edu.tr/mezun/index.html">Mezun Bilgi Sistemi</a>
  </div>
</div>
  </li>
  <li class="nav-item">
    <button onclick="adminegit()"  style="color:white; font-size:20px; background-color:#395870; margin:1px 0px 0px 4px;"> Personel Giriş </button>
  </li>
</ul>
<!--MENU ALANI-->

<!--CAROUSEl ALANI-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="width:85%; height:500px; margin-left:120px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/okulsite2/g%C3%B6rseller/karosel1.jpg" class="d-block w-100" alt="opss"  style="width:85%; height:500px;">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/okulsite2/g%C3%B6rseller/karosel2.jpg" class="d-block w-100" alt="opss" style="width:85%; height:500px;">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/okulsite2/g%C3%B6rseller/karosel3.jpg" class="d-block w-100" alt="opss" style="width:85%; height:500px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--CAROUSEl ALANI-->




<!--PHP ALANI-->
<?php 
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="okulsite";
$conn=new mysqli($servername,$username,$password,$dbname);
$new=mysqli_set_charset($conn,"utf8");
if($conn->connect_error){
  die("Baglantida bir hata olustu!".$conn->connect_error);
}
//Veri çekilen kısım.
$bul="SELECT * FROM duyurular where id=(SELECT max(id) FROM duyurular)";
$kayit=$conn->query($bul);
if($kayit->num_rows>0){
while($satir=$kayit->fetch_assoc()){
    $duyurubaslik=$satir['baslik'];
      $duyuruicerik=$satir['icerik'];
      }
}

$bull="SELECT * FROM haberler where id=(SELECT max(id) FROM haberler)";
$kayitt=$conn->query($bull);
if($kayitt->num_rows>0){
while($satirr=$kayitt->fetch_assoc()){
    $haberbaslik=$satirr['baslik'];
      $habericerik=$satirr['icerik'];
      }
}

$bulll="SELECT * FROM etkinlikler where id=(SELECT max(id) FROM etkinlikler)";
$kayittt=$conn->query($bulll);
if($kayittt->num_rows>0){
while($satirrr=$kayittt->fetch_assoc()){
    $etkinlikbaslik=$satirrr['baslik'];
      $etkinlikicerik=$satirrr['icerik'];
      $etkinliktarih=$satirrr['tarih'];
      }
}
//Veri çekilen kısım.
$conn->close();
?>
<!--PHP ALANI-->

<!--HAKKIMIZDA KISMI-->
<div id="hakkımızda"> 
<img src="http://localhost/okulsite2/g%C3%B6rseller/cü2.png" id="resim1" alt="Ops!">
<div id="hakkımızdaic"> 
<h5> <a name="hakkımızdakısmı"> HAKKIMIZDA </a> </h5>  
<p> Cumhuriyet Üniversitesinin temelini, 1958’de kurulan Eskişehir İktisadi ve Ticari İlimler Akademisi oluşturur. 1982’de Anadolu Üniversitesine dönüşen kurumumuz, kısa zamanda yalnızca ülkemizin değil dünyanın en büyük üniversiteleri arasında da çağdaş, dinamik ve yenilikçi bir üniversite olarak yerini almıştır. Bilim, kültür aynı zamanda da bir gençlik kenti olarak nitelenen Eskişehir’in merkezinde yer alan kampüs 3'ü açık ve uzaktan öğretim veren 12 Fakülte 1’i Devlet Konservatuvarı olmak üzere 3 Yüksekokul, 2 Meslek Yüksekokulu 6 Enstitü (4’ü yüksek lisans ve doktora düzeyi) ve 30 Araştırma Merkezine ev sahipliği yapmaktadır.

Cumhuriyet Üniversitesi pek çok ilke imza atmış bir üniversitedir. Bu ilklerin başında, uzaktan öğretim sistemini hayata geçirmenin başarısı gelmektedir. Bugün uzaktan öğretim yapan üç fakültenin toplam öğrenci sayısı 2 milyonun üzerindedir. Bu sistemin geliştirilmesinde gösterilen başarı, farklı ülkelerde birçok kuruma örnek olmaktadır.

Cumhuriyet Üniversitesi, en son teknolojik olanaklarla donatılmış bölümlerinde, her biri alanında en iyisi olmaya çalışan ve tüm zamanını öğrencileriyle paylaşan geniş öğretim kadrosuyla öğrencilerini, yaratıcı ve dinamik eğitim ortamlarında geleceğin en iyileri olarak hazırlamak üzere çalışmaktadır.

Cumhuriyet Üniversitesinin güvenli ve çağdaş kampüslerinde bir öğrenci için gerekli olan hemen hemen her olanak bulunmaktadır. 315.00’den fazla basılı kaynağın yanı sıra birçok e-kaynağa da ulaşmanın mümkün olduğu merkez kütüphane, tatil günleri dâhil her gün öğrencilere 24 saat hizmet vermektedir. Ayrıca kütüphane bölgesinde gece 12:00-01:00 saatleri arasında sıcak çorba/çay/kahve ücretsiz olarak öğrencilere ikram edilmektedir. 12.330 m2 alana yayılmış olan merkez kütüphanede, öğrenciler kendi çalışma biçimlerine uygun ortamlarda çalışabilmektedir. Öğrenciler, kampüste bulunan sinema, tiyatro, konser ve sergi salonlarımızda kültürel ve sanatsal etkinlikleri kolayca izleyebilmektedir. Aynı zamanda öğrenciler sanatçılarla yapılan söyleşilere ve etkinliklere katılabilme, kampüste bulunan yarı olimpik yüzme havuzunda, uluslararası standartlarda yapılmış spor salonlarında, tenis kortlarında, yeşil sahalarda her tür sporu yapabilme olanağını bulurken boş zamanlarını da en iyi şekilde değerlendirebilmektedir. Üniversite tarafından öğrenciler için günde üç öğün (sabah kahvaltısı+öğlen+akşam) yemek servisi de sunulmaktadır.

Teknolojik ve bilimsel gelişmelerin izlenmesi, geleceğin şekillenmesinde etkin olacak bireyler yetiştirilmesi ve yaşam boyu öğrenmeye odaklanılarak tüm halkı eğitim sürecine dâhil etme girişimleriyle övünç duyduğumuz Üniversitemiz dünyaya kucak açmaktadır. </p>
</div>

</div>
<!--HAKKIMIZDA KISMI-->


<!--duyurular-->
<div id="duyuru">
<img src="http://localhost/okulsite2/g%C3%B6rseller/duyuru-icon.png" class="icon" alt="Ops!">
<div class="icalan">
<h5 class="duyurubaslik" style="color:hsl(37, 91%, 16%);"> <?php echo $duyurubaslik; ?> </h5>
<p class="duyuruicerik" style="color:hsl(37, 91%, 16%);"><?php echo $duyuruicerik;?> </p>
<p style="float:right; color:white;">Son eklenen duyuru</p>
</div>
</div> 
<!--duyurular-->
<!--haberler-->
<div id="haber">
<img src="http://localhost/okulsite2/g%C3%B6rseller/haber-icon.png" class="icon" alt="Ops!">
<div class="icalan">
<h5 class="duyurubaslik" style="color:hsl(37, 91%, 16%);"> <?php echo $haberbaslik; ?> </h5>
<p class="duyuruicerik" style="color:hsl(37, 91%, 16%);"><?php echo $habericerik;?> </p>
<p style="float:right; color:white;">Son eklenen haber</p>
</div>
</div>
<!--haberler-->
<!--etkinlikler-->
<div id="etkinlik">
<img src="http://localhost/okulsite2/g%C3%B6rseller/etkinlik-icon.png" class="icon" alt="Ops!">
<div class="icalan">
<h5 class="duyurubaslik" style="color:hsl(37, 91%, 16%);"><?php echo $etkinlikbaslik; ?> </h5>
<p class="duyuruicerik" style="color:hsl(37, 91%, 16%);"><?php echo $etkinlikicerik; ?> </p>
<p style="float:right; color:white;"><?php echo $etkinliktarih; ?> </p>
</div>
</div>
<br>
<!--etkinlikler-->

<!--İLETİŞİM KISMI-->
<div id="iletisim"> 
<img src="http://localhost/okulsite2/g%C3%B6rseller/iletişim.png" id="resim2" alt="Ops!">
<div id="iletisimic"> 
 <p class="iletisim1"> Tel: +90 346 219 10 10 </p>
<p class="iletisim1"> Belgegeçer: +90 346 219 11 10 </p>
<p class="iletisim1"> basinyayin@cumhuriyet.edu.tr </p>
<p class="iletisim1"> cumhuriyetuniversitesi@hs01.kep.tr </p>
<p class="iletisim1"> Hastane: +90 346 258 00 00 </p>
<p class="iletisim1"> Adres: Sivas Cumhuriyet Üniversitesi 58140 KAMPÜS/SİVAS </p>
<a name="iletişimkısmı"></a>
</div>
</div>
<!--İLETİŞİM KISMI-->



<!-- AltAlan(footer) -->
<div id="footer"> 
  <a href="https://www.facebook.com/cumunivkurumsal/">
<img src="http://localhost/okulsite2/g%C3%B6rseller/facebook.png" id="footericon" alt="Ops!">
</a>
<a href="https://www.instagram.com/cumunivkurumsal">
<img src="http://localhost/okulsite2/g%C3%B6rseller/instagram.png" class="footericon" alt="Ops!">
</a>
<a href="https://twitter.com/cumunivkurumsal">
<img src="http://localhost/okulsite2/g%C3%B6rseller/twitter.png" class="footericon" alt="Ops!">
</a>
<a href="https://www.youtube.com/user/cumunivkurumsal">
<img src="http://localhost/okulsite2/g%C3%B6rseller/youtube.png" class="footericon" alt="Ops!">
</a>
</div>
<!-- AltAlan(footer) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="java.js"></script>
<script>
function adminegit()
   {
       window.location.href="http://localhost/okulsite2/login.php";
   }
</script>
</body>
</html>