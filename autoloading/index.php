<?php

require_once 'App/init.php';

$produk1 = new Komik("naruto", "masashi", "shonen", 100000, 100);
$produk2 = new Game("goku", "akira", "jump", 200000, 50);

$cetakProduk = new InfoCetakProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();