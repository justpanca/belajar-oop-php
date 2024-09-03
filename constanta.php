<?php
// define tidak bisa disimpan dalam class dan hanya bisa dipakai di paling atas/secara global saja
// define('NAMA', 'Panca');
// echo 'NAMA';

// echo "<br>";

// const bisa disimpan didalam class maka dari itu OOP cenderung memakai const daripada define
// const UMUR = 32;
// echo UMUR;

// echo "<hr>"

class Coba {
    const NAMA = "sandhika";

}

echo Coba::NAMA;
?>