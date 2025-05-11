<?php
/*
Template Name: About Us
*/
get_header(); ?>

<main class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
    <p>PAGE ABOUT US CODE TEXT TEST</p>
    <div class="prose">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
