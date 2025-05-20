<?php
/* Template Name: About-Us */
get_header();
$hero_image = get_field('about_us_hero_image');
$about_us_title = get_field('about_us_title');
$year                = get_field('date');                   
$story_title         = get_field('our_story_title');        
$story_text          = get_field('our_story');
$story_button_text   = get_field('our_story_button_text');
$story_button_link   = get_field('our_story_button_link'); 
?>

<!-- HERO -->
<section
  class="h-[90vh] bg-no-repeat bg-center bg-cover relative flex items-center justify-end sm:pr-40"
  style="background-image:url('<?php echo esc_url( $hero_image['url'] ); ?>');">

  <!-- White circle behind title -->
  <div class="absolute w-96 h-96 opacity-50 bg-white rounded-full -translate-x-8 -translate-y-6 z-0"></div>

  <!-- Page title -->
  <h1 class="text-black text-right font-extrabold z-10 leading-none
              text-[6rem] md:text-[8rem] tracking-wide">
              <?php if ($about_us_title) echo nl2br(esc_html($about_us_title)); ?>
  </h1>
</section>

<section class="max-w-screen-xl mx-auto px-4 py-16">
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
      <h1 class="text-3xl md:text-4xl font-bold mb-6">
        <?php echo esc_html($story_title); ?>
      </h1>

      <div class="prose max-w-none mb-8">
        <?php if ($story_text) echo nl2br(esc_html($story_text)); ?>
      </div>

      <?php if ($story_button_text) : ?>
        <a href="<?php echo esc_url($story_button_link ?: '#'); ?>"
           class="inline-block bg-[#FDD576] text-black font-semibold px-8 py-3 rounded">
          <?php echo esc_html($story_button_text); ?>
        </a>
      <?php endif; ?>
    </div>

  </div>
</section>



<section class="max-w-screen-xl mx-auto h-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8">


    <div>
        <ol class="relative border-s border-gray-200">
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400">January 1, 1900</time>
                <h3 class="text-lg font-semibold text-gray-900">Title</h3>
                <p class="mb-4 text-base font-normal text-gray-500">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
                <a href="#"
                   class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700">
                    Learn more
                    <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400">January 1, 1900</time>
                <h3 class="text-lg font-semibold text-gray-900">Title</h3>
                <p class="text-base font-normal text-gray-500">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400">May 29, 1954</time>
                <h3 class="text-lg font-semibold text-gray-900">Beginning of Sønderborg Archery Guild</h3>
                <p class="text-base font-normal text-gray-500">Sønderborg Archery Guild was founded on May 29, 1954 and
                    is a member of Archery Denmark.</p>
            </li>
        </ol>
    </div>
</section>


<section class="h-96 flex justify-center">
    <h1 >Meet our members</h1>
</section>

<?php
/*  Core Values Section  */
$post_type      = 'core_value';
$type_object    = get_post_type_object( $post_type );
$section_title  = $type_object ? $type_object->labels->name : 'Core Values';
?>

<section class="max-w-screen-xl mx-auto px-4 py-20">
  <!-- Section Heading -->
    <h1 class="mb-8">
    <?php echo esc_html( $section_title ); ?>
  </h1>

  <!-- Values Grid -->
  <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
    <?php
      $values = new WP_Query([
        'post_type'      => $post_type,
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
      ]);

      if ( $values->have_posts() ) :
        while ( $values->have_posts() ) : $values->the_post();
    ?>
          <!-- Card -->
          <div class="relative bg-[#8DB7E1] text-black p-8 md:p-10 min-h-[280px]">
            <!-- “┐” corner accent -->
            <span class="absolute top-6 right-6 w-10 h-10 border-t-4 border-r-4 border-black"></span>

            <h3 class="text-2xl font-semibold my-4"><?php the_title(); ?></h3>
            <p class="text-black">  <?php echo wp_kses_post( get_field( 'value_description' ) ); ?></p>
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

<section class="h-96 flex justify-center">
    <h1>Photo gallery</h1>
</section>

<section class="max-w-screen-lg mx-auto py-16">
    <h1 class="text-center mb-8">
     Equipment
    </h1>

  <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

    <?php
      // WP_Query for the custom post-type “equipment”
      $equipment = new WP_Query([
        'post_type'      => 'equipment',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
      ]);

      if ( $equipment->have_posts() ) :
        while ( $equipment->have_posts() ) : $equipment->the_post();

          $img          = get_field('equip_image');        // returns array or URL
          $subtitle     = get_field('equip_subtitle');     // e.g. “Mandatory”
          $description  = get_field('equip_description');  // textarea / WYSIWYG
          $img_url      = $img ? ( is_array($img) ? $img['url'] : $img ) : '';
    ?>
          <!-- CARD -->
          <div class="text-center text-gray-500">
            <!-- blue circle with transparent-bg image -->
            <div class="mx-auto mb-4 w-36 h-36 rounded-full bg-[#8DB7E1] flex items-center justify-center">
              <?php if ( $img_url ) : ?>
                <img src="<?php echo esc_url( $img_url ); ?>"
                     alt="<?php the_title_attribute(); ?>"
                     class="w-46 h-auto" />
              <?php endif; ?>
            </div>

            <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">
              <?php the_title(); ?>
            </h3>

            <?php if ( $description ) : ?>
              <p class="text-black"><?php echo wp_kses_post( nl2br( $description ) ); ?></p>
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

<?php
$title       = get_field('archery_guide_title');
$description = get_field('archery_guide_description');
$pdf         = get_field('archery_guide_pdf'); // returns array
$button_text = get_field('archery_guide_button_text');
?>

<section class="max-w-screen-lg mx-auto py-20 px-4 text-center">
  <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
    <?php echo esc_html($title); ?>
  </h2>

  <?php if ($description): ?>
    <p class="mb-8 text-lg text-gray-700">
      <?php echo esc_html($description); ?>
    </p>
  <?php endif; ?>

  <a href="<?php echo esc_url($pdf['url']); ?>"
     class="inline-block bg-[#FDD576] text-black font-semibold px-8 py-4 rounded hover:bg-[#f4c84e] transition"
     download>
    <?php echo esc_html($button_text ?: 'Download PDF'); ?>
  </a>
</section>


<?php get_footer(); ?>
