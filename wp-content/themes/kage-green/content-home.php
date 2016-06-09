<?php 
/**
 * 
 * @package Kage 
 */
get_header(); ?>
		<div id="content">
		    <?php if ( of_get_option('top_image') ) { ?>
			<div class="mainslider">
				<div class="container">
					<div class="gutter clearfix">
						<div class="imgbox">
							<img class="fullwidth" src="<?php echo esc_url(of_get_option('top_image')); ?>" alt="" />
						</div>
					</div>
				</div>	
			</div>
			<?php } ?>
			<div class="services_block">
				<div class="container">
					<div class="gutter">
						<?php if ( of_get_option('top_title') ) { ?>
						<h1><span><?php echo esc_html(of_get_option('top_title')); ?></span></h1>
						<div class="services_slider">
							<ul>
								<li>
									<a class="service_item" href="<?php echo esc_url(of_get_option('top_box_1_link')); ?>">
									    <?php if ( of_get_option('top_box_1_icon') ) { ?>
										<span class="service_icon">
											<img class="default fullwidth" src="<?php echo esc_url(of_get_option('top_box_1_icon')); ?>" alt="" />
											<img class="hover fullwidth" src="<?php echo esc_url(of_get_option('top_box_1_icon')); ?>" alt="" />
										</span>
										<?php } ?>
										<span class="service_title"><?php echo esc_html(of_get_option('top_box_1_title')); ?></span>
										<?php echo esc_html(of_get_option('top_box_1_content')); ?>
									</a>
								</li>
								<li>
									<a class="service_item" href="<?php echo esc_url(of_get_option('top_box_2_link')); ?>">
									    <?php if ( of_get_option('top_box_2_icon') ) { ?>
										<span class="service_icon">
											<img class="default fullwidth" src="<?php echo esc_url(of_get_option('top_box_2_icon')); ?>" alt="" />
											<img class="hover fullwidth" src="<?php echo esc_url(of_get_option('top_box_2_icon')); ?>" alt="" />
										</span>
										<?php } ?>
										<span class="service_title"><?php echo esc_html(of_get_option('top_box_2_title')); ?></span>
										<?php echo esc_html(of_get_option('top_box_2_content')); ?>
									</a>
								</li>
								<li>
									<a class="service_item" href="<?php echo esc_url(of_get_option('top_box_3_link')); ?>">
									    <?php if ( of_get_option('top_box_3_icon') ) { ?>
										<span class="service_icon">
											<img class="default fullwidth" src="<?php echo esc_url(of_get_option('top_box_3_icon')); ?>" alt="" />
											<img class="hover fullwidth" src="<?php echo esc_url(of_get_option('top_box_3_icon')); ?>" alt="" />
										</span>
										<?php } ?>
										<span class="service_title"><?php echo esc_html(of_get_option('top_box_3_title')); ?></span>
										<?php echo esc_html(of_get_option('top_box_3_content')); ?>
									</a>
								</li>
								<li>
									<a class="service_item" href="<?php echo esc_url(of_get_option('top_box_4_link')); ?>">
									    <?php if ( of_get_option('top_box_4_icon') ) { ?>
										<span class="service_icon">
											<img class="default fullwidth" src="<?php echo esc_url(of_get_option('top_box_4_icon')); ?>" alt="" />
											<img class="hover fullwidth" src="<?php echo esc_url(of_get_option('top_box_4_icon')); ?>" alt="" />
										</span>
										<?php } ?>
										<span class="service_title"><?php echo esc_html(of_get_option('top_box_4_title')); ?></span>
										<?php echo esc_html(of_get_option('top_box_4_content')); ?>
									</a>
								</li>
							</ul>
							<div class="clear"></div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="welcome_block">
			    <?php if ( of_get_option('blue_title') ) { ?>
				<div class="advertisement_block">
					<div class="container">
						<div class="gutter">
							<div class="advertisement">
								<table>
									<tbody>
										<tr>
											<td class="tdw1">
												<p class="adv_title"><?php echo esc_html(of_get_option('blue_title')); ?></p>
											</td>
											<td class="tdw2">
												<p><?php echo esc_html(of_get_option('blue_content')); ?></p>
											</td>
											<td class="tdw3">
												<a class="adv_button" href="<?php echo esc_url(of_get_option('blue_button_link')); ?>"><?php echo esc_html(of_get_option('blue_button_text')); ?></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php if ( of_get_option('welcome_title') ) { ?>
				<div class="container">
					<div class="columnwrapp clearfix">
					    <?php if ( of_get_option('welcome_image') ) { ?>
						<div class="column2">						
							<div class="gutter">
								<img class="fullwidth" src="<?php echo esc_url(of_get_option('welcome_image')); ?>" alt="" />
							</div>
						</div>
						<?php } ?>
						<div class="column2">						
							<div class="gutter">
								<div class="welcome_text">
									<h4><span><?php echo esc_html(of_get_option('welcome_title')); ?></span> <?php echo esc_html(of_get_option('welcome_title2')); ?></h4>
									<p><?php echo esc_html(of_get_option('welcome_content')); ?></p>
									<a class="button" href="<?php echo esc_url(of_get_option('welcome_button_link')); ?>"><?php echo esc_html(of_get_option('welcome_button_text')); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div> 
			<?php if ( of_get_option('title_area_2') ) { ?>
			<div class="portfolio_block">
				<div class="container">
					<div class="gutter">
						<h1><span><?php echo esc_html(of_get_option('title_area_2')); ?></span></h1>
					</div>
					<div class="portfolio_slider">
						<ul>
							<li>
								<div class="gutter">
								    <?php if ( of_get_option('box_1_image') ) { ?>
									<div class="img_box">
										<div class="inner">
											<img class="fullwidth" src="<?php echo esc_url(of_get_option('box_1_image')); ?>" alt="" />
											<a href="<?php echo esc_url(of_get_option('box_1_link')); ?>"><div class="overlay"></div></a>
										</div>
									</div>
									<?php } ?>
									 <?php if ( of_get_option('box_1_text') ) { ?><a class="btn" href="<?php echo esc_url(of_get_option('box_1_link')); ?>"><?php echo esc_html(of_get_option('box_1_text')); ?></a><?php } ?>
								</div>
							</li>
							<li>
								<div class="gutter">
								    <?php if ( of_get_option('box_2_image') ) { ?>
									<div class="img_box">
										<div class="inner">
											<img class="fullwidth" src="<?php echo esc_url(of_get_option('box_2_image')); ?>" alt="" />
											<a href="<?php echo esc_url(of_get_option('box_2_link')); ?>"><div class="overlay"></div></a>
										</div>
									</div>
									<?php } ?>
									 <?php if ( of_get_option('box_2_text') ) { ?><a class="btn" href="<?php echo esc_url(of_get_option('box_2_link')); ?>"><?php echo esc_html(of_get_option('box_2_text')); ?></a><?php } ?>
								</div>
							</li>
							<li>
								<div class="gutter">
								    <?php if ( of_get_option('box_3_image') ) { ?>
									<div class="img_box">
										<div class="inner">
											<img class="fullwidth" src="<?php echo esc_url(of_get_option('box_3_image')); ?>" alt="" />
											<a href="<?php echo esc_url(of_get_option('box_3_link')); ?>"><div class="overlay"></div></a>
										</div>
									</div>
									<?php } ?>
									 <?php if ( of_get_option('box_3_text') ) { ?><a class="btn" href="<?php echo esc_url(of_get_option('box_3_link')); ?>"><?php echo esc_html(of_get_option('box_3_text')); ?></a><?php } ?>
								</div>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php if ( of_get_option('testimonial_box_text') ) { ?>
			<div class="testimonial_block">
				<div class="container">
					<div class="testimonial_slider">
						<ul>
							<li>
								<p class="quote"><?php echo esc_html(of_get_option('testimonial_box_text')); ?></p>
								<p class="testimonial_auth"><?php echo esc_html(of_get_option('testimonial_box_name')); ?></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php } ?>
		</div> 
<?php get_footer(); ?>