<?php get_header(); ?>
<div id="main">
	
	<section id="content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
			<?php endwhile; endif; ?>
		</article>
		
	</section> <!-- end of content  -->
	
<?php get_sidebar(); ?>

</div><!-- end of main div -->

<?php get_footer(); ?>
