<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title() ?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>

</head>

<body>
	
	<header>
	
		<p>tu jest header <p>
		
	</header>

	<div id="content">

		<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
				
					echo the_title($before, $after, $echo);
					echo the_content();

				endwhile;

			endif; 
		?>
		
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<p> Tu jest stopka </p>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
