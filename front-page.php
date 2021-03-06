<?php
get_header();

?>
<div role="alert">

<?php
if(get_field('big_alert'))
{
    echo '<h1 class="h1 h1-style ">' . get_field('big_alert') . '</h1>';
    
} 

if(get_field('alert_message'))
{
    echo '<p class=" h1-style ">' . get_field('alert_message') . '</p>';
    
}

?>
    <!-- <h1 class="h1 minus-h1"> <?php the_field('big_alert'); ?>   </h1> -->
</div>
<img class="img-fluid img" src= " <?php the_field('main_image') ; ?> ">
    <div class="p-5">
        <p class="fst-graph ">  <?php  the_field('front_page_into1'); ?>  </p>
        <p class="fst-graph">  <?php  the_field('front_page_info2'); ?>  </p>
        <p class="fst-graph">  <?php  the_field('front_page_info3'); ?>  </p>
        <h2 class="fst-graph">  <?php  the_field('front_page_info4'); ?>  </h2>
        <p class="fst-graph">  <?php  the_field('front_page_info5'); ?>  </p>
    </div>

<div class=" boarderline">

    <h1 class=" h1 t-al">Location</h1>
    <div class=" flexy">
        
        <div class=" fp-box">

            <div class="mb-3 ">
                <p class="mx-auto no-marg ">Email:</p>
                <a  class=" contactsize" href="mailto:<?php the_field('email_address', 'option'); ?>" > <?php the_field('email_address', 'option'); ?></a> 
            </div>

            <div class="mb-3">
                <p class="mx-auto no-marg ">Mobile:</p>
                <a class=" contactsize"  href="tel:<?php the_field('mobile_number', 'option'); ?>"> <?php the_field('mobile_number', 'option');  ?></a>
            </div>

                <p class="  no-marg ">Landline:</p>
                <div class="btm-margin">
                <a class=" contactsize"href="tel:<?php the_field('landline_number', 'option'); ?>"> <?php the_field('landline_number', 'option');  ?></a>
            </div>

            <div class="address top-marg">
               
                <?php
                    $address = get_field('address', 'option');
                    if( $address ): ?>
                            <div class="">
                                <p>  <?php echo ( $address ['street']  ); ?>  </p>
                                <p>  <?php echo ( $address ['city']  ); ?>  </p>
                                <p>  <?php echo ( $address ['post_code']  ); ?>  </p>
                            </div>    
                        <?php endif; ?>

            </div>

        </div>
    <a class="justify-content-center mx-auto " href="https://www.google.com/maps/place/Totterdown+Children's+Community+Workshop/@51.4399464,-2.5764452,16z/data=!4m5!3m4!1s0x0:0xbe48b80e98e3d84c!8m2!3d51.4404747!4d-2.5740419">
    <img class="img-fluid container-sm btm-margin " style= max-width:100%; src = " <?php the_field('map'); ?> ">        </a>
    </div>   

</div>


    <div class="flexbox container mb-2">
            <h1 class="h1 t-al">Clubs</h1>
            <div class="flexy block">
                <div class="col fp-graph ">

                    <h2 class="text-center">After School </h2>
                    
                    <p class="fst-graph mr-4"> <?php the_field('after_school_description'); ?> </p>
                    <p>Daily Fee <?php the_field('after_school_daily_fee' , 'option'); ?> </p>
                    <p> Start time: <?php the_field('start_for_ASC','option'); ?> </p>
                    <p>Finish time: <?php the_field('finish_for_ASC','option'); ?> </p>
                </div>
                
                <div class="col fp-graph">

                    <h2 class="text-center">Holiday </h2>
                    <p class="fst-graph">  <?php the_field('holiday_club_description'); ?> </p>
                    <p> Start time: <?php the_field('start_for_HC','option'); ?> </p>
                    <p> Finish time: <?php the_field('finish_for_HC','option'); ?> </p>
                    <p class=""> £<?php the_field('holiday_club_daily_fee','options'); ?>   Fee per Child </p>
                    <p class=""> £<?php the_field('registration','options'); ?>    Yearly fee </p>
                </div>
                
            </div>       
          <div class="block ">
              <?php $link = get_field('after_school_booking_link');
            if( $link ): ?>
            <button class="btn btn-outline-secondary mr-auto " href="<?php echo esc_url( $link ); ?>">Book For After School Club</button>
            <?php endif; ?>

         
            <?php
        // MUST CHANGE THE LINK
        $link = get_field('ipal_link');
        if( $link ): ?> 
            <button class="btn btn-outline-primary mx_auto" href="<?php echo esc_url( $link ); ?>">Book For Holiday Club</button>
            <?php endif; ?>

        </div>
    </div>  
            <!-- end of Flexbox -->

        <!-- <?php 
$link = get_field('ofsted');
if( $link ): ?>
    <a class="btn btn-color btn-lg btn-block  mb-1" href="<?php echo esc_url( $link ); ?>">Ofsted report</a>
<?php endif; ?>

<div>
    <?php 
    $link = get_field('charity_link');
    if( $link ): ?>
        <a class="btn btn-color btn-lg btn-block" href="<?php echo esc_url( $link ); ?>">Charity information</a>
    <?php endif; ?> -->
</div>

<?php


get_footer();

?>