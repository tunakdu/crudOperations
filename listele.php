<?php
// ! Github: tunakdu

// ! https://medium.com/@akduhant

// ! Crud İşlemleri Örnek Çalışmasıdır.

include "veritabani.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Veri Listeleme İşlemi</title>
</head>

<body>
     <table>
          <tr>
               <th>id ----</th>
               <th>Roman Adı -----</th>
               <th>Roman Yazarı----</th>
               <th>Güncelleme----</th>
               <th>Sil</th>
          </tr>
          <?php
          $veriGetir = $pdo -> prepare("select * from romanlar");
          $veriGetir -> execute();
          $veriler = $veriGetir -> fetchAll();
          foreach($veriler as $veri){
          ?>
          <tr>
               <td><?=$veri["id"]?></td>
               <td><?=$veri["romanAdi"]?></td>
               <td><?=$veri["romanYazari"]?></td>
               <td><a href="guncelle.php?id=<?=$veri["id"]?>">Güncelle</a></td>
               <td><a href="sil.php?id=<?=$veri["id"]?>">Sil</a></td>
          </tr>
          <?php
          }
          ?>
     </table>
</body>

</html>