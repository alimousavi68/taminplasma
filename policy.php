<?php include 'template-parts/header.php'; ?>

<main class="w-full bg-[var(--color-bg-base)] min-h-screen font-yekan overflow-x-hidden relative" dir="rtl">

    <!-- 1. HERO REFINEMENT (The Watermark Fix) -->
    <header class="w-full pt-28 pb-16 text-center relative overflow-visible">
        <!-- Delicate Watermark -->
        <div class="absolute left-1/2 -translate-x-1/2 top-10 pointer-events-none select-none z-0">
            <span class="font-black text-7xl lg:text-9xl text-neutral-200/30 whitespace-nowrap tracking-[0.2em]">نوژین</span>
        </div>
        
        <div class="max-w-screen-xl mx-auto px-6 relative z-10 space-y-6">
            <div class="inline-flex items-center gap-2">
                <span class="text-[10px] bg-white px-4 py-1.5 rounded-full text-[var(--color-text-muted)] border border-neutral-200/50 shadow-sm font-bold tracking-wider">
                    آخرین به‌روزرسانی: خرداد ۱۴۰۵
                </span>
            </div>
            
            <h1 class="font-black text-3xl md:text-5xl lg:text-6xl text-[var(--color-text-main)] leading-tight tracking-tight">
                خط مشی کیفیت و بیانیه سازمانی
            </h1>
            
            <p class="text-base md:text-lg text-[var(--color-text-muted)] max-w-2xl mx-auto leading-loose font-medium">
                تعهد به استانداردهای بین‌المللی بیوتکنولوژی و صیانت از سلامت اهداکنندگان؛ منشور راهبردی ما در مسیر حیات.
            </p>
        </div>
    </header>

    <!-- 2. PREMIUM BENTO GRID (Apple/Microsoft Style) -->
    <section class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-stretch my-10">
        
        <!-- Box 1: Tamin Isalat (md:col-span-8) -->
        <div class="md:col-span-8 bg-white border border-neutral-200/50 rounded-[2.5rem] p-8 lg:p-10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.02)] transition-all duration-300 hover:shadow-md hover:-translate-y-0.5 flex flex-col justify-between relative overflow-hidden group">
            <div class="space-y-6">
                <div class="w-12 h-12 rounded-2xl bg-[var(--color-bg-base)] flex items-center justify-center text-primary shadow-inner transition-transform group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h2 class="font-black text-2xl lg:text-3xl text-[var(--color-text-main)]">تضمین ایمنی و اصالت سلولی</h2>
                <p class="text-neutral-600 text-sm md:text-base lg:text-lg leading-relaxed text-justify max-w-3xl">
                    ما با بهره‌گیری از تکنولوژی‌های پیشرفته غربالگری و سیستم‌های مکانیزه جمع‌آوری، تضمین می‌کنیم که هر واحد پلاسما با بالاترین ضریب اطمینان و در شرایط کاملاً ایزوله تهیه شود. امنیت زیستی اهداکنندگان، خط قرمز بی قید و شرط ماست.
                </p>
            </div>
            <div class="mt-8 flex items-center gap-4 text-[10px] font-black uppercase tracking-widest text-primary">
                <span class="w-8 h-[1px] bg-primary/40"></span>
                استاندارد مرجع نوژین
            </div>
        </div>

        <!-- Box 2: Standard GMP (md:col-span-4) -->
        <div class="md:col-span-4 bg-[var(--color-bg-surface)]/50 border border-neutral-200/50 rounded-[2.5rem] p-8 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.02)] transition-all duration-300 hover:shadow-md hover:-translate-y-0.5 flex flex-col justify-between relative overflow-hidden group">
            <div class="space-y-6">
                <h3 class="font-black text-xl text-[var(--color-text-main)] flex items-center gap-3">
                    استاندارد جهانی GMP
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.5)]"></span>
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-xs md:text-sm text-neutral-500 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"/></svg>
                        تطبیق ۱۰۰٪ با پروتکل‌های FDA
                    </li>
                    <li class="flex items-center gap-3 text-xs md:text-sm text-neutral-500 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"/></svg>
                        زنجیره سرد هوشمند (Cold Chain)
                    </li>
                    <li class="flex items-center gap-3 text-xs md:text-sm text-neutral-500 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><polyline points="20 6 9 17 4 12"/></svg>
                        ردیابی دیجیتال هر قطره پلاسما
                    </li>
                </ul>
            </div>
            <div class="mt-8 pt-6 border-t border-neutral-200/50 flex justify-center">
                <i class="fa-solid fa-certificate text-2xl text-neutral-300 transition-colors group-hover:text-primary"></i>
            </div>
        </div>

        <!-- Box 3: Donor Respect (md:col-span-6) -->
        <div class="md:col-span-6 bg-white border border-neutral-200/50 rounded-[2.5rem] p-8 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.02)] transition-all duration-300 hover:shadow-md hover:-translate-y-0.5 flex flex-col justify-between relative overflow-hidden group min-h-[280px]">
            <div class="space-y-4">
                <div class="w-10 h-10 rounded-xl bg-[var(--color-bg-base)] flex items-center justify-center text-[var(--color-secondary)] shadow-sm">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <h3 class="font-black text-xl text-[var(--color-text-main)]">تکریم و صیانت از اهداکننده</h3>
                <p class="text-sm text-neutral-500 leading-relaxed text-justify">
                    ایجاد فضایی در شأن سرمایه‌های انسانی ما؛ جایی که آرامش، احترام و مراقبت‌های ویژه پزشکی با بالاترین استانداردهای اخلاقی گره خورده است.
                </p>
            </div>
            <div class="mt-6 text-[10px] font-bold text-neutral-300 uppercase">۰۲</div>
        </div>

        <!-- Box 4: Scientific Transparency (md:col-span-6) -->
        <div class="md:col-span-6 bg-white border border-neutral-200/50 rounded-[2.5rem] p-8 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.02)] transition-all duration-300 hover:shadow-md hover:-translate-y-0.5 flex flex-col justify-between relative overflow-hidden group min-h-[280px]">
            <div class="space-y-4">
                <div class="w-10 h-10 rounded-xl bg-[var(--color-bg-base)] flex items-center justify-center text-primary shadow-sm">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <h3 class="font-black text-xl text-[var(--color-text-main)]">شفافیت علمی و پایش مستمر</h3>
                <p class="text-sm text-neutral-500 leading-relaxed text-justify">
                    تمامی داده‌های کیفی و فرآیندهای عملیاتی ما بر پایه شواهد علمی مستند بوده و تحت پایش مداوم سیستم‌های هوشمند تضمین کیفیت قرار دارد.
                </p>
            </div>
            <div class="mt-6 text-[10px] font-bold text-neutral-300 uppercase">۰۳</div>
        </div>

    </section>

    <!-- 3. IMMERSIVE CANVAS & PREMIUM GLASS SIDEBAR -->
    <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start my-16">
        
        <!-- RIGHT COLUMN: TEXT MAIN CONTAINER -->
        <article class="lg:col-span-8 space-y-16 text-right order-last lg:order-first">
            
            <section id="section-1" class="space-y-8">
                <div class="border-r-4 border-[var(--color-primary)] pr-4">
                    <h2 class="font-black text-xl lg:text-2xl text-[var(--color-text-main)]">اصول بنیادی کیفیت در تامین پلاسما</h2>
                </div>
                <div class="text-neutral-700 text-base md:text-lg leading-[2] space-y-6 text-justify">
                    <p>
                        شرکت تامین پلاسما نوژین با درک عمیق از ماهیت بیولوژیک پلاسما، استانداردهای خود را فراتر از الزامات قانونی تعریف کرده است. ما معتقدیم که کیفیت در این صنعت، نه یک انتخاب، بلکه یک ضرورت حیاتی برای حفظ جان هزاران بیماری است که به داروهای مشتق از پلاسما وابسته هستند.
                    </p>
                    <p>
                        فرآیندهای ما بر پایه چرخه بهبود مستمر (PDCA) بنا شده است. از لحظه ورود اهداکننده به مرکز تا خروج محموله‌های منجمد، هر گام تحت نظارت دقیق واحد کنترل کیفیت (QC) و تضمین کیفیت (QA) قرار دارد. استفاده از پیشرفته‌ترین کیت‌های تشخیصی و دستگاه‌های اتوماتیک پلاسمافرزیس، خطای انسانی را به حداقل ممکن رسانده است.
                    </p>
                </div>
            </section>

            <!-- 4. THE EDITORIAL QUOTE OVERHAUL -->
            <div class="bg-[var(--color-bg-surface)]/70 border border-neutral-200/40 rounded-[2.5rem] p-8 lg:p-12 my-12 text-center max-w-3xl mx-auto relative shadow-sm">
                <!-- Luxury Quote Icon -->
                <span class="text-7xl font-serif text-primary opacity-40 absolute top-4 right-6 pointer-events-none">"</span>
                
                <div class="relative z-10 space-y-6">
                    <p class="font-black text-lg md:text-2xl text-[var(--color-text-main)] leading-relaxed italic px-4">
                        ما در نوژین، پلاسما را نه به عنوان یک کالا، بلکه به عنوان امانتی از سوی اهداکننده برای نجات یک زندگی می‌بینیم. این دیدگاه، زیربنای تمامی استانداردهای سخت‌گیرانه ماست.
                    </p>
                    <div class="flex flex-col items-center gap-1">
                        <span class="w-10 h-[2px] bg-primary mb-2"></span>
                        <span class="text-xs text-neutral-500 font-bold uppercase tracking-widest">دکتر محمدی</span>
                        <span class="text-[10px] text-neutral-400 font-medium">مدیر ارشد استراتژی و کیفیت</span>
                    </div>
                </div>
            </div>

            <section id="section-2" class="space-y-8">
                <div class="border-r-4 border-[var(--color-primary)] pr-4">
                    <h2 class="font-black text-xl lg:text-2xl text-[var(--color-text-main)]">مسئولیت‌پذیری اجتماعی و اخلاق حرفه‌ای</h2>
                </div>
                <div class="text-neutral-700 text-base md:text-lg leading-[2] space-y-6 text-justify">
                    <p>
                        اخلاق پزشکی در قلب تمامی تعاملات ما با اهداکنندگان قرار دارد. ما متعهد به حفظ محرمانگی کامل داده‌های پزشکی و ارائه مشاوره‌های سلامت رایگان به تمامی مراجعین هستیم. برنامه "سفیران سلامت نوژین" گامی است در جهت ارتقای سطح سواد سلامت جامعه و ترویج فرهنگ اهدای ایثارگرانه.
                    </p>
                </div>
            </section>

        </article>

        <!-- LEFT COLUMN: STICKY CAPSULE INDEX SIDEBAR -->
        <aside class="lg:col-span-4 lg:sticky lg:top-28 hidden lg:block">
            <nav class="bg-white/40 backdrop-blur-xl border border-white/60 p-5 rounded-[2.5rem] shadow-[0_10px_30px_rgba(0,0,0,0.02)] space-y-2">
                <div class="px-4 py-3 mb-4">
                    <span class="text-[10px] font-black uppercase tracking-[0.2em] text-[var(--color-text-muted)]">راهنمای محتوا</span>
                </div>
                <a href="#section-1" class="flex items-center gap-3 px-5 py-3.5 rounded-2xl bg-white shadow-sm border border-neutral-100 text-[var(--color-secondary)] font-black text-sm transition-all hover:scale-[1.02]">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                    اصول بنیادی کیفیت
                </a>
                <a href="#section-2" class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-white/50 text-neutral-500 font-bold text-sm transition-all hover:pr-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-neutral-200"></span>
                    مسئولیت‌پذیری اجتماعی
                </a>
                <a href="#section-3" class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-white/50 text-neutral-500 font-bold text-sm transition-all hover:pr-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-neutral-200"></span>
                    توسعه پایدار زیرساخت
                </a>
                <a href="#section-4" class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-white/50 text-neutral-500 font-bold text-sm transition-all hover:pr-6">
                    <span class="w-1.5 h-1.5 rounded-full bg-neutral-200"></span>
                    بیانیه نهایی مدیریت
                </a>
            </nav>
        </aside>

    </div>

    <!-- 5. THE MAJESTIC FUNNEL CLOSER (CTA) -->
    <section class="max-w-screen-xl mx-auto px-6 my-24">
        <div class="w-full bg-[var(--color-secondary)] text-white rounded-[3.5rem] py-16 lg:py-20 px-8 text-center shadow-2xl relative overflow-hidden group">
            <!-- Subtle Radial Gradient Background -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--color-primary)_0%,_transparent_100%)] opacity-[0.03] group-hover:opacity-[0.05] transition-opacity duration-700"></div>
            
            <div class="relative z-10 space-y-10">
                <div class="space-y-4">
                    <h2 class="font-black text-2xl lg:text-5xl text-white tracking-tight leading-tight">
                        شفافیت، ضامن اعتماد پایدار شماست
                    </h2>
                    <p class="text-neutral-400 text-sm md:text-lg max-w-2xl mx-auto leading-relaxed">
                        تمامی مجوزهای قانونی و گواهینامه‌های بین‌المللی مراکز نوژین جهت بررسی و شفافیت بیشتر در دسترس مراجع ذی‌صلاح و اهداکنندگان قرار دارد.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#" class="bg-primary text-neutral-950 font-black px-12 py-4 rounded-full text-sm shadow-lg hover:scale-105 transition-transform flex items-center gap-3 group/btn">
                        مشاهده گواهینامه‌های رسمی
                        <i class="fa-solid fa-file-shield transition-transform group-hover/btn:rotate-12"></i>
                    </a>
                    <a href="contact.php" class="bg-white/5 backdrop-blur-md text-white border border-white/10 font-bold px-10 py-4 rounded-full text-sm hover:bg-white/10 transition-all">
                        ارتباط با واحد بازرسی
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'template-parts/footer.php'; ?>
