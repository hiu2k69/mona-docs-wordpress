<?php

/**
 * Template Name: monad-learning
 */

// Exit if accessed directly.
if (!defined("ABSPATH")) {
   exit();
}

get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/monad-learning.css">


<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>

<section class="learn">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2 col-md-3 relative  bg-090909">
         <div class="tab-container pt-5   ">
               <?php
               $categories = get_terms(array(
                  'taxonomy' => 'category',
                  'hide_empty' => false,
                  'orderby' => 'term_id',
                  'order' => 'ASC'
               ));
               foreach ($categories as $category) {

                  $image_url =  z_taxonomy_image_url($category->term_id);
                  $cate = get_term_by('id', $category->term_id, 'category');
                  $count_post = $cate->count;
                  $tab = $category->slug;
                  if ($image_url) {

                     echo  '<a class="tab gap-05" href="'.home_url('/'. $category->slug .'') .'"><img src="' . esc_url($image_url) . '" alt="" class="img-cate"><h2 class="name-title ml-5 active ml-again">' . $category->name . '</h2>
                </a>';
                  } else {
                     echo '<a class="tab gap-05" href="'.home_url('/'. $category->slug .'') .'"><img src="' . get_template_directory_uri() . '/assets/images/Community-News.svg" alt=""><h2 class="name-title ml-5 ml-again">' . $category->name . '</h2> </a>';
                  }
               }
               ?>


               <box class="disclaimer p-4">
                  <div class="box-top">
                     <h1 class="title-disc text-white text-bold">Disclaimer</h1>
                     <p class="dis">
                        "No connect wallet on any site. We never provide any links that require connecting a wallet. If you see one, perhaps our site has been hacked."
                     </p>
                  </div>
                  <div class="box-bottom d-flex mt-2">
                     <img aria-hidden="true" alt="chat-bubble" src="<?php echo get_template_directory_uri(); ?>/assets/images/Contact.svg" />
                     &nbsp; &nbsp; <span class="text-right text-white">Contact Us</span>
                  </div>
               </box>
            </div>

         </div>
         <div class="col-lg-9 col-md-9">
            <div class="tab-content mt-5">
               <?php

               foreach ($categories as $category) {
                  // var_dump($category);
                  // $cate = get_term_by('id', $category->term_id, 'category');
                  // $count_post = $cate->count;
                  $tab = $category->slug;

               ?>
                  <div class="tab-pane " id="<?php echo $tab ?>">
                     <?php
                     $args = array(
                        'category' => $category->term_id,
                     );

                     $posts = get_posts($args);
                     if (count($posts) > 1) {
                     ?>
                        <div class="container">
                           <div class="flex justify-between items-center mb-4">
                              <h1 class="text-3xl font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""> &nbsp; <?php echo $category->name ?></h1>
                              <div class="relative">
                                 <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />

                              </div>
                           </div>
                           <div class="row pb-5">
                              <?php
                              foreach ($posts as $post) {
                                 setup_postdata($post);
                                 $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại

                                 $post_link = get_permalink($post_id); // Lấy đường dẫn của bài viết
                              ?>
                                 <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <a href="<?php echo esc_url(home_url('/detail/')); ?>?post_id=<?php echo $post->ID; ?>">
                                       <div class="box-last">
                                          <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="Image Description" class="box-image-last">
                                          <div class="box-content-t1 ">
                                             <h2 class="home-title"><?php the_title(); ?></h2>
                                             <p class="ml-2 home-content"><?php $trimmed_content = wp_trim_words(get_the_content(), 20, '...');
                                                                        echo $trimmed_content; ?></p>

                                             <span class="text-secondary-foreground flex items-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Writer.svg" alt="Image Description" class="">
                                                &nbsp; Last update <?php echo esc_html(get_the_date()) ?> &nbsp; <span class="text"> <span class="by-t">by</span>&nbsp; <span class="text-primary ml-1">  <?php echo get_the_author(); ?></span></span></span>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              <?php } ?>
                           </div>
                        </div>
                        <?php } elseif (count($posts) == 1) {
                        foreach ($posts as $post) {
                           setup_postdata($post);
                           $post_id = get_the_ID(); // Lấy ID của bài viết hiện tại
                           $post_link = get_permalink($post_id); // Lấy đường dẫn của bài viết 
                        ?>
                           <div class="container pb-5 color-content">
                              <!-- <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="" class="banner img-fluid mb-5"> -->
                              <h1 class="text-2xl font-bold text-white text-foreground title"><?php the_title(); ?></h1>
                              <p class="mt-4 p-content italic "><?php the_content(); ?></p>
                           </div>

                           <div class="container">
                              <h2 class="title-last-post text-white text-center p-5">
                                 - Last post -
                              </h2>
                              <div class="row pb-5">
                                 <?php
                                 $args = array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'orderby' => 'date',
                                    'order' => 'ASC'
                                 );

                                 $posts = get_posts($args);
                                 foreach ($posts as $post) {
                                    setup_postdata($post);
                                    $post_id = get_the_ID();

                                    $post_link = get_permalink($post_id);
                                 ?>
                                    <div class="col-lg-6 col-md-6 col-12 mb-3">
                                       <a href="<?php echo esc_url(home_url('/detail/')); ?>?post_id=<?php echo $post->ID; ?>">
                                          <div class="box-last">
                                             <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="Image Description" class="box-image-last">
                                             <div class="box-content-t1 ">
                                                <h2 class="home-title"><?php the_title(); ?></h2>
                                                <p class="ml-2 home-content"><?php $trimmed_content = wp_trim_words(get_the_content(), 20, '...');
                                                                           echo $trimmed_content; ?></p>

                                                <span class="text-secondary-foreground flex items-center">
                                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Writer.svg" alt="Image Description" class="">
                                                   &nbsp; Last update <?php echo esc_html(get_the_date()) ?> &nbsp; <span class="text"> <span class="by-t">by</span> <span class="text-primary ml-1"> <?php echo get_the_author(); ?></span></span></span>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 <?php } ?>
                              </div>
                           </div>


                        <?php }
                     } else {
                        ?>
                        <div class="container">
                           <div class="flex justify-between items-center mb-4">
                              <h1 class="text-3xl font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""> &nbsp; <?php echo $category->name ?></h1>
                              <div class="relative">
                                 <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />

                              </div>
                           </div>
                           <div class="row pb-5 text-center">
                              <div class="content-comingsoon">
                                 <h2 class="text-2xl ">Coming soon...</h2>

                              </div>
                           </div>
                        </div>
                        </script>
                     <?php
                     }
                     ?>
                  </div>
               <?php } ?>
            </div>
         </div>
         <!-- <div class="col-lg-1">
        
         </div> -->
      </div>
   </div>
</section>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-XX+q43XXb5v2nYp12xNX+PGerfIy/4mU5AXf1F8gH15i0LY0+eERn3nifds5xP/7" crossorigin="anonymous">
<script>
   $(document).ready(function() {
      $(".tab").click(function() {
         var targetId = $(this).data("target");
         $(".tab").removeClass("active");
         $(this).addClass("active");

         $(".tab-pane").removeClass("active");
         $("#" + targetId).addClass("active");
      });

      $('#search-input').on('focus', function() {
         $('#search-label').addClass('hidden');
      }).on('blur', function() {
         if ($(this).val() === '') {
            $('#search-label').removeClass('hidden');
         }
      });
   });
</script>
<script>
   const data = [{
         dapp: '',
         field: 'DE-fi',
         fund: '5M'
      },
      {
         dapp: '',
         field: 'Liquidity',
         fund: '5M'
      },
      {
         dapp: '',
         field: 'NFTs',
         fund: '-'
      },
      {
         dapp: '',
         field: 'Stablecoin',
         fund: '2M'
      },
      {
         dapp: '',
         field: 'NFTs',
         fund: '-'
      },
      {
         dapp: '',
         field: 'Stablecoin',
         fund: '-'
      },
      {
         dapp: '',
         field: 'DE-fi',
         fund: '-'
      },
      {
         dapp: '',
         field: 'Lending/borrow',
         fund: '-'
      },
   ];

   const tableBody = document.getElementById('table-body');

   data.forEach(row => {
      const tr = document.createElement('tr');
      tr.className = 'border-b border-zinc-700';

      tr.innerHTML = `
       <td class="py-3 px-4">${row.dapp}</td>
       <td class="py-3 px-4">${row.field}</td>
       <td class="py-3 px-4">${row.fund}</td>
       <td class="py-3 px-4  ">
       <div class="text-center just-content-center box-social flex space-x-2">
         <img aria-hidden="true" alt="globe" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (globe).svg" class="image-spacing">
         <img aria-hidden="true" alt="twitter" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (twitter).svg" class="image-spacing">
         <img aria-hidden="true" alt="discord" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (discord).svg" class="image-spacing">
         </
         </td>
     `;

      tableBody.appendChild(tr);
   });
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      var url = window.location.pathname;

      var segments = url.split('/');
      var tabName = segments.filter(segment => segment !== '').pop();
      var tabToActivate = document.querySelector('.tab[data-target="' + tabName + '"]');

      if (tabToActivate) {
         var allTabs = document.querySelectorAll('.tab');
         allTabs.forEach(function(tab) {
            tab.classList.remove('active');
         });
         tabToActivate.classList.add('active');
      }
      var paneToActivate = document.querySelector('.tab-pane#' + tabName);

      if (paneToActivate) {
         var allPanes = document.querySelectorAll('.tab-pane');
         allPanes.forEach(function(pane) {
            pane.classList.remove('active');
         });
         paneToActivate.classList.add('active');
      }
   });
</script>