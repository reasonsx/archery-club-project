<?php
/*
Template Name: How to Join
*/

get_header(); ?>
<?php $hero_image = get_field('join_hero_image'); ?>
<?php $hero_title = get_field('join_hero_title'); ?>
<?php $hero_description = get_field('join_hero_description'); ?>

<section class="h-screen bg-no-repeat bg-center bg-cover relative"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg');">
  
  <div class="flex flex-col md:flex-row items-center justify-between w-full h-full px-8 relative">


    <!-- Image on Right with Yellow Circle Background -->
    <div class="w-full md:w-1/2 relative flex items-end justify-center h-full">
      <!-- Yellow Circle -->
      <div class="w-96 h-96 bg-[#FDD576] rounded-full absolute top-1/2 md:top-auto md:bottom-0 transform -translate-y-1/2 md:translate-y-0 z-0"></div>

      <!-- Image -->
      <img src="<?php echo $hero_image['sizes']['large']; ?>" alt="<?php echo $hero_image['alt']; ?>"
           class="w-[90%] md:w-auto h-auto md:h-[90vh] object-contain relative z-10" />
    </div>

    <!-- Text on Left (stacks on top in mobile) -->
    <div class="w-full md:w-1/2 md:text-center md:text-left">
      <h1 class="text-4xl text-black font-bold mb-4">
        <?php if ($hero_title) echo nl2br(esc_html($hero_title)); ?>
      </h1>
      <h3 class="text-lg">
        <?php if ($hero_description) echo nl2br(esc_html($hero_description)); ?>
      </h3>
    </div>

  </div>
</section>

<?php get_footer(); ?>
