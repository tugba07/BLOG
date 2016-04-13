<?php
include("database\DatabaseConnent.php");
$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$eposta = $_POST['adres'];
$kaydet = mysql_query("insert into register (id,name,surname,mail) values (Null, '$isim', '$soyisim', '$eposta')");
 
 if($kaydet){
      header(sprintf("Location: " .$_SERVER['HTTP_REFERER']));
 }
 else{
     echo "İşlem başarısız..";
     }
 
?>