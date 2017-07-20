<?php get_header();?>
<?php include(TEMPLATEPATH .'/imageSlider.php');?>
<?php 
	$curlang = pll_current_language();
	$curlang_link = $curlang=='en'?'':('-'.$curlang);
?>
<!-- content -->
<div class="container main-content1">
	<div class="row">
		<h3 class="main-content1-title">
		<?php if($curlang == "vi") :?>
			Những dịch vụ công nghệ phần mềm của chúng tôi luôn tập trung vào kết quả sản phẩm
		<?php elseif($curlang == "ja") :?>
			私達のソフトウェア・テクノロジー・サービスは製品の達成度を重視しております
		<?php else:?>
			Our Software Technology Services Are Focused On Results
		<?php endif;?>
		</h3>
	</div>
	<div class="row"> 
		<?php query_posts('post_type=page&page_id=152&post_status=publish');?>
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
		
		<div class="col-xs-12 col-sm-6 col-md-3 technique-img">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/app-block.png" class="img-responsive center-block" alt="" />
			<a href="/<?php echo $curlang?>/services<?php echo $curlang_link;?>#mobile-dev"><h4><?php echo get_post_meta($post->ID,'home-service-1-title',true);?></h4></a>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'home-service-1-content',true);?></p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 technique-img">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/web-block.png" class="img-responsive center-block" alt="" />
			<a href="/<?php echo $curlang?>/services<?php echo $curlang_link;?>#web-dev"><h4><?php echo get_post_meta($post->ID,'home-service-2-title',true);?></h4></a>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'home-service-2-content',true);?></p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 technique-img">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/game-block.png" class="img-responsive center-block" alt="" />
			<a href="/<?php echo $curlang?>/services<?php echo $curlang_link;?>#game-dev"><h4><?php echo get_post_meta($post->ID,'home-service-3-title',true);?></h4></a>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'home-service-3-content',true);?></p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 technique-img">
			<img src="<?php bloginfo('stylesheet_directory')?>/images/home/enterprise-block.png" class="img-responsive center-block" alt="" />
			<a href="/<?php echo $curlang?>/services<?php echo $curlang_link;?>#enterprise"><h4><?php echo get_post_meta($post->ID,'home-service-4-title',true);?></h4></a>
			<p class="technique-text"><?php echo get_post_meta($post->ID,'home-service-4-content',true);?></p>
		</div>
		
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<div class="container-fluid main-content2">
	<div class="container" style="padding-bottom:20px">
		<div class="col-sm-6 col-xs-12">
			<div class="row"> 
				<div class="col-xs-12">
					<a href="/<?php echo $curlang?>/about-us<?php echo $curlang_link;?>/"style="text-decoration: none;">
					<h2 style="-webkit-font-smoothing: antialiased !important;padding: 5px 0; 2.8 em !important;border-bottom: 2px solid #068a99;color:#068a99;">
					<?php if($curlang == "vi") :?>
						Phương pháp của chúng tôi
					<?php elseif($curlang == "ja") :?>
						我々のやり方
					<?php else:?>
						How we work	
					<?php endif;?>
					</h2></a>
				</div>
			</div>
			<div class="col-xs-12">
				<img src="<?php echo get_post_meta($post->ID,'home-workflow',true);?>" class="img-responsive" alt="" />
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="row"> 
				<div class="col-xs-12">
					<a href="/<?php echo $curlang?>/news-<?php echo $curlang;?>/"style="text-decoration: none;">
					<h2 style="-webkit-font-smoothing: antialiased !important;padding: 5px 0; 2.8 em !important;border-bottom: 2px solid #068a99;color:#068a99;">
					<?php if($curlang == "vi") :?>
						Tin tức
					<?php elseif($curlang == "ja") :?>
						ュース
					<?php else:?>
						News
					<?php endif;?>
					</h2></a>
				</div>
			</div>
			<div class="col-xs-12" style="padding-left: 0px; padding-right: 0px;">
				<?php query_posts('post_type=news&post_status=publish&posts_per_page=11&paged='. get_query_var('paged'));?>
				<?php if(have_posts()) : while(have_posts()) : the_post();?>
					<div class="col-xs-12 col-md-9" style="padding-left: 0px;padding-bottom: 10px;padding-top: 10px;"><a href="<?php the_permalink();?>"><?php the_title(); ?></a> </div>
					<div class="col-xs-12 col-md-3" style="padding-right: 0px;padding-bottom: 10px;padding-top: 10px;"><span class="pull-right"><?php echo get_the_date('d M Y'); ?></span></div>
					
					<div class="col-xs-12" style="padding-left: 0px; padding-right: 0px;border-bottom: 1px solid #ccc;"></div>
				<?php endwhile; ?>
				<?php else : ?>
					<?php if($curlang == "vi") :?>
						Chưa có tin tức!
					<?php elseif($curlang == "ja") :?>
						ュースがありません！
					<?php else:?>
						There's no news!
					<?php endif;?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
