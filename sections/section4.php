<article class="single-post  " >
<h1><?php echo get_theme_mod('titre_partners' )?></h1>

<div class="container">
    <div class="row">

    <?php if(get_theme_mod( 'svg_add_partners1') != null){ ?>
        <div class="image-card col-2" >
            <img class="image-card" src="<?php echo get_theme_mod( 'svg_add_partners1',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>
    <?php }?>
    <?php if(get_theme_mod( 'svg_add_partners2') != null){ ?>
        <div class="image-card col-2" >
            <img class="image-card" src="<?php echo get_theme_mod( 'svg_add_partners2',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>
    <?php }?>

    <?php if(get_theme_mod( 'svg_add_partners3') != null){ ?>
        <div class="image-card col-2" >
            <img class="image-card" src="<?php echo get_theme_mod( 'svg_add_partners3',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>
    <?php }?>

    <?php if(get_theme_mod( 'svg_add_partners4') != null){ ?>
        <div class="image-card col-2" >
            <img class="image-card" src="<?php echo get_theme_mod( 'svg_add_partners4',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>

    <?php }?>

    <?php if(get_theme_mod( 'svg_add_partners5') != null){ ?>
        <div class="image-card col-2" >
            <img class="image-card" src="<?php echo get_theme_mod( 'svg_add_partners5',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>
    <?php }?>
    
    <?php if(get_theme_mod( 'svg_add_partners6') != null){ ?>
        <div class="image-card col-2" >
            <img class="image-card" src="<?php echo get_theme_mod( 'svg_add_partners6',get_bloginfo('template_url').'/assets/images/1.png' )?>" alt="">
        </div>
    <?php }?>

    </div>
</div>
</article>