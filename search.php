<?php
/**
 * Search Results Template
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
                <?php esc_html_e('نتایج جستجو', 'tamin-theme'); ?>
            </span>
            <h1 class="text-2xl lg:text-4xl font-black text-neutral-900 leading-tight">
                <?php printf(esc_html__('نتایج جستجو برای: «%s»', 'tamin-theme'), '<span class="text-primary-dark">' . esc_html(get_search_query()) . '</span>'); ?>
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
                <div class="w-16 h-16 rounded-full bg-rose-50 text-rose-500 flex items-center justify-center mx-auto text-2xl border border-rose-100">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h2 class="text-xl font-black text-neutral-900"><?php esc_html_e('نتیجه‌ای پیدا نشد', 'tamin-theme'); ?></h2>
                <p class="text-neutral-600 text-sm leading-relaxed">
                    <?php esc_html_e('متأسفانه هیچ مطلبی مطابق با کلمه کلیدی جستجوشده یافت نشد. می‌توانید دوباره با واژه دیگری جستجو کنید.', 'tamin-theme'); ?>
                </p>
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative max-w-md mx-auto pt-2">
                    <input type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php esc_attr_e('جستجو مجدد...', 'tamin-theme'); ?>" class="w-full px-5 py-3.5 rounded-full bg-neutral-100 border border-transparent focus:border-primary focus:bg-white focus:outline-none transition-all text-xs font-medium pl-12" required>
                    <button type="submit" class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-primary text-neutral-900 flex items-center justify-center text-xs hover:brightness-110 transition-all cursor-pointer">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
