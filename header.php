<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<?php wp_head() ?>
	</head>

	<body <?php body_class(); ?>>
		<a class="visually-hidden-focusable" id="skip-to-content" href="#content">Skip to main content</a>

		<?php wp_body_open() ?>

		<?php if (!get_field('hide_header')) : ?>
		<header class="top">
			<nav class="has-global-padding is-layout-constrained">
				<?php
						wp_nav_menu([
							'theme_location'  => 'primary_navigation',
							'menu_class'      => 'list-unstyled'
						]);
					?>
			</nav>
		</header>
		<?php endif; ?>

		<main id="page">
			<div class="mw-alignwide box-shadow has-white-background-color">