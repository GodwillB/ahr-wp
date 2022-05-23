<?php
/**
 *
 * Template Name: Home
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AHR
 */

get_header(); ?>


<section>
      <div class="m-3 container-2" style="background: url(<?php echo the_field('page_banner'); ?>) no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="bg-back">
          <div class="row">
            <div class="text-left">
              <a href="">
                
                <svg width="233" class="logo" style="float: left;" height="166" viewBox="0 0 233 166" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d_2456_146)">
                  <path d="M85.5037 42L42 105.008V106H53.2425L85.5037 58.8682V106H95.2799V42H85.5037Z" fill="white"/>
                  <path d="M124.119 69.2868H101.146V79.2093H124.119V106H133.896V42H124.119V69.2868Z" fill="white"/>
                  <path d="M151.493 42H140.739V51.9225H151.493C155.403 51.9225 159.802 55.8915 159.802 60.8527C159.802 65.814 156.381 69.2868 151.493 69.2868H140.739V74.7442L162.246 106H173V105.008L154.914 78.7132C160.617 77.3902 171.534 71.569 169.578 58.8682C167.623 46.1674 156.706 42.3307 151.493 42Z" fill="white"/>
                  </g>
                  <defs>
                  <filter id="filter0_d_2456_146" x="-18" y="-18" width="251" height="184" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                  <feOffset/>
                  <feGaussianBlur stdDeviation="30"/>
                  <feColorMatrix type="matrix" values="0 0 0 0 0.188235 0 0 0 0 0.192157 0 0 0 0 0.2 0 0 0 0.3 0"/>
                  <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2456_146"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2456_146" result="shape"/>
                  </filter>
                  </defs>
                </svg>
      
              </a>
      
            </div>
          </div>
          <div class=" row mx-auto py-3">
            <h1 class="heading f-90"><?php echo the_field('banner_title'); ?></h1>
            <p class="text py-3"><?php echo the_field('banner_content'); ?></p>
            <a href="<?php echo the_field('button_link'); ?>" style="text-decoration: none !important;" >
              <p class="button-58"><?php echo the_field('button_title'); ?>
                <span style="margin-left: 12px;" >
                    <i class="fa-solid text-white fa-lg fa-arrow-right"></i>
                  </span>
                </p>
            </a>
          </div>
          <div class="row ml-auto p-4 hide-on-mobile">
            <div class="col-md-6">
               <div class="d-inline float-start">

               <?php

                // Check rows exists.
                if( have_rows('partners') ):

                    // Loop through rows.
                    while( have_rows('partners') ) : the_row(); 
                  
                    ?>

             

                 <img style="padding-right: 15px;padding-left: 15px;" src="<?php echo get_sub_field('partner_logo'); ?>" alt="<?php echo the_title(); ?>" class="img-fluid pl-2 pr-2">

                  <?php

                  // End loop.
                  endwhile;

                  // No value.
                  else :
                      // Do something...
                  endif;

                  ?>

               </div>
           
              
          </div>

         

        </div>
        <div class="row hide-on-desktop">
        <div class="d-inline float-start">

<?php

 // Check rows exists.
 if( have_rows('partners') ):

     // Loop through rows.
     while( have_rows('partners') ) : the_row(); 
   
     ?>



  <img style="padding:10px;" src="<?php echo get_sub_field('partner_logo'); ?>" alt="<?php echo the_title(); ?>" class="img-fluid pl-2 pr-2">

   <?php

   // End loop.
   endwhile;

   // No value.
   else :
       // Do something...
   endif;

   ?>

</div>
            

            </div>
      </div>
    </section>

    <section class="pt-3 pb-2 hide-on-mobile">
      <p class="button-55 heading-1">FOLLOW US ON SOCIAL MEDIA</p>
      <div class="d-inline" style="background: hwb(0 98% 2% / 0.893);padding-left: 45%;padding-top: 14px;padding-bottom: 14px;padding-right: 30px;">

      <?php
                $args = array(
                    'post_type' => array('socials'),
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                );

                $ahrf_areas = new WP_Query( $args );

                if ( $ahrf_areas->have_posts() ) {
                    while ( $ahrf_areas->have_posts() ) {
                        $ahrf_areas->the_post();

                        ?>

   
  

              <a href="<?php echo the_field('social_media_link'); ?>" class="text-decoration-none" target="_blank"><i class="fa-brands fa-xl fa-<?php echo the_field('choice_of_the_media'); ?>"></i></a>
            
              
              <?php 
                    }
                } else {
                    echo "NO DATA";
                }
                ?>
		        <?php wp_reset_postdata()?>
      </div>

    </section>


    <section class="hide-on-desktop">
      <div class="row">
        <div class="w-50"><p class="button-599 heading">FOLLOW US ON SOCIAL MEDIA</p></div>
        <div class="w-50">
        <div class="d-inline text-right" style="text-align: center;float: right;margin-top: 7%;">

<?php
          $args = array(
              'post_type' => array('socials'),
              'posts_per_page' => -1,
              'order' => 'DESC',
          );

          $ahrf_areas = new WP_Query( $args );

          if ( $ahrf_areas->have_posts() ) {
              while ( $ahrf_areas->have_posts() ) {
                  $ahrf_areas->the_post();

                  ?>




        <a href="<?php echo the_field('social_media_link'); ?>" class="text-decoration-none" target="_blank"><i class="fa-brands fa-xl fa-<?php echo the_field('choice_of_the_media'); ?>"></i></a>
      
        
        <?php 
              }
          } else {
              echo "NO DATA";
          }
          ?>
      <?php wp_reset_postdata()?>
</div>
        </div>
      </div>

    </section>

    <section class="py-1">
      <?php echo do_shortcode('[sp_wpcarousel id="123"]'); ?>
    </section>

 

    <section>
      <div class="container">
        <div class="row py-5">
          <div class="col-md-6 hide-on-desktop">
            <div class="p-2 mb-5">
              <div class="w-100" style="height: 350px;">

              <?php echo the_field('iframe'); ?>

              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <h1 class="heading-1 f-48 ahr-sec-text py-2"><?php echo the_field('white_title'); ?></h1>

            <div class="border-right">
              <div class="text f-18"><?php echo the_field('white_background_content'); ?>	</div>

            </div>
           

          </div>

          <div class="col-md-6 hide-on-mobile">
            <div class="p-2">
              <div class="w-100" style="height: 350px;">

              <?php echo the_field('iframe'); ?>

              </div>
              
            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="ahr-sec-back">
      <div class="container py-4">
        <h1 class="heading-1 f-40 text-white pt-5 pb-3">CASE STUDIES</h1>

        <div class="row pb-5">

        <?php
                $args = array(
                    'post_type' => array('case_studies'),
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                );

                $ahr_areas = new WP_Query( $args );

                if ( $ahr_areas->have_posts() ) {
                    while ( $ahr_areas->have_posts() ) {
                        $ahr_areas->the_post();

                        ?>
      
			
          <div class="col-md-4">
            <a class="ahr-sec-text" href="<?php echo the_permalink(); ?>" style="text-decoration: none;" >
              <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid" style="width: 100%;height: 240px;object-fit: cover;">

              <h2 style="font-size: 24px;" class="heading  text-white f-28 py-4"><?php echo the_title(); ?></h2>

              <div class="border-right-2 text-white pl-3">
                <div class="text" style="font-weight: 400;
                font-size: 14px;     overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 4;"><?php echo the_field('intro_text'); ?> </div>

                
  
  
              </div>

              <p class="button-57 my-3 ahr-sec-text">Read More     <span style="margin-left: 12px;" >
                    <i class="fa-solid ahr-sec-text fa-lg fa-arrow-right"></i>
                  </span>

            </a></p>
          </div>


          <?php 
                    }
                } else {
                    echo "NO DATA";
                }
                ?>
		        <?php wp_reset_postdata()?>
			
		 
         
        
        </div>

      </div>

    </section>


    <section>
      <div class="m-3 container-2" style="background: url(https://clients.belva.co.ke/sandbox/wp-content/uploads/2022/05/The-Spine-royal-college-of-physicians-1.png) no-repeat center center; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;">
        <div class="bg-back">
          <div class="mx-auto py-5">
            <h1 class="heading-1 f-48"><?php echo the_field('cta-title'); ?></h1>
            <div class="text-arial p-4"><?php echo the_field('cta-desc'); ?></div>
            <a href="<?php echo the_field('cta-link'); ?>" style="text-decoration: none !important;" >

            <div class="button-58-hover">
            <p class=" button-58">Get IN Touch
                <span style="margin-left: 12px;" >
                <i class="fa-solid text-white fa-lg fa-arrow-right"></i>
                  </span>
                </p>
            </div>
              
            </a>
          </div>

        </div>
      </div>
    </section>
	
	
	<?php get_footer(); ?>