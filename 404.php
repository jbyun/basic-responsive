<?php header("HTTP/1.1 404 Not Found"); ?>
<?php header("Status: 404 Not Found"); ?>
<?php get_header(); ?>
<div id="main">
	<div id="content">
		<div class="hentry">
			<h1>Oops.. File or page not found.</h1>
			
			<p>We've recently made changes to our website and the page you are looking for might have been deleted or moved. Please <a href="<?php echo home_url(); ?>">visit our home page instead</a>. </p>

			<p>Sorry for the inconvenience.</p>
		</div>
	</div>
<?php get_sidebar(); ?>
</div><!-- end of main div -->
<?php get_footer(); ?>