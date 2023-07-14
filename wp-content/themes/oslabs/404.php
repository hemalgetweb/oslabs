<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package oslabs
 */

get_header();

$cbtoolkit_error_404_image = get_theme_mod('cbtoolkit_error_404_image', get_template_directory_uri() . '/assets/images/error.png');
$cbtoolkit_error_title = get_theme_mod('cbtoolkit_error_title', __('Page not found', 'oslabs'));
$cbtoolkit_error_desc = get_theme_mod('cbtoolkit_error_desc', __('Oops! The page you are looking for does not exist. It might have been moved or deleted', 'oslabs'));
$cbtoolkit_error_link_text = get_theme_mod('cbtoolkit_error_link_text', __('Back To Home', 'oslabs'));
?>
<section class="error__area pt-120 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
            <div class="error__item text-center">
               <?php if(!empty($cbtoolkit_error_404_image)) : ?>
               <div class="error__thumb mb-45">
                  <img src="<?php echo esc_url($cbtoolkit_error_404_image); ?>" alt="<?php echo esc_attr__('Error image', 'oslabs'); ?>">
               </div>
               <?php endif; ?>
               <div class="error__content">
                  <?php if(!empty($cbtoolkit_error_title)) : ?>
                  <h3 class="error__title"><?php echo esc_html($cbtoolkit_error_title); ?></h3>
                  <?php endif; ?>
                  <?php if(!empty($cbtoolkit_error_desc)) : ?>
                  <p><?php echo esc_html($cbtoolkit_error_desc); ?></p>
                  <?php endif; ?>
                  <?php if(!empty($cbtoolkit_error_link_text)) : ?>
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="def-btn border-0"><?php echo esc_html($cbtoolkit_error_link_text); ?></a>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
