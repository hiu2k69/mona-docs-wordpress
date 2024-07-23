<?php

/**
 * Template Name: Custom Single Post
 */

get_header();

?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom-single-post.css">

<section class="learn ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 relative ">
            <div class="tab-container pt-5   bg-090909">
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

                    $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;

                    $post = get_post($post_id);

                    if ($post) {
                        setup_postdata($post);

                    ?>

                        <div class="container">
                            <div class="row">
                                <div class=" pb-5 color-content">
                                    <!-- <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="" class="banner img-fluid mb-5"> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h1 class="text-2xl font-bold text-white text-foreground title"><?php the_title(); ?></h1>
                                    </div>
                                    <div class="mt-4 p-content text-lg text-white italic color-content"><?php the_content(); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        wp_reset_postdata();
                    } else {
                    }
                    ?>

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
                                'order' => 'DESC'
                            );

                            $posts = get_posts($args);
                            foreach ($posts as $post) {
                                setup_postdata($post);
                                $post_id = get_the_ID();

                                $post_link = get_permalink($post_id);
                            ?>
                                <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <a href="<?php echo esc_url(home_url('/detail')); ?>?post_id=<?php echo $post->ID; ?>">
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
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-XX+q43XXb5v2nYp12xNX+PGerfIy/4mU5AXf1F8gH15i0LY0+eERn3nifds5xP/7" crossorigin="anonymous">