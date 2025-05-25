<?php
/*
Template Name: How to Join
*/

get_header(); ?>
<?php $hero_image = get_field('join_hero_image'); ?>
<?php $hero_title = get_field('join_hero_title'); ?>
<?php $hero_description = get_field('join_hero_description'); ?>
<?php $where_and_when_title = get_field('where_and_when_title'); ?>
<?php $winter_location = get_field('winter_location'); ?>
<?php $summer_location = get_field('summer_location'); ?>
<?php $training_times = get_field('training_times'); ?>
<?php $where_and_when_image = get_field('where_and_when_image'); ?>
<?php $equipment_rental_info = get_field('equipment_rental_info'); ?>
<?php $pricing_title = get_field('pricing_title'); ?>
<section class="flex flex-col gap-24">
<!--HERO SECTION-->
<section class="relative h-[40rem] w-full overflow-hidden mx-auto max-w-[2560px]">
    <!-- Background image -->
    <?php if ($hero_image): ?>
        <img src="<?php echo esc_url($hero_image['sizes']['large']); ?>"
             alt="<?php echo esc_attr($hero_image['alt']); ?>"
             class="absolute inset-0 w-full h-full object-cover brightness-75"
             draggable="false">
    <?php endif; ?>

    <!-- Overlay content -->
    <div class="relative z-10 h-full flex items-center">
        <div class="mx-auto w-full max-w-screen-lg px-4 flex">
            <div class="p-4 flex flex-col w-full space-y-6">
                <h1 class="mb-4 text-[4rem] text-white"><?php echo esc_html($hero_title); ?></h1>
                <p class="text-lg font-semibold text-white"><?php echo wp_kses_post(nl2br($hero_description)); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="max-w-screen-xl mx-auto p-4 sm:p-6 xl:p-0 py-20">
    <h1 class="mb-4"><?php the_field('how_to_join_title'); ?></h1>
    <p class="mb-12 text-lg"><?php the_field('how_to_join_description'); ?></p>

    <div class="grid grid-cols-1 gap-10">
        <?php
        $steps = new WP_Query([
            'post_type' => 'how_to_join_step',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        ]);

        if ($steps->have_posts()) :
            while ($steps->have_posts()) : $steps->the_post();
                $step_title = get_field('step_title');
                $step_description = get_field('step_description');
                ?>
                <div>
                    <div class="inline-block bg-[#FDD576] rounded-md px-3 py-1 font-semibold mb-2">
                        <?php echo esc_html(get_the_title()); ?>
                    </div>
                    <h3 class="mb-2"><?php echo esc_html($step_title); ?></h3>
                    <p><?php echo wp_kses_post(nl2br(($step_description))); ?></p>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<section class="max-w-screen-xl w-full mx-auto p-4 sm:p-6 xl:p-0 pt-24">
    <h1 class="mb-5"><?php if ($where_and_when_title) echo wp_kses_post(nl2br($where_and_when_title)); ?></h1>
    <div class="flex flex-col sm:flex-row gap-5 items-center">
        <img
                src="<?php echo $where_and_when_image['sizes']['medium_large']; ?>"
                alt="<?php echo $where_and_when_image['alt']; ?>"
                class="rounded-full w-64 h-64 object-cover"
        />

        <div class="flex flex-col gap-3">
            <p><?php if ($winter_location) echo wp_kses_post(nl2br($winter_location)); ?></p>
            <p><?php if ($summer_location) echo wp_kses_post(nl2br($summer_location)); ?></p>
            <p><?php if ($training_times) echo wp_kses_post(nl2br($training_times)); ?></p>
        </div>
    </div>
</section>

<section class="max-w-screen-xl w-full mx-auto p-4 sm:p-6 xl:p-0 pt-24">
    <h1 class="mb-6">
        <p><?php if ($pricing_title) echo wp_kses_post(nl2br($pricing_title)); ?></p>
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
                        <span class="text-sm text-gray-900 ml-2"><?php echo esc_html($age_range); ?></span>
                    </div>
                    <div class="text-right text-md font-semibold">
                        <?php echo esc_html($price); ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-900"><?php echo pll__('No posts found.'); ?></p>
    <?php endif; ?>

    <p class="text-sm mt-4 font-medium">
        <?php echo wp_kses_post(nl2br((get_field('equipment_rental')))); ?>
    </p>

</section>


<section class="max-w-screen-xl  w-full mx-auto p-4 sm:p-6 xl:p-0 pt-24">
    <?php
    $post_type = 'faq';
    $post_type_obj = get_post_type_object($post_type);
    $faqs = new WP_Query(array(
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ));

    if ($post_type_obj): ?>
        <h1 class="mb-6">
            <?php echo esc_html($post_type_obj->labels->singular_name); ?>
        </h1>
    <?php endif;

    if ($faqs->have_posts()): ?>
        <div class="space-y-4">
            <?php while ($faqs->have_posts()): $faqs->the_post(); ?>
                <div x-data="{ open: false }" class=" rounded-md overflow-hidden transition-all duration-300">
                    <button
                            @click="open = !open"
                            :style="open ? 'background-color: #8DB7E1;' : 'background-color: rgba(141, 183, 225, 0.45);'"
                            class="w-full flex justify-between items-center px-6 py-4 text-left text-gray-900 font-medium focus:outline-none transition-colors duration-300"
                    >

                        <span><?php echo esc_html(get_field('question')); ?></span>
                        <svg class="w-6 h-6 transform transition-transform duration-300" :class="{ '-rotate-45': open }"
                             width="24" height="24" viewBox="0 0 97 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.055 32.0552L64.1105 64.1107M64.1105 64.1107H40.0689M64.1105 64.1107V40.069"
                                  stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
                            class="px-6 py-4 text-sm overflow-hidden"
                            style="background-color: #8DB7E1"
                            x-cloak
                    >
                        <?php echo wp_kses_post(get_field('answer')); ?>
                    </div>


                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    <?php else: ?>
        <p class="text-center"><?php echo pll__('No posts found.'); ?></p>
    <?php endif; ?>
</section>
</section>

<?php get_footer(); ?>
