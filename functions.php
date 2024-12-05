<?php
add_theme_support( 'custom-logo' );

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
}
function register_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'header-right' => __( 'Header Right' ),
            'primary-footer' => __( 'Primary Footer' ),
            'footer-tos' => __( 'Footer Terms & Privacy Links' ),
            'footer-dropdown' => __( 'Country Selector' )
        )
    );
}
add_action( 'init', 'register_custom_menus' );
class General_Footer_Walker extends Walker_Nav_Menu {
    // Starts the element output.
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Check if this item is marked as a button
        $is_button = in_array('menu-button', $classes);
        // Wrapper div with common classes
        $output .= '<li>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '#';

        if ($depth==0) {
            // Button/Join styling
            $atts['class'] = 'font-barlow text-normalpsg font-normal-w text-normalpsg text-dark-white hover:underline';
        }

        // Build attributes string
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        // Build item output
        $item_output = sprintf(
            '<a%s>%s</a>',
            $attributes,
            $item->title
        );

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    // Ends the element output.
    public function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</li>\n";
    }
}
class Country_List_Walker extends Walker_Nav_Menu {
    // Start Level - Adds a submenu <ul> with Tailwind classes
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth); // Indentation for readability

        // Apply custom classes for submenu <ul> (same as before)
        $submenu_classes = 'columns-2 py-[16px] px-[20px] md:px-[56px] md:py-[40px]';

        // Output the opening <ul> tag with the classes
        $output .= "\n$indent<ul class=\"$submenu_classes\">\n";
    }

    // End Level - Closes submenu <ul>
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start Element - Adds <li> with Tailwind classes
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        // Add custom Tailwind classes based on depth
        if ($depth === 0) {
            $classes[] = '';
        }
        if ($depth === 1) {
            $classes[] = 'sm:mr-[80px]';
        }
        // Join class names and prepare for output
        $class_names = join(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        // Start <li> with custom classes
        $output .= '<li' . $class_names . '>';
        if ($depth === 0) {
            // Wrap button and link inside a <div>
            $output .= '<div class="flex items-center justify-between border-b border-darkgray py-[16px] px-[20px] md:hidden">';
            // Add the button
            $output .= '<button class="close-btn order-2"><i class="fa-solid fa-xmark text-white"></i></button>';
            // Add the link
            $output .= sprintf(
                '<a href="%s" class="font-barlow font-light-w text-smallText text-dark-white">%s</a>',
                esc_url($item->url),
                apply_filters('the_title', $item->title, $item->ID)
            );

            $output .= '</div>'; // Close the <div>
        }
        // Add link or button structure for item
        if ($depth == 1 ) {
            $output .= sprintf(
                '<a href="%s" class="text-white font-barlow text-largepsg leading-[48px] md:leading-[30px] tracking-[-0.6px] hover:underline">%s</a>',
                esc_url($item->url),
                apply_filters('the_title', $item->title, $item->ID)
            );
        }
    }
    // End Element - Close <li>
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }

}
class First_Footer_Walker extends Walker_Nav_Menu {
    // Start Level - Adds a submenu <ul> with Tailwind classes
    function start_lvl(&$output, $depth = 0, $args = null) {
        static $submenu_counter = 1;  // Static variable to keep track of the submenu count

        $indent = str_repeat("\t", $depth); // Indentation for readability
    
        // Check if the current submenu is the first one
        if ($submenu_counter === 1) {
            // If it's the first submenu, apply the first set of classes
            $submenu_classes = 'footer-menu grid gap-[10px] max-md:grid-cols-2 md:grid';
        } else {
            // For all subsequent submenus, apply the second set of classes
            $submenu_classes = 'footer-menu grid gap-[10px] hidden max-md:grid-cols-2 md:grid';
        }
    
        // Generate a unique ID for the submenu based on the counter
        $menu_id = 'submenu-' . $submenu_counter;
    
        // Output the opening <ul> tag with the classes and generated ID
        $output .= "\n$indent<ul id=\"$menu_id\" class=\"$submenu_classes\">\n";
    
        // Increment the submenu counter for the next submenu
        $submenu_counter++;
    }

    // End Level - Closes submenu <ul>
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start Element - Adds <li> with Tailwind classes
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Add custom Tailwind classes based on depth
        if ($depth === 0) {
            if (in_array('ls', $classes)) {
                // Add additional Tailwind classes if 'udc' is not present
                $classes[] = 'flex flex-col gap-smallGap md:gap-[30px]max-lg:hidden';
            }
            else {
                $classes[] = 'flex flex-col gap-smallGap md:gap-[30px]';
            }
        }
        
        // Join class names and prepare for output
        $class_names = join(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        // Start <li> with custom classes
        $output .= '<li' . $class_names . '>';
        // Add link or button structure for item
        if ($depth == 0) {
            if (in_array('show-footer', $classes)) {
                // Add additional Tailwind classes if 'udc' is not present
                $output .= sprintf(
            '<div class="footer-toggle flex items-center justify-between max-md:border-t max-md:border-darkgray max-md:pt-[15px]">
                        <a href="%s" class="font-barlow text-normalpsg text-dark-white font-extra-w max-md:flex max-md:items-center">%s</a>
                        <i class="md:hidden fa-solid fa-minus text-white"></i>
                    </div>',
            esc_url($item->url),
                    apply_filters('the_title', $item->title, $item->ID)
                );
            }
            else {
                $output .= sprintf(
            '<div class="footer-toggle flex items-center justify-between max-md:border-t max-md:border-darkgray max-md:pt-[15px]">
                        <a href="%s" class="font-barlow text-normalpsg text-dark-white font-extra-w max-md:flex max-md:items-center">%s</a>
                        <i class="md:hidden fa-solid fa-plus text-white"></i>
                    </div>',
            esc_url($item->url),
                    apply_filters('the_title', $item->title, $item->ID)
                );
            }
        } else {
            $output .= sprintf(
                '<a href="%s" class="font-barlow font-normal-w text-normalpsg text-dark-white hover:underline">%s</a>',
                esc_url($item->url),
                apply_filters('the_title', $item->title, $item->ID)
            );
        }
    }

    // End Element - Close <li>
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }

}
class Header_Right_Menu_Walker extends Walker_Nav_Menu {
    // Starts the element output.
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Check if this item is marked as a button
        $is_button = in_array('menu-button', $classes);
        // Wrapper div with common classes
        $output .= '<div class="text-center max-sm:w-full md:pt-[17px] md:pb-[13px] max-lg:w-[50%]">';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '#';

        if ($is_button) {
            // Button/Join styling
            $atts['class'] = 'w-full font-mono-s inline-block text-lightblack text-[16px] py-[8px] transition-all duration-300 rounded-[9999px] bg-lightblack text-white font-light-w border border-lightblack block lg:px-[20px] hover:text-lightblack hover:bg-white';
        } else {
            // Login link styling
            $atts['class'] = 'w-full font-dm block rounded-[9999px] py-[8px] text-[20px] text-lightblack text-normalpsg max-lg:border-[2px] max-lg:border-black hover:underline';
        }

        // Build attributes string
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        // Build item output
        $item_output = sprintf(
            '<a%s>%s</a>',
            $attributes,
            $item->title
        );

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }


    // Ends the element output.

    public function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</div>\n";
    }
}
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Start Level - Open <ul> with Tailwind classes for submenu
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        // Submenu classes for nested items
        if ($depth === 0) {
            $submenu_classes = 'class="overflow-y-auto mx-auto flex justify-between max-sm:pt-[30px] sm:py-[15px] max-[625px]:px-[4%] max-lg:gap-[45px] lg:gap-smallGap max-lg:max-h-[400px] lg:py-[32px] max-w-[1420px] max-lg:flex-col max-2xl:px-[5.5%]"';
        }

        if ($depth === 1) {
            $submenu_classes = 'class="flex flex-col gap-[25px]"';
        }
        $output .= "$indent<ul $submenu_classes>\n";
    }

    // End Level - Close <ul>
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
        if ($depth === 0) {
            $output .= "$indent</div>\n"; // Close the wrapper div for top-level items
        }
    }

    // Start Element - Open <li> and add link with Tailwind classes
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Check if the item has children and add custom class and id
        $has_children = in_array('menu-item-has-children', $classes);
        if ($has_children) {
            $classes[] = 'my-custom-has-children';
            $li_id = 'id="menu-item-' . $item->ID . '"'; // Set id for items with submenus
        } else {
            $li_id = ''; // No id for items without submenus
        }

        // Join class names and add additional Tailwind classes
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        if ($depth === 0) {
            $class_names = 'class="border-white lg:border-b-[5px] lg:pt-[27px] lg:pb-[17px]"';
        }

        if ($depth === 1) {
            if ($depth === 1 && $has_children) {
                $class_names = 'class="lg:w-[33.3333%] flex flex-col gap-[25px]"';
            }
            else{
                $class_names = 'class="lg:w-[50%]"';
            }
        }

        if ($depth === 2) {
            $class_names = 'class="flex flex-col"';
        }

        // Open <li> with ID if it has children
        $output .= sprintf('<li %s %s>', $li_id, $class_names);
        // Define the div classes for dropdown menu wrapper
        $div_classes = 'class="dropdown-menu hidden listbar w-[100%] left-0 top-[74px] lg:border-t border-off-gray lg:bg-white lg:shadow-xl lg:absolute"';

        // If depth is 0 (top-level items), customize the structure
        if ($depth == 0) {
            // If the item has children, add dropdown toggle and <div> wrapper
            if ($has_children) {
                $output .= sprintf(
                    '<button class="dropdown-toggle text-lightblack hover:underline font-dm text-smallText md:text-mediumText max-lg:font-extra-w lg:text-normalpsg">%s <i class="toggle-icon fa-solid fa-angle-down"></i></button>',
                    apply_filters('the_title', $item->title, $item->ID)
                );
                $output .= "\n<div $div_classes>\n";
            } else {

                $output .= sprintf(
                    '<a href="%s" class="block text-gray-800 hover:underline font-dm text-smallText md:text-mediumText max-lg:font-extra-w lg:text-normalpsg">%s</a>',
                    esc_url($item->url),
                    apply_filters('the_title', $item->title, $item->ID)
                );
            }
        } else {
            // For depth 1 (child items), use standard link
            // Show title link and description only if the description is not empty
            if (!empty($item->description)) {

                if ($depth === 1) {
                    $output .= sprintf(
                        '<a href="%s" class="flex gap-[10px] items-start font-dm text-normalpsg font-extra-w tracking-[-1px]">%s</a>',
                        esc_url($item->url),
                        apply_filters('the_title', $item->title, $item->ID)
                    );
                }
                if ($depth === 2) {
                    $output .= sprintf(
                        '<a href="%s" class="font-dm text-normalpsg font-light-w">%s</a>',
                        esc_url($item->url),
                        apply_filters('the_title', $item->title, $item->ID)
                    );
                    $output .= sprintf(
                        '<p class="font-dm text-Smallpsg text-light-gray">%s</p>',
                        esc_html($item->description)
                    );
                }
                else {
                    $output .= sprintf(
                        '<p class="font-dm text-Smallpsg text-light-gray pl-[52px] mt-[-19px]">%s</p>',
                        esc_html($item->description)
                    );
                }

            }
            else {
                 $output .= sprintf(
                    '<a href="%s" class="flex gap-[10px] items-center font-dm text-normalpsg font-extra-w tracking-[-1px]">%s</a>',
                    esc_url($item->url),
                    apply_filters('the_title', $item->title, $item->ID)
                );
            }
        }
    }
    // End Element - Close <li>
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}
?>
