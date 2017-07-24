<?php

get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php if( have_posts() ) :
                    while( have_posts() ) : the_post(); ?>
                        <!--<h1 class="entry-title"><?php /*the_title(); */?></h1>-->
                        <div class="entry-content">
                            <?php the_content(); ?>

                        </div><!-- entry-content -->
                    <?php endwhile; else : endif; ?>

            </div>
            <?php /*get_sidebar();*/?>
            <div class="clear"></div>
        </div><!-- .page_content -->
    </div><!-- .container -->
<?php get_footer(); ?>