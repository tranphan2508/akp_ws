<?php
/*
Template Name: Services
*/

?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/news.css" type="text/css"/>
<?php get_header();?>
<!--Sub menu-->
<?php $curlang = pll_current_language();?>
<div class="container-fluid main-title-bar">
	<div class="container">
		<label>
		<?php if($curlang == "vi") :?>
			Dịch Vụ
		<?php elseif($curlang == "ja") :?>
			サービス
		<?php else:?>
			Services
		<?php endif;?>
		</label>
	</div>
</div>

<!-- content -->
<div class="container services content">
	<div class="row" style="margin:30px 0px;">
		<div class="col-sm-4 col-xs-12">
			<?php query_posts('post_type=page&page_id=152&post_status=publish');?>
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<img src="<?php echo get_post_meta($post->ID,'home-workflow',true);?>" class="img-responsive center-block" alt="" />
			<?php endwhile; ?>
			<?php endif; ?>
		
	<?php query_posts('post_type=page&page_id=156&post_status=publish');?>
	<?php if(have_posts()) : while(have_posts()) : the_post();?>
		
		</div>
		<div class="col-sm-6 col-xs-12">
			<?php echo the_content();?>
		</div>
	</div>
	
	<div class="row">
		<a name="mobile-dev"></a>
		<div class="col-sm-9 col-xs-12">
			<h2><?php echo get_post_meta($post->ID,'service-1-title',true);?></h2>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-1-content',true);?></p>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-1-tech',true);?></p>
		</div>
		<div class="col-sm-3 hidden-xs">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/app-block.png" class="img-responsive center-block" alt="" />
		</div>
	</div>
	<div class="row">
		<a name="web-dev"></a>
		<div class="col-sm-3 hidden-xs">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/web-block.png" class="img-responsive center-block" alt="" />
		</div>
		<div class="col-sm-9 col-xs-12">
			<h2><?php echo get_post_meta($post->ID,'service-2-title',true);?></h2>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-2-content',true);?></p>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-2-tech',true);?></p>
		</div>
	</div>
	<div class="row">
		<a name="game-dev"></a>
		<div class="col-sm-9 col-xs-12">
			<h2><?php echo get_post_meta($post->ID,'service-3-title',true);?></h2>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-3-content',true);?></p>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-3-tech',true);?></p>
		</div>
		<div class="col-sm-3 hidden-xs">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/game-block.png" class="img-responsive center-block" alt="" />
		</div>
	</div>
	<div class="row">
		<a name="enterprise"></a>
		<div class="col-sm-3 hidden-xs">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/enterprise-block.png" class="img-responsive center-block" alt="" />
		</div>
		<div class="col-sm-9 col-xs-12">
			<h2><?php echo get_post_meta($post->ID,'service-4-title',true);?></h2>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-4-content',true);?></p>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'service-4-tech',true);?></p>
		</div>
	</div>
		
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer();?>