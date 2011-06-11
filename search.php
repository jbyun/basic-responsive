<?php get_header(); ?>
<div id="main">
	<div id="content">
		<h1>Search results</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<?php the_excerpt(__('Read more'));?>
			
			<?php get_template_part('inc/meta'); ?>

		</div>
	  <?php endwhile; else: ?>
	  <p>Sorry, no posts matched your criteria. Please try another keyword.</p>
	  <?php endif; ?>
	 <?php get_template_part('inc/nav'); ?>
</div>
<?php get_sidebar(); ?>
</div><!-- end of main div -->
<?php get_footer(); ?>
