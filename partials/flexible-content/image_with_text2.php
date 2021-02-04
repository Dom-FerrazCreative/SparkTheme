<section class="image-text <?php the_sub_field( 'image_position' ); ?>" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container">
		<div class="row justify-content-start">
			<div class="col-11 image <?php if(get_sub_field( 'image_position' ) == 'right'):?><?php endif;?>"><?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
				<img class='about-image' src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-11 image align-self-end <?php if(get_sub_field( 'image_position' ) == 'left'):?><?php endif;?> text sub-title-text-btn ">
			</div>
			<div class="col-1 justify-content-end align-items-end">
				<div class="textarea ">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
					<div class="title">
						<?php the_sub_field( 'title' ); ?>
					</div>
				</div>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
					<?php if ( $button_link ) : ?>
						<a href="<?php echo esc_url( $button_link) ; ?>" class="arrow-btn"><?php the_sub_field( 'button_text' ); ?><?php include "arrow.php";?></a>
					<?php endif; ?>
				</div>
			</div>

		<div class="row explain">
			<div class="col-4 main-text">
				<?php the_sub_field( 'main_text' ); ?>
			</div>
			<div class="col-8 side-text">
				<?php the_sub_field( 'text' ); ?>
			</div>
		</div>
	</div>
</section>
