<?php
/*
Template Name: 
*/

?>
<?php get_header();?>
<!--Sub menu-->
<div class="container-fluid main-title-bar">
	<div class="container">
		<label>Career</label>
		<ul class="nav nav-tabs main-title-bar-sub-menu-1">
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/training-process/">Training Process</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/what-can-employee-get/">What can employee get</a></li>
			<li class="clickable-tab tab3 active"><a href="<?php echo get_site_url();?>/recruitment/">Recruitment</a></li>
		</ul>
		
		<div class="dropdown main-title-bar-sub-menu-2">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			<a class="main-title-bar-sub-menu-2-title">Career</a>
			<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/training-process/">Training Process</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/what-can-employee-get/">What can employee get</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/recruitment/">Recruitment</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- content -->
<div class="container">
	<div class="row">
		<!-- tab3 content -->	
		<div id="tab3-content" class="child-tab-content">
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
				<div class="common-content why-vinasaver">
					<div style="border-bottom: 1px solid #ccc;"></div>
					<div class="why-vinasaver-title">
						<a href="<?php the_permalink();?>"><h1><?php the_title() ?></h1></a>
					</div>
					<div class="why-vinasaver-content">
						<?php the_content('',FALSE,''); ?>
					</div></div>
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