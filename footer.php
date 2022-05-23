<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ahr
 */

?>

	   <footer class="hide-on-mobile">
      <div class="container">
        <div class="row py-5">
          <div class="col-md-3 text-left">
            <div class="row"><img src="<?php echo home_url('/'); ?>wp-content/uploads/2022/05/Vector-5.svg" alt="" style="width: 170px;
height: 84px;" class="img-fluid"></div>
            <div class="row pt-4">
            <div class="d-inline" style="">

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
          <div class="col-md-2">
            <h3 class="dm fw-bold f-16 pb-3 text-right">About Us</h3>
            <ul class="list-unstyled text f-14 text-right">
              <li>Management</li>
              <li>Our People</li>
              <li>About Us</li>
              <li>CSR</li>
              <li>Careers</li>
            </ul>

          </div>
          <div class="col-md-2">
            <h3 class="dm f-16 pb-3 text-right">Services</h3>

            <ul class="list-unstyled text f-14 text-right">
              <li>Interior Design</li>
              <li>Construction</li>
              <li>Architecture</li>
              <li>Rentals</li>
              <li>About Us</li>
            </ul>

          </div>
          <div class="col-md-2">
            <h3 class="dm f-16 pb-3 text-right">Sectors</h3>

            <ul class="list-unstyled text f-14 text-right">
              <li>Real Estate</li>
              <li>Banking</li>
              <li>Hospitality</li>
<!--               <li>About Us</li>
              <li>About Us</li> -->
            </ul>

          </div>
          <div class="col-md-2 fancy-submenu text-right">
            <h3 class="dm f-16">Careers</h3>
            <h3 class="dm f-16">Contact Us</h3>
            <h3 class="dm f-16">Media</h3>
            <h3 class="dm f-16">Press Release</h3>
            <h3 class="dm f-16">Sectors</h3>
          </div>

        </div>

        <div class="row py-3" style="border-top: 2px solid #F9423A;;">
          <div class="col-md-3">
            <p class="dm f-16 fw-normal">© AHR Group Limited 2021</p>
          </div>
          <div class="col-md-4">
            <div class="d-inline">
              <p class="dm f-16 fw-normal">Terms and Conditions</p>
              
            </div>
          </div>
          <div class="col-md-3">
            <p class="dm f-16 fw-normal">Privacy Policy</p>
          </div>
          <div class="col-md-2">
            <p class="dm f-16 fw-normal">SITE BY STAXO</p>
          </div>

        </div>
      </div>
    </footer>


    <footer class="hide-on-desktop">
      <div class="container">
        <div class="row py-5">
          <div class="col-md-3 text-center">

					<div class="row">
						<svg width="290"  height="246" viewBox="0 0 290 204" fill="none" style="height: 246px !important;position: relative;right: 20px;" xmlns="http://www.w3.org/2000/svg" >
              <g filter="url(#filter0_d_2456_212)">
              <path d="M116.455 60L60 142.698V144H74.5896L116.455 82.1395V144H129.142V60H116.455Z" fill="#131E29"/>
              <path d="M166.567 95.814H136.754V108.837H166.567V144H179.254V60H166.567V95.814Z" fill="#131E29"/>
              <path d="M202.09 60H188.134V73.0233H202.09C207.164 73.0233 212.873 78.2326 212.873 84.7442C212.873 91.2558 208.433 95.814 202.09 95.814H188.134V102.977L216.045 144H230V142.698L206.53 108.186C213.93 106.45 228.097 98.8093 225.56 82.1395C223.022 65.4698 208.856 60.4341 202.09 60Z" fill="#131E29"/>
              </g>
              <defs>
              <filter id="filter0_d_2456_212" x="0" y="0" width="290" height="204" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset/>
              <feGaussianBlur stdDeviation="30"/>
              <feColorMatrix type="matrix" values="0 0 0 0 0.188235 0 0 0 0 0.192157 0 0 0 0 0.2 0 0 0 0.3 0"/>
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2456_212"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2456_212" result="shape"/>
              </filter>
              </defs>
              </svg>
						</div>

						<div class="row">

						<div class="d-inline" style="">

<?php
    
    $args = array(
    'post_type' => 'socials',

    'posts_per_page' => -1,
    // 'banking'=> 'corporate-institutional-banking',
    
    );
    
    $query = new WP_Query( $args ); ?>

    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

        <a href="<?php echo the_field('social_media_link'); ?>" class="text-decoration-none" target="_blank"><i class="fa-brands fa-2xl fa-<?php echo the_field('choice_of_the_media'); ?>"></i></a>
       
        <?php endwhile; ?>     
      </div>

						</div>
            

               
              
            

          </div>
          <div class="col-md-2">
            <h3 class="dm fw-bold f-16 pb-3 text-center">About Us</h3>
            <ul class="list-unstyled mobile-footer-link text-center">
              <li>Our People</li>
              <li>Campaigns</li>
              <li>PCKO</li>
              <!-- <li>About Us</li>
              <li>About Us</li> -->
            </ul>

          </div>
          <div class="col-md-2">
            <h3 class="dm f-16 pb-3 text-center">Services</h3>

            <ul class="list-unstyled mobile-footer-link text-center">
              <li>Architecture</li>
              <li>Building Consultancy</li>
              <li>Sustainable Design</li>
              <li>Interior Design</li>
              <li>Masterplanning</li>
            </ul>

          </div>
          
         

        </div>

        <div class="py-3" style="border-top: 2px solid #F9423A;;">
          <div class="row">
            <p class="dm f-16 fw-normal" style="
            text-align: center;">© AHR Group Limited 2021</p>
          </div>

          <div class="row">
            <div class="w-50">
             

            <p class="dm f-16 fw-normal d-inline" style="
            text-align: left;">Privacy Policy</p>
              
            </div>
            <div class="w-50">
             

            <p class="dm f-16 fw-normal d-inline" style="
            text-align: center;float: right;">Privacy Policy</p>
              
            </div>
          </div>
         
          <div class="row">
            <p class="dm f-16 fw-normal" style="font-family: 'DM Sans';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 29px;
text-align: center;">SITE BY STAXO</p>
          </div>

        </div>
      </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
