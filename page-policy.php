<?php
/**
 * Template Name: خط مشی و بیانیه (Policy & Privacy)
 * Description: Custom page template for Quality Policy & Corporate Vision.
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
$hero_badge_text  = $get_val('_tamin_policy_hero_badge');
$hero_title       = $get_val('_tamin_policy_hero_title');
$hero_desc        = $get_val('_tamin_policy_hero_desc');

// Bento Main Card (Big card)
$bento_main_icon  = $get_val('_tamin_policy_bento_main_icon');
$bento_main_title = $get_val('_tamin_policy_bento_main_title');
$bento_main_desc  = $get_val('_tamin_policy_bento_main_desc');

// Bento Side Card (Checklist)
$bento_side_title = $get_val('_tamin_policy_bento_side_title');
$bento_checklist_json = $get_val('_tamin_policy_bento_checklist');
$bento_checklist  = $bento_checklist_json ? json_decode($bento_checklist_json, true) : [];
if (!is_array($bento_checklist)) $bento_checklist = [];

// Article / Content Sections
$sections_json    = $get_val('_tamin_policy_sections');
$sections         = $sections_json ? json_decode($sections_json, true) : [];
if (!is_array($sections)) $sections = [];
?>

<main class="w-full bg-[var(--color-bg-base)] min-h-screen font-sans overflow-x-hidden relative" dir="rtl">

    <?php if (!empty($hero_title)) : ?>
    <!-- 1. HERO SECTION -->
    <header class="w-full pt-28 pb-16 text-center relative overflow-visible">
        <div class="absolute left-1/2 -translate-x-1/2 top-10 pointer-events-none select-none z-0">
            <span class="font-black text-7xl lg:text-9xl text-neutral-200/30 whitespace-nowrap tracking-[0.2em]"><?php esc_html_e('نوژین', 'tamin-theme'); ?></span>
        </div>
        
        <div class="max-w-screen-xl mx-auto px-6 relative z-10 space-y-6">
            <?php if (!empty($hero_badge_text)) : ?>
            <div class="inline-flex items-center gap-2">
                <span class="text-[10px] bg-white px-4 py-1.5 rounded-full text-[var(--color-text-muted)] border border-neutral-200/50 shadow-sm font-bold tracking-wider">
                    <?php echo esc_html($hero_badge_text); ?>
                </span>
            </div>
            <?php endif; ?>
            
            <h1 class="font-black text-3xl md:text-5xl lg:text-6xl text-[var(--color-text-main)] leading-tight tracking-tight"><?php echo esc_html($hero_title); ?></h1>
            
            <?php if (!empty($hero_desc)) : ?>
            <p class="text-base md:text-lg text-[var(--color-text-muted)] max-w-2xl mx-auto leading-loose font-medium"><?php echo esc_html($hero_desc); ?></p>
            <?php endif; ?>
        </div>
    </header>
    <?php endif; ?>

    <?php if (!empty($bento_main_title) || !empty($bento_checklist)) : ?>
    <!-- 2. BENTO GRID -->
    <section class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-stretch my-10">
        <?php if (!empty($bento_main_title)) : ?>
        <div class="md:col-span-8 bg-white border border-neutral-200/50 rounded-[2.5rem] p-8 lg:p-10 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between relative overflow-hidden group">
            <div class="space-y-6">
                <div class="w-12 h-12 rounded-2xl bg-[var(--color-bg-base)] flex items-center justify-center text-primary shadow-inner">
                    <i class="fa-solid <?php echo esc_attr($bento_main_icon ?: 'fa-shield-halved'); ?> text-xl"></i>
                </div>
                <h2 class="font-black text-2xl lg:text-3xl text-[var(--color-text-main)]"><?php echo esc_html($bento_main_title); ?></h2>
                <?php if (!empty($bento_main_desc)) : ?>
                <p class="text-neutral-600 text-sm md:text-base lg:text-lg leading-relaxed text-justify max-w-3xl"><?php echo esc_html($bento_main_desc); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($bento_side_title) || !empty($bento_checklist)) : ?>
        <div class="md:col-span-4 bg-[var(--color-bg-surface)]/50 border border-neutral-200/50 rounded-[2.5rem] p-8 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between relative overflow-hidden group">
            <div class="space-y-6">
                <?php if (!empty($bento_side_title)) : ?>
                <h3 class="font-black text-xl text-[var(--color-text-main)] flex items-center gap-3">
                    <?php echo esc_html($bento_side_title); ?>
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.5)]"></span>
                </h3>
                <?php endif; ?>
                <?php if (!empty($bento_checklist)) : ?>
                <ul class="space-y-4 text-xs md:text-sm text-neutral-500 font-medium">
                    <?php foreach ($bento_checklist as $item) : ?>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-check text-primary"></i>
                        <?php echo esc_html($item['text'] ?? ''); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </section>
    <?php endif; ?>

    <?php if (!empty($sections)) : ?>
    <!-- 3. ARTICLE CONTENT SECTIONS -->
    <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start my-16">
        <article class="lg:col-span-8 space-y-16 text-right order-last lg:order-first">
            <?php foreach ($sections as $si => $section) : ?>
            <?php if (empty($section['title']) && empty($section['content'])) continue; ?>
            <section id="section-<?php echo esc_attr($si + 1); ?>" class="space-y-8">
                <?php if (!empty($section['title'])) : ?>
                <div class="border-r-4 border-[var(--color-primary)] pr-4">
                    <h2 class="font-black text-xl lg:text-2xl text-[var(--color-text-main)]"><?php echo esc_html($section['title']); ?></h2>
                </div>
                <?php endif; ?>
                <?php if (!empty($section['content'])) : ?>
                <div class="text-neutral-700 text-base md:text-lg leading-[2] space-y-6 text-justify">
                    <p><?php echo nl2br(esc_html($section['content'])); ?></p>
                </div>
                <?php endif; ?>
            </section>
            <?php endforeach; ?>
        </article>

        <aside class="lg:col-span-4 lg:sticky lg:top-28 hidden lg:block">
            <nav class="bg-white/40 backdrop-blur-xl border border-white/60 p-5 rounded-[2.5rem] shadow-sm space-y-2">
                <?php foreach ($sections as $si => $section) : ?>
                <?php if (empty($section['title'])) continue; ?>
                <a href="#section-<?php echo esc_attr($si + 1); ?>" class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-white hover:shadow-sm border border-transparent hover:border-neutral-100 text-[var(--color-text-muted)] hover:text-[var(--color-secondary)] font-bold text-sm transition-all duration-200">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    <?php echo esc_html($section['title']); ?>
                </a>
                <?php endforeach; ?>
            </nav>
        </aside>
    </div>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
