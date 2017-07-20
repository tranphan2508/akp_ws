<?php
/*
Template Name: Contact us
*/

?>
<?php $curlang = pll_current_language();?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/news.css" type="text/css"/>
<?php get_header();?>


<!-- content -->
<div class="container services content">
	<div class="col-sm-6 col-xs-12">
		<div class="col-sm-9 col-xs-12 pull-right">
			<h4>
				<?php if($curlang == "vi") :?>
				Hãy gửi mail cho chúng tôi
				<?php elseif($curlang == "ja") :?>
				私たちに書いてください
				<?php else:?>
				WRITE TO US
				<?php endif;?>
			</h4>
			<?php query_posts('post_type=page&page_id=166&post_status=publish');?>
			<?php if(have_posts()) : while(have_posts()) : the_post();?>	
				<?php echo the_content();?>
			<?php endwhile; ?>
			<?php else : ?>
			<!--<p>Sorry there are no posts to display!</p>-->
			<?php endif; ?>
		</div>
	</div>
	<div class="col-sm-3 col-xs-12"></div>
	<div class="col-sm-3 col-xs-12">
		<h4>
		<?php if($curlang == "vi") :?>
		Hãy gọi cho chúng tôi
		<?php elseif($curlang == "ja") :?>
		私たちに呼び出す
		<?php else:?>
		CALL US
		<?php endif;?>
		
		</h4>
		<?php query_posts('post_type=page&page_id=380&post_status=publish');?>
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
		<p><?php  echo get_post_meta($post->ID,'about-us-map-company-name',true)?></p>
		<p><?php  echo get_post_meta($post->ID,'about-us-map-address',true)?></p>
		<p>Tel: <a href="tel:+02363888773"><?php echo get_post_meta($post->ID,'about-us-map-tel',true)?></a></p>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer();?>