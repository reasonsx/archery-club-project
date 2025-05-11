<footer class="bg-white rounded-lg shadow-sm m-4 w-[80vw] mx-auto">
    <div class="w-full mx-auto max-w-screen-xl p-4 flex justify-between items-center">
        <!-- Left Section: Copyright and Name -->
        <span class="text-sm text-gray-500 sm:text-left">
            Copyright © 2025
            <a href="<?php echo home_url(); ?>" class="hover:underline">Sønderborg Bueskyttelaug</a>
        </span>

        <!-- Right Section: Links -->
        <ul class="flex gap-4 text-sm font-medium text-gray-500">
            <li>
                <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>" class="hover:underline">About us</a>
            </li>
            <li>
                <a href="https://www.facebook.com/profile.php?id=100057323084944#" class="hover:underline">Facebook</a>
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