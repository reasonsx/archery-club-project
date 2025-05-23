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
        <h1 class="text-right font-extrabold z-10 leading-none
              text-[6rem] md:text-[8rem] tracking-wide">
            <?php if ($about_us_title) echo nl2br(esc_html($about_us_title)); ?>
        </h1>
    </section>

    <!-- OUR STORY -->
    <section class="max-w-screen-xl mx-auto px-4">
        <div class="flex flex-row gap-8 items-start">

            <!-- BIG YEAR BAR -->
            <div class="relative md:w-[20vw] hidden md:block">
                <div class="bg-[#8DB7E1] w-full h-full min-h-[500px]"></div>
                <span class="absolute inset-0 flex items-center justify-center rotate-270"><h1 class="text-[120px] md:text-[140px] font-extrabold leading-none"><?php echo esc_html($year); ?></h1></span>
            </div>

            <!-- STORY CONTENT -->
            <div class="flex flex-col gap-6">
                <h1>
                    <?php echo esc_html($story_title); ?>
                </h1>

                <div class="prose max-w-none">
                    <?php if ($story_text) echo nl2br(esc_html($story_text)); ?>
                </div>

                <?php if ($story_button_text) : ?>
                    <a href="<?php echo esc_url($story_button_link ?: '#'); ?>"
                       class="inline-flex items-center justify-center max-w-max px-6 py-3 text-sm font-semibold text-center text-gray-900 bg-[#FDD576] rounded-lg hover:bg-[#e6c55e] focus:ring-4 focus:outline-none focus:ring-[#FDD576]/50 shadow transition-all duration-200 mx-auto">
                        <?php echo esc_html($story_button_text); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <!-- TIMELINE -->
    <section class="max-w-screen-xl mx-auto px-4 py-12">
        <div class="bg-[#8DB7E1] overflow-hidden md:flex h-full min-h-[500px]">
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
                                <h3 class="text-lg font-semibold">
                                    <?php echo esc_html($timeline_title); ?>
                                </h3>
                                <p class="mb-4 text-base font-normal">
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
    <section class="max-w-screen-xl mx-auto flex flex-col gap-8 px-4 lg:px-0">
        <?php
        $title = get_field('members_title');
        $story_title = get_field('member_story_title');
        $subtitle = get_field('member_story_subtitle');
        $description = get_field('member_story_text');
        $image = get_field('member_story_image');
        ?>

        <?php if ($title): ?>
            <h1><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <div class="bg-[#FDD576] md:h-[70vh] overflow-hidden md:flex">
            <?php if ($image): ?>
                <div class="md:w-1/2">
                    <img src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt']); ?>"
                         class="w-full h-full object-cover">
                </div>
            <?php endif; ?>

            <div class="p-6 md:p-8 md:w-1/2 flex flex-col justify-center">
                <?php if ($story_title): ?>
                    <h3 class="mb-1"><?php echo esc_html($story_title); ?></h3>
                <?php endif; ?>
                <?php if ($subtitle): ?>
                    <p class="text-sm mb-4"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
                <?php if ($description): ?>
                    <p class="text-base italic">“<?php echo esc_html($description); ?>”</p>
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
        <h1 class="mb-8"><?php echo esc_html($section_title); ?></h1>

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
                    <div class="relative bg-[#8DB7E1] p-8 md:p-10 min-h-[280px]">
                        <!-- “┐” corner accent -->
                        <span class="absolute top-6 right-6 w-10 h-10 border-t-4 border-r-4 border-black"></span>

                        <h3 class="my-4"><?php the_title(); ?></h3>
                        <p>  <?php echo wp_kses_post(get_field('value_description')); ?></p>
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
        <section class="max-w-screen-xl mx-auto p-4 sm:p-6 lg:p-0 gap-16 flex flex-col">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-6">What types of bows we use?</h1>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <?php
                $args = array(
                    'post_type' => 'bow-types',
                    'posts_per_page' => 3, // limit to max 3 posts
                );
                $bows_query = new WP_Query($args);

                if ($bows_query->have_posts()) :
                    while ($bows_query->have_posts()) : $bows_query->the_post();

                        // ACF fields
                        $bow_name = get_field('bow_name');
                        $bow_description = get_field('bow_description');
                        $bow_image = get_field('bow_image');
                        $bow_image_url = $bow_image['url'];
                        $bow_image_alt = $bow_image['alt'];
                        ?>
                        <div class="flex flex-col items-center text-center">
                            <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-[#FDD576] flex items-center justify-center overflow-hidden">
                                <img src="<?php echo esc_url($bow_image_url); ?>"
                                     alt="<?php echo esc_attr($bow_image_alt); ?>"
                                     class="max-w-[70%] max-h-[70%] object-contain"/>
                            </div>
                            <h3><?php echo esc_html($bow_name); ?></h3>
                            <p class="mt-2 max-w-xs"><?php echo esc_html($bow_description); ?></p>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center col-span-full">No bow types found.</p>';
                endif;
                ?>
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
                    <div class="text-center">
                        <!-- blue circle with transparent-bg image -->
                        <div class="mx-auto mb-4 w-36 h-36 rounded-full bg-[#8DB7E1] flex items-center justify-center">
                            <?php if ($img_url) : ?>
                                <img src="<?php echo esc_url($img_url); ?>"
                                     alt="<?php the_title_attribute(); ?>"
                                     class="w-46 h-auto"/>
                            <?php endif; ?>
                        </div>

                        <h3 class="mb-1"><?php the_title(); ?></h3>

                        <?php if ($description) : ?>
                            <p><?php echo wp_kses_post(nl2br($description)); ?></p>
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
        <h1><?php echo esc_html($title); ?></h1>

        <?php if ($description): ?>
            <p class="my-8 text-lg"><?php echo nl2br(esc_html($description)); ?></p>
        <?php endif; ?>

        <a href="<?php echo esc_url($pdf['url']); ?>" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-center text-gray-900 bg-[#FDD576] rounded-lg hover:bg-[#e6c55e] focus:ring-4 focus:outline-none focus:ring-[#FDD576]/50 shadow transition-all duration-200 mt-6 mx-auto">
            <?php echo esc_html($button_text ?: 'Download PDF'); ?>
        </a>
    </section>

</section>
<?php get_footer(); ?>
