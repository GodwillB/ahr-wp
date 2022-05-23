<?php

get_header(); ?>

<section >
      <div class="m-3 container-2" style="background: url( <?php echo the_field('header_image'); ?>) no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="bg-back">
          <div class="row">
            <div class="text-left">
              <a href="/">
                
                <svg width="233" style="float: left;" height="166" viewBox="0 0 233 166" fill="none" xmlns="http://www.w3.org/2000/svg">
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
          <div class=" row mx-auto pb-5">
            <h1 class="heading-1 f-48"><?php echo the_title(); ?></h1>
            <p class="text py-3 px-3"><?php echo the_field('intro_text'); ?></p>
           
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row py-5">

          <div class="col-md-6">
            <h1 class="heading-1 f-40 ahr-sec-text py-2">INTRODUCTION</h1>

            <div class="border-right">
				<div class="text"><?php echo the_field('1_content'); ?></div>

              

            </div>
           

          </div>

          <div class="col-md-6">
            <div class="p-2">
              <img src="<?php echo the_field('1-image'); ?>" class="img-fluid" alt="">
            </div>

          </div>

        </div>
      </div>
    </section>


    <section style="background: #F9F9F9;">
      <div class="container">
        <div class="row py-5">

          

          <div class="col-md-6">
            <div class="p-2">
              <img src="<?php echo the_field('2-image'); ?>" class="img-fluid" alt="">
            </div>

          </div>

          <div class="col-md-6">
            <h1 class="heading-1 f-40 ahr-sec-text py-2">PRE-AMBLE</h1>

            <div class="border-right">
              <div class="text"><?php echo the_field('2-content'); ?></div>

            </div>
           

          </div>

        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row py-5">

          <div class="col-md-6">
            <h1 class="heading-1 f-40 ahr-sec-text py-2">CONCLUSION</h1>

            <div class="border-right">
            <div class="text"><?php echo the_field('3-content'); ?></div>

            </div>
           

          </div>

          <div class="col-md-6">
            <div class="p-2">
               <img src="<?php echo the_field('3-image'); ?>" class="img-fluid" alt="">
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="ahr-sec-back">
      <div class="container py-4">
        <h1 class="heading-1 f-40 text-white pt-5 pb-3">OTHER CASE STUDIES</h1>

        <div class="row">
			
			<?php
				    $post_terms = wp_get_object_terms($post->ID, array('fields'=>'ids'));

                    $args = array(
                        'post_type' => array('case_studies'),
                        
                        'posts_per_page' => 3,
                        'post__not_in' => array($post->ID),
                        'order' => 'ASC',
                    );

                    $otherproducts_areas = new WP_Query( $args );

                    if ( $otherproducts_areas->have_posts() ) {
                    while ( $otherproducts_areas->have_posts() ) {
                        $otherproducts_areas->the_post();

                        ?>
			
          <div class="col-md-4">
            <a href="<?php echo the_permalink(); ?>" style="text-decoration: none;" >
              <img src="<?php echo the_post_thumbnail_url(); ?>" style="width: 100%;
		height: 234px;object-fit: cover;" alt="" class="img-fluid">

              <h2 style="font-size: 24px;" class="heading  text-white f-28 py-4"><?php echo the_title(); ?></h2>

              <div class="border-right-2 text-white pl-3">
                <p class="text" style="font-weight: 400;
						font-size: 14px; overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 4;
		-webkit-box-orient: vertical;"><?php echo the_field('intro_text'); ?></p>

                
  
  
              </div>

              <p class="button-57 my-3">Read More   <span >
                <svg style="margin-left: 12px;" width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.151306 8.5C0.151306 8.10218 0.351485 7.72064 0.707804 7.43934C1.06412 7.15804 1.54739 7 2.05131 7H17.2513C17.7552 7 18.2385 7.15804 18.5948 7.43934C18.9511 7.72064 19.1513 8.10218 19.1513 8.5C19.1513 8.89782 18.9511 9.27936 18.5948 9.56066C18.2385 9.84196 17.7552 10 17.2513 10H2.05131C1.54739 10 1.06412 9.84196 0.707804 9.56066C0.351485 9.27936 0.151306 8.89782 0.151306 8.5Z" fill="white"/>
                  <path d="M12.5757 1.29664C12.3613 1.08232 12.0706 0.961909 11.7675 0.961909C11.4644 0.961909 11.1738 1.08232 10.9594 1.29664C10.7451 1.51097 10.6247 1.80165 10.6247 2.10476C10.6247 2.40786 10.7451 2.69855 10.9594 2.91287L17.4243 9.37779C17.6387 9.59212 17.9294 9.71253 18.2325 9.71253C18.5356 9.71253 18.8263 9.59212 19.0406 9.3778C19.2549 9.16347 19.3753 8.87278 19.3753 8.56968C19.3753 8.26658 19.2549 7.97589 19.0406 7.76156L12.5757 1.29664Z" fill="white"/>
                  <path d="M10.9594 15.7034C10.7451 15.4891 10.6247 15.1984 10.6247 14.8953C10.6247 14.5922 10.7451 14.3015 10.9594 14.0871L17.4244 7.62222C17.6387 7.4079 17.9294 7.28749 18.2325 7.28749C18.5356 7.28749 18.8263 7.4079 19.0406 7.62222C19.2549 7.83655 19.3753 8.12724 19.3753 8.43034C19.3753 8.73344 19.2549 9.02413 19.0406 9.23845L12.5757 15.7034C12.3613 15.9177 12.0707 16.0381 11.7676 16.0381C11.4645 16.0381 11.1738 15.9177 10.9594 15.7034Z" fill="white"/>
                  </svg>
  
              </span></p>

            </a>
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


    <?php get_footer(); ?>