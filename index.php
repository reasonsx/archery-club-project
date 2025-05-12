<?php

get_header(); ?>

    <div class="max-w-4xl mx-auto px-4">

<!--        <div class="prose max-w-full">-->
<!--            --><?php //if (have_posts()) {
//                while (have_posts()) {
//                    the_post(); ?>
<!--                    <div>-->
<!--                        <h3><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
<!--                        --><?php //echo wp_trim_words(get_the_content(), 40, '...') ?>
<!--                    </div>-->
<!--                --><?php //}
//            } ?>
<!--        </div>-->
    </div>

    <section class="h-96 w-full bg-cover bg-center flex items-center justify-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-hero.jpg');">
        <h1 class="text-4xl text-white drop-shadow-lg">Hero</h1>
    </section>


    <section class="max-w-screen-xl mx-auto h-96 flex justify-center">
        <h1 class="text-4xl">About</h1>
    </section>

    <section class="max-w-screen-xl mx-auto flex flex-col items-center">
        <h1 class="text-4xl">Images gallery</h1>
        <div id="gallery" class="relative w-[50vw]" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
            </button>
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto h-96 flex items-center">
        <h1 class="text-4xl">Archery benefits</h1>
    </section>

    <section class="max-w-screen-xl mx-auto h-96 flex justify-center">
        <h1 class="text-4xl">What is archery about</h1>
    </section>

    <section class="max-w-screen-xl mx-auto flex flex-col items-center">
        <h1 class="text-4xl">Learn more about archery</h1>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
            <a href="#">
                <img class="rounded-t-lg w-full h-40 object-cover"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png" alt=""/>
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions
                        2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#"
                   class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

    </section>
    <section class="max-w-screen-xl mx-auto h-auto grid grid-cols-2 items-center gap-8">
        <!-- Left column -->

        <div>
            <!-- Add an image, a form, a map, or anything else -->
            <img src="/assets/images/home-hero.jpg" alt="Club photo" class="w-full h-auto rounded-xl shadow-md">
        </div>
        <!-- Right column -->
        <div>
            <h1 class="text-4xl mb-4">Contact us</h1>

            <h5 class="text-xl">Address:</h5>
            <p>Ingolf Nielsens Vej, 6400 Sønderborg</p>
            <p>
                The club can be contacted on the chairman's phone number <strong>24 60 94 76</strong>,
                on the club's email <a href="mailto:formand@s-bl.dk" class="text-blue-600 underline">formand@s-bl.dk</a>,
                or down at the club, where you can find us Monday 6 – 7:30 PM and Thursday 6 – 7:30 PM.
            </p>
            <div class="w-full aspect-video">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.907243191857!2d9.792260512861683!3d54.93122567267775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b33765aef272b5%3A0x3052c789389961fb!2sIngolf%20Nielsens%20Vej%2C%206400%20S%C3%B8nderborg!5e1!3m2!1spl!2sdk!4v1747050757834!5m2!1spl!2sdk"
                        class="w-full h-full border-0 rounded-xl shadow-md"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>



<?php get_footer();