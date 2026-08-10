<?php
/**
 * Security and Sanitization Module
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

if (!function_exists('tamin_clean_input')) {
    /**
     * Clean and sanitize input string.
     *
     * @param string $data Raw input.
     * @return string Sanitized input.
     */
    function tamin_clean_input(string $data): string {
        return sanitize_text_field(wp_unslash($data));
    }
}

if (!function_exists('tamin_verify_ajax_nonce')) {
    /**
     * Helper to verify AJAX nonces safely.
     *
     * @param string $action Nonce action name.
     * @param string $query_arg Request field name.
     * @return bool True if valid, false otherwise.
     */
    function tamin_verify_ajax_nonce(string $action = 'tamin_nonce', string $query_arg = 'nonce'): bool {
        if (!isset($_REQUEST[$query_arg])) {
            return false;
        }
        return (bool) wp_verify_nonce(sanitize_text_field(wp_unslash($_REQUEST[$query_arg])), $action);
    }
}

if (!function_exists('tamin_sanitize_checkbox')) {
    /**
     * Sanitize checkbox output.
     */
    function tamin_sanitize_checkbox($checked) {
        return ((isset($checked) && true === $checked) ? true : false);
    }
}

if (!function_exists('tamin_sanitize_json')) {
    /**
     * Sanitize JSON strings allowing SVG tags.
     */
    function tamin_sanitize_json($json) {
        // Since this is for customizer (admins only), we decode, check if it's array, and re-encode to ensure it's valid JSON.
        // We do not run wp_kses_post because it strips valid SVGs.
        $decoded = json_decode($json, true);
        if (is_array($decoded)) {
            return wp_json_encode($decoded);
        }
        return '';
    }
}
