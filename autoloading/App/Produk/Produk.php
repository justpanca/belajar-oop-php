<?php

abstract class Produk {
    private  $judul,
             $penulis,
             $penerbit,
             $harga,
             $diskon;

    public function __construct( $judul = "ada", $penulis = "ada", $penerbit = "ada", $harga= 0 ) 
    {
        // kalau mau memberi nilai default langsung ke constructor nya.
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

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
    
    public function getHarga() {       // kalau di parentnya menggunakan private, maka disinilah function disimpan
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfo() { // ini yg dipakai oleh child
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
}