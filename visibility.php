<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit;

    protected   $diskon;

    private $harga; // ini private yang dimaksud

    public function __construct( $judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada", 
                                 ) 
    {
        // kalau mau memberi nilai default langsung ke constructor nya.
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    // kalau di proverty menggunakan private, maka disinilah function disimpan
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
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

    public function __construct($judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= 0, 
    $jmlHalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga );

    $this->jmlHalaman = $jmlHalaman;
    }

    public function setDiskon ( $diskon ) {
        $this->diskon = $diskon;
    }

    // public function getHarga() { // bisa memanggil harga di parent karena ini anaknya
    //     return $this->harga;
    // }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - ({$this->jmlHalaman}) Halaman.";
        return $str;
    }
    
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= 0, 
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
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();

?>