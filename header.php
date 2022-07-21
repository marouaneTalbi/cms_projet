<!DOCTYPE html>
<html >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="site-header">
			
			<div class="container dropdown">
				<div class="row">
                    <div class="col-12 d-space-between align-center">
                        <a class="logo" href="/">
                            <img src="<?= get_bloginfo('template_url').'/assets/svg/ESGI-logo.svg' ?>" alt="logo">
                        </a>
                        <button>
                            <img src="<?= get_bloginfo('template_url').'/assets/svg/burger-menu.svg' ?>">
                        </button>
                    </div>
				</div>
            </div>


            <div class="dropdown-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-space-between align-center">
                            <a class="logo" href="/">
                                <img src="<?= get_bloginfo('template_url').'/assets/svg/ESGI-logo-white.svg' ?>" alt="logo">
                            </a>
                            <button>
                                <img src="<?= get_bloginfo('template_url').'/assets/svg/close.svg' ?>">
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-space-between d-end">
                        <?php wp_nav_menu(array(
                            'menu' =>'my-custom-men',
                            'menu_id' => 'top-menu',
                        )) ?>
                    </div>
				</div>

			</div>
		</header>