<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package oslabs
 */

/** 
 *
 * oslabs header
 */

function oslabs_check_header()
{
    $oslabs_header_style = function_exists('get_field') ? get_field('header_style') : NULL;
    $oslabs_default_header_style = get_theme_mod('choose_default_header', 'header-style-1');

    if ($oslabs_header_style == 'header-style-1' && empty($_GET['s'])) {
        oslabs_header_style_1();
    }  else {
        oslabs_header_style_1();
    }
}
add_action('oslabs_header_style', 'oslabs_check_header', 10);


// Header deafult
function oslabs_header_style_1()
{
    get_template_part('/inc/templates/header/header', '1'); ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->
<?php
}


/**
 * header style 2
 */
function oslabs_header_style_2()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '2');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * header style 3
 */
function oslabs_header_style_3()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '3');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * header style 4
 */
function oslabs_header_style_4()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '4');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * header style 5
 */
function oslabs_header_style_5()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '5');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->
<?php } ?>
<?php
/**
 * header style 6
 */
function oslabs_header_style_6()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '6');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * Header style 7
 */
function oslabs_header_style_7() {
    get_template_part('/inc/templates/header/header', '7');?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->
<?php }

/*
header_logo
*/
function oslabs_header_logo()
{
?>
    <?php
    $logo_image = get_theme_mod('logo_image', get_template_directory_uri() . '/assets/images/logo/logo.png');
    $logo_text = get_theme_mod('logo_text', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset = get_theme_mod('cbtoolkit_header_main_logoset', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset == 'image') {
            if (!empty($logo_image)) : ?>
                <img src="<?php echo esc_url($logo_image) ?>" alt="<?php echo esc_attr__('Image', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text)) : ?>
                <span><?php echo esc_html($logo_text); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header2_logo()
{
?>
    <?php
    $logo_image2 = get_theme_mod('logo_image2', get_template_directory_uri() . '/assets/images/logo.png');
    $logo_text2 = get_theme_mod('logo_text2', __('oslabs', 'oslabs'));
    $cbtoolkit_header2_main_logoset = get_theme_mod('cbtoolkit_header2_main_logoset', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header2_main_logoset == 'image') {
            if (!empty($logo_image2)) : ?>
                <img src="<?php echo esc_url($logo_image2) ?>" alt="<?php echo esc_attr__('Logo', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text2)) : ?>
                <span><?php echo esc_html($logo_text2); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header_logo_1()
{
?>
    <?php
    $logo_image1 = get_theme_mod('logo_image1', get_template_directory_uri() . '/assets/images/update/logo.png');
    $logo_text1 = get_theme_mod('logo_text1', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset_3 = get_theme_mod('cbtoolkit_header_main_logoset_3', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_3 == 'image') {
            if (!empty($logo_image1)) : ?>
                <img src="<?php echo esc_url($logo_image1) ?>" alt="<?php echo esc_attr__('oslabs', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text1)) : ?>
                <span><?php echo esc_html($logo_text1); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header_logo_2()
{
?>
    <?php
    $logo_image2 = get_theme_mod('logo_image2', get_template_directory_uri() . '/assets/images/update/logo.png');
    $logo_text2 = get_theme_mod('logo_text2', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset_3 = get_theme_mod('cbtoolkit_header_main_logoset_3', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_3 == 'image') {
            if (!empty($logo_image2)) : ?>
                <img src="<?php echo esc_url($logo_image2) ?>" alt="<?php echo esc_attr__('oslabs', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text2)) : ?>
                <span><?php echo esc_html($logo_text2); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header_logo_3()
{
?>
    <?php
    $logo_image3 = get_theme_mod('logo_image3', get_template_directory_uri() . '/assets/images/update/logo-3.png');
    $logo_text3 = get_theme_mod('logo_text3', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset_3 = get_theme_mod('cbtoolkit_header_main_logoset_3', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_3 == 'image') {
            if (!empty($logo_image3)) : ?>
                <img src="<?php echo esc_url($logo_image3) ?>" alt="<?php echo esc_attr__('oslabs', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text3)) : ?>
                <span><?php echo esc_html($logo_text3); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header_logo_4()
{
?>
    <?php
    $logo_image4 = get_theme_mod('logo_image4', get_template_directory_uri() . '/assets/images/update/logo-4.png');
    $logo_text4 = get_theme_mod('logo_text4', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset_4 = get_theme_mod('cbtoolkit_header_main_logoset_4', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_4 == 'image') {
            if (!empty($logo_image4)) : ?>
                <img src="<?php echo esc_url($logo_image4) ?>" alt="<?php echo esc_attr__('oslabs', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text4)) : ?>
                <span><?php echo esc_html($logo_text4); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header_logo_5()
{
?>
    <?php
    $logo_image5 = get_theme_mod('logo_image5', get_template_directory_uri() . '/assets/images/update/logo-5.png');
    $logo_text5 = get_theme_mod('logo_text5', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset_5 = get_theme_mod('cbtoolkit_header_main_logoset_5', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_5 == 'image') {
            if (!empty($logo_image5)) : ?>
                <img src="<?php echo esc_url($logo_image5) ?>" alt="<?php echo esc_attr__('oslabs', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text5)) : ?>
                <span><?php echo esc_html($logo_text5); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header_logo_6()
{
?>
    <?php
    $logo_image6 = get_theme_mod('logo_image6', get_template_directory_uri() . '/assets/images/update/logo-2.png');
    $logo_text6 = get_theme_mod('logo_text6', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset_6 = get_theme_mod('cbtoolkit_header_main_logoset_6', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_6 == 'image') {
            if (!empty($logo_image6)) : ?>
                <img src="<?php echo esc_url($logo_image6) ?>" alt="<?php echo esc_attr__('oslabs', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text6)) : ?>
                <span><?php echo esc_html($logo_text6); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function oslabs_header_logo_7()
{
?>
    <?php
    $logo_image7 = get_theme_mod('logo_image7', get_template_directory_uri() . '/assets/images/update/logo-6.png');
    $logo_text7 = get_theme_mod('logo_text7', __('oslabs', 'oslabs'));
    $cbtoolkit_header_main_logoset_7 = get_theme_mod('cbtoolkit_header_main_logoset_7', __('image', 'oslabs'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_7 == 'image') {
            if (!empty($logo_image7)) : ?>
                <img src="<?php echo esc_url($logo_image7) ?>" alt="<?php echo esc_attr__('oslabs', 'oslabs'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text7)) : ?>
                <span><?php echo esc_html($logo_text7); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}

// header logo
function oslabs_header_sticky_logo()
{ ?>
    <?php
    $oslabs_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
    $oslabs_secondary_logo = get_theme_mod('seconday_logo', $oslabs_logo_black);
    ?>
    <a class="sticky-logo" href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($oslabs_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'oslabs'); ?>" />
    </a>
<?php
}

function oslabs_mobile_logo()
{
    // side info
    $oslabs_mobile_logo_hide = get_theme_mod('oslabs_mobile_logo_hide', false);

    $oslabs_site_logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/img/logo/logo.png');

?>

    <?php if (!empty($oslabs_mobile_logo_hide)) : ?>
        <div class="side__logo mb-25">
            <a class="sideinfo-logo" href="<?php print esc_url(home_url('/')); ?>">
                <img src="<?php print esc_url($oslabs_site_logo); ?>" alt="<?php print esc_attr__('logo', 'oslabs'); ?>" />
            </a>
        </div>
    <?php endif; ?>



<?php }

//offcanvas menu
function offcanvas_menu_fullwidth()
{
    $cbtoolkit_side2_cart_switcher = get_theme_mod('cbtoolkit_side2_cart_switcher', true);
    $cbtoolkit_side2_wishlist_switcher = get_theme_mod('cbtoolkit_side2_wishlist_switcher', true);
    $cbtoolkit_side2_contact_switcher = get_theme_mod('cbtoolkit_side2_contact_switcher', true);
    $cbtoolkit_side2_contact_title = get_theme_mod('cbtoolkit_side2_contact_title',  __('Get In Touch', 'oslabs'));
    $cbtoolkit_side2_contact_address = get_theme_mod('cbtoolkit_side2_contact_address',  __('989 Bel Meadow Drive Los Angeles, CA 90017', 'oslabs'));
    $cbtoolkit_side2_contact_phone1 = get_theme_mod('cbtoolkit_side2_contact_phone1',  __('(+1) 909-407-2988', 'oslabs'));
    $cbtoolkit_side2_contact_phone_link1 = get_theme_mod('cbtoolkit_side2_contact_phone_link1',  __('(+1)909-407-2988', 'oslabs'));
    $cbtoolkit_side2_contact_phone2 = get_theme_mod('cbtoolkit_side2_contact_phone2',  __('(+1) 470-142-2412', 'oslabs'));
    $cbtoolkit_side2_contact_phone_link2 = get_theme_mod('cbtoolkit_side2_contact_phone_link2',  __('(+1)470-142-2412', 'oslabs'));
    $cbtoolkit_side2_office_time = get_theme_mod('cbtoolkit_side2_office_time',  __('Mon - Sat : 8am - 5pm', 'oslabs'));
    $cbtoolkit_side2_social_switcher = get_theme_mod('cbtoolkit_side2_social_switcher', true);
    $cbtoolkit_side2_social_fb_link = get_theme_mod('cbtoolkit_side2_social_fb_link',  __('#', 'oslabs'));
    $cbtoolkit_side2_social_twitter_link = get_theme_mod('cbtoolkit_side2_social_twitter_link',  __('#', 'oslabs'));
    $cbtoolkit_side2_social_instagram_link = get_theme_mod('cbtoolkit_side2_social_instagram_link',  __('#', 'oslabs'));
    $cbtoolkit_side2_social_youtube_link = get_theme_mod('cbtoolkit_side2_social_youtube_link',  __('#', 'oslabs'));


?>

    <!-- oslabs-fz-offcanvas-main-nav-wrapper start -->
    <div class="oslabs-fz-offcanvas-main-nav-wrapper">
        <button class="fz-button-close"><i class="fa-thin fa-xmark"></i></button>
        <div class="oslabs-fz-offcanvas-main-nav-wrapper-sections">
            <div class="oslabs-fz-offcanvas-main-nav-section">
                <div class="mobile-menu-updated"></div>
            </div>
            <div class="oslabs-fz-offcanvas-main-sideinfo-section">

                <div class="oslabs-fz-offcanvas-main-sideinfo">
                    <?php if (class_exists('WooCommerce')) : ?>
                        <div class="oslabs-fz-offcanvas-main-search mb-45">
                            <form action="<?php print esc_url(home_url('/')); ?>" method="get">
                                <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search Product', 'oslabs'); ?>" id="search-input">
                                <input type="hidden" name="post_type" value="product" />
                                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    <?php endif; ?>
                    <?php if (class_exists('WooCommerce')) : ?>
                        <div class="oslabs-fz-offcanvas-main-actions mb-15">
                            <?php if (!empty($cbtoolkit_side2_cart_switcher)) : ?>
                                <a href="<?php print wc_get_cart_url(); ?>"><span class="fz-off-actions-icon"><i class="fa-thin fa-bag-shopping"></i>
                                <?php if(class_exists('WooCommerce')) : ?>
                                    <?php if(!empty(WC()->cart->get_cart_contents_total())) : ?>    
                                        <span class="fz-off-actions-count"><span id="mini-cart-count-2341"></span></span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </span> <span class="fz-off-actions-text"><span><?php print esc_html__('View Cart', 'oslabs'); ?></span><span><?php print esc_html__('View Cart', 'oslabs'); ?></span></span></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_wishlist_switcher)) : ?>
                                <a href="<?php print esc_url(home_url('/wishlist')); ?>"><i class="fa-thin fa-heart"></i> <span class="fz-off-actions-text"><span><?php print esc_html__('View Wishlist', 'oslabs'); ?></span><span><?php print esc_html__('View Wishlist', 'oslabs'); ?></span></span></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($cbtoolkit_side2_contact_switcher)) : ?>
                        <div class="oslabs-fz-offcanvas-main-contacts">
                            <?php if (!empty($cbtoolkit_side2_contact_title)) : ?>
                                <h4 class="oslabs-fz-offcanvas-main-contacts-title mb-30"><?php print esc_html($cbtoolkit_side2_contact_title); ?></h4>
                            <?php endif; ?>

                            <ul class="oslabs-fz-offcanvas-main-contacts-list">
                                <?php if (!empty($cbtoolkit_side2_contact_address)) : ?>
                                    <li>
                                        <i class="fa-thin fa-location-dot"></i>
                                        <span class="oslabs-fz-offcanvas-main-contact-text"><?php print esc_html($cbtoolkit_side2_contact_address); ?></span>
                                    </li>
                                <?php endif; ?>
                                <?php if (!empty($cbtoolkit_side2_contact_phone1 || $cbtoolkit_side2_contact_phone2)) : ?>
                                    <li>
                                        <i class="fa-thin fa-phone-flip"></i>
                                        <span class="oslabs-fz-offcanvas-main-contact-text">
                                            <?php if (!empty($cbtoolkit_side2_contact_phone1)) : ?>
                                                <a href="<?php echo esc_url($cbtoolkit_side2_contact_phone_link1) ? esc_url('tel:' . $cbtoolkit_side2_contact_phone_link1) : ''; ?>"><?php print esc_html($cbtoolkit_side2_contact_phone1); ?></a> <br>
                                            <?php endif; ?>
                                            <?php if (!empty($cbtoolkit_side2_contact_phone2)) : ?>
                                                <a href="<?php echo esc_url($cbtoolkit_side2_contact_phone_link2) ? esc_url('tel:' . $cbtoolkit_side2_contact_phone_link2) : ''; ?>"><?php print esc_html($cbtoolkit_side2_contact_phone2); ?></a>
                                            <?php endif; ?>
                                        </span>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($cbtoolkit_side2_office_time)) : ?>
                                    <li>
                                        <i class="fa-thin fa-clock"></i>
                                        <span class="oslabs-fz-offcanvas-main-contact-text"><?php print esc_html__('Store Hours:', 'oslabs'); ?><br><span class="oslabs-fz-opentime"><?php print esc_html($cbtoolkit_side2_office_time); ?></span></span>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($cbtoolkit_side2_social_switcher)) : ?>
                        <div class="oslabs-fz-offcanvas-main-socials mt-45">
                            <?php if (!empty($cbtoolkit_side2_social_fb_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_fb_link); ?>"><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-facebook-f"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_social_twitter_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_twitter_link); ?>"><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-twitter"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_social_instagram_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_instagram_link); ?>"><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_social_youtube_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_youtube_link); ?>"><i class="fa-brands fa-youtube"></i><i class="fa-brands fa-youtube"></i></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- oslabs-fz-offcanvas-main-nav-wrapper end-->

<?php }

//header search 
function header_search_fullwidth()
{ ?>
    <!-- header-search -->
    <div class="cbsearchbar cb-sidebar-area">
        <button class="cbsearchbar__close"><i class="fa-light fa-xmark"></i></button>
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 pt-100 pb-100">
                        <h2 class="cbsearchbar__title"><?php print esc_html__('What Product Are You Looking For?', 'oslabs'); ?></h2>
                        <div class="cbsearchbar__form">
                            <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                                <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search Product', 'oslabs'); ?>">
                                <input type="hidden" name="post_type" value="product" />
                                <button class="cbsearchbar__search-btn" type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-body-overlay"></div>
    <!-- header-search-end -->
<?php }


/**
 * [oslabs_header_menu description]
 * @return [type] [description]
 */
function oslabs_header_menu()
{
?>
    <?php
    $oslabs_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children has-dropdown-menu', $oslabs_menu);
    ?>
<?php
}
function oslabs_header_menu_1()
{
?>
    <?php
    $oslabs_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children has-dropdown-menu', $oslabs_menu);
    ?>
<?php
}
function oslabs_header_menu_3()
{
?>
    <?php
    $oslabs_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children oslabs-fz-has-dropdown-menu-2-update', $oslabs_menu);
    ?>
<?php
}
function oslabs_header_menu_4()
{
?>
    <?php
    $oslabs_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $oslabs_menu);
    ?>
<?php
}
function oslabs_header_menu_5()
{
?>
    <?php
    $oslabs_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $oslabs_menu);
    ?>
<?php
}
function oslabs_header_menu_6()
{
?>
<?php
    $oslabs_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $oslabs_menu);
    ?>
<?php
}
function oslabs_header_menu_7()
{
?>
<?php
    $oslabs_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $oslabs_menu);
    ?>
<?php
}
$oslabs_all_categories = '';
function oslabs_get_woo_product_categories()
{
    global $oslabs_all_categories;
    if (class_exists('WooCommerce')) {
        $taxonomy     = 'product_cat';
        $orderby      = 'post__in';
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no  
        $title        = '';
        $empty        = 0;
        $args = array(
            'taxonomy'     => $taxonomy,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty,
        );
        $oslabs_all_categories = get_categories($args);
    }
}
add_action('init', 'oslabs_get_woo_product_categories');
/**
 * Add menu class into link
 */
function oslabs_add_specific_menu_location_atts($atts, $item, $args)
{
    // check if the item is in the primary menu
    if ($args->theme_location == 'main-menu') {
        // add the desired attributes:
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'oslabs_add_specific_menu_location_atts', 10, 3);
/**
 * Check if wp menu has submenu
 */
function oslabs_check_has_menu_in_link($atts, $item, $args)
{
    if (in_array('menu-item-has-children', $item->classes)) {
        if (key_exists('class', $atts)) {
            $atts['class'] .= ' dropdown-toggle';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'oslabs_check_has_menu_in_link', 10, 3);
/**
 * Add class into submenu link
 */
function oslabs_nav_menu_link_class($atts, $item)
{
    if (!$item->has_children && $item->menu_item_parent > 0) {
        $class         = 'dropdown-item';
        $atts['class'] = $class;
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'oslabs_nav_menu_link_class', 10, 2);
function oslabs_copyright_menu()
{
?>
    <?php
    $oslabs_copyright_menu = wp_nav_menu([
        'theme_location' => 'copyright_menu',
    ]);
    ?>
<?php
}
function oslabs_header_menu_2()
{
?>
    <?php
    $oslabs_menu_2 = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children dropdown', $oslabs_menu_2);
    ?>
<?php
}

/**
 * [oslabs_footer_menu description]
 * @return [type] [description]
 */
function oslabs_footer_menu()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
    ]);
}
function oslabs_footer_social()
{
    $cbsocial_list_widget = get_theme_mod('cbsocial_list_widget');
?>
    <?php if (!empty($cbsocial_list_widget)) : ?>
        <?php foreach ($cbsocial_list_widget as $oslabs_social) : ?>
            <?php if (!empty($oslabs_social['social_label'])) : ?>
                <a href="<?php echo esc_url($oslabs_social['social_url']) ? esc_url($oslabs_social['social_url']) : ''; ?>" target="_blank" class="bottom-footer-social mr-30"><span data-bg-color="<?php echo esc_attr($oslabs_social['social_color']); ?>" class="footer-social-icon mr-10"><i class="icofont-<?php echo esc_attr($oslabs_social['social_icon']) ? esc_attr($oslabs_social['social_icon']) : ''; ?>"></i></span><?php echo esc_html($oslabs_social['social_label']); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php }

/**
 *
 * oslabs footer
 */

function oslabs_check_footer()
{
    $oslabs_footer_style = function_exists('get_field') ? get_field('footer_style') : null;
    $oslabs_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-1');
    if ($oslabs_footer_style == 'footer-style-1') {
        oslabs_footer_style_1();
    } elseif ($oslabs_footer_style == 'footer-style-2') {
        oslabs_footer_style_2();
    } elseif ($oslabs_footer_style == 'footer-style-3') {
        oslabs_footer_style_3();
    } elseif ($oslabs_footer_style == 'footer-style-4') {
        oslabs_footer_style_4();
    } elseif ($oslabs_footer_style == 'footer-style-5') {
        oslabs_footer_style_5();
    } elseif ($oslabs_footer_style == 'footer-style-6') {
        oslabs_footer_style_6();
    } else {
        /** default footer style **/
        if ($oslabs_default_footer_style == 'footer-style-1') {
            oslabs_footer_style_1();
        } elseif ($oslabs_default_footer_style == 'footer-style-2') {
            oslabs_footer_style_2();
        } elseif ($oslabs_default_footer_style == 'footer-style-3') {
            oslabs_footer_style_3();
        } elseif ($oslabs_default_footer_style == 'footer-style-4') {
            oslabs_footer_style_4();
        } elseif ($oslabs_default_footer_style == 'footer-style-5') {
            oslabs_footer_style_5();
        } elseif ($oslabs_default_footer_style == 'footer-style-6') {
            oslabs_footer_style_6();
        } else {
            oslabs_footer_style_1();
        }
    }
}
add_action('oslabs_footer_style', 'oslabs_check_footer', 10);

/**
 * footer  style_defaut
 */
function oslabs_footer_style_1()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '1');
    ?>

<?php
}
/**
 * footer  style 2
 */
function oslabs_footer_style_2()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '2');
    ?>

<?php
}
/**
 * footer  style 3
 */
function oslabs_footer_style_3()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '3');
    ?>
<?php
}
/**
 * footer  style 4
 */
function oslabs_footer_style_4()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '4'); ?>
<?php
}
/**
 * footer  style 5
 */
function oslabs_footer_style_5()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '5'); ?>
<?php
}
/**
 * footer  style 6
 */
function oslabs_footer_style_6()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '6'); ?>
<?php
}

// oslabs_copyright
function oslabs_copyright_text()
{
    $oslabs_copyright = get_theme_mod('oslabs_copyright', __('© 2023 oslabs Designed by CodeBasket', 'oslabs'));
?>
    <?php if (!empty($oslabs_copyright)) : ?>
        <p><?php print esc_html($oslabs_copyright); ?></p>
    <?php endif; ?>
<?php }
function oslabs_copyright_2_text()
{
    $oslabs_copyright_2 = get_theme_mod('oslabs_copyright_2', __('© 2023 oslabs Designed by CodeBasket', 'oslabs'));
?>
    <?php if (!empty($oslabs_copyright_2)) : ?>
        <p class="mb-0"><?php print esc_html($oslabs_copyright_2); ?></p>
    <?php endif; ?>
    <?php }

/**
 * [oslabs_breadcrumb_func description]
 * @return [type] [description]
 */
function oslabs_breadcrumb_func()
{
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;
    $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image') : '';
    $search_queried_result = get_search_query();
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'page',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $post_ids = array();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            array_push($post_ids, get_the_ID());
        }
        wp_reset_query();
    }
    $title_from_customizer = get_the_title();
    if (!is_home() && !is_archive() && !is_single() && !is_404() && !is_search() && !is_privacy_policy()) {
        $title_from_customizer = wp_kses_post(get_the_title());
    } else if (is_single()) {
        $title_from_customizer = wp_kses_post(get_the_title());
    } else {

        $title_from_customizer_blog = get_theme_mod('breadcrumb_title_blog', __('Blog', 'oslabs'));
        $title_from_customizer = __('Blog', 'oslabs');
        $title_from_customizer = $title_from_customizer_blog ? $title_from_customizer_blog : $title_from_customizer;
    }
    if (is_archive()) {
        $title_from_customizer = get_the_archive_title();
    }
    $searched_query = array();
    if (is_404()) {
        $searched_query = __('404', 'oslabs');
        $title_from_customizer = esc_html__('Search Results for :', 'oslabs') . $searched_query;
    }
    if (is_search()) {
        $searched_query = get_search_query();
        if (empty($searched_query)) {
            $searched_query = esc_html__('All', 'oslabs');
        }
        $title_from_customizer = esc_html__('Search Results for :', 'oslabs') . $searched_query;
    }



    $_id = get_the_ID();
    $is_breadcrumb = function_exists('get_field') ? get_field('is_it_invisible_breadcrumb', $_id) : '';
    if (!empty($_GET['s'])) {
        $is_breadcrumb = null;
    }
    if (empty($is_breadcrumb) && $breadcrumb_show == 1) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image', $_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image', $_id) : '';

        // get_theme_mod
        $breadcrumb_bg_color = get_theme_mod('breadcrumb_bg_color', __('#F8F8F8', 'oslabs'));
        $bg_img_url = get_template_directory_uri() . '/assets/images/inner-banner-bg.png';
        $breadcrumb_bg_img = get_theme_mod('breadcrumb_bg_img', get_template_directory_uri() . '/assets/images/inner-banner-bg.png');

        $breadcrumb_padding_top_field = function_exists('get_field') ? get_field('oslabs_breadcrumb_padding_top') : '';
        $breadcrumb_padding_bottom_field = function_exists('get_field') ? get_field('oslabs_breadcrumb_padding_bottom') : '';

        $breadcrumb_padding_top_customizer = get_theme_mod('breadcrumb_padding_top', 62);
        $breadcrumb_padding_bottom_customizer = get_theme_mod('breadcrumb_padding_bottom', 65);

        if ($breadcrumb_padding_top_field) {
            $breadcrumb_padding_top = $breadcrumb_padding_top_field;
        } else {
            $breadcrumb_padding_top = $breadcrumb_padding_top_customizer;
        }

        if ($breadcrumb_padding_bottom_field) {
            $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_field;
        } else {
            $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_customizer;
        }
        $breadcrumb_overlay_class = '';
        if ($hide_bg_img && empty($_GET['s'])) {
            $breadcrumb_bg_img = '';
        } else {
            $breadcrumb_bg_img = !empty($bg_img_from_page) ? $bg_img_from_page['url'] : $breadcrumb_bg_img;
            $breadcrumb_overlay_class = 'breadcrumb_overlay';
        }
        $breadcrumb_bg_img_ovelay_color_opacity = get_theme_mod('breadcrumb_bg_img_ovelay_color_opacity', __('0', 'oslabs'));
        $breadcrumb_bg_img_ovelay_color = get_theme_mod('breadcrumb_bg_img_ovelay_color', '');
    ?>
        <div class="banner banner-inner <?php print esc_attr($breadcrumb_overlay_class); ?>" data-bg-color="<?php print esc_attr($breadcrumb_bg_color); ?>" data-background="<?php print esc_url($breadcrumb_bg_img); ?>" data-top-space="<?php print esc_attr($breadcrumb_padding_top); ?>px" data-bottom-space="<?php print esc_attr($breadcrumb_padding_bottom); ?>px" data-background-opacity="<?php echo esc_attr($breadcrumb_bg_img_ovelay_color_opacity) ? esc_attr($breadcrumb_bg_img_ovelay_color_opacity) : '0'; ?>" data-overlay-color="<?php echo esc_attr($breadcrumb_bg_img_ovelay_color); ?>">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-txt">
                            <h1>
                                <?php
                                if (str_contains($title_from_customizer, '<em>')) {
                                    echo wp_kses_post($title_from_customizer, array('<em>' => array()));
                                } else {
                                    echo wp_strip_all_tags($title_from_customizer);
                                }
                                ?>
                            </h1>
                            <nav class="breadcrumb-txt p-0 breadcrumb-trail breadcrumbs">
                                <?php
                                if (function_exists('bcn_display')) {
                                    $display_text = bcn_display(true);
                                    if ($searched_query == 'All') {
                                        $display_text .= $searched_query . '"';
                                    }
                                    echo wp_kses_post($display_text);
                                    unset($display_text);
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}

add_action('oslabs_before_main_content', 'oslabs_breadcrumb_func');

// oslabs_search_form
function oslabs_search_form()
{
    ?>
    <!-- modal-search-start -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="<?php echo esc_attr__('Close', 'oslabs'); ?>">
            <span aria-hidden="true"><?php echo esc_html__('×', 'oslabs'); ?></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                    <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Enter Your Keyword', 'oslabs'); ?>">
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- modal-search-end -->
<?php
}

add_action('oslabs_before_main_content', 'oslabs_search_form');


/**
 *
 * pagination
 */
if (!function_exists('oslabs_pagination')) {

    function _oslabs_pagi_callback($pagination)
    {
        return $pagination;
    }

    //page navegation
    function oslabs_pagination($prev, $next, $pages, $args)
    {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }
        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<div class="blog-pagination mb-40">';
            foreach ($paginations as $key => $pg) {
                $pagi .= $pg;
            }
            $pagi .= '</div>';
        }

        print _oslabs_pagi_callback($pagi);
    }
}



function oslabs_sidebar_mobile_menu_1()
{
?>
    <!-- mobile menu start -->
    <section class="oslabs-mobile-menu-114 d-lg-none">
    <h4 class="title">Menus</h4>
    <div class="oslabs-mobile-icon-cross">
        <button><i class="fal fa-times"></i></button>
    </div>
    <div class="mobile-menu"></div>
    </section>
    <!-- mobile menu end -->
<?php }
