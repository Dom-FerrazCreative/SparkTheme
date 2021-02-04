<section class="image-text <?php the_sub_field( 'image_position' ); ?>" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row top justify-content-end image <?php if(get_sub_field( 'image_position' ) == 'right'):?><?php endif;?>"><?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img class='side-image' src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
			<div class="col-4 offset-2">
				<div class="img-sub">
					<?php the_sub_field( 'subtitle' ); ?>
				</div>
				<div class="img-title">
					<?php the_sub_field( 'title' ); ?>
				</div>
			</div>
		</div>
		<div class="row bottom">
			<div class="col-4 main_text">
				<?php the_sub_field( 'main_text' ); ?>
			</div>
			<div class="col-8 text">
				<?php the_sub_field( 'text' ); ?>
			</div>
		</div>
	</div>
</section>
