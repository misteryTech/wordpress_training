<?php get_header();?>

<section class="page-wrap"><div class="container">


    <h1><?php echo single_cat_title(); ?></h1>


    <?php get_template_part('includes/section','blogcontent'); ?>


<?php
global $wp_query;

$big = 9999999999;
$paginate_links = paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'type' => 'array', // This will output an array of pagination links
));

if ($paginate_links) {
    echo '<ul class="pagination">';
    foreach ($paginate_links as $link) {
        // Add Bootstrap classes to the pagination links
        $link = str_replace('page-numbers', 'page-link', $link);
        $link = str_replace('prev page-numbers', 'page-item prev', $link);
        $link = str_replace('next page-numbers', 'page-item next', $link);
        $link = str_replace('current', 'active', $link);
        $link = str_replace('<a', '<a class="page-link"', $link);
        echo '<li class="page-item">' . $link . '</li>';
    }
    echo '</ul>';
}
?>




</div>
</section>

<?php get_footer();?>