<!-- testimonial area start -->
<div
class="testimonial-area bg-default pt-120 pb-40"
data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/bg-testimonial.jpg"
>
<div class="container">
    <div class="oslabs-section-title mb-50 text-center">
    <?php if(!empty($settings['section_title'])) : ?>
    <h3 class="title"><?php echo wp_kses_post($settings['section_title']); ?></h3>
    <?php endif; ?>
    <?php if(!empty($settings['section_excerpt'])) : ?>
    <p>
        <?php echo wp_kses_post($settings['section_excerpt']); ?>
    </p>
    <?php endif; ?>
    </div>
</div>
<?php if(!empty($settings['slides'])) : ?>
<div class="oslabs-testimonial-pos-right-full-width-114">
    <div class="oslabs-testimonial-active-1 swiper-container">
    <div class="swiper-wrapper">
        <?php foreach($settings['slides'] as $slide) : ?>
        <div class="swiper-slide">
            <div class="oslabs-testimonial-box-single-114">
                <div class="p-25">
                <div class="oslabs-testimonial-box-head-114 mb-20">
                    <div class="row">
                    <div class="col-xxl-6">
                        <?php if(!empty($slide['select_testimonial_source'] && $slide['select_testimonial_source'] == 'play-store')) : ?>
                            <div class="play-store">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/play-store-text.svg"
                                alt="play store"
                            />
                            </div>
                        <?php else:  ?>
                            <div class="play-store">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/app-store.svg"
                                alt="App store"
                            />
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if(!empty($slide['star_rating'])) : ?>
                        <div class="col-xxl-6">
                            <div class="oslabs-rating text-end">
                                <?php for($i = 0; $i<$slide['star_rating']; $i++) : ?>
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/star-active.svg"
                                    alt="image"
                                />
                                <?php endfor; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <?php if(!empty($slide['testimonial_content'])) : ?>
                <div class="oslabs-testimonial-box-body-114 mb-40">
                    <p>
                        <?php echo wp_kses_post($slide['testimonial_content']); ?>
                    </p>
                </div>
                <?php endif; ?>
                </div>
                <div class="oslabs-testimonial-box-author-114">
                <div class="row align-items-center">
                    <div class="col-xxl-9">
                    <div class="content">
                        <?php echo wp_get_attachment_image( $slide['author_image']['id'], 'thumbnail' ); ?>
                        <?php if(!empty($slide['author_name'])) : ?>
                            <h6 class="title"><?php echo esc_html($slide['author_name']); ?></h6>
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="col-xxl-3">
                    <div class="oslabs-testimonial-user-quote-114 text-end">
                        <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/quote.svg"
                        alt="quote"
                        />
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="oslabs-testimonial-scrollbar-1 mt-60"></div>
    </div>
</div>
<?php endif; ?>
</div>
<!-- testimonial area end -->