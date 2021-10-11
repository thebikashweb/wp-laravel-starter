<? get_header(); ?>

<?php $my_query = new WP_Query($args); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; ?>
<? get_footer() ?>