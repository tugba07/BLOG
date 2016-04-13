<?PHP
$link = mysql_connect("localhost", "root", "");
 
$db = mysql_select_db("blog", $link);
if($db){
	echo "Veritabanına bağlantı ";
    }
else {
        echo "Veritabanına bağlantı sağlanamadı";
    }
?>