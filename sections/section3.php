<second class="row section" >
    <div class="container">
        <h1><?php echo get_theme_mod('titre_services1','Our Services')?></h1>
    </div>


    <div class="section-service row col-12">
        <?php //if(get_theme_mod( 'img_add_services1') != null){ ?>

                <img class="section-service col-3" src="<?php echo get_theme_mod( 'img_add_services1',get_bloginfo('template_url').'/assets/images/3.png' )?>" alt="">

        <?php //}?>

        <?php  //if(get_theme_mod( 'img_add_services2') != null){ ?>

                <img class="section-service col-3" src="<?php echo get_theme_mod( 'img_add_services2',get_bloginfo('template_url').'/assets/images/5.png' )?>" alt="">

        <?php // }?>

        <p class="d-center section-service align-center col-3"><?php echo get_theme_mod('titre_services2','Private Parties' )?></p>

            <img class="col-3 section-service" src="<?php echo get_theme_mod( 'img_add_services3',get_bloginfo('template_url').'/assets/images/12.png' )?>" alt="">

    </div>
</second>
 