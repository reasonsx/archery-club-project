<?php
/*
Template Name: How to Join
*/

get_header(); ?>
<?php $hero_image = get_field('join_hero_image'); ?>
<?php $hero_title = get_field('join_hero_title'); ?>
<?php $hero_description = get_field('join_hero_description'); ?>

<section class="h-screen bg-no-repeat bg-center bg-cover flex items-center justify-center"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg');">
  <div class="flex items-center justify-between w-full px-8">
    
    <div class="w-1/2 flex flex-col items-center justify-center relative">
      <img src="<?php echo $hero_image['sizes']['large']; ?>" alt="<?php echo $intro_image['alt']; ?>" class="w-48 h-48 object-contain mb-4" />
      <!-- Yellow Circle -->
      <div class="w-24 h-24 bg-yellow-400 rounded-full"></div>
    </div>
    
    <div class="w-1/2">
      <h1 class="text-4xl text-black font-bold mb-4"><?php 
        if ($hero_title) {
            echo nl2br(esc_html($hero_title));
        }
        ?>
      </h1>
      <p class="text-lg"><?php 
        if ($hero_description) {
            echo nl2br(esc_html($hero_description));
        }
      ?></p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
