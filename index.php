<?php

get_header(); ?>

<?php
$hero_image = get_field('hero_image');
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$about_image = get_field('about_image');
$about_title = get_field('about_title');
$about_description = get_field('about_description');
$benefits_title = get_field('benefits_title');
$photo_gallery_title = get_field('photo_gallery_title');
$contact_us_title = get_field('contact_us_title');
$blog_shortcuts_title = get_field('blog_shortcuts_title');
$address = get_field('address');
$phone_and_email = get_field('phone_and_email');
$contact_form_title = get_field('contact_form_title');
?>

    <section class="flex flex-col gap-24">

        <!-- HERO SECTION -->
        <div class="bg-white">
            <section class="relative h-[40rem] w-full overflow-hidden mx-auto max-w-[2560px]">
                <!-- Background image -->
                <?php if ($hero_image): ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>"
                         alt="<?php echo esc_attr($hero_image['alt']); ?>"
                         class="absolute inset-0 w-full h-full object-cover"
                         draggable="false">
                <?php endif; ?>

                <!-- Overlay content -->
                <div class="relative z-10 h-full flex items-center">
                    <div class="mx-auto w-full max-w-screen-xl px-4">
                        <div class="p-4 flex flex-col sm:p-0 md:w-1/2 w-full space-y-6">
                            <h1 class="mb-4 text-white"><?php echo esc_html($hero_title); ?></h1>
                            <p class="text-lg text-white"><?php echo wp_kses_post(nl2br($hero_description)); ?></p>
                            <div class="w-36">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('how-to-join'))); ?>"
                                   class="inline-flex items-center justify-center px-4 py-3 text-sm font-semibold text-center text-gray-900 bg-[#FDD576] rounded-lg hover:bg-[#e6c55e] focus:ring-4 focus:outline-none focus:ring-[#FDD576]/50 shadow transition-all duration-200 w-full mt-auto">
                                    <?php echo pll__('Join Now'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- ABOUT SECTION -->
        <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-16 flex flex-col sm:flex-row justify-center">
            <!-- Left: Circle Image -->
             <div class=" w-1/2 aspect-square flex justify-center items-center mb-6 sm:mb-0">
                <img
                        src="<?php echo esc_url($about_image['url']); ?>"
                        alt="<?php echo esc_attr($about_image['alt']); ?>"
                        class="w-full h-full rounded-full object-cover"
                />
            </div>

            <!-- Right: Text content -->
            <div class="sm:max-w-xl sm:w-1/2 w-full flex flex-col gap-6">
                <h1><?php echo esc_html($about_title); ?></h1>
                <p class="text-lg"><?php echo wp_kses_post(nl2br($about_description)); ?></p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>"
                   class="inline-flex items-center justify-center px-4 py-3 text-sm font-semibold text-center text-gray-900 bg-[#FDD576] rounded-lg hover:bg-[#e6c55e] focus:ring-4 focus:outline-none focus:ring-[#FDD576]/50 shadow transition-all duration-200 w-full mt-auto">
                     <?php echo pll__('Read more'); ?>
                </a>
            </div>
        </section>

        <!-- BENEFITS SECTION -->
        <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-8 flex flex-col">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1><?php echo esc_html($benefits_title); ?></h1>
            </div>
            <div class="grid gap-6 lg:gap-12 sm:grid-cols-2 lg:grid-cols-4">
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
                                <div class="mx-auto mb-4 w-40 h-40 flex items-center justify-center overflow-hidden">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>"
                                         class="max-w-full max-h-full"/>
                                </div>
                            <?php else : ?>
                                <div class="mx-auto mb-4 w-40 h-40 bg-blue-400 flex items-center justify-center"></div>
                            <?php endif; ?>

                            <h3 class="mb-1 text-2xl font-bold h-16 flex items-center justify-center">
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


        <!-- PHOTO GALLERY -->
        <section class="max-w-screen-xl mx-auto flex flex-col gap-8">
            <h1><?php echo esc_html($photo_gallery_title); ?></h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php
                $photos = new WP_Query([
                    'post_type' => 'photo',
                    'posts_per_page' => -1,
                ]);

                $total = $photos->post_count;
                $index = 0;

                if ($photos->have_posts()) :
                    while ($photos->have_posts()) : $photos->the_post();
                        $index++;
                        $image = get_field('image'); // ACF image field
                        $date = get_field('date'); // ACF date field
                        $description = get_field('description'); // ACF description field

                        $is_last = ($index === $total);
                        $items_in_last_row = $total % 3;
                        $is_last_row = ($index > $total - $items_in_last_row);
                        $class = 'relative group overflow-hidden h-[400px]';

                        // Stretch last item if it's in incomplete last row
                       if ($is_last && $items_in_last_row !== 0) {
                            $span = 3 - $items_in_last_row + 1;
                            $class .= " lg:col-span-{$span}";
                        }

                        ?>
                        <div class="<?php echo esc_attr($class); ?>">
                            <?php if ($image) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr(get_the_title()); ?>"
                                     class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"/>
                            <?php endif; ?>

                            <div class="absolute inset-0 bg-[#FDD576] opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-center items-center text-center p-4">
                                <h3 class="mb-2"><?php the_title(); ?></h3>
                                <?php if ($date): ?>
                                    <p class="text-sm  italic mb-1"><?php echo esc_html($date); ?></p>
                                <?php endif; ?>
                                <?php if ($description): ?>
                                    <p class="text-sm"><?php echo esc_html($description); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </section>

        <!-- Shortcut to blog posts -->
        <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-8 flex flex-col">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1><?php echo esc_html($blog_shortcuts_title); ?></h1>
            </div>
            <div class="grid gap-6 lg:gap-12 sm:grid-cols-1 lg:grid-cols-3">
                <?php
                $latest_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ]);

                if ($latest_posts->have_posts()):
                    while ($latest_posts->have_posts()): $latest_posts->the_post(); ?>
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col w-full min-w-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium_large', ['class' => 'rounded-t-lg w-full h-48 object-cover']); ?>
                                <?php else: ?>
                                    <img class="rounded-t-lg w-full h-48 object-cover"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-image.png"
                                         alt="<?php the_title_attribute(); ?>"/>
                                <?php endif; ?>
                            </a>
                            <div class="p-5 flex flex-col flex-grow">
                                <a href="<?php the_permalink(); ?>">
                                    <h5 class="font-black mb-3"><?php the_title(); ?></h5>
                                </a>
                                <p class="mb-4 font-normal flex-grow"><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>"
                                   class="inline-flex items-center justify-center px-4 py-3 text-sm font-semibold text-center text-gray-900 bg-[#FDD576] rounded-lg hover:bg-[#e6c55e] focus:ring-4 focus:outline-none focus:ring-[#FDD576]/50 shadow transition-all duration-200 w-full mt-auto">
                                     <?php echo pll__('Read more'); ?>
                                    <svg class="rtl:rotate-180 w-4 h-4 ms-2" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </section>

<section id="contact"></section>
        <section class="max-w-screen-xl w-full mx-auto p-4 sm:p-6 lg:p-0 flex flex-col gap-12">

            <div class="mx-auto max-w-screen-sm text-center">
                <h1><?php echo esc_html($contact_us_title); ?></h1>
            </div>
            <section class="h-auto grid grid-cols-1 md:grid-cols-2 items-center gap-16">
                <!-- Left column -->
                <div class="flex flex-col relative z-10">
                    <h3 class="pb-3"><?php echo esc_html($contact_form_title); ?></h3>
                    <?php echo do_shortcode('[contact-form-7 id="f89891b" title="Contact form 1"]'); ?>
                </div>

                <!-- Right column -->
                <div class="flex flex-col gap-6">

                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Left: Address -->
                        <div class="md:w-2/3">
                            <p><?php echo wp_kses_post(nl2br($address)); ?></p>
                        </div>

                        <!-- Right: Email & Phone -->
                        <div class="md:w-1/3 flex flex-col gap-6">
                            <p><?php echo wp_kses_post(nl2br($phone_and_email)); ?></p>
                        </div>
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