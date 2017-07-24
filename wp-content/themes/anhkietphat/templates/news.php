<?php
/*
  Template Name: News
 */
?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/news.css" type="text/css"/>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-xs-12">
            <div class="header3"><h3>Tin tức</h3></div>

            <?php
            query_posts('post_type=news&post_status=publish&posts_per_page=5&paged=' . get_query_var('paged'));?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="row content-news">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <a href="<?php the_permalink(); ?>"><img class="new-image center-block" width="100%"
                                                                 height="auto"
                                                                 src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>"
                                                                 alt="<?php the_title() ?>"/></a>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>

                        <div><?php the_content('Read on...'); ?></div>

                    </div>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <p>Sorry there are no News to display!</p>
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
