<?php get_header(); ?>
<div id="main">
	<section id="content">
		<h1>Search results</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<?php the_excerpt(__('Read more'));?>
			
			<?php get_template_part('inc/meta'); ?>

		</article>
	  <?php endwhile; else: ?>
	  <p>Sorry, no posts matched your criteria. Please try another keyword.</p>
	  <?php endif; ?>
	 <?php get_template_part('inc/nav'); ?>
</section> <!-- end section -->
<?php get_sidebar(); ?>
</div><!-- end of main div -->
<?php get_footer(); ?>
