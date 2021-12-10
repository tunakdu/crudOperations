<?php

// ! Github: tunakdu

// ! https://medium.com/@akduhant

// ! Crud İşlemleri Örnek Çalışmasıdır.

$sunucuAdi = "localhost";
$kullaniciAdi = "root";
$sifre = "";
$veritabaniAdi = "kitaplik";
try {
$pdo = new PDO("mysql:host=$sunucuAdi;dbname=$veritabaniAdi", $kullaniciAdi, $sifre);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "Baglanti Hatali: " . $e->getMessage();
}