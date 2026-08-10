<?php
/**
 * Template Name: راهنمای اهدای پلاسما (Plasma Info)
 * Description: Custom page template for Plasma Donation Info & Calculator.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="min-h-screen bg-[var(--color-bg-base)] overflow-x-hidden pb-12 relative" dir="rtl">
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(30,41,59,0.04) 1.5px, transparent 1.5px); background-size: 28px 28px;"></div>
    
    <!-- HERO SECTION -->
    <section class="w-full pt-12 pb-4 lg:pt-16 lg:pb-6 relative overflow-hidden z-10">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 flex flex-col items-start text-right space-y-7 animate-on-scroll opacity-0 translate-y-12">
                    <div>
                        <span class="inline-flex items-center gap-2 px-4.5 py-2.5 rounded-full bg-white border border-[var(--color-border-neutral-200)]/60 text-[var(--color-text-main)] text-sm font-bold shadow-sm mb-5">
                            <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                            <?php esc_html_e('اهدای زندگی و خدمت به جامعه', 'tamin-theme'); ?>
                        </span>
                        <h1 class="text-[var(--color-text-main)] font-black text-3.5xl md:text-4.5xl lg:text-6.5xl leading-tight">
                            <?php esc_html_e('اهدای پلاسما؛', 'tamin-theme'); ?>
                            <span class="block text-primary mt-3"><?php esc_html_e('هدیه‌ای از جنس امید و حیات', 'tamin-theme'); ?></span>
                        </h1>
                    </div>
                    
                    <p class="leading-loose text-[var(--color-text-muted)] text-sm md:text-base max-w-xl text-justify">
                        <?php esc_html_e('با اهدای پلاسما، شما فقط یک ماده زیستی ارزش‌مند نمی‌بخشید؛ بلکه به هزاران بیمار مبتلا به بیماری‌های نادر، هموفیلی و نقص ایمنی، شانس دوباره‌ای برای خندیدن و زندگی کردن هدیه می‌دهید.', 'tamin-theme'); ?>
                    </p>
                    
                    <div class="flex flex-wrap items-center gap-4 pt-2 w-full md:w-auto">
                        <a href="<?php echo esc_url(home_url('/request')); ?>" class="w-full md:w-auto inline-flex items-center justify-center gap-3 bg-primary text-[var(--color-text-main)] font-black px-10 py-4.5 rounded-full text-base transition-all duration-300 hover:scale-105 shadow-md">
                            <span><?php esc_html_e('نوبت‌دهی آنلاین اهدا', 'tamin-theme'); ?></span>
                            <i class="fa-solid fa-arrow-left text-xs"></i>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6 w-full animate-on-scroll opacity-0 translate-y-12 delay-200 relative">
                    <div class="w-full aspect-[4/3] lg:aspect-[1.2] rounded-[3rem] overflow-hidden relative border border-[var(--color-border-neutral-300)] bg-[var(--color-bg-surface)] shadow-lg">
                        <img src="<?php echo esc_url(tamin_img_url('plasmaoo.webp')); ?>" alt="<?php esc_attr_e('اهدای پلاسما', 'tamin-theme'); ?>" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
