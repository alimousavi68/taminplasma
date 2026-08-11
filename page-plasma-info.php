<?php
/**
 * Template Name: راهنمای اهدای پلاسما (Plasma Info)
 * Description: Custom page template for Plasma Donation Info & Calculator.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();

// Helper to get meta safely
$meta = get_post_meta(get_the_ID());
$get_val = function($key) use ($meta) {
    return isset($meta[$key]) && !empty($meta[$key][0]) ? $meta[$key][0] : '';
};

// Hero Settings
$hero_badge = $get_val('_tamin_hero_badge');
$hero_title = $get_val('_tamin_hero_custom_title');
$hero_desc = $get_val('_tamin_hero_custom_desc');
$hero_btn1_text = $get_val('_tamin_hero_btn1_text');
$hero_btn1_url = $get_val('_tamin_hero_btn1_url');
$hero_btn2_text = $get_val('_tamin_hero_btn2_text');
$hero_btn2_url = $get_val('_tamin_hero_btn2_url');
$hero_image = $get_val('_tamin_hero_image');

// Benefits Settings
$benefits_title = $get_val('_tamin_benefits_title');
$benefits_json = $get_val('_tamin_benefits_list');
$benefits = $benefits_json ? json_decode($benefits_json, true) : [];
if (!is_array($benefits)) $benefits = [];

// Calculator Settings
$calc_badge = $get_val('_tamin_calc_badge');
$calc_title = $get_val('_tamin_calc_title');
$calc_desc = $get_val('_tamin_calc_desc');
$coef_lives = (float) $get_val('_tamin_calc_coef_lives');
$coef_volume = (float) $get_val('_tamin_calc_coef_volume');
$coef_cals = (float) $get_val('_tamin_calc_coef_cals');

// Timeline Settings
$timeline_badge = $get_val('_tamin_timeline_badge');
$timeline_title = $get_val('_tamin_timeline_title');
$timeline_desc = $get_val('_tamin_timeline_desc');
$timeline_json = $get_val('_tamin_timeline_list');
$timeline = $timeline_json ? json_decode($timeline_json, true) : [];
if (!is_array($timeline)) $timeline = [];

// FAQ Settings
$faq_badge = $get_val('_tamin_faq_badge');
$faq_title = $get_val('_tamin_faq_title');
$faq_json = $get_val('_tamin_faq_list');
$faq = $faq_json ? json_decode($faq_json, true) : [];
if (!is_array($faq)) $faq = [];

?>

<!-- 🎨 Dynamic Theme Variables Overrides & Component Styling -->
<style>
input[type="range"]::-webkit-slider-thumb {
  appearance: none;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: var(--color-primary);
  cursor: pointer;
  border: 3px solid #fff;
  box-shadow: 0 4px 15px rgba(255, 217, 112, 0.45);
  transition: transform 0.15s ease-in-out;
}
input[type="range"]::-webkit-slider-thumb:hover {
  transform: scale(1.25);
}
input[type="range"]::-moz-range-thumb {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: var(--color-primary);
  cursor: pointer;
  border: 3px solid #fff;
  box-shadow: 0 4px 15px rgba(255, 217, 112, 0.45);
  transition: transform 0.15s ease-in-out;
}
input[type="range"]::-moz-range-thumb:hover {
  transform: scale(1.25);
}
.faq-row.active .faq-content-wrapper {
  grid-template-rows: 1fr;
}
.timeline-fade-enter {
  opacity: 0;
  transform: translateY(10px);
  transition: opacity 0.3s ease-out, transform 0.3s ease-out;
}
.timeline-fade-active {
  opacity: 1;
  transform: translateY(0);
}
</style>

<main class="min-h-screen bg-[var(--color-bg-base)] overflow-x-hidden pb-12 relative" dir="rtl">
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(30,41,59,0.04) 1.5px, transparent 1.5px); background-size: 28px 28px;"></div>
    <div class="absolute top-[5%] left-[5%] w-[45vw] h-[45vw] rounded-full bg-primary/4 blur-[130px] pointer-events-none z-0"></div>
    <div class="absolute top-[35%] right-[5%] w-[40vw] h-[40vw] rounded-full bg-[var(--color-secondary)]/3 blur-[110px] pointer-events-none z-0"></div>

    <?php if ($get_val('_tamin_hero_show', '1') === '1') : ?>
    <!-- 1. HERO SECTION -->
    <section class="w-full pt-12 pb-4 lg:pt-16 lg:pb-6 relative overflow-hidden z-10">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 flex flex-col items-start text-right space-y-7 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div>
                        <span class="inline-flex items-center gap-2 px-4.5 py-2.5 rounded-full bg-white border border-[var(--color-border-neutral-200)]/60 text-[var(--color-text-main)] text-sm font-bold shadow-sm mb-5">
                            <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                            <?php echo esc_html($hero_badge); ?>
                        </span>
                        <h1 class="text-[var(--color-text-main)] font-black text-3.5xl md:text-4.5xl lg:text-6.5xl leading-tight">
                            <?php echo wp_kses_post($hero_title); ?>
                        </h1>
                    </div>
                    
                    <p class="leading-loose text-[var(--color-text-muted)] text-sm md:text-base max-w-xl text-justify">
                        <?php echo esc_html($hero_desc); ?>
                    </p>
                    
                    <div class="flex flex-wrap items-center gap-4 pt-2 w-full md:w-auto">
                        <a href="<?php echo esc_url($hero_btn1_url); ?>" class="w-full md:w-auto inline-flex items-center justify-center gap-3 bg-primary text-[var(--color-text-main)] font-black px-10 py-4.5 rounded-full text-base transition-all duration-300 hover:scale-105 hover:shadow-[0_8px_25px_-5px_rgba(255,217,112,0.4)] group">
                            <span><?php echo esc_html($hero_btn1_text); ?></span>
                            <i class="fa-solid fa-arrow-left text-xs transition-transform duration-300 group-hover:-translate-x-1"></i>
                        </a>
                        <a href="<?php echo esc_url($hero_btn2_url); ?>" class="w-full md:w-auto inline-flex items-center justify-center gap-2.5 bg-white/70 hover:bg-white text-[var(--color-text-muted)] hover:text-[var(--color-text-main)] font-bold px-8 py-4.5 rounded-full text-sm border border-[var(--color-border-neutral-200)] transition-all duration-300 hover:-translate-y-0.5">
                            <span><?php echo esc_html($hero_btn2_text); ?></span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6 w-full animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200 relative">
                    <div class="w-full aspect-[4/3] lg:aspect-[1.2] rounded-[3rem] overflow-hidden relative border border-[var(--color-border-neutral-300)] bg-[var(--color-bg-surface)] shadow-lg">
                        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('اهدای پلاسما', 'tamin-theme'); ?>" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($benefits_title) || !empty($benefits)) : ?>
    <!-- 2. WHY DONATE -->
    <section class="w-full py-20 lg:py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-4 lg:max-w-[1170px] relative z-10">
            <?php if (!empty($benefits_title)) : ?>
            <div class="flex items-center justify-start gap-3 mb-10 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center text-primary shrink-0">
                    <i class="fa-solid fa-heart font-extrabold text-base"></i>
                </div>
                <h2 class="text-neutral-900 font-black text-[22px] lg:text-[28px] leading-tight tracking-tight"><?php echo esc_html($benefits_title); ?></h2>
            </div>
            <?php endif; ?>

            <?php if (!empty($benefits)) : ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($benefits as $index => $benefit) : ?>
                <div class="bg-surface-warm text-neutral-900 rounded-[1.75rem] p-8 flex flex-col items-start justify-between cursor-pointer transition-all duration-300 group hover:bg-primary hover:-translate-y-1.5 hover:shadow-xl min-h-[220px] text-right animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 <?php echo $index > 0 ? 'delay-'.($index*100) : ''; ?>">
                    <div class="w-14 h-14 rounded-2xl bg-white text-neutral-900 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fa-solid <?php echo esc_attr($benefit['icon'] ?? ''); ?> text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3"><?php echo esc_html($benefit['title'] ?? ''); ?></h3>
                        <p class="text-neutral-700 text-sm leading-loose text-justify font-normal">
                            <?php echo esc_html($benefit['desc'] ?? ''); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($calc_title) || !empty($calc_desc)) : ?>
    <!-- 3. CALCULATOR WIDGET -->
    <section id="calculator-section" class="w-full px-6 py-6 relative z-10">
        <div class="max-w-7xl mx-auto my-4 bg-white/80 backdrop-blur-xl border border-[var(--color-border-neutral-200)] rounded-[3rem] p-8 lg:p-14 shadow-sm animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
                <!-- Inputs -->
                <div class="lg:col-span-5 space-y-8 flex flex-col justify-center order-1 lg:order-none">
                    <div class="space-y-4">
                        <?php if (!empty($calc_badge)) : ?>
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 text-xs font-bold text-[var(--color-primary-dark)] bg-primary/10 rounded-full border border-[var(--color-primary)]/20">
                            <i class="fa-solid fa-calculator text-[10px]"></i>
                            <?php echo esc_html($calc_badge); ?>
                        </span>
                        <?php endif; ?>
                        <?php if (!empty($calc_title)) : ?>
                        <h2 class="text-2.5xl lg:text-3.5xl font-black text-[var(--color-text-main)]"><?php echo esc_html($calc_title); ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($calc_desc)) : ?>
                        <p class="text-[var(--color-text-muted)] text-sm md:text-base leading-relaxed text-justify"><?php echo esc_html($calc_desc); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="space-y-10 pt-4">
                        <!-- Weight -->
                        <div class="space-y-4 relative pb-2">
                            <div class="flex justify-between items-center">
                                <label class="text-sm md:text-base font-bold text-[var(--color-text-main)]"><?php esc_html_e('وزن شما (کیلوگرم)', 'tamin-theme'); ?></label>
                            </div>
                            <div class="relative pt-8 px-1">
                                <div id="weight-badge-container" class="absolute top-0 transform translate-x-1/2 transition-all duration-75 pointer-events-none">
                                    <span class="bg-primary text-[var(--color-text-main)] font-black text-xs px-3.5 py-1.5 rounded-full shadow-md relative block border border-white/20">
                                        <span id="weight-val">77</span>
                                        <span class="absolute bottom-[-3px] left-1/2 -translate-x-1/2 w-2 h-2 bg-primary rotate-45"></span>
                                    </span>
                                </div>
                                <input type="range" id="weight-slider" min="50" max="120" value="77" class="appearance-none w-full h-2 bg-[var(--color-bg-lighter)] rounded-full outline-none accent-[var(--color-primary)] cursor-pointer">
                            </div>
                        </div>
                        <!-- Frequency -->
                        <div class="space-y-4 relative pb-2">
                            <div class="flex justify-between items-center">
                                <label class="text-sm md:text-base font-bold text-[var(--color-text-main)]"><?php esc_html_e('دفعات اهدا در ماه', 'tamin-theme'); ?></label>
                            </div>
                            <div class="relative pt-8 px-1">
                                <div id="freq-badge-container" class="absolute top-0 transform translate-x-1/2 transition-all duration-75 pointer-events-none">
                                    <span class="bg-primary text-[var(--color-text-main)] font-black text-xs px-3.5 py-1.5 rounded-full shadow-md relative block border border-white/20">
                                        <span id="freq-val">2</span>
                                        <span class="absolute bottom-[-3px] left-1/2 -translate-x-1/2 w-2 h-2 bg-primary rotate-45"></span>
                                    </span>
                                </div>
                                <input type="range" id="freq-slider" min="1" max="4" value="2" class="appearance-none w-full h-2 bg-[var(--color-bg-lighter)] rounded-full outline-none accent-[var(--color-primary)] cursor-pointer">
                            </div>
                        </div>
                        <!-- Months -->
                        <div class="space-y-4 relative pb-2">
                            <div class="flex justify-between items-center">
                                <label class="text-sm md:text-base font-bold text-[var(--color-text-main)]"><?php esc_html_e('مدت همراهی (ماه)', 'tamin-theme'); ?></label>
                            </div>
                            <div class="relative pt-8 px-1">
                                <div id="months-badge-container" class="absolute top-0 transform translate-x-1/2 transition-all duration-75 pointer-events-none">
                                    <span class="bg-primary text-[var(--color-text-main)] font-black text-xs px-3.5 py-1.5 rounded-full shadow-md relative block border border-white/20">
                                        <span id="months-val">6</span>
                                        <span class="absolute bottom-[-3px] left-1/2 -translate-x-1/2 w-2 h-2 bg-primary rotate-45"></span>
                                    </span>
                                </div>
                                <input type="range" id="months-slider" min="1" max="12" value="6" class="appearance-none w-full h-2 bg-[var(--color-bg-lighter)] rounded-full outline-none accent-[var(--color-primary)] cursor-pointer">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Outputs -->
                <div class="lg:col-span-4 bg-white/90 border-2 border-[var(--color-primary)] rounded-[2.5rem] p-8 flex flex-col justify-center gap-6 shadow-md relative overflow-hidden order-2 lg:order-none">
                    <div class="absolute top-0 left-0 w-24 h-24 bg-primary/10 rounded-br-full pointer-events-none"></div>
                    <div class="border-b border-neutral-200 pb-4">
                        <span class="text-xs md:text-sm font-bold text-[var(--color-primary-dark)] tracking-wider uppercase block mb-1"><?php esc_html_e('تاثیر ملموس اهدای شما', 'tamin-theme'); ?></span>
                        <h3 class="text-xl lg:text-2xl font-black text-[var(--color-text-main)]"><?php esc_html_e('دستاوردهای ثبت اهدا', 'tamin-theme'); ?></h3>
                    </div>
                    <!-- Lives Saved -->
                    <div class="flex items-center justify-between bg-[var(--color-bg-base)]/50 p-5 rounded-3xl border border-[var(--color-border-neutral-200)]/60 shadow-sm transition-all duration-300 hover:border-[var(--color-primary)] hover:translate-x-1">
                        <div class="space-y-1">
                            <div class="text-[var(--color-text-main)] font-black text-3.5xl lg:text-4.5xl tracking-tight leading-none" id="lives-out">0</div>
                            <div class="text-xs md:text-sm font-bold text-[var(--color-text-muted)] mt-1.5"><?php esc_html_e('بیماران نجات یافته', 'tamin-theme'); ?></div>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-rose-500/10 flex items-center justify-center text-rose-500 shrink-0 shadow-inner">
                            <i class="fa-solid fa-hand-holding-heart text-2xl animate-pulse"></i>
                        </div>
                    </div>
                    <!-- Volume Donated -->
                    <div class="flex items-center justify-between bg-[var(--color-bg-base)]/50 p-5 rounded-3xl border border-[var(--color-border-neutral-200)]/60 shadow-sm transition-all duration-300 hover:border-[var(--color-primary)] hover:translate-x-1">
                        <div class="space-y-1">
                            <div class="text-[var(--color-text-main)] font-black text-3.5xl lg:text-4.5xl tracking-tight leading-none" id="volume-out">0</div>
                            <div class="text-xs md:text-sm font-bold text-[var(--color-text-muted)] mt-1.5"><?php esc_html_e('لیتر پلاسما نجات‌بخش', 'tamin-theme'); ?></div>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 shrink-0 shadow-inner">
                            <i class="fa-solid fa-droplet text-2xl"></i>
                        </div>
                    </div>
                    <!-- Calories Burned -->
                    <div class="flex items-center justify-between bg-[var(--color-bg-base)]/50 p-5 rounded-3xl border border-[var(--color-border-neutral-200)]/60 shadow-sm transition-all duration-300 hover:border-[var(--color-primary)] hover:translate-x-1">
                        <div class="space-y-1">
                            <div class="text-[var(--color-text-main)] font-black text-3.5xl lg:text-4.5xl tracking-tight leading-none" id="calories-out">0</div>
                            <div class="text-xs md:text-sm font-bold text-[var(--color-text-muted)] mt-1.5"><?php esc_html_e('کالری مصرفی (Kcal)', 'tamin-theme'); ?></div>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-500/10 flex items-center justify-center text-amber-500 shrink-0 shadow-inner">
                            <i class="fa-solid fa-fire-flame-simple text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Fact Panel -->
                <div class="lg:col-span-3 bg-[var(--color-bg-section)] border border-[var(--color-border-neutral-300)] rounded-[2.5rem] p-8 flex flex-col justify-between relative overflow-hidden shadow-inner order-3 lg:order-none">
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-primary/10 rounded-full blur-xl pointer-events-none"></div>
                    <div class="space-y-4 relative z-10">
                        <h4 class="text-xs md:text-sm font-black text-[var(--color-text-muted)] tracking-widest uppercase opacity-75"><?php esc_html_e('سطح همدلی و افتخار شما', 'tamin-theme'); ?></h4>
                        <div class="py-2.5 px-4.5 rounded-2xl bg-white inline-block border border-[var(--color-border-neutral-200)] shadow-sm">
                            <span id="hero-badge" class="text-sm font-black text-amber-800"><?php esc_html_e('یاور برنزی', 'tamin-theme'); ?></span>
                        </div>
                        <p id="hero-desc" class="text-xs md:text-sm text-[var(--color-text-muted)] leading-relaxed text-justify"><?php esc_html_e('قدم اول را در این مسیر باشکوه برداشته‌اید. هر اهدای شما تپش دوباره یک قلب است.', 'tamin-theme'); ?></p>
                    </div>
                    <div class="mt-8 pt-6 border-t border-[var(--color-border-neutral-300)] relative z-10 space-y-3">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/25 text-[var(--color-text-main)] flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-lightbulb text-sm"></i>
                            </div>
                            <div class="space-y-1">
                                <h5 class="text-xs md:text-sm font-black text-[var(--color-text-main)]"><?php esc_html_e('آیا می‌دانستید؟', 'tamin-theme'); ?></h5>
                                <p class="text-xs md:text-sm text-[var(--color-text-muted)] leading-relaxed text-justify"><?php esc_html_e('پلاسما ۹۲٪ از آب تشکیل شده و بدن شما ظرف مدت ۴۸ ساعت مایع اهدایی را بازسازی می‌کند.', 'tamin-theme'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($timeline)) : ?>
    <!-- 4. TIMELINE -->
    <section class="w-full py-16 bg-[var(--color-bg-base)]/40 relative z-10">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 relative animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
            <div class="text-center space-y-4 mb-20">
                <?php if (!empty($timeline_badge)) : ?>
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white text-[var(--color-text-main)] text-xs font-bold tracking-wide border border-[var(--color-border-neutral-200)] shadow-sm">
                    <?php echo esc_html($timeline_badge); ?>
                </span>
                <?php endif; ?>
                <?php if (!empty($timeline_title)) : ?>
                <h2 class="text-3xl font-black text-[var(--color-text-main)]"><?php echo esc_html($timeline_title); ?></h2>
                <?php endif; ?>
                <?php if (!empty($timeline_desc)) : ?>
                <p class="text-sm md:text-base text-[var(--color-text-muted)] max-w-xl mx-auto"><?php echo esc_html($timeline_desc); ?></p>
                <?php endif; ?>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
                <!-- Triggers -->
                <div class="lg:col-span-7 space-y-4 flex flex-col justify-between">
                    <?php foreach ($timeline as $index => $step) : ?>
                    <div class="timeline-trigger <?php echo $index === 0 ? 'bg-primary border-primary shadow-md' : 'bg-white border-transparent hover:border-[var(--color-primary)] shadow-sm'; ?> border-2 rounded-3xl p-6 cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="<?php echo esc_attr($index + 1); ?>">
                        <div class="step-badge w-14 h-14 rounded-2xl <?php echo $index === 0 ? 'bg-white/90 text-neutral-900' : 'bg-primary/10 text-[var(--color-primary-dark)] group-hover:bg-primary group-hover:text-[var(--color-text-main)]'; ?> font-black text-xl flex items-center justify-center shrink-0 shadow-inner transition-colors">
                            <?php echo esc_html(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?>
                        </div>
                        <div class="text-right">
                            <h3 class="step-title text-sm md:text-base font-black <?php echo $index === 0 ? 'text-neutral-900' : 'text-[var(--color-text-main)]'; ?> transition-colors"><?php echo esc_html($step['title'] ?? ''); ?></h3>
                            <p class="step-desc text-xs md:text-sm <?php echo $index === 0 ? 'text-neutral-800' : 'text-[var(--color-text-muted)]'; ?> mt-1 transition-colors"><?php echo esc_html($step['duration'] ?? ''); ?></p>
                        </div>
                        <i class="step-arrow fa-solid fa-chevron-left text-[11px] <?php echo $index === 0 ? 'text-neutral-900' : 'text-neutral-300 group-hover:text-primary'; ?> absolute left-5 transition-colors"></i>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Display Panel -->
                <div class="lg:col-span-5 relative hidden lg:block">
                    <div class="sticky top-28 bg-white border border-[var(--color-border-neutral-200)] shadow-xl rounded-[2.5rem] p-10 h-[480px] overflow-hidden flex flex-col items-center justify-center text-center">
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-[var(--color-bg-base)]/50 rounded-full blur-2xl pointer-events-none transition-transform duration-700 ease-in-out" id="display-blob"></div>
                        
                        <div id="timeline-display" class="relative z-10 w-full flex flex-col items-center">
                            <div class="w-24 h-24 rounded-3xl bg-[var(--color-bg-base)] text-primary border border-[var(--color-border-neutral-200)] flex items-center justify-center text-4xl mb-8 shadow-sm" id="display-icon-wrap">
                                <i class="fa-solid <?php echo esc_attr($timeline[0]['icon'] ?? 'fa-circle'); ?>" id="display-icon"></i>
                            </div>
                            <h3 class="text-2xl font-black text-[var(--color-text-main)] mb-4" id="display-title"><?php echo esc_html($timeline[0]['detail_title'] ?? ''); ?></h3>
                            <p class="text-[var(--color-text-muted)] text-base leading-loose max-w-sm" id="display-desc"><?php echo esc_html($timeline[0]['detail_desc'] ?? ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($faq)) : ?>
    <!-- 5. FAQ -->
    <section class="w-full py-16 bg-white relative z-10">
        <div class="max-w-4xl mx-auto px-6 lg:px-12 relative animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
            <div class="text-center space-y-4 mb-16">
                <?php if (!empty($faq_badge)) : ?>
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[var(--color-bg-base)] text-[var(--color-primary-dark)] text-xs font-bold tracking-wide border border-[var(--color-primary)]/20 shadow-sm">
                    <?php echo esc_html($faq_badge); ?>
                </span>
                <?php endif; ?>
                <?php if (!empty($faq_title)) : ?>
                <h2 class="text-3xl font-black text-[var(--color-text-main)]"><?php echo esc_html($faq_title); ?></h2>
                <?php endif; ?>
            </div>

            <div class="space-y-4">
                <?php foreach ($faq as $index => $item) : ?>
                <div class="faq-row bg-surface-warm border border-[var(--color-border-neutral-200)] rounded-2xl overflow-hidden transition-all duration-300 hover:border-[var(--color-primary)]/40 <?php echo $index === 0 ? 'active' : ''; ?>">
                    <button class="w-full text-right px-6 py-5 flex items-center justify-between focus:outline-none cursor-pointer">
                        <span class="font-bold text-[var(--color-text-main)] pr-2 text-sm md:text-base"><?php echo esc_html($item['question'] ?? ''); ?></span>
                        <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-neutral-400 shrink-0 border border-[var(--color-border-neutral-200)] transition-transform duration-300">
                            <i class="fa-solid <?php echo $index === 0 ? 'fa-minus text-primary' : 'fa-plus'; ?> text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid transition-[grid-template-rows] duration-300 ease-in-out <?php echo $index === 0 ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'; ?>">
                        <div class="overflow-hidden">
                            <div class="px-6 pb-6 pt-2 text-[var(--color-text-muted)] text-sm md:text-base leading-relaxed text-justify border-t border-[var(--color-border-neutral-200)] mx-6">
                                <?php echo esc_html($item['answer'] ?? ''); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Calculator Configuration
    const COEF_LIVES = <?php echo json_encode($coef_lives); ?>;
    const COEF_VOLUME = <?php echo json_encode($coef_volume); ?>;
    const COEF_CALS = <?php echo json_encode($coef_cals); ?>;

    const wSlider = document.getElementById('weight-slider');
    const fSlider = document.getElementById('freq-slider');
    const mSlider = document.getElementById('months-slider');

    const wVal = document.getElementById('weight-val');
    const fVal = document.getElementById('freq-val');
    const mVal = document.getElementById('months-val');

    const livesOut = document.getElementById('lives-out');
    const volumeOut = document.getElementById('volume-out');
    const calsOut = document.getElementById('calories-out');

    const heroBadge = document.getElementById('hero-badge');
    const heroDesc = document.getElementById('hero-desc');

    const formatNumber = (num) => {
        return new Intl.NumberFormat('fa-IR').format(num);
    };

    const persianDigits = (str) => {
        const persian = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
        return str.toString().replace(/\d/g, x => persian[x]);
    };

    function updateBadgePosition(slider, badgeContainer) {
        const val = slider.value;
        const min = slider.min ? slider.min : 0;
        const max = slider.max ? slider.max : 100;
        const percentage = (val - min) / (max - min);
        // Position considering LTR track in RTL document (CSS direction might flip it)
        badgeContainer.style.left = `calc(${percentage * 100}% - 12px)`;
    }

    function calculateImpact() {
        const w = parseInt(wSlider.value);
        const f = parseInt(fSlider.value);
        const m = parseInt(mSlider.value);

        // Update displays
        wVal.textContent = persianDigits(w);
        fVal.textContent = persianDigits(f);
        mVal.textContent = persianDigits(m);

        // Update badge positions
        updateBadgePosition(wSlider, document.getElementById('weight-badge-container'));
        updateBadgePosition(fSlider, document.getElementById('freq-badge-container'));
        updateBadgePosition(mSlider, document.getElementById('months-badge-container'));

        const totalDonations = f * m;
        
        // Base formulas with dynamic coefficients
        let totalLives = Math.floor(totalDonations * COEF_LIVES);
        let totalVolume = (totalDonations * COEF_VOLUME).toFixed(1);
        let totalCals = totalDonations * COEF_CALS;

        // Animate numbers
        animateValue(livesOut, parseInt(livesOut.textContent.replace(/,/g, '') || 0), totalLives, 800);
        volumeOut.textContent = formatNumber(totalVolume); // Not animating float easily, just set it
        animateValue(calsOut, parseInt(calsOut.textContent.replace(/,/g, '') || 0), totalCals, 800);

        // Gamification logic
        if (totalDonations >= 24) {
            heroBadge.textContent = 'قهرمان طلایی';
            heroBadge.className = 'text-sm font-black text-amber-500';
            heroDesc.textContent = 'شما یک فرشته نجات واقعی هستید. فداکاری بی‌نظیر شما تحسین‌برانگیز است.';
        } else if (totalDonations >= 12) {
            heroBadge.textContent = 'حامی نقره‌ای';
            heroBadge.className = 'text-sm font-black text-slate-500';
            heroDesc.textContent = 'تعهد شما به نجات جان انسان‌ها بسیار ارزشمند است. مسیر فوق‌العاده‌ای است.';
        } else {
            heroBadge.textContent = 'یاور برنزی';
            heroBadge.className = 'text-sm font-black text-amber-800';
            heroDesc.textContent = 'قدم اول را در این مسیر باشکوه برداشته‌اید. هر اهدای شما تپش دوباره یک قلب است.';
        }
    }

    function animateValue(obj, start, end, duration) {
        if (isNaN(start)) start = 0;
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = formatNumber(Math.floor(progress * (end - start) + start));
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    wSlider.addEventListener('input', calculateImpact);
    fSlider.addEventListener('input', calculateImpact);
    mSlider.addEventListener('input', calculateImpact);

    // Initial calc
    setTimeout(calculateImpact, 100);

    // FAQ Accordion
    const faqs = document.querySelectorAll('.faq-row');
    faqs.forEach(row => {
        const btn = row.querySelector('button');
        btn.addEventListener('click', () => {
            const isActive = row.classList.contains('active');
            
            faqs.forEach(f => {
                f.classList.remove('active');
                const icon = f.querySelector('i');
                icon.classList.remove('fa-minus', 'text-primary');
                icon.classList.add('fa-plus');
                f.querySelector('.faq-content-wrapper').style.gridTemplateRows = '0fr';
            });

            if (!isActive) {
                row.classList.add('active');
                const icon = row.querySelector('i');
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus', 'text-primary');
                row.querySelector('.faq-content-wrapper').style.gridTemplateRows = '1fr';
            }
        });
    });

    // Timeline Interactions
    const timelineData = <?php echo json_encode($timeline); ?>;
    const triggers = document.querySelectorAll('.timeline-trigger');
    const displayWrap = document.getElementById('timeline-display');
    const dTitle = document.getElementById('display-title');
    const dDesc = document.getElementById('display-desc');
    const dIcon = document.getElementById('display-icon');
    const blob = document.getElementById('display-blob');

    triggers.forEach(trigger => {
        trigger.addEventListener('mouseenter', function() {
            const stepIndex = parseInt(this.getAttribute('data-step')) - 1;
            const data = timelineData[stepIndex];
            
            // Reset active states
            triggers.forEach(t => {
                t.classList.remove('bg-primary', 'border-primary', 'shadow-md');
                t.classList.add('bg-white', 'border-transparent', 'shadow-sm');
                t.querySelector('.step-badge').classList.remove('bg-white/90', 'text-neutral-900');
                t.querySelector('.step-badge').classList.add('bg-primary/10', 'text-[var(--color-primary-dark)]');
                t.querySelector('.step-title').classList.remove('text-neutral-900');
                t.querySelector('.step-title').classList.add('text-[var(--color-text-main)]');
                t.querySelector('.step-desc').classList.remove('text-neutral-800');
                t.querySelector('.step-desc').classList.add('text-[var(--color-text-muted)]');
                t.querySelector('.step-arrow').classList.remove('text-neutral-900');
                t.querySelector('.step-arrow').classList.add('text-neutral-300');
            });

            // Set current active
            this.classList.remove('bg-white', 'border-transparent', 'shadow-sm');
            this.classList.add('bg-primary', 'border-primary', 'shadow-md');
            this.querySelector('.step-badge').classList.remove('bg-primary/10', 'text-[var(--color-primary-dark)]');
            this.querySelector('.step-badge').classList.add('bg-white/90', 'text-neutral-900');
            this.querySelector('.step-title').classList.remove('text-[var(--color-text-main)]');
            this.querySelector('.step-title').classList.add('text-neutral-900');
            this.querySelector('.step-desc').classList.remove('text-[var(--color-text-muted)]');
            this.querySelector('.step-desc').classList.add('text-neutral-800');
            this.querySelector('.step-arrow').classList.remove('text-neutral-300');
            this.querySelector('.step-arrow').classList.add('text-neutral-900');

            // Animate display transition
            displayWrap.classList.remove('timeline-fade-active');
            displayWrap.classList.add('timeline-fade-enter');
            
            // Randomize blob position slightly
            const rx = Math.random() * 40 - 20;
            const ry = Math.random() * 40 - 20;
            blob.style.transform = `translate(${rx}px, ${ry}px) scale(${0.9 + Math.random()*0.3})`;

            setTimeout(() => {
                dTitle.textContent = data.detail_title;
                dDesc.textContent = data.detail_desc;
                dIcon.className = `fa-solid ${data.icon}`;
                
                requestAnimationFrame(() => {
                    displayWrap.classList.remove('timeline-fade-enter');
                    displayWrap.classList.add('timeline-fade-active');
                });
            }, 150);
        });
    });
});
</script>

<?php get_footer(); ?>
