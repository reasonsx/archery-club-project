<?php
/*
Template Name: How to Join
*/

get_header(); ?>

<main class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">How to Join</h1>
    <div class="prose">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
