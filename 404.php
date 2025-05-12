<?php get_header(); ?>

<section class="grid h-auto place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="font-semibold text-blue-400">404</p>
        <h1>Page not found</h1>
        <p class="mt-6">Sorry, we couldn’t find the page you’re looking for.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
               href="<?php echo home_url(); ?>">Go back home</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
