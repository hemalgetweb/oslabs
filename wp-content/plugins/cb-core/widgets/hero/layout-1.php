<!-- banner area start -->
<div class="oslabs-banner-area pt-130 bg-default">
    <div class="container">
    <div class="row">
        <div class="col-xxl-8 col-xl-7">
        <div class="p-rel h-100">
            <div class="oslabs-banner-left pt-90">
            <?php if(!empty($settings['title'])) : ?>
            <h2 class="oslabs-banner-left-title">
                <?php echo wp_kses_post($settings['title']); ?>
            </h2>
            <?php endif; ?>
            <?php if(!empty($settings['excerpt'])) : ?>
            <p>
                <?php echo wp_kses_post($settings['excerpt']); ?>
            </p>
            <?php endif; ?>
            <div class="oslabs-banner-action-links">
                <?php if(!empty($settings['app_store_link']['url'])) : ?>
                <a href="<?php echo esc_url($settings['app_store_link']['url']); ?>"
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/app-store.svg" alt=""
                /></a>
                <?php endif; ?>
                <?php if(!empty($settings['play_store_link']['url'])) : ?>
                <a href="<?php echo esc_url($settings['play_store_link']['url']); ?>"
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/google-play.svg" alt=""
                /></a>
                <?php endif; ?>
            </div>
            </div>
            <?php if(!empty($settings['slides'])) : ?>
            <div class="oslabs-banner-left-bottom-box has-pos">
                <div class="oslabs-banner-download-ratings pb-50">
                    <ul>
                        <?php foreach($settings['slides'] as $slide) : ?>
                        <li>
                            <div class="icon">
                                <?php echo wp_get_attachment_image( $slide['slide_icon']['id'], 'thumbnail' ); ?>
                            </div>
                            <div class="content">
                            <?php if(!empty($slide['slide_title'])) : ?>
                            <h2 class="oslabs-banner-left-title">
                                <h5 class="title"><?php echo wp_kses_post($slide['slide_title']); ?></h5>
                            </h2>
                            <?php endif; ?>
                            <?php if(!empty($slide['slide_excerpt'])) : ?>
                                <p><?php echo wp_kses_post($slide['slide_excerpt']); ?></p>
                            <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
        </div>
        <div class="col-xxl-4 col-xl-5">
            <div class="oslabs-banner-right">
                <?php echo wp_get_attachment_image( $settings['hero_image']['id'], 'full' ); ?>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- banner area end -->