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
<?php $ready_to_join = get_field('ready_to_join'); ?>
<?php $sign_up_form_title = get_field('sign_up_form_title'); ?>
<?php $sign_up_form_description = get_field('sign_up_form_description'); ?>
<?php $where_and_when_title = get_field('where_and_when_title'); ?>
<?php $winter_location = get_field('winter_location'); ?>
<?php $summer_location = get_field('summer_location'); ?>
<?php $training_times = get_field('training_times'); ?>
<?php $where_and_when_image = get_field('where_and_when_image'); ?>
<?php $equipment_rental_info = get_field('equipment_rental_info'); ?>
<?php $pricing_title = get_field('pricing_title'); ?>
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
    <div class="flex flex-col sm:flex-row gap-5">
        <div class="flex flex-col w-auto mx-auto w-1/2 text-black">
            <p class="text-black"><?php if ($description_top) echo wp_kses_post(nl2br($description_top)); ?></p>
            <div class="flex flex-row my-5 content-center">
              <p class="text-black  flex items-center"><?php if ($next_event_text) echo wp_kses_post(nl2br($next_event_text)); ?></p>
                <p class="font-bold text-black bg-[#FDD576] rounded ml-3 px-2 py-1">
                <?php if ($next_event_date) echo wp_kses_post(nl2br($next_event_date)); ?>
              </p>
            </div>
              <p class="text-black mb-3"><?php if ($following_event_text) echo wp_kses_post(nl2br($following_event_text)); ?></p>
            <p class="text-black"><?php if ($ready_to_join) echo wp_kses_post(nl2br($ready_to_join)); ?></p>
        </div>
        <div class="flex flex-col w-xl mx-auto">
          <h4 class="text-black text-xl"><?php if ($sign_up_form_title) echo wp_kses_post(nl2br($sign_up_form_title)); ?></h4>
          <div class="flex flex-col mb-2">
              <?php if ($sign_up_form_description) echo wp_kses_post(nl2br($sign_up_form_description)); ?>
              <p class="font-bold text-black ml-2"><?php if ($next_event_date) echo wp_kses_post(nl2br($next_event_date)); ?></p>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="0d13222" title="Sign up for the introductory evening" html_class="signup-intro-form"]'); ?>
        </div>
    </div>
    

</section>

<section class="max-w-screen-lg mx-auto pt-24">
    <h1 class="mb-5"><?php if ($where_and_when_title) echo wp_kses_post(nl2br($where_and_when_title)); ?></h1>
    <div class="flex flex-col sm:flex-row gap-5">
      <img
          src="<?php echo $where_and_when_image['sizes']['medium']; ?>"
          alt="<?php echo $where_and_when_image['alt']; ?>"
          class="rounded-full w-64 h-64 object-cover"
        />

      <div class="flex flex-col gap-3">
        <p class="text-black"><?php if ($winter_location) echo wp_kses_post(nl2br($winter_location)); ?></p>
        <p class="text-black"><?php if ($summer_location) echo wp_kses_post(nl2br($summer_location)); ?></p>
        <p class="text-black"><?php if ($training_times) echo wp_kses_post(nl2br($training_times)); ?></p>
      </div>
    </div>
</section>

<section class="max-w-screen-lg mx-auto pt-24">
  <h1 class="text-3xl font-bold mb-6">
        <p class="text-black"><?php if ($pricing_title) echo wp_kses_post(nl2br($pricing_title)); ?></p>
  </h1>
  <?php
  $pricing_posts = new WP_Query(array(
    'post_type' => 'pricing',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
  ));

  if ($pricing_posts->have_posts()): ?>
    <div class="border-t border-black">
      <?php
      $index = 0;
      while ($pricing_posts->have_posts()): $pricing_posts->the_post();
        $age_range = get_field('age_range');
        $price = get_field('price');
        $index++;
        $is_even = $index % 2 === 0;
        $row_class = $is_even ? 'bg-[#FDD576]' : '';
      ?>
        <div class="flex justify-between items-end py-3 px-3 border-b border-black <?php echo $row_class; ?>">
          <div class="text-xl">
            <span class="uppercase text-5xl"><?php the_title(); ?></span>
            <span class="text-sm text-gray-700 ml-2"><?php echo esc_html($age_range); ?></span>
          </div>
          <div class="text-right text-md font-semibold">
            <?php echo esc_html($price); ?>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  <?php else: ?>
    <p class="text-center text-gray-500">No pricing info found.</p>
  <?php endif; ?>

  <p class="text-sm mt-4 font-medium text-black">
    <?php echo esc_html(get_field('equipment_rental_info')); ?>
  </p>

</section>


<section class="max-w-screen-lg mx-auto pt-24">
  <?php
  $faqs = new WP_Query(array(
    'post_type' => 'faq',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
  ));

  if ($faqs->have_posts()): ?>
    <div class="space-y-4">
      <?php while ($faqs->have_posts()): $faqs->the_post(); ?>
        <div x-data="{ open: false }" class="rounded-md overflow-hidden transition-all duration-300">
          <button
            @click="open = !open"
            :style="open ? 'background-color: #8DB7E1;' : 'background-color: rgba(141, 183, 225, 0.45);'"
            class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-900 font-medium focus:outline-none transition-colors duration-300"
          >

            <span><?php echo esc_html(get_field('question')); ?></span>
            <svg class="w-6 h-6 transform transition-transform duration-300" :class="{ '-rotate-45': open }" width="24" height="24" viewBox="0 0 97 97" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M32.055 32.0552L64.1105 64.1107M64.1105 64.1107H40.0689M64.1105 64.1107V40.069" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <div
  x-show="open"
  x-transition:enter="transition-all ease-out duration-300"
  x-transition:enter-start="opacity-0 max-h-0"
  x-transition:enter-end="opacity-100 max-h-[1000px]"
  x-transition:leave="transition-all ease-in duration-200"
  x-transition:leave-start="opacity-100 max-h-[1000px]"
  x-transition:leave-end="opacity-0 max-h-0"
  class="px-6 py-4 text-black text-sm overflow-hidden"
  style="background-color: #8DB7E1"
  x-cloak
>
  <?php echo wp_kses_post(get_field('answer')); ?>
</div>


        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  <?php else: ?>
    <p class="text-center text-gray-500">Ingen spørgsmål fundet.</p>
  <?php endif; ?>
</section>




<?php get_footer(); ?>
