<?php
/*
Template Name: Recruitment page
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
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/vi/careers-vi/employee-benefits/">Phúc lợi</a></li>
			<li class="clickable-tab tab3 active"><a href="<?php echo get_site_url();?>/vi/careers-vi/recruitment/">Tuyển dụng</a></li>
			<?php elseif($curlang == "ja") :?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/ja/careers-ja/training-process/">教育制度</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/ja/careers-ja/employee-benefits/">福利厚生制度</a></li>
			<li class="clickable-tab tab3 active"><a href="<?php echo get_site_url();?>/ja/careers-ja/recruitment/">採用情報</a></li>
			<?php else:?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/training-process/">Training Process</a></li>
			<li class="clickable-tab tab2"><a href="<?php echo get_site_url();?>/employee-benefits/">Benefits</a></li>
			<li class="clickable-tab tab3 active"><a href="<?php echo get_site_url();?>/recruitment/">Recruitment</a></li>
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
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/careers-vi/employee-benefits/">Phúc lợi</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/careers-vi/recruitment/">Tuyển dụng</a></li>
			<?php elseif($curlang == "ja") :?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/careers-ja/training-process/">教育制度</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/careers-ja/employee-benefits/">福利厚生制度</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/careers-ja/recruitment/">採用情報</a></li>
			<?php else:?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/training-process/">Training Process</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/employee-benefits/">Benefits</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/recruitment/">Recruitment</a></li>
			<?php endif;?>
			</ul>
		</div>
	</div>
</div>

<!-- content -->
<div class="container content recruitment">
	
	<!-- tab3 content -->	
	<div id="tab3-content" class="child-tab-content">
		<?php query_posts('post_type=career&post_status=publish');?>
		<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<div class="row mb20">
				<div class="col-sm-12 col-xs-12" style="padding-bottom: 20px;"><h3><?php the_title() ?></h3></div>
				<div class="col-sm-2 col-xs-12">
				<h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Mô tả
				<?php elseif($curlang == "ja") :?>
					仕事内容
				<?php else:?>
					Job Description
				<?php endif;?>
				</h3></div>
				<div class="col-sm-10 col-xs-12">
					<p></p>
					<?php the_content() ?>
				</div>
				
				<?php if(get_post_meta($post->ID,'careers-recruitment-benefits',true)) :?>
				<div class="col-sm-2 col-xs-12 mt10 clearfix" style="clear: both;"><h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Quyền lợi
				<?php elseif($curlang == "ja") :?>
					権利
				<?php else:?>
					Benefits
				<?php endif;?>
				</h3></div>
				<div class="col-sm-10 col-xs-12 mt10">
					<?php echo get_post_meta($post->ID,'careers-recruitment-benefits',true)?>	
				</div>
				<?php endif;?>
				
				<div class="col-sm-2 col-xs-12 mt10 clearfix" style="clear: both;"><h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Yêu cầu
				<?php elseif($curlang == "ja") :?>
					必要スキル
				<?php else:?>
					Your Skills and Experience
				<?php endif;?></h3></div>
				<div class="col-sm-10 col-xs-12 mt10">
					<?php echo get_post_meta($post->ID,'careers-recruitment-skill',true)?>	
				</div>
				
				<?php if(get_post_meta($post->ID,'careers-recruitment-salary',true)) :?>
				<div class="col-sm-2 col-xs-12 mt10 clearfix" style="clear: both;"><h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Mức lương
				<?php elseif($curlang == "ja") :?>
					給与
				<?php else:?>
					Salary
				<?php endif;?>
				</h3></div>
				<div class="col-sm-10 col-xs-12 mt10">
					<?php echo get_post_meta($post->ID,'careers-recruitment-salary',true)?>	
				</div>
				<?php endif;?>
				
				<?php if(get_post_meta($post->ID,'careers-recruitment-information-contact',true)) :?>
				<div class="col-sm-2 col-xs-12 mt10 clearfix" style="clear: both;"><h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Thông tin liên hệ
				<?php elseif($curlang == "ja") :?>
					Thông tin liên hệ
				<?php else:?>
					Contact information
				<?php endif;?>
				</h3></div>
				<div class="col-sm-10 col-xs-12 mt10">
					<?php echo get_post_meta($post->ID,'careers-recruitment-information-contact',true)?>	
				</div>
				<?php endif;?>
				
				<?php if(get_post_meta($post->ID,'careers-recruitment-resume',true)) :?>
				<div class="col-sm-2 col-xs-12 mt10 clearfix" style="clear: both;"><h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Hồ sơ xin việc
				<?php elseif($curlang == "ja") :?>
					履歴書
				<?php else:?>
					Curriculum vitae
				<?php endif;?>
				</h3></div>
				<div class="col-sm-10 col-xs-12 mt10">
					<?php echo get_post_meta($post->ID,'careers-recruitment-resume',true)?>	
				</div>
				<?php endif;?>
				
				
				<div class="col-sm-2 col-xs-12 mt10 clearfix" style="clear: both;">
				<h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Hạn nộp
				<?php elseif($curlang == "ja") :?>
					期限
				<?php else:?>
					Dealine
				<?php endif;?></h3>
				</h3></div>
				<div class="col-sm-10 col-xs-12 mt10">
					<p></p>
					
					<p>
					<?php 
					$today = new DateTime();
					$dealine = get_post_meta($post->ID,'careers-recruitment-dealine',true);
					$dealine_comp = new DateTime($dealine);
					$check = "";
					echo $dealine;
					if(($today->getTimestamp()) > ($dealine_comp->getTimestamp())){
						if($curlang == "vi") :
						echo " <span style='color: #ff1a1a'>(Hết hạn)</span>";
						elseif($curlang == "ja") :
						echo " <span style='color: #ff1a1a'>(期限切れ)</span>";
						else:
						echo " <span style='color: #ff1a1a'>(Expired)</span>";
						endif;
					}
					?>
					</p>
				</div>
				<div class="col-sm-2 col-xs-12 mt10"><h3 class="mt0">
				<?php if($curlang == "vi") :?>
					Liên hệ
				<?php elseif($curlang == "ja") :?>
					連絡先
				<?php else:?>
					Contact
				<?php endif;?>
				</h3></div>
				<div class="col-sm-10 col-xs-12 mt10">
					<?php echo get_post_meta($post->ID,'careers-recruitment-contact',true)?>
				</div>
			</div>
			<?php if (($wp_query->current_post +1) != ($wp_query->post_count)): ?>
			<div class="col-sm-12 col-xs-12" style="border-bottom: 1px solid #ccc"></div>
			<?php endif;?>
			
		<?php endwhile; ?>
		<?php else : ?>
		<h3 class="text-center">COMMING SOON1</h3>
		<?php endif; ?>
		
		<div class="post-nav padding-content">
			<span class="previous pull-left"><?php previous_posts_link('<< Previous') ?></span>
			<span class="next pull-right"><?php next_posts_link('Next >>');?></span>
		</div><!--end .post-nav-->
	</div>

	
	
</div>
<?php get_footer();?>