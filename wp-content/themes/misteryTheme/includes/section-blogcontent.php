<?php if( have_posts() ): while( have_posts() ): the_post();?>


<?php
// Get the user's ID
$user_id = get_current_user_id(); // You can replace this with any specific user ID

// Get the user's email address
$user_email = get_the_author_meta('user_email', $user_id);

// Get the avatar
$avatar_url = get_avatar($user_email);

// Output the avatar

?>

        <?php the_content(); ?>

        <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        ?>


        <?php
              echo $avatar_url;
        ?>
        <p>POSTED BY <?php echo $fname; ?> <?php echo $lname;?></p>


            TAGS:
            <?php
$tags = get_the_tags();
if ($tags) {
    foreach ($tags as $tag) :
?>
        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-success">
            <?php echo $tag->name; ?>
        </a>
<?php
    endforeach;
} else {
    echo "No tags available.";
}
?>

<br>
Category:


    <?php


        $categories = get_the_category();
        foreach($categories as $cat):?>
            <a href="<?php echo get_category_link($cat->term_id);?>">
                 <?php echo $cat->name; ?>
                 </a>
        <?php endforeach; ?>
        <br>

        <?php echo get_the_date(); ?>

        <?php echo comments_template(); ?>
        <?php endwhile; else: endif; ?>
