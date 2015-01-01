<?php
header('Content-Type: text/html; charset=utf-8');
if(isset($_POST["isim"])){
    $isim_degiskeni = mysql_real_escape_string($_POST['isim']);
    echo $isim_degiskeni." adlı bir veri gönderdiniz";
}
?>
