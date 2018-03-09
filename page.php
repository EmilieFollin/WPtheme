<?php
/*
Template Name: Articles
*/
?>
<?php get_header(); // inclu le template partiel ?>

    <div class="container">

        <div class="row">



                <div id="article">

                    <?php get_template_part('loop'); ?>
                </div>


        </div>


    </div>

<?php get_footer(); ?>

