<?php
/**
* Single Event
*
*
* @since   1.0.0
* @package WP
*/
get_header(); ?>
<section class="page-header <?php if (has_post_thumbnail()): echo'image'; endif;?>"  <?php if (has_post_thumbnail()):?> style="background-image:linear-gradient(to right, rgba(18, 60, 105, 0.70), rgba(0, 0, 0, 0.20)),url(<?php the_post_thumbnail_url();?>" <?php endif;?> >
<?php if ( has_post_thumbnail() ) {?> <div class="overlay"></div><?php }?>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section><?php get_footer(); ?>
<section class='text'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_field( 'description' ); ?>
                    <?php the_field( 'date' ); ?>
                    <?php 
                    $query_string = urlencode(get_field( 'location' ));
                    
                ?>
                <?php

                $address = 'avenida+gustavo+paiva,maceio,alagoas,brasil';

                $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');

                $output= json_decode($geocode);

                $lat = $output->results[0]->geometry->location->lat;
                $long = $output->results[0]->geometry->location->lng;

                ?>  

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src='https://maps.google.com/maps?q=<?php echo $query_string; ?>"=&output=embed' frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div> -->
                <form action="http://maps.google.com/maps" method="get" target="_blank">
                    <!-- <input type="hidden" name="saddr" value='<?php echo $lat?> ' /> -->
                <input type="hidden" name="daddr" value='<?php the_field( 'location' ); ?>' />
                <input type="submit" value="Get directions" />
                </form>
            </div>
        </div>

    </div>
</section>