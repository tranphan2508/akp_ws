<?php get_header(); ?>
    <!-- slider -->
    <div class="container-fluid slide-outer">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide1.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide2.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide3.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide4.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide5.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="margin:0"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="margin:0"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class="header3">
                    <h3>Dự án gần đây</h3>
                </div>
                <?php
                query_posts('post_type=projects&post_status=publish&posts_per_page=5&paged=' . get_query_var('paged'));?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-5ths custom-project-list">
                        <div class="pic">
                            <a href="<?php the_permalink(); ?>"><img class="img-responsive center-block" width="100%"
                                                                     height="auto"
                                                                     src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>"
                                                                     alt="<?php the_title() ?>"/></a>
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

        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="header3"><h3>Tin tức</h3></div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="container-fluid slide-outer">
                            <div id="myCarousel2" class="carousel slide col-sm-8" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <?php
                                    query_posts('post_type=news&post_status=publish&posts_per_page=20&paged=' . get_query_var('paged'));?>
                                    <?php if (have_posts()) : $count = 0;
                                        while (have_posts()) : $count++;
                                            the_post(); ?>
                                            <div <?php if ($count == 1) { ?>class="item active" <?php
                                            }
                                            else {
                                            ?>class="item"<?php } ?>>
                                                <div class="itembody col-sm-4">
                                                    <h3><a href="<?php the_permalink(); ?>"> <?php the_title() ?></a>
                                                    </h3>

                                                    <p><?php the_content('Read on...'); ?></p>
                                                </div>

                                                <a class="right col-sm-8" href="<?php the_permalink(); ?>"><img
                                                        class="new-image center-block" width="100%"
                                                        height="auto"
                                                        src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>"
                                                        alt="<?php the_title() ?>"/></a>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <?php
                                query_posts('post_type=news&post_status=publish&posts_per_page=20&paged=' . get_query_var('paged'));?>
                                <?php if (have_posts()) : $count = 0;
                                    while (have_posts()) : $count++;
                                        the_post(); ?>
                                        <div><a class="right col-sm-5"
                                                href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="clear"></div>
    </div><!-- content -->
<?php get_footer(); ?>