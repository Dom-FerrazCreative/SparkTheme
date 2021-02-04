<section class="features" id="<?php the_sub_field( 'id' ); ?>">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <div class="feature-text">
                <div class="fTitle">
                    <?php the_sub_field( 'feature-title' ); ?>
                </div>
                <div class="fSubtitle">
                    <?php the_sub_field( 'subtitle' ); ?>
                </div>
                <div class="viewAll">
                    <?php the_sub_field( 'view_all_button' ); ?>
                        <?php $view_all_text = get_sub_field( 'view_all_text' ); ?>
                        <?php if ( $view_all_text ) : ?>
                            <a href="<?php echo esc_url( $view_all_text) ; ?>"><?php echo esc_html( $view_all_text ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
                <?php
                    if( have_rows('features') ):
                        $i = 0;
                        while ( have_rows('features') ) : the_row(); ?>
                        <div class="feature-cards">

                            <?php $i++; ?>
                            <?php if (($i % 2)): ?>
                                <div class="title">
                                        <?php the_sub_field( 'title' ); ?>
                                        <div class="arrow-btn">
                                    <div class="learnMore">
                                        Learn More
                                    </div>
                            </div>
                                    </div>
                                <?php if ( get_sub_field( 'image' ) ) : ?>
                                    <img  class="fImage"src="<?php the_sub_field( 'image' ); ?>" />
                                <?php endif ?>

                            <?php endif ?>

                            </div>
                        <?php endwhile;
                    else :
                    endif;
                ?>

        </div>
        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <?php
                if( have_rows('features') ):
                    $i = 0;
                    while ( have_rows('features') ) : the_row(); ?>
                    <div class="feature-cards">
                        <?php $i++; ?>
                        <?php if (!($i % 2)): ?>
                            <div class="title">
                                <?php the_sub_field( 'title' ); ?>
                                    <div class="arrow-btn">
                                        <div class="learnMore">Learn More</div>
                                    </div>
                            </div> 
                            <?php if ( get_sub_field( 'image' ) ) : ?>
                                <img class="fImage" src="<?php the_sub_field( 'image' ); ?>" />
                            <?php endif ?>
                        <?php endif ?>
                    </div>

                    <?php endwhile;
                else :
                endif;
            ?>

        </div>
    </div>
</div>



</section>