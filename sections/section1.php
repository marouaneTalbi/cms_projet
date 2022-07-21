<article class="single-post  col-offset-3" >
    
    <?php if(get_theme_mod( 'img_add_aboutus') != null){ ?>
        <div class="image-card" >
            <img class="image-card" src="<?php echo get_theme_mod( 'img_add_aboutus',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>
    <?php }?>

        <h1><?php echo get_theme_mod('titre_aboutus' )?></h1>
        <p><?php echo get_theme_mod( 'description_aboutus' )?></p>
</article>



