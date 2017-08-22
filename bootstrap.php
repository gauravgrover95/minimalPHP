<?php

/**
* Loads autoloader and twig template configurations
*/

require 'vendor/autoload.php';

$GLOBALS['loader'] = new Twig_Loader_Filesystem( 'public/');
$GLOBALS['twig'] = new Twig_Environment($GLOBALS['loader'], array(
    'cache' => false,
    'debug' => true,
    'auto_reload' => true
));