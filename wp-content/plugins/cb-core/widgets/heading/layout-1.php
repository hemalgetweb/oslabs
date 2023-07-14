<div class="container">
    <div class="oslabs-section-title cb-core-heading-wrap">
        <?php if(!empty($settings['title'])) : ?>
            <h3 class="title"><?php echo wp_kses_post($settings['title']); ?></h3>
        <?php endif; ?>
        <?php if(!empty($settings['excerpt'])) : ?>
            <p><?php echo wp_kses_post($settings['excerpt']); ?></p>
        <?php endif; ?>
    </div>
</div>