<?php get_header(); ?>
<div id="main">
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			
			<?php the_content();?>
						
			<?php get_template_part('inc/meta'); ?>
			
			<div class="post-navigation">
				<div class="navigation-previous"><?php previous_post_link('&laquo; %link') ?></div>
				<div class="navigation-next"><?php next_post_link('%link &raquo;') ?></div>
			</div>
		</div>

	  <?php comments_template(); ?>
	
	  <?php endwhile; endif; ?>
	</div>
<?php get_sidebar(); ?>
</div><!-- end of main div -->
<?php get_footer(); ?>

