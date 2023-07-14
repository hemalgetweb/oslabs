<?php
$oslabs_footer_logo_2 = get_theme_mod('oslabs_footer_logo_2');

/*
cmt_section_footer_2: start section Footer 1
*/
$footer_bg_image_2 = get_theme_mod('footer_bg_image_2', get_template_directory_uri() . '/assets/img/logo/logo.png');
$cbtoolkit_footer_bg_color_2 = get_theme_mod('cbtoolkit_footer_bg_color_2', __('#fff', 'oslabs'));
$cbtoolkit_copyright_1 = get_theme_mod('cbtoolkit_copyright_1', __('© 2023 Origin Labs. All Rights Reserved.', 'oslabs'));
$cbtoolkit_footer_copyright_image_2 = get_theme_mod('cbtoolkit_footer_copyright_image_2');
$cbtoolkit_copyright_fb_url = get_theme_mod('cbtoolkit_copyright_fb_url', '#');
$cbtoolkit_copyright_insta_url = get_theme_mod('cbtoolkit_copyright_insta_url', '#');
$cbtoolkit_copyright_linkedin_url = get_theme_mod('cbtoolkit_copyright_linkedin_url', '#');
$cbtoolkit_copyright_pinterest_url = get_theme_mod('cbtoolkit_copyright_pinterest_url', '#');
$footer_class_2[1] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6'; 
$footer_class_2[2] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
$footer_class_2[3] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
$footer_class_2[4] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
?>
<?php if (!empty($cbtoolkit_copyright_1)) : ?>
    <div class="oslabs-footer-copyright-area">
        <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
            <p class="oslabs-copyright-text-114 text-center mb-lg-0 text-lg-start">
                <?php echo wp_kses_post($cbtoolkit_copyright_1); ?>
            </p>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="oslabs-copyright-right-social-links text-center text-lg-end">
                    <span class="oslabs-copyright-social-right-text">Follow us on:</span>
                    <?php if(!empty($cbtoolkit_copyright_fb_url)) : ?>
                        <a href="<?php echo esc_url($cbtoolkit_copyright_fb_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/fb.svg" alt=""></a>
                    <?php endif; ?>
                    <?php if(!empty($cbtoolkit_copyright_insta_url)) : ?>
                        <a href="<?php echo esc_url($cbtoolkit_copyright_insta_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/instagram.svg" alt=""></a>
                    <?php endif; ?>
                    <?php if(!empty($cbtoolkit_copyright_linkedin_url)) : ?>
                        <a href="<?php echo esc_url($cbtoolkit_copyright_linkedin_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/linkedin.svg" alt=""></a>
                    <?php endif; ?>
                    <?php if(!empty($cbtoolkit_copyright_pinterest_url)) : ?>
                        <a href="<?php echo esc_url($cbtoolkit_copyright_pinterest_url); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/pinterest.svg" alt=""></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>
    </div>
<?php endif; ?>