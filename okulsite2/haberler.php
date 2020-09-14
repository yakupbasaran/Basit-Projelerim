<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haberler</title>

<style>

#HABERLER{
    width:100%;
    height:150px;
    background-color:#395870;
    color:white;
    
}
.disalan{
    border:1px solid;
    width:25%;
    height:400px;
    position:relative;
    float:left;
    margin:50px;
    box-shadow: 3px 3px 4px #000;
}
.header{
text-align:center;
background-color:#395870;
color:white;
width:auto;
height:80px;
font-size:20px;
padding-top:5px;
}
.content{
    text-align:center;
    font-size:18px;
}

</style>
</head>
<body>
<div id="HABERLER"> 
    <p style="font-size:50px;
   margin:auto; text-align:center; padding-top:50px;"> HABERLER </p>
</div>
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
$bul="SELECT * FROM haberler";
$kayit=$conn->query($bul);
if($kayit->num_rows>0){
while($satir=$kayit->fetch_assoc()){
    while($satir["id"]<"SELECT MAX(id) FROM haberler "){
      $baslikk=$satir["baslik"];
      $icerikk=$satir["icerik"];
      echo "
      <div class='disalan'> 
      <div class='header'><h3> $baslikk </h3> </div><br>
      <div class='content'><p> $icerikk </p></div>
      </div>
      ";
 $cakma=$satir["id"];
    $cakma--;
    $satir["id"]=$cakma;
   }
  }
}
//Veri çekilen kısım.
$conn->close();
?>
</body>
</html>