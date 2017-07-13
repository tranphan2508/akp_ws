<?php
/*

*/

?>
<?php get_header();?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/main.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/why_vinasaver.css" type="text/css"/>
<!--Sub menu-->
<input type="text" id="page-name" value="<?php $page_name=$post->post_name; echo $page_name;?>" hidden>
<div class="container-fluid main-title-bar">
	<div class="container">
		<label>Why Vinasaver</label>
		<ul class="nav nav-tabs main-title-bar-sub-menu-1">
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/competitive-cost/">Competitive Cost</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/scalable-resource-pool/">Scalable Resource Pool</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/flexible-progress/">Flexible Progress</a></li>
		</ul>
		
		<div class="dropdown main-title-bar-sub-menu-2">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			<a class="main-title-bar-sub-menu-2-title">Why Vinasaver</a>
			<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/competitive-cost/">Competitive Cost</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/scalable-resource-pool/">Scalable Resource Pool</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/flexible-progress/">Flexible Progress</a></li>
		  </ul>
		</div>
	</div>
</div>

<!-- content -->
<?
	$category = get_the_category();
	$firstCategory = $category[0]->cat_name;
?>
<input type="hidden" id="category_name" value="<?php echo $firstCategory;?>">
<div class="container">
	<div class="row">
		<!-- tab1 content -->	
		<div id="tab1-content" class="child-tab-content">
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
				<div class="common-content why-vinasaver">
					<div class="why-vinasaver-title">
						<a href="<?php the_permalink();?>"><h2><?php the_title() ?></h2></a>
					</div>
					<div class="why-vinasaver-content">
						<?php the_content('',FALSE,''); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<p>Sorry there are no posts to display, oh man!</p>
			<?php endif; ?>
			
			<div class="post-nav padding-content">
				<span class="previous pull-left"><?php previous_posts_link('<< Previous') ?></span>
				<span class="next pull-right"><?php next_posts_link('Next >>');?></span>
			</div><!--end .post-nav-->
		</div>
	</div>
</div>
<?php get_footer();?>