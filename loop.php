<?php
if (have_posts()){
    while(have_posts()){
        the_post(); // Element d'itération automatique à l'element suivant (sinon la boucle infinie bloque sur le 1er element
        ?>
        <h1><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h1>
        <div><?php
            if( is_search()){
                echo 'auteur : ' . get_the_author();
            }

            if( is_single()){
                the_content();
            } else {
                the_excerpt();
            }

            ?></div>

        <?php
    }
}
?>