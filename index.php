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

        <!-- HERO SECTION -->
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

        <!-- ABOUT SECTION -->
        <section class="max-w-screen-xl mx-auto h-auto flex flex-col md:flex-row items-center gap-12 w-full">
            <!-- Left: Circle Image -->
            <div class="flex-shrink-0 w-1/2 flex justify-center">
                <img
                        src="<?php echo esc_url($about_image['url']); ?>"
                        alt="<?php echo esc_attr($about_image['alt']); ?>"
                        class="w-72 h-72 rounded-full object-cover"
                />
            </div>

            <!-- Right: Text content -->
            <div class="max-w-xl w-1/2 flex flex-col gap-6">
                <h1 class="text-4xl font-bold"><?php echo esc_html($about_title); ?></h1>
                <p class="text-lg text-black"><?php echo wp_kses_post(nl2br($about_description)); ?></p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>"
                   class="inline-block max-w-max cursor-pointer focus:outline-none text-black bg-[#FDD576] hover:bg-[#fce169] focus:ring-4 focus:ring-[#fdd576]/50 font-medium rounded-lg text-base px-6 py-2 transition">
                    Read more
                </a>
            </div>
        </section>

        <!-- IMAGES SECTION -->
        <section class="w-full py-12 bg-white">
            <h2 class="text-center text-4xl mb-8">Images Gallery</h2>

            <div class="swiper mySwiper w-[90vw] max-w-screen-xl mx-auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                             class="w-full h-72 rounded-lg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                             class="w-full h-72 rounded-lg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                             class="w-full h-72 rounded-lg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                             class="w-full h-72 rounded-lg"/>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="text-center mt-8">
                <a href="/full-gallery"
                   class="inline-block max-w-max cursor-pointer focus:outline-none text-black bg-[#FDD576] hover:bg-[#fce169] focus:ring-4 focus:ring-[#fdd576]/50 font-medium rounded-lg text-base px-6 py-2 transition">
                    See Full Gallery
                </a>
            </div>
        </section>

        <!-- BENEFITS SECTION -->
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
                                <div class="mx-auto mb-4 w-40 h-40 rounded-full flex items-center justify-center overflow-hidden">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"
                                         class="max-w-full max-h-full rounded-full"/>
                                </div>
<!--                            --><?php //else : ?>
<!--                                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center"></div>-->
<!--                            --><?php //endif; ?>

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


        <!-- BOWS SECTION -->
        <section class="w-full h-auto bg-[#8DB7E1] py-16">
            <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-16 flex flex-col ">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h1 class="text-gray-900 text-3xl font-semibold mb-6">What types of bows we use?</h1>
                </div>

                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Bow 1 -->
                    <div class="flex flex-col items-center text-center">
                        <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-[#FDD576] flex items-center justify-center overflow-hidden">
                            <img
                                    src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Compound_bow_transparent.png"
                                    alt="Bow 1"
                                    class="max-w-[70%] max-h-[70%] object-contain"
                            />
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Bow #1</h3>
                        <p class="mt-2 text-gray-700 max-w-xs">Learn from professional archery coaches with years of
                            experience guiding beginners and pros alike.</p>
                    </div>

                    <!-- Bow 2 -->
                    <div class="flex flex-col items-center text-center">
                        <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-[#FDD576] flex items-center justify-center overflow-hidden">
                            <img
                                    src="https://upload.wikimedia.org/wikipedia/commons/8/81/Recurve_bow_transparent.png"
                                    alt="Bow 2"
                                    class="max-w-[70%] max-h-[70%] object-contain"
                            />
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Bow #2</h3>
                        <p class="mt-2 text-gray-700 max-w-xs">Participate in fun competitions and social events to
                            connect with fellow archery enthusiasts.</p>
                    </div>

                    <!-- Bow 3 -->
                    <div class="flex flex-col items-center text-center">
                        <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-[#FDD576] flex items-center justify-center overflow-hidden">
                            <img
                                    src="https://upload.wikimedia.org/wikipedia/commons/5/53/Longbow_transparent.png"
                                    alt="Bow 3"
                                    class="max-w-[70%] max-h-[70%] object-contain"
                            />
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Bow #3</h3>
                        <p class="mt-2 text-gray-700 max-w-xs">Access the latest bows and gear to improve your skills
                            and enjoy the sport safely.</p>
                    </div>
                </div>
            </section>
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

            </div>
        </section>


        <section id="contact" class="max-w-screen-xl w-full mx-auto p-4 sm:p-6 lg:p-0">
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