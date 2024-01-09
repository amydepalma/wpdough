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
			<div class="article-grid__title pt-6">
				<?php if (!empty(get_the_terms($post->ID, 'category'))): ?>
				<div class="mb-4">
					<?php get_template_part('templates/wp-block/post-terms', null, ['taxonomy' => 'category', 'post' => $post]); ?>
				</div>
				<?php endif; ?>

				<div class="mw-sm">
					<h1 class="mb-3"><?php the_title(); ?></h1>
					<p class="text-xl mb-0"><?= wp_strip_all_tags( get_the_excerpt() , true ); ?></p>
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
				<div class="mw-sm">
					<figure class="mb-0">
						<?php the_post_thumbnail('full', ['style' => 'object-fit: cover; max-height: 32rem; border-radius: var(--img-border-radius']); ?>
					</figure>
				</div>
			</div>
			<?php endif; ?>

			<div class="article-grid__content">
				<div class="mw-sm">
					<?php the_content(); ?>
					<?php the_content(); ?>
					<?php the_content(); ?>
					<?php the_content(); ?>
					<?php the_content(); ?>
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

			<div class="article-grid__sidetop">
				<p class="fw-bold text-sm text-uppercase"><time datetime="<?= get_the_date('c'); ?>"><?= esc_html(get_the_date('M. d Y')); ?></time> &bull; [5 min read]</p>
				<?php if (!empty(get_the_terms($post->ID, 'tag'))): ?>
				<div class="mb-4">
					<?php get_template_part('templates/wp-block/post-terms', null, ['taxonomy' => 'post_tag', 'post' => $post]); ?>
				</div>
				<?php endif; ?>

				If author
			</div>
			<div class="article-grid__sidebottom">
				<div class="article-grid__sidebottom-inner">
					Sidebottom
				</div>
			</div>
		</div>
	</article>
</div>


<?php get_template_part('templates/parts/related-posts', null, ['related_posts' => $related_posts]); ?>

<?php get_footer() ?>