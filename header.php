<!DOCTYPE html>
<html >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="site-header">
			<div class="container" >
				<div class="row space-between">
		
					<h1>ESGI<span>.</span></h1>
					<button>
						__<br>_
					</button>
				</div>
			</div>
			<?php wp_nav_menu(array(
				'menu' =>'my-custom-men'
			)) ?>
		</header>