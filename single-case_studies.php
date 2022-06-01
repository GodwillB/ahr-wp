<?php

get_header(); ?>

<section >
      <div class="m-3 container-2" style="background: url( <?php echo the_field('header_image'); ?>) no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="bg-back">
          <div class="row">
            <div class="text-left">
              <a href="<?php echo home_url('/'); ?>">
                
               <img src="
						   
						<?php 
						   
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
						   
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                       
							echo $image[0]; 
						   
						 ?>
						   " class="logo" style="float: left;" height="166">
      
              </a>
      
            </div>
          </div>
           <div class=" row mx-auto justify-content-center pb-5">
            <div class="col-md-8">
              <h1 class="heading-1 f-48 text-center"><?php echo the_title(); ?></h1>
              <p class="text-arial py-3 px-3 text-center"><?php echo the_field('intro_text'); ?></p>

            </div>
            
           
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
              <img src="<?php echo the_field('1-image'); ?>" class="img-fluid innner-case-img" alt="">
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
              <img src="<?php echo the_field('2-image'); ?>" class="img-fluid innner-case-img" alt="">
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
               <img src="<?php echo the_field('3-image'); ?>" class="img-fluid innner-case-img" alt="">
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

              <p class="button-57 my-3" style="font-size: 14px;">Read More   <span style="margin-left: 12px;" >
                    <i class="fa-solid ahr-sec-text fa-lg fa-arrow-right"></i>
                  </span>
               </p>

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