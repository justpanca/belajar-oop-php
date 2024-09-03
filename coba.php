<?php

class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga;
      
    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "naruto";
var_dump($produk1);
echo "<br>";

$produk2 = new Produk();
$produk2->judul = "";
// $produk2->tahun = "2020"; // jika tidak ada di property maka otomatis ditambahkan
var_dump($produk2);
echo "<br>";


$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = "100.000";

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getlabel();

?>