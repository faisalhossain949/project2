
	
		<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Theory by TEMPLATED</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<?php wp_head();?>
		<style>ul li{display:inline-block;}</style>
	</head>
	<body>
<?php if(is_front_page()){?>
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Theory</a>
					<nav id="nav">
				
						<?php wp_nav_menu(array(
						'theme_location'	=>	'mainmenu',
						'container_id'			=>'header',
						'container'				=>'header',
						'menu'	=>	'nav',
						'menu_id'	=>	'nav',
						'walker'				=>	new wp_bootstrap_navwalker(),
						
						));
						?>
				
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
			<?php 
			}
				
				?>
			
			<?php 
if(!is_front_page()){
					?>
							<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Theory</a>
					<nav id="nav">
							<?php wp_nav_menu(array(
						'theme_location'	=>	'mainmenu',
						'container_id'			=>'header',
						'container'				=>'header',
						'menu'	=>	'nav',
						'menu_id'	=>	'nav',
						'walker'				=>	new wp_bootstrap_navwalker(),
						
						));
						?>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			
			</header>
			<?php 
				}
				?>
		<!-- Banner -->
		
