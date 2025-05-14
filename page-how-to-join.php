<?php
/*
Template Name: How to Join
*/

get_header(); ?>
<?php $hero_image = get_field('join_hero_image'); ?>
<?php $hero_title = get_field('join_hero_title'); ?>
<?php $hero_description = get_field('join_hero_description'); ?>

<section class="h-screen bg-no-repeat bg-center bg-cover flex items-center justify-center relative"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg'); z-index: -1;">
  <div class="flex items-center justify-between w-full px-8 relative">
    
    <!-- Right content (Image + Yellow Circle) -->
    <div class="w-1/2 flex flex-col items-center justify-center relative">
      <!-- Yellow Circle as Background, vertically centered and aligned with the image -->
      <div class="w-48 h-48 bg-[FDD576] rounded-full absolute top-1/2 transform -translate-y-1/2 left-1/2 -translate-x-1/2"></div>
      <img src="<?php echo $hero_image['sizes']['large']; ?>" alt="<?php echo $intro_image['alt']; ?>" class="w-auto h-[90vh] object-contain mb-4 relative z-10" />
    </div>
    
    <!-- Left content (Text) -->
    <div class="w-1/2">
      <h1 class="text-4xl text-black font-bold mb-4"><?php 
        if ($hero_title) {
            echo nl2br(esc_html($hero_title));
        }
        ?>
      </h1>
      <h3 class="text-lg"><?php 
        if ($hero_description) {
            echo nl2br(esc_html($hero_description));
        }
      ?></h3>
    </div>
  </div>
</section>

<?php get_footer(); ?>
