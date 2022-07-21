<article class="single-post  " >
    <h1><?php echo get_theme_mod('titre_about_us_section51' )?></h1>
    <div class="container">
        <div class="row">
            <div class="col-offset-3">
                <?php if(get_theme_mod( 'img_add_about_us_section5') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_about_us_section5',get_bloginfo('template_url').'/assets/images/4.png' )?>" alt="">
                    </div>
                <?php }?>
            </div>
            <div class="col-offset-3">
                <h3><?php echo get_theme_mod('titre_about_us_section52' )?></h3>
                <p><?php echo get_theme_mod('description_about_us_section5' )?></p>
            </div>
        </div>
    </div>
</article>