<div id='footer'>
    <div class="container footer-c ">
        <div class="row">
            <div class="col-sm-9 col-xs-12">
                <?php query_posts('post_type=page&page_id=26&post_status=publish'); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h4 class="uppercase"><?php echo get_post_meta($post->ID, 'comapny_name', true) ?></h4>
                    <p><?php echo get_post_meta($post->ID, 'contact_map_address', true) ?></p>
                    <p>Tel: <?php echo get_post_meta($post->ID, 'contact_tel', true) ?></p>
                    <p>Email: <a
                            href="mailto:<?php echo get_post_meta($post->ID, 'contact_email', true) ?>"><?php echo get_post_meta($post->ID, 'contact_email', true) ?></a>
                    </p>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-3 footer-right">
                <img src="<?php bloginfo('stylesheet_directory') ?>/images/footer.png" alt="Building"/>
            </div>
        </div>

    </div>
    <div class="copy-right">
        <div class="container footer-c  text-right">
            Copyright © 2017 AnhKietPhat All right reserved
        </div>
    </div>
</div>
</body>
</html>