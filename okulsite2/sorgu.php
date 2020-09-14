<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sogru</title>
</head>
<body>
<?php 
    
    $kontrolad= $_POST['kul_adi'];
    $kontrolsifre= $_POST['pass'];  
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

$bul1="SELECT * FROM adminler";
$bul2=$conn->query($bul1);
if($bul2->num_rows>0){
while($bul3=$bul2->fetch_assoc()){
    $adminad=$bul3['kul_adi'];
      $adminsifre=$bul3['password'];

      if($kontrolad==$adminad && $kontrolsifre==$adminsifre)
      {
        header ("Location:adminpaneli.php");
      }
      else{
        header ("Location:login.php");
      }

}
}

  ?>
</body>
</html>