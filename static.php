<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        // di static tidak perlu instanisasi, jadi tidak perlu memakai this->
        return "halo" . self::$angka . " kali."; 
    }

    // nilai dari object akan selalu sama meskipin di instansiasi berkali-kali

}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo()
?>