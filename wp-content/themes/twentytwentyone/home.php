<?php

/**
 * Template Name: home
 */

// Exit if accessed directly.
if (!defined("ABSPATH")) {
    exit();
}

get_header();
?>
<style>
    .box-last-post blockquote .twitter-tweet .twitter-tweet-rendered iframe {
        width: 100% !important;
        height: 100% !important;
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
        /* height: 250px; */
    }

    .box-content h3 {
        font-size: 1.5rem;
        margin: 0;
        color: #836EF9;
        text-align: left;
        font-family: 'seguisb.ttf';
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

    /* .twitter-tweet {
        color: white; 
        background-color: black; 
        padding: 10px; 
        border-radius: 8px;
    } */
    a.see-more {
        display: inline-block;
        padding: 0.5rem 3rem;
        background-color: #836EF9;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
        font-family: 'Segoe UI';
        font-weight: bolder;
        margin-bottom: 14px;
        width: 94%;
        text-align: center;
        margin-left: 14px;
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
        font-size: 1.25rem !important;
    }

    .image-home {
        height: 260px !important;
        object-fit: cover;
    }


    @media (max-width: 431px) {
       

        .image-home {
            height: 120px !important;
        }

        .box-content {
            margin: 0;
            background: none;
            border-left: none;
            padding: 1rem 0.5rem;
        }

        .box-content h3 {
            font-size: 0.875rem;
            color: white;
            text-align: center;
            text-transform: uppercase;
        }

        .box-content-t1 h2 {
            font-size: 1.5rem;
        }

        .box-last {
            flex-direction: column;
            margin: 12px;
        }

        .box-image-last {
            width: 100%;
            object-fit: cover;
            transition: all .2s ease-in-out;
        }

        .box-content-t1 p {
            margin: 0.5rem 0;
            font-size: 1rem !important;
        }

        .home-content {
            -webkit-line-clamp: 3;
        }

        .text-secondary-foreground,
        span.text span {
            font-size: 1.175rem !important;
        }

        .box-image img:hover{
            transform: none;
        }



    }
</style>
<div class="main relative">
    <section class="main-content-center">
        <div class="container">
            <div class="h2 title-content-main text-center p-5 d-none-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/monad.png" alt="Description" class="img-title"> - All you need is here
            </div>
            <div class="row py-5">
                <?php
                 $categories = get_terms([
                    "taxonomy" => "category",
                    "hide_empty" => false,
                    "orderby" => "term_id",
                    "order" => "ASC",
                 ]);
                $artists = [["name" => "Hagen", "url" => "https://x.com/hagen_eth"], ["name" => "monadocs", "url" => "https://x.com/monadocs_eth"], ["name" => "Hung", "url" => "https://x.com/hung_eth"],];
                for ($i = 1; $i <= count($categories); $i++) {
                    $artist = $artists[($i - 1) % count($artists)]; ?>
                    <div class="col-lg-4 col-md-6 col-6">
                        <a href="<?php echo esc_url(home_url("/monad-learning")); ?>">
                            <div class="box-content-main">
                                <div class="box-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $i; ?>.png" alt="Image Description" class="image-home">
                                </div>
                                <div class="box-artist d-none-sm">
                                    <a href="<?php echo $artist["url"]; ?>" target="_blank" rel="noopener noreferrer" class="artist">Artist: <span><?php echo $artist["name"]; ?></span></a>　
                                </div>
                                <div class="box-content ">
                                    <h3 class="home-title"><?php echo $categories[$i-1]->name; ?></h3>
                                    <p class="d-none-sm">This is a place containing articles to help you understand monads and their technology; we will update regularly.</p>

                                </div>
                                <a href="<?php echo esc_url(home_url("/monad-learning")); ?>" class="see-more d-none-sm">
                                    <!-- <img aria-hidden="true" alt="chat-bubble" class="see" src="<?php echo get_template_directory_uri(); ?>/assets/images/Readmore icon.svg" /> -->
                                    Explore now
                                </a>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="second">
        <div class="container">
            <div  class="d-flex align-items-center justify-content-center gap-1 p-3">
            <a href="<?php echo home_url(); ?>" >
                    <img src="<?php echo get_template_directory_uri().'/assets/images/favicon.png' ?>" alt="Logo"class="favicon">
                </a>
                <h2 class="title-last-post text-white text-center">
                 Last post 
            </h2>
            </div>
            

            <?php echo do_shortcode('[ajax_pagination_lastpost post_type="post"  posts_per_page="4" paged="1"]'); ?>
        </div>
    </section>
    <section class="last-post">
        <div class="container">
            <h2 class="title-last-post text-white text-center p-5">
                - Monad hub Tweet -
            </h2>
            <div class="row pb-5">
                <div class="col-lg-3 col-md-3 col-12 mb-5">
                    <div class="box-last-post" id="tweet-container">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr">i and Lollipop hang out and put ice bear into jail, that&#39;s life :)))<br>Thanks <a href="https://twitter.com/Hagen_web3?ref_src=twsrc%5Etfw">@Hagen_web3</a> for put me into his art, i love itttttttttttttttttttttttttttttttttttttttttttttt <a href="https://t.co/P1qIlDUebz">https://t.co/P1qIlDUebz</a></p>&mdash; ZhangLiu.eth (evm/acc) (@zhangliu_eth) <a href="https://twitter.com/zhangliu_eth/status/1808699644144406603?ref_src=twsrc%5Etfw">July 4, 2024</a>
                        </blockquote>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-5">
                    <div class="box-last-post" id="tweet-container">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr">Omgggg i love itttttttt <a href="https://t.co/uvgTB6P2hQ">https://t.co/uvgTB6P2hQ</a></p>&mdash; ZhangLiu.eth (evm/acc) (@zhangliu_eth) <a href="https://twitter.com/zhangliu_eth/status/1808895817132167320?ref_src=twsrc%5Etfw">July 4, 2024</a>
                        </blockquote>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-5">
                    <div class="box-last-post" id="tweet-container">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr">Recap NPC DRAW EVENT Last night<br>ⓃⓅⒸ 18 pfps was made by <a href="https://twitter.com/medusa_apple?ref_src=twsrc%5Etfw">@medusa_apple</a> <br>ⓃⓅⒸ 18 ID Card &amp; animated pfps was made by me <a href="https://twitter.com/zhangliu_eth?ref_src=twsrc%5Etfw">@zhangliu_eth</a> <br>ⓃⓅⒸ Gathering great singers like:<br>♥️ <a href="https://twitter.com/cryptoaga_?ref_src=twsrc%5Etfw">@cryptoaga_</a> Sweet prince gunha<br>♥️ <a href="https://twitter.com/reganz211?ref_src=twsrc%5Etfw">@reganz211</a> Reganz the king of sad song<br>♥️ <a href="https://twitter.com/Toadster69?ref_src=twsrc%5Etfw">@Toadster69</a> Leading the… <a href="https://t.co/Iqvhknf7nu">pic.twitter.com/Iqvhknf7nu</a></p>&mdash; ZhangLiu.eth (evm/acc) (@zhangliu_eth) <a href="https://twitter.com/zhangliu_eth/status/1810521540456591582?ref_src=twsrc%5Etfw">July 9, 2024</a>
                        </blockquote>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-5">
                    <div class="box-last-post" id="tweet-container">
                        <blockquote class="twitter-tweet">
                            <p lang="en" dir="ltr">Recap NPC DRAW EVENT Last night<br>ⓃⓅⒸ 18 pfps was made by <a href="https://twitter.com/medusa_apple?ref_src=twsrc%5Etfw">@medusa_apple</a> <br>ⓃⓅⒸ 18 ID Card &amp; animated pfps was made by me <a href="https://twitter.com/zhangliu_eth?ref_src=twsrc%5Etfw">@zhangliu_eth</a> <br>ⓃⓅⒸ Gathering great singers like:<br>♥️ <a href="https://twitter.com/cryptoaga_?ref_src=twsrc%5Etfw">@cryptoaga_</a> Sweet prince gunha<br>♥️ <a href="https://twitter.com/reganz211?ref_src=twsrc%5Etfw">@reganz211</a> Reganz the king of sad song<br>♥️ <a href="https://twitter.com/Toadster69?ref_src=twsrc%5Etfw">@Toadster69</a> Leading the… <a href="https://t.co/Iqvhknf7nu">pic.twitter.com/Iqvhknf7nu</a></p>&mdash; ZhangLiu.eth (evm/acc) (@zhangliu_eth) <a href="https://twitter.com/zhangliu_eth/status/1810521540456591582?ref_src=twsrc%5Etfw">July 9, 2024</a>
                        </blockquote>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <box class="disclaimer1 d-none-sm">
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

<?php get_footer(); ?>