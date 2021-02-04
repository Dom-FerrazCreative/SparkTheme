<section class="masthead-video-background" id="<?php the_sub_field( 'id' ); ?>" >
    <div class="container">
        <div class="video-background">
            <video playsinline autoplay muted loop id="myVideo">
                <source src="<?php the_sub_field( 'video' ); ?>">
            </video>
        </div>

        <div class="watchNow">
        <div class="wrapper">
            <svg xmlns="http://www.w3.org/2000/svg"
            xmlns:xhtml="http://www.w3.org/1999/xhtml"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1"
            width="10cm" height="10cm"
            viewBox="0 0 1000 1000"
            preserveAspectRatio="xMinYMin"
            >
            <defs>
            <path id="textPath" d="M 250 500 A 250 250 0 1 1 250 500.0001"/>
            </defs>
            <text class="circle-text" x="0" y="0" text-anchor="middle"><textPath xlink:href="#textPath" startOffset="50%" >WATCH OUR PROMO REEL</textPath></text>
            </svg>
            <h1 class="hello">&#9658;</h1>
  </div>
        </div>

        <div class="masthead-text" data-aos="fade-up">
            <div class="row">
                <div class="col-12 d-flex align-items-start align-items-md-start flex-column" >
                    <div class="m-title">
                        <?php the_sub_field( 'title' ); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-11 d-flex justify-content-start align-items-start align-self-start flex-column offset-1 subtitle">
                    <?php the_sub_field( 'subtitle' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
