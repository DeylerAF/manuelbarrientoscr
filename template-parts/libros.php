<?php
//Variables
$titulo_libros = get_sub_field('titulo_libros');
?>

<section id="libros" class="row">
    <h2 class="col-12">
        <?php echo $titulo_libros ?>
    </h2>


    <?php
    //Argumentos de "libros" 
    $argLibros = array(
        'posts_per_page' => 4,
        'post_type' => 'libro'
    );

    // the query
    $queryLibros = new WP_Query($argLibros); ?>

    <?php if ($queryLibros->have_posts()) : ?>

        <!-- pagination here -->

        <!-- the loop -->
        <?php while ($queryLibros->have_posts()) : $queryLibros->the_post(); ?>
            <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</section>