<?php if (have_rows('modulos_footer')) : ?>
    <?php $cantidadModulos = 1; ?>
    <?php while (have_rows('modulos_footer')) : the_row(); ?>

        <?php if (get_row_layout() == 'contacto') : ?>
        <?php get_template_part('template-parts/contacto'); ?>

        <?php elseif (get_row_layout() == 'derechos_reservados') : ?>
            <?php get_template_part('template-parts/derechos-reservados'); ?>


        <?php endif; ?>

        <?php $cantidadModulos++; ?>
    <?php endwhile; ?>
<?php endif; ?>