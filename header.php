<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS link -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind Configuration File -->
    <?php include "tailwind.config.php"; ?>
</head>

<body id="over" class="overflow-auto" <?php body_class(); ?>>

    <!-- /////navbar start///// -->
    <nav class="w-full flex height-auto bg-white mx-auto max-lg:py-[18px]" id="d-line">
        <div class="w-full flex flex-col justify-around gap-[35px] pt-[px] items-center mx-auto max-[625px]:px-[4%] lg:flex-row max-2xl:px-[5.5%] max-w-[1420px]">
            <!-- Navigation Content -->
            <!-- compny logo -->
            <div class="w-20% flex items-center justify-between max-lg:w-full">
                <?php
                   $custom_logo_id = get_theme_mod( 'custom_logo' );
                   $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                   if ( has_custom_logo() ) {
                       echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                   } else {
                       echo '<h1>' . get_bloginfo('name') . '</h1>';
                   }
                ?>
                <div class="flex items-center gap-[5px] lg:hidden">
                    <a href="#" class="font-mono-s bg-lightblack text-white font-extra-w text-[14px] px-[20px] py-[8px] rounded-[9999px] hover:text-lightblack hover:bg-dark-white hover:outline">Join</a>
                    <button id="menuToggle" class="nav-button px-[6px] py-[4px] rounded-[8px]">
                        <span class="bar bar1 rounded-[2px] w-[22px] h-[2px] my-[3px] block bg-lightblack"></span>
                        <span class="bar bar2 rounded-[2px] w-[22px] h-[2px] my-[3px] block bg-lightblack"></span>
                        <span class="bar bar3 rounded-[2px] w-[22px] h-[2px] my-[3px] block bg-lightblack"></span>
                    </button>
                </div>
            </div>
            <!-- list -->
            <div id="navbar" class="h-[100%] w-full z-10 flex flex-col justify-between bg-white items-center max-lg:shadow-medium-Shadow max-lg:fixed bg-white max-lg:top-[0] max-lg:left-[-100%] max-lg:w-[80%] lg:inline-flex lg:block max-lg:items-start lg:flex-row max-lg:transition-transform max-lg:duration-700 max-lg:ease-in-out max-lg:transform">
                <div class="overflow-y-auto max-lg:w-full">
                    <!-- Logo -->
                    <div class="w-[100%] w-full py-[23px] pl-[4%] lg:hidden max-lg:border-b max-lg:border-off-gray">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                    ?>
                    </div>

                    <!-- Navbar Menu -->
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_class' =>'flex flex-col lg:items-center gap-[25px] bg-white lg:flex-row max-lg:pt-[4%] max-lg:pl-[4%] xl:gap-mediumGap',
                            'container' => false,
                            'walker' => new Custom_Walker_Nav_Menu()
                        ));
                    ?>
                </div>
                 <!-- Login/Join Section -->
                <?php
                    wp_nav_menu( array(
                    'theme_location' => 'header-right',
                    'walker' => new Header_Right_Menu_Walker(),
                    'container' => 'div',
                    'container_class' => 'flex bg-white items-center gap-[10px] max-sm:flex-col max-lg:w-full max-lg:h-[130px] max-lg:px-[4%] lg:gap-smallGap max-lg:py-[20px] max-lg:border-t max-lg:border-off-gray',
                    'items_wrap' => '%3$s',
                    'menu_class' => ''
                    ));
                ?>
            </div>
        </div>
    </nav>
    <!-- /////navbar end///// -->
    <?php
