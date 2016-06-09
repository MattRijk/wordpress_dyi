<?php
/**
 * The template for displaying archive
 *
 *
 * @package Kage
 */
get_header(); ?>
		<div id="content">
			<div class="pagetitle pagetitle_blog">
				<div class="container">
					<div class="gutter clearfix">
						<h5><?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'kage' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'kage' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'kage' ) ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'kage' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'kage' ) ) . '</span>' );
						else :
							_e( 'Archives', 'kage' );
						endif;
						?></h5>
					</div>
				</div>	
			</div> <!--  END pagetitle  -->
			<div class="container">
				<div class="sidebar_right clearfix">
					<section class="pagesection">
						<div class="gutter">
							<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'content', 'posts');  ?>								
							<?php endwhile; ?>	
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
<?php get_footer(); ?>