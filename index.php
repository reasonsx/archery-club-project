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
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Contact us</h1>
</section>


<?php get_footer();