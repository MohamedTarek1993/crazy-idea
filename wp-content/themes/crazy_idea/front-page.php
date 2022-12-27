<?php

/**
 * The home page for our theme
 *
 * This is the template that displays all of the home page>
 *
 *
 * @package Crazy_Idea
 */

get_header();
?>

<!-- start hero section -->
<?php
$img_hero = get_field('hero_image');
$url_hero = get_field('hero_button_link');
?>
<section class="hero_section">
    <div class="container-fluid px-0">
        <div class="img">
            <img src="<?php echo $img_hero['url']; ?>" alt="<?php echo $img_hero['alt']; ?>">
        </div>
        <div class="text">
            <h6><?php the_field('hero_description'); ?></h6>
            <h1>
                <?php the_field('hero_title');  ?>

            </h1>
            <h4> <span class="auto-typed"> </span></h4>
            <div class="button">
                <a href="<?php echo $url_hero; ?>" class="first btn"> <?php echo __('Order Now', 'crazy_idea'); ?> </a>
            </div>
        </div>
    </div>
</section>
<!-- finish hero section -->
<!-- start about section -->
<section class="about_section" id="about_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-right" data-aos-duration="2000" data-aos-easing="linear">
                <div class="main_content_start">
                    <h2><?php echo __('About Us', 'crazy_idea') ?> </h2>
                    <h6><?php the_field('about_title'); ?></h6>
                    <p> <?php the_field('about_description'); ?> </p>
                </div>
                <?php
                $about_vedio_cover = get_field('about_video_cover');
                $about_vedio_url = get_field('about_vedio_url');

                $loop = new WP_Query(array(
                    'post_type' => 'skills',
                    'orderby' => 'post_id',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));
                while ($loop->have_posts()) : $loop->the_post();
                    $skill_number = get_field('skills_number_');

                ?>
                    <p><?php the_title(); ?></p>
                    <div class="progress">
                        <div class="progress-bar" data-progress="<?php echo $skill_number; ?>">
                            <span> <?php echo $skill_number; ?>%</span>
                        </div>
                    </div>


                <?php endwhile;
                wp_reset_query(); ?>

            </div>
            <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                <div class="img">
                    <img src="<?php echo $about_vedio_cover['url']; ?>" alt="<?php echo $about_vedio_cover['alt']; ?>" />
                    <button id="play-video" class="video-play-button">
                        <span></span>
                    </button>
                </div>
                <!-- video model -->
                <div id="video-overlay" class="video-overlay">
                    <a class="video-overlay-close">&times;</a>
                </div>
                <!-- video model -->
            </div>
        </div>
    </div>
</section>
<!-- finish about section -->






<?php
get_footer();
?>

<script>
    AOS.init({
        disable: function() {
            var maxWidth = 1025;
            return window.innerWidth < maxWidth;
        }
    });
</script>
<!-- auto tayped -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    let typed = new Typed('.auto-typed', {
        // strings:['Mobile Applications' , 'Web Development'] , 
        strings: ["<?php echo __('Mobile Applications', 'crazy_idea'); ?>", "<?php echo __('Web Development', 'crazy_idea'); ?>", "<?php echo __('Seo Stratgy', 'crazy_idea'); ?>"],
        typeSpeed: 150,
        backSpeed: 150,
        loop: true
    });
</script>

<!-- vedio model -->

<script>
    const player = document.querySelector("#play-video");
    const videoOverlay = document.querySelector("#video-overlay");

    player.addEventListener("click", function(e) {
        e.preventDefault();
        videoOverlay.classList.add("open");
        videoOverlay.innerHTML +=
            '<iframe src="<?php echo $about_vedio_url ?>" width="853" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
    });

    videoOverlay.addEventListener("click", function(e) {
        e.preventDefault();
        close_video();
    });

    document.addEventListener("keyup", function(e) {
        if (e.keyCode === 27) {
            close_video();
        }
    });

    function close_video() {
        videoOverlay.classList.remove("open");
        videoOverlay.querySelector("iframe").remove();
    }
</script>

<!-- progress bar -->
<script>
    const skillsSection = document.getElementById('about_section');
    const progressBar = document.querySelectorAll('.progress-bar');


    function showProgress() {
        progressBar.forEach(progressBars => {
            const value = progressBars.dataset.progress;
            progressBars.style.opacity = 1;
            progressBars.style.width = `${value}%`;
        });
    }
    //hide heading
    function hideProgress() {
        progressBar.forEach(p => {
            p.style.opacity = 0;
            p.style.width = 0;
        })
    }
    //make function when scroll
    window.addEventListener('scroll', () => {
        const sectionPos = skillsSection.getBoundingClientRect().top;
        const screenPos = window.innerHeight / 2;
        if (sectionPos < screenPos) {
            showProgress();
        } else {
            hideProgress();
        }
    });
</script>