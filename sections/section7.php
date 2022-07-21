<article class="single-post  " >
    <h1><?php echo get_theme_mod('titre_parties' )?></h1>
    <p><?php echo get_theme_mod('description_parties' )?></p>

    <div class="container">
        <div class="row">
            <?php if(get_theme_mod( 'img_add_parties') != null){ ?>
                <div class="image-card" >
                    <img class="image-card" src="<?php echo get_theme_mod( 'img_add_parties',get_bloginfo('template_url').'/assets/images/4.png' )?>" alt="">
                </div>
            <?php }?>
        </div>
    </div>
</article>