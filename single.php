<?php get_header(); ?>

<main class="max-w-screen-lg mx-auto px-4 pt-24 pb-16">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="prose lg:prose-xl max-w-none">
      <!-- Title -->
      <h1 class=" mb-4"><?php the_title(); ?></h1>

      <!-- Date  -->
      <p class="text-sm text-gray-500 mb-6">
        <?php echo get_the_date(); ?>
      </p>

      <!-- Featured Image (optional) -->
      <?php if (has_post_thumbnail()) : ?>
        <div class="mb-8">
          <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-md']); ?>
        </div>
      <?php endif; ?>

      <!-- Content -->
      <div class="content text-gray-800">
        <?php the_content(); ?>
      </div>
    </article>

    <!-- Optional: Back to Blog link -->
    <div class="mt-12">
      <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="cursor-pointer focus:outline-none text-black bg-[#FDD576] focus:ring-4 focus:ring-[#fdd576]/50 font-medium rounded-lg text-base px-6 py-2 inline-block transition text-center">
        ← Back to Blog
      </a>
    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
