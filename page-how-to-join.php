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


<section class="h-96 flex justify-center flex-col mx-40">
    <h1 class="text-4xl">How do I join?</h1>
        <p>Do you want to be an archer?
           We have an introduction evening
           on Tuesday, May 13th at 6 – 7 pm.
           <br>
           <br>
           As there is limited space, registration
           to formand@s-bl.dk is necessary.
        </p>
</section>

<section class="h-96 flex justify-center flex-col mx-40">
    <h1 class="text-4xl">Where??</h1>
        <p>Outdoor training takes place
           at Ingolf Nielsens Vej, 6400 Sønderborg
           on Mondays and Thursdays.
        </p>
</section>

<section class="h-96 flex justify-center flex-col mx-40">
    <h1 class="text-4xl">When?</h1>
        <p>Training times
           Monday
             All shooters:
                      6:00 PM - 7:30 PM
            <br>
           Thursday
           All shooters:
                      6:00 PM - 7:30 PM
        </p>
</section>

<?php get_footer(); ?>
