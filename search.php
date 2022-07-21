<?php get_header() ?>

<?php
/*
Template Name: search
*/
?>



<?php get_header(); ?>
<?php
    $s = get_search_query();
    $args = array(
                    's' =>$s
                );

    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        _e("<h2 style='text-align:center'>Résultats de la recherche pour : ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
                ?>
                    <li style="display: flex;justify-content:center;">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php
            }
        }else{
?>
        <h2 style='text-align:center'>Nothing Found</h2>
        <div class="alert" style="text-align:center">
            <p>Désolé, mais rien ne correspondait à vos critères de recherche.</p>
        </div>
<?php } ?>
<div style="display: flex; justify-content: center">
    <div style="width: 800px;">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>