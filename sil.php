<?php
include 'veritabani.php';

$veriID = $_GET["id"];


$veriSil = $pdo -> prepare("delete from romanlar where id=:id");
$veriSil -> bindParam(":id",$veriID);
$veriSil -> execute();

echo "Ürün başarıyla silindi.";
?>