<?php

spl_autoload_register(function ($class){
    $dir = __DIR__."/src/";
    $class = $dir.substr($class, 13).".php";
    $class = str_replace('\\', '/', $class);
    include $class;
}, true, true);
