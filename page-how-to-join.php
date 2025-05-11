<?php
/*
Template Name: How to Join
*/

get_header(); ?>

<main class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
    <div class="prose">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>


<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Hero</h1>
</section>


<section class="h-96 flex justify-center">
    <h1 class="text-4xl">How do I join?</h1>
</section>

<?php get_footer(); ?>
