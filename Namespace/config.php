<?php 

spl_autoload_register(function($nameClass))
{
    $dirClass = "class";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
}