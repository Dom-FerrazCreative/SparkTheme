<section class="post-type-offset-slider" id="<?php the_sub_field( 'id' ); ?>" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Events_background.svg');  background-repeat: no-repeat; background-size: 100% 100%;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 col-lg-6 event-title">
				<?php the_sub_field( 'title' ); ?>
			</div>
			<div class="col-6 col-lg-6 d-flex justify-content-end">
			<div class="slider-arrow left">
			<svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M28.2857 9.35772H6.00436L12.7999 2.29941L10.5866 0L0 11L10.5866 22L12.7999 19.7006L6.00436 12.6423H28.2857V9.35772Z" fill="white" fill-opacity="0.3"/>


							<title>Path</title>
							<g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Home" transform="translate(-1415.000000, -2138.000000)" fill-rule="nonzero"
									stroke="#D4D4D4">
									<g id="Group-16" transform="translate(195.999900, 2117.300000)">
									</g>
								</g>
							</g>
						</svg></div>
					<div class="slider-arrow right">
					<svg width="57" height="22" viewBox="0 0 57 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 9.35772H50.9956L44.2001 2.29941L46.4134 0L57 11L46.4134 22L44.2001 19.7006L50.9956 12.6423H0V9.35772Z" fill="white"/>
							<title>Group 30</title>
							<g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Home" transform="translate(-1461.000000, -2116.000000)" fill-rule="nonzero">
									<g id="Group-16" transform="translate(195.999900, 2117.300000)">
										<g id="Group-30" transform="translate(1266.000000, 0.000000)">
											<polyline id="Path-Copy" stroke="#1D1E23"
												transform="translate(31.000000, 28.400000) rotate(-90.000000) translate(-31.000000, -28.400000) "
												points="23 23.9 31 32.9 39 23.9"></polyline>
										</g>
									</g>
								</g>
							</g>
						</svg></div>
				</div>
                </div>

		</div>
	</div>
	
	<?php $posts = get_sub_field( 'posts' ); ?>
	<?php if ( $posts ) : ?>
	<div class="slider">
		<?php foreach ( $posts as $post ) : ?>
		<?php setup_postdata ( $post ); ?>
		<div class="slide">
			<a href="<?php the_permalink(); ?>" class="post-type-slide"
				style="background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url(<?php the_post_thumbnail_url('large');?>);">
				<div class="event-date">
					<?php $date = strtotime(get_field('date')); ?>
						<div class="date-num">
							<?php echo date('d', $date); ?>
						</div>
						<div class="date-month">
							<?php echo date('M', $date); ?>
						</div>
				</div>
				<div class="event-dets-card">
					<div class="container">
						<div class="row">
							<div class="col-9">
								<div class="title">
									<?php the_title(); ?>
								</div>
								<div class="location">
									<img class='loc-img' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location.svg';/>
									<?php the_field( 'location' ); ?>
								</div>
							</div>
							<div class="col-3 justify-content-end align-self-end time">
								<?php echo date('g:i a', $date); ?>
							</div>
						</div>
					</div>
				</div>

				<div class='d-flex'>
				<?php
				$post_tags = get_the_tags();
 
				if ( $post_tags ) {
					foreach( $post_tags as $tag ) {
					echo '<div class="tag">' . $tag->name . '</div>'; 
					}
				}
				?>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="d-flex align-items-start justify-content-start events-desc">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link['url'] ); ?>"
					target="<?php echo esc_attr( $button_link['target'] ); ?>"
                    class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include 'arrow.php'; ?></a>
                <?php endif; ?>
			</div>
		</div>
	</div>

	<?php endif; ?>

</section>
