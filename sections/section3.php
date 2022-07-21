<article class="single-post  " >
    <h1><?php echo get_theme_mod('titre_services1','Our Services')?></h1>

    <div class="container">
        <div class="row">
            <?php //if(get_theme_mod( 'img_add_services1') != null){ ?>
                <div class="image-card" >
                    <img class="image-card" src="<?php echo get_theme_mod( 'img_add_services1',get_bloginfo('template_url').'/assets/images/3.png' )?>" alt="">
                </div>
            <?php //}?>
                
            <?php  //if(get_theme_mod( 'img_add_services2') != null){ ?>
                <div class="image-card" >
                    <img class="image-card" src="<?php echo get_theme_mod( 'img_add_services2',get_bloginfo('template_url').'/assets/images/5.png' )?>" alt="">
                </div>
            <?php // }?>

            <p><?php echo get_theme_mod('titre_services2','Private Parties' )?></p>
            <div class="image-card" >
                <img class="image-card" src="<?php echo get_theme_mod( 'img_add_services3',get_bloginfo('template_url').'/assets/images/12.png' )?>" alt="">
            </div>
        </div>
    </div>
</article>
 