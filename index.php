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

        <!-- Button trigger -->
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="bg-blue-500 text-white px-4 py-2 rounded">Open Modal</button>

        <!-- Modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Modal Title
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="default-modal">
                            ✕
                        </button>
                    </div>
                    <div class="p-6 space-y-6">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Modal content goes here...
                        </p>
                    </div>
                </div>
            </div>
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
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Contact us</h1>
</section>


<?php get_footer();