<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/basespotify/assets/modulos/modulo-musica/modulo-musica.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="contenido container ">

    <div class="row mt-4">
                    <ul class="d-flex m-0 p-0 justify-content-between categoria mb-2 ">
                        <li >Playlist de Spotify</li>
                        <li><a href="" class="text-decoration-none">Mostrar Todo</a></li>
                    </ul>

        <?php $active = true;
                $temp = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_per_page = -1; // -1 shows all posts
                $args = array(
                    'post_type' => 'audios',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'paged' => $paged,
                    'posts_per_page' => $post_per_page,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categoria-audios',
                            'field' => 'slug',
                            'terms' => 'playlist', 
                        ),
                    ),
                );
                $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="col-4 col-lg-2 mt-1">
                    <div class="tarjeta d-flex flex-column m-auto">
                        <?php basespotify_post_thumbnail();?>
                    <div class="info mt-3">
                        <h4><?php echo get_the_title();?></h4>
                        <div class="texto"><?php echo the_content();?></div>
                    </div>
                    </div>
                    
                    
                </div>

            
            
        

        
        <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    </div>



</section>
<!------seccion contacto---->