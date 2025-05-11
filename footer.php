<footer class="bg-white rounded-lg shadow-sm m-4 ">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center ">Copyright © 2025 <a href="<?php echo home_url(); ?>" class="hover:underline">Sønderborg Bueskyttelaug</a>
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
        <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'about-us' ) ); ?>" class="hover:underline me-4 md:me-6">About us</a>
        </li>
    <li>
            <a href="https://www.facebook.com/profile.php?id=100057323084944#" class="hover:underline me-4 md:me-6">Facebook</a>
        </li>
        <li>
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="hover:underline me-4 md:me-6">Blog</a>
        </li>
        <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'how-to-join' ) ); ?>" class="hover:underline me-4 md:me-6">How to join</a>
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