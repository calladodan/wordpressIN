<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/assets/css/meucss.css" rel="stylesheet">
</head>

<body>
	<header>
		<div class="backgroundTransparencia">
				<nav class="navbar navbar-inverse">
		  			<div class="container-fluid">
		    			<div class="navbar-header">
		      			<a class="navbar-brand" href="#">Itachi Traidor</a>
		    		</div>

    		<ul class="nav navbar-nav navbar-right">
      			<li class="active"><a href="#">Sobre</a></li>
      			<li><a href="#">Amaterasu</a></li>
      			<li><a href="#">Susanoo</a></li>
    		</ul>

  		</div>
		</nav>
					
		</div>
				
			</nav>
		</div>

	</header>