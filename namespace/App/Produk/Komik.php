<?php namespace App\Produk;

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= 0, 
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
        $str = "Komik : " . $this->getInfo() . " - ({$this->jmlHalaman}) Halaman.";
        return $str;
    }
    
}