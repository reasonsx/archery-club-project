<?php

get_header(); ?>

<?php
$hero_image = get_field('hero_image');
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$about_image = get_field('about_image');
$about_title = get_field('about_title');
$about_description = get_field('about_description');
?>

    <section class="flex flex-col gap-24">

        <section class="relative h-[48rem] w-full overflow-hidden">
            <!-- Background image -->
            <?php if ($hero_image): ?>
                <img src="<?php echo esc_url($hero_image['url']); ?>"
                     alt="<?php echo esc_attr($hero_image['alt']); ?>"
                     class="absolute inset-0 w-full h-full object-cover"
                     draggable="false">
            <?php endif; ?>

            <!-- Overlay content -->
            <div class="relative z-10 h-full flex items-center">
                <div class="max-w-screen-lg mx-auto w-full">
                    <div class="max-w-2xl space-y-6 text-white">
                        <h1 class="text-4xl font-bold drop-shadow-lg"><?php echo esc_html($hero_title); ?></h1>
                        <p class="text-lg text-white"><?php echo wp_kses_post(nl2br($hero_description)); ?></p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('how-to-join'))); ?>"
                           class="cursor-pointer focus:outline-none text-black bg-[#FDD576] hover:bg-[#fce169] focus:ring-4 focus:ring-[#fdd576]/50 font-medium rounded-lg text-base px-6 py-2 inline-block transition text-center">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <section class="max-w-screen-xl mx-auto h-96 flex items-center gap-12 w-full">
            <!-- Left: Circle Image -->
            <div class="flex-shrink-0">
                <img
                        src="<?php echo esc_url($about_image['url']); ?>"
                        alt="<?php echo esc_attr($about_image['alt']); ?>"
                        class="w-48 h-48 rounded-full object-cover"
                />
            </div>

            <!-- Right: Text content -->
            <div class="max-w-xl">
                <h1 class="text-4xl font-bold mb-4"><?php echo esc_html($about_title); ?></h1>
                <p class="mb-6 text-gray-700">
                <p class="text-lg text-white"><?php echo wp_kses_post(nl2br($about_description)); ?></p>
                </p>
                <a href="#join" class="inline-block cursor-pointer focus:outline-none text-black bg-[#FDD576] hover:bg-[#fce169] focus:ring-4 focus:ring-[#fdd576]/50 font-medium rounded-lg text-base px-6 py-2 transition">
                    Join Now
                </a>
            </div>
        </section>


        <section class="max-w-screen-xl mx-auto flex flex-col items-center">
            <h1 class="text-4xl">Images gallery</h1>
            <div id="gallery" class="relative w-[50vw]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                             class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                             class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                             class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
                </button>
                <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
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


        <section class="max-w-screen-lg mx-auto p-4 sm:p-6 lg:p-0 gap-16 flex flex-col">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="text-gray-900">Learn more about archery</h1>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-1 lg:grid-cols-3">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                    <a href="#">
                        <img class="rounded-t-lg w-full h-40 object-cover"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png"
                             alt=""/>
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                acquisitions
                                2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                    <a href="#">
                        <img class="rounded-t-lg w-full h-40 object-cover"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png"
                             alt=""/>
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                acquisitions
                                2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                    <a href="#">
                        <img class="rounded-t-lg w-full h-40 object-cover"
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png"
                             alt=""/>
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                acquisitions
                                2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-16 flex flex-col">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="text-gray-900">Why Join Our Archery Club?</h1>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 lg:grid-cols-4">

                <?php
                $benefits = new WP_Query([
                    'post_type' => 'benefit',
                    'posts_per_page' => 4,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                ]);

                if ($benefits->have_posts()) :
                    while ($benefits->have_posts()) : $benefits->the_post();
                        // Get fields
                        $image = get_field('benefit_image');
                        $title = get_field('benefit_title'); // fallback if you don't want post title
                        $description = get_field('benefit_description');
                        ?>

                        <div class="flex flex-col items-center text-center">
                            <?php if ($image) : ?>
                                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center overflow-hidden">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"
                                         class="max-w-full max-h-full rounded-full"/>
                                </div>
                            <?php else : ?>
                                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center"></div>
                            <?php endif; ?>

                            <h3 class="mb-1 text-2xl font-bold text-gray-900 h-16 flex items-center justify-center">
                                <?php
                                if ($title) {
                                    echo esc_html($title);
                                } else {
                                    the_title();
                                }
                                ?>
                            </h3>

                            <p><?php echo esc_html($description); ?></p>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </section>


        <!--    <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-16 flex flex-col">-->
        <!--        <div class="mx-auto max-w-screen-sm text-center">-->
        <!--            <h1 class="text-gray-900">Why Join Our Archery Club?</h1>-->
        <!--        </div>-->
        <!--        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 lg:grid-cols-4">-->
        <!--            <div class="flex flex-col items-center text-center">-->
        <!--                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center"></div>-->
        <!--                <h3 class="mb-1 text-2xl font-bold text-gray-900 h-16 flex items-center justify-center">Coaching</h3>-->
        <!--                <p>Guidance from skilled coaches to help you improve safely and effectively.</p>-->
        <!--            </div>-->
        <!--            <div class="flex flex-col items-center text-center">-->
        <!--                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center"></div>-->
        <!--                <h3 class="mb-1 text-2xl font-bold  text-gray-900 h-16 flex items-center justify-center">Indoors and outdoors training</h3>-->
        <!--                <p>Practice all year round — rain or shine — with our indoor and outdoor facilities.</p>-->
        <!--            </div>-->
        <!--            <div class="flex flex-col items-center text-center">-->
        <!--                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center"></div>-->
        <!--                <h3 class="mb-1 text-2xl font-bold text-gray-900 h-16 flex items-center justify-center">Physical and mental benefits</h3>-->
        <!--                <p>Boost focus, coordination, and overall well-being through archery.</p>-->
        <!--            </div>-->
        <!--            <div class="flex flex-col items-center text-center">-->
        <!--                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center"></div>-->
        <!--                <h3 class="mb-1 text-2xl font-bold text-gray-900 h-16 flex items-center justify-center">Participation in tournaments</h3>-->
        <!--                <p>Challenge yourself and grow by joining local and national competitions.</p>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </section>-->


        <section class="max-w-screen-xl w-full mx-auto p-4 sm:p-6 lg:p-0">
            <div class="mx-auto mb-8 max-w-screen-sm text-center">
                <h1 class="mb-4 text-gray-900">Contact us</h1>
            </div>
            <section class="h-auto grid grid-cols-1 md:grid-cols-2 items-center gap-16">
                <!-- Left column -->
                <div class="relative z-10">
                    <?php echo do_shortcode('[contact-form-7 id="f89891b" title="Contact form 1"]'); ?>
                </div>

                <!-- Right column -->
                <div class="flex flex-col gap-4">


                    <div>
                        <h5>Address:</h5>
                        <p>Ingolf Nielsens Vej, 6400 Sønderborg</p>
                    </div>

                    <div>
                        <h5>Email:</h5>
                        <a href="mailto:formand@s-bl.dk" class="text-blue-600 underline">formand@s-bl.dk</a>
                    </div>


                    <div>
                        <h5>Phone:</h5>
                        <p>24 60 94 76</p>
                    </div>

                    <div class="w-full aspect-video">
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.907243191857!2d9.792260512861683!3d54.93122567267775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b33765aef272b5%3A0x3052c789389961fb!2sIngolf%20Nielsens%20Vej%2C%206400%20S%C3%B8nderborg!5e1!3m2!1spl!2sdk!4v1747050757834!5m2!1spl!2sdk"
                                class="w-full h-full border-0 rounded-xl shadow-md"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>
            </section>
        </section>

    </section>
<?php get_footer();