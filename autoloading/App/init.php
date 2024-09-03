<?php

function autoload ( $class ) {

}

spl_autoload_register(function($class) {
    require_once 'Produk/' . $class . '.php';
});