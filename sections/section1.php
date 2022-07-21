<div class="container row">
    <h1 class="col-8 col-md-12"><?php echo get_theme_mod('titre_home','A really professional structure for all your events!' )?></h1>
</div>

<section class="row section section--first">
    <div class="d-end">
        <article class="row single-post  col-8 col-md-12" >
            <?php // if(get_theme_mod( 'img_add_aboutus') != null){ ?>
            <div>
                <img src="<?php echo get_theme_mod( 'img_add_aboutus',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
            </div>
            <?php // }?>
            <div class="col-6 col-md-12">
                <h1><?php echo get_theme_mod('titre_aboutus','About-us' )?></h1>
                <p><?php echo get_theme_mod( 'description_aboutus','Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.' )?></p>
            </div>
        </article>
    </div>
</section>
