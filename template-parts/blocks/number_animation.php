<?php
$number_1 = get_sub_field('number_1');
$number_2 = get_sub_field('number_2');
$na_text_field = get_sub_field('NA_text_field');
?>
<section class="number_animation count-on-scroll">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="number_animation__number-container">
                    <h1>
                        <span class="animated-number" data-target="<?= esc_attr($number_1); ?>">0</span>
                        tot
                        <span class="animated-number" data-target="<?= esc_attr($number_2); ?>">0</span> m²
                    </h1>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="number_animation__content-container">
                    <?= $na_text_field; ?>
                </div>
            </div>
        </div>
    </div>
</section>