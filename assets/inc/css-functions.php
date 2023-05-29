<?php
    function css_base(){

        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' , 'all');
        wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css' , 'all');
        wp_register_style('fuente', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet"', 'all');
        wp_register_style('fuente', 'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet', 'all');
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' , 'all');
        wp_register_style('fontawesome', 'https://kit.fontawesome.com/bd85c815d6.js" crossorigin="anonymous' , 'all');


        
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('estilos');
        wp_enqueue_style('fuente');
        wp_enqueue_style('fontawesome');
    }

    add_action('wp_enqueue_scripts', 'css_base');

