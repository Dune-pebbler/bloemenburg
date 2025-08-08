<?php
$map = get_sub_field('map');
$map_WYSIWYG = get_sub_field('map_WYSIWYG');
?>
<section class="map">
    <div class="container-fluid">
        <div class="row fade-in-on-scroll">
            <div class="col-12 p-0">
                <div class="map__map-container">
                    <img src="<?= $map['url']; ?>" alt="<?= $map['alt']; ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="map__text-container">
                    <div class="text-field slide-right-on-scroll">
                        <?= $map_WYSIWYG; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>