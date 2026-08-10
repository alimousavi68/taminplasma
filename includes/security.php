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
