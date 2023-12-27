<?php

/**
 * Default Singleton Template
 */

get_header();

?>

<?php if (function_exists('rank_math_the_breadcrumbs')): ?>
	<nav class="has-blue-200-background-color">
		<div class="page-padding">
			<?php rank_math_the_breadcrumbs(); ?>
		</div>
	</nav>
<?php endif; ?>


<div class="page-padding">
	<article class="mw-lg m-auto">
		<div class="article-grid">
			<div class="article-grid__title">
				<div class="mw-md">
					<?php if (!empty(get_the_terms($post->ID, 'category'))): ?>
					<div class="mb-4">
						<?php get_template_part('templates/wp-block/post-terms', null, ['post' => $post]); ?>
					</div>
					<?php endif; ?>

					<div class="mw-sm">
						<h1><?php the_title(); ?></h1>
						<p class="text-lg">Lead (excerpt)</p>
					</div>
				</div>
			</div>
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
					the_post();
				?>
					<?php if (has_post_thumbnail()): ?>
						<div class="article-grid__image">
							<figure class="mw-sm">
								<?php the_post_thumbnail('full', ['style' => 'object-fit: contain;']); ?>
							</figure>
						</div>
					<?php endif; ?>
					<div class="article-grid__content">
						<div class="mw-sm">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
				<div class="article-grid__content">
					<div class="mw-sm">
							<?php get_template_part('templates/content/none'); ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="article-grid__sidebar">
				<p><small><em>Published: <time datetime="<?= get_the_date('c'); ?>"><?= esc_html(get_the_date('F d, Y')); ?></time></em></small></p>
					<?php if (!empty(get_the_terms($post->ID, 'category'))): ?>
					<div class="mb-4">
						<?php get_template_part('templates/wp-block/post-terms', null, ['post' => $post]); ?>
					</div>
					<?php endif; ?>

					If author
			</div>
		</div>
	</article>
</div>


<?php get_template_part('templates/parts/related-posts', null, ['related_posts' => $related_posts]); ?>

<?php get_footer() ?>