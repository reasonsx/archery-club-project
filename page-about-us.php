<?php
/* Template Name: About-Us */
get_header();
$hero_image = get_field('about_us_hero_image');
$about_us_title = get_field('about_us_title');
?>

<!-- HERO -->
<section
  class="h-[90vh] bg-no-repeat bg-center bg-cover relative flex items-center justify-end sm:pr-40"
  style="background-image:url('<?php echo esc_url( $hero_image['url'] ); ?>');"
>

  <!-- White circle behind title -->
  <div class="absolute w-96 h-96 opacity-50 bg-white rounded-full -translate-x-8 -translate-y-6 z-0"></div>

  <!-- Page title -->
  <h1 class="text-black text-right font-extrabold z-10 leading-none
              text-[6rem] md:text-[8rem] tracking-wide">
              <?php if ($about_us_title) echo nl2br(esc_html($about_us_title)); ?>
  </h1>
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

    <div class="flex flex-col justify-start h-screen">
        <h1>Our story</h1>
        <p>Sønderborg Archery Guild was founded on May 29, 1954 and is a member of Archery Denmark.
            <br>
            <br>
            The primary focus is target shooting with all bow types:
            longbows, recurve bows and compound bows.
            <br>
            <br>
            We are a club with room for those who want to shoot for
            fun and exercise, but also those who want to train to be at
            an elite level in archery and, for example, become Danish Champion.
        </p>
        <button type="button" class="dark">
            How to join?
        </button>
    </div>
</section>

<section class="flex flex-col items-center w-auto mx-auto">


</section>


<section class="h-96 flex justify-center">
    <h1 class="text-4xl">Meet our members</h1>
</section>

<section class="max-w-screen-lg mx-auto">
    <div class="mx-auto max-w-screen-xl text-center">
        <div class="mx-auto mb-8 max-w-screen-sm">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Equipment</h2>
            <h5 class="text-gray-500">Learn what equipment is needed what it's used for</h5>
        </div>


        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>

            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>

            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>

            <div class="text-center text-gray-500">
                <div class="mx-auto mb-4 w-40 h-40 rounded-full bg-blue-400 flex items-center justify-center">
                    <img class="w-38 h-38 object-contain rounded-full"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/finger-sling.png"
                         alt="Finger Sling">
                </div>
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900">Finger Sling</h3>
                <p>Mandatory</p>
                <p>Prevents dropping the bow. The index finger and thumb go through loops to keep the bow in place
                    during the shot.</p>
            </div>


        </div>
    </div>
</section>


<?php get_footer(); ?>
