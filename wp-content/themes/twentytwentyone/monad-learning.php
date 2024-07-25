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
<style>
   @media only screen and (min-width: 1780px) {
      h2.name-title.ml-5 {
    font-size: 15px;
}
.gap-05 {
    gap: 0.5rem;
    padding: 8px 54px;
}
.col-lg-2.col-md-3 {
    position: fixed;
    top: 6.5% !important;
}

}
@media only screen and (min-width: 1920px) {
      h2.name-title.ml-5 {
    font-size: 18px;
}
.gap-05 {
    gap: 0.5rem ;
    padding: 10px 54px !important;
}
.col-lg-2.col-md-3 {
    position: fixed;
    top: 6.5% !important;
}

}
   img[src*="Writer.svg"] {
      filter: invert(52%) sepia(67%) saturate(1981%) hue-rotate(213deg) brightness(103%) contrast(99%);
      width: 17px;
    margin-bottom: 1px;
   }

   .purple-icon {
      filter: invert(52%) sepia(67%) saturate(1981%) hue-rotate(213deg) brightness(103%) contrast(99%);
   }

   .box-por {
      display: flex;
   }

   footer.bg-black.text-white.py-4.flex.items-center.justify-center.space-x-4.relative {
      height: 41px;
   }

   .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 100%;
      margin: 0 auto;
      padding: 0 2rem;
      width: 100%;
      box-sizing: border-box;
   }

   nav#site-navigation {
      position: absolute;
      right: 18%;
   }

   a.see-more img {
      width: 25px !important;
   }

   box.disclaimer {
      text-align: center;
      justify-content: center;
      margin-left: 23px;
      align-content: center;
      align-self: center;
      justify-items: center;

   }

   h1.text-2xl.font-bold.text-white.text-foreground {
      color: white !important;
      font-family: 'Segoe UI';
   }

   h2.name-title.ml-5.art {
      margin-left: 23px;
   }

   .ml-5 {
      margin-left: 0 !important;
   }

   /* // */

   .box-last {
      transition: box-shadow 0.3s;
      border-radius: 10px !important;
   }

   input#search-input {
      /* background-color: black; */
      color: white;
      /* border-radius: 9999px; */
      padding-left: 57px;
      padding-right: 40px;
      /* padding-top: 8px; */
      padding-bottom: 8px;
      outline: none;
   }

   .text-center.just-content-center.box-social.flex.space-x-2 {
      justify-content: center;
   }

   td.py-3.px-4 {
      border: none;

      border-bottom: 1px solid #836EF9;
   }

   td.py-3.px-4:first-child {
      border-left: 1px solid #836EF9;
   }

   td.py-3.px-4:last-child {
      border-right: 1px solid #836EF9;
   }

   th.py-3.px-4 {
      border-top: 1px solid #836EF9;
      border-bottom: 1px solid #836EF9;
      border-right: none;
   }



   table td,
   table th,
   .wp-block-table td,
   .wp-block-table th {
      padding: calc(0.5* var(--global--spacing-unit));
      border: none;
   }
   .mt-4.p-content.text-lg.text-white.italic.color-content img {
        width: 100%;
        color: white;
    }

    .mt-4.p-content.text-lg.text-white.italic.color-content h3, .mt-4.p-content.text-lg.text-white.italic.color-content h4, .mt-4.p-content.text-lg.text-white.italic.color-content h5 {
        color: #836EF9;
    }

    .mt-4.p-content.text-lg.text-white.italic.color-content li {
        line-height: 3;
        font-size: 25px;
        font-family: 'Calibri';
    }
   th.py-3.px-4:first-child {
      border-left: 1px solid #836EF9;
   }

   th.py-3.px-4:last-child {
      border-right: 1px solid #836EF9;
   }

   .box-last:hover {
      box-shadow: 0 0 20px #5A3DFF;
   }

   .box-content-t1 {
      margin-left: 10px !important;
   }

   input.bg-black.text-white.rounded-full.pl-4.pr-10.py-2.focus\:outline-none {
      width: 350px;
      border: none;
      border-radius: 20px;
   }

   .right-3 {
      right: 19.75rem;
   }

   .img-cate {
      width: 21px;
      /* height: 25px; */
      /* margin-bottom: 8px; */
      object-fit: cover;
   }
   .color-content p {
        color: #D4D4D4;
        line-height: 2;
    }
   .gap-05 {
      gap: 0.5rem;
      padding:12px 54px ;
   }h2.home-title {
    margin-bottom: -11px;
}

   .home-title {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
   }

   .home-content {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
   }
   .box-content {
    margin: 0;
    background: #090909;
    padding: 6px;
    border-radius: 6px;
    border-left : none !important;
}
   .box-image-last {
      width: 150px;
      object-fit: cover;
      transition: all .2s ease-in-out;

   }

   .box-image-last:hover {
      transform: scale(1.2);
   }

   img.icon-title {
    width: 29px;
    margin-right: 6px;
    height: 30px;
    margin-top: 1px;
}

   .color-content p,
   .color-content ul li,
   .color-content h1,
   .color-content h2,
   .color-content h3,
   .color-content h4 {
      font-size: 18px;
      color: white !important;
   }

   .content-comingsoon {
      height: 50vh;
      position: relative;
   }
   img.coming-soon {
    width: 200px;
    top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: absolute;
}

   .content-comingsoon h3 {
      top: 73%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: absolute;
      width: 500px;
	font-weight:bolder;

      font-size: 30px;
      font-family: 'Calibri';
      color: #836EF9;
    line-height: 1.6;

   }.box-bottom.d-flex.mt-2 img {
    width: 24px;
    margin-left: 11px;
}

   .fixed-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 1000;
   }

   /* Fixed sidebar styling */
   .col-lg-2.col-md-3 {
      position: fixed;
      top: 6.5%;
      left: -1.7%;
      width: 16.66667%;
      /* Ensure this is the width of col-lg-2 (2/12 of the grid) */
      height: calc(100vh - 10.5%);
      /* Adjust height based on top position */
      display: flex;
      flex-wrap: wrap;
      align-items: baseline;
      justify-content: center;
      flex-direction: column;
      z-index: 1;
   }

  
   .col-lg-9.col-md-9 {
      margin-left: 16.66667%;
      /* Space for fixed sidebar */
      padding-left: 20px;
      /* Additional space between sidebar and content */
   }



   header#masthead {
      width: 100%;
      background-color: #000;
      padding: 1rem 0;
      box-sizing: border-box;
      position: fixed;
      z-index: 100;
   }

   .pt-10 {
      padding-top: 10rem;
   }

   .tabs {
      width: 100%;
      display: block;
   }

   .tab-links:after {
      display: block;
      clear: both;
      content: '';
   }

   ul.tab-links {
      margin-bottom: 30px;
   }

   .tab-links li {
      float: left;
      margin: 0 10px 0 0;
      list-style: none;
   }

   .tab-links a {
      font-family: 'Calibri';
    /* padding: 9px 15px; */
    display: inline-block;
    border-radius: 3px 3px 0 0;
    /* background: #7FB5DA; */
    font-size: 20px;
    font-weight: 600;
    color: #949494;
    transition: all linear 0.15s;
    border-bottom: 3px solid #836EF9;
    font-weight: bold;
   }

   .tab-links a:hover {
      /* background: #a7cce5; */
      text-decoration: none;
   }

   /* .tab-content {
    padding: 15px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    background: #fff;
} */

   .tab-post {
      display: none;
   }

   .tab-post.active {
      display: block;
   }

   .tab-links li.active a {
      color: #836EF9;
   }

   .box-content-main {
      transition: box-shadow 0.3s;
   }

   .box-content-main:hover {
      box-shadow: 0 0 20px #5A3DFF;
   }

   .box-content-main {
      background-color: #1b1b1b;
      overflow: hidden;
      color: #fff;
      font-family: 'mona-font', sans-serif !important;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
      border-radius: 10px;
      margin-bottom: 1.5rem;
   }

   .image-home {
      width: 100%;
      height: 260px !important;
      object-fit: cover;
   }

   a.artist {
      color: #836EF9;
   }

   .box-artist {
      background-color: #00FFF2;
      padding: 0.2rem 0.5rem;
      text-align: center;
      font-size: 0.9rem;
      font-weight: bold;
      position: absolute;
      right: 10px;
      top: 220px;
      color: #836EF9;
      font-family: 'Segoe UI';
      border-radius: 20px;
      border: 3px solid #836EF9;
   }

   .box-content {
      padding: 1rem;
      height: 140px;
   }

   .box-content h3 {
      font-size: 1.5rem;
      margin: 0;
      color: #836EF9;
      text-align: left;
      font-family: 'seguisb.ttf';
   }

   .box-content span {
      font-size: 18px;
      color: #836EF9;
      font-family: 'Calibri';
   }

   .box-content p {
      margin: 0.2rem 0 1rem 0;
      font-size: 0.9rem;
      color: #949494;
      text-align: left;
      font: normal normal normal 19px / 26px Segoe UI;
      letter-spacing: 0px;
      font-family: 'Segoe UI';
   }

   .box-content a:hover {
      text-decoration: underline;
   }

  
</style>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>

<section class="learn">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2 col-md-3 relative  bg-090909">
            <div class="tab-container ">
            <?php
            $current_page_url = get_permalink();
            $current_page_path = str_replace(
                "/",
                "",
                parse_url($current_page_url, PHP_URL_PATH)
            );
            $categories = get_terms([
                "taxonomy" => "category",
                "hide_empty" => false,
                "orderby" => "term_id",
                "order" => "ASC",
            ]);
            foreach ($categories as $category) {
               $image_url = z_taxonomy_image_url($category->term_id);
               $cate = get_term_by("id", $category->term_id, "category");
               $count_post = $cate->count;
               $active = $category->slug == $current_page_path ? "active" : "";
               $data_target = esc_attr($category->slug);
           
               if ($image_url) {
                   echo '<a class="tab gap-05 ' .
                       $active .
                       '" href="' .
                       home_url("/" . $category->slug . "") .
                       '" data-target="' .
                       $data_target .
                       '"><img src="' .
                       esc_url($image_url) .
                       '" alt="" class="img-cate"><h2 class="name-title ml-5 active ml-again">' .
                       $category->name .
                       '</h2>
                   </a>';
               } else {
                   echo '<a class="tab gap-05 ' .
                       $active .
                       '" href="' .
                       home_url("/" . $category->slug . "") .
                       '" data-target="' .
                       $data_target .
                       '"><img src="' .
                       get_template_directory_uri() .
                       '/assets/images/Community-News.svg" alt=""><h2 class="name-title ml-5 ml-again">' .
                       $category->name .
                       "</h2></a>";
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
               <?php foreach ($categories as $category) {
                   $tab = $category->slug; ?>
               <div class="tab-pane " id="<?php echo $tab; ?>">
    <?php
    $args = [
        "category" => $category->term_id,
        "posts_per_page" => -1,
    ];

    $posts = get_posts($args);
    if (count($posts) >= 1) { ?>
        <div class="container">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-3xl font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""><?php echo $category->name; ?></h1>
                <div class="relative">
                    <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                        <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                    </span>
                    <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                </div>
            </div>

            <?php
            $paged = get_query_var("paged") ? get_query_var("paged") : 1;
            $args = [
                "post_type" => "post",
                "cat" => $category->term_id,
                "posts_per_page" => 8,
                "paged" => $paged,
            ];
            $query = new WP_Query($args);

            $types = [];
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $post_types = wp_get_post_terms(get_the_ID(), "type");
                    foreach ($post_types as $post_type) {
                        $types[$post_type->slug] = $post_type->name;
                    }
                }
                wp_reset_postdata();
            }
            if (count($types) > 0) { ?>
                <div class="tabs ">
                    <ul class="tab-links">
                        <?php
                        $first = true;
                        foreach ($types as $slug => $name) {
                            echo "<li" .
                                ($first ? ' class="active"' : "") .
                                '><a href="#tab-' .
                                esc_attr($slug) .
                                '">' .
                                esc_html($name) .
                                "</a></li>";
                            $first = false;
                        }
                        ?>
                    </ul>

                    <div class="tab-content ">
                        <?php
                        $first = true;
                        foreach ($types as $slug => $name) {
                            echo '<div id="tab-' .
                                esc_attr($slug) .
                                '" class="tab-post' .
                                ($first ? " active" : "") .
                                '">';
                            $first = false;

                            $args = [
                                "post_type" => "post",
                                "cat" => $category->term_id,
                                "tax_query" => [
                                    [
                                        "taxonomy" => "type",
                                        "field" => "slug",
                                        "terms" => $slug,
                                    ],
                                ],
                                "posts_per_page" => 8,
                                "paged" => $paged,
                            ];
                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                echo '<div class="row">';
                                while ($query->have_posts()) {

                                    $query->the_post();
                                    $custom_link = get_post_meta(
                                        get_the_ID(),
                                        "_custom_link",
                                        true
                                    );
                                    $artist = get_post_meta(
                                        get_the_ID(),
                                        "_artist_name",
                                        true
                                    );
                                    $post_slug = get_post_field(
                                        "post_name",
                                        get_the_ID()
                                    );
                                    ?>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <a href="<?php echo esc_url(
                                            home_url("/detail/")
                                        ) . $post_slug; ?>">
                                            <div class="box-content-main">
                                                <div class="box-image">
                                                    <img src="<?php echo get_the_post_thumbnail_url(
                                                        get_the_ID()
                                                    ); ?>" alt="Image Description" class="image-home">
                                                </div>
                                                <div class="box-artist">
                                                    <a href="<?php echo !empty(
                                                        $custom_link
                                                    )
                                                        ? $custom_link
                                                        : "#"; ?>" target="_blank" rel="noopener noreferrer" class="artist">Artist: <span><?php echo !empty(
    $artist
)
    ? $artist
    : get_the_author(); ?></span></a>　
                                                </div>
                                                <div class="box-content">
                                                    <h3 class="home-title"><?php the_title(); ?></h3>
                                                    <p class="ml-2 home-content"><?php echo wp_trim_words(
                                                        get_the_content(),
                                                        50,
                                                        "..."
                                                    ); ?></p>
                                                    <span class="text-secondary-foreground flex items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Writer.svg" alt="Image Description" class="">
                                                        &nbsp; Last update <?php echo esc_html(
                                                            get_the_date()
                                                        ); ?> &nbsp; <span class="text"> <span class="by-t">by</span>&nbsp; <span class="text-primary ml-1"><?php echo !empty(
                                                $artist
                                             )
                                                ? $artist
                                                : get_the_author(); ?></span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                        <?php
                                }
                                echo "</div>";

                                // Pagination
                                echo '<div class="pagination">';
                                echo paginate_links([
                                    "total" => $query->max_num_pages,
                                ]);
                                echo "</div>";
                            } else {
                                echo "<p>No posts found.</p>";
                            }

                            echo "</div>";
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
            <?php } else {
                echo '<div class="row pb-5">';
                foreach ($posts as $post) {

                    setup_postdata($post);
                    $post_id = get_the_ID();
                    $post_link = get_permalink($post_id);
                    $post_slug = get_post_field("post_name", get_the_ID());
                    ?>

                    <div class="col-lg-6 col-md-6 col-12 mb-3">
                        <a href="<?php echo esc_url(home_url("/detail/")) .
                            $post_slug; ?>">
                            <div class="box-last">
                                <img src="<?php echo get_the_post_thumbnail_url(
                                    $post_id
                                ); ?>" alt="Image Description" class="box-image-last">
                                <div class="box-content-t1 ">
                                    <h2 class="home-title"><?php the_title(); ?></h2>
                                    <p class="ml-2 home-content"><?php
                                    $trimmed_content = wp_trim_words(
                                        get_the_content(),
                                        50,
                                        "..."
                                    );
                                    echo $trimmed_content;
                                    ?></p>
                                    <span class="text-secondary-foreground flex items-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Writer.svg" alt="Image Description" class="">
                                        &nbsp; Last update <?php echo esc_html(
                                            get_the_date()
                                        ); ?> &nbsp; <span class="text"> <span class="by-t">by</span>&nbsp; <span class="text-primary ml-1">  <?php echo get_the_author(); ?></span></span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
                </div>
            <?php }
            ?>
        </div>
    <?php }  else {
         ?>
        <div class="container">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-3xl font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""> <?php echo $category->name; ?></h1>
                <div class="relative">
                    <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                        <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                    </span>
                    <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                </div>
            </div>
            <div class="row pb-5 text-center">
                <div class="content-comingsoon">
                    <img src="https://monadocs.xyz/wp-content/uploads/2024/07/banhmi-moyaki-512.gif" alt="" class="coming-soon">
                    <br>
                    <h3 class="text-2xl">"nothing here, but you can eat banhmi moyaki before leave"</h3>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

               <?php
               } ?>
            </div>
         </div>
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

<script>
   jQuery(document).ready(function() {
      jQuery('.tab-links a').on('click', function(e) {
         var currentAttrValue = jQuery(this).attr('href');

         // Show/Hide Tabs
         jQuery('.tab-post' + currentAttrValue).show().siblings().hide();

         // Change/remove current tab to active
         jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

         e.preventDefault();
      });
   });
</script>