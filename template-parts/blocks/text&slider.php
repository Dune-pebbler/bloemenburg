<?php
$image_slider = get_sub_field('image_slider');
$chapter = get_sub_field('chapter');
$slider_text_block = get_sub_field('slider_text_block');
?>

<?php if ($image_slider || $chapter || $slider_text_block): ?>
    <section class="text-slider" id="<?= $chapter; ?>">
        <div class="container">
            <div class="row justify-content-center">

                <?php if ($image_slider): ?>
                    <div class="col-12 col-lg-6 col-xl-5 p-0">
                        <div class="text-slider__slider-container owl-carousel fade-in-on-scroll">
                            <?php foreach ($image_slider as $slide): ?>
                                <?php $image = $slide['repeater_slide']; ?>
                                <?php if (!empty($image['url'])): ?>
                                    <div class="text-slider__slide">
                                        <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($chapter || $slider_text_block): ?>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div class="text-slider__text-container">
                            <?php if ($chapter): ?>
                                <h5><?= $chapter; ?></h5>
                            <?php endif; ?>

                            <?php if ($slider_text_block): ?>
                                <div class="text_field slide-right-on-scroll">
                                    <?= $slider_text_block; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?>