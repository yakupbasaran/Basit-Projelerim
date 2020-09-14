<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpaneli</title>
    <style>
        .form1{
            border:1px solid;
            width:70%;
            height:400px;
            position:relative;
            float:center;
            background-color:#395870;
            box-shadow: 3px 3px 4px #000;
            font-size:20px;
            color:white;
        }
        .btn{
          width:100px;
          height:100px;
          color:#395870;
          border-radius:50%;
          font-weight: bold;
          font-size:20px;
          margin-top:50px;
          box-shadow: 3px 3px 4px #000;
        }
        .yazılar1{
            margin:50px;
        }

    </style>
</head>
<body>
    <div style="color:white; background-color:#395870; width:100%; height:100px; text-align:center; padding-top:50px; font-weight:bold; font-size:40px;"> ADMİN PANELİNE HOŞGELDİNİZ </div>
<form class="form1" action="adminpaneli.php" method="post" style="margin:auto; margin-top:50px; width:50%;  text-align:center;">
<div class="yazılar1">
    <h1> DUYURU </h1>
Başlık Ekleyiniz : <input class="baslik" type="text" name="ekleduyurubaslik"><br>
İçerik Ekleyiniz : <input type="text" class="icerik" name="ekleduyuruicerik"><br>
    
<input class="btn" type="submit" value="EKLE">
<a href="http://localhost/okulsite2/index.php" style="color:white; font-size:20px; font-weight:bold; text-decoration:none;  margin:10px;"> Anasayfa </a>
</form></div>


<form class="form1" action="adminpaneli.php" method="post" style="margin:auto; margin-top:50px; width:50%;  text-align:center">
<div class="yazılar1">
    <h1> HABER </h1>
Başlık Ekleyiniz : <input class="baslik" type="text" name="eklehaberbaslik"><br>
İçerik Ekleyiniz : <input type="text" class="icerik" name="eklehabericerik"><br>
    
<input class="btn" type="submit" value="EKLE">
<a href="http://localhost/okulsite2/index.php" style="color:white; font-size:20px; font-weight:bold; text-decoration:none; text-decoration:none;  margin:10px;"> Anasayfa </a>
</form></div>


<form class="form1" action="adminpaneli.php" method="post" style="margin:auto; margin-top:50px; width:50%;  text-align:center">
<div class="yazılar1">
    <h1> ETKİNLİK </h1>
Başlık Ekleyiniz : <input class="baslik" type="text" name="ekleetkinlikbaslik"><br>
İçerik Ekleyiniz : <input type="text" class="icerik" name="ekleetkinlikicerik"><br>
    
<input class="btn" type="submit" value="EKLE">
<a href="http://localhost/okulsite2/index.php" style="color:white; font-size:20px; font-weight:bold; text-decoration:none; text-decoration:none;  margin:10px;"> Anasayfa </a>
</form></div>

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
//DUYURU
$eklenenbaslik=$_POST['ekleduyurubaslik'];
$eklenenicerik=$_POST['ekleduyuruicerik'];
if(!empty($eklenenbaslik) && !empty($eklenenicerik)){
$ekle="INSERT INTO duyurular(baslik,icerik) VALUES ('$eklenenbaslik','$eklenenicerik')";
$sonuc=mysqli_query($conn,$ekle);            
// Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
if($sonuc){
    
}else{
    
}
}
//DUYURU



//HABER
$eklenenbaslik1=$_POST['eklehaberbaslik'];
$eklenenicerik1=$_POST['eklehabericerik'];
if(!empty($eklenenbaslik1) && !empty($eklenenicerik1)){
$ekle="INSERT INTO haberler(baslik,icerik) VALUES ('$eklenenbaslik1','$eklenenicerik1')";
$sonuc=mysqli_query($conn,$ekle);            
// Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
if($sonuc){
    
}else{
    
}
}
//HABER


//ETKİNLİK
$eklenenbaslik2=$_POST['ekleetkinlikbaslik'];
$eklenenicerik2=$_POST['ekleetkinlikicerik'];
if(!empty($eklenenbaslik2) && !empty($eklenenicerik2)){
$ekle="INSERT INTO etkinlikler(baslik,icerik) VALUES ('$eklenenbaslik2','$eklenenicerik2')";
$sonuc=mysqli_query($conn,$ekle);            
// Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
if($sonuc){
    
}else{
    
}
}
//ETKİNLİK
?>


</body>
</html>