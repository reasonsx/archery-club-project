<?php
/*
Template Name: Blog Overview
*/
get_header();
?>
<section class="h-[50vh] bg-no-repeat bg-center bg-cover relative flex items-center justify-center text-white"
  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg');">

  <!-- Blue circle behind text -->
  <div class="absolute w-48 h-48 bg-blue-500 rounded-full -z-10"></div>

  <!-- Text on top -->
  <h1 class="text-4xl md:text-5xl font-bold z-10">ARCHERY MAGAZINE</h1>

</section>


<section class="max-w-screen-lg mx-auto pt-24 px-4">
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
