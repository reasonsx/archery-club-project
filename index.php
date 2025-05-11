<?php

get_header(); ?>

    <div class="max-w-4xl mx-auto px-4">

        <div class="prose max-w-full">
            <?php if (have_posts()) {
                while(have_posts()) {
                    the_post(); ?>
                    <div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php echo wp_trim_words(get_the_content(), 40, '...') ?>
                    </div>
                <?php }
            } ?>
        </div>
    </div>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Hero</h1>
</section>


<section class="h-96 flex justify-center">
    <h1 class="text-4xl">About</h1>
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Images gallery</h1>
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Archery benefits</h1>
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">What is archery about</h1>
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Learn more about archery</h1>



    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
        <a href="#">
            <img class="rounded-t-lg w-full h-12 object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>


</section>

<section class="h-96 flex flex-col justify-center mx-40">
    <h1 class="text-4xl text-center">Contact us</h1>
        <p>The club can be contacted on the chairman's phone number 24 60 94 76,
           on the club's email formand@s-bl.dk or down at the club,
           where you can find us Monday 6 – 7:30 PM and Thursday 6 – 7:30 PM.
        </p>

</section>


<?php get_footer();