<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Kage
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header">
			<div class="topbar">
				<div class="container">
					<div class="gutter clearfix">
						<ul class="contact_info">
							<?php if ( of_get_option('header_phone') ) { ?><li><span class="phone_icon"><?php echo esc_html(of_get_option('header_phone')); ?></span></li><?php } ?>
							<?php if ( of_get_option('header_email') ) { ?><li><a class="mail_icon" href="mailto:<?php echo esc_html(of_get_option('header_email')); ?>"><?php echo esc_html(of_get_option('header_email')); ?></a></li><?php } ?>
						</ul>
						<form class="search_form" action="<?php echo esc_url(home_url('/')); ?>" method="post" enctype="multipart/form-data">
							<div class="outerwrapp">
								<div class="innerwrapp">
									<div class="label">
										<label for="search_field"><?php if(isset($_POST['s'])) { echo $_POST['s']; } else { _e( 'Search', 'kage' ); } ?></label>
										<input id="search_field" class="search_filed" name="s" type="text" value="" />
									</div>
								</div>
							</div>
							<input class="search_icon" name="search" type="submit" value="" />
						</form>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="header_block gutter clearfix">
					<?php if ( of_get_option('logo_image') ) { ?>
					   <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(of_get_option('logo_image')); ?>" /></a>
					<?php } else if (of_get_option('header_logo_text1')){  ?>
					    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><span><?php echo esc_html(of_get_option('header_logo_text1')); ?></span> <?php echo esc_html(of_get_option('header_logo_text2')); ?> <p class="italic"><?php bloginfo('description'); ?></p></a>
					<?php } else {  ?>
						<a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span><p class="italic"><?php bloginfo('description'); ?></p></a>
					<?php } ?>
					<nav class="menucontainer clearfix">
						<?php if ( has_nav_menu( 'primary' ) ) { ?>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'primary', 'items_wrap'  => '<ul class="menutop">%3$s</ul>'  ) ); ?>
						<?php } else { ?>
							<?php wp_nav_menu(  array( 'menu_class'  => 'menutop') ); ?>	
						<?php } ?>
						<a class="menuicon" href="#"><?php _e( 'Menu', 'kage' ); ?></a>
						<?php if ( has_nav_menu( 'primary' ) ) { ?>
						   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'primary', 'items_wrap'  => '<ul class="menutopmob">%3$s</ul>'  ) ); ?>
						<?php } else { ?>
							<?php wp_nav_menu(  array( 'menu_class'  => 'menutopmob' ) ); ?>	
						<?php } ?>
					</nav>
				</div>
			</div>
		</header>