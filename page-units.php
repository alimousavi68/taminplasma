<?php
/**
 * Template Name: واحدهای پلاسما (Plasma Units)
 * Description: Custom page template for Plasma Units & Branches.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
.scrollbar-none::-webkit-scrollbar {
  display: none;
}
.scrollbar-none {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.unit-card {
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
.unit-card.hidden-card {
  opacity: 0;
  transform: scale(0.9) translateY(10px);
  pointer-events: none;
  position: absolute;
  width: 0;
  height: 0;
  padding: 0;
  margin: 0;
  border: none;
  overflow: hidden;
}
</style>

<?php
$units_post_id = get_the_ID();
$units_badge   = get_post_meta($units_post_id, '_tamin_units_badge', true);
$units_title   = get_post_meta($units_post_id, '_tamin_units_title', true);
$units_desc    = get_post_meta($units_post_id, '_tamin_units_desc', true);

// Fallbacks if not set in DB
if (empty($units_badge)) $units_badge = __('شعب سراسر کشور', 'tamin-theme');
if (empty($units_title)) $units_title = __('مراکز و واحدهای تأمین پلاسما نوژین', 'tamin-theme');
if (empty($units_desc))  $units_desc  = __('دسترسی سریع به مدرن‌ترین مراکز استاندارد اهدا در سراسر کشور با کادری مجرب و تجهیزات پیشرفته', 'tamin-theme');
?>

<main class="min-h-screen bg-[var(--color-bg-base)] overflow-x-hidden pb-16" dir="rtl" aria-label="<?php esc_attr_e('مراکز و واحدهای تأمین پلاسما', 'tamin-theme'); ?>">
    
    <!-- 1. PAGE HEADER -->
    <?php if (!empty($units_title)) : ?>
    <header class="w-full bg-[var(--color-bg-base)] pt-12 pb-6 relative">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 text-center space-y-3">
            <?php if (!empty($units_badge)) : ?>
            <span class="inline-block px-4 py-1.5 rounded-full bg-[var(--color-bg-surface)] text-[var(--color-text-main)] text-xs font-bold tracking-wide shadow-sm border border-[var(--color-bg-surface)]/20 mb-2">
                <?php echo esc_html($units_badge); ?>
            </span>
            <?php endif; ?>
            <h1 class="font-black text-2xl md:text-3xl lg:text-4xl text-[var(--color-text-main)]">
                <?php echo esc_html($units_title); ?>
            </h1>
            <?php if (!empty($units_desc)) : ?>
            <p class="text-sm md:text-base text-[var(--color-text-muted)] max-w-xl mx-auto leading-relaxed">
                <?php echo esc_html($units_desc); ?>
            </p>
            <?php endif; ?>
        </div>
    </header>
    <?php endif; ?>

    <!-- 2. DYNAMIC TABS FILTER -->
    <section class="max-w-md mx-auto my-8 px-4" aria-label="<?php esc_attr_e('فیلتر شهرها', 'tamin-theme'); ?>">
        <div class="bg-white border border-neutral-200/60 p-1.5 rounded-full flex justify-between items-center shadow-sm overflow-x-auto whitespace-nowrap scrollbar-none" role="tablist">
            <button role="tab" aria-selected="true" aria-controls="units-grid" data-filter="all" class="tab-item flex-1 text-center py-2.5 px-4 text-xs md:text-sm font-black bg-primary text-[var(--color-text-main)] shadow-sm cursor-pointer transition-all duration-300 rounded-full">
                <?php esc_html_e('همه مراکز', 'tamin-theme'); ?>
            </button>
            <?php
            $centers = get_option('tamin_centers_data', []);
            $cities = [];
            foreach ($centers as $center) {
                if (!empty($center['active']) && !isset($cities[$center['city_id']])) {
                    $cities[$center['city_id']] = $center['city'];
                }
            }
            foreach ($cities as $city_id => $city_name) :
            ?>
            <button role="tab" aria-selected="false" aria-controls="units-grid" data-filter="<?php echo esc_attr($city_id); ?>" class="tab-item flex-1 text-center py-2.5 px-4 text-xs md:text-sm font-bold text-[var(--color-text-muted)] cursor-pointer transition-all duration-300 rounded-full hover:text-[var(--color-text-main)]">
                <?php echo esc_html($city_name); ?>
            </button>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 3. THE UNITS MATRIX -->
    <section class="max-w-screen-xl mx-auto px-6 lg:px-12 my-10">
        <div id="units-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch" aria-live="polite">
            
            <?php if (!empty($centers)) : ?>
                <?php foreach ($centers as $center) : 
                    if (empty($center['active'])) continue;
                ?>
                <article class="unit-card flex flex-col justify-between bg-white border border-neutral-100 rounded-[2.5rem] p-5 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer relative" data-city="<?php echo esc_attr($center['city_id']); ?>">
                    <div>
                        <div class="w-full aspect-[4/3] rounded-[1.75rem] overflow-hidden relative bg-neutral-100 mb-4">
                            <img src="<?php echo esc_url($center['image_url']); ?>" alt="<?php echo esc_attr($center['name']); ?>" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" />
                            <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-xs font-black px-3 py-1.5 rounded-full text-[var(--color-text-main)] border border-neutral-200/40">
                                <?php echo esc_html($center['city']); ?>
                            </span>
                        </div>

                        <h2 class="font-black text-lg text-[var(--color-text-main)] mt-2 mb-3">
                            <?php echo esc_html($center['name']); ?>
                        </h2>
                        
                        <div class="space-y-2.5">
                            <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                                <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span><?php echo esc_html('ساعت کاری: ' . $center['hours']); ?></span>
                            </div>
                            <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                                <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.502-5.124-3.802-6.625-6.626l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <span dir="ltr"><?php echo esc_html($center['phone']); ?></span>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo esc_url($center['map_link']); ?>" target="_blank" rel="noopener noreferrer" class="w-full bg-[var(--color-bg-surface)] group-hover:bg-primary text-[var(--color-text-main)] font-black text-center py-3.5 rounded-xl transition-all duration-300 mt-5 text-sm block">
                        <?php esc_html_e('مشاهده روی نقشه و مسیریابی', 'tamin-theme'); ?>
                    </a>
                </article>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center text-[var(--color-text-muted)] py-10">
                    <?php esc_html_e('در حال حاضر شعبه‌ای ثبت نشده است.', 'tamin-theme'); ?>
                </div>
            <?php endif; ?>

        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab-item');
    const cards = document.querySelectorAll('.unit-card');
    if (!tabs.length) return;

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.setAttribute('aria-selected', 'false');
                t.classList.remove('bg-primary', 'text-[var(--color-text-main)]', 'font-black', 'shadow-sm');
                t.classList.add('text-[var(--color-text-muted)]', 'font-bold');
            });

            tab.setAttribute('aria-selected', 'true');
            tab.classList.remove('text-[var(--color-text-muted)]', 'font-bold');
            tab.classList.add('bg-primary', 'text-[var(--color-text-main)]', 'font-black', 'shadow-sm');

            const filterValue = tab.getAttribute('data-filter');

            cards.forEach(card => {
                const cardCity = card.getAttribute('data-city');
                if (filterValue === 'all' || cardCity === filterValue) {
                    card.classList.remove('hidden-card');
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1) translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95) translateY(8px)';
                    setTimeout(() => {
                        card.classList.add('hidden-card');
                    }, 300);
                }
            });
        });
    });
});
</script>

<?php
get_footer();
