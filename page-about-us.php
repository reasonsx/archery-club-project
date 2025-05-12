<?php
/*
Template Name: About Us
*/
get_header(); ?>

<main class="max-w-3xl mx-auto px-4 py-10">
    <div class="prose">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Hero</h1>
</section>


<section class="max-w-screen-xl mx-auto h-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8">


    <div>
        <ol class="relative border-s border-gray-200">
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400">January 1, 1900</time>
                <h3 class="text-lg font-semibold text-gray-900">Title</h3>
                <p class="mb-4 text-base font-normal text-gray-500">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
                <a href="#"
                   class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700">
                    Learn more
                    <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400">January 1, 1900</time>
                <h3 class="text-lg font-semibold text-gray-900">Title</h3>
                <p class="text-base font-normal text-gray-500">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400">May 29, 1954</time>
                <h3 class="text-lg font-semibold text-gray-900">Beginning of Sønderborg Archery Guild</h3>
                <p class="text-base font-normal text-gray-500">Sønderborg Archery Guild was founded on May 29, 1954 and
                    is a member of Archery Denmark.</p>
            </li>
        </ol>
    </div>

    <div class="flex flex-col justify-start h-screen">
        <h1>Our story</h1>
        <p>Sønderborg Archery Guild was founded on May 29, 1954 and is a member of Archery Denmark.
            <br>
            <br>
            The primary focus is target shooting with all bow types:
            longbows, recurve bows and compound bows.
            <br>
            <br>
            We are a club with room for those who want to shoot for
            fun and exercise, but also those who want to train to be at
            an elite level in archery and, for example, become Danish Champion.
        </p>
        <button type="button" class="w-auto py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Alternative</button>
    </div>
</section>

<section class="flex flex-col items-center w-auto mx-auto">


</section>

<section class="max-w-screen-xl mx-auto h-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8">
    <div>
        <h1>FAQ</h1>
    </div>

    <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
            <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                <span>What is Flowbite?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5"/>
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border border-b-0 border-gray-200">
                <p class="mb-2 text-gray-500">Flowbite is an open-source library of interactive components built on top
                    of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="text-gray-500">Check out this guide to learn how to <a
                            href="/docs/getting-started/introduction/" class="text-blue-600 hover:underline">get
                        started</a> and start developing websites even faster with components on top of Tailwind CSS.
                </p>
            </div>
        </div>

        <h2 id="accordion-collapse-heading-2">
            <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                <span>Is there a Figma file available?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5"/>
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
            <div class="p-5 border border-b-0 border-gray-200">
                <p class="mb-2 text-gray-500">Flowbite is first conceptualized and designed using the Figma software so
                    everything you see in the library has a design equivalent in our Figma file.</p>
                <p class="text-gray-500">Check out the <a href="https://flowbite.com/figma/"
                                                          class="text-blue-600 hover:underline">Figma design system</a>
                    based on the utility classes from Tailwind CSS and components from Flowbite.</p>
            </div>
        </div>

        <h2 id="accordion-collapse-heading-3">
            <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                <span>What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5"/>
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
            <div class="p-5 border border-t-0 border-gray-200">
                <p class="mb-2 text-gray-500">The main difference is that the core components from Flowbite are open
                    source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that
                    Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of
                    pages.</p>
                <p class="mb-2 text-gray-500">However, we actually recommend using both Flowbite, Flowbite Pro, and even
                    Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                <p class="mb-2 text-gray-500">Learn more about these technologies:</p>
                <ul class="ps-5 text-gray-500 list-disc">
                    <li><a href="https://flowbite.com/pro/" class="text-blue-600 hover:underline">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 hover:underline">Tailwind
                            UI</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Meet our members</h1>
</section>

<section class="max-w-screen-xl mx-auto">
    <div class="mx-auto max-w-screen-xl text-center">
        <div class="mx-auto mb-8 max-w-screen-sm">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Equipment</h2>
            <h5 class="text-gray-500">Learn what equipment is needed what it's used for</h5>
        </div>


        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>

            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>

            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>

            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>



        </div>
    </div>
</section>


<?php get_footer(); ?>
