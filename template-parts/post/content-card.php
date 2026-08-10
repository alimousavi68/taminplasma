<?php
/**
 * Post Content Card Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

$post_id   = get_the_ID();
$thumb_url = tamin_get_post_thumbnail_url($post_id);
$category  = tamin_get_primary_category($post_id);
$read_time = tamin_get_reading_time($post_id);
?>
<div class="swiper-slide flex flex-col relative group cursor-pointer">
  <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
    <img src="<?php echo esc_url($thumb_url); ?>" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="<?php echo esc_attr(get_the_title()); ?>" />
    <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-md text-[var(--color-text-main)] text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
      <?php echo esc_html($category); ?>
    </span>
  </div>
  <div class="mt-4 px-2 space-y-3 relative">
    <h3 class="text-neutral-900 font-semibold text-base lg:text-lg">
      <a href="<?php the_permalink(); ?>" class="hover:text-[var(--color-secondary)] transition-colors">
        <?php the_title(); ?>
      </a>
    </h3>
    <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
      <?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
      <span><?php esc_html_e('ادامه مطلب', 'tamin-theme'); ?></span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
        <line x1="17" y1="17" x2="7" y2="7"></line>
        <polyline points="17 7 7 7 7 17"></polyline>
      </svg>
    </a>
  </div>
</div>
