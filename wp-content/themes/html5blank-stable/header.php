<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'> 
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/iim/css/responsive.css">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		

			<header class="header clear" role="banner">

		<!-- wrapper -->
		

			<!-- header 
			<header class="header clear" role="banner">

					<!-- logo -->
				
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/dia.png" style="width: 5%;    position: absolute;" alt="Logo" class="logo-img">
						</a>
						
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
					<div class="paul">
						<img src="<?php echo get_template_directory_uri(); ?>/img/fall.jpg" alt="couple" id="hewit" class="img-responsive" >
					</div>

			</header>
			<!-- /header -->
