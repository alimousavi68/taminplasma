<?php
/**
 * 404 Error Page Template
 *
 * @package TaminTheme
 * @version 2.0.0
 */

defined('ABSPATH') || exit;

get_header();
?>

<main dir="rtl" class="bg-[var(--color-bg-base)] min-h-[75vh] flex items-center justify-center py-16 px-6 font-sans relative overflow-hidden">
    <!-- Decorative background blurs -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="max-w-md w-full bg-white border border-neutral-200/80 rounded-[3rem] p-8 lg:p-12 text-center shadow-lg space-y-6 relative z-10">
        <!-- 404 Badge & Icon -->
        <div class="relative inline-block">
            <span class="text-7xl lg:text-9xl font-black text-neutral-900/10 tracking-widest block select-none">404</span>
            <div class="w-16 h-16 rounded-2xl bg-primary/20 text-neutral-900 flex items-center justify-center text-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 shadow-inner border border-primary/30">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
        </div>

        <div class="space-y-3">
            <h1 class="text-2xl lg:text-3xl font-black text-neutral-900"><?php esc_html_e('صفحه مورد نظر یافت نشد!', 'tamin-theme'); ?></h1>
            <p class="text-neutral-600 text-xs md:text-sm leading-relaxed text-justify">
                <?php esc_html_e('متأسفانه آدرسی که به دنبال آن هستید تغییر یافته یا به طور کامل حذف شده است. می‌توانید از فرم زیر برای جستجو یا دکمه بازگشت استفاده کنید.', 'tamin-theme'); ?>
            </p>
        </div>

        <!-- Search Form -->
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative">
            <input type="search" name="s" placeholder="<?php esc_attr_e('جستجو در سایت...', 'tamin-theme'); ?>" class="w-full px-5 py-3.5 rounded-full bg-neutral-100 border border-transparent focus:border-primary focus:bg-white focus:outline-none transition-all text-xs font-medium pl-12" required>
            <button type="submit" class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-primary text-neutral-900 flex items-center justify-center text-xs hover:brightness-110 transition-all cursor-pointer" aria-label="<?php esc_attr_e('جستجو', 'tamin-theme'); ?>">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>

        <div class="pt-2">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-2 bg-primary hover:bg-[var(--color-primary-dark)] text-neutral-900 font-bold px-8 py-3.5 rounded-full text-xs transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                <i class="fa-solid fa-house text-xs"></i>
                <span><?php esc_html_e('بازگشت به صفحه اصلی', 'tamin-theme'); ?></span>
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
