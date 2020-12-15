<?php
namespace MunicipioBlue;

class App
{
    public function __construct()
    {
        new \MunicipioBlue\Theme\Enqueue();
    }
}
