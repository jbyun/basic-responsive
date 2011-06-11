<?php get_header(); ?>
<div id="main">
	<section id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<?php the_content(__('Read more'));?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'blm_basic' ), 'after' => '</div>' ) ); ?>
			
			<?php get_template_part('inc/meta'); ?>

		</article> <!-- end post-idxx -->
		
	  <?php comments_template(); // Get wp-comments.php template ?>
	  <?php endwhile; else: ?> 
		
	  <p>Sorry, no posts matched your criteria.</p>
	
	  <?php endif; ?>
	 <?php get_template_part('inc/nav'); ?>
	</section> <!-- end of content -->

<?php get_sidebar(); ?>
</div><!-- end of main div -->
<?php get_footer(); ?>