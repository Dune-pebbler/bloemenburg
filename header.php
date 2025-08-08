<!DOCTYPE html>
<html lang="en">
<?php
$logo = get_field('logo', 'option');
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

    <div class="nav-logo">
        <div class="nav-logo__container">
            <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
        </div>
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
                        <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
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
        <script>
            document.addEventListener('scroll', function () {
                const logo = document.querySelector('.nav-logo');
                if (window.scrollY > 50) { // adjust scroll distance if needed
                    logo.classList.add('scrolled');
                } else {
                    logo.classList.remove('scrolled');
                }
            });

            // Navigation hamburger menu functionality
            document.addEventListener('DOMContentLoaded', function () {
                const hamburger = document.querySelector('.hamburger');
                const navItems = document.querySelector('#nav-items');
                const cross = document.querySelector('#cross');
                const body = document.body;

                // Open menu when hamburger is clicked
                if (hamburger) {
                    hamburger.addEventListener('click', function () {
                        navItems.classList.add('is-active');
                        body.style.overflow = 'hidden'; // Prevent background scrolling
                    });
                }

                // Close menu when cross is clicked
                if (cross) {
                    cross.addEventListener('click', function () {
                        navItems.classList.remove('is-active');
                        body.style.overflow = ''; // Restore scrolling
                    });
                }

                // Close menu when clicking outside (optional)
                if (navItems) {
                    navItems.addEventListener('click', function (e) {
                        if (e.target === navItems) {
                            navItems.classList.remove('is-active');
                            body.style.overflow = '';
                        }
                    });
                }

                // Close menu on escape key
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape' && navItems.classList.contains('is-active')) {
                        navItems.classList.remove('is-active');
                        body.style.overflow = '';
                    }
                });
            });
        </script>