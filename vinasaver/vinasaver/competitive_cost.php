<?php
/*
Template Name: Competitive Cost
*/

?>
<?php get_header();?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/main.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/why_vinasaver.css" type="text/css"/>
<!--Sub menu-->
<?php $curlang = pll_current_language();?>
<input type="text" id="page-name" value="<?php $page_name=$post->post_name; echo $page_name;?>" hidden>
<div class="container-fluid main-title-bar">
	<div class="container">
		<label>
			<?php if($curlang == "vi") :?>
			Chọn Vinasaver?
			<?php elseif($curlang == "ja") :?>
			我々を選ぶ理由
			<?php else:?>
			Why Vinasaver
			<?php endif;?>
		</label>
		<ul class="nav nav-tabs main-title-bar-sub-menu-1">
			<?php if($curlang == "vi") :?>
				<li class="clickable-tab tab1 active"><a href="<?php echo get_site_url();?>/vi/why-vinasaver-vi/competitive-cost/">Chi phí cạnh tranh</a></li>
				<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/vi/why-vinasaver-vi/variety-of-techniques/">Kỹ thuật phát triển đa dạng</a></li>
				<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/vi/why-vinasaver-vi/flexible-progress/">Quy trình linh hoạt</a></li>
			<?php elseif($curlang == "ja") :?>
				<li class="clickable-tab tab1 active"><a href="<?php echo get_site_url();?>/ja/why-vinasaver-ja/competitive-cost/">抜群のコスト競争力</a></li>
				<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/ja/why-vinasaver-ja/variety-of-techniques/">豊富な技術</a></li>
				<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/ja/why-vinasaver-ja/flexible-progress/">柔軟なプログレス</a></li>
			<?php else:?>
				<li class="clickable-tab tab1 active"><a href="<?php echo get_site_url();?>/en/why-vinasaver/competitive-cost/">Competitive Cost</a></li>
				<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/en/why-vinasaver/variety-of-techniques/">Variety Of Techniques</a></li>
				<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/en/why-vinasaver/flexible-progress/">Flexible Progress</a></li>
			<?php endif;?>
		</ul>
		
		<div class="dropdown main-title-bar-sub-menu-2">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			<a class="main-title-bar-sub-menu-2-title">
				<?php if($curlang == "vi") :?>
				Chọn Vinasaver?
				<?php elseif($curlang == "ja") :?>
				我々を選ぶ理由
				<?php else:?>
				Why Vinasaver
				<?php endif;?>
			</a>
			<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
			<?php if($curlang == "vi") :?>
				<li role="presentation"><a class="clickable-tab tab1 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/why-vinasaver-vi/competitive-cost/">Chi phí cạnh tranh</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/why-vinasaver-vi/variety-of-techniques/">Kỹ thuật phát triển đa dạng</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/why-vinasaver-vi/flexible-progress/">Quy trình linh hoạt</a></li>
			<?php elseif($curlang == "ja") :?>
				<li role="presentation"><a class="clickable-tab tab1 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/why-vinasaver-ja/competitive-cost/">抜群のコスト競争力</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/why-vinasaver-ja/variety-of-techniques/">豊富な技術</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/why-vinasaver-ja/flexible-progress/">柔軟なプログレス</a></li>
			<?php else:?>
				<li role="presentation"><a class="clickable-tab tab1 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/en/why-vinasaver/competitive-cost/">Competitive Cost</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/en/why-vinasaver/variety-of-techniques/">Variety Of Techniques</a></li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/en/why-vinasaver/flexible-progress/">Flexible Progress</a></li>
			<?php endif;?>
		  </ul>
		</div>
	</div>
</div>

<!-- content -->
<div class="container content">
	<?php query_posts('post_type=page&page_id=168&post_status=publish');?>
	<?php if(have_posts()) : while(have_posts()) : the_post();?>	
		<?php echo the_content();?>
	<?php endwhile; ?>
	<?php else : ?>
	<!--<p>Sorry there are no posts to display!</p>-->
	<?php endif; ?>
</div>
<?php get_footer();?>