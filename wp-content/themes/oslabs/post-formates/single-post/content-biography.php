<?php
    $author_firstname = esc_html(get_user_meta(get_the_author_meta('ID'), 'first_name')[0]) ? esc_html(get_user_meta(get_the_author_meta('ID'), 'first_name')[0]): '';
    $author_lastname = esc_html(get_user_meta(get_the_author_meta('ID'), 'last_name')[0]) ? esc_html(get_user_meta(get_the_author_meta('ID'), 'last_name')[0]): '';
    $author_name = '';
    if(!empty($author_firstname)) {
        $author_name = $author_firstname.' '.$author_lastname;
    }
    $author_image = get_avatar(get_the_author_meta('ID'));
    $author_name = empty($author_name) ?  esc_html(get_user_meta(get_the_author_meta('ID'), 'nickname')[0]): $author_name;
    $author_biography = get_user_meta(get_the_author_meta('ID'), 'description')[0];
    $user_role = esc_html(get_userdata(get_the_author_meta('ID'))->roles[0]) ? esc_html(get_userdata(get_the_author_meta('ID'))->roles[0]): '';
    $content_bottom_margin = empty(comments_open(get_the_ID()) && is_single()) ? 'mb-0' : '';
?>
<div class="oslabs-fz-admin-box-778 <?php echo esc_attr($content_bottom_margin); ?>">
    <div class="oslabs-fz-admin-box-inner-wrapper-774">
        <?php if(!empty($author_image)) : ?>
        <div class="image">
            <?php echo wp_kses_post($author_image); ?>
        </div>
        <?php endif; ?>
        <div class="content">
            <div class="oslabs-fz-admin-box-name-des-wrapper-778">
                <?php if(!empty($author_name)) : ?>
                    <h6 class="oslabs-fz-admin-box-title-778"><?php echo esc_html($author_name); ?></h6>
                <?php endif; ?>
                <?php if(!empty($user_role)) : ?>
                    <span class="oslabs-fz-admin-box-rule-778"><?php echo esc_html($user_role); ?></span>
                <?php endif; ?>
            </div>
            <?php if(!empty($author_biography)) : ?>
                <p><?php echo esc_html($author_biography); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>