<!DOCTYPE html>
<html <?php language_attributes(); ?> />

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
<div class="header">
    <div class="header-inner">
        <div class="logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <h1><span>A</span>NH KIET PHAT</h1>
                <span class = "tagline">Nhà thầu của mọi công trình</span>
                </a>
        </div> <!-- logo -->
        <?php if ( ! dynamic_sidebar('sidebar-header')): ?>

            <div class="column-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.jpg" alt="" />
                <?php if( '' !== get_theme_mod('head_number')){ ?>
                    <span class="headerphone"><?php echo esc_attr( get_theme_mod('head_number', '0789 256 321', 'skt-construction' )); ?></span><br>
                <?php } ?>
                <?php if( '' !== get_theme_mod('head_email')){ ?>
                    <span class="headreemail"><a href="mailto:<?php echo sanitize_email(get_theme_mod('head_email','info@buildpress.com')); ?>"><?php echo esc_attr(get_theme_mod('head_email','info@buildpress.com')); ?></a></span>
                <?php } ?>
                <div class="clear"></div>
            </div>

            <div class="column-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-home.jpg" alt="" />
                <?php if( '' !== get_theme_mod('head_address')){ ?>
                    <span class="headerphone"><?php echo esc_attr( get_theme_mod('head_address', 'Street 238, Perth,', 'skt-construction' )); ?></span><br>
                <?php } ?>
                <?php if( '' !== get_theme_mod('head_citycountry')){ ?>
                    <span class="headreemail"><?php echo esc_attr( get_theme_mod('head_citycountry', 'Western Australia', 'skt-construction' )); ?></span>
                <?php } ?>
                <div class="clear"></div>
            </div>
        <?php endif; ?>
        <div class="column-3">
            <?php if ( '' !== get_theme_mod( 'fb_link' ) ) { ?>
                <a title="facebook" class="fb" target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','http://www.facebook.com')); ?>"></a>
            <?php } ?>
            <?php if ( '' !== get_theme_mod('gplus_link') ) { ?>
                <a title="google-plus" class="gp" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','http://plus.google.com')); ?>"></a>
            <?php }?>
            <?php if ( '' !== get_theme_mod('linked_link') ) { ?>
                <a title="linkedin" class="in" target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','http://www.linkedin.com')); ?>"></a>
            <?php } ?>
        </div>
    </div><!-- .headerright -->
    </div>
</div>
