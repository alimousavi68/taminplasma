<?php
/**
 * Template Name: تماس با ما (Contact & FAQ)
 * Description: Custom page template for Contact Us and FAQ page.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="min-h-screen bg-[var(--color-bg-base)] py-8" dir="rtl">
    <?php get_template_part('template-parts/faq-contact'); ?>
</main>

<?php
get_footer();
