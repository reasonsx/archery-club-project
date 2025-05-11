<?php get_header(); ?>

<div class="text-center py-16 px-4">
  <h1 class="text-4xl font-bold text-red-600">404 - Page Not Found</h1>
  <p class="mt-4 text-lg text-gray-700">Sorry, the page you are looking for doesn’t exist.</p>
  <a href="<?php echo home_url(); ?>" class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
    Go to Homepage
  </a>
</div>

<?php get_footer(); ?>
