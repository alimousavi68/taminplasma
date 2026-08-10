<?php
/**
 * Default Page Template
 *
 * @package TaminTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="w-full bg-[var(--color-bg-base)] min-h-screen py-12 lg:py-20 font-sans" dir="rtl">
  <div class="container mx-auto px-4 lg:max-w-[1170px]">
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-3xl p-8 lg:p-12 shadow-sm border border-neutral-200/80'); ?>>
        <header class="border-b border-neutral-100 pb-6 mb-8">
          <h1 class="text-2xl lg:text-4xl font-black text-neutral-900 leading-tight"><?php the_title(); ?></h1>
        </header>

        <div class="prose max-w-none text-neutral-700 leading-relaxed space-y-6">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php
get_footer();
