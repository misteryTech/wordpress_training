<?php get_header();?>

<section class="page-wrap">

<div class="container">




    <?php if(has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(); ?>"   alt="<?php the_title(); ?>" class="img-fluid">
    <?php endif;?>
    <div class="row">
    <div class="col-lg-6">

    <h1><?php echo the_title(); ?></h1>


    <?php get_template_part('includes/section','blogcontent'); ?>

    <?php wp_link_pages(); ?>
    </div>

    <div class="col-lg-6">

            <?php get_template_part('includes/form','inquiry');?>

            <h2>Specification</h2>
            <ul>
                <li>
                 Color: <?php echo the_field('colors');?>
                </li>

                <li>
                Registration: <?php echo the_field('registration');?>
                </li>

            </ul>


    </div>

    </div>


</div>
</section>

<?php get_footer();?>