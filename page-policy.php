<?php
/**
 * Template Name: خط مشی و بیانیه (Policy & Privacy)
 * Description: Custom page template for Quality Policy & Corporate Vision.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="w-full bg-[var(--color-bg-base)] min-h-screen font-sans overflow-x-hidden relative" dir="rtl">

    <!-- 1. HERO SECTION -->
    <header class="w-full pt-28 pb-16 text-center relative overflow-visible">
        <div class="absolute left-1/2 -translate-x-1/2 top-10 pointer-events-none select-none z-0">
            <span class="font-black text-7xl lg:text-9xl text-neutral-200/30 whitespace-nowrap tracking-[0.2em]"><?php esc_html_e('نوژین', 'tamin-theme'); ?></span>
        </div>
        
        <div class="max-w-screen-xl mx-auto px-6 relative z-10 space-y-6">
            <div class="inline-flex items-center gap-2">
                <span class="text-[10px] bg-white px-4 py-1.5 rounded-full text-[var(--color-text-muted)] border border-neutral-200/50 shadow-sm font-bold tracking-wider">
                    <?php esc_html_e('آخرین به‌روزرسانی: ۱۴۰۵', 'tamin-theme'); ?>
                </span>
            </div>
            
            <h1 class="font-black text-3xl md:text-5xl lg:text-6xl text-[var(--color-text-main)] leading-tight tracking-tight">
                <?php esc_html_e('خط مشی کیفیت و بیانیه سازمانی', 'tamin-theme'); ?>
            </h1>
            
            <p class="text-base md:text-lg text-[var(--color-text-muted)] max-w-2xl mx-auto leading-loose font-medium">
                <?php esc_html_e('تعهد به استانداردهای بین‌المللی بیوتکنولوژی و صیانت از سلامت اهداکنندگان؛ منشور راهبردی ما در مسیر حیات.', 'tamin-theme'); ?>
            </p>
        </div>
    </header>

    <!-- 2. BENTO GRID -->
    <section class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-stretch my-10">
        <div class="md:col-span-8 bg-white border border-neutral-200/50 rounded-[2.5rem] p-8 lg:p-10 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between relative overflow-hidden group">
            <div class="space-y-6">
                <div class="w-12 h-12 rounded-2xl bg-[var(--color-bg-base)] flex items-center justify-center text-primary shadow-inner">
                    <i class="fa-solid fa-shield-halved text-xl"></i>
                </div>
                <h2 class="font-black text-2xl lg:text-3xl text-[var(--color-text-main)]"><?php esc_html_e('تضمین ایمنی و اصالت سلولی', 'tamin-theme'); ?></h2>
                <p class="text-neutral-600 text-sm md:text-base lg:text-lg leading-relaxed text-justify max-w-3xl">
                    <?php esc_html_e('ما با بهره‌گیری از تکنولوژی‌های پیشرفته غربالگری و سیستم‌های مکانیزه جمع‌آوری، تضمین می‌کنیم که هر واحد پلاسما با بالاترین ضریب اطمینان و در شرایط کاملاً ایزوله تهیه شود.', 'tamin-theme'); ?>
                </p>
            </div>
        </div>

        <div class="md:col-span-4 bg-[var(--color-bg-surface)]/50 border border-neutral-200/50 rounded-[2.5rem] p-8 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between relative overflow-hidden group">
            <div class="space-y-6">
                <h3 class="font-black text-xl text-[var(--color-text-main)] flex items-center gap-3">
                    <?php esc_html_e('استاندارد جهانی GMP', 'tamin-theme'); ?>
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.5)]"></span>
                </h3>
                <ul class="space-y-4 text-xs md:text-sm text-neutral-500 font-medium">
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-check text-primary"></i>
                        <?php esc_html_e('تطبیق ۱۰۰٪ با پروتکل‌های FDA', 'tamin-theme'); ?>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-check text-primary"></i>
                        <?php esc_html_e('زنجیره سرد هوشمند (Cold Chain)', 'tamin-theme'); ?>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-check text-primary"></i>
                        <?php esc_html_e('ردیابی دیجیتال هر قطره پلاسما', 'tamin-theme'); ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 3. ARTICLE CONTENT -->
    <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start my-16">
        <article class="lg:col-span-8 space-y-16 text-right order-last lg:order-first">
            <section id="section-1" class="space-y-8">
                <div class="border-r-4 border-[var(--color-primary)] pr-4">
                    <h2 class="font-black text-xl lg:text-2xl text-[var(--color-text-main)]"><?php esc_html_e('اصول بنیادی کیفیت در تامین پلاسما', 'tamin-theme'); ?></h2>
                </div>
                <div class="text-neutral-700 text-base md:text-lg leading-[2] space-y-6 text-justify">
                    <p><?php esc_html_e('شرکت تامین پلاسما نوژین با درک عمیق از ماهیت بیولوژیک پلاسما، استانداردهای خود را فراتر از الزامات قانونی تعریف کرده است. ما معتقدیم که کیفیت در این صنعت، نه یک انتخاب، بلکه یک ضرورت حیاتی برای حفظ جان هزاران بیماری است که به داروهای مشتق از پلاسما وابسته هستند.', 'tamin-theme'); ?></p>
                </div>
            </section>
        </article>

        <aside class="lg:col-span-4 lg:sticky lg:top-28 hidden lg:block">
            <nav class="bg-white/40 backdrop-blur-xl border border-white/60 p-5 rounded-[2.5rem] shadow-sm space-y-2">
                <a href="#section-1" class="flex items-center gap-3 px-5 py-3.5 rounded-2xl bg-white shadow-sm border border-neutral-100 text-[var(--color-secondary)] font-black text-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    <?php esc_html_e('اصول بنیادی کیفیت', 'tamin-theme'); ?>
                </a>
            </nav>
        </aside>
    </div>
</main>

<?php
get_footer();
