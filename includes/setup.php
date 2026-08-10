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
