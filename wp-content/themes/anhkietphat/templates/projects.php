<?php
/*
  Template Name: Projects
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-xs-12">
            <div class="header3"><h3>Dự án</h3></div>

            <?php
            query_posts('post_type=projects&post_status=publish&posts_per_page=9&paged=' . get_query_var('paged'));?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 custom-project-list">
                    <div class="pic">
                        <a href="<?php the_permalink(); ?>"><img class="img-responsive center-block" width="100%" height="auto"
                             src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="<?php the_title() ?>"/></a>
                    </div>
                    <div class="title">
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
                    </div>
                    <!--<div style="border-bottom: 1px solid #ccc;"></div>-->
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <p>Sorry there are no Project to display!</p>
            <?php endif; ?>

            <div class="clear"></div>

            <?php pagination() ?>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="header3"><h3>Phân loại</h3></div>

        </div>
        <div class="clear"></div>
    </div>
</div><!-- content -->
<?php get_footer(); ?>
