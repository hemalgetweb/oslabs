<!-- about team area start -->
<section class="about-team bg-default pt-120 pb-120" data-background="assets/img/bg/team-bg.jpg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xxl-6 col-xl-5 col-lg-5">
        <div class="oslabs-about-team-image-114 mb-50 mb-lg-0">
          <?php echo wp_get_attachment_image($settings['teams_image']['id'], 'full'); ?>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-7 col-lg-7">
        <div class="oslabs-about-team-right-content-114 pl-35">
          <h5 class="title">
            <?php echo ($settings['teams_title']); ?>
          </h5>
          <div class="content">
            <?php if (!empty($settings['teams_intro'])): ?>
              <p>
                <?php echo wp_kses_post($settings['teams_intro']); ?>
              </p>
            <?php endif; ?>
            <div class="btn-wrap">
              <a class="oslabs-white-transparent-border-btn" <?php echo $this->get_render_attribute_string('button_link'); ?>>
                <?php echo ($settings['button_text']); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about team area end -->