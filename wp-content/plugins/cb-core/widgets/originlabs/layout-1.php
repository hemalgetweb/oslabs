<div class="oslabs-footer-main-114 text-center bg-default pt-120 pb-120" data-background="assets/img/bg/footer-bg.jpg">
  <div class="container">
    <div class="oslabs-footer-logo mb-40">
      <a href="#">
        <?php echo wp_get_attachment_image($settings['originlabs_image']['id'], 'full'); ?>
      </a>
    </div>
    <p class="mb-50">
      <?php echo ($settings['originlabs_title']); ?>
    </p>
    <div class="oslabs-footer-action-images-114">

      <?php if (!empty($settings['button_link']['url'])):
        ?>
        <a href="<?php echo esc_url($settings['button_link']['url']); ?>">
          <?php echo wp_get_attachment_image($settings['originlabs_button_image']['id'], 'thumbnail');
          ?>
        </a>
      <?php endif; ?>

      <?php if (!empty($settings['button_link2']['url'])): ?>
        <a href="<?php echo esc_url($settings['button_link2']['url']); ?>">
          <?php echo wp_get_attachment_image($settings['originlabs_button_image2']['id'], 'full'); ?>
        </a>
      <?php endif; ?>

      <!-- <a href="#"><img src="assets/img/footer/app-store.svg" alt="icon" /></a>
      <a href="#"><img src="assets/img/footer/play-store.svg" alt="icon" /></a> -->

    </div>
  </div>
</div>