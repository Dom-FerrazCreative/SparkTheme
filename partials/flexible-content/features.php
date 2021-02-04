<section class="features" id="<?php the_sub_field( 'id' ); ?>">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                                <div class="content">
                                    <h3><?php the_sub_field( 'title' ); ?></h3>
                                    <div class="btn solid">Learn More                                 <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 5.89112H16.0195V7.95786H0V5.89112Z" fill="#070505"/>
                                <path d="M11.5759 13.85L10.1283 12.4024L15.6067 6.92501L10.1283 1.44759L11.5759 0L18.4999 6.92504L11.5759 13.85Z" fill="#070505"/>
                                </svg></div>
                                </div>
                                <?php if ( get_sub_field( 'image' ) ) : ?>
                                    <img  class="fImage-left"src="<?php the_sub_field( 'image' ); ?>" />
                                <?php endif ?>

                            <?php endif ?>

                            </div>
                        <?php endwhile;
                    else :
                    endif;
                ?>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php
                if( have_rows('features') ):
                    $i = 0;
                    while ( have_rows('features') ) : the_row(); ?>
                    <div class="feature-cards">
                        <?php $i++; ?>
                        <?php if (!($i % 2)): ?>
                            <div class="content">
                                <h3><?php the_sub_field( 'title' ); ?></h3>
                                <div class="btn solid">Learn More 
                                <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 5.89112H16.0195V7.95786H0V5.89112Z" fill="#070505"/>
                                <path d="M11.5759 13.85L10.1283 12.4024L15.6067 6.92501L10.1283 1.44759L11.5759 0L18.4999 6.92504L11.5759 13.85Z" fill="#070505"/>
                                </svg>

                                
                                </div>
                            </div>
                            <?php if ( get_sub_field( 'image' ) ) : ?>
                                <img class="fImage-right" src="<?php the_sub_field( 'image' ); ?>" />
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