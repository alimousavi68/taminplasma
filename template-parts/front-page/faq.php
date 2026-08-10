<?php
/**
 * Front Page FAQ & CTA Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;
?>
<!-- SECTION 1: FAQ + TESTIMONIALS (Dual Column) -->
<section class="w-full py-20 lg:py-24 bg-white relative overflow-hidden" dir="rtl">

    <!-- Dot Pattern Background -->
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(30,41,59,0.04) 1.5px, transparent 1.5px); background-size: 28px 28px;"></div>

    <div class="container mx-auto px-4 lg:max-w-[1170px] relative z-10">

        <!-- Section Header -->
        <div class="text-center mb-14 lg:mb-20">
            <div class="inline-flex items-center gap-2 bg-primary/10 border border-primary/20 text-neutral-900 font-black text-xs px-4 py-2 rounded-full mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                <?php esc_html_e('پاسخگوی سوالات شما هستیم', 'tamin-theme'); ?>
            </div>
            <h2 class="font-black text-3xl lg:text-5xl text-neutral-900 leading-tight">
                <?php esc_html_e('سوالات متداول', 'tamin-theme'); ?>
                <span class="text-[var(--color-primary-dark)]"><?php esc_html_e(' شما', 'tamin-theme'); ?></span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-l from-[var(--color-primary)] to-[var(--color-primary-dark)] mx-auto rounded-full mt-5"></div>
        </div>

        <!-- Two Column Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

            <!-- Right Column: FAQ Accordion -->
            <div class="lg:col-span-8 space-y-3" id="faq-accordion">

                <!-- FAQ Item 1 -->
                <div class="faq-row active" data-index="0">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.12)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/50 shrink-0 leading-none font-mono">۰۱</span>
                            <span class="faq-title font-extrabold text-neutral-900 text-sm md:text-base leading-snug"><?php esc_html_e('اهدای پلاسما چیست و چه تفاوتی با اهدای خون دارد؟', 'tamin-theme'); ?></span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-primary text-neutral-900 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-minus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[1fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                <?php esc_html_e('در اهدای پلاسما، تنها بخش مایع خون (پلاسما) جمع‌آوری می‌شود و سلول‌های خونی (گلبول‌های قرمز و سفید) به بدن اهداکننده بازگردانده می‌شوند. این فرآیند به بیماران دارای نقص ایمنی و هموفیلی کمک شایانی می‌کند.', 'tamin-theme'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-row" data-index="1">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۲</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug"><?php esc_html_e('آیا اهدای پلاسما برای سلامتی ضرر دارد؟', 'tamin-theme'); ?></span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                <?php esc_html_e('خیر، اهدای پلاسما یک فرآیند ایمن است که تحت نظارت پزشک انجام می‌شود. پلاسما سریع‌تر از خون در بدن جایگزین می‌شود و اهداکنندگان می‌توانند به طور مستمر در این امر خیر مشارکت کنند.', 'tamin-theme'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-row" data-index="2">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۳</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug"><?php esc_html_e('هر چند وقت یک‌بار می‌توان پلاسما اهدا کرد؟', 'tamin-theme'); ?></span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                <?php esc_html_e('طبق استانداردهای بهداشتی، شما می‌توانید تا دو بار در هفته با فاصله حداقل ۴۸ ساعت بین هر اهدا، پلاسما اهدا کنید. این تکرارپذیری به دلیل بازگشت سریع پلاسما به بدن است.', 'tamin-theme'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-row" data-index="3">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۴</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug"><?php esc_html_e('شرایط اصلی برای اهداکننده شدن چیست؟', 'tamin-theme'); ?></span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                <?php esc_html_e('داشتن سن بین ۱۸ تا ۶۰ سال، وزن حداقل ۵۰ کیلوگرم، همراه داشتن کارت ملی و برخورداری از سلامت عمومی از شرایط اصلی است. قبل از هر اهدا، یک معاینه پزشکی رایگان انجام می‌شود.', 'tamin-theme'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left Column: Testimonials -->
            <div class="lg:col-span-4 bg-[var(--color-surface-warm)] text-neutral-900 rounded-[2.5rem] p-8 flex flex-col justify-between h-full relative overflow-hidden shadow-xl">
                <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-[var(--color-primary-light)]/30 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col gap-6">
                    <div class="flex items-center justify-between">
                        <span class="text-neutral-900/40 text-xs font-semibold"><?php esc_html_e('نظرات مراجعین ما', 'tamin-theme'); ?></span>
                    </div>

                    <svg class="w-10 h-8 text-[var(--color-primary-dark)]/20" viewBox="0 0 48 36" fill="currentColor">
                        <path d="M12.8 36C10.1333 36 7.8 35.1333 5.8 33.4C3.8 31.6667 2.33333 29.3333 1.4 26.4C0.466667 23.4667 0 20.2 0 16.6C0 12.0667 1.06667 8.26667 3.2 5.2C5.33333 2.13333 8.33333 0.4 12.2 0L14.2 4.4C11.8 4.93333 10.0667 6.13333 9 8C7.93333 9.86667 7.4 12.2667 7.4 15.2H14.8V36H12.8ZM33.8 36C31.1333 36 28.8 35.1333 26.8 33.4C24.8 31.6667 23.3333 29.3333 22.4 26.4C21.4667 23.4667 21 20.2 21 16.6C21 12.0667 22.0667 8.26667 24.2 5.2C26.3333 2.13333 29.3333 0.4 33.2 0L35.2 4.4C32.8 4.93333 31.0667 6.13333 30 8C28.9333 9.86667 28.4 12.2667 28.4 15.2H35.8V36H33.8Z" />
                    </svg>

                    <p id="testimonial-text" class="text-neutral-800 text-sm leading-[2.2] font-medium transition-opacity duration-300 min-h-[90px]">
                        <?php esc_html_e('برخورد پرسنل مرکز تامین پلاسما نوژین فوق‌العاده حرفه‌ای و صمیمی است. محیط کاملاً بهداشتی و آرامش‌بخش است و حس خوبی از کمک به بیماران دارم.', 'tamin-theme'); ?>
                    </p>

                    <div class="flex items-end justify-between mt-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-[var(--color-primary-dark)]/40 shrink-0">
                                <img id="testimonial-avatar" src="https://i.pravatar.cc/150?u=sara" alt="" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <span id="testimonial-name" class="text-neutral-900 font-bold text-sm block"><?php esc_html_e('سارا راد', 'tamin-theme'); ?></span>
                                <span id="testimonial-role" class="text-neutral-700/80 text-xs"><?php esc_html_e('اهداکننده مستمر', 'tamin-theme'); ?></span>
                            </div>
                        </div>

                        <div class="flex gap-2">
                            <button onclick="prevTestimonial()" aria-label="قبلی" class="w-9 h-9 rounded-full bg-white hover:bg-[var(--color-primary)] border border-neutral-300/60 flex items-center justify-center text-neutral-800 transition-all cursor-pointer shadow-sm">
                                <i class="fa-solid fa-caret-right text-xs"></i>
                            </button>
                            <button onclick="nextTestimonial()" aria-label="بعدی" class="w-9 h-9 rounded-full bg-white hover:bg-[var(--color-primary)] border border-neutral-300/60 flex items-center justify-center text-neutral-800 transition-all cursor-pointer shadow-sm">
                                <i class="fa-solid fa-caret-left text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center gap-1.5 mt-2" id="testimonial-dots">
                        <div class="h-1.5 rounded-full bg-[var(--color-primary-dark)] transition-all duration-500 w-6" data-dot="0"></div>
                        <div class="h-1.5 rounded-full bg-neutral-300 transition-all duration-500 w-1.5" data-dot="1"></div>
                        <div class="h-1.5 rounded-full bg-neutral-300 transition-all duration-500 w-1.5" data-dot="2"></div>
                    </div>
                </div>

                <div class="relative z-10 border-t border-neutral-900/10 pt-4 mt-auto flex items-center justify-between">
                    <div class="flex gap-0.5" id="testimonial-stars">
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                        <i class="fa-solid fa-star text-[var(--color-primary-dark)] text-xs"></i>
                    </div>
                    <span class="text-neutral-500 text-xs font-semibold"><?php esc_html_e('امتیاز ۴.۹/۵ از نگاه مراجعین نوژین', 'tamin-theme'); ?></span>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: CTA — Booking Conversion -->
<section class="w-full px-4" dir="rtl">
    <div class="lg:max-w-[1170px] mx-auto my-16 bg-[#FFD970] rounded-[3.5rem] relative overflow-hidden min-h-[450px] shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center py-16 lg:py-24 px-8 lg:px-16">

        <div class="lg:col-span-6 p-0 text-right space-y-6 z-20 relative">
            <div class="text-[#7a4a00] text-[11px] md:text-xs font-semibold tracking-[0.2em] uppercase">
                <?php esc_html_e('همین امروز اقدام کنید', 'tamin-theme'); ?>
            </div>
            <h2 class="font-bold text-2xl lg:text-4xl text-[#1a0e00] leading-tight">
                <?php esc_html_e('پلاسمای شما،', 'tamin-theme'); ?> <span class="block mt-2"><?php esc_html_e('جان یک بیمار را نجات میدهد', 'tamin-theme'); ?></span>
            </h2>
            <p class="text-[#4a2e00] text-sm md:text-base leading-loose max-w-xl opacity-90">
                <?php esc_html_e('با یک اقدام ساده و رایگان، به بیماران مبتلا به هموفیلی، سوختگی‌های شدید و نقص ایمنی فرصت زندگی دوباره بدهید. مرکز نوژین با بالاترین استانداردهای بهداشتی همراه شماست.', 'tamin-theme'); ?>
            </p>
            <div class="pt-4 flex flex-col items-start justify-start text-right gap-3">
                <a href="<?php echo tamin_get_nav_url('tamin_request_url', '/request'); ?>"
                    class="inline-flex items-center gap-2 bg-[#1a0e00] text-[#FFD970] font-bold py-[14px] px-[28px] rounded-[8px] text-base hover:bg-[#2d1a00] transition-colors duration-300 shadow-md cursor-pointer">
                    <span><?php esc_html_e('همین حالا نوبت خود را رزرو کنید', 'tamin-theme'); ?></span>
                    <i class="fa-solid fa-arrow-left text-sm mr-1"></i>
                </a>

                <div class="flex items-center gap-3 text-[#4a2e00]/70 text-[11px] mt-2">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span><?php esc_html_e('اطلاعات شما کاملاً محفوظ است', 'tamin-theme'); ?></span>
                    <span>·</span>
                    <i class="fa-solid fa-clock"></i>
                    <span><?php esc_html_e('مراجعه رایگان', 'tamin-theme'); ?></span>
                </div>
            </div>
        </div>

        <div class="lg:col-span-6 h-full w-full lg:w-1/2 absolute lg:absolute left-0 top-0 z-10 overflow-hidden">
            <img src="<?php echo esc_url(tamin_img_url('cta_healthy.webp')); ?>" alt="<?php esc_attr_e('پلاسمای شما جان یک بیمار را نجات می‌دهد', 'tamin-theme'); ?>" class="w-full h-full object-cover absolute inset-0">
        </div>

    </div>
</section>

<script>
const testimonials = [
    {
        text: "برخورد پرسنل مرکز تامین پلاسما نوژین فوق‌العاده حرفه‌ای و صمیمی است. محیط کاملاً بهداشتی و آرامش‌بخش است و حس خوبی از کمک به بیماران دارم.",
        user: "سارا راد",
        role: "اهداکننده مستمر",
        avatar: "https://i.pravatar.cc/150?u=sara"
    },
    {
        text: "پلاسمای تولید شده در این مرکز با بالاترین استانداردهای بین‌المللی مطابق دارد. این محصولات حیاتی، جان بسیاری از بیماران خاص را نجات می‌دهند.",
        user: "دکتر محمدی",
        role: "متخصص ایمونولوژی",
        avatar: "https://i.pravatar.cc/150?u=mohammadi"
    },
    {
        text: "اولین تجربه‌ام از اهدای پلاسما بسیار عالی بود. فرآیند آن خیلی راحت‌تر از چیزی بود که فکر می‌کردم و خوشحالم که در این کار خیر سهیم شدم.",
        user: "امیرحسین",
        role: "اهداکننده",
        avatar: "https://i.pravatar.cc/150?u=amir"
    }
];

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
