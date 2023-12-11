<?php
	extract(
		wp_parse_args($args, [
			'related_posts' => null,
			'section_title' => 'Related Posts'
		])
	);
?>

<?php if (!empty($related_posts)): ?>
<section class="is-layout-flow wp-block-group alignfull bg-gray-200 py-4">
	<div class="has-global-padding is-layout-constrained wp-block-group">
		<h2 class="h3 mb-4 text-primary"><?= $section_title ?></h2>
		<div class="is-layout-flow wp-block-query">
			<ul class="is-layout-flow is-flex-container columns-3 wp-block-post-template">
				<?php foreach ($related_posts as $related): ?>
				<li class="wp-block-post">
					<?php get_template_part('templates/wp-block/post', null, ['post' => $related, 'button_text' => 'Read More', 'show_cats' => true]); ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
<?php endif; ?>