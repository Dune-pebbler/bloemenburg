<?php
// Get ACF sub fields
$image_row_1 = get_sub_field('image_row_1');
$image_row_2 = get_sub_field('image_row_2');
$image_row_3 = get_sub_field('image_row_3');

// Array for looping
$images = array_filter([$image_row_1, $image_row_2, $image_row_3]);
?>

<?php if (!empty($images)): ?>
    <section class="image_row">
        <div class="container-fluid">
            <div class="row stagger-on-scroll">
                <?php foreach ($images as $img):
                    if (empty($img['url']))
                        continue;

                    $full_url = $img['url'];
                    $thumb_url = $img['sizes']['full'] ?? $img['url'];
                    $alt = $img['alt'] ?? '';
                    ?>
                    <div class="col-12 col-md-4 p-0 stagger-item">
                        <div class="image_row__img-container">
                            <a href="<?php echo $full_url; ?>" data-fancybox="gallery" data-caption="<?php echo $alt; ?>">
                                <img src="<?php echo $thumb_url; ?>" alt="<?php echo $alt; ?>">
                                <div class="image_row__svg-overlay">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89">
                                        <g transform="translate(-916 -2783)">
                                            <g transform="translate(916 2783)" fill="none">
                                                <path d="M0,0H89V89H0Z" stroke="none" />
                                                <path d="M 1 1 L 1 88 L 88 88 L 88 1 L 1 1 M 0 0 L 89 0 L 89 89 L 0 89 L 0 0 Z"
                                                    stroke="none" fill="#b38c4a" />
                                            </g>
                                            <g transform="translate(0 4)">
                                                <line y2="48" transform="translate(960.5 2799.5)" fill="none" stroke="#b38c4a"
                                                    stroke-width="2" />
                                                <line x1="45" transform="translate(938 2823.5)" fill="none" stroke="#b38c4a"
                                                    stroke-width="2" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>