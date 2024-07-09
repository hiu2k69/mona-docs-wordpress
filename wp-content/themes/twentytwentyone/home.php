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

.box-last {
    display: flex;
    background-color: #2a2a2a;
    border-radius: 10px;
    overflow: hidden;
    color: white;
    font-family: Arial, sans-serif;
    margin: 10px;
 
}

.box-image-last {
    width: 150px;
    object-fit: cover;
transition: all .2s ease-in-out;

}
.box-image-last:hover {
transform: scale(1.2);}
.box-content-t {
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
h2.title-last-post.text-white.text-center.p-5 {
    font-weight: revert;
    font-size: 47px;
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
	
}

.box-content-t span {
    font-size: 20px;
    color: #00FFF2;
	
}

    .box-content-main {
        background-color: #1b1b1b;
        overflow: hidden;
        color: #fff;
        font-family: 'mona-font', sans-serif !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
        border-radius: 10px; /* Thêm bo tròn cho box */
        margin-bottom: 1.5rem; /* Khoảng cách giữa các box */
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
    .box-artist {
        background-color: #24C1E0;
        padding: 0.2rem 0.5rem;
        text-align: center;
        font-size: 0.9rem;
        font-weight: bold;
        position: absolute;
        right: 10px;
        top: 10px;
        border-radius: 20px;
    }

    .box-artist span {
        color: #fff;
    }

    .box-content {
        padding: 1rem;
    }

    .box-content h3 {
        font-size: 1.5rem;
        margin: 0;
        color: #836EF9;
        text-align: left;
    }

    .box-content p {
        margin: 1rem 0;
        font-size: 0.9rem;
        color: #E4ECF2;
    }

    .box-content a {
        color: #24C1E0;
        text-decoration: none;
        font-weight: bold;
        font-size: 1rem;
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
        padding: 0.5rem 1rem;
        background-color: #24C1E0;
        color: #fff;
        text-decoration: none;
        border-radius: 20px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    a.see-more:hover {
        background-color: #1b9dbb;
    }


    @keyframes rotation_481 {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
 

</style>
<section class="main-content-center">
    <div class="container">
        <div class="h2 title-content-main text-center p-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/monad.png" alt="Description" class="img-title"> - All you need is here
        </div>
        <div class="row pb-5">
            <?php for ($i = 1; $i <= 9; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-content-main">
                        <div class="box-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Feature_img2.png" class alt="Description">
                        </div>
                        <div class="box-artist">
                            Artist: <span>Linad</span>
                        </div>
                        <div class="box-content">
                            <h3>Learn about Monad</h3>
                            <p>This is a place containing articles to help you understand monads and their technology; we will update regularly.</p>
                            <a href="#" class="see-more">Read more</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="second">
    <div class="container">
    <h2 class="title-last-post text-white text-center p-5">
        - Last post -
            </h2>        <div class="row pb-5">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="col-lg-6 col-md-6 col-6 mb-3">
                    <div class="box-last">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NoPath - Copy (6).png" alt="Image Description" class="box-image-last">
                        <div class="box-content-t">
                            <h2>10 funfacts in monad community</h2>
                            <p>This is a place containing articles to help you understand monads and their technology; we will</p>
                            <span>4/7/2024</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section> 
<section class="last-post">
    <div class="container">
        <h2 class="title-last-post text-white text-center p-5">
        - Monad hub Tweet -
            </h2>
        <div class="row pb-5">
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="box-last-post" id="tweet-container">
                    <blockquote class="twitter-tweet">
                        <p lang="qst" dir="ltr">Wow <a href="https://t.co/U5moS9rg8z">https://t.co/U5moS9rg8z</a></p>&mdash; Elon Musk (@elonmusk) <a href="https://twitter.com/elonmusk/status/1810420372635799765?ref_src=twsrc%5Etfw">July 8, 2024</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="box-last-post" id="tweet-container">
                    <blockquote class="twitter-tweet">
                        <p lang="qst" dir="ltr">Wow <a href="https://t.co/U5moS9rg8z">https://t.co/U5moS9rg8z</a></p>&mdash; Elon Musk (@elonmusk) <a href="https://twitter.com/elonmusk/status/1810420372635799765?ref_src=twsrc%5Etfw">July 8, 2024</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-5">
                <div class="box-last-post" id="tweet-container">
                    <blockquote class="twitter-tweet">
                        <p lang="qst" dir="ltr">Wow <a href="https://t.co/U5moS9rg8z">https://t.co/U5moS9rg8z</a></p>&mdash; Elon Musk (@elonmusk) <a href="https://twitter.com/elonmusk/status/1810420372635799765?ref_src=twsrc%5Etfw">July 8, 2024</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
