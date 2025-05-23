<?php
/* Template Name: About-Us */
get_header();
$hero_image = get_field('about_us_hero_image');
$about_us_title = get_field('about_us_title');
$year = get_field('date');
$story_title = get_field('our_story_title');
$story_text = get_field('our_story');
$story_button_text = get_field('our_story_button_text');
$story_button_link = get_field('our_story_button_link');
$equipment_title = get_field('equipment_title');
$timeline_image = get_field('timeline_image');
?>
<section class="flex flex-col gap-24">
    <!-- HERO -->
    <section
            class="h-[48rem] bg-no-repeat bg-center bg-cover relative flex items-center justify-end sm:pr-40"
            style="background-image:url('<?php echo esc_url($hero_image['url']); ?>');">

        <!-- White circle behind title -->
        <div class="absolute w-96 h-96 opacity-50 bg-white rounded-full -translate-x-8 -translate-y-6 z-0"></div>

        <!-- Page title -->
        <h1 class="text-black text-right font-extrabold z-10 leading-none
              text-[6rem] md:text-[8rem] tracking-wide">
            <?php if ($about_us_title) echo nl2br(esc_html($about_us_title)); ?>
        </h1>
    </section>

    <!-- OUR STORY -->
    <section class="max-w-screen-xl mx-auto px-4">
        <div class="flex flex-row gap-10 items-start">

            <!-- BIG YEAR BAR -->
            <div class="relative md:w-[20vw]">
                <div class="bg-[#8DB7E1] w-full h-full min-h-[500px]"></div>
                <span class="absolute inset-0 flex items-center justify-center rotate-270">
        <h1 class="text-[120px] md:text-[140px] font-extrabold leading-none text-black">
          <?php echo esc_html($year); ?>
        </h1>
      </span>
            </div>

            <!-- STORY CONTENT -->
            <div>
                <h1 class="mb-6">
                    <?php echo esc_html($story_title); ?>
                </h1>

                <div class="prose max-w-none mb-8">
                    <?php if ($story_text) echo nl2br(esc_html($story_text)); ?>
                </div>

                <?php if ($story_button_text) : ?>
                    <a href="<?php echo esc_url($story_button_link ?: '#'); ?>"
                       class=" text-center cursor-pointer focus:outline-none text-black bg-[#FDD576] focus:ring-4 focus:ring-[#fdd576]/50 font-medium rounded-lg text-base px-6 py-2 transition">
                        <?php echo esc_html($story_button_text); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </section>
    
    <!-- TIMELINE -->
    <section class="max-w-screen-xl mx-auto px-4 py-12">
        <div class="bg-[#8DB7E1] rounded-xl overflow-hidden md:flex h-full min-h-[500px]">
            <!-- Left Image -->
            <div class="md:w-1/2 h-[400px] md:h-auto">
                <img src="<?php echo esc_url($timeline_image['url']); ?>"
                     alt="<?php echo esc_attr($timeline_image['alt']); ?>"
                     class="w-full h-full object-cover">
            </div>

            <!-- Right Timeline -->
            <div class="md:w-1/2 px-8 py-8 overflow-y-auto">
                <ol class="relative border-s border-white">
                    <?php
                    $timeline_query = new WP_Query([
                        'post_type' => 'timeline',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value',
                        'meta_key' => 'timeline_date',
                        'order' => 'ASC',
                    ]);

                    if ($timeline_query->have_posts()):
                        while ($timeline_query->have_posts()): $timeline_query->the_post();
                            $timeline_date = get_field('timeline_date');
                            $timeline_title = get_field('timeline_title');
                            $timeline_description = get_field('timeline_description');
                            ?>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-[#8DB7E1] rounded-full mt-1.5 -start-1.5 border border-white"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-900">
                                    <?php echo esc_html($timeline_date); ?>
                                </time>
                                <h3 class="text-lg font-semibold text-gray-900">
                                    <?php echo esc_html($timeline_title); ?>
                                </h3>
                                <p class="mb-4 text-base font-normal text-gray-900">
                                    <?php echo wp_kses_post(nl2br($timeline_description)); ?>
                                </p>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>No timeline events found.</p>';
                    endif;
                    ?>
                </ol>
            </div>
        </div>
    </section>


    <!-- MEET OUR MEMBERS -->
    <section class="max-w-screen-xl mx-auto px-4">
        <?php
        $title = get_field('members_title');
        $story_title = get_field('member_story_title');
        $subtitle = get_field('member_story_subtitle');
        $description = get_field('member_story_text');
        $image = get_field('member_story_image');
        ?>

        <?php if ($title): ?>
            <h1 class="mb-8"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <div class="bg-[#FDD576] md:h-[70vh] rounded-xl overflow-hidden md:flex">
            <?php if ($image): ?>
                <div class="md:w-1/2">
                    <img src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt']); ?>"
                         class="w-full h-full object-cover">
                </div>
            <?php endif; ?>

            <div class="p-6 md:p-8 md:w-1/2 flex flex-col justify-center">
                <?php if ($story_title): ?>
                    <h3 class="text-xl text-black font-semibold mb-1"><?php echo esc_html($story_title); ?></h3>
                <?php endif; ?>
                <?php if ($subtitle): ?>
                    <p class="text-sm text-black mb-4"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
                <?php if ($description): ?>
                    <p class="text-base text-black italic">“<?php echo esc_html($description); ?>”</p>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <!-- CORE VALUES -->
    <?php
    $post_type = 'core_value';
    $type_object = get_post_type_object($post_type);
    $section_title = $type_object ? $type_object->labels->name : 'Core Values';
    ?>
    <section class="max-w-screen-xl mx-auto px-4">
        <!-- Section Heading -->
        <h1 class="mb-8">
            <?php echo esc_html($section_title); ?>
        </h1>

        <!-- Values Grid -->
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <?php
            $values = new WP_Query([
                'post_type' => $post_type,
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]);

            if ($values->have_posts()) :
                while ($values->have_posts()) : $values->the_post();
                    ?>
                    <!-- Card -->
                    <div class="relative bg-[#8DB7E1] text-black p-8 md:p-10 min-h-[280px]">
                        <!-- “┐” corner accent -->
                        <span class="absolute top-6 right-6 w-10 h-10 border-t-4 border-r-4 border-black"></span>

                        <h3 class="text-2xl font-semibold my-4"><?php the_title(); ?></h3>
                        <p class="text-black">  <?php echo wp_kses_post(get_field('value_description')); ?></p>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="col-span-full text-center text-gray-500">No core values found.</p>';
            endif;
            ?>
        </div>
    </section>
    <!-- BOWS SECTION -->
    <section class="w-full h-auto bg-[#8DB7E1] py-16">
        <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-16 flex flex-col ">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="text-gray-900 text-3xl font-semibold mb-6">What types of bows we use?</h1>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Bow 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-[#FDD576] flex items-center justify-center overflow-hidden">
                        <img
                                src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Compound_bow_transparent.png"
                                alt="Bow 1"
                                class="max-w-[70%] max-h-[70%] object-contain"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Bow #1</h3>
                    <p class="mt-2 text-gray-700 max-w-xs">Learn from professional archery coaches with years of
                        experience guiding beginners and pros alike.</p>
                </div>

                <!-- Bow 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-[#FDD576] flex items-center justify-center overflow-hidden">
                        <img
                                src="https://upload.wikimedia.org/wikipedia/commons/8/81/Recurve_bow_transparent.png"
                                alt="Bow 2"
                                class="max-w-[70%] max-h-[70%] object-contain"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Bow #2</h3>
                    <p class="mt-2 text-gray-700 max-w-xs">Participate in fun competitions and social events to
                        connect with fellow archery enthusiasts.</p>
                </div>

                <!-- Bow 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-[#FDD576] flex items-center justify-center overflow-hidden">
                        <img
                                src="https://upload.wikimedia.org/wikipedia/commons/5/53/Longbow_transparent.png"
                                alt="Bow 3"
                                class="max-w-[70%] max-h-[70%] object-contain"
                        />
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Bow #3</h3>
                    <p class="mt-2 text-gray-700 max-w-xs">Access the latest bows and gear to improve your skills
                        and enjoy the sport safely.</p>
                </div>
            </div>
        </section>
    </section>




    <!-- EQUIPMENT -->
    <section class="max-w-screen-xl mx-auto px-4">
        <h1 class="mb-8"><?php echo esc_html($equipment_title); ?></h1>

        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

            <?php
            // WP_Query for the custom post-type “equipment”
            $equipment = new WP_Query([
                'post_type' => 'equipment',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ]);

            if ($equipment->have_posts()) :
                while ($equipment->have_posts()) : $equipment->the_post();

                    $img = get_field('equip_image');        // returns array or URL
                    $subtitle = get_field('equip_subtitle');     // e.g. “Mandatory”
                    $description = get_field('equip_description');  // textarea / WYSIWYG
                    $img_url = $img ? (is_array($img) ? $img['url'] : $img) : '';
                    ?>
                    <!-- CARD -->
                    <div class="text-center text-gray-500">
                        <!-- blue circle with transparent-bg image -->
                        <div class="mx-auto mb-4 w-36 h-36 rounded-full bg-[#8DB7E1] flex items-center justify-center">
                            <?php if ($img_url) : ?>
                                <img src="<?php echo esc_url($img_url); ?>"
                                     alt="<?php the_title_attribute(); ?>"
                                     class="w-46 h-auto"/>
                            <?php endif; ?>
                        </div>

                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">
                            <?php the_title(); ?>
                        </h3>

                        <?php if ($description) : ?>
                            <p class="text-black"><?php echo wp_kses_post(nl2br($description)); ?></p>
                        <?php endif; ?>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="col-span-full text-center text-gray-500">No equipment found.</p>';
            endif;
            ?>

        </div>
    </section>


    <!-- ARCHERY GUIDE -->
    <?php
    $title = get_field('archery_guide_title');
    $description = get_field('archery_guide_description');
    $pdf = get_field('archery_guide_pdf'); // returns array
    $button_text = get_field('archery_guide_button_text');
    ?>
    <section class="max-w-screen-xl mx-auto px-4">
        <h1>
            <?php echo esc_html($title); ?>
        </h1>

        <?php if ($description): ?>
            <p class="my-8 text-lg text-gray-700">
                <?php echo nl2br(esc_html($description)); ?>
            </p>
        <?php endif; ?>

        <a href="<?php echo esc_url($pdf['url']); ?>"
           class=" text-center cursor-pointer focus:outline-none text-black bg-[#FDD576] focus:ring-4 focus:ring-[#fdd576]/50 font-medium rounded-lg text-base px-6 py-2 transition">
            <?php echo esc_html($button_text ?: 'Download PDF'); ?>
        </a>
    </section>

</section>
<?php get_footer(); ?>
