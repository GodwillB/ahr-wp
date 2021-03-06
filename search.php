<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Ahr
 */

get_header();
?>

<section >
      <div class="m-3 container-2" style="background: url(https://clients.belva.co.ke/sandbox/wp-content/uploads/2022/05/bg.png) no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <div class="bg-back">
          <div class="row">
            <div class="text-left">
              <a href="<?php echo home_url('/'); ?>">
                
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
            <h1 class="heading-1 text-uppercase">Search Results</h1>
            <div class="py-3 px-3" style=" font-family: 'Arial';font-style: normal;font-weight: 400;font-size: 20px;"><?php echo the_field('header-subtitle'); ?></div>
           
          </div>
        </div>
      </div>
    </section>


		<section class="container">
		<div class="row p-4">
          <div class="col-md-8"></div>
          <div class="col-md-4">
          <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="">
          <div class="input-group" >
              <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="form-control search-form"  placeholder="SEARCH FOR A CASE STUDY...">
                <div class="input-group-append">
                  <button class="btn btn-secondary search-button" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
  </form>
           
        </div>
		<div class="row py-3">

		<?php if ( have_posts() ) : 
						global $wp_query;
						$total_results = $wp_query->found_posts;

				 ?>
			
      
    
        <div class="col-md-4">
          <a href="<?php echo the_permalink(); ?>" style="text-decoration: none;" >
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" style="width: 100%;height: 234px;object-fit: cover;" class="img-fluid">

            <h2 style="font-size: 24px; color: black;" class="heading  text-black f-28 py-2"><?php echo the_title(); ?></h2>


            <div class="py-2">
              <p class="button-55" style="min-width: 68px;height: 29px;font-size: 10px;">
              <?php $terms = get_the_terms( $post->ID , 'area_of_specialization' ); 
                      foreach ( $terms as $term ) {
                          $term_link = get_term_link( $term, 'area_of_specialization' );
                          if( is_wp_error( $term_link ) )
                          continue;
                      echo  $term->name;
                      } 
                  ?>
              </p>
            </div>



            <div class="border-right text-black pl-3">
              <div class="text text-black" style="font-weight: 400;font-size: 14px; color: black;overflow: hidden;display: -webkit-box; -webkit-line-clamp: 4;-webkit-box-orient: vertical;"><?php echo the_excerpt(); ?> </div>
            </div>

            <p class="text-black button-58 my-3">Read More
              <span style="margin-left: 12px;" >
                <i class="fa-solid text-white fa-lg fa-arrow-right"></i>
              </span>
            </p>

          </a>
        </div>

				<?php		
				else :
					get_template_part( 'page-templates/404', 'none' );
				endif;
			?>
    
      
     
    </div>
		</section>



<?php
// get_sidebar();
get_footer();
