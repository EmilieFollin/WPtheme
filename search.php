
        <?php get_header(); // inclu le template partiel ?>

        <div class="container">

            <div class="row">

                <div class="col-sm-7">

                    <div id="article">

                        <h2> <?php echo 'Résultats de la recherche pour : '  . get_search_query() ; ?> </h2>

                        <?php get_template_part('loop'); ?>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>


        </div>

        <?php get_footer(); ?>

