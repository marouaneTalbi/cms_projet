<article class="single-post  " >
    <h1><?php echo get_theme_mod('titre_parties','Corp. Parties' )?></h1>
    <p><?php echo get_theme_mod('description_parties','Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.' )?></p>

    <div class="container">
        <div class="row">
            <?php //if(get_theme_mod( 'img_add_parties') != null){ ?>
                <div class="image-card" >
                    <img class="image-card" src="<?php echo get_theme_mod( 'img_add_parties',get_bloginfo('template_url').'/assets/images/9.png' )?>" alt="">
                </div>
            <?php //}?>
        </div>
    </div>
</article>