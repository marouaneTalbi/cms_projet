<!DOCTYPE html>
<html >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="site-header">
			
			<div class="container dropdown	"  id="nav-container">
				<div class="row space-between">
					<h1>ESGI<span>.</span></h1>
					<span class="dropbtn">
						__<br>_
					</span>
				</div>

				<div class="centring-left dropdown-content">
					<?php wp_nav_menu(array(
						'menu' =>'my-custom-men',
						'menu_id' => 'top-menu',  
					)) ?>
				</div>

			</div>
		</header>