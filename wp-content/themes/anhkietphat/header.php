<!DOCTYPE html>
<html <?php language_attributes(); ?> />

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="profile" href="http://gmgp.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(''); ?> <?php if (!is_home() || !is_front_page()) { ?>id="innerPage"<?php } ?>>
<div class="header">
    <div class="nav-top-panel ">
    <div class="header-inner ">
            <div class="nav-top-panel-content">
            <?php if (!dynamic_sidebar('sidebar-header')): ?>
                    <div class="column-1">
                        <span class="glyphicon glyphicon-map-marker icon-primary"></span>
                        <?php if ('' !== get_theme_mod('head_address')) { ?>
                            <span
                                class="headerphone"><?php echo esc_attr(get_theme_mod('head_address', 'K192/8 Tô Hiệu, Phường Hoà Minh, Quận Liên Chiểu, Đà Nẵng', 'site')); ?></span>
                            <br>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>

                    <div class="column-2">
                        <span class="glyphicon glyphicon-earphone icon-primary"></span>
                        <?php if ('' !== get_theme_mod('head_number')) { ?>
                            <span
                                class="headerphone"><?php echo esc_attr(get_theme_mod('head_number', '0935-901-428', 'site')); ?></span>
                            <br>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>
            <?php endif; ?>
            <div class="column-3">
                <?php if ('' !== get_theme_mod('fb_link')) { ?>
                    <a title="facebook" class="fb" target="_blank"
                       href="<?php echo esc_url(get_theme_mod('fb_link', 'http://www.facebook.com')); ?>"></a>
                <?php } ?>
                <?php if ('' !== get_theme_mod('gplus_link')) { ?>
                    <a title="google-plus" class="gp" target="_blank"
                       href="<?php echo esc_url(get_theme_mod('gplus_link', 'http://plus.google.com')); ?>"></a>
                <?php } ?>
                <?php if ('' !== get_theme_mod('linked_link')) { ?>
                    <a title="youtube" class="yt" target="_blank"
                       href="<?php echo esc_url(get_theme_mod('yt_link', 'https://www.youtube.com/')); ?>"></a>
                <?php } ?>
            </div>
        </div>
        </div>

    </div>
    <div class="header-inner">

        <div class="logo">
            <a href="<?php echo esc_url(home_url('/trang-chu')); ?>">
                <img src="<?php echo esc_url(wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]) ?>" alt="logo">
                <!--<h1><span class="uppercase">A</span>nh Kiệt Phát</h1>
                <span class="tagline">Nhà thầu của mọi công trình</span>-->
            </a>
        </div>
        <!-- logo -->

        <div class=toggle><a class="toggleMenu" href="<?php echo esc_url('#'); ?>"><?php _e('Menu', 'menu'); ?></a>
        </div>
        <div class="nav">
            <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
        </div>

    </div>
    <!-- header-inner -->
    <div class = "divider_header"></div>
</div>
<!-- header -->


