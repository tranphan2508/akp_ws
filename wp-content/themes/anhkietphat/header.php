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
    <div class="header-inner">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <h1><span class="uppercase">A</span>nh Kiệt Phát</h1>
                <span class="tagline">Nhà thầu của mọi công trình</span>
            </a>
        </div>
        <!-- logo -->
        <div class="headerright">
            <?php if (!dynamic_sidebar('sidebar-header')): ?>

                <div class="column-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.jpg" style="height:17px; width:auto;" alt=""/>
                    <?php if ('' !== get_theme_mod('head_number')) { ?>
                        <span
                            class="headerphone"><?php echo esc_attr(get_theme_mod('head_number', '0912 345 678', 'skt-construction')); ?></span>
                        <br>
                    <?php } ?>
                    <?php if ('' !== get_theme_mod('head_email')) { ?>
                        <span class="headreemail"><a
                                href="mailto:<?php echo sanitize_email(get_theme_mod('head_email', 'anhkietphat@gmail.com')); ?>"><?php echo esc_attr(get_theme_mod('head_email', 'anhkietphat@gmail.com')); ?></a></span>
                    <?php } ?>
                </div>

                <div class="column-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-home.jpg" style="height:17px; width:auto;" alt=""/>
                    <?php if ('' !== get_theme_mod('head_address')) { ?>
                        <span
                            class="headerphone"><?php echo esc_attr(get_theme_mod('head_address', '02 Đống Đa,', 'skt-construction')); ?></span>
                        <br>
                    <?php } ?>
                    <?php if ('' !== get_theme_mod('head_citycountry')) { ?>
                        <span
                            class="headreemail"><?php echo esc_attr(get_theme_mod('head_citycountry', 'Hải Châu, Đà Nẵng', 'skt-construction')); ?></span>
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
        <!-- headerright -->

        <div class=toggle><a class="toggleMenu" href="<?php echo esc_url('#'); ?>"><?php _e('Menu', 'menu'); ?></a>
        </div>
        <div class="nav">
            <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
        </div>

    </div>
    <!-- header-inner -->
</div>
<!-- header -->


