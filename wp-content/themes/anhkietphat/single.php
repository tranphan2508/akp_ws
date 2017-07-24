<?php

get_header(); ?>

    <div class="container">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="header3"><h3><?php the_title() ?></h3></div>
                        <div class="text-center">
                            <img class="img-responsive center-block" width="auto" height="auto" style="max-height: 400px"
                                                                     src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="<?php the_title() ?>"/>
                        </div>
                        <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?>
                    <?php /*get_sidebar();*/ ?>
                </div>

                <div class="col-sm-3 col-xs-12">
                    <div class="header3"><h3>Dự án</h3></div>

                </div>
            </div>


            <div class="clear"></div>
        <!-- page_content -->
    </div><!-- container -->
<?php get_footer(); ?>