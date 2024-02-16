<?php
$args = [
    'post_type' => 'cars', // Corrected 'post-type' to 'post_type'
];
$query = new WP_Query($args);
?>

<?php if ($query->have_posts()): ?> <!-- Corrected the usage of have_posts() -->

    <?php while ($query->have_posts()): $query->the_post(); ?> <!-- Corrected the usage of the_post() -->

            <div class="card">
                <div class="card-body">
                    <h6><?php the_title(); ?></h6>

                    <?php the_field('registration'); ?>
                </div>
            </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?> <!-- Reset post data after custom query -->


<?php endif; ?>