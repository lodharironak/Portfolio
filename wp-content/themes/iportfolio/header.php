<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iPortfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'iportfolio'); ?></a>

		<header id="masthead header" class="site-header header dark-background d-flex flex-column">
			<i class="header-toggle d-xl-none bi bi-list"></i>
			<div class="profile-img">
				<img src="http://192.168.0.28/myportfolio/wp-content/uploads/2024/07/RK.png" alt="" class="img-fluid rounded-circle">
			</div>

			<a href="http://localhost/myportfolio/#hero" class="logo d-flex align-items-center justify-content-center">
				<h1 class="sitename">Ronak Lodhari</h1>
			</a>

			<div class="social-links text-center">
				<a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
				<a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
				<a href="https://www.linkedin.com/in/jenish-kotiya-6914b31b4/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
			</div>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
					<li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
					<li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
					<li><a href="#portfolio"><i class="bi bi-images navicon"></i> Project</a></li>
					<li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
				</ul>
			</nav>

		</header><!-- #masthead -->