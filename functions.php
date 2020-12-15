<?php

define('MUNICIPIO_BLUE_PATH', get_stylesheet_directory() . '/');

//Include vendor files
if (file_exists(dirname(ABSPATH) . '/vendor/autoload.php')) {
    require_once dirname(ABSPATH) . '/vendor/autoload.php';
}

require_once MUNICIPIO_BLUE_PATH . 'library/Vendor/Psr4ClassLoader.php';
$loader = new MUNICIPIO_BLUE\Vendor\Psr4ClassLoader();
$loader->addPrefix('MunicipioBlue', MUNICIPIO_BLUE_PATH . 'library');
$loader->addPrefix('MunicipioBlue', MUNICIPIO_BLUE_PATH . 'source/php/');
$loader->register();

new MunicipioBlue\App();
