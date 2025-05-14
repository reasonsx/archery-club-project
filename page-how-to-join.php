<?php
/*
Template Name: How to Join
*/

get_header(); ?>
<?php $hero_image = get_field('join_hero_image'); ?>
<?php $hero_title = get_field('join_hero_title'); ?>
<?php $hero_description = get_field('join_hero_description'); ?>

<section class="h-screen bg-[url('/assets/svgs/pattern_big.svg')] bg-no-repeat bg-center bg-cover flex items-center justify-center">
  <h1 class="text-4xl text-black font-bold"><?php 
    if ($hero_title) {
        echo nl2br(esc_html($hero_title));
    }
    ?>
</h1>
<p><?php 
    if ($hero_description) {
        echo nl2br(esc_html($hero_description));
    }
?></p>
<img src="<?php echo $hero_image ['sizes']['large']; ?>" alt="<?php echo $intro_image ["alt"]; ?>" class='w-96 h-96 object-contain'/>
</section>
<?php get_footer(); ?>
