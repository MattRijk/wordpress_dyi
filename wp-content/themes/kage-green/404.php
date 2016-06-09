<?php
/**
 * The template for displaying all pages.
 *
 * @package Kage
 */
 get_header(); ?>
   		<div id="content">
			<div class="pagetitle pagetitle_blog">
				<div class="container">
					<div class="gutter clearfix">
						<h5><?php _e( 'Not found', 'kage' ); ?></h5>
						<p><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'kage' ); ?></p>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="sidebar_right clearfix">
					<section class="pagesection pagenotfound">
					</section>
				</div>
			</div>
		</div>
<?php get_footer(); ?>