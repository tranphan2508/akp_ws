<?php
/*
Template Name: VinaSaver style page
*/

?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/about_us.css" type="text/css"/>
<?php get_header();?>
<!--Sub menu-->
<?php $curlang = pll_current_language();?>
<div class="container-fluid main-title-bar">
	<div class="container">
		<label>
		<?php if($curlang == "vi") :?>
			Giới Thiệu
		<?php elseif($curlang == "ja") :?>
			私達について
		<?php else:?>
			About Us
		<?php endif;?>
		</label>
		<ul class="nav nav-tabs main-title-bar-sub-menu-1">
			<?php if($curlang == "vi") :?>
			<li class="clickable-tab tab1 active"><a href="<?php echo get_site_url();?>/vi/about-us-vi/vinasaver-style/">Phong cách VinaSaver</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/vi/about-us-vi/corporate-profile/">Hồ sơ doanh nghiệp</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Vị trí bản đồ</a></li>
			<li class="clickable-tab tab4"><a href="<?php echo get_site_url();?>/vi/about-us-vi/saver-corp/">Saver Japan</a></li>	
			<?php elseif($curlang == "ja") :?>
			<li class="clickable-tab tab1 active"><a href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li class="clickable-tab tab4"><a href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>	
			<?php else:?>
			<li class="clickable-tab tab1 active"><a href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/maps/">Maps</a></li>
			<li class="clickable-tab tab4"><a href="<?php echo get_site_url();?>/saver-corp/">Saver Japan</a></li>
			<?php endif;?>
		</ul>
		
		<div class="dropdown main-title-bar-sub-menu-2">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			<a class="main-title-bar-sub-menu-2-title">
				<?php if($curlang == "vi") :?>
					Giới Thiệu
				<?php elseif($curlang == "ja") :?>
					私達について
				<?php else:?>
					About Us
				<?php endif;?>
			</a>
			<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
			<?php if($curlang == "vi") :?>
			<li role="presentation"><a class="clickable-tab tab1 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/vinasaver-style/">Phong cách VinaSaver</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/corporate-profile/">Hồ sơ doanh nghiệp</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Maps</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/saver-corp/">Saver Japan</a></li>
			
			<?php elseif($curlang == "ja") :?>
			<li role="presentation"><a class="clickable-tab tab1 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>		
			<?php else:?>
			<li role="presentation"><a class="clickable-tab tab1 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/maps/">Maps</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/saver-corp/">Saver Japan</a></li>
			<?php endif;?>
		  </ul>
		</div>
	</div>
</div>

<!-- content -->
<div class="container content vinasaver-style">
	<div class="row" style="margin-top: 40px">
		<?php query_posts('post_type=page&page_id=221&post_status=publish');?>
			<?php if(have_posts()) : while(have_posts()) : the_post();?>	
				<?php echo the_content();?>
			<?php endwhile; ?>
			<?php else : ?>
			<!--<p>Sorry there are no posts to display!</p>-->
			<?php endif; ?>
	</div>
	   
</div>
<?php get_footer();?>