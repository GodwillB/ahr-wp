<?php
/**
 *
 * Template Name: Case Studies
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

    <section >
      <div class="m-3 container-2" style="background: url(https://clients.belva.co.ke/sandbox/wp-content/uploads/2022/05/bg.png) no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
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
          <div class=" row mx-auto pb-5">
            <h1 class="heading-2 text-uppercase"><?php echo the_title(); ?></h1>
            <div class="py-3 px-3" style=" font-family: 'Arial';font-style: normal;font-weight: 400;font-size: 20px;"><?php echo the_field('header-subtitle'); ?></div>
           
          </div>
        </div>
      </div>
    </section>

    <section style="" class="py-1">
      <div class="container py-1">
        <div class="hide-on-mobile">
        <div class="row py-1">
          <div class="col-md-8"></div>
          <div class="col-md-4">
          <form role="search" method="get" style="position: relative;top: 170%;" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="">
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
        </div>
        <div class="hide-on-desktop">
        <div class="container py-4">
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
        </div>
		  <div class="row py-4 mx-auto">
      <div class="tabs">
      <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone">All Categories</label>
          <div class="tab">
    <!-- <h1>Tab One Content</h1> -->
            <div class="row">
			
        <?php
        
        $args = array(
        'post_type' => 'case_studies',
        'posts_per_page' => -1,
        // 'banking'=> 'personal-banking',
        
        );
        
        $query = new WP_Query( $args ); ?>
        
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
      
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
                <div class="text text-black" style="font-weight: 400;font-size: 14px; color: black;overflow: hidden;display: -webkit-box; -webkit-line-clamp: 4;-webkit-box-orient: vertical;"><?php echo the_field('intro_text'); ?></div>
              </div>

              <p class="text-black button-58 my-3 " style="font-size: 14px;">Read More
                <span style="margin-left: 12px;" >
                  <i class="fa-solid text-white fa-lg fa-arrow-right"></i>
                </span>
              </p>

            </a>
          </div>
      
        <?php endwhile; ?>
       
      </div>
  </div>
  
  <input type="radio" name="tabs" id="tabtwo">
  <label for="tabtwo">Re-modelling</label>
  <div class="tab">
  <div class="row">
			
      <?php
      
      $args = array(
      'post_type' => 'case_studies',
      'posts_per_page' => -1,
      'area_of_specialization'=> 're-modelling',
      
      );
      
      $query = new WP_Query( $args ); ?>
      
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
    
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
              <div class="text text-black" style="font-weight: 400;font-size: 14px; color: black;overflow: hidden;display: -webkit-box; -webkit-line-clamp: 4;-webkit-box-orient: vertical;"><?php echo the_field('intro_text'); ?> </div>
            </div>

            <p class="text-black button-58 my-3" style="font-size: 14px;">Read More
              <span style="margin-left: 12px;" >
                <i class="fa-solid text-white fa-lg fa-arrow-right"></i>
              </span>
            </p>

          </a>
        </div>
    
      <?php endwhile; ?>
     
    </div>
  </div>

  <input type="radio" name="tabs" id="tabfour">
  <label for="tabfour">Interior Design</label>
  <div class="tab">
  <div class="row">
			
      <?php
      
      $args = array(
      'post_type' => 'case_studies',
      'posts_per_page' => -1,
      'area_of_specialization'=> 'interior-design',
      
      );
      
      $query = new WP_Query( $args ); ?>
      
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
    
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
              <div class="text text-black" style="font-weight: 400;font-size: 14px; color: black;overflow: hidden;display: -webkit-box; -webkit-line-clamp: 4;-webkit-box-orient: vertical;"><?php echo the_field('intro_text'); ?></div>
            </div>

            <p class="text-black button-58 my-3" style="font-size: 14px;">Read More
              <span style="margin-left: 12px;" >
                <i class="fa-solid text-white fa-lg fa-arrow-right"></i>
              </span>
            </p>

          </a>
        </div>
    
      <?php endwhile; ?>
     
    </div>
  </div>
  
  <input type="radio" name="tabs" id="tabthree">
  <label for="tabthree">Construction</label>
  <div class="tab">
  <div class="row">
			
      <?php
      
      $args = array(
      'post_type' => 'case_studies',
      'posts_per_page' => -1,
      'area_of_specialization'=> 'construction',
      
      );
      
      $query = new WP_Query( $args ); ?>
      
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
    
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
              <div class="text text-black" style="font-weight: 400;font-size: 14px; color: black;overflow: hidden;display: -webkit-box; -webkit-line-clamp: 4;-webkit-box-orient: vertical;"><?php echo the_field('intro_text'); ?> </div>
            </div>

            <p class="text-black button-58 my-3" style="font-size: 14px;">Read More
              <span style="margin-left: 12px;" >
                <i class="fa-solid text-white fa-lg fa-arrow-right"></i>
              </span>
            </p>

          </a>
        </div>
    
      <?php endwhile; ?>
     
    </div>
  </div>
</div>
<style>
  /**
 * Tabs
 */
.tabs {
	display: flex;
	flex-wrap: wrap; // make sure it wraps
}
.tabs label {
  background: #8080801a;
  order: 1;
    // Put the labels first: ;
    display: block;
   padding: 10px 16px;
    margin-right: 0.2rem;
    cursor: pointer;
    /* background: #F9F9F9; */
    font-weight: bold;
    transition: background ease 0.2s;
    /* color: #dc3545; */
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
line-height: 18px;
letter-spacing: 0.15em;
text-transform: uppercase;

/* Red */

color: #F9423A;
}
.tabs .tab {
	order: 99; // Put the tabs last
	flex-grow: 1;
	width: 100%;
	display: none;
	    padding: 2rem 1rem;
	/* background: #fff; */
}
.tabs input[type="radio"] {
	display: none;
}
.tabs input[type="radio"]:checked + label {
  background: #f9423a;
    color: white;
}
.tabs input[type="radio"]:checked + label + .tab {
	display: block;
}

@media (max-width: 45em) {
	.tabs .tab,
	.tabs label {
		order: initial;
	}
	.tabs label {
    background: #8080801a;
		width: 100%;
		margin-right: 0;
		margin-top: 0.2rem;
	}
}
</style>
		  </div>
       

   

      </div>

    </section>



	
	
<?php get_footer(); ?>