<selection class="row section section-second">
    <div class="row col-8 col-md-12">
        <div class="d-flex">
            <?php // if(get_theme_mod( 'img_add_missions') != null){ ?>
            <div>
                <img class="img-second" src="<?php echo get_theme_mod( 'img_add_missions',get_bloginfo('template_url').'/assets/images/2.png' )?>" alt="">
            </div>
            <?php // }?>

            <div class="col-8">
                <h1><?php echo get_theme_mod('titre_missions1','Who are we?' )?></h1>
                <p><?php echo get_theme_mod( 'description_missions1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.' )?></p>

                <h1><?php echo get_theme_mod('titre_missions2','Our vision' )?></h1>
                <p><?php echo get_theme_mod( 'description_missions2','Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.' )?></p>

                <h1><?php echo get_theme_mod('titre_missions3','Our mission' )?></h1>
                <p><?php echo get_theme_mod( 'description_missions3','Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas.' )?></p>
            </div>
        </div>
    </div>
</selection>