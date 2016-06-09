<?php 
/**
 * 
 * @package Kage 
 */
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<h2><a href="<?php the_permalink() ?>"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></a></h2>
	<hr />
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
	<?php the_post_thumbnail($post->ID, 'featured'); ?> 	
	<?php endif; ?>
	<p class="posted"><?php _e( 'Posted on', 'kage' ); ?> <?php the_time( get_option( 'date_format' ) ); ?></p>
	<?php the_excerpt(); ?>
	<div class="meta_bar clearfix">
		<div class="comments_count">
		    <?php comments_popup_link('<span class="icon comments"></span> No Comments', '<span class="icon comments"></span> 1 Comment', '<span class="icon comments"></span> % Comments', 'comment-link'); ?>
		</div>
		<div class="more_block">
			<a class="more" href="<?php the_permalink() ?>"><?php _e( 'Read More', 'kage' ); ?></a>
		</div>
		<div class="share_block">
			<?php _e( 'Categories:', 'kage' ); ?> <?php the_category(', '); ?>
		</div>	
	</div>
</article>