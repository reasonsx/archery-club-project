<?php
/*
Template Name: About Us
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


<section class="h-96 flex flex-col justify-center mx-40">
    <h1 class="text-4xl">Our story</h1>
    <p>Sønderborg Archery Guild was founded on May 29, 1954 and is a member of Archery Denmark.
       <br>
       <br>
       The primary focus is target shooting with all bow types:
       longbows, recurve bows and compound bows.
       <br>
       <br>
       We are a club with room for those who want to shoot for
       fun and exercise, but also those who want to train to be at
       an elite level in archery and, for example, become Danish Champion.
    </p>
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Meet our members</h1>
</section>

<?php get_footer(); ?>
