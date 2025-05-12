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

<?php wp_footer(); ?>
</body>
</html>
