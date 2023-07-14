<!-- feature with image area start -->
<section class="feature-with-image-area">
  <div class="container">
    <div class="oslabs-feature-card-with-image-single-114 pb-45">
      <?php if (empty($settings['reverce_feature'])): ?>
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-5">
            <div class="thumb">
              <?php echo wp_get_attachment_image($settings['feature_image']['id'], 'full'); ?>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-7">
            <div class="content pl-40">
              <h4 class="title">
                <?php echo ($settings['feature_title']); ?>
              </h4>
              <p>
                <?php echo ($settings['feature_intro']); ?>
              </p>
              <?php if (!empty($settings['button_link']['url'])):
                if (!empty($settings['button_link']['url'])) {
                  $this->add_link_attributes('button_link', $settings['button_link']);
                }
                ?>
                <a class="oslabs-transparent-border-btn" <?php echo $this->get_render_attribute_string('button_link'); ?>>
                  <?php echo ($settings['button_text']); ?>
                </a>
              <?php endif; ?>

            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-7">
            <div class="content pr-40">
              <h4 class="title">
                <?php echo ($settings['feature_title']); ?>
              </h4>
              <p>
                <?php echo ($settings['feature_intro']); ?>
              </p>
              <?php if (!empty($settings['button_link']['url'])):
                if (!empty($settings['button_link']['url'])) {
                  $this->add_link_attributes('button_link', $settings['button_link']);
                }
                ?>
                <a class="oslabs-transparent-border-btn" <?php echo $this->get_render_attribute_string('button_link'); ?>>
                  <?php echo ($settings['button_text']); ?>
                </a>
              <?php endif; ?>

            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-5">
            <div class="thumb">
              <?php echo wp_get_attachment_image($settings['feature_image']['id'], 'full'); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- feature with image area end -->