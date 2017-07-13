<?php
/*
Template Name: Benefits page
*/

?>
<?php get_header();?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/main.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/career.css" type="text/css"/>
<!--Sub menu-->
<?php $curlang = pll_current_language();?>
<input type="text" id="page-name" value="<?php $page_name=$post->post_name; echo $page_name;?>" hidden>
<div class="container-fluid main-title-bar">
	<div class="container">
		<label>
			<?php if($curlang == "vi") :?>
				<span style="margin-left: -18px;font-size: 28px">Sự Nghiệp</span>
			<?php elseif($curlang == "ja") :?>
				採用情報
			<?php else:?>
				Careers
			<?php endif;?>
		</label>
		<ul class="nav nav-tabs main-title-bar-sub-menu-1">
			<?php if($curlang == "vi") :?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/vi/careers-vi/training-process/">Quy trình đào tạo</a></li>
			<li class="clickable-tab tab2 active"><a href="<?php echo get_site_url();?>/vi/careers-vi/employee-benefits/">Phúc lợi</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/vi/careers-vi/recruitment/">Tuyển dụng</a></li>
			<?php elseif($curlang == "ja") :?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/ja/careers-ja/training-process/">教育制度</a></li>
			<li class="clickable-tab tab2 active"><a href="<?php echo get_site_url();?>/ja/careers-ja/employee-benefits/">福利厚生制度</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/ja/careers-ja/recruitment/">採用情報</a></li>
			<?php else:?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/training-process/">Training Process</a></li>
			<li class="clickable-tab tab2 active"><a href="<?php echo get_site_url();?>/employee-benefits/">Benefits</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/recruitment/">Recruitment</a></li>
			<?php endif;?>
		</ul>
		
		<div class="dropdown main-title-bar-sub-menu-2">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			<a class="main-title-bar-sub-menu-2-title">
				<?php if($curlang == "vi") :?>
					Sự Nghiệp
				<?php elseif($curlang == "ja") :?>
					採用情報
				<?php else:?>
					Careers
				<?php endif;?>
			</a>
			<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
			<?php if($curlang == "vi") :?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/careers-vi/training-process/">Quy trình đào tạo</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/careers-vi/employee-benefits/">Phúc lợi</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/careers-vi/recruitment/">Tuyển dụng</a></li>
			<?php elseif($curlang == "ja") :?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/careers-ja/training-process/">教育制度</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/careers-ja/employee-benefits/">福利厚生制度</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/careers-ja/recruitment/">採用情報</a></li>
			<?php else:?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/training-process/">Training Process</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/employee-benefits/">Benefits</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/recruitment/">Recruitment</a></li>
			<?php endif;?>
		  </ul>
		</div>
	</div>
</div>

<!-- content -->
<div class="container content benefits">
	<?php query_posts('post_type=page&page_id=189&post_status=publish');?>
	<?php if(have_posts()) : while(have_posts()) : the_post();?>	
		<?php// echo the_content();?>
		<div class="row mt10">
			<div class="col-sm-9 col-xs-12">
				<div class="col-sm-12 col-xs-12">
					<?php echo get_post_meta($post->ID,'careers-benefits-technical',true)?>
				</div>
			</div>
			<div class="col-sm-3 hidden-xs">
				<img src="<?php bloginfo('stylesheet_directory')?>/images/careers/benefit1.png" class="img-responsive" alt="" />
			</div>
		</div>
		<div class="col-sm-12 col-xs-12" style="border-bottom: 1px solid #ddd"></div>
		<div class="row mt10">
			<div class="col-sm-9 col-xs-12">
				<div class="col-sm-12 col-xs-12">
				<?php echo get_post_meta($post->ID,'careers-benefits-japanese',true)?>	
				</div>
			</div>
			<div class="col-sm-3 hidden-xs">
				<img src="<?php bloginfo('stylesheet_directory')?>/images/careers/benefit2.png" class="img-responsive" alt="" />
			</div>
		</div>
		<div class="col-sm-12 col-xs-12" style="border-bottom: 1px solid #ddd"></div>
		<div class="row mt10">
			<div class="col-sm-9 col-xs-12">
				<div class="col-sm-12 col-xs-12">
					<?php echo get_post_meta($post->ID,'careers-benefits-money',true)?>	
				</div>
			</div>
			<div class="col-sm-3 hidden-xs">
				<img src="<?php bloginfo('stylesheet_directory')?>/images/careers/benefit3.jpg" class="img-responsive" alt="" />
			</div>
		</div>
		<div class="col-sm-12 col-xs-12" style="border-bottom: 1px solid #ddd"></div>
		<div class="row mt10">
			<div class="col-sm-9 col-xs-12">
				<div class="col-sm-12 col-xs-12">
					<?php echo get_post_meta($post->ID,'careers-benefits-others',true)?>	
				</div>
			</div>
			<div class="col-sm-3 hidden-xs">
				<img src="<?php bloginfo('stylesheet_directory')?>/images/careers/benefit4.png" class="img-responsive" alt="" />
			</div>
		</div>
	<?php endwhile; ?>
	<?php else : ?>
	<!--<p>Sorry there are no posts to display!</p>-->
	<?php endif; ?>
	
	
	
	
</div>
<?php get_footer();?>