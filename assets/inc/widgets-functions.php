<?php 
function example_theme_support() {
    remove_theme_support ('widgets-block-editor');
}
add_action('after_setup_theme' , 'example_theme_support');
/* widget assets */ 

function zona_widgets () 
{ 
// widget 1 
register_sidebar(array(
'name' => 'Footer Columna 1',
'id' => 'footer_uno', // le damos id y nombre al footer
'before_widget' => '<div id="%1$s" class="col-12 col-md-4">', // el id es numerico y dinamico, cambia cada vez que se publica.
'after_widget'=> '</div>',
'before_title' => '<class="titulo-menu-footer">',
'after_title'=> '</h5>'
));
// fin widget 1 

// widget 2
register_sidebar(array(
    'name' => 'Footer Columna 2',
    'id' => 'footer_dos', // le damos id y nombre al footer
    'before_widget' => '<div id="%1$s" class="col-12 col-md-4">', 
    'after_widget'=> '</div>',
    'before_title' => '<class="titulo-menu-footer">',
    'after_title'=> '</h5>'
    )); 
// fin widget 2 

// widget 3
register_sidebar(array(
    'name' => 'Footer Columna 3',
    'id' => 'footer_tres', // le damos id y nombre al footer
    'before_widget' => '<div id="%1$s" class="col-12 col-md-4">', 
    'after_widget'=> '</div>',
    'before_title' => '<class="titulo-menu-footer">',
    'after_title'=> '</h5>'
    )); 
// fin widget 3
}
add_action('widgets_init' , 'zona_widgets');