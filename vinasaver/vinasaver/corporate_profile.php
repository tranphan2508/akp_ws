<?php
/*
Template Name: Corporate Profile page
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
			<li class="clickable-tab tab2 active"><a href="<?php echo get_site_url();?>/vi/about-us-vi/corporate-profile/">Hồ sơ doanh nghiệp</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Vị trí bản đồ</a></li>
			<li class="clickable-tab tab4"><a href="<?php echo get_site_url();?>/vi/about-us-vi/saver-corp/">Saver Japan</a></li>	
			<?php elseif($curlang == "ja") :?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li class="clickable-tab tab2 active"><a href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li class="clickable-tab tab3"><a href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li class="clickable-tab tab4"><a href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>	
			<?php else:?>
			<li class="clickable-tab tab1"><a href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li class="clickable-tab tab2 active"><a href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
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
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/vinasaver-style/">Phong cách VinaSaver</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/corporate-profile/">Hồ sơ doanh nghiệp</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/maps/">Maps</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vi/about-us-vi/saver-corp/">Saver Japan</a></li>
			<?php elseif($curlang == "ja") :?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/vinasaver-style/">Vina Saverスタイル</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/corporate-profile/">会社案内</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab3" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/maps/">アクセスマップ</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab4" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/ja/about-us-ja/saver-corp/">Saver Japan</a></li>		
			<?php else:?>
			<li role="presentation"><a class="clickable-tab tab1" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/vinasaver-style/">VinaSaver Style</a></li>
			<li role="presentation" class="divider"></li>
			<li role="presentation"><a class="clickable-tab tab2 active" role="menuitem" tabindex="-1" href="<?php echo get_site_url();?>/corporate-profile/">Corporate Profile</a></li>
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
<div class="container content corporate-profile">
	<h3 class="text-center">
	<?php if($curlang == "vi") :?>
		Hồ sơ doanh nghiệp
	<?php elseif($curlang == "ja") :?>
		会社案内
	<?php else:?>
		Corporate profile
	<?php endif;?>
	</h3>
	<?php query_posts('post_type=page&page_id=223&post_status=publish');?>
	<?php if(have_posts()) : while(have_posts()) : the_post();?>
	<div class="row cotextbox2 row1">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row1">
			<p>
			<?php if($curlang == "vi") :?>
				Tên công ty
			<?php elseif($curlang == "ja") :?>
				会社名
			<?php else:?>
				Company Name
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-company-name',true)?>
		</div>
	</div>
	<div class="row cotextbox2 row2">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row2">
			<p>
			<?php if($curlang == "vi") :?>
				Ngày thành lập
			<?php elseif($curlang == "ja") :?>
				設立
			<?php else:?>
				Establishment
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-establishment',true)?>	
		</div>
	</div>
	<div class="row cotextbox2 row3">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row3">
			<p>
			<?php if($curlang == "vi") :?>
				Vốn cổ phần
			<?php elseif($curlang == "ja") :?>
				資本金
			<?php else:?>
				Capital stock
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-capital-stock',true)?>			
		</div>
	</div>
	<div class="row cotextbox2 row4">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row4">
			<p>
			<?php if($curlang == "vi") :?>
				Nghiệp vụ
			<?php elseif($curlang == "ja") :?>
				業務内容
			<?php else:?>
				Business content
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-business-content',true)?>	
		</div>
	</div>
	<div class="row cotextbox2 row5">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row5">
			<p>
			<?php if($curlang == "vi") :?>
				Người đại diện
			<?php elseif($curlang == "ja") :?>
				法定代表者
			<?php else:?>
				Officer
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-officer',true)?>				
		</div>
	</div>
	<div class="row cotextbox2 row6">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row6">
			<p>
			<?php if($curlang == "vi") :?>
				Trụ sở
			<?php elseif($curlang == "ja") :?>
				本社
			<?php else:?>
				Address
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-address',true)?>		
		</div>
	</div>
	<div class="row cotextbox2 row7">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row7">
			<p>
			<?php if($curlang == "vi") :?>
				Công ty mẹ
			<?php elseif($curlang == "ja") :?>
				親会社
			<?php else:?>
				Parent company
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-parrent-company',true)?>			
		</div>
	</div>
	<div class="row cotextbox2 row8">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row8">
			<p>
			<?php if($curlang == "vi") :?>
				Số chứng nhận
			<?php elseif($curlang == "ja") :?>
				認定資格番号
			<?php else:?>
				Certification
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-certification',true)?>	
		</div>
	</div>
	<div class="row cotextbox2 row9">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row9">
			<p>
			<?php if($curlang == "vi") :?>
				Thành viên của Hiệp hội
			<?php elseif($curlang == "ja") :?>
				</br>所属団体</br>&nbsp;
			<?php else:?>
				Membership of professional institutions
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-membership',true)?>
		</div>
	</div>
	<div class="row cotextbox2 row10">
		<div class="col-xs-12 col-sm-3 corporate-profile-left corporate-profile-left-row10">
			<p>
			<?php if($curlang == "vi") :?>
				Đối tác kinh doanh
			<?php elseif($curlang == "ja") :?>
				取引者
			<?php else:?>
				Business partner
			<?php endif;?>
			</p>		
		</div>
		<div class="col-xs-12 col-sm-9 corporate-profile-right">
			<?php echo get_post_meta($post->ID,'about-us-corp-profile-business-partner',true)?>	
		</div>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<p></p>
	<?php endif; ?>
</div>
<?php get_footer();?>

















