<?php

require_once 'App/init.php';

// $produk1 = new Komik("naruto", "masashi", "shonen", 100000, 100);
// $produk2 = new Game("goku", "akira", "jump", 200000, 50);

// $cetakProduk = new InfoCetakProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();


// echo "<hr>";

// format penulisan package : 
//     namespace Vendor\Namespace\Subnamespace

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

// echo "<br>";
// new App\Produk\User();


