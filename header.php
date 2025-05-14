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
<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
                    Product
                    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </button>

            </div>

            <a href="#" class="text-sm/6 font-semibold text-gray-900">Features</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Marketplace</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Company</a>
        </div>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>

    <!-- Mobile menu, show/hide based on menu open state. -->
<!--    <div class="lg:hidden" role="dialog" aria-modal="true">-->
<!--        <div class="fixed inset-0 z-10"></div>-->
<!--        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">-->
<!--            <div class="flex items-center justify-between">-->
<!--                <a href="#" class="-m-1.5 p-1.5">-->
<!--                    <span class="sr-only">Your Company</span>-->
<!--                    <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">-->
<!--                </a>-->
<!--                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">-->
<!--                    <span class="sr-only">Close menu</span>-->
<!--                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">-->
<!--                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />-->
<!--                    </svg>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="mt-6 flow-root">-->
<!--                <div class="-my-6 divide-y divide-gray-500/10">-->
<!--                    <div class="space-y-2 py-6">-->
<!--                        <div class="-mx-3">-->
<!--                            <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">-->
<!--                                Product-->
<!--                                  Expand/collapse icon, toggle classes based on menu open state.-->
<!---->
<!--                                  Open: "rotate-180", Closed: ""-->
<!--                                -->-->
<!--                                <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">-->
<!--                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />-->
<!--                                </svg>-->
<!--                            </button>-->
<!---->
<!--                        </div>-->
<!--                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>-->
<!--                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>-->
<!--                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>-->
<!--                    </div>-->
<!--                    <div class="py-6">-->
<!--                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</header>

<header>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">

            <!-- Logo -->
            <div class="flex lg:flex-1">
                <a href="<?php echo home_url(); ?>" class="flex items-center">
                    <img src="https://www.s-bl.dk/images/SBL_logo_2017_lille_sort_skrift.jpg" class="mr-3 h-6 sm:h-9" alt="SBL Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap">Sønderborg Bueskyttelaug</span>
                </a>
            </div>

            <!-- Center: Main Navigation (Desktop only) -->
            <div class="hidden lg:flex lg:gap-x-12">
                <ul class="flex flex-row space-x-8 font-medium text-gray-700">
                    <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-400">Home</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="hover:text-blue-400">About us</a></li>
                    <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="hover:text-blue-400">Blog</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('how-to-join')); ?>" class="hover:text-blue-400">How to join</a></li>
                    <li><a href="#" class="hover:text-blue-400">Contact</a></li>
                </ul>
            </div>

            <!-- Language Switcher -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
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

        <!-- Mobile Navigation -->
        <div class="hidden justify-between items-center w-full lg:hidden" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium text-gray-700 space-y-2">
                <li><a href="<?php echo home_url(); ?>" class="block py-2 px-4 hover:bg-gray-100 rounded-lg">Home</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="block py-2 px-4 hover:bg-gray-100 rounded-lg">About us</a></li>
                <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="block py-2 px-4 hover:bg-gray-100 rounded-lg">Blog</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('how-to-join')); ?>" class="block py-2 px-4 hover:bg-gray-100 rounded-lg">How to join</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded-lg">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
