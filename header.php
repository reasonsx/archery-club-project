<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav class="bg-white border-gray-200 rounded px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center">
                <img src="https://www.s-bl.dk/images/SBL_logo_2017_lille_sort_skrift.jpg" class="mr-3 h-6 sm:h-9"
                     alt="Flowbite Logo"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap">Sønderborg Bueskyttelaug</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#"
                   class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">Log
                    in</a>
                <a href="#"
                   class="text-white bg-red-500 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">Get
                    started</a>

                <!-- Mobile menu button -->
                <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>

            </div>


            <div class="hidden justify-between  items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="<?php echo home_url(); ?>"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">About
                            us</a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Blog</a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink(get_page_by_path('how-to-join')); ?>"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">How
                            to join</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Contact</a>
                    </li>
                </ul>
                <?php if (function_exists('pll_the_languages')) :
                    $langs_array = pll_the_languages([
                        'dropdown' => 1,
                        'hide_current' => 0, // SHOW current language too
                        'raw' => 1
                    ]);
                    $current_lang = pll_current_language();
                    ?>
                    <div class="relative inline-block text-left">
                        <!-- Trigger Button -->
                        <button id="langDropdownButton" data-dropdown-toggle="langDropdown"
                                class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                                type="button">
                            <?= esc_html(strtoupper($current_lang)); ?>
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
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
                                           class="block px-4 py-2 hover:bg-gray-100 <?= $lang['slug'] === $current_lang ? 'font-bold text-blue-700' : '' ?>">
                                            <?= esc_html(strtoupper($lang['slug'])); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                  
                <?php endif; ?>


                <!--                --><?php //if (function_exists('pll_the_languages')) : ?>
<!--                    <div class="language-switcher">-->
<!--                        --><?php //pll_the_languages(array('dropdown' => 1)); ?>
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!---->
<!---->
<!--                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"-->
<!--                        class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"-->
<!--                        type="button">Dropdown button-->
<!--                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"-->
<!--                         viewBox="0 0 10 6">-->
<!--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
<!--                              d="m1 1 4 4 4-4"/>-->
<!--                    </svg>-->
<!--                </button>-->
<!---->
<!--                <!-- Dropdown menu -->-->
<!--                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">-->
<!--                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">-->
<!--                        <li>-->
<!--                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>-->
<!--                        </li>-->
<!---->
<!--                    </ul>-->
<!--                </div>-->


            </div>

        </div>
    </nav>
</header>
