<?php
/**
 * Dynamic Front Page Template
 *
 * @package TaminTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

get_header();

// 1. Hero Section
get_template_part('template-parts/front-page/hero');

// 2. About Plasma Section & Counter Stats
get_template_part('template-parts/front-page/about');

// 3. Donation Conditions Grid & Details
get_template_part('template-parts/front-page/conditions');

// 4. Plasma Donation Journey Timeline
get_template_part('template-parts/front-page/journey');

// 5. Conversion Zone (FAQ & Testimonials & CTA)
get_template_part('template-parts/front-page/faq');

// 6. News & Articles Swiper Carousel
get_template_part('template-parts/front-page/blog');

get_footer();
