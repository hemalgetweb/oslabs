<!-- service area start -->
<section class="service-area">
<div class="container">
    <div class="row">
    <div class="col-xxl-6 col-lg-6 col-md-6">
        <div class="oslabs-service-left-114 mb-30 mb-md-0">
        <div class="oslabs-section-title mb-50">
            <?php if(!empty($settings['section_title'])) : ?>
                <h3 class="title"><?php echo wp_kses_post($settings['section_title']); ?></h3>
            <?php endif; ?>
            <?php if(!empty($settings['section_excerpt'])) : ?>
            <p>
                <?php echo wp_kses_post($settings['section_excerpt']); ?>
            </p>
            <?php endif; ?>
        </div>
        <?php if(!empty($settings['slides'])) : ?>
            <?php foreach($settings['slides'] as $index => $slide) : ?>
                <?php if($index == 0) : ?>
                <div class="oslabs-service-box-wide-114">
                    <div class="thumb">
                        <?php echo wp_get_attachment_image( $slide['service_image']['id'], 'full' ); ?>
                    </div>
                    <div class="content text-center">
                        <?php if(!empty($slide['service_title'])) : ?>
                            <h5 class="title"><?php echo wp_kses_post( $slide['service_title'] ); ?></h5>
                        <?php endif; ?>
                        <?php if(!empty($slide['service_excerpt'])) : ?>
                            <p><?php echo wp_kses_post( $slide['service_excerpt'] ); ?></p>
                        <?php endif; ?>
                        <?php if(!empty($slide['srvice_btn_text'])) : 
                            if ( ! empty( $slide['service_btn_link']['url'] ) ) {
                                $this->add_link_attributes( 'service_btn_link', $slide['service_btn_link'] );
                            }
                            ?>
                        <a <?php echo $this->get_render_attribute_string( 'service_btn_link' ); ?> class="olabs-header-download-btn"
                            ><?php echo esc_html( $slide['srvice_btn_text'] ); ?> <i class="fal fa-arrow-right"></i
                        ></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>
    <?php if(!empty($settings['slides'])) : ?>
        <div class="col-xxl-6 col-lg-6 col-md-6">
            <?php foreach($settings['slides'] as $index => $slide) : ?>
            <?php if($index == 1) : ?>
            <div class="oslabs-service-right-114 mb-30">
                <div class="oslabs-service-right-box-114">
                    <div class="content">
                    <?php if(!empty($slide['service_title'])) : ?>
                        <h3 class="title"><?php echo wp_kses_post( $slide['service_title'] ); ?></h5>
                    <?php endif; ?>
                    <?php if(!empty($slide['service_excerpt'])) : ?>
                        <p><?php echo wp_kses_post( $slide['service_excerpt'] ); ?></p>
                    <?php endif; ?>
                    </div>
                    <div class="thumb has-shadow">
                        <?php echo wp_get_attachment_image( $slide['service_image']['id'], 'full' ); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if($index == 2) : ?>
            <div class="oslabs-service-right-114 style-2">
                <div class="oslabs-service-right-box-114">
                    <div class="content">
                    <?php if(!empty($slide['service_title'])) : ?>
                        <h3 class="title"><?php echo wp_kses_post( $slide['service_title'] ); ?></h5>
                    <?php endif; ?>
                    <?php if(!empty($slide['service_excerpt'])) : ?>
                        <p><?php echo wp_kses_post( $slide['service_excerpt'] ); ?></p>
                    <?php endif; ?>
                    </div>
                    <div class="thumb">
                        <?php echo wp_get_attachment_image( $slide['service_image']['id'], 'full' ); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    </div>
</div>
</section>
<!-- service area end -->