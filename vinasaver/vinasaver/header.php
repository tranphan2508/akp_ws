<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>" charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">	
		<link rel="SHORTCUT ICON" href="<?php bloginfo('stylesheet_directory')?>/images/favicon.png">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css"/>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/home.css" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/bootstrap.min.js"></script>
		<title><?php bloginfo('name')?></title>
		</head>
	<body>
	<?php $curlang = pll_current_language();
	$curlang_link = $curlang=='en'?'':('-'.$curlang);
	//global $tel = "+84.0236.3888773";
	?>
	<!--header-->
	<div class="header">
		<nav class="navbar navbar-default content-menu">
			
			<div class="navbar-main-content container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a href="/home<?php echo $curlang_link?>/"><img class="img-responsive" alt="????????" src="<?php bloginfo('stylesheet_directory')?>/images/saver_logo.png"></a>	
				</div>
				<div class="navbar-collapse collapse" id="menu">
					<?php
						
						wp_nav_menu( array(
							'theme_location' => 'top',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'nav navbar-nav header-menu',
							'fallback_cb' => 'wp_page_menu',
							'walker' => new wp_bootstrap_navwalker()
						)); 
					?>
				</div>	
				<div class="container multi-language"> 
					<div style="line-height: 1em; float: right; padding-left: 20px" class="phone glyphicon glyphicon-earphone"><span><a href="tel:+84.0236.3888773">+84.0236.3888773</a></span></div>
					<div class="language-controls">
					<ul class="language_swicher">
					<?php
						pll_the_languages(array('show_flags' => 1,
												 'show_names' => 0,
												 'hide_current'=>0,
												 'raw' =>0));
					?>
					</ul>
					</div>
				</div>
				
			</div>
		</nav>
		
		<div class="divider_header"></div>
	</div><!--End .header-->