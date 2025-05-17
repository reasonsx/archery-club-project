<?php
/*
Template Name: Blog Overview
*/
get_header();
?>
<section class="h-[50vh] bg-no-repeat bg-center bg-cover relative"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg');">
  
  <div class="flex flex-col-reverse md:flex-row items-center md:justify-between w-full h-full px-8 relative">


    <!-- Image on Right with Yellow Circle Background -->
    <div class="md:w-1/2 md:h-1/2 relative flex items-end justify-center h-full">
      <!-- Yellow Circle -->
      <div class="w-96 h-96 bg-[#FDD576] rounded-full absolute top-1/2 md:top-auto md:bottom-0 transform -translate-y-1/2 md:translate-y-0 z-0"></div>

      <!-- Image -->
      <div class="w-full md:w-1/2 text-center md:text-left">
      <h1 class="lg:text-7xl text-black font-bold mb-4">
        <?php if ($hero_title) echo nl2br(esc_html($hero_title)); ?>
      </h1>
    </div>
    </div>
  </div>
</section>

<section class="max-w-screen-lg mx-auto pt-24 px-4">
  <h1 class="text-3xl font-bold mb-8 text-center">Blog</h1>

  <?php
  $blog_posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => get_query_var('paged') ?: 1,
  ));

  if ($blog_posts->have_posts()):
    while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
      <article class="mb-8 border-b pb-4">
        <h2 class="text-2xl font-semibold">
          <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:underline">
            <?php the_title(); ?>
          </a>
        </h2>
        <p class="text-gray-600 mt-2">
          <?php echo get_the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:underline inline-block mt-2">
          Read more →
        </a>
      </article>
    <?php endwhile;

    // Pagination (if needed)
    echo paginate_links(array(
      'total' => $blog_posts->max_num_pages
    ));

    wp_reset_postdata();
  else:
    echo '<p>No blog posts found.</p>';
  endif;
  ?>
</section>

<?php get_footer(); ?>
