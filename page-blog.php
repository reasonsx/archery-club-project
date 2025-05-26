<?php
/*
Template Name: Blog Overview
*/
get_header();
$title = get_field('blog_page_title');
?>
<section
        class="h-[12rem] sm:h-[25vh] md:h-[40vh] bg-no-repeat bg-center bg-cover relative flex items-center justify-center text-white"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg');">

    <!-- Blue circle behind text -->
    <div class="absolute right-[20rem] w-32 h-32 sm:!w-56 sm:!h-56 bg-[#8DB7E1] rounded-full z-0"></div>

    <!-- Text on top -->
    <h1 class="text-gray-900 text-center max-sm:text-4xl text-[4rem] font-bold z-10"><?php echo nl2br(esc_html($title)); ?></h1>

</section>


<section class="max-w-screen-lg mx-auto p-4 sm:p-6 xl:p-0 gap-16 flex flex-col">

    <div class="grid gap-8 lg:gap-12 sm:grid-cols-1 lg:grid-cols-3">
        <?php
        $blog_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => get_query_var('paged') ?: 1,
        ));

        if ($blog_posts->have_posts()):
            while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
                <div class="bg-[#8DB7E1] rounded-lg shadow-sm flex flex-col w-full min-w-0 min-h-[520px]">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium_large', ['class' => 'rounded-t-lg w-full h-56 object-cover']); ?>
                        <?php else: ?>
                            <img class="rounded-t-lg w-full h-56 object-cover"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png"
                                 alt="<?php the_title_attribute(); ?>"/>
                        <?php endif; ?>
                    </a>
                    <div class="p-5 flex flex-col flex-grow">
                        <a href="<?php the_permalink(); ?>">
                            <h5 class="mb-3 text-xl font-bold tracking-tight text-gray-900"><?php the_title(); ?></h5>
                        </a>
                        <p class="mb-4 font-normal flex-grow"><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>"
                           class="inline-flex items-center justify-center px-4 py-3 text-sm font-semibold text-center text-gray-900 bg-[#FDD576] rounded-lg hover:bg-[#e6c55e] focus:ring-4 focus:outline-none focus:ring-[#FDD576]/50 shadow transition-all duration-200 w-full mt-auto">
                            <?php echo pll__('Read more'); ?>
                            <svg class="rtl:rotate-180 w-4 h-4 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

            <?php endwhile;

            // Pagination
            echo '<div class="mt-12 text-center">' . paginate_links([
                    'total' => $blog_posts->max_num_pages
                ]) . '</div>';

            wp_reset_postdata();
        else: ?>
            <p><?php echo pll__('No posts found.'); ?></p>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>
