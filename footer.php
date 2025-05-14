<footer class="bg-white rounded-lg shadow-sm m-4 w-[80vw] mx-auto mt-auto">
    <div class="w-full mx-auto max-w-screen-xl p-4 flex justify-between items-center">
        <!-- Left Section: Copyright and Name -->
        <span class="text-sm text-gray-500 sm:text-left">
            Copyright © 2025
            <a href="<?php echo home_url(); ?>" class="hover:underline">Sønderborg Bueskyttelaug</a>
        </span>

        <!-- Right Section: Links -->
        <ul class="flex gap-4 text-sm font-medium text-gray-500">
            <li>
                <a href="https://www.facebook.com/profile.php?id=100057323084944" class="text-[#39569c] hover:text-gray-900">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
            </li>
            <li>
                <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="hover:underline">About us</a>
            </li>
            <li>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="hover:underline">Blog</a>
            </li>
            <li>
                <a href="<?php echo get_permalink(get_page_by_path('how-to-join')); ?>" class="hover:underline">How to join</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>


<footer class="p-4 bg-white sm:p-6">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
<!--            <div class="mb-6 md:mb-0">-->
<!--                <a href="https://flowbite.com" class="flex items-center">-->
<!--                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />-->
<!--                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>-->
<!--                </a>-->
<!--            </div>-->
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">

                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Contact</h2>
                    <ul class="text-gray-600">
                        <li class="mb-4">
                            <a href="tel:+4524609476" class="hover:underline">+45 24 60 94 76</a>
                        </li>
                        <li>
                            <a href="mailto:formand@s-bl.dk" class="hover:underline">formand@s-bl.dk</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Training Times</h2>
                    <ul class="text-gray-600">
                        <li class="mb-4">
                            <span>Monday: 18:00 – 19:30</span>
                        </li>
                        <li class="mb-4">
                            <span>Thursday: 18:00 – 19:30</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Training Places</h3>
                    <ul class="text-gray-600">
                        <li class="mb-4">
                            <span>Winter:</span><br><span>Indoor training at Humlehøjhallen (Stråbjergvej 1, 6400 Sønderborg)</span>
                        </li>
                        <li class="mb-4">
                            <span>Summer:</span><br><span>Outdoor range at Ingolf Nielsens Vej, 6400 Sønderborg</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Federations</h2>
                    <ul class="text-gray-600">
                        <li class="mb-4">
                            <a href="https://bueskydningdanmark.dk/" target="_blank" class="hover:underline">Archery Denmark</a>
                        </li>
                        <li>
                            <a href="https://www.worldarchery.sport/" target="_blank" class="hover:underline">Archery International</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">© 1954 - 2025 <a href="<?php echo home_url(); ?>" class="hover:underline">Sønderborg Bueskyttelaug</a></span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="https://www.facebook.com/profile.php?id=100057323084944#" target="_blank" class="text-gray-500 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
