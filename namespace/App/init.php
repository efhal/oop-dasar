<?php
spl_autoload_register(function ($class) {

    $explode_class = explode("\\", $class);
    $folder = $explode_class[1];
    $end = end($explode_class);
    require_once __DIR__.'/'.$folder.'/' . $end . '.php';
});
