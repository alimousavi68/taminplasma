<?php
/**
 * Main Template File (WordPress Standard Fallback)
 *
 * @package TaminTheme
 * @version 2.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<main dir="rtl" class="bg-[var(--color-bg-base)] min-h-screen py-12 lg:py-20 font-sans">
    <div class="container mx-auto px-4 lg:max-w-[1170px]">
        
        <header class="text-center mb-12 space-y-4">
            <span class="inline-block px-4 py-1.5 rounded-full bg-white text-[var(--color-text-main)] text-xs font-bold border border-neutral-200 shadow-sm">
                <?php esc_html_e('اخبار و مقالات نوژین', 'tamin-theme'); ?>
            </span>
            <h1 class="text-3xl lg:text-5xl font-black text-neutral-900 leading-tight">
                <?php 
                if (is_home() && !is_front_page()) {
                    single_post_title();
                } else {
                    esc_html_e('آخرین نوشته‌ها و مطالب علمی', 'tamin-theme');
                }
                ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post/content-card'); ?>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <?php
                the_posts_pagination([
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fa-solid fa-chevron-right text-xs"></i> ' . __('قبلی', 'tamin-theme'),
                    'next_text' => __('بعدی', 'tamin-theme') . ' <i class="fa-solid fa-chevron-left text-xs"></i>',
                    'class'     => 'flex items-center gap-2 text-sm font-bold',
                ]);
                ?>
            </div>
        <?php else : ?>
            <div class="bg-white rounded-3xl p-12 text-center border border-neutral-200/80 shadow-sm space-y-4 max-w-xl mx-auto">
                <div class="w-16 h-16 rounded-full bg-neutral-100 flex items-center justify-center mx-auto text-neutral-400 text-2xl">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <h2 class="text-xl font-black text-neutral-900"><?php esc_html_e('مطلبی یافت نشد', 'tamin-theme'); ?></h2>
                <p class="text-neutral-600 text-sm leading-relaxed">
                    <?php esc_html_e('در حال حاضر نوشته‌ای در این بخش منتشر نشده است. لطفاً بعداً مراجعه کنید.', 'tamin-theme'); ?>
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-2 bg-primary text-neutral-900 font-bold px-6 py-3 rounded-full text-xs hover:brightness-110 transition-all shadow-sm">
                    <?php esc_html_e('بازگشت به صفحه اصلی', 'tamin-theme'); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
