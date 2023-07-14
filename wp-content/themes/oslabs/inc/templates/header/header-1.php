<?php
/*
    cmt_section_header_topbar_1: start section topbar 1
    */
$cbtoolkit_header_upload_file = get_theme_mod('cbtoolkit_header_upload_file');
?>
<!-- header area start -->
<header class="header-area header-transparent">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-5 col-lg-5 col-6">
        <div class="olabs-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-white.svg" alt="Logo"
            /></a>
        </div>
        </div>
        <div class="col-xxl-7 col-lg-7 d-none d-lg-block">
            <div class="olabs-header-right text-end">
                <nav id="mobile-menu">
                    <?php oslabs_header_menu(); ?>
                </nav>
                <?php if(!empty($cbtoolkit_header_upload_file)) : ?>
                    <a href="<?php echo esc_url($cbtoolkit_header_upload_file); ?>" download class="olabs-header-download-btn">Download</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-6 d-lg-none">
        <div class="text-end">
            <button class="oslabs-bar-btn-114">
            <i class="fal fa-bars"></i>
            </button>
        </div>
        </div>
    </div>
    </div>
</header>
<!-- header area end -->
<?php oslabs_sidebar_mobile_menu_1(); ?>