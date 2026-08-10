<?php
/**
 * Theme Customizer Options with Accordion Panels & Global Controls
 *
 * @package TaminTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

if (!function_exists('tamin_customize_register')) {

    function tamin_customize_register(WP_Customize_Manager $wp_customize): void {

        // Selective Refresh & PostMessage
        $wp_customize->get_setting('blogname')->transport        = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

        // 1. MAIN PANEL: Tamin Theme Options
        $wp_customize->add_panel('tamin_theme_options', [
            'priority'    => 10,
            'title'       => __('تنظیمات پویا قالب تامین پلاسما', 'tamin-theme'),
            'description' => __('مدیریت متون، اطلاعات تماس، شبکه‌های اجتماعی و برندینگ قالب نوژین', 'tamin-theme'),
        ]);

        // SECTION 1: Header & Top Bar Settings
        $wp_customize->add_section('tamin_header_section', [
            'title'    => __('تنظیمات هدر و نوارهای بالا', 'tamin-theme'),
            'panel'    => 'tamin_theme_options',
            'priority' => 10,
        ]);

        // Topbar Notice
        $wp_customize->add_setting('tamin_topbar_notice', [
            'default'           => __('مرکز تامین پلاسما نوژین | اهداکنندگان، سرمایه‌های معنوی و حیات‌بخش کشور', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_topbar_notice', [
            'label'    => __('متن اعلان نوار بالایی هدر', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        // Header Phone Number
        $wp_customize->add_setting('tamin_phone_number', [
            'default'           => '۰۲۱-۴۹۳۶۱۳۱۸',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_phone_number', [
            'label'    => __('شماره تلفن پشتیبانی هدر', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        // Header Work Hours
        $wp_customize->add_setting('tamin_work_hours', [
            'default'           => __('شنبه تا پنج‌شنبه: ۸:۰۰ الی ۲۰:۰۰', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_work_hours', [
            'label'    => __('ساعات کاری مرکز', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        // Header CTA Text & URL
        $wp_customize->add_setting('tamin_cta_button_text', [
            'default'           => __('درخواست نوبت اهدا', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_cta_button_text', [
            'label'    => __('متن دکمه درخواست اهدا', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        $wp_customize->add_setting('tamin_cta_button_url', [
            'default'           => '/request',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_cta_button_url', [
            'label'    => __('لینک دکمه درخواست اهدا', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'url',
        ]);

        // SECTION 2: Footer & Contact Settings
        $wp_customize->add_section('tamin_footer_section', [
            'title'    => __('تنظیمات فوتر و ارتباطات', 'tamin-theme'),
            'panel'    => 'tamin_theme_options',
            'priority' => 20,
        ]);

        // Footer About Text
        $wp_customize->add_setting('tamin_footer_about', [
            'default'           => __('مرکز تامین پلاسما نوژین، با بهره‌گیری از تکنولوژی‌های روز دنیا و کادری متخصص، متعهد به تامین فرآورده‌های پلاسمایی با کیفیت برای نجات جان بیماران و ارتقای سلامت جامعه است.', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);
        $wp_customize->add_control('tamin_footer_about', [
            'label'    => __('متن معرفی کوتاه فوتر', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'textarea',
        ]);

        // Footer Address
        $wp_customize->add_setting('tamin_footer_address', [
            'default'           => __('تهران، خیابان ولیعصر، بالاتر از میدان ونک، پلاک ۱۹۳۶', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_footer_address', [
            'label'    => __('آدرس متنی در فوتر', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'text',
        ]);

        // Social Networks
        $wp_customize->add_setting('tamin_social_telegram', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_telegram', [
            'label'    => __('لینک تلگرام', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        $wp_customize->add_setting('tamin_social_instagram', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_instagram', [
            'label'    => __('لینک اینستاگرام', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        $wp_customize->add_setting('tamin_social_linkedin', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_linkedin', [
            'label'    => __('لینک لینکدین', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        $wp_customize->add_setting('tamin_social_aparat', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_aparat', [
            'label'    => __('لینک آپارات', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        // SECTION 3: Branding Colors
        $wp_customize->add_section('tamin_colors_section', [
            'title'    => __('تنظیمات رنگ‌بندی و برندینگ', 'tamin-theme'),
            'panel'    => 'tamin_theme_options',
            'priority' => 30,
        ]);

        $wp_customize->add_setting('tamin_primary_color', [
            'default'           => '#eaa824',
            'sanitize_callback' => 'sanitize_hex_color',
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tamin_primary_color', [
            'label'    => __('رنگ اصلی برند (Primary Yellow/Gold)', 'tamin-theme'),
            'section'  => 'tamin_colors_section',
        ]));

        $wp_customize->add_setting('tamin_secondary_color', [
            'default'           => '#172635',
            'sanitize_callback' => 'sanitize_hex_color',
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tamin_secondary_color', [
            'label'    => __('رنگ ثانویه برند (Dark Blue/Navy)', 'tamin-theme'),
            'section'  => 'tamin_colors_section',
        ]));
    }
}
add_action('customize_register', 'tamin_customize_register');
