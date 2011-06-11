<div id="sidebar">
	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

		<div id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</div>	
	    <div id="categories" class="widget"><h4>Categories</h4>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
		</div>
		<div id="archives" class="widget"><h4>Archives</h4>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</div>
		<div id="subscribe" class="widget"><h4>Subscribe</h4>
			<ul>
			   	<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
			 	<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
			</ul>
		</div>
	<?php endif; ?>
 </div>
