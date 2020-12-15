<?php

namespace MunicipioBlue\Theme;

class Enqueue
{
    public function __construct()
    {
        // Enqueue scripts and styles
        add_action('wp_enqueue_scripts', array($this, 'style'));
        //add_action('wp_enqueue_scripts', array($this, 'script'));
    }

    /**
     * Enqueue styles
     * @return void
     */
    public function style()
    {

        /* Removes theme parent theme css */ 
        wp_dequeue_style('styleguide-css'); 
        wp_dequeue_style('municipio-css'); 

        wp_enqueue_style(
            'MunicipioBlue',
            get_stylesheet_directory_uri() .
                        '/assets/dist/' .
                        \Municipio\Helper\CacheBust::name('css/app.css', true),
            array(),
            ''
        );
    }

    /**
     * Enqueue scripts
     * @return void
     */
    public function script()
    {
        wp_register_script(
            'MunicipioBlue-js',
            get_stylesheet_directory_uri() .
                        '/assets/dist/' .
                        \Municipio\Helper\CacheBust::name('js/app.js'),
            array(),
            false,
            true
        );

        wp_enqueue_script('MunicipioBlue-js');
    }
}
