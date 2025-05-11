<?php get_header(); ?>

<div class="text-center py-16 px-4">
  <h1 class="text-4xl font-bold text-red-600">404 - Page Not Found</h1>
  <p class="mt-4 text-lg text-gray-700">Sorry, the page you are looking for doesn’t exist.</p>
  <a href="<?php echo home_url(); ?>" class="mt-6 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
    Go to Homepage
  </a>
</div>


<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <p class="text-base font-semibold text-indigo-600">404</p>
    <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Page not found</h1>
    <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Sorry, we couldn’t find the page you’re looking for.</p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="<?php echo home_url(); ?>" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
    </div>
  </div>
</main>

<?php get_footer(); ?>
