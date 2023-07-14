<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oslabs
 */
$cbtoolkit_blog_btn_switch = get_theme_mod('cbtoolkit_blog_btn_switch', true);
$cbtoolkit_blog_meta_switch = get_theme_mod('cbtoolkit_blog_meta_switch', true);
$cbtoolkit_blog_author_switch = get_theme_mod('cbtoolkit_blog_author_switch', true);
$cbtoolkit_blog_date_switch = get_theme_mod('cbtoolkit_blog_date_switch', true);
$cbtoolkit_blog_comments_switch = get_theme_mod('cbtoolkit_blog_comments_switch', true);
$cbtoolkit_blog_btn_text = get_theme_mod('cbtoolkit_blog_btn_text', __('Read More', 'oslabs'));
$oslabs_video_url = function_exists('get_field') ? get_field('fromate_style') : NULL;
$categories = get_the_terms($post->ID, 'category');
$video_id = oslabs_getYoutubeIdFromUrl($oslabs_video_url);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('oslabs-fz-blog-box-447 mb-50 format-video'); ?>>
    <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) : ?>
        <div class="oslabs-fz-blog-thumbnail-447">
            <?php
            $att = get_post_thumbnail_id();
            $image_src = wp_get_attachment_image_src($att, 'full');
            if (!empty($image_src)) {
                $image_src = $image_src[0];
            }
            $oslabs_cat  = get_the_category(get_the_ID()) ? (array) get_the_category(get_the_ID())[0]: '';
            $first_cat_name = '';
            $first_cat_id = '';
            $first_cat_url = '';
            if(!empty($oslabs_cat)) {
                $first_cat_name = $oslabs_cat['name'];
                $first_cat_id = $oslabs_cat['term_id'];
                $first_cat_url = get_category_link( $first_cat_id );
            }
            ?>
            <div class="oslabs-fz-thumbnail-image">
                <img src="<?php echo esc_url($image_src); ?>" alt="<?php the_title_attribute(); ?>">
                <?php if (!empty($oslabs_video_url)) : ?>
                    <div class="oslabs-fz-format-video-btn-447">
                        <a href="#0" class="video-icon popup-video js-modal-btn" data-video-id="<?php echo esc_attr($video_id) ? esc_attr($video_id) : ''; ?>"><i class="fa-light fa-play"></i><i class="fa-light fa-play"></i></a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($cbtoolkit_blog_date_switch)) : ?>
                    <div class="oslabs-blog-caption-date-447">
                        <span class="day"><?php print esc_html(get_the_date('d', get_the_ID())); ?></span>
                        <span class="month"><?php print esc_html(get_the_date('M', get_the_ID())); ?></span>
                    </div>
                <?php endif; ?>
                <?php if (!empty($cbtoolkit_blog_meta_switch)) : ?>
                    <div class="oslabs-blog-meta-in-box-447 d-none d-sm-flex">
                        <?php if (!empty($cbtoolkit_blog_author_switch)) : ?>
                            <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_avatar(get_the_author_meta('ID')); ?><?php print esc_html(get_the_author()); ?></a>
                        <?php endif; ?>
                        <?php if(!empty($first_cat_name)) : ?>
                            <a href="<?php echo esc_url($first_cat_url) ? esc_url($first_cat_url): ''; ?>"><?php echo esc_html($first_cat_name); ?></a>
                        <?php endif; ?>
                        <?php if (!empty($cbtoolkit_blog_comments_switch)) : ?>
                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="oslabs-fz-blog-content-447">
        <?php if (!empty($cbtoolkit_blog_meta_switch)) : ?>
            <div class="oslabs-fz-blog-meta-wrap-447 mb-15">
                <?php if (!empty($cbtoolkit_blog_date_switch)) : ?>
                    <span><i class="fal fa-calendar"></i><?php echo esc_html(get_the_date()); ?></span>
                <?php endif; ?>
                <?php if (!empty($cbtoolkit_blog_author_switch)) : ?>
                    <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="fal fa-user"></i><?php print esc_html(get_the_author()); ?></a>
                <?php endif; ?>
                <?php if (!empty($cbtoolkit_blog_comments_switch)) : ?>
                    <a href="<?php comments_link(); ?>"><i class="fal fa-comments"></i><?php comments_number(); ?></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (get_the_title()) : ?>
            <h4 class="oslabs-fz-blog-title-447"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php endif; ?>
        <p><?php echo wp_kses_post(wp_trim_words(get_the_excerpt(), 44)); ?></p>
        <?php if (!empty($cbtoolkit_blog_btn_switch)) : ?>
            <?php if (!empty($cbtoolkit_blog_btn_text)) : ?>
                <div class="oslabs-fz-blog-btn-wrapper-447">
                    <a href="<?php the_permalink(); ?>" class="oslabs-fz-blog-button-447"><span><?php echo esc_html($cbtoolkit_blog_btn_text); ?></span> <span><?php echo esc_html($cbtoolkit_blog_btn_text); ?></span></a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</article>
<?php
/**
 * Reset Unnecessary variables
 */
unset($video_id);
?>