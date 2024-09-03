<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= 0, 
                               ) 
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

    public function getInfoProduk() {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;

    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada", 
    $jmlHalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga );

    $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - ({$this->jmlHalaman}) Halaman.";
        return $str;
    }
    
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada", 
    $waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ ({$this->waktuMain}) Jam.";
        return $str;
    }
}

class CetakinfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("naruto", "masashi", "shonen", 100000, 100);
$produk2 = new Game("goku", "akira", "jump", 200000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

?>