<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada" ) {
        // kalau mau memberi nilai default langsung ke constructor nya.
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);
// echo "<br>";

// $produk2 = new Produk();
// $produk2->judul = "";
// $produk2->tahun = "2020"; // jika tidak ada di property maka otomatis ditambahkan
// var_dump($produk2);
// echo "<br>";


$produk1 = new Produk("naruto", "masashi", "shonen", 100.000 );
$produk2 = new Produk("goku", "akira", "shonen", 200.000 );
// $produk3->judul = "naruto";
// $produk3->penulis = "masashi kishimoto";
// $produk3->penerbit = "shonen jump";
// $produk3->harga = 100.000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Manga : " . $produk2->getLabel();

?>