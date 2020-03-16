<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="wp-content\themes\twentynineteen\style.css">

	<?php wp_head(); ?>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<div class="container">

		<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
			<a class="navbar-brand" href="#"> 
	    		<img src="/img/logo.png" width="30" height="50" alt="">PHU PC-et 
	  		</a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">

			    <img id="left_nav" src="/img/left_nav.png" >
			      <li class="nav-item active">
			        <a class="nav-link" href="#"><span class="align-middle">Strona Główna</span><span class="sr-only">(current)</span></a>
			      </li>
			    <img id="right_nav" src="/img/right_nav.png" >

			    <img id="left_nav" src="/img/left_nav.png" >		    	
			      <li class="nav-item">
			        <a class="nav-link" href="#"><span class="align-middle">Sklep</span></a>
			      </li>
			    <img id="right_nav" src="/img/right_nav.png" >

			    <img id="left_nav" src="/img/left_nav.png" >
			      <li class="nav-item">
			        <a class="nav-link" href="#"><span class="align-middle">Kasy Fiskalne</span></a>
			      </li>
			    <img id="right_nav" src="/img/right_nav.png" >

			    
			    <img id="left_nav" src="/img/left_nav.png" >
			     
			      <li class="nav-item dropdown" id="navbar">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <span class="align-middle">Agencja Reklamowa</span>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      </li>

			    <img id="right_nav" src="/img/right_nav.png" >

		    </ul>
		  </div>
		</nav>



		<!--
	<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

				<div class="site-branding-container">
					<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
				</div>
				
				<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
					<div class="site-featured-image">
						<?php
							twentynineteen_post_thumbnail();
							the_post();
							$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

							$classes = 'entry-header';
						if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
							$classes = 'entry-header has-discussion';
						}
						?>
						<div class="<?php echo $classes; ?>">
							<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
						</div>
						<?php rewind_posts(); ?>
					</div>
				<?php endif; ?>
			</header>-->

		</div>
	<div id="content" class="site-content">
