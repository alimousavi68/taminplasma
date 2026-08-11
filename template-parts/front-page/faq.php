<?php
/**
 * Front Page FAQ & CTA Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

// Check if FAQ Section is enabled
if (!get_theme_mod('tamin_faq_enabled', true)) {
    return;
}

$faq_json = get_theme_mod('tamin_faq_list', '');
$faqs = json_decode($faq_json, true);

if (empty($faqs) || !is_array($faqs)) {
    $faqs = [
        [
            'question' => 'اهدای پلاسما چیست و چه تفاوتی با اهدای خون دارد؟',
            'answer'   => 'در اهدای پلاسما، تنها بخش مایع خون (پلاسما) جمع‌آوری می‌شود و سلول‌های خونی به بدن اهداکننده بازگردانده می‌شوند.'
        ],
        [
            'question' => 'آیا اهدای پلاسما برای سلامتی ضرر دارد؟',
            'answer'   => 'خیر، اهدای پلاسما یک فرآیند ایمن است که تحت نظارت پزشک انجام می‌شود.'
        ],
        [
            'question' => 'هر چند وقت یک‌بار می‌توان پلاسما اهدا کرد؟',
            'answer'   => 'شما می‌توانید تا دو بار در هفته با فاصله حداقل ۴۸ ساعت بین هر اهدا، پلاسما اهدا کنید.'
        ],
    ];
}

$subtitle = get_theme_mod('tamin_faq_subtitle', '');
$title1   = get_theme_mod('tamin_faq_title1', '');
$title2   = get_theme_mod('tamin_faq_title2', '');

// Testimonial titles
$testimonials_title  = get_theme_mod('tamin_testimonials_title', '');
$testimonials_rating = get_theme_mod('tamin_testimonials_rating', '');

// CTA Banner Mods
$cta_enabled  = get_theme_mod('tamin_faq_cta_enabled', true);
$cta_badge    = get_theme_mod('tamin_faq_cta_badge', '');
$cta_title1   = get_theme_mod('tamin_faq_cta_title1', '');
$cta_title2   = get_theme_mod('tamin_faq_cta_title2', '');
$cta_desc     = get_theme_mod('tamin_faq_cta_desc', '');
$cta_btn_text = get_theme_mod('tamin_faq_cta_btn_text', '');
$cta_btn_url  = get_theme_mod('tamin_faq_cta_btn_url', '');
$cta_image    = get_theme_mod('tamin_faq_cta_image', '');
$cta_tag1     = get_theme_mod('tamin_faq_cta_tag1', '');
$cta_tag2     = get_theme_mod('tamin_faq_cta_tag2', '');
?>
<!-- SECTION 1: FAQ + TESTIMONIALS (Dual Column) -->
<section class="w-full py-20 lg:py-24 bg-white relative overflow-hidden" dir="rtl">

    <!-- Dot Pattern Background -->
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(30,41,59,0.04) 1.5px, transparent 1.5px); background-size: 28px 28px;"></div>

    <div class="container mx-auto px-4 lg:max-w-[1170px] relative z-10">

        <!-- Section Header -->
        <div class="text-center mb-14 lg:mb-20">
            <?php if (!empty($subtitle)) : ?>
            <div class="inline-flex items-center gap-2 bg-primary/10 border border-primary/20 text-neutral-900 font-black text-xs px-4 py-2 rounded-full mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                <?php echo esc_html($subtitle); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($title1) || !empty($title2)) : ?>
            <h2 class="font-black text-3xl lg:text-5xl text-neutral-900 leading-tight">
                <?php echo esc_html($title1); ?>
                <?php if (!empty($title2)) : ?>
                <span class="text-[var(--color-primary-dark)]"><?php echo esc_html($title2); ?></span>
                <?php endif; ?>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-l from-[var(--color-primary)] to-[var(--color-primary-dark)] mx-auto rounded-full mt-5"></div>
            <?php endif; ?>
        </div>

        <!-- Two Column Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

            <!-- Right Column: FAQ Accordion -->
            <div class="lg:col-span-8 space-y-3" id="faq-accordion">

                <?php foreach ($faqs as $index => $faq) : 
                    $num = str_pad(tamin_en_to_fa($index + 1), 2, '۰', STR_PAD_LEFT);
                    $is_active = ($index === 0);
                ?>
                <!-- FAQ Item <?php echo esc_attr($num); ?> -->
                <div class="faq-row <?php echo $is_active ? 'active' : ''; ?>" data-index="<?php echo esc_attr($index); ?>">
                    <button class="faq-header w-full <?php echo $is_active ? 'bg-[var(--color-bg-base)]' : 'bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40'; ?> rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/<?php echo $is_active ? '50' : '30'; ?> shrink-0 leading-none font-mono"><?php echo esc_html($num); ?></span>
                            <span class="faq-title <?php echo $is_active ? 'font-extrabold text-neutral-900' : 'font-semibold text-neutral-600'; ?> text-sm md:text-base leading-snug"><?php echo esc_html($faq['question']); ?></span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full <?php echo $is_active ? 'bg-primary text-neutral-900' : 'bg-neutral-100 text-neutral-400'; ?> flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid <?php echo $is_active ? 'fa-minus' : 'fa-plus'; ?> text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid <?php echo $is_active ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'; ?> transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                <?php echo nl2br(esc_html($faq['answer'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <!-- Left Column: Testimonials -->
            <div class="lg:col-span-4 bg-[var(--color-surface-warm)] text-neutral-900 rounded-[2.5rem] p-8 flex flex-col justify-between h-full relative overflow-hidden shadow-xl">
                <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-[var(--color-primary-light)]/30 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col gap-6">
                    <?php if (!empty($testimonials_title)) : ?>
                    <div class="flex items-center justify-between">
                        <span class="text-neutral-900/40 text-xs font-semibold"><?php echo esc_html($testimonials_title); ?></span>
                    </div>
                    <?php endif; ?>

                    <svg class="w-10 h-8 text-[var(--color-primary-dark)]/20" viewBox="0 0 48 36" fill="currentColor">
                        <path d="M12.8 36C10.1333 36 7.8 35.1333 5.8 33.4C3.8 31.6667 2.33333 29.3333 1.4 26.4C0.466667 23.4667 0 20.2 0 16.6C0 12.0667 1.06667 8.26667 3.2 5.2C5.33333 2.13333 8.33333 0.4 12.2 0L14.2 4.4C11.8 4.93333 10.0667 6.13333 9 8C7.93333 9.86667 7.4 12.2667 7.4 15.2H14.8V36H12.8ZM33.8 36C31.1333 36 28.8 35.1333 26.8 33.4C24.8 31.6667 23.3333 29.3333 22.4 26.4C21.4667 23.4667 21 20.2 21 16.6C21 12.0667 22.0667 8.26667 24.2 5.2C26.3333 2.13333 29.3333 0.4 33.2 0L35.2 4.4C32.8 4.93333 31.0667 6.13333 30 8C28.9333 9.86667 28.4 12.2667 28.4 15.2H35.8V36H33.8Z" />
                    </svg>

                    <?php
                    $default_testimonials = [
                        [
                            'text' => 'برخورد پرسنل مرکز تامین پلاسما نوژین فوق‌العاده حرفه‌ای و صمیمی است. محیط کاملاً بهداشتی و آرامش‌بخش است و حس خوبی از کمک به بیماران دارم.',
                            'user' => 'سارا راد',
                            'role' => 'اهداکننده مستمر',
                            'avatar' => 'https://i.pravatar.cc/150?u=sara'
                        ]
                    ];
                    $testimonials_json = get_theme_mod('tamin_testimonials_list', wp_json_encode($default_testimonials));
                    $testimonials = json_decode($testimonials_json, true);
                    if (!is_array($testimonials) || empty($testimonials)) {
                        $testimonials = $default_testimonials;
                    }
                    $first_testimonial = $testimonials[0];
                    ?>

                    <p id="testimonial-text" class="text-neutral-800 text-sm leading-[2.2] font-medium transition-opacity duration-300 min-h-[90px]">
                        <?php echo esc_html($first_testimonial['text']); ?>
                    </p>

                    <div class="flex items-end justify-between mt-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-[var(--color-primary-dark)]/40 shrink-0">
                                <img id="testimonial-avatar" src="<?php echo esc_url($first_testimonial['avatar']); ?>" alt="" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <span id="testimonial-name" class="text-neutral-900 font-bold text-sm block"><?php echo esc_html($first_testimonial['user']); ?></span>
                                <span id="testimonial-role" class="text-neutral-700/80 text-xs"><?php echo esc_html($first_testimonial['role']); ?></span>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <button onclick="prevTestimonial()" aria-label="<?php esc_attr_e('قبلی', 'tamin-theme'); ?>" class="w-9 h-9 rounded-full bg-white hover:bg-[var(--color-primary)] border border-neutral-300/60 flex items-center justify-center text-neutral-800 transition-all cursor-pointer shadow-sm">
                                <i class="fa-solid fa-caret-right text-xs"></i>
                            </button>
                            <button onclick="nextTestimonial()" aria-label="<?php esc_attr_e('بعدی', 'tamin-theme'); ?>" class="w-9 h-9 rounded-full bg-white hover:bg-[var(--color-primary)] border border-neutral-300/60 flex items-center justify-center text-neutral-800 transition-all cursor-pointer shadow-sm">
                                <i class="fa-solid fa-caret-left text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center gap-1.5 mt-2" id="testimonial-dots">
                        <?php foreach ($testimonials as $index => $testimonial) : ?>
                            <div class="h-1.5 rounded-full transition-all duration-500 <?php echo $index === 0 ? 'bg-[var(--color-primary-dark)] w-6' : 'bg-neutral-300 w-1.5'; ?>" data-dot="<?php echo esc_attr($index); ?>"></div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php if (!empty($testimonials_rating)) : ?>
                <div class="relative z-10 border-t border-neutral-900/10 pt-4 mt-auto flex items-center justify-between">
                    <div class="flex gap-0.5" id="testimonial-stars">
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                    </div>
                    <span class="text-neutral-500 text-xs font-semibold"><?php echo esc_html($testimonials_rating); ?></span>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php if ($cta_enabled && (!empty($cta_title1) || !empty($cta_desc))) : ?>
<!-- SECTION 2: CTA — Booking Conversion -->
<section class="w-full px-4" dir="rtl">
    <div class="lg:max-w-[1170px] mx-auto my-16 bg-[#FFD970] rounded-[3.5rem] relative overflow-hidden min-h-[450px] shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center py-16 lg:py-24 px-8 lg:px-16">

        <div class="lg:col-span-6 p-0 text-right space-y-6 z-20 relative">
            <?php if (!empty($cta_badge)) : ?>
            <div class="text-[#7a4a00] text-[11px] md:text-xs font-semibold tracking-[0.2em] uppercase">
                <?php echo esc_html($cta_badge); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($cta_title1) || !empty($cta_title2)) : ?>
            <h2 class="font-bold text-2xl lg:text-4xl text-[#1a0e00] leading-tight">
                <?php echo esc_html($cta_title1); ?>
                <?php if (!empty($cta_title2)) : ?>
                <span class="block mt-2"><?php echo esc_html($cta_title2); ?></span>
                <?php endif; ?>
            </h2>
            <?php endif; ?>
            <?php if (!empty($cta_desc)) : ?>
            <p class="text-[#4a2e00] text-sm md:text-base leading-loose max-w-xl opacity-90">
                <?php echo esc_html($cta_desc); ?>
            </p>
            <?php endif; ?>
            
            <?php if (!empty($cta_btn_text)) : ?>
            <div class="pt-4 flex flex-col items-start justify-start text-right gap-3">
                <a href="<?php echo esc_url($cta_btn_url); ?>"
                    class="inline-flex items-center gap-2 bg-[#1a0e00] text-[#FFD970] font-bold py-[14px] px-[28px] rounded-[8px] text-base hover:bg-[#2d1a00] transition-colors duration-300 shadow-md cursor-pointer">
                    <span><?php echo esc_html($cta_btn_text); ?></span>
                    <i class="fa-solid fa-arrow-left text-sm mr-1"></i>
                </a>

                <?php if (!empty($cta_tag1) || !empty($cta_tag2)) : ?>
                <div class="flex items-center gap-3 text-[#4a2e00]/70 text-[11px] mt-2">
                    <?php if (!empty($cta_tag1)) : ?>
                    <i class="fa-solid fa-shield-halved"></i>
                    <span><?php echo esc_html($cta_tag1); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($cta_tag1) && !empty($cta_tag2)) : ?>
                    <span>·</span>
                    <?php endif; ?>
                    <?php if (!empty($cta_tag2)) : ?>
                    <i class="fa-solid fa-clock"></i>
                    <span><?php echo esc_html($cta_tag2); ?></span>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($cta_image)) : ?>
        <div class="lg:col-span-6 h-full w-full lg:w-1/2 absolute lg:absolute left-0 top-0 z-10 overflow-hidden">
            <img src="<?php echo esc_url($cta_image); ?>" alt="<?php echo esc_attr($cta_title1); ?>" class="w-full h-full object-cover absolute inset-0">
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>

<script>
const testimonials = <?php echo wp_json_encode($testimonials); ?>;

let currentIdx = 0;

function updateDots(idx) {
    document.querySelectorAll('#testimonial-dots [data-dot]').forEach((dot, i) => {
        dot.classList.toggle('bg-[var(--color-primary-dark)]', i === idx);
        dot.classList.toggle('w-6', i === idx);
        dot.classList.toggle('bg-neutral-300', i !== idx);
        dot.classList.toggle('w-1.5', i !== idx);
    });
}

function updateTestimonial() {
    const textEl = document.getElementById('testimonial-text');
    const nameEl = document.getElementById('testimonial-name');
    const roleEl = document.getElementById('testimonial-role');
    const avatarEl = document.getElementById('testimonial-avatar');
    if (!textEl || !nameEl || !roleEl || !avatarEl) return;
    const data = testimonials[currentIdx];

    textEl.style.opacity = 0;
    setTimeout(() => {
        textEl.textContent = data.text;
        nameEl.textContent = data.user;
        roleEl.textContent = data.role;
        avatarEl.src = data.avatar;
        textEl.style.opacity = 1;
    }, 300);
    updateDots(currentIdx);
}

function nextTestimonial() {
    currentIdx = (currentIdx + 1) % testimonials.length;
    updateTestimonial();
}

function prevTestimonial() {
    currentIdx = (currentIdx - 1 + testimonials.length) % testimonials.length;
    updateTestimonial();
}

document.addEventListener('DOMContentLoaded', () => {
    const faqRows = document.querySelectorAll('.faq-row');

    faqRows.forEach(row => {
        const header = row.querySelector('.faq-header');
        const wrapper = row.querySelector('.faq-content-wrapper');
        const iconBtn = row.querySelector('.faq-icon-btn');
        if (!header || !wrapper || !iconBtn) return;
        const icon = iconBtn.querySelector('i');
        const title = row.querySelector('.faq-title');

        header.addEventListener('click', () => {
            const isActive = row.classList.contains('active');

            faqRows.forEach(other => {
                if (other !== row) {
                    other.classList.remove('active');
                    const otherWrapper = other.querySelector('.faq-content-wrapper');
                    if (otherWrapper) otherWrapper.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
                    const otherIconBtn = other.querySelector('.faq-icon-btn');
                    if (otherIconBtn) {
                        const otherIcon = otherIconBtn.querySelector('i');
                        otherIconBtn.classList.remove('bg-primary', 'text-neutral-900');
                        otherIconBtn.classList.add('bg-neutral-100', 'text-neutral-400');
                        if (otherIcon) otherIcon.classList.replace('fa-minus', 'fa-plus');
                    }
                    const otherTitle = other.querySelector('.faq-title');
                    if (otherTitle) {
                        otherTitle.classList.replace('font-extrabold', 'font-semibold');
                        otherTitle.classList.replace('text-neutral-900', 'text-neutral-600');
                    }
                    const otherHeader = other.querySelector('.faq-header');
                    if (otherHeader) {
                        otherHeader.classList.remove('border-primary/40');
                        otherHeader.classList.add('border-neutral-200/80');
                    }
                }
            });

            if (isActive) {
                row.classList.remove('active');
                wrapper.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
                iconBtn.classList.remove('bg-primary', 'text-neutral-900');
                iconBtn.classList.add('bg-neutral-100', 'text-neutral-400');
                if (icon) icon.classList.replace('fa-minus', 'fa-plus');
                if (title) {
                    title.classList.replace('font-extrabold', 'font-semibold');
                    title.classList.replace('text-neutral-900', 'text-neutral-600');
                }
                header.classList.remove('border-primary/40');
                header.classList.add('border-neutral-200/80');
            } else {
                row.classList.add('active');
                wrapper.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
                iconBtn.classList.add('bg-primary', 'text-neutral-900');
                iconBtn.classList.remove('bg-neutral-100', 'text-neutral-400');
                if (icon) icon.classList.replace('fa-plus', 'fa-minus');
                if (title) {
                    title.classList.replace('font-semibold', 'font-extrabold');
                    title.classList.replace('text-neutral-600', 'text-neutral-900');
                }
                header.classList.add('border-primary/40');
                header.classList.remove('border-neutral-200/80');
            }
        });
    });
});
</script>
