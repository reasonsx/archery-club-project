<footer class="bg-white p-10 shadow-inner shadow-gray-200 mt-12">
    <div class="mx-auto max-w-screen-xl">

        <!-- Footer grid layout with up to 4 columns -->
        <div class="md:flex md:justify-between">
            <div class="grid grid-cols-2 gap-8 sm:gap-6 md:grid-cols-4">

                <?php
                // Query custom post type 'footer' to dynamically populate footer columns
                $footer = new WP_Query([
                    'post_type' => 'footer',
                    'posts_per_page' => 4,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                ]);

                if ($footer->have_posts()) :
                    while ($footer->have_posts()) : $footer->the_post();

                        // Get ACF fields for each footer item
                        $footer_title = get_field('footer_title');
                        $footer_content = get_field('footer_content');
                        ?>

                        <div>
                            <!-- Footer column title -->
                            <h2 class="mb-6 text-sm font-semibold uppercase">
                                <?php echo esc_html($footer_title); ?>
                            </h2>

                            <!-- Footer column content -->
                            <ul class="text-gray-900">
                                <?php echo wp_kses_post(nl2br($footer_content)); ?>
                            </ul>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>

        <!-- Divider line -->
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>

        <!-- Footer bottom section: copyright -->
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-900 sm:text-center">
                <!-- Static founding year and dynamic current year -->
                © 1954 - <?php echo date('Y'); ?>

                <!-- Link to homepage -->
                <a href="<?php echo esc_url(home_url()); ?>" class="hover:underline">
                    Sønderborg Bueskyttelaug
                </a>
            </span>
        </div>

    </div>
</footer>

<!-- WordPress Footer Hook -->
<?php wp_footer(); ?>
</body>
</html>