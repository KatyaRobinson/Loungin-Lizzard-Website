<?php 
	get_header();
?>
<?php 
	extract(etheme_get_blog_sidebar());
	$postspage_id = get_option('page_for_posts');
?>

<div class="page-heading bc-type-<?php etheme_option('breadcrumb_type'); ?>">
	<div class="container">
		<div class="row-fluid">
			<div class="span12 a-center">
				<h1 class="title"><span><?php echo get_search_query(); ?></span></h1>
				<span><?php etheme_breadcrumbs(); ?></span>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="page-content sidebar-position-<?php echo $position; ?> responsive-sidebar-<?php echo $responsive; ?>">
		<div class="row">
			<?php if($position == 'left'): ?>
				<div class="<?php echo $sidebar_span; ?> sidebar sidebar-left">
					<?php etheme_get_sidebar($sidebarname); ?>
				</div>
			<?php endif; ?>

			<div class="content <?php echo $content_span; ?>">
					<?php if ($blog_layout == 'grid'): ?>
						<div class="blog-masonry row">
					<?php endif ?>

						<?php if(have_posts()): while(have_posts()) : the_post(); ?>

								<?php get_template_part('content', $blog_layout); ?>

						<?php endwhile; ?>

					<?php if ($blog_layout == 'grid'): ?>
						</div>
					<?php endif ?>

				<?php else: ?>

					<h1><?php _e('No posts were found!', ETHEME_DOMAIN) ?></h1>

				<?php endif; ?>

				<div class="articles-nav">
					<div class="left"><?php next_posts_link(__('&larr; Older Posts', ETHEME_DOMAIN)); ?></div>
					<div class="right"><?php previous_posts_link(__('Newer Posts &rarr;', ETHEME_DOMAIN)); ?></div>
					<div class="clear"></div>
				</div>

			</div>

			<?php if($position == 'right'): ?>
				<div class="<?php echo $sidebar_span; ?> sidebar sidebar-right">
					<?php etheme_get_sidebar($sidebarname); ?>
				</div>
			<?php endif; ?>
		</div>


	</div>
</div>

	
<?php
	get_footer();
?>