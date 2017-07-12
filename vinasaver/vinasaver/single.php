<?php
/*

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
		TIN TỨC
		<?php elseif($curlang == "ja") :?>
		ュース
		<?php else:?>
		NEWS
		<?php endif;?>
		</label>
	</div>
</div>

<!-- content -->
<div class="container news">
	<div class="row common-content">
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<div class="main-news">
				<div class="news-title">
					<a href="<?php the_permalink();?>"><h2><?php the_title() ?></h2></a>
				</div>
				<div class="news-img">
					<img class="img-responsive center-block" src="<?php echo get_post_meta($post->ID,'news-img',true)?>" alt=""/>
				</div>
				<div class="news-content">
					<?php the_content('Read on...'); ?>
				</div>
				<p class="text-right">
					<?php if($curlang == "vi") :?>
					Nguồn:
					<?php elseif($curlang == "ja") :?>
					ソース:
					<?php else:?>
					Source:
					<?php endif;?>
					<a class="source-link" href="<?php echo get_post_meta($post->ID,'news-source-link',true); ?>"><?php echo get_post_meta($post->ID,'news-source',true)?></a>
				</p>
			</div>
		<?php endwhile; ?>
		<?php else : ?>
		<p>Sorry there are no posts to display, oh man!</p>
		<?php endif; ?>
		
		<div class="post-nav">
			<span class="previous pull-left"><?php previous_posts_link('<< Previous') ?></span>
			<span class="next pull-right"><?php next_posts_link('Next >>');?></span>
		</div><!--end .post-nav-->
	</div>
</div>
<?php get_footer();?>