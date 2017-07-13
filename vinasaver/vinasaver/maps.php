<?php
/*
Template Name: Maps page
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
			About us
		<?php endif;?>
		</label>
		<ul class="nav nav-tabs main-title-bar-sub-menu-1">
			<?php if($curlang == "vi") :?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/vi/about-us-vi/vinasaver-style/">Phong cách VinaSaver</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/vi/about-us-vi/corporate-profile/">Hồ sơ doanh nghiệp</a></li>
			<li class="clickable-tab tab3 active"><a href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Vị trí bản đồ</a></li>
			<li class="clickable-tab tab4"><a href="<?php echo get_site_url();?>/vi/about-us-vi/saver-corp/">Saver Japan</a></li>	
			<?php elseif($curlang == "ja") :?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li class="clickable-tab tab3 active"><a href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li class="clickable-tab tab4"><a href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>	
			<?php else:?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
			<li class="clickable-tab tab3 active"><a href="<?php echo get_site_url();?>/maps/">Maps</a></li>
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
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/vinasaver-style/">Phong cách VinaSaver</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/corporate-profile/">Hồ sơ doanh nghiệp</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Maps</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/saver-corp/">Saver Japan</a></li>
			
			<?php elseif($curlang == "ja") :?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>		
			<?php else:?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/maps/">Maps</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/saver-corp/">Saver Japan</a></li>
			<?php endif;?>
		  </ul>
		</div>
	</div>
</div>

<!-- content -->
<div class="container content maps">
	<div class="col-sm-8 col-xs-12">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.807479228567!2d108.22006441536531!3d16.07547714353918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183a792a5f9d%3A0x27cb1d36dd4ee748!2sSoftware+park+in+Da+Nang!5e0!3m2!1sen!2s!4v1496372196135" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-sm-4 col-xs-12">
		<h4>
		<?php if($curlang == "vi") :?>
				Trụ sở
			<?php elseif($curlang == "ja") :?>
				本社
			<?php else:?>
				Address
			<?php endif;?>
		</h4>
		<?php query_posts('post_type=page&page_id=380&post_status=publish');?>
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
		<p><?php  echo get_post_meta($post->ID,'about-us-map-company-name',true)?></p>
		<p><?php  echo get_post_meta($post->ID,'about-us-map-address',true)?></p>
		<p>Tel: <a href="tel:+02363888773"><?php echo get_post_meta($post->ID,'about-us-map-tel',true)?></a></p>
		<?php endwhile; ?>
		<?php else : ?>
		<p></p>
		<?php endif; ?>
	</div>
	
</div>
<?php get_footer();?>