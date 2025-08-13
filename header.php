<!DOCTYPE html>
<html lang="en">
<?php
$logo = get_field('logo', 'option');
$notification_banner = get_field('notification_banner', 'option');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/dfb3xvw.css">
    <title>
        <?php wp_title(); ?>
    </title>
    <?php wp_head(); ?>


</head>

<body <?php body_class() ?>>

    <?php if ($notification_banner): ?>
        <div class="notification-banner-wrapper">
            <div class="notification-banner">
                <div class="notification-banner__content">
                    <?php
                    // Repeat the text multiple times to fill the banner
                    for ($i = 0; $i < 100; $i++) {
                        echo '<span class="notification-banner__text">' . esc_html($notification_banner) . '</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="nav-logo">
        <a href="http://bloemenburg-bedrijfsunits.nl/">
            <div class="nav-logo__container">
                <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
            </div>
        </a>

    </div>
    <!-- Fixed Bottom-Right Navigation -->
    <nav class="bottom-nav">

        <div class="nav-container">

            <!-- Hamburger Menu Button -->
            <div class="hamburger">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </div>

            <!-- Menu Items (hidden by default on mobile) -->
            <div id="nav-items">
                <div class="nav-logo-mobile">
                    <div class="nav-logo-mobile__container">
                        <a href="http://bloemenburg-bedrijfsunits.nl/">
                            <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
                        </a>
                    </div>
                </div>
                <div id="cross">
                    <div class="cross-line-1"></div>
                    <div class="cross-line-2"></div>
                </div>

                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-nav',
                    'container_class' => 'menu-primary-container',
                ]);
                ?>
            </div>
    </nav>

    <main>