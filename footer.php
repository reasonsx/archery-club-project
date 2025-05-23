<footer class="bg-white p-10 shadow-inner shadow-gray-200 mt-12">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <div class="grid grid-cols-2 gap-8 sm:gap-6 md:grid-cols-4">
                <?php
                $footer = new WP_Query([
                    'post_type' => 'footer',
                    'posts_per_page' => 4,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                ]);

                if ($footer->have_posts()) :
                    while ($footer->have_posts()) : $footer->the_post();
                        $footer_title = get_field('footer_title');
                        $footer_content = get_field('footer_content');
                        ?>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase"><?php echo esc_html($footer_title); ?></h2>
                            <ul class="text-gray-600">
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
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>
        <div class="sm:flex sm:items-center sm:justify-between">
    <span class="text-sm text-gray-500 sm:text-center">
        <!-- Static start year and dynamic current year using PHP -->
        © 1954 - <?php echo date('Y'); ?>

        <!-- Link to the site's homepage -->
        <a href="<?php echo home_url(); ?>" class="hover:underline">
            Sønderborg Bueskyttelaug
        </a>
    </span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
