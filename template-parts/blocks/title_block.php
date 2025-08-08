<?php
$gold_part = get_sub_field('gold_part');
$normal_part = get_sub_field('normal_part');
?>
<section class="title_block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="title_block__content-container">
                    <h1><span><?= $gold_part; ?></span><br><?= $normal_part; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>