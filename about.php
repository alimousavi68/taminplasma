<?php 
$page_title = 'درباره ما - تامین پلاسما نوژین';
$page_description = 'شرکت تامین پلاسما نوژین، پیشرو در ارتقای سطح سلامت جامعه، بومی‌سازی دانش فنی و خودکفایی در تولید فرآورده‌های پلاسمایی.';
require_once 'template-parts/header.php'; 
?>

<main class="w-full bg-[var(--color-bg-base)] min-h-screen font-yekan relative overflow-hidden" dir="rtl">
    
    <!-- Decorative background elements for high-end luxury feel -->
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute top-1/3 right-0 w-[300px] h-[600px] bg-[var(--color-secondary)]/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <!-- 1. HERO SECTION: THE STORY WRAPPER -->
    <section class="relative w-full py-16 lg:py-24">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Right Column (Typography Content) -->
                <div class="lg:col-span-6 space-y-6 text-right order-2 lg:order-1 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div class="inline-flex items-center gap-2 bg-primary/10 text-[var(--color-text-main)] text-xs font-black px-4 py-2 rounded-full border border-[var(--color-primary)]/20 shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                        داستان نوژین
                    </div>
                    <h1 class="font-black text-3xl md:text-4xl lg:text-5xl leading-tight text-[var(--color-text-main)]">
                        پیشرو در تأمین سلامت و 
                        <span class="block bg-gradient-to-l from-[var(--color-primary-dark)] to-[var(--color-primary)] bg-clip-text text-transparent mt-2 pb-1">توسعه بیوتکنولوژی پلاسما</span>
                    </h1>
                    <p class="text-sm md:text-base text-[var(--color-text-muted)] leading-loose text-justify font-medium">
                        شرکت تامین پلاسما نوژین با هدف ارتقای سطح سلامت جامعه و خودکفایی در تولید فرآورده‌های پلاسمایی، فعالیت خود را آغاز نموده است. ما با بهره‌گیری از دانش روز دنیا و استانداردهای بین‌المللی، پلی میان اهدای ایثارگرانه و درمان‌های نجات‌بخش ساخته‌ایم. در نوژین، هر قطره پلاسما داستانی از امید و زندگی دوباره را روایت می‌کند که با تکیه بر تکنولوژی‌های پیشرفته بیوتکنولوژی به واقعیت می‌پیوندد.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="request.php" class="bg-[var(--color-secondary)] hover:bg-[var(--color-secondary-light)] text-white font-black px-6 py-3 rounded-full text-xs md:text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                            همکاری به عنوان اهداکننده
                        </a>
                        <a href="#vision" class="border border-[var(--color-border-subtle)] hover:bg-white text-[var(--color-text-main)] font-bold px-6 py-3 rounded-full text-xs md:text-sm hover:border-[var(--color-primary)] transition-all duration-300">
                            اهداف و چشم‌اندازها
                        </a>
                    </div>
                </div>

                <!-- Left Column (Media Canvas) -->
                <div class="lg:col-span-6 order-1 lg:order-2 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/10] rounded-[3.5rem] overflow-hidden shadow-2xl border border-[var(--color-border-subtle)] group">
                        <img src="public/about-page.webp" alt="محیط مفهومی و نمادین داستان نوژین" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <!-- Decorative ambient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[var(--color-secondary)]/30 via-transparent to-transparent opacity-80 group-hover:opacity-40 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-[3.5rem] pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. VALUE PROPOSITION MATRIX (Mission, Vision, Values) -->
    <section id="vision" class="w-full py-16 bg-[var(--color-bg-lightest)] border-y border-[var(--color-border-subtle)] relative">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-4 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                <h2 class="font-black text-2xl md:text-3xl text-[var(--color-text-main)]">ارزش‌ها و بنیان‌های اخلاقی ما</h2>
                <div class="w-16 h-1 bg-primary mx-auto rounded-full"></div>
                <p class="text-xs md:text-sm text-[var(--color-text-muted)] leading-relaxed">تعهد به سلامت جامعه و استانداردهای بین‌المللی بیوتکنولوژی، زیربنای تمامی فعالیت‌های ما در نوژین است.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                <!-- Card: Mission -->
                <div class="bg-surface-warm border border-[var(--color-border-neutral-200)]/60 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group cursor-pointer flex flex-col justify-between hover:bg-primary animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-neutral-900 mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-bullseye text-2xl"></i>
                        </div>
                        <h3 class="font-black text-xl text-neutral-900 mb-3 transition-colors">مأموریت ما</h3>
                        <p class="text-xs md:text-sm text-neutral-700 leading-relaxed text-justify font-normal group-hover:text-neutral-900 transition-colors">
                            تسهیل فرآیند اهدای پلاسما با بالاترین استانداردهای ایمنی و اخلاقی برای تأمین پایدار مواد اولیه داروهای خاص و حیاتی مورد نیاز بیماران در سطح ملی و منطقه‌ای.
                        </p>
                    </div>
                </div>

                <!-- Card: Vision -->
                <div class="bg-surface-warm border border-[var(--color-border-neutral-200)]/60 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group cursor-pointer flex flex-col justify-between hover:bg-primary animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-100">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-neutral-900 mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-eye text-2xl"></i>
                        </div>
                        <h3 class="font-black text-xl text-neutral-900 mb-3 transition-colors">چشم‌انداز</h3>
                        <p class="text-xs md:text-sm text-neutral-700 leading-relaxed text-justify font-normal group-hover:text-neutral-900 transition-colors">
                            تبدیل شدن به بزرگترین و معتبرترین شبکه مراکز جمع‌آوری پلاسما در خاورمیانه و پیشرو در بومی‌سازی دانش فنی تولید فرآورده‌های مشتق از پلاسما تا سال ۱۴۰۸.
                        </p>
                    </div>
                </div>

                <!-- Card: Values -->
                <div class="bg-surface-warm border border-[var(--color-border-neutral-200)]/60 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group cursor-pointer flex flex-col justify-between hover:bg-primary animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-neutral-900 mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-sm">
                            <i class="fa-solid fa-heart text-2xl"></i>
                        </div>
                        <h3 class="font-black text-xl text-neutral-900 mb-3 transition-colors">ارزش‌های ما</h3>
                        <p class="text-xs md:text-sm text-neutral-700 leading-relaxed text-justify font-normal group-hover:text-neutral-900 transition-colors">
                            شفافیت در عملکرد، تکریم اهداکنندگان به عنوان سرمایه‌های معنوی، تعهد به کیفیت بی‌قید و شرط و نوآوری مستمر در خدمات بیوتکنولوژی، ارکان اصلی فرهنگ سازمانی ما هستند.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TRUST STATISTICS HUB (Floating Metrics Grid) -->
    <section class="w-full py-16" id="about-stats-section">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center relative z-10">
                <!-- Stat 1 -->
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="rtl">
                        <span class="text-primary text-3xl font-extrabold ml-1">+</span>
                        <span class="about-counter-value text-neutral-900" data-target="10">۰</span>
                        <span class="text-xl md:text-2xl mr-2 text-neutral-500 font-bold">سال</span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold">سابقه درخشان</span>
                </div>
                <!-- Stat 2 -->
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-100">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="rtl">
                        <span class="text-primary text-3xl font-extrabold ml-1">+</span>
                        <span class="about-counter-value text-neutral-900" data-target="50">۰</span>
                        <span class="text-xl md:text-2xl mr-2 text-neutral-500 font-bold">هزار</span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold">اهداکننده وفادار</span>
                </div>
                <!-- Stat 3 -->
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="rtl">
                        <span class="about-counter-value text-neutral-900" data-target="12">۰</span>
                        <span class="text-xl md:text-2xl mr-2 text-neutral-500 font-bold">شعبه</span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold">در سراسر کشور</span>
                </div>
                <!-- Stat 4 -->
                <div class="bg-white border border-[var(--color-border-neutral-200)]/85 rounded-[2.5rem] p-8 flex flex-col items-center justify-center space-y-3 shadow-sm hover:shadow-md hover:-translate-y-1.5 transition-all duration-300 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-300">
                    <div class="flex items-center text-4xl lg:text-5xl font-black text-neutral-900" dir="ltr">
                        <span class="about-counter-value text-neutral-900" data-target="100">۰</span>
                        <span class="text-3xl lg:text-4xl ml-1 text-neutral-500 font-bold">٪</span>
                    </div>
                    <span class="text-xs md:text-sm text-[var(--color-text-muted)] font-bold">تجهیزات مدرن</span>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.about-counter-value');
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
        
        // Scroll Animations using IntersectionObserver
        const scrollElements = document.querySelectorAll('.animate-on-scroll');
        const scrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-12');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.05,
            rootMargin: '0px 0px -40px 0px'
        });
        scrollElements.forEach(el => scrollObserver.observe(el));
    });
    </script>

    <!-- 4. CERTIFICATES & STANDARDS DISPLAY (Trust Badges Row) -->
    <section class="w-full py-16 bg-[var(--color-bg-lightest)] border-y border-[var(--color-border-subtle)]">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12">
            <h2 class="text-center font-black text-2xl lg:text-3xl text-[var(--color-text-main)] mb-12 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                استانداردها و مجوزهای بین‌المللی نوژین
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-stretch">
                <!-- Badge 1 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-shield-halved text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    مجوز رسمی وزارت بهداشت
                </div>
                <!-- Badge 2 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-100">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-certificate text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    استاندارد GMP
                </div>
                <!-- Badge 3 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-flask-vial text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    تأییدیه سازمان غذا و دارو
                </div>
                <!-- Badge 4 -->
                <div class="border border-[var(--color-border-neutral-200)]/80 rounded-[2rem] bg-white hover:border-[var(--color-primary)] hover:-translate-y-1 hover:shadow-md hover:shadow-primary/5 transition-all duration-300 flex flex-col items-center justify-center p-6 text-center text-xs text-[var(--color-text-main)] font-black shadow-sm group animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-300">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 group-hover:bg-primary/20 group-hover:scale-110 flex items-center justify-center text-neutral-900 mb-3 transition-all duration-300">
                        <i class="fa-solid fa-microscope text-2xl text-[var(--color-primary-dark)]"></i>
                    </div>
                    ایزو ۹۰۰۱ مدیریت کیفیت
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Redesigned Funnel CTA (Matching the Premium Brand Split-Screen style) -->
    <section class="w-full px-6 mb-8 relative z-10 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12" dir="rtl">
        <div class="max-w-screen-xl mx-auto my-16 bg-[#FFD970] rounded-[3.5rem] relative overflow-hidden min-h-[450px] shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center py-16 lg:py-24 px-8 lg:px-16 border border-[var(--color-border-subtle)]/10">
            <!-- Right Column: Text & Action -->
            <div class="lg:col-span-6 p-0 text-right space-y-6 z-20 relative">
                <div class="text-[#7a4a00] text-[11px] md:text-xs font-semibold tracking-[0.2em] uppercase font-mono">
                    با ما همراه شوید
                </div>
                <h2 class="font-bold text-2xl lg:text-4xl text-[#1a0e00] leading-tight">
                    با ما در مسیر نجات جان انسان‌ها همراه شوید
                </h2>
                <p class="text-[#4a2e00] text-sm md:text-base leading-loose max-w-xl opacity-90">
                    هر اهداکننده پلاسما، سفیر امید و تپش دوباره زندگی در جامعه است. با اهدای پلاسما، به بیماران نیازمند فرصتی دوباره برای زندگی ببخشید.
                </p>
                <div class="pt-4 flex flex-col items-start justify-start text-right gap-3">
                    <a href="request.php"
                        class="inline-flex items-center gap-2 bg-[#1a0e00] text-[#FFD970] font-bold py-[14px] px-[28px] rounded-[8px] text-base hover:bg-[#2d1a00] transition-colors duration-300 shadow-md cursor-pointer group">
                        <span>رزرو سریع نوبت اهدا</span>
                        <i class="fa-solid fa-arrow-left text-sm mr-1 transition-transform duration-300 group-hover:-translate-x-1"></i>
                    </a>

                    <!-- Micro-trust signals -->
                    <div class="flex items-center gap-3 text-[#4a2e00]/70 text-[11px] mt-2">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>اطلاعات شما کاملاً محفوظ است</span>
                        <span>·</span>
                        <i class="fa-solid fa-clock"></i>
                        <span>مراجعه رایگان</span>
                    </div>
                </div>
            </div>

            <!-- Left Column: Image Canvas -->
            <div class="lg:col-span-6 h-full w-full lg:w-1/2 absolute lg:absolute left-0 top-0 z-10 overflow-hidden">
                <img src="public/cta_healthy.webp" alt="نجات جان انسان‌ها با تامین پلاسما" class="w-full h-full object-cover absolute inset-0">
            </div>
        </div>
    </section>

</main>

<?php include 'template-parts/footer.php'; ?>