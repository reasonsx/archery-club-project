<?php
/*
Template Name: How to Join
*/

get_header(); ?>
<?php $hero_image = get_field('join_hero_image'); ?>
<?php $hero_title = get_field('join_hero_title'); ?>
<?php $hero_description = get_field('join_hero_description'); ?>
<?php $description_top = get_field('description_top'); ?>
<?php $next_event_text = get_field('next_event_text'); ?>
<?php $next_event_date = get_field('next_event_date'); ?>
<?php $following_event_text = get_field('following_event_text'); ?>
<?php $following_event_date = get_field('following_event_date'); ?>
<?php $ready_to_join = get_field('ready_to_join'); ?>

<section class="h-screen bg-no-repeat bg-center bg-cover relative"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/svgs/pattern_big.svg');">
  
  <div class="flex flex-col-reverse md:flex-row items-center md:justify-between w-full h-full px-8 relative">


    <!-- Image on Right with Yellow Circle Background -->
    <div class="md:w-1/2 md:h-1/2 relative flex items-end justify-center h-full">
      <!-- Yellow Circle -->
      <div class="w-96 h-96 bg-[#FDD576] rounded-full absolute top-1/2 md:top-auto md:bottom-0 transform -translate-y-1/2 md:translate-y-0 z-0"></div>

      <!-- Image -->
      <img src="<?php echo $hero_image['sizes']['large']; ?>" alt="<?php echo $hero_image['alt']; ?>"
           class="w-[50%] md:w-auto h-auto md:h-[90vh] object-contain relative z-10" />
    </div>

    <!-- Text on Left (stacks on top in mobile) -->
    <div class="w-full md:w-1/2 text-center md:text-left">
      <h1 class="lg:text-7xl text-black font-bold mb-4">
        <?php if ($hero_title) echo nl2br(esc_html($hero_title)); ?>
      </h1>
      <h2 class="text-lg">
        <?php if ($hero_description) echo nl2br(esc_html($hero_description)); ?>
      </h2>
    </div>

  </div>
</section>
<section class="max-w-screen-lg mx-auto pt-24">
    <h1 class="mb-5"><?php the_title(); ?></h1>
    <div class="flex flex-row gap-5">
        <div class="flex flex-col w-auto mx-auto w-1/2 text-black">
            <p class="text-black"><?php if ($description_top) echo wp_kses_post(nl2br($description_top)); ?></p>
            <div class="flex flex-row my-5 content-center">
              <p class="text-black  flex items-center"><?php if ($next_event_text) echo wp_kses_post(nl2br($next_event_text)); ?></p>
                <p class="font-bold text-black bg-[#FDD576] rounded ml-5 px-2 py-1">
                <?php if ($next_event_date) echo wp_kses_post(nl2br($next_event_date)); ?>
              </p>
            </div>
            <div class="flex flex-row">
              <p class="text-black"><?php if ($following_event_text) echo wp_kses_post(nl2br($following_event_text)); ?></p>
              <p class="font-bold text-black ml-5"><?php if ($following_event_date) echo wp_kses_post(nl2br($following_event_date)); ?></p>
            </div>
            <p class="text-black"><?php if ($ready_to_join) echo wp_kses_post(nl2br($ready_to_join)); ?></p>
        </div>
        <div class="flex flex-col items-center w-1/2 mx-auto">
          <?php echo do_shortcode('[contact-form-7 id="0d13222" title="Sign up for intro evening" html_class="signup-intro-form"]'); ?>
        </div>
    </div>
    

</section>

<?php get_footer(); ?>
