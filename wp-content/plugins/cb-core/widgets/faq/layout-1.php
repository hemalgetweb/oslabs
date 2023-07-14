<!-- faq area start -->
<section class="faq-area">
   <div class="container">
    <?php if(!empty($settings['slides'])) : ?>
      <div class="oslabs-faq-main-accordion-114">
         <div class="accordion" id="oslabs-accordion-id-1">
            <?php foreach($settings['slides'] as  $index => $slide) :
                $collapse_class = $index == 0 ? 'show': '';  
                $aria_expanded = $index == 0 ? 'true': 'false';  
                $accordion_collapsed = $index == 0 ? '': 'collapsed';  
            ?>
            <div class="accordion-item">
                <?php if(!empty($slide['faq_title'])) : ?>
               <h2 class="accordion-header" id="heading-<?php echo $index; ?>">
                  <button
                     class="accordion-button <?php echo esc_attr($accordion_collapsed); ?>"
                     type="button"
                     data-bs-toggle="collapse"
                     data-bs-target="#collapse-<?php echo $index; ?>"
                     aria-expanded="<?php echo esc_attr($aria_expanded); ?>"
                     aria-controls="collapse-<?php echo $index; ?>"
                     >
                  <?php echo wp_kses_post($slide['faq_title']); ?>
                  </button>
               </h2>
               <?php endif; ?>
               <div
                  id="collapse-<?php echo $index; ?>"
                  class="accordion-collapse collapse <?php echo esc_attr($collapse_class); ?>"
                  aria-labelledby="heading-<?php echo $index; ?>"
                  data-bs-parent="#oslabs-accordion-id-1"
                  >
                  <div class="accordion-body">
                  <?php if(!empty($slide['faq_content'])) : ?>
                     <div class="content">
                        <?php echo wp_kses_post($slide['faq_content']); ?>
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
            </div>
            <?php endforeach; ?>
         </div>
      </div>
      <?php endif; ?>
   </div>
</section>
<!-- faq area end -->