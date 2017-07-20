<?php
/*
  Template Name: Contact
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-xs-12">
            <div class="header3"><h3>Trụ sở công ty</h3></div>

            <?php query_posts('post_type=page&page_id=88&post_status=publish'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p><?php echo get_post_meta($post->ID, 'contact_map_address', true) ?> <?php echo get_post_meta($post->ID, 'contact_map_city', true) ?></p>
                <p>Tel: <?php echo get_post_meta($post->ID, 'contact_tel', true) ?></p>
                <p>Email: <?php echo get_post_meta($post->ID, 'contact_email', true) ?></a></p>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.672328977188!2d108.21922101539815!3d16.082484688872743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183c1622d737%3A0x93f45b9c46dba5ca!2zMiDEkOG7kW5nIMSQYSwgVGh14bqtbiBQaMaw4bubYywgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1500277831680"
                    width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12">
            <div class="header3"> <h3>Liên hệ</h3> </div>
            <div class="blog-post">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                    the_content();

                endwhile;
                endif;
                ?>
            </div>
            <!-- blog-post -->
            <div class="clear"></div>
        </div>
        <!-- site-aligner -->
    </div>
</div><!-- content -->
<?php get_footer(); ?>
