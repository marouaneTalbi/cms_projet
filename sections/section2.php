<article class="single-post  " >

<div class="container">
    <div class="row">
    <?php if(get_theme_mod( 'img_add_missions') != null){ ?>
        <div class="image-card col-2" >
            <img class="image-card" src="<?php echo get_theme_mod( 'img_add_missions',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>
    <?php }?>
    
        <div class="col-2">
            <h1><?php echo get_theme_mod('titre_missions1' )?></h1>
            <p><?php echo get_theme_mod( 'description_missions1' )?></p>
        
            <h1><?php echo get_theme_mod('titre_missions2' )?></h1>
            <p><?php echo get_theme_mod( 'description_missions2' )?></p>
        
            <h1><?php echo get_theme_mod('titre_missions3' )?></h1>
            <p><?php echo get_theme_mod( 'description_missions3' )?></p>
        </div>
    </div>
</div>
</article>