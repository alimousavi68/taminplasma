<?php
/**
 * Theme Setup Configuration
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

if (!function_exists('tamin_theme_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function tamin_theme_setup(): void {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Register Navigation Menus
        register_nav_menus([
            'primary' => __('منوی اصلی ناوبری', 'tamin-theme'),
            'footer'  => __('منوی دسترسی سریع فوتر', 'tamin-theme'),
        ]);

        // Switch default core markup to output valid HTML5.
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]);

        // Custom Logo support
        add_theme_support('custom-logo', [
            'height'      => 80,
            'width'       => 240,
            'flex-height' => true,
            'flex-width'  => true,
        ]);
    }
}
add_action('after_setup_theme', 'tamin_theme_setup');

if (!function_exists('tamin_seed_theme_defaults')) {
    /**
     * Auto-seed default options on theme activation if empty.
     */
    function tamin_seed_theme_defaults(): void {
        $defaults = [
            'tamin_phone_number'      => '۰۲۱-۴۹۳۶۱۳۱۸',
            'tamin_work_hours'        => 'شنبه تا پنج‌شنبه: ۸:۰۰ الی ۲۰:۰۰',
            'tamin_topbar_notice'     => 'مرکز تامین پلاسما نوژین | اهداکنندگان، سرمایه‌های معنوی و حیات‌بخش کشور',
            'tamin_about_url'         => '/about',
            'tamin_plasma_info_url'   => '/plasma-info',
            'tamin_units_url'         => '/units',
            'tamin_request_url'       => '/request',
            'tamin_blog_url'          => '/blog',
            'tamin_policy_url'        => '/policy',
            'tamin_contact_url'       => '/contact',
            // FAQ & Testimonials Defaults
            'tamin_faq_subtitle'       => 'پاسخگوی سوالات شما هستیم',
            'tamin_faq_title1'         => 'سوالات متداول',
            'tamin_faq_title2'         => ' شما',
            'tamin_testimonials_title' => 'نظرات مراجعین ما',
            'tamin_testimonials_rating'=> 'امتیاز ۴.۹/۵ از نگاه مراجعین نوژین',
            // CTA Banner Defaults
            'tamin_faq_cta_enabled'    => true,
            'tamin_faq_cta_badge'      => 'همین امروز اقدام کنید',
            'tamin_faq_cta_title1'     => 'پلاسمای شما،',
            'tamin_faq_cta_title2'     => 'جان یک بیمار را نجات میدهد',
            'tamin_faq_cta_desc'       => 'با یک اقدام ساده و رایگان، به بیماران مبتلا به هموفیلی، سوختگی‌های شدید و نقص ایمنی فرصت زندگی دوباره بدهید. مرکز نوژین با بالاترین استانداردهای بهداشتی همراه شماست.',
            'tamin_faq_cta_btn_text'   => 'همین حالا نوبت خود را رزرو کنید',
            'tamin_faq_cta_btn_url'    => '/request',
            'tamin_faq_cta_image'      => tamin_img_url('cta_healthy.webp'),
            'tamin_faq_cta_tag1'       => 'اطلاعات شما کاملاً محفوظ است',
            'tamin_faq_cta_tag2'       => 'مراجعه رایگان',
        ];

        foreach ($defaults as $key => $val) {
            if (false === get_theme_mod($key)) {
                set_theme_mod($key, $val);
            }
        }

        // Seed default centers
        if (false === get_option('tamin_centers_data')) {
            $centers = [
                'tehran_vanak' => ['id' => 'tehran_vanak', 'name' => 'شعبه مرکزی ونک', 'city' => 'تهران', 'city_id' => 'tehran', 'phone' => '۰۲۱-۴۹۳۶۱۳۱۸', 'hours' => '۸ صبح الی ۸ شب', 'map_link' => 'https://maps.google.com/?q=Vanak+Square+Tehran', 'image_url' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80', 'active' => true],
                'tehranpars' => ['id' => 'tehranpars', 'name' => 'شعبه تهرانپارس', 'city' => 'تهران', 'city_id' => 'tehran', 'phone' => '۰۲۱-۷۷۸۸۹۹۰۰', 'hours' => '۸ صبح الی ۶ عصر', 'map_link' => 'https://maps.google.com/?q=Tehranpars+Tehran', 'image_url' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=800&q=80', 'active' => true],
                'mashhad_ahmadabad' => ['id' => 'mashhad_ahmadabad', 'name' => 'شعبه مشهد (احمدآباد)', 'city' => 'مشهد', 'city_id' => 'khorasan', 'phone' => '۰۵۱-۳۸۴۰۰۰۰۰', 'hours' => '۷:۳۰ صبح الی ۷:۳۰ شب', 'map_link' => 'https://maps.google.com/?q=Ahmadabad+Mashhad', 'image_url' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=800&q=80', 'active' => true]
            ];
            update_option('tamin_centers_data', $centers);
        }
    }
}
add_action('after_switch_theme', 'tamin_seed_theme_defaults');
add_action('init', 'tamin_seed_theme_defaults');
