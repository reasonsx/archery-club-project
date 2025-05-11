<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>

<div class="content">
    <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>

    <?php
    // WordPress loop to display blog posts
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
