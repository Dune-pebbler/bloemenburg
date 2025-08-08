<?php
// Get ACF sub fields (array with 'url', 'alt', etc.)
$image_row_1 = get_sub_field('image_row_1');
$image_row_2 = get_sub_field('image_row_2');
$image_row_3 = get_sub_field('image_row_3');

// Put them in an array for easy looping
$images = array_filter([$image_row_1, $image_row_2, $image_row_3]);
?>

<?php if (!empty($images)): ?>
    <section class="image_row">
        <div class="container-fluid">
            <div class="row stagger-on-scroll">
                <?php foreach ($images as $img):
                    // Skip if no URL
                    if (empty($img['url']))
                        continue;

                    $full_url = $img['url']; // Full image for Fancybox
                    $thumb_url = $img['sizes']['full'] ?? $img['url']; // Fallback if no large size
                    $alt = $img['alt'] ?? '';
                    ?>
                    <div class="col-12 col-md-4 p-0 stagger-item">
                        <div class="image_row__img-container">
                            <a href="<?php echo $full_url; ?>" data-fancybox="gallery" data-caption="<?php echo $alt; ?>">
                                <img src="<?php echo $thumb_url; ?>" alt="<?php echo $alt; ?>">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>