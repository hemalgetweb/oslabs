<?php
/**
 * single.php
 * @package WordPress
 * @subpackage oslabs
 * @since oslabs 1.0
 * 
 */
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 'col-lg-8 col-md-12 col-sm-12' : 'col-lg-8 col-md-12 col-sm-12';
$cbblog_layout = get_theme_mod('cbblog_layout') ? get_theme_mod('cbblog_layout'): 'right-sidebar';
$sidebar_space = '';

if($cbblog_layout == 'right-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'pl-50' : '';
} else if($cbblog_layout == 'left-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'pr-50' : '';
}
 ?>
<?php get_header(); ?>
<div class="oslabs-blog-details-area blog-details pt-100 pb-60">
	<div class="container">
		<div class="row justify-content-center">
			<?php if($cbblog_layout == 'left-sidebar') : ?>
				<?php if(is_active_sidebar('blog-sidebar')) : ?>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="oslabs-details-sidebar">
							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			<div class="<?php echo esc_attr($blog_column); ?>">
				<div class="oslabs-blog-details-wrapper mb-40">
					<div class="oslabs-fz-blog-content-wrapper-448">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php  get_template_part( 'post-formates/single-post/content', get_post_format() ); ?>
						<?php endwhile; ?>
						<?php  get_template_part( 'post-formates/single-post/content', 'biography' ); ?>
						<div class="comments-area">
							<?php 
								if ( comments_open() || get_comments_number(get_the_ID()) ):
									comments_template();
								endif;
							?>
						</div>
					</div>
					<?php else : ?>
					<h2><?php esc_html_e('No Posts Found', 'oslabs') ?></h2>
					<?php endif; ?>
				</div>
			</div>
			<?php if($cbblog_layout == 'right-sidebar') : ?>
				<?php if(is_active_sidebar('blog-sidebar')) : ?>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="oslabs-details-sidebar <?php echo esc_attr($sidebar_space); ?>">
							<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
								<?php dynamic_sidebar( 'blog-sidebar' ); ?>
							<?php } ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>