<?php 
/**
 * 
 * @package Kage 
 */
get_header(); 
if ( have_posts() ) : 
if ( 'posts' == get_option( 'show_on_front' ) ) {
?>
		<div id="content">
			<div class="pagetitle pagetitle_blog">
				<div class="container">
					<div class="gutter clearfix">
						<h5><?php _e( 'Blog', 'kage' ); ?></h5>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="sidebar_right clearfix">
					<section class="pagesection">
						<div class="gutter">
							<?php 
							$list_posts = kage_get_list_posts();
							while ( $list_posts->have_posts() ) {
								$list_posts->the_post();
								get_template_part( 'content', 'posts'); 								
							} 
							?>
							<p class="simplepag">
									<span class="prev"><?php next_posts_link(__('Previous Posts', 'kage')) ?></span>
									<span class="next"><?php previous_posts_link(__('Next posts', 'kage')) ?></span>
							</p>
						</div>
					</section>
					<?php  get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php } else { ?>		
        <?php 
		while ( have_posts() ) : the_post(); 
		    get_template_part( 'content', 'home' );
        endwhile; 
        ?>
<?php } 
endif; 
get_footer(); ?>