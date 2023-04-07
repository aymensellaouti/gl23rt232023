<?php

function autoload($className) {
    require_once "autoload.php";
}

spl_autoload_register('autoload');