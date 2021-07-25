<?php
/**
 * Header template
 *
 * @package WPdough
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head prefix="og: http://ogp.me/ns#">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--TODO: Skip Link -->

<header>
	<?php get_template_part('template-parts/common/main-nav'); ?>
</header>

<main id="main">