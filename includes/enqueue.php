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
        // Enqueue FontAwesome 6.5.1 CSS (Identical to tpnojine.com live site)
        wp_enqueue_style(
            'tamin-fontawesome',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
            [],
            '6.5.1'
        );

        // Enqueue Swiper local CSS
        if (file_exists(TAMIN_THEME_DIR . '/assets/css/swiper-bundle.min.css')) {
            wp_enqueue_style(
                'tamin-swiper',
                TAMIN_THEME_URI . '/assets/css/swiper-bundle.min.css',
                [],
                '11.0.0'
            );
        }

        // Enqueue Tailwind compiled CSS
        if (file_exists(TAMIN_THEME_DIR . '/assets/css/tailwind.css')) {
            wp_enqueue_style(
                'tamin-tailwind',
                TAMIN_THEME_URI . '/assets/css/tailwind.css',
                ['tamin-swiper', 'tamin-fontawesome'],
                TAMIN_THEME_VERSION
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

        // Enqueue Frontend JS
        if (file_exists(TAMIN_THEME_DIR . '/assets/js/main.js')) {
            wp_enqueue_script(
                'tamin-main',
                TAMIN_THEME_URI . '/assets/js/main.js',
                ['tamin-swiper-js'],
                TAMIN_THEME_VERSION,
                true
            );
        }

        // Pass localized data to script
        wp_localize_script('tamin-main', 'taminData', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('tamin_nonce'),
            'siteUrl' => home_url('/'),
        ]);
    }
}
add_action('wp_enqueue_scripts', 'tamin_enqueue_scripts');

