<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ahr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<script src="https://kit.fontawesome.com/8189e49a49.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<style>

@font-face {
  font-family: myFirstFont;
  src: url("<?php echo get_template_directory_uri(); ?>/css/fonts/GothamBlack.otf");
}

@font-face {
  font-family: regular;
  src: url("<?php echo get_template_directory_uri(); ?>/css/fonts/G_ari_bd.TTF");
}
</style>

	<div class="ahr-parent-sticky">
		<p class="button-58 menu-toggle ahr-menu-absolute" onclick="openNav()" >Menu <svg style="margin-left: 12px;" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.4998 0.5C10.1967 0.5 9.90605 0.620407 9.69173 0.834733C9.4774 1.04906 9.35699 1.33975 9.35699 1.64285C9.35699 1.94595 9.4774 2.23664 9.69173 2.45096C9.90605 2.66529 10.1967 2.7857 10.4998 2.7857H19.6426C19.9457 2.7857 20.2364 2.66529 20.4507 2.45096C20.6651 2.23664 20.7855 1.94595 20.7855 1.64285C20.7855 1.33975 20.6651 1.04906 20.4507 0.834733C20.2364 0.620407 19.9457 0.5 19.6426 0.5H10.4998Z" fill="white"/>
			<path d="M4.78717 8.49966C4.78717 8.19656 4.90758 7.90587 5.1219 7.69154C5.33623 7.47722 5.62692 7.35681 5.93002 7.35681H15.0728C15.3759 7.35681 15.6666 7.47722 15.8809 7.69154C16.0952 7.90587 16.2156 8.19656 16.2156 8.49966C16.2156 8.80276 16.0952 9.09345 15.8809 9.30777C15.6666 9.5221 15.3759 9.64251 15.0728 9.64251H5.93002C5.62692 9.64251 5.33623 9.5221 5.1219 9.30777C4.90758 9.09345 4.78717 8.80276 4.78717 8.49966Z" fill="white"/>
			<path d="M0.214539 15.3572C0.214539 15.0541 0.334945 14.7634 0.549271 14.5491C0.763596 14.3348 1.05428 14.2144 1.35739 14.2144H10.5002C10.8033 14.2144 11.094 14.3348 11.3083 14.5491C11.5226 14.7634 11.643 15.0541 11.643 15.3572C11.643 15.6603 11.5226 15.951 11.3083 16.1653C11.094 16.3796 10.8033 16.5001 10.5002 16.5001H1.35739C1.05428 16.5001 0.763596 16.3796 0.549271 16.1653C0.334945 15.951 0.214539 15.6603 0.214539 15.3572Z" fill="white"/>
			</svg> 
		</p>
	</div>

	<div class="ahr-parent-">
		<div class="ahr-chat-absolute">
			<svg xmlns="http://www.w3.org/2000/svg" width="118" height="116" viewBox="0 0 118 116" fill="none">
				<path d="M0 115.378L118 0V115.378H0Z" fill="#F9423A"/>
				<path d="M85.2274 62.9334C88.0002 62.935 90.7365 63.5644 93.2312 64.7743C95.7259 65.9842 97.914 67.7433 99.6315 69.9194C101.349 72.0956 102.551 74.6324 103.148 77.3394C103.744 80.0464 103.72 82.8533 103.076 85.5495C102.433 88.2457 101.186 90.7612 99.4314 92.9072C97.6764 95.0532 95.4579 96.7739 92.9426 97.9402C90.4273 99.1066 87.6804 99.6883 84.908 99.6417C82.1357 99.5951 79.4099 98.9213 76.9352 97.6711L76.6575 97.5219L68.2918 99.6099C68.1308 99.6503 67.963 99.6554 67.7998 99.6247C67.6367 99.594 67.4821 99.5283 67.3468 99.4321C67.2116 99.3359 67.0988 99.2115 67.0162 99.0675C66.9337 98.9235 66.8834 98.7633 66.8689 98.598V98.4099L66.901 98.2194L68.9895 89.8585L68.8449 89.5832C67.7947 87.5163 67.1481 85.2681 66.94 82.9592L66.8826 82.0827L66.8666 81.2888C66.8666 76.4207 68.801 71.7519 72.2443 68.3096C75.6877 64.8672 80.3578 62.9334 85.2274 62.9334ZM86.375 83.5833H79.4897L79.2831 83.6016C79.0185 83.6495 78.7791 83.7888 78.6068 83.9951C78.4344 84.2014 78.34 84.4617 78.34 84.7305C78.34 84.9993 78.4344 85.2596 78.6068 85.4659C78.7791 85.6722 79.0185 85.8114 79.2831 85.8593L79.4897 85.8777H86.375L86.5815 85.8593C86.8461 85.8114 87.0855 85.6722 87.2578 85.4659C87.4302 85.2596 87.5246 84.9993 87.5246 84.7305C87.5246 84.4617 87.4302 84.2014 87.2578 83.9951C87.0855 83.7888 86.8461 83.6495 86.5815 83.6016L86.375 83.5833ZM90.9652 76.7H79.4897L79.2831 76.7183C79.0185 76.7662 78.7791 76.9055 78.6068 77.1118C78.4344 77.3181 78.34 77.5784 78.34 77.8472C78.34 78.116 78.4344 78.3763 78.6068 78.5826C78.7791 78.7889 79.0185 78.9281 79.2831 78.976L79.4897 78.9944H90.9652L91.1718 78.976C91.4363 78.9281 91.6757 78.7889 91.8481 78.5826C92.0204 78.3763 92.1148 78.116 92.1148 77.8472C92.1148 77.5784 92.0204 77.3181 91.8481 77.1118C91.6757 76.9055 91.4363 76.7662 91.1718 76.7183L90.9652 76.7Z" fill="white"/>
			</svg>
		</div>
	</div>
	
	<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<?php
		wp_nav_menu(
			array(
				'container_id'    => '',
				'container_class' => 'overlay-content',
				'menu_class'      => '',
				'container'         => 'div',
				'depth'            => 2, 
				'menu_id'      => 'main_nav',
				'theme_location'  => 'main-menu',
				'li_class'        => '',
				'fallback_cb'     => false,
			)
		);
		?>
 
</div>
	
	<style>


.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 999997;
  top: 0;
  left: 0;
  background-color: #F9423A;
  background-color: #F9423A;
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: white;
  display: block;
  transition: 0.3s;
	    font-family: 'DM Sans', sans-serif;
    font-size: 20px;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>

	<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
