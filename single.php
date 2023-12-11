<?php

/**
 * Default Singleton Template
 */

get_header();

?>

<nav class="my-6">
	<?php if (function_exists('rank_math_the_breadcrumbs'))
		rank_math_the_breadcrumbs(); ?>
</nav>

<article class="post-grid">
	<?php if (have_posts()):
		$related_posts = get_posts(array(
			'numberposts' => 3,
			'orderby' => 'date',
			'post_type' => get_post_type(),
			'category' => wp_get_post_categories(get_the_ID()),
			'post_status' => 'publish',
			'exclude' => get_the_ID(),
		));
		?>
	<?php while (have_posts()):
			the_post(); ?>
	<?php if (has_post_thumbnail()): ?>
	<figure>
		<?php the_post_thumbnail('large', ['style' => 'object-fit: cover;']); ?>
	</figure>
	<?php endif; ?>
	<?php if (!empty(get_the_terms($post->ID, 'category'))): ?>
	<div class="mb-4">
		<?php get_template_part('templates/wp-block/post-terms', null, ['post' => $post]); ?>
	</div>
	<?php endif; ?>

	<h1><?php the_title(); ?></h1>
	<p><small><em>Published: <time datetime="<?= get_the_date('c'); ?>"><?= esc_html(get_the_date('F d, Y')); ?></time></em></small></p>
	<?php the_content(); ?>

	<?php endwhile; ?>
	<?php else: ?>
	<?php get_template_part('templates/content/none'); ?>
	<?php endif; ?>
</article>

<?php get_template_part('templates/parts/related-posts', null, ['related_posts' => $related_posts]); ?>

<?php get_footer() ?>