<?php

class Produk {
    private  $judul,
             $penulis,
             $penerbit,
             $harga,
             $diskon;

    public function __construct( $judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada" ) 
    {
        // kalau mau memberi nilai default langsung ke constructor nya.
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    // menggunakan setter dan getter memudahkan kita untuk membuat validasi

    public function setJudul($judul) {
        return $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        return $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon ( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon()  {
        return $this->diskon;
    }

    public function setHarga($harga) {
        return $this->harga = $harga;
    }
    
    public function getHarga() {       // kalau di proverty menggunakan private, maka disinilah function disimpan
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

    public function __construct($judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada", 
    $jmlHalaman=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga );

    $this->jmlHalaman = $jmlHalaman;
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

class InfoCetakProduk {
    public function cetak (Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
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
echo "<hr>";

$produk1->setPenulis("sandhika");
echo $produk1->getPenulis();
?>