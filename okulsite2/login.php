<!DOCTYPE html>
<html>
<head>
    <style>
    *,
    *:before,
    *:after {
       box-sizing: border-box;
    }
    form {
      border: 1px solid #c6c7cc;
      border-radius: 5px;
      font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
      overflow: hidden;
      width: 240px;
      box-shadow: 5px 10px #888888;
    }
    fieldset {
      border: 0;
      margin: 0;
      padding: 0;
    }
    input {
      border-radius: 5px;
      font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
      margin: 0;
    }
    .bilgi {
      padding: 20px 20px 0 20px;
    }
    .bilgi label {
      color: #395870;
      display: block;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .bilgi input {
      background: #fff;
      border: 1px solid #c6c7cc;
       box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
      color: #636466;
      padding: 6px;
      margin-top: 6px;
      width: 100%;
    }
    .islem {
      background: #f0f0f2;
      border-top: 1px solid #c6c7cc;
      padding: 20px;
    }
    .islem .btn {
      background: linear-gradient(#49708f, #293f50);
      border: 0;
      color: #fff;
      cursor: pointer;
      font-weight: bold;
      float: left;
      padding: 8px 16px;
    }
    .islem label {
      color: #7c7c80;
      font-size: 12px;
      float: left;
      margin: 10px 0 0 20px;
    }
    
    </style>
</head>
<body>

<form action="sorgu.php" method="post" style="margin:auto; margin-top:200px; width:50%;  text-align:center">
Kullanıcı Adı : <input type="text" name="kul_adi"><br>
Parola : <input type="password" name="pass"><br>
<input type="submit" value="Giriş">
</form>



</body>
</html>