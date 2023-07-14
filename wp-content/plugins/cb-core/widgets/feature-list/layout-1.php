<!-- feature list area start -->
<div class="feature-list-area bg-default">
   <div class="container">
    <?php if(!empty($settings['slides'])) : ?>
      <div class="oslabs-feature-list-wrap-114">
         <div class="row">
            <?php foreach($settings['slides'] as $index => $slide) : ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="oslabs-feature-list-single-114 pb-40">
                  <div class="count pr-35"><span><?php echo $index+1; ?>. </span></div>
                  <div class="content">
                    <?php if(!empty($slide['feature_title'])) : ?>
                     <h6 class="title"><?php echo wp_kses_post( $slide['feature_title'] ); ?></h6>
                     <?php endif; ?>
                     <?php if(!empty($slide['feature_excerpt'])) : ?>
                     <p>
                        <?php echo wp_kses_post( $slide['feature_excerpt'] ); ?>
                     </p>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>
      <?php endif; ?>
   </div>
</div>
<!-- feature list area end -->