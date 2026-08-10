<?php
/**
 * Template Name: درباره ما (About Us)
 * Description: Custom page template for About Us page.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="w-full bg-[var(--color-bg-base)] min-h-screen font-sans relative overflow-hidden" dir="rtl">
    
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute top-1/3 right-0 w-[300px] h-[600px] bg-[var(--color-secondary)]/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <!-- 1. HERO SECTION -->
    <section class="relative w-full py-16 lg:py-24">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 space-y-6 text-right order-2 lg:order-1 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div class="inline-flex items-center gap-2 bg-primary/10 text-[var(--color-text-main)] text-xs font-black px-4 py-2 rounded-full border border-[var(--color-primary)]/20 shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                        <?php esc_html_e('داستان نوژین', 'tamin-theme'); ?>
                    </div>
                    <h1 class="font-black text-3xl md:text-4xl lg:text-5xl leading-tight text-[var(--color-text-main)]">
                        <?php esc_html_e('پیشرو در تأمین سلامت و', 'tamin-theme'); ?>
                        <span class="block bg-gradient-to-l from-[var(--color-primary-dark)] to-[var(--color-primary)] bg-clip-text text-transparent mt-2 pb-1"><?php esc_html_e('توسعه بیوتکنولوژی پلاسما', 'tamin-theme'); ?></span>
                    </h1>
                    <p class="text-sm md:text-base text-[var(--color-text-muted)] leading-loose text-justify font-medium">
                        <?php esc_html_e('شرکت تامین پلاسما نوژین با هدف ارتقای سطح سلامت جامعه و خودکفایی در تولید فرآورده‌های پلاسمایی، فعالیت خود را آغاز نموده است. ما با بهره‌گیری از دانش روز دنیا و استانداردهای بین‌المللی، پلی میان اهدای ایثارگرانه و درمان‌های نجات‌بخش ساخته‌ایم. در نوژین، هر قطره پلاسما داستانی از امید و زندگی دوباره را روایت می‌کند که با تکیه بر تکنولوژی‌های پیشرفته بیوتکنولوژی به واقعیت می‌پیوندد.', 'tamin-theme'); ?>
                    </p>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="<?php echo esc_url(home_url('/request')); ?>" class="bg-[var(--color-secondary)] hover:bg-[var(--color-secondary-light)] text-white font-black px-6 py-3 rounded-full text-xs md:text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                            <?php esc_html_e('همکاری به عنوان اهداکننده', 'tamin-theme'); ?>
                        </a>
                        <a href="#vision" class="border border-[var(--color-border-subtle)] hover:bg-white text-[var(--color-text-main)] font-bold px-6 py-3 rounded-full text-xs md:text-sm hover:border-[var(--color-primary)] transition-all duration-300">
                            <?php esc_html_e('اهداف و چشم‌اندازها', 'tamin-theme'); ?>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6 order-1 lg:order-2 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/10] rounded-[3.5rem] overflow-hidden shadow-2xl border border-[var(--color-border-subtle)] group">
                        <img src="<?php echo esc_url(tamin_img_url('about-page.webp')); ?>" alt="<?php esc_attr_e('محیط مفهومی و نمادین داستان نوژین', 'tamin-theme'); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-secondary)]/30 via-transparent to-transparent opacity-80 group-hover:opacity-40 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-[3.5rem] pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. VALUE PROPOSITION MATRIX -->
    <section id="vision" class="w-full py-16 bg-[var(--color-bg-lightest)] border-y border-[var(--color-border-subtle)] relative">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-4 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                <h2 class="font-black text-2xl md:text-3xl text-[var(--color-text-main)]"><?php esc_html_e('ارزش‌ها و بنیان‌های اخلاقی ما', 'tamin-theme'); ?></h2>
                <div class="w-16 h-1 bg-primary mx-auto rounded-full"></div>
                <p class="text-xs md:text-sm text-[var(--color-text-muted)] leading-relaxed"><?php esc_html_e('تعهد به سلامت جامعه و استانداردهای بین‌المللی بیوتکنولوژی، زیربنای تمامی فعالیت‌های ما در نوژین است.', 'tamin-theme'); ?></p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                <!-- Card 1 -->
                <div class="bg-surface-warm border border-[var(--color-border-neutral-200)]/60 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group cursor-pointer flex flex-col justify-between hover:bg-primary animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-neutral-900 mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-bullseye text-2xl"></i>
                        </div>
                        <h3 class="font-black text-xl text-neutral-900 mb-3 transition-colors"><?php esc_html_e('مأموریت ما', 'tamin-theme'); ?></h3>
                        <p class="text-xs md:text-sm text-neutral-700 leading-relaxed text-justify font-normal group-hover:text-neutral-900 transition-colors">
                            <?php esc_html_e('تسهیل فرآیند اهدای پلاسما با بالاترین استانداردهای ایمنی و اخلاقی برای تأمین پایدار مواد اولیه داروهای خاص و حیاتی مورد نیاز بیماران در سطح ملی و منطقه‌ای.', 'tamin-theme'); ?>
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-surface-warm border border-[var(--color-border-neutral-200)]/60 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group cursor-pointer flex flex-col justify-between hover:bg-primary animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-100">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-neutral-900 mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-eye text-2xl"></i>
                        </div>
                        <h3 class="font-black text-xl text-neutral-900 mb-3 transition-colors"><?php esc_html_e('چشم‌انداز', 'tamin-theme'); ?></h3>
                        <p class="text-xs md:text-sm text-neutral-700 leading-relaxed text-justify font-normal group-hover:text-neutral-900 transition-colors">
                            <?php esc_html_e('تبدیل شدن به بزرگترین و معتبرترین شبکه مراکز جمع‌آوری پلاسما در خاورمیانه و پیشرو در بومی‌سازی دانش فنی تولید فرآورده‌های مشتق از پلاسما تا سال ۱۴۰۸.', 'tamin-theme'); ?>
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-surface-warm border border-[var(--color-border-neutral-200)]/60 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group cursor-pointer flex flex-col justify-between hover:bg-primary animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-neutral-900 mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-heart text-2xl"></i>
                        </div>
                        <h3 class="font-black text-xl text-neutral-900 mb-3 transition-colors"><?php esc_html_e('ارزش‌های ما', 'tamin-theme'); ?></h3>
                        <p class="text-xs md:text-sm text-neutral-700 leading-relaxed text-justify font-normal group-hover:text-neutral-900 transition-colors">
                            <?php esc_html_e('شفافیت در عملکرد، تکریم اهداکنندگان به عنوان سرمایه‌های معنوی، تعهد به کیفیت بی‌قید و شرط و نوآوری مستمر در خدمات بیوتکنولوژی، ارکان اصلی فرهنگ سازمانی ما هستند.', 'tamin-theme'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. STATISTICS SECTION -->
    <section class="w-full py-16" id="about-stats-section">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center relative z-10">
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll opacity-0 translate-y-12">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="rtl">
                        <span class="text-primary text-3xl font-extrabold ml-1">+</span>
                        <span class="about-counter-value text-neutral-900" data-target="10">۰</span>
                        <span class="text-xl md:text-2xl mr-2 text-neutral-500 font-bold"><?php esc_html_e('سال', 'tamin-theme'); ?></span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold"><?php esc_html_e('سابقه درخشان', 'tamin-theme'); ?></span>
                </div>
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll opacity-0 translate-y-12 delay-100">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="rtl">
                        <span class="text-primary text-3xl font-extrabold ml-1">+</span>
                        <span class="about-counter-value text-neutral-900" data-target="50">۰</span>
                        <span class="text-xl md:text-2xl mr-2 text-neutral-500 font-bold"><?php esc_html_e('هزار', 'tamin-theme'); ?></span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold"><?php esc_html_e('اهداکننده وفادار', 'tamin-theme'); ?></span>
                </div>
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll opacity-0 translate-y-12 delay-200">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="rtl">
                        <span class="about-counter-value text-neutral-900" data-target="12">۰</span>
                        <span class="text-xl md:text-2xl mr-2 text-neutral-500 font-bold"><?php esc_html_e('شعبه', 'tamin-theme'); ?></span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold"><?php esc_html_e('در سراسر کشور', 'tamin-theme'); ?></span>
                </div>
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll opacity-0 translate-y-12 delay-300">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="ltr">
                        <span class="about-counter-value text-neutral-900" data-target="100">۰</span>
                        <span class="text-3xl lg:text-4xl ml-1 text-neutral-500 font-bold">٪</span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold"><?php esc_html_e('تجهیزات مدرن', 'tamin-theme'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CERTIFICATES & STANDARDS DISPLAY (Trust Badges Row) -->
    <section class="w-full py-16 bg-[var(--color-bg-lightest)] border-y border-[var(--color-border-subtle)]">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <h2 class="text-center font-black text-2xl lg:text-3xl text-[var(--color-text-main)] mb-12 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                <?php esc_html_e('استانداردها و مجوزهای بین‌المللی نوژین', 'tamin-theme'); ?>
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-stretch">
                <!-- Badge 1 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-shield-halved text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    <?php esc_html_e('مجوز رسمی وزارت بهداشت', 'tamin-theme'); ?>
                </div>
                <!-- Badge 2 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-100">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-certificate text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    <?php esc_html_e('استاندارد GMP', 'tamin-theme'); ?>
                </div>
                <!-- Badge 3 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-flask-vial text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    <?php esc_html_e('تأییدیه سازمان غذا و دارو', 'tamin-theme'); ?>
                </div>
                <!-- Badge 4 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-300">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-microscope text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    <?php esc_html_e('ایزو ۹۰۰۱ مدیریت کیفیت', 'tamin-theme'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA SECTION -->
    <section class="w-full px-6 mb-8 relative z-10 animate-on-scroll opacity-0 translate-y-12" dir="rtl">
        <div class="max-w-screen-xl mx-auto my-16 bg-[#FFD970] rounded-[3.5rem] relative overflow-hidden min-h-[450px] shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center py-16 lg:py-24 px-8 lg:px-16">
            <div class="lg:col-span-6 p-0 text-right space-y-6 z-20 relative">
                <div class="text-[#7a4a00] text-[11px] md:text-xs font-semibold tracking-[0.2em] uppercase font-mono">
                    <?php esc_html_e('با ما همراه شوید', 'tamin-theme'); ?>
                </div>
                <h2 class="font-bold text-2xl lg:text-4xl text-[#1a0e00] leading-tight">
                    <?php esc_html_e('با ما در مسیر نجات جان انسان‌ها همراه شوید', 'tamin-theme'); ?>
                </h2>
                <p class="text-[#4a2e00] text-sm md:text-base leading-loose max-w-xl opacity-90">
                    <?php esc_html_e('هر اهداکننده پلاسما، سفیر امید و تپش دوباره زندگی در جامعه است. با اهدای پلاسما، به بیماران نیازمند فرصتی دوباره برای زندگی ببخشید.', 'tamin-theme'); ?>
                </p>
                <div class="pt-4 flex flex-col items-start justify-start text-right gap-3">
                    <a href="<?php echo esc_url(home_url('/request')); ?>"
                        class="inline-flex items-center gap-2 bg-[#1a0e00] text-[#FFD970] font-bold py-[14px] px-[28px] rounded-[8px] text-base hover:bg-[#2d1a00] transition-colors duration-300 shadow-md cursor-pointer group">
                        <span><?php esc_html_e('رزرو سریع نوبت اهدا', 'tamin-theme'); ?></span>
                        <i class="fa-solid fa-arrow-left text-sm mr-1 transition-transform duration-300 group-hover:-translate-x-1"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6 h-full w-full lg:w-1/2 absolute lg:absolute left-0 top-0 z-10 overflow-hidden">
                <img src="<?php echo esc_url(tamin_img_url('cta_healthy.webp')); ?>" alt="<?php esc_attr_e('نجات جان انسان‌ها', 'tamin-theme'); ?>" class="w-full h-full object-cover absolute inset-0">
            </div>
        </div>
    </section>

</main>

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

<?php
get_footer();
