<?php
/**
 * The template for displaying 404 (Not Found) pages.
 */
?>
<?php get_header(); ?>
<div id="page">
	<article class="article">
		<div id="content_box" >
			<header>
				<div class="title">
					<h1><?php _e('Error 404 Not Found', 'best' ); ?></h1>
				</div>
			</header>
			<div class="post-content">
				<p><?php _e('Oops! We couldn\'t find this Page.', 'best' ); ?></p>
				<p><?php _e('Please check your URL or use the search form below.', 'best' ); ?></p>
				<?php get_search_form();?>
			</div><!--.post-content--><!--#error404 .post-->
		</div><!--#content-->
	</article>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>