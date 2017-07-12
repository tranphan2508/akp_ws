<?php
/*
Template Name: Products
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
			Sản Phẩm
		<?php elseif($curlang == "ja") :?>
			製品
		<?php else:?>
			Products
		<?php endif;?>
		</label>
	</div>
</div>

<!-- content -->
<div class="container news content">
	<div class="row common-content">
		<?php query_posts('post_type=products&post_status=publish&posts_per_page=5&paged='. get_query_var('paged'));?>
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<div class="common-content main-news">
				<div class="news-title">
					<a href="<?php the_permalink();?>"><h2><?php the_title() ?></h2></a>
				</div>
				<div class="news-img">
					<img class="img-responsive center-block" src="<?php echo get_post_meta($post->ID,'news-img',true)?>" alt=""/>
				</div>
				<div class="news-content">
					<?php the_content('Read on...'); ?>
				</div>
				<div style="border-bottom: 1px solid #ccc;"></div>
			</div>
		<?php endwhile; ?>
		<?php else : ?>
		<h3 class="text-center">COMMING SOON</h3>
		<?php endif; ?>
		
		<div class="post-nav padding-content">
			<span class="previous pull-left"><?php previous_posts_link('<< Previous') ?></span>
			<span class="next pull-right"><?php next_posts_link('Next >>');?></span>
		</div><!--end .post-nav-->
	
	</div>
	
</div>
<?php get_footer();?>