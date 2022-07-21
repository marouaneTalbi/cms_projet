<article class="single-post  " >
    <h1><?php echo get_theme_mod('titre_team','Our Team' )?></h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <?php //if(get_theme_mod( 'img_add_person1') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person1',get_bloginfo('template_url').'/assets/images/5.png' )?>" alt="">
                    </div>
                <?php //}?>
                    <h3><?php echo get_theme_mod('titre_person1','Sales Manager' )?></h3>
                    <p><?php echo get_theme_mod('description_person1','+33 1 53 31 25 23 sales@company.com' )?></p>
			
            </div>

            <div class="col-3">
                <?php //if(get_theme_mod( 'img_add_person2') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person2',get_bloginfo('template_url').'/assets/images/6.png' )?>" alt="">
                    </div>
                <?php //}?>
                    <h3><?php echo get_theme_mod('titre_person2','Event planner.' )?></h3>
                    <p><?php echo get_theme_mod('description_person2','+33 1 53 31 25 24
			plan@company.com' )?></p>
            </div>

            <div class="col-3">
                <?php //if(get_theme_mod( 'img_add_person3') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person3',get_bloginfo('template_url').'/assets/images/7.png' )?>" alt="">
                    </div>
                <?php //}?>
                    <h3><?php echo get_theme_mod('titre_person3','Designer' )?></h3>
                    <p><?php echo get_theme_mod('description_person3','+33 1 53 31 25 20
			            design@company.com' )?></p>
            </div>

            <div class="col-3">
                <?php //if(get_theme_mod( 'img_add_person4') != null){ ?>
                    <div class="image-card" >
                        <img class="image-card" src="<?php echo get_theme_mod( 'img_add_person4',get_bloginfo('template_url').'/assets/images/8.png' )?>" alt="">
                    </div>
                <?php //}?>
                    <h3><?php echo get_theme_mod('titre_person4','CEO' )?></h3>
                    <p><?php echo get_theme_mod('description_person4','+33 1 53 31 25 25
			ceo@company.com' )?></p>
            </div>
          
        </div>
    </div>
</article>