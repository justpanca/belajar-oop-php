<?php

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= "ada", 
    $waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ ({$this->waktuMain}) Jam.";
        return $str;
    }
}