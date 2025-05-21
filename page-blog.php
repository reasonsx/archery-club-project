<?php
/*
Template Name: Blog Overview
*/
get_header();
$title = get_field('blog_page_title');
?>
<section class="h-[15rem] sm:h-[30vh] md:h-[50vh] bg-no-repeat bg-center bg-cover relative flex items-center justify-center text-white"
  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg');">

  <!-- Blue circle behind text -->
  <div class="absolute right-[20rem] w-40 h-40 sm:!w-56 sm:!h-56 bg-[#8DB7E1] rounded-full z-0"></div>

  <!-- Text on top -->
  <h1 class="text-black text-center max-sm:text-4xl sm:text-6xl md:text-[80px] lg:text-[100px] font-bold z-10"><?php echo nl2br(esc_html($title)); ?></h1>

</section>


<section class="max-w-screen-lg mx-auto pt-16 sm:pt-24 px-4">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    $blog_posts = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 10,
      'paged' => get_query_var('paged') ?: 1,
    ));

    if ($blog_posts->have_posts()):
      while ($blog_posts->have_posts()): $blog_posts->the_post(); ?>
        <article class="rounded-lg overflow-hidden group">
          <!-- Image Top Half -->
          <?php if (has_post_thumbnail()): ?>
            <div class="h-48 overflow-hidden">
              <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transition-transform duration-300 group-hover:scale-105']); ?>
            </div>
          <?php else: ?>
            <div class="h-48 bg-gray-300"></div>
          <?php endif; ?>

          <!-- Blue Bottom Half -->
          <div class="bg-[#8DB7E1] text-black p-6 flex flex-col justify-between h-56">
            <div>
              <h2 class="text-xl font-semibold mb-2"><?php the_title(); ?></h2>
              <p class="text-sm text-black line-clamp-3"><?php echo get_the_excerpt(); ?></p>
            </div>

            <a href="<?php the_permalink(); ?>" class="cursor-pointer inline-flex items-end mt-4 text-black hover:text-white font-semibold">
                <?php echo pll__('Read more'); ?>
              <svg class="ml-2 w-6 h-6 stroke-current" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49 49" >
                <path d="M8.16659 24.5L40.8333 24.5M40.8333 24.5L28.5833 36.75M40.8333 24.5L28.5833 12.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
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
  </div>
</section>


<?php get_footer(); ?>
