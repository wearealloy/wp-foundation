<?php
get_header();
?>

<main id="main" tabindex="-1">
<?php while( have_posts() ): the_post();
    $post_id = get_the_ID();
    $current_slug = $post->post_name;


endwhile; ?>
</main>
<?php get_footer(); ?>