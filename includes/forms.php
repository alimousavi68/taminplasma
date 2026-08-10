<?php
/**
 * AJAX Form Handling, Nonces and Rate Limiting
 *
 * @package TaminTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

if (!class_exists('Tamin_Form_Handler')) {

    class Tamin_Form_Handler {

        public function __construct() {
            // Contact Form AJAX Actions
            add_action('wp_ajax_tamin_submit_contact', [$this, 'handle_contact_submission']);
            add_action('wp_ajax_nopriv_tamin_submit_contact', [$this, 'handle_contact_submission']);

            // Donation Request Form AJAX Actions
            add_action('wp_ajax_tamin_submit_request', [$this, 'handle_request_submission']);
            add_action('wp_ajax_nopriv_tamin_submit_request', [$this, 'handle_request_submission']);
        }

        /**
         * Check rate limiting per IP address using Transients.
         */
        private function is_rate_limited(string $action_name, int $limit_seconds = 60): bool {
            $ip = sanitize_text_field($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');
            $transient_key = 'tamin_rl_' . md5($action_name . '_' . $ip);

            if (get_transient($transient_key)) {
                return true;
            }

            set_transient($transient_key, true, $limit_seconds);
            return false;
        }

        /**
         * Handle Contact Us Form AJAX Submission.
         */
        public function handle_contact_submission(): void {
            // Honeypot Bot Detection
            if (!empty($_POST['website_hp'])) {
                wp_send_json_error(['message' => __('درخواست اسپم شناسایی شد.', 'tamin-theme')], 400);
            }

            // Nonce Check
            if (!isset($_POST['nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['nonce'])), 'tamin_nonce')) {
                wp_send_json_error(['message' => __('اعتبارسنجی امنیتی با خطا مواجه شد. لطفاً صفحه را تازه‌سازی کنید.', 'tamin-theme')], 403);
            }

            // Rate Limit Check
            if ($this->is_rate_limited('contact', 60)) {
                wp_send_json_error(['message' => __('تعداد درخواست‌های شما زیاد است. لطفاً یک دقیقه صبر کرده و مجدداً تلاش کنید.', 'tamin-theme')], 429);
            }

            // Sanitize Fields
            $fullname = sanitize_text_field(wp_unslash($_POST['fullname'] ?? ''));
            $phone    = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
            $email    = sanitize_email(wp_unslash($_POST['email'] ?? ''));
            $subject  = sanitize_text_field(wp_unslash($_POST['subject'] ?? ''));
            $message  = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

            if (empty($fullname) || empty($phone) || empty($message)) {
                wp_send_json_error(['message' => __('لطفاً تمامی فیلدهای اجباری را تکمیل فرمایید.', 'tamin-theme')], 400);
            }

            // Save Entry to Options Log
            $log = get_option('tamin_contact_submissions', []);
            $entry = [
                'time'     => current_time('mysql'),
                'fullname' => $fullname,
                'phone'    => $phone,
                'email'    => $email,
                'subject'  => $subject,
                'message'  => $message,
            ];
            $log[] = $entry;
            update_option('tamin_contact_submissions', array_slice($log, -100));

            // Send Email Notification to Admin
            $admin_email = get_option('admin_email');
            $mail_subject = 'پیام جدید از فرم تماس با ما: ' . $fullname;
            $mail_body    = "نام: {$fullname}\nتلفن: {$phone}\nایمیل: {$email}\nموضوع: {$subject}\n\nمتن پیام:\n{$message}";
            @wp_mail($admin_email, $mail_subject, $mail_body, ['Content-Type: text/plain; charset=UTF-8']);

            // Return Success Response
            wp_send_json_success([
                'message' => __('پیام شما با موفقیت دریافت شد. کارشناسان مرکز نوژین به‌زودی با شما تماس خواهند گرفت.', 'tamin-theme')
            ]);
        }

        /**
         * Handle Donation Booking Request AJAX Submission.
         */
        public function handle_request_submission(): void {
            // Honeypot Bot Detection
            if (!empty($_POST['website_hp'])) {
                wp_send_json_error(['message' => __('درخواست اسپم شناسایی شد.', 'tamin-theme')], 400);
            }

            // Nonce Check
            if (!isset($_POST['nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['nonce'])), 'tamin_nonce')) {
                wp_send_json_error(['message' => __('اعتبارسنجی امنیتی با خطا مواجه شد.', 'tamin-theme')], 403);
            }

            // Rate Limit Check
            if ($this->is_rate_limited('request', 60)) {
                wp_send_json_error(['message' => __('تعداد درخواست‌های شما بیش از حد مجاز است. لطفاً یک دقیقه دیگر تلاش کنید.', 'tamin-theme')], 429);
            }

            // Sanitize Fields
            $name   = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
            $phone  = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
            $center = sanitize_text_field(wp_unslash($_POST['center'] ?? ''));
            $age    = sanitize_text_field(wp_unslash($_POST['age'] ?? 'yes'));
            $weight = sanitize_text_field(wp_unslash($_POST['weight'] ?? 'yes'));

            if (empty($name) || empty($phone)) {
                wp_send_json_error(['message' => __('لطفاً نام و شماره تلفن همراه خود را وارد کنید.', 'tamin-theme')], 400);
            }

            // Save Entry to Options Log
            $log = get_option('tamin_request_submissions', []);
            $tracking_code = 'NOZHIN-' . rand(100000, 999999);
            $entry = [
                'code'   => $tracking_code,
                'time'   => current_time('mysql'),
                'name'   => $name,
                'phone'  => $phone,
                'center' => $center,
                'age'    => $age,
                'weight' => $weight,
            ];
            $log[] = $entry;
            update_option('tamin_request_submissions', array_slice($log, -100));

            // Send Email Notification to Admin
            $admin_email  = get_option('admin_email');
            $mail_subject = 'ثبت نوبت اهدا جدید - کد: ' . $tracking_code;
            $mail_body    = "کد پیگیری: {$tracking_code}\nنام: {$name}\nتلفن: {$phone}\nمرکز: {$center}\nشرایط سنی: {$age}\nوزن: {$weight}";
            @wp_mail($admin_email, $mail_subject, $mail_body, ['Content-Type: text/plain; charset=UTF-8']);

            // Return Success Response
            wp_send_json_success([
                'message'       => __('نوبت اهدای شما با موفقیت در سیستم ثبت شد.', 'tamin-theme'),
                'tracking_code' => $tracking_code,
            ]);
        }
    }

    new Tamin_Form_Handler();
}
