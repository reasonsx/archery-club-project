<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="archery, bow and arrow, archery club, Sønderborg Bueskyttelaug, target shooting, compound bow, recurve bow, archery competition, Danish archery, bueskydning, outdoor sports, precision shooting, archery training, archery Denmark, arrow practice">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="sticky top-0 bg-white z-50 shadow-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 sm:px-6 lg:px-0">
        <!-- Logo -->
        <div class="flex lg:flex-1">
            <a href="<?php echo home_url(); ?>" class="flex items-center">
                <img src="https://www.s-bl.dk/images/SBL_logo_2017_lille_sort_skrift.jpg" class="mr-3 h-6 sm:h-9"
                     alt="SBL Logo"/>
                <h5>Sønderborg Bueskyttelaug</h5>
            </a>
        </div>

        <!-- Center: Main Navigation (Desktop only) -->
        <div class="hidden lg:flex lg:gap-x-12">
    <ul class="flex flex-row space-x-8 font-medium text-gray-900">
    <?php
    $menu_query = new WP_Query([
        'post_type' => 'menu-item',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ]);

    if ($menu_query->have_posts()) :
        while ($menu_query->have_posts()) : $menu_query->the_post();
            $name = get_field('name') ?: get_the_title();
            $link_type = get_field('link_type');
            $link = get_field('link_value');

           if (empty($link)) {
                // If no link specified, link to homepage
                $link_url = esc_url(home_url('/'));
            } elseif ($link_type === 'slug' && $link) {
                // Get permalink by slug (support polylang if used)
                $page = get_page_by_path($link);
                if ($page) {
                    $link_url = esc_url(get_permalink(pll_get_post($page->ID)));
                } else {
                    $link_url = '#';
                }
            } elseif ($link_type === 'section_id') {
                $link_url = apply_filters('wpml_home_url', home_url()) . '#' . $link;
            }
            elseif ($link_type === 'link' && $link) {
                // Full URL provided
                $link_url = esc_url($link);
            } else {
                $link_url = '#';
            }
            ?>
            <li><a href="<?php echo $link_url; ?>" class="hover:text-blue-400"><?php echo esc_html($name); ?></a></li>
        <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
    </ul>
</div>



        <!-- Language Switcher -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <?php
            function get_custom_lang_flag_svg($lang_slug)
            {
                return get_template_directory_uri() . '/assets/flags/' . $lang_slug . '.svg';
            }

            if (function_exists('pll_the_languages')) :
                $langs_array = pll_the_languages([
                    'dropdown' => 1,
                    'hide_current' => 0,
                    'raw' => 1
                ]);
                $current_lang = pll_current_language();
                ?>


                <div class="relative inline-block text-left">
                    <!-- Trigger Button -->
                    <button id="langDropdownButton" data-dropdown-toggle="langDropdown"
                            class="cursor-pointer text-gray-900 focus:outline-none bg-white hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center w-auto"
                            type="button">
                        <img src="<?= esc_url(get_custom_lang_flag_svg($current_lang)); ?>" alt="" class="w-5 h-5 mr-2">
                        <?= esc_html($langs_array[$current_lang]['name']); ?>
                        <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="langDropdown"
                         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 mt-2">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="langDropdownButton">
                            <?php foreach ($langs_array as $lang) : ?>
                                <li>
                                    <a href="<?= esc_url($lang['url']); ?>"
                                       class="flex items-center px-4 py-2 hover:bg-gray-100 <?= $lang['slug'] === $current_lang ? 'font-bold' : '' ?>">
                                        <img src="<?= esc_url(get_custom_lang_flag_svg($lang['slug'])); ?>" alt=""
                                             class="w-5 h-5 mr-2">
                                        <span><?= esc_html($lang['name']); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>


        <!-- Mobile menu toggle -->
        <button data-collapse-toggle="mobile-menu-2" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                      d="M3 5h14a1 1 0 010 2H3a1 1 0 010-2zm0 5h14a1 1 0 010 2H3a1 1 0 010-2zm0 5h14a1 1 0 010 2H3a1 1 0 010-2z"
                      clip-rule="evenodd"></path>
            </svg>
        </button>
    </nav>

    <!-- Mobile Navigation -->
    <div class="hidden justify-between items-center w-full lg:hidden py-2" id="mobile-menu-2">
        <ul class="flex flex-col font-medium text-gray-700 space-y-2">
            <?php
            $menu_query = new WP_Query([
                'post_type' => 'menu-item',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]);

            if ($menu_query->have_posts()) :
                while ($menu_query->have_posts()) : $menu_query->the_post();
                    $name = get_field('name') ?: get_the_title();
                    $link_type = get_field('link_type');
                    $link = get_field('link_value');

                    if (empty($link)) {
                        $link_url = esc_url(home_url('/'));
                    } elseif ($link_type === 'slug' && $link) {
                        $page = get_page_by_path($link);
                        if ($page) {
                            $link_url = esc_url(get_permalink(pll_get_post($page->ID)));
                        } else {
                            $link_url = '#';
                        }
                    } elseif ($link_type === 'section_id') {
                        $link_url = apply_filters('wpml_home_url', home_url()) . '#' . $link;
                    } elseif ($link_type === 'link' && $link) {
                        $link_url = esc_url($link);
                    } else {
                        $link_url = '#';
                    }
                    ?>
                    <li>
                        <a href="<?php echo $link_url; ?>"
                           class="block py-2 px-4 hover:bg-gray-100 rounded-lg"><?php echo esc_html($name); ?></a>
                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
        <div class="mx-4">
            <hr class="my-4 border-gray-200 w-full"/>
        </div>
        <?php if (function_exists('pll_the_languages')) : ?>
        <ul class="space-y-2">
            <?php foreach ($langs_array as $lang) : ?>
                <li>
                    <a href="<?= esc_url($lang['url']); ?>"
                       class="flex items-center px-3 py-2  rounded-lg <?= $lang['slug'] === $current_lang ? 'font-bold' : '' ?>">
                        <img src="<?= esc_url(get_custom_lang_flag_svg($lang['slug'])); ?>" alt=""
                             class="w-5 h-5 mr-2">
                        <span><?= esc_html($lang['name']); ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

</header>
