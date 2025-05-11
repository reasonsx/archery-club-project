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

<section class="flex flex-col items-center w-auto mx-auto">

    <ol class="relative border-s border-gray-200">
        <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400">February 2022</time>
            <h3 class="text-lg font-semibold text-gray-900">Title</h3>
            <p class="mb-4 text-base font-normal text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700">
                Learn more
                <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </li>
        <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400">March 2022</time>
            <h3 class="text-lg font-semibold text-gray-900">Title</h3>
            <p class="text-base font-normal text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </li>
        <li class="ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400">May 29, 1954</time>
            <h3 class="text-lg font-semibold text-gray-900">Beginning of Sønderborg Archery Guild</h3>
            <p class="text-base font-normal text-gray-500">Sønderborg Archery Guild was founded on May 29, 1954 and is a member of Archery Denmark.</p>
        </li>
    </ol>



</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Meet our members</h1>
</section>

<?php get_footer(); ?>
