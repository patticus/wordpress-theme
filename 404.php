
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="container-404">
    <div class="bubble">
    <h1 class="h1404">I'm 404'd</h1>
    </div>
    <div class="text404">
    <p class="p404">Looks like you've stumbled upon a page that doesn't exist!</p>
    <p class="p404"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Return Home', 'uppercase' ); ?></a></p>
  </div>
  </div>
	<?php wp_footer(); ?>

</body>
</html>
