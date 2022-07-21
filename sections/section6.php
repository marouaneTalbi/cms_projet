<article class="single-post  " >
    <h1><?php echo get_theme_mod('titre_team' )?></h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <?php if(get_theme_mod( 'img_add_person1') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person1',get_bloginfo('template_url').'/assets/images/4.png' )?>" alt="">
                    </div>
                <?php }?>
                    <h3><?php echo get_theme_mod('titre_person1' )?></h3>
                    <p><?php echo get_theme_mod('description_person1' )?></p>
            </div>

            <div class="col-3">
                <?php if(get_theme_mod( 'img_add_person2') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person2',get_bloginfo('template_url').'/assets/images/4.png' )?>" alt="">
                    </div>
                <?php }?>
                    <h3><?php echo get_theme_mod('titre_person2' )?></h3>
                    <p><?php echo get_theme_mod('description_person2' )?></p>
            </div>

            <div class="col-3">
                <?php if(get_theme_mod( 'img_add_person3') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person3',get_bloginfo('template_url').'/assets/images/4.png' )?>" alt="">
                    </div>
                <?php }?>
                    <h3><?php echo get_theme_mod('titre_person3' )?></h3>
                    <p><?php echo get_theme_mod('description_person3' )?></p>
            </div>

            <div class="col-3">
                <?php if(get_theme_mod( 'img_add_person4') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person4',get_bloginfo('template_url').'/assets/images/4.png' )?>" alt="">
                    </div>
                <?php }?>
                    <h3><?php echo get_theme_mod('titre_person4' )?></h3>
                    <p><?php echo get_theme_mod('description_person4' )?></p>
            </div>
          
        </div>
    </div>
</article>