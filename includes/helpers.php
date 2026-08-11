<?php
/**
 * Helper Utility Functions
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

if (!function_exists('tamin_asset_url')) {
    /**
     * Get theme asset URL.
     *
     * @param string $path Path relative to assets directory.
     * @return string Full URI to asset.
     */
    function tamin_asset_url(string $path = ''): string {
        return TAMIN_THEME_URI . '/assets/' . ltrim($path, '/');
    }
}

if (!function_exists('tamin_img_url')) {
    /**
     * Get theme image asset URL.
     *
     * @param string $path Path relative to assets/images directory.
     * @return string Full URI to image asset.
     */
    function tamin_img_url(string $path = ''): string {
        return TAMIN_THEME_URI . '/assets/images/' . ltrim($path, '/');
    }
}

if (!function_exists('tamin_get_nav_url')) {
    /**
     * Get dynamic customizer section link or fallback page URL.
     *
     * @param string $mod_key Customizer setting key.
     * @param string $default_path Fallback relative path.
     * @return string Fully qualified escaped URL.
     */
    function tamin_get_nav_url(string $mod_key, string $default_path = '/'): string {
        $val = get_theme_mod($mod_key, $default_path);
        if (empty($val)) {
            $val = $default_path;
        }
        if (is_numeric($val)) {
            return esc_url(get_permalink((int)$val));
        }
        if (str_starts_with($val, 'http://') || str_starts_with($val, 'https://') || str_starts_with($val, '#')) {
            return esc_url($val);
        }
        return esc_url(home_url('/' . ltrim($val, '/')));
    }
}

if (!function_exists('tamin_get_reading_time')) {
    /**
     * Calculate estimated reading time for a post in minutes.
     *
     * @param int|null $post_id Optional post ID.
     * @return int Reading time in minutes.
     */
    function tamin_get_reading_time(?int $post_id = null): int {
        $post = get_post($post_id);
        if (!$post) {
            return 1;
        }
        $words = mb_strlen(strip_tags($post->post_content));
        $minutes = ceil($words / 250);
        return max(1, (int) $minutes);
    }
}

if (!function_exists('tamin_get_post_thumbnail_url')) {
    /**
     * Get post thumbnail URL with graceful fallback image.
     *
     * @param int|null $post_id Optional post ID.
     * @param string $size Image size.
     * @return string Image URL.
     */
    function tamin_get_post_thumbnail_url(?int $post_id = null, string $size = 'medium_large'): string {
        $post_id = $post_id ?: get_the_ID();
        if (has_post_thumbnail($post_id)) {
            $url = get_the_post_thumbnail_url($post_id, $size);
            if ($url) {
                return $url;
            }
        }
        return tamin_img_url('post-1.webp');
    }
}

if (!function_exists('tamin_get_primary_category')) {
    /**
     * Get primary category name for a post.
     *
     * @param int|null $post_id Optional post ID.
     * @return string Category name.
     */
    function tamin_get_primary_category(?int $post_id = null): string {
        $categories = get_the_category($post_id);
        if (!empty($categories) && !is_wp_error($categories)) {
            return $categories[0]->name;
        }
        return __('اخبار و مقالات', 'tamin-theme');
    }
}

if (!function_exists('tamin_en_to_fa')) {
    /**
     * Convert English digits to Persian digits.
     *
     * @param string|int $string
     * @return string
     */
    function tamin_en_to_fa($string): string {
        $en = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $fa = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        return str_replace($en, $fa, (string) $string);
    }
}
