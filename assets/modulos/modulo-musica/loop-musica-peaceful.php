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
<section class="contenedor-canciones container ">

    <div class="row mb-3">

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
                            'terms' => 'peaceful', 
                        ),
                    ),
                );
                $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <div class="d-flex mb-3 align-items-center ">
                <div class="col col-lg-1 text-center position-relative">
                    <a href="" class="numero"><?php the_field('tipo'); ?></a>
                    <div class="reproducir"><i id="play-button" class="fa-solid fa-play"></i>
                    <audio id="music-player"></audio>
                    <script>
                        const playButton = document.getElementById('play-button');
                        const musicPlayer = document.getElementById('music-player');

                        
                        playButton.addEventListener('click', function() {
                            const musicUrl = '<?php echo get_field('audios_canciones'); ?>';
                            musicPlayer.setAttribute('src', musicUrl);
                            musicPlayer.play();
                        });
                    </script>
                    </div>
                </div>
                
				<div class="col col-lg-4 d-flex p-0 cancion">
                    <div class="img me-2 img-fluid">
                        <?php basespotify_post_thumbnail();?>
                    </div>
                    <div class="d-grid ">   
                        <a href="" class="fw-bold text-light"><?php echo get_the_title();?></a>
                        <a href=""><?php echo get_the_excerpt();?> </a>
                    </div>
                </div>
				<div class="col col-lg-3"><a href=""></a><?php echo the_content();?></a></div>
				<div class="col col-lg-3  d-none d-sm-block"><p><?php the_field('fecha'); ?></p></div>
				<div class="col col-lg-1"><p><?php the_field('duracion'); ?></p></div>
            
            </div>
                
            
        

        
        <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
    </div>



</section>
<!------seccion contacto---->