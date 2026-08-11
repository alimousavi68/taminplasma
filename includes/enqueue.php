<?php
/**
 * Enqueue Theme Scripts and Styles
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

if (!function_exists('tamin_enqueue_scripts')) {
    /**
     * Enqueue scripts and styles for the frontend.
     */
    function tamin_enqueue_scripts(): void {
        // Enqueue FontAwesome local CSS
        if (file_exists(TAMIN_THEME_DIR . '/assets/css/fontawesome.min.css')) {
            wp_enqueue_style(
                'tamin-fontawesome',
                TAMIN_THEME_URI . '/assets/css/fontawesome.min.css',
                [],
                '6.5.1'
            );
        }

        // Enqueue Swiper local CSS
        if (file_exists(TAMIN_THEME_DIR . '/assets/css/swiper-bundle.min.css')) {
            wp_enqueue_style(
                'tamin-swiper',
                TAMIN_THEME_URI . '/assets/css/swiper-bundle.min.css',
                [],
                '11.0.0'
            );
        }

        // Enqueue Tailwind compiled CSS with Dynamic Cache Busting
        $tailwind_file = TAMIN_THEME_DIR . '/assets/css/tailwind.css';
        $tailwind_ver  = file_exists($tailwind_file) ? (string) filemtime($tailwind_file) : TAMIN_THEME_VERSION;

        if (file_exists($tailwind_file)) {
            wp_enqueue_style(
                'tamin-tailwind',
                TAMIN_THEME_URI . '/assets/css/tailwind.css',
                ['tamin-swiper', 'tamin-fontawesome'],
                $tailwind_ver
            );
        }

        // Enqueue Main Theme Style
        wp_enqueue_style(
            'tamin-style',
            get_stylesheet_uri(),
            ['tamin-tailwind'],
            TAMIN_THEME_VERSION
        );

        // Enqueue Swiper local JS
        if (file_exists(TAMIN_THEME_DIR . '/assets/js/swiper-bundle.min.js')) {
            wp_enqueue_script(
                'tamin-swiper-js',
                TAMIN_THEME_URI . '/assets/js/swiper-bundle.min.js',
                [],
                '11.0.0',
                true
            );
        }

        // Enqueue Frontend JS with Dynamic Cache Busting
        $js_file = TAMIN_THEME_DIR . '/assets/js/main.js';
        $js_ver  = file_exists($js_file) ? (string) filemtime($js_file) : TAMIN_THEME_VERSION;

        if (file_exists($js_file)) {
            wp_enqueue_script(
                'tamin-main',
                TAMIN_THEME_URI . '/assets/js/main.js',
                ['tamin-swiper-js'],
                $js_ver,
                true
            );
        }

        // Pass localized data to script for both window.taminData and window.tamin_ajax
        $localized_data = [
            'ajaxUrl'  => admin_url('admin-ajax.php'),
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('tamin_nonce'),
            'siteUrl'  => home_url('/'),
        ];
        wp_localize_script('tamin-main', 'taminData', $localized_data);
        wp_localize_script('tamin-main', 'tamin_ajax', $localized_data);
    }
}
add_action('wp_enqueue_scripts', 'tamin_enqueue_scripts');

