<section class="hero-slider">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12 p-0">
                <?php if (have_rows('hero_slider')): ?>
                    <div class="slider-wrapper">
                        <div class="owl-carousel owl-theme">
                            <?php while (have_rows('hero_slider')):
                                the_row();
                                $image = get_sub_field('slider_img');
                                if ($image): ?>
                                    <div class="slide-item">
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" class="w-100">
                                    </div>
                                <?php endif;
                            endwhile; ?>
                        </div>
                        <!-- Custom Navigation Arrows -->
                        <div class="custom-nav">
                            <button class="nav-btn prev-btn" id="prev-arrow">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="nav-btn next-btn" id="next-arrow">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function ($) {
        var owl = $('.hero-slider .owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            nav: false, // Disable default nav since we're using custom
            dots: false,

        });

        // Custom navigation events
        $('#next-arrow').click(function () {
            owl.trigger('next.owl.carousel');
        });

        $('#prev-arrow').click(function () {
            owl.trigger('prev.owl.carousel');
        });
    });
</script>