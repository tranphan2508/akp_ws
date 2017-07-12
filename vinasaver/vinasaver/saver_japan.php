<?php
/*
Template Name: Saver Japan page
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
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/vi/about-us-vi/vinasaver-style/">Phong cách VinaSaver</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/vi/about-us-vi/corporate-profile/">Hồ sơ doanh nghiệp</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Vị trí bản đồ</a></li>
			<li class="clickable-tab tab4 active"><a href="<?php echo get_site_url();?>/vi/about-us-vi/saver-corp/">Saver Japan</a></li>	
			<?php elseif($curlang == "ja") :?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li class="clickable-tab tab4 active"><a href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>	
			<?php else:?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/maps/">Maps</a></li>
			<li class="clickable-tab tab4 active"><a href="<?php echo get_site_url();?>/saver-corp/">Saver Japan</a></li>
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
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Maps</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/saver-corp/">Saver Japan</a></li>
			
			<?php elseif($curlang == "ja") :?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>		
			<?php else:?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/maps/">Maps</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/saver-corp/">Saver Japan</a></li>
			<?php endif;?>
		  </ul>
		</div>
	</div>
</div>

<!-- content -->
<div class="container content saver_japan">
	<div class="col-sm-8 col-xs-12">
		<iframe class="map" 
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.9709851941884!2d132.7562347155825!3d33.83885888639126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354fe58f2573b169%3A0x37278eb703bb8f3a!2s7+Chome-13+Sanbanch%C5%8D%2C+Matsuyama-shi%2C+Ehime-ken+790-0003%2C+Japan!5e0!3m2!1sen!2s!4v1496385595550" frameborder="0" style="border:0" allowfullscreen"></iframe>
	</div>
	<?php query_posts('post_type=page&page_id=207&post_status=publish');?>
	<?php if(have_posts()) : while(have_posts()) : the_post();?>
	<div class="col-sm-4 col-xs-12">
		<h4>
		<?php if($curlang == "vi") :?>
		Trụ sở chính ở Matsuyama
		<?php elseif($curlang == "ja") :?>
		松山本社
		<?php else:?>
		Matsuyama Head Office
		<?php endif;?>
		</h4>
		<?php echo get_post_meta($post->ID,'about-us-saverjp-matsuyama-address',true)?>	
		<p>TEL. <a href="0899060337">089-906-0337</a> </p>
		<p>FAX. <a>089-906-0338</a></p>
		<p>Website: <a href="https://www.saver.jp" target="_blank">https://www.saver.jp </a></p>
	</div>
	
	<div class="col-sm-12 col-xs-12 mt40"></div>
	<div class="col-sm-8 col-xs-12">
		<iframe class="map" 
		src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12960.253017979787!2d139.737891!3d35.700061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55dcf3f24a7193e4!2z5qCq5byP5Lya56S-44Oh44OH44Kj44Ki44Ku44Or44OJ!5e0!3m2!1sen!2sus!4v1496386337212" frameborder="0" style="border:0" allowfullscreen>"></iframe>
	</div>
	<div class="col-sm-4 col-xs-12">
		<h4>
		<?php if($curlang == "vi") :?>
		Chi nhánh tại Tokyo
		<?php elseif($curlang == "ja") :?>
		東京サテライトオフィス
		<?php else:?>
		Tokyo Satellite Office
		<?php endif;?>
		</h4>
		<?php echo get_post_meta($post->ID,'about-us-saverjp-tokyo-address',true)?>	
		<p>TEL. <a href="0363793100">03-6379-3100</a> </p>
		<p>FAX. <a>0363793105</a></p>
		<p>Website: <a href="https://www.saver.jp" target="_blank">https://www.saver.jp </a></p>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<p></p>
	<?php endif; ?>
	
</div>
<?php get_footer();?>















