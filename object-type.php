<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada" ) 
    {
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

class CetakinfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("naruto", "masashi", "shonen", 100000 );
$produk2 = new Produk("goku", "akira", "jump", 200000 );
// $produk3->judul = "naruto";
// $produk3->penulis = "masashi kishimoto";
// $produk3->penerbit = "shonen jump";
// $produk3->harga = 100.000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Manga : " . $produk2->getLabel();
echo "<br>";

$infoproduk1 = new CetakinfoProduk();
echo $infoproduk1->cetak($produk2);

?>