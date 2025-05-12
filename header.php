<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex items-center justify-between mx-auto max-w-screen-xl">

            <!-- Left: Logo and Name -->
            <div class="flex items-center flex-shrink-0">
                <a href="<?php echo home_url(); ?>" class="flex items-center">
                    <img src="https://www.s-bl.dk/images/SBL_logo_2017_lille_sort_skrift.jpg" class="mr-3 h-6 sm:h-9" alt="SBL Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap">Sønderborg Bueskyttelaug</span>
                </a>
            </div>

            <!-- Center: Main Navigation (Desktop only) -->
            <div class="hidden lg:flex justify-center flex-1">
                <ul class="flex flex-row space-x-8 font-medium text-gray-700">
                    <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-400">Home</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="hover:text-blue-400">About us</a></li>
                    <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="hover:text-blue-400">Blog</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('how-to-join')); ?>" class="hover:text-blue-400">How to join</a></li>
                    <li><a href="#" class="hover:text-blue-400">Contact</a></li>
                </ul>
            </div>

            <!-- Right: Language Switcher -->
            <div class="flex items-center space-x-4">
                <?php
                function get_custom_lang_flag_svg($lang_slug) {
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
                                class="cursor-pointer text-gray-900 focus:outline-none border bg-white border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center w-36"
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
                                            <img src="<?= esc_url(get_custom_lang_flag_svg($lang['slug'])); ?>" alt="" class="w-5 h-5 mr-2">
                                            <span><?= esc_html($lang['name']); ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

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
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="hidden justify-between items-center w-full lg:hidden" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium text-gray-700 space-y-2">
                <li><a href="<?php echo home_url(); ?>" class="block py-2 px-4 hover:bg-gray-100">Home</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="block py-2 px-4 hover:bg-gray-100 rounded-lg">About us</a></li>
                <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="block py-2 px-4 hover:bg-gray-100">Blog</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('how-to-join')); ?>" class="block py-2 px-4 hover:bg-gray-100">How to join</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-100">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
