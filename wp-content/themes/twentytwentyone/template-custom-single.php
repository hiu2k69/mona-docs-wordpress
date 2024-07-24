<?php

/**
 * Template Name: Custom Single Post
 */

get_header();

?>
<style>
    .box-last-post blockquote .twitter-tweet .twitter-tweet-rendered iframe {
        width: 100% !important;
        height: 100% !important;
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

    .box-last-post img {
        width: 100% !important;
        height: auto !important;
    }

    .box-last {
        display: flex;
        background-color: #2a2a2a;
        border-radius: 10px;
        overflow: hidden;
        color: white;
        font-family: Arial, sans-serif;
        margin: 10px;

    }

    .box-last {
        transition: box-shadow 0.3s;
    }

    .box-last:hover {
        box-shadow: 0 0 20px #5A3DFF;
    }

    .relative {
        position: relative;
    }

    box.disclaimer1 {
        position: fixed;
        left: 2%;
        bottom: 10%;
        z-index: 3;
    }

    .box-image-last {
        width: 150px;
        object-fit: cover;
        transition: all .2s ease-in-out;

    }

    .box-image-last:hover {
        transform: scale(1.2);
    }

    .box-content-t {
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    h2.title-last-post.text-white.text-center.p-5 {
        font-weight: revert;
        font-size: 47px;
        font-family: 'Segoe UI';
        letter-spacing: var(--unnamed-character-spacing-0);
        color: var(--unnamed-color-ffffff);
        text-align: center;
        font: normal normal bold 47px / 63px Segoe UI;
        letter-spacing: 0px;
        color: #FFFFFF;
    }

    .box-content-t h2 {
        font-size: 24px;
        margin: 0;
        color: #836EF9;
    }

    .box-content-t p {
        flex-grow: 1;
        margin: 10px 0;
        font-size: 20px;
        color: #E4ECF2;
        text-align: left;
        font: normal normal normal 17px / 27px Segoe UI;
        letter-spacing: 0px;
    }

    .box-content-t span {
        font-size: 18px;
        color: #00FFF2;
        font-family: 'Segoe UI';


    }

    .fixed-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 1000;
    }

    .content-comingsoon {
        height: 50vh;
        position: relative;
    }

    .content-comingsoon h2 {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        font-size: 50px;
        font-family: 'Calibri';
        color: #949494;
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


    .box-image {
        overflow: hidden;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .box-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: all .2s ease-in-out;
    }

    .box-image img:hover {
        transform: scale(1.2);
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
        top: 10px;
        color: #836EF9;
        font-family: 'Segoe UI';
        border-radius: 20px;
        border: 3px solid #836EF9;
    }



    .box-content {
        padding: 1rem;
    }

    .box-content h3 {
        font-size: 1.5rem;
        margin: 0;
        color: #836EF9;
        text-align: left;
        font-family: 'seguisb.ttf';
    }

    .gap-05 {
      gap: 0.5rem;
      padding:11px 54px !important
   }
    .box-bottom.d-flex.mt-2 img {
    width: 24px;
}
    .box-content p {
        margin: 0.2rem 0 1rem 0;
        font-size: 0.9rem;
        color: #E4ECF2;
        text-align: left;
        font: normal normal normal 19px / 26px Segoe UI;
        letter-spacing: 0px;
        color: #E4ECF2;
        font-family: 'Segoe UI';
    }

    .box-content a:hover {
        text-decoration: underline;
    }

    a.see-more {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: #836EF9;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
        font-family: 'Segoe UI';
        font-weight: bolder;
    }

    a.see-more:hover {
        background-color: #00FFF2;
        color: #2F2F37;
    }

    img.see {
        transition: filter 0.3s ease;

    }

    a.see-more:hover img.see {
        filter: brightness(50%);

    }


    @keyframes rotation_481 {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .title {
        font-size: 3rem;
        text-align: center;
        color: #836EF9;
    }

    .bg-none {
        background-color: none !important;
    }

    .post-content p {
        font-size: 1.5rem;
        text-align: left !important;
    }

    .color-content p {
        color: white !important;
        line-height: 2;
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
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        font-size: 1.25rem;
    }

    .d-flex {
        display: flex;
        justify-content: space-between;

    }

    .img-cate {
        width: 21px;
        /* height: 25px; */
        object-fit: cover;
    }

    box.disclaimer {
    text-align: center;
    justify-content: center;
    margin-left: 62px;
    align-content: center;
    align-self: center;
    justify-items: center;
}
    /* .tab-container {
    top: 10.5%;
    left: 0;
    display: flex;
    flex-wrap: wrap;
    position: fixed;
    align-items: baseline;
    justify-content: center;
    align-content: stretch;
    flex-direction: column;
} */
    .detail-post {
        background: #101016;
        position: relative;
        z-index: 1;
    }
    .box-content-t1 span {
    font-size: 16px;
    color: #836EF9;
    font-family: 'Calibri';
    display: flex;
}
    h2.name-title.ml-5 {
        font-size: 18px;
        font-family: 'Segoe UI';
        letter-spacing: 0px;
    }
    .mr-2 {
    margin-right: 0.5rem;
}

<style>
.ml-2 {
    margin-left: 0.5rem;
}

    /* Fixed sidebar styling */
    .col-lg-2.col-md-3 {
      position: fixed;
      top: 4.5%;
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


    .box-top {
        width: 147px;
        height: 206px;
        background: var(--unnamed-color-836ef9) 0% 0% no-repeat padding-box;
        background: #836EF9 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000059;
        border-radius: 7px;
        opacity: 1;
        padding: 5px;
    }

    .col-lg-9.col-md-9 {
        margin-left: 28.66667%;
        padding-left: 20px;
    }

    header#masthead {
        width: 100%;
        background-color: #000;
        padding: 1rem 0;
        box-sizing: border-box;
        position: fixed;
        z-index: 100;
        padding-bottom: 4rem;
        height: 81px;

    }

    .tab-content.mt-5 {
        width: 73%;
        margin-top: 7rem !important;
    }
</style>
<section class="detail-post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 relative  bg-090909">
                <div class="tab-container ">
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

                            echo  '<a class="tab gap-05" href="' . home_url('/' . $category->slug . '') . '"><img src="' . esc_url($image_url) . '" alt="" class="img-cate"><h2 class="name-title ml-5 active ml-again">' . $category->name . '</h2>
                </a>';
                        } else {
                            echo '<a class="tab gap-05" href="' . home_url('/' . $category->slug . '') . '"><img src="' . get_template_directory_uri() . '/assets/images/Community-News.svg" alt=""><h2 class="name-title ml-5 ml-again">' . $category->name . '</h2> </a>';
                        }
                    }
                    ?>


                    <box class="disclaimer">
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

                    global $wp_query;
                    $post_slug = $wp_query->query_vars['custom_post_slug'];

                    $post = get_page_by_path($post_slug, OBJECT, 'post');

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
                                $post_slug = get_post_field('post_name', get_the_ID());
                            ?>
                                <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <a href="<?php echo esc_url(home_url('/detail/')).$post_slug; ?>">
                                        <div class="box-last">
                                            <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="Image Description" class="box-image-last">
                                            <div class="box-content-t1 ">
                                                <h2 class="home-title"><?php the_title();  ?></h2>
                                                <p class="ml-2 home-content"><?php $trimmed_content = wp_trim_words(get_the_content(), 20, '...');
                                                                                echo $trimmed_content; ?></p>

                                                <span class="text-secondary-foreground flex items-center">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Writer.svg" alt="Image Description" class="">
                                                    &nbsp; Last update <?php echo esc_html(get_the_date()) ?> &nbsp; <span class="text"> <span class="by-t">by</span>&nbsp; <span class="text-primary ml-1"> <?php echo get_the_author(); ?></span></span></span>
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