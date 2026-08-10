<?php
/**
 * Register Widget Areas and Sidebars
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

if (!function_exists('tamin_widgets_init')) {
    /**
     * Register widget areas.
     */
    function tamin_widgets_init(): void {
        // 1. Main Blog Sidebar
        register_sidebar([
            'name'          => __('ستون اصلی وبلاگ', 'tamin-theme'),
            'id'            => 'sidebar-main',
            'description'   => __('ابزارک‌های نوار کناری صفحات نوشته و آرشیو', 'tamin-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s mb-6 p-5 bg-white rounded-[2rem] border border-neutral-100 shadow-sm">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title text-sm font-black text-[var(--color-text-main)] mb-4 pb-3 border-b border-neutral-50">',
            'after_title'   => '</h3>',
        ]);

        // 2. Page Sidebar
        register_sidebar([
            'name'          => __('ستون کناری برگه‌ها', 'tamin-theme'),
            'id'            => 'sidebar-page',
            'description'   => __('ابزارک‌های نوار کناری برگه‌های داخلی', 'tamin-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s mb-6 p-5 bg-white rounded-[2rem] border border-neutral-100 shadow-sm">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title text-sm font-black text-[var(--color-text-main)] mb-4 pb-3 border-b border-neutral-50">',
            'after_title'   => '</h3>',
        ]);

        // 3. Footer Widget Area 1
        register_sidebar([
            'name'          => __('فوتر - ستون ۱', 'tamin-theme'),
            'id'            => 'footer-1',
            'description'   => __('ابزارک‌های ستون اول فوتر', 'tamin-theme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s space-y-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="text-primary font-extrabold text-base mb-6">',
            'after_title'   => '</h3>',
        ]);

        // 4. Footer Widget Area 2
        register_sidebar([
            'name'          => __('فوتر - ستون ۲', 'tamin-theme'),
            'id'            => 'footer-2',
            'description'   => __('ابزارک‌های ستون دوم فوتر', 'tamin-theme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s space-y-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="text-primary font-extrabold text-base mb-6">',
            'after_title'   => '</h3>',
        ]);
    }
}
add_action('widgets_init', 'tamin_widgets_init');
