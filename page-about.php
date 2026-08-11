<?php
/**
 * Template Name: درباره ما (About Us)
 * Description: Custom page template for About Us page.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();

$meta = get_post_meta(get_the_ID());
$get_val = function($key) use ($meta) {
    return isset($meta[$key]) && $meta[$key][0] !== '' ? $meta[$key][0] : '';
};

// Hero
$hero_badge       = $get_val('_tamin_about_hero_badge');
$hero_title1      = $get_val('_tamin_about_hero_title1');
$hero_title2      = $get_val('_tamin_about_hero_title2');
$hero_desc        = $get_val('_tamin_about_hero_desc');
$hero_btn1_text   = $get_val('_tamin_about_hero_btn1_text');
$hero_btn1_url    = $get_val('_tamin_about_hero_btn1_url');
$hero_btn2_text   = $get_val('_tamin_about_hero_btn2_text');
$hero_btn2_url    = $get_val('_tamin_about_hero_btn2_url');
$hero_image       = $get_val('_tamin_about_hero_image');

// Values Matrix
$values_title     = $get_val('_tamin_about_values_title');
$values_desc      = $get_val('_tamin_about_values_desc');
$values_json      = $get_val('_tamin_about_values_list');
$values           = $values_json ? json_decode($values_json, true) : [];
if (!is_array($values)) $values = [];

// Stats
$stats_json       = $get_val('_tamin_about_stats_list');
$stats            = $stats_json ? json_decode($stats_json, true) : [];
if (!is_array($stats)) $stats = [];

// Certificates
$certs_title      = $get_val('_tamin_about_certs_title');
$certs_json       = $get_val('_tamin_about_certs_list');
$certs            = $certs_json ? json_decode($certs_json, true) : [];
if (!is_array($certs)) $certs = [];

// CTA
$cta_badge        = $get_val('_tamin_about_cta_badge');
$cta_title        = $get_val('_tamin_about_cta_title');
$cta_desc         = $get_val('_tamin_about_cta_desc');
$cta_btn_text     = $get_val('_tamin_about_cta_btn_text');
$cta_btn_url      = $get_val('_tamin_about_cta_btn_url');
$cta_image        = $get_val('_tamin_about_cta_image');
?>

<main class="w-full bg-[var(--color-bg-base)] min-h-screen font-sans relative overflow-hidden" dir="rtl">
    
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute top-1/3 right-0 w-[300px] h-[600px] bg-[var(--color-secondary)]/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <?php if (!empty($hero_title1) || !empty($hero_desc)) : ?>
    <!-- 1. HERO SECTION -->
    <section class="relative w-full py-16 lg:py-24">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 space-y-6 text-right order-2 lg:order-1 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <?php if (!empty($hero_badge)) : ?>
                    <div class="inline-flex items-center gap-2 bg-primary/10 text-[var(--color-text-main)] text-xs font-black px-4 py-2 rounded-full border border-[var(--color-primary)]/20 shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                        <?php echo esc_html($hero_badge); ?>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($hero_title1) || !empty($hero_title2)) : ?>
                    <h1 class="font-black text-3xl md:text-4xl lg:text-5xl leading-tight text-[var(--color-text-main)]">
                        <?php echo esc_html($hero_title1); ?>
                        <?php if (!empty($hero_title2)) : ?>
                        <span class="block bg-gradient-to-l from-[var(--color-primary-dark)] to-[var(--color-primary)] bg-clip-text text-transparent mt-2 pb-1"><?php echo esc_html($hero_title2); ?></span>
                        <?php endif; ?>
                    </h1>
                    <?php endif; ?>
                    <?php if (!empty($hero_desc)) : ?>
                    <p class="text-sm md:text-base text-[var(--color-text-muted)] leading-loose text-justify font-medium"><?php echo esc_html($hero_desc); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($hero_btn1_text) || !empty($hero_btn2_text)) : ?>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <?php if (!empty($hero_btn1_text)) : ?>
                        <a href="<?php echo esc_url($hero_btn1_url); ?>" class="bg-[var(--color-secondary)] hover:bg-[var(--color-secondary-light)] text-white font-black px-6 py-3 rounded-full text-xs md:text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                            <?php echo esc_html($hero_btn1_text); ?>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($hero_btn2_text)) : ?>
                        <a href="<?php echo esc_url($hero_btn2_url); ?>" class="border border-[var(--color-border-subtle)] hover:bg-white text-[var(--color-text-main)] font-bold px-6 py-3 rounded-full text-xs md:text-sm hover:border-[var(--color-primary)] transition-all duration-300">
                            <?php echo esc_html($hero_btn2_text); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($hero_image)) : ?>
                <div class="lg:col-span-6 order-1 lg:order-2 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/10] rounded-[3.5rem] overflow-hidden shadow-2xl border border-[var(--color-border-subtle)] group">
                        <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($hero_title1); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-secondary)]/30 via-transparent to-transparent opacity-80 group-hover:opacity-40 transition-opacity duration-500"></div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($values_title) || !empty($values)) : ?>
    <!-- 2. VALUE PROPOSITION MATRIX -->
    <section id="vision" class="w-full py-16 bg-[var(--color-bg-lightest)] border-y border-[var(--color-border-subtle)] relative">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <?php if (!empty($values_title) || !empty($values_desc)) : ?>
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-4 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                <?php if (!empty($values_title)) : ?>
                <h2 class="font-black text-2xl md:text-3xl text-[var(--color-text-main)]"><?php echo esc_html($values_title); ?></h2>
                <?php endif; ?>
                <div class="w-16 h-1 bg-primary mx-auto rounded-full"></div>
                <?php if (!empty($values_desc)) : ?>
                <p class="text-xs md:text-sm text-[var(--color-text-muted)] leading-relaxed"><?php echo esc_html($values_desc); ?></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($values)) : ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                <?php foreach ($values as $idx => $card) : ?>
                <div class="bg-surface-warm border border-[var(--color-border-neutral-200)]/60 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group cursor-pointer flex flex-col justify-between hover:bg-primary animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 <?php echo $idx > 0 ? 'delay-' . ($idx * 100) : ''; ?>">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-neutral-900 mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i class="fa-solid <?php echo esc_attr($card['icon'] ?? 'fa-star'); ?> text-2xl"></i>
                        </div>
                        <h3 class="font-black text-xl text-neutral-900 mb-3 transition-colors"><?php echo esc_html($card['title'] ?? ''); ?></h3>
                        <p class="text-xs md:text-sm text-neutral-700 leading-relaxed text-justify font-normal group-hover:text-neutral-900 transition-colors"><?php echo esc_html($card['desc'] ?? ''); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($stats)) : ?>
    <!-- 3. STATISTICS SECTION -->
    <section class="w-full py-16" id="about-stats-section">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center relative z-10">
                <?php foreach ($stats as $i => $stat) : ?>
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll opacity-0 translate-y-12 <?php echo $i > 0 ? 'delay-' . ($i * 100) : ''; ?>">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="rtl">
                        <?php if (!empty($stat['prefix'])) : ?>
                        <span class="text-primary text-3xl font-extrabold ml-1"><?php echo esc_html($stat['prefix']); ?></span>
                        <?php endif; ?>
                        <span class="about-counter-value text-neutral-900" data-target="<?php echo esc_attr($stat['value'] ?? '0'); ?>">۰</span>
                        <?php if (!empty($stat['unit'])) : ?>
                        <span class="text-xl md:text-2xl mr-2 text-neutral-500 font-bold"><?php echo esc_html($stat['unit']); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($stat['suffix'])) : ?>
                        <span class="text-3xl lg:text-4xl ml-1 text-neutral-500 font-bold"><?php echo esc_html($stat['suffix']); ?></span>
                        <?php endif; ?>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold"><?php echo esc_html($stat['label'] ?? ''); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($certs_title) || !empty($certs)) : ?>
    <!-- 4. CERTIFICATES & STANDARDS -->
    <section class="w-full py-16 bg-[var(--color-bg-lightest)] border-y border-[var(--color-border-subtle)]">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <?php if (!empty($certs_title)) : ?>
            <h2 class="text-center font-black text-2xl lg:text-3xl text-[var(--color-text-main)] mb-12 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                <?php echo esc_html($certs_title); ?>
            </h2>
            <?php endif; ?>
            <?php if (!empty($certs)) : ?>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-stretch">
                <?php foreach ($certs as $ci => $cert) : ?>
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 <?php echo $ci > 0 ? 'delay-' . ($ci * 100) : ''; ?>">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid <?php echo esc_attr($cert['icon'] ?? 'fa-award'); ?> text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    <?php echo esc_html($cert['title'] ?? ''); ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($cta_title) || !empty($cta_desc)) : ?>
    <!-- 5. CTA SECTION -->
    <section class="w-full px-6 mb-8 relative z-10 animate-on-scroll opacity-0 translate-y-12" dir="rtl">
        <div class="max-w-screen-xl mx-auto my-16 bg-[#FFD970] rounded-[3.5rem] relative overflow-hidden min-h-[450px] shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center py-16 lg:py-24 px-8 lg:px-16">
            <div class="lg:col-span-6 p-0 text-right space-y-6 z-20 relative">
                <?php if (!empty($cta_badge)) : ?>
                <div class="text-[#7a4a00] text-[11px] md:text-xs font-semibold tracking-[0.2em] uppercase font-mono">
                    <?php echo esc_html($cta_badge); ?>
                </div>
                <?php endif; ?>
                <?php if (!empty($cta_title)) : ?>
                <h2 class="font-bold text-2xl lg:text-4xl text-[#1a0e00] leading-tight"><?php echo esc_html($cta_title); ?></h2>
                <?php endif; ?>
                <?php if (!empty($cta_desc)) : ?>
                <p class="text-[#4a2e00] text-sm md:text-base leading-loose max-w-xl opacity-90"><?php echo esc_html($cta_desc); ?></p>
                <?php endif; ?>
                <?php if (!empty($cta_btn_text)) : ?>
                <div class="pt-4 flex flex-col items-start justify-start text-right gap-3">
                    <a href="<?php echo esc_url($cta_btn_url); ?>" class="inline-flex items-center gap-2 bg-[#1a0e00] text-[#FFD970] font-bold py-[14px] px-[28px] rounded-[8px] text-base hover:bg-[#2d1a00] transition-colors duration-300 shadow-md cursor-pointer group">
                        <span><?php echo esc_html($cta_btn_text); ?></span>
                        <i class="fa-solid fa-arrow-left text-sm mr-1 transition-transform duration-300 group-hover:-translate-x-1"></i>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php if (!empty($cta_image)) : ?>
            <div class="lg:col-span-6 h-full w-full lg:w-1/2 absolute lg:absolute left-0 top-0 z-10 overflow-hidden">
                <img src="<?php echo esc_url($cta_image); ?>" alt="<?php echo esc_attr($cta_title); ?>" class="w-full h-full object-cover absolute inset-0">
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php if (!empty($stats)) : ?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.about-counter-value');
    if (!counters.length) return;
    let animated = false;
    
    const animatePersianValue = (obj, start, end, duration) => {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const currentVal = Math.floor(progress * (end - start) + start);
            obj.innerHTML = new Intl.NumberFormat('fa-IR').format(currentVal);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                obj.innerHTML = new Intl.NumberFormat('fa-IR').format(end);
            }
        };
        window.requestAnimationFrame(step);
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                animated = true;
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    animatePersianValue(counter, 0, target, 2500);
                });
            }
        });
    }, { threshold: 0.3 });

    const section = document.getElementById('about-stats-section');
    if (section) observer.observe(section);
});
</script>
<?php endif; ?>

<?php get_footer(); ?>
