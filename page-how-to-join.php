<?php
/*
Template Name: How to Join
*/

get_header(); ?>

<main class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
    <div class="prose">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>


<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Hero</h1>
</section>


<section class="max-w-screen-xl mx-auto h-auto flex justify-center flex-col">
    <h1 class="text-4xl">How do I join?</h1>
        <p>Do you want to be an archer?
           We have an introduction evening
           on Tuesday, May 13th at 6 – 7 pm.
           <br>
           <br>
           As there is limited space, registration
           to formand@s-bl.dk is necessary.
        </p>
</section>

<section class="max-w-screen-xl mx-auto h-auto flex justify-center flex-col">
    <h1 class="text-4xl">Where??</h1>
        <p>Outdoor training takes place
           at Ingolf Nielsens Vej, 6400 Sønderborg
           on Mondays and Thursdays.
        </p>
</section>

<section class="h-96 flex justify-center flex-col mx-40">
    <h1 class="text-4xl">When?</h1>
        <p>Training times
           Monday
             All shooters:
                      6:00 PM - 7:30 PM
            <br>
           Thursday
           All shooters:
                      6:00 PM - 7:30 PM
        </p>
</section>

<section class="max-w-screen-lg mx-auto h-auto flex flex-col w-auto">
    <div>
        <h1>FAQ</h1>
    </div>

    <div id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
            <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 cursor-pointer gap-3"
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
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 cursor-pointer gap-3"
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
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 cursor-pointer gap-3"
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

<?php get_footer(); ?>
