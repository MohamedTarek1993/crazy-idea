<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crazy_Idea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php global $base; ?>

	<!---------------------- start loader -------------------------------------------->
	<!-- <div id="preloader"></div> -->
	<!---------------------- finish loader -------------------------------------------->
	<!---------------------- start scroll-up -------------------------------------------->
  <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!---------------------- finish scroll-up -------------------------------------------->
	<!-- =========== ? NavBar =========== -->
	<nav class="navbar navbar-expand-lg bg-transparent fixed-top" id="navbar">
		<div class="container">
			<?php
			if (has_custom_logo()) {
				the_custom_logo();
			}
			?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<?php echo get_menu('main-menu', 'navbar-nav') ?>
			</div>
		</div>
	</nav>
	<!-- =========== ? NavBar =========== -->
