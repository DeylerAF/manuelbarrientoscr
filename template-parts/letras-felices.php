<?php
//Variables
$titulo_letras = get_sub_field('titulo_letras');
?>

<section id="letras" class="row">
    <h2 class="col-12">
        <?php echo $titulo_letras ?>
    </h2>

    <?php
    //Argumentos de "letras" 
    $argLetras = array(
        'posts_per_page' => 4,
        'post_type' => 'letra'
    );

    // the query
    $queryLetras = new WP_Query($argLetras); ?>

    <?php if ($queryLetras->have_posts()) : ?>

        <!-- pagination here -->

        <!-- the loop -->
        <?php while ($queryLetras->have_posts()) : $queryLetras->the_post(); ?>
            <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</section>