<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct( $judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= 0, 
                                $jmlHalaman= 0, $waktuMain=0 ) 
    {
        // kalau mau memberi nilai default langsung ke constructor nya.
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

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
    public function getInfoKomik()
    {
        $str = "Komik : {$this->getInfoProduk()} - ({$this->jmlHalaman}) Halaman.";
        return $str;
    }
    
}

class Game extends Produk {
    public function getInfoGame()
    {
        $str = "Game : {$this->getInfoProduk()} ~ ({$this->waktuMain}) Jam.";
        return $str;
    }
}

class CetakinfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("naruto", "masashi", "shonen", 100000, 100, 0,);
$produk2 = new Game("goku", "akira", "jump", 200000, 0, 50,);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();
echo "<br>";

?>