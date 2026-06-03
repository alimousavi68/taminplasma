<?php require_once 'template-parts/header.php'; ?>

<!-- 🎨 Dynamic Theme Variables Overrides & Component Styling -->
<style>
:root {
  --color-secondary: var(--color-black);
  --color-bg-base: var(--color-bg-lightest);
}

/* Base Body Color Overrides */
body {
  background-color: var(--color-bg-base) !important;
  color: var(--color-text-main) !important;
}

/* Luxury Spacing Grid Pattern */
.bg-grid-pattern {
  background-image: radial-gradient(rgba(30, 41, 59, 0.03) 1.5px, transparent 1.5px);
  background-size: 28px 28px;
}

/* Range Input Premium Webkit Override */
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

/* Range Input Premium Firefox Override */
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

/* Custom FAQ Accordion Transitions */
.faq-row.active .faq-content-wrapper {
  grid-template-rows: 1fr;
}
.faq-row.active .faq-icon-container {
  transform: rotate(180deg);
  color: var(--color-primary) !important;
}

/* Timeline Interactive Card Fade */
.timeline-fade-enter {
  opacity: 0;
  transform: translateY(10px);
  transition: opacity 0.3s ease-out, transform 0.3s ease-out;
}
.timeline-fade-active {
  opacity: 1;
  transform: translateY(0);
}

/* CTA Linear Pattern */
.bg-cta-pattern {
  background-image: linear-gradient(135deg, rgba(255, 217, 112, 0.03) 25%, transparent 25%), 
                    linear-gradient(225deg, rgba(255, 217, 112, 0.03) 25%, transparent 25%), 
                    linear-gradient(45deg, rgba(255, 217, 112, 0.03) 25%, transparent 25%), 
                    linear-gradient(315deg, rgba(255, 217, 112, 0.03) 25%, transparent 25%);
  background-position: 20px 0, 20px 0, 0 0, 0 0;
  background-size: 40px 40px;
  background-repeat: repeat;
}
</style>

<main class="min-h-screen bg-[var(--color-bg-base)] overflow-x-hidden pb-12 relative bg-grid-pattern" dir="rtl">
    <!-- Abstract Background Art (Luxury Mesh Glow) -->
    <div class="absolute top-[5%] left-[5%] w-[45vw] h-[45vw] rounded-full bg-primary/4 blur-[130px] pointer-events-none z-0"></div>
    <div class="absolute top-[35%] right-[5%] w-[40vw] h-[40vw] rounded-full bg-[var(--color-secondary)]/3 blur-[110px] pointer-events-none z-0"></div>

    <!-- 1. HERO SECTION: THE SPLIT-SCREEN OASIS -->
    <section class="w-full pt-12 pb-4 lg:pt-16 lg:pb-6 relative overflow-hidden z-10">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Right Column (Content Stack) -->
                <div class="lg:col-span-6 flex flex-col items-start text-right space-y-7 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div>
                        <span class="inline-flex items-center gap-2 px-4.5 py-2.5 rounded-full bg-white border border-[var(--color-border-neutral-200)]/60 text-[var(--color-text-main)] text-sm font-bold shadow-sm mb-5">
                            <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                            اهدای زندگی و خدمت به جامعه
                        </span>
                        <h1 class="text-[var(--color-text-main)] font-black text-3.5xl md:text-4.5xl lg:text-6.5xl leading-tight">
                            اهدای پلاسما؛
                            <span class="block text-primary mt-3">هدیه‌ای از جنس امید و حیات</span>
                        </h1>
                    </div>
                    
                    <p class="leading-loose text-[var(--color-text-muted)] text-sm md:text-base max-w-xl text-justify">
                        با اهدای پلاسما، شما فقط یک ماده زیستی ارزش‌مند نمی‌بخشید؛ بلکه به هزاران بیمار مبتلا به بیماری‌های نادر، هموفیلی و نقص ایمنی، شانس دوباره‌ای برای خندیدن و زندگی کردن هدیه می‌دهید. فرآیندی ساده، کاملاً استریل، ایمن و نجات‌بخش.
                    </p>
                    
                    <div class="flex flex-wrap items-center gap-4 pt-2 w-full md:w-auto">
                        <a href="request.php" class="w-full md:w-auto inline-flex items-center justify-center gap-3 bg-primary text-[var(--color-text-main)] font-black px-10 py-4.5 rounded-full text-base transition-all duration-300 hover:scale-105 hover:shadow-[0_8px_25px_-5px_rgba(255,217,112,0.4)] group">
                            <span>نوبت‌دهی آنلاین اهدا</span>
                            <i class="fa-solid fa-arrow-left text-xs transition-transform duration-300 group-hover:-translate-x-1"></i>
                        </a>
                        <a href="#calculator-section" class="w-full md:w-auto inline-flex items-center justify-center gap-2.5 bg-white/70 hover:bg-white text-[var(--color-text-muted)] hover:text-[var(--color-text-main)] font-bold px-8 py-4.5 rounded-full text-sm border border-[var(--color-border-neutral-200)] transition-all duration-300 hover:-translate-y-0.5">
                            <span>محاسبه‌گر اهدای پلاسما</span>
                        </a>
                    </div>
                </div>

                <!-- Left Column (Media Canvas - Stats Removed) -->
                <div class="lg:col-span-6 w-full animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200 relative">
                    <div class="w-full aspect-[4/3] lg:aspect-[1.2] rounded-[3rem] overflow-hidden relative border border-[var(--color-border-neutral-300)] bg-[var(--color-bg-surface)] shadow-lg">
                        <img src="plasma_hero_premium.png" alt="اهدای پلاسما" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. THE CALCULATOR WIDGET -->
    <section id="calculator-section" class="w-full px-6 py-6 relative z-10">
        <div class="max-w-7xl mx-auto my-4 bg-white/80 backdrop-blur-xl border border-[var(--color-border-neutral-200)] rounded-[3rem] p-8 lg:p-14 shadow-sm animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
                <!-- Col 1 (Inputs Matrix) -->
                <div class="lg:col-span-5 space-y-8 flex flex-col justify-center">
                    <div class="space-y-4">
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 text-xs font-bold text-[var(--color-primary-dark)] bg-primary/10 rounded-full border border-[var(--color-primary)]/20">
                            <i class="fa-solid fa-calculator text-[10px]"></i>
                            محاسبه‌گر آنلاین
                        </span>
                        <h2 class="text-2.5xl lg:text-3.5xl font-black text-[var(--color-text-main)]">محاسبه‌گر تأثیر فداکاری شما</h2>
                        <p class="text-[var(--color-text-muted)] text-sm md:text-base leading-relaxed text-justify">با تکان دادن اسلایدرهای زیر, تأثیر ارزشمند میزان پلاسمای اهدایی خود را در بازه‌های زمانی مختلف و در درمان بیماران خاص به صورت عینی مشاهده کنید.</p>
                    </div>

                    <div class="space-y-10 pt-4">
                        <!-- Weight Slider -->
                        <div class="space-y-4 relative pb-2">
                            <div class="flex justify-between items-center">
                                <label class="text-sm md:text-base font-bold text-[var(--color-text-main)]">وزن شما (کیلوگرم)</label>
                            </div>
                            <div class="relative pt-8 px-1">
                                <div id="weight-badge-container" class="absolute top-0 transform translate-x-1/2 transition-all duration-75 pointer-events-none">
                                    <span class="bg-primary text-[var(--color-text-main)] font-black text-xs px-3.5 py-1.5 rounded-full shadow-md relative block border border-white/20">
                                        <span id="weight-val">۷۷</span>
                                        <span class="absolute bottom-[-3px] left-1/2 -translate-x-1/2 w-2 h-2 bg-primary rotate-45"></span>
                                    </span>
                                </div>
                                <input type="range" id="weight-slider" min="50" max="120" value="77" 
                                       class="appearance-none w-full h-2 bg-[var(--color-bg-lighter)] rounded-full outline-none accent-[var(--color-primary)] cursor-pointer">
                            </div>
                        </div>

                        <!-- Frequency Slider -->
                        <div class="space-y-4 relative pb-2">
                            <div class="flex justify-between items-center">
                                <label class="text-sm md:text-base font-bold text-[var(--color-text-main)]">دفعات اهدا در ماه</label>
                            </div>
                            <div class="relative pt-8 px-1">
                                <div id="freq-badge-container" class="absolute top-0 transform translate-x-1/2 transition-all duration-75 pointer-events-none">
                                    <span class="bg-primary text-[var(--color-text-main)] font-black text-xs px-3.5 py-1.5 rounded-full shadow-md relative block border border-white/20">
                                        <span id="freq-val">۲</span>
                                        <span class="absolute bottom-[-3px] left-1/2 -translate-x-1/2 w-2 h-2 bg-primary rotate-45"></span>
                                    </span>
                                </div>
                                <input type="range" id="freq-slider" min="1" max="4" value="2" 
                                       class="appearance-none w-full h-2 bg-[var(--color-bg-lighter)] rounded-full outline-none accent-[var(--color-primary)] cursor-pointer">
                            </div>
                        </div>

                        <!-- Months Slider -->
                        <div class="space-y-4 relative pb-2">
                            <div class="flex justify-between items-center">
                                <label class="text-sm md:text-base font-bold text-[var(--color-text-main)]">مدت همراهی (ماه)</label>
                            </div>
                            <div class="relative pt-8 px-1">
                                <div id="months-badge-container" class="absolute top-0 transform translate-x-1/2 transition-all duration-75 pointer-events-none">
                                    <span class="bg-primary text-[var(--color-text-main)] font-black text-xs px-3.5 py-1.5 rounded-full shadow-md relative block border border-white/20">
                                        <span id="months-val">۶</span>
                                        <span class="absolute bottom-[-3px] left-1/2 -translate-x-1/2 w-2 h-2 bg-primary rotate-45"></span>
                                    </span>
                                </div>
                                <input type="range" id="months-slider" min="1" max="12" value="6" 
                                       class="appearance-none w-full h-2 bg-[var(--color-bg-lighter)] rounded-full outline-none accent-[var(--color-primary)] cursor-pointer">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Col 2 (Live Output Display Card - Upgraded & Highly Prominent) -->
                <div class="lg:col-span-4 bg-white/90 border-2 border-[var(--color-primary)] rounded-[2.5rem] p-8 flex flex-col justify-center gap-6 shadow-md relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-24 h-24 bg-primary/10 rounded-br-full pointer-events-none"></div>
                    
                    <div class="border-b border-neutral-200 pb-4">
                        <span class="text-xs md:text-sm font-bold text-[var(--color-primary-dark)] tracking-wider uppercase block mb-1">تاثیر ملموس اهدای شما</span>
                        <h3 class="text-xl lg:text-2xl font-black text-[var(--color-text-main)]">دستاوردهای ثبت اهدا</h3>
                    </div>
                    
                    <!-- Lives Saved -->
                    <div class="flex items-center justify-between bg-[var(--color-bg-base)]/50 p-5 rounded-3xl border border-[var(--color-border-neutral-200)]/60 shadow-sm transition-all duration-300 hover:border-[var(--color-primary)] hover:translate-x-1">
                        <div class="space-y-1">
                            <div class="text-[var(--color-text-main)] font-black text-3.5xl lg:text-4.5xl tracking-tight leading-none" id="lives-out">۰</div>
                            <div class="text-xs md:text-sm font-bold text-[var(--color-text-muted)] mt-1.5">بیماران نجات یافته</div>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-rose-500/10 flex items-center justify-center text-rose-500 shrink-0 shadow-inner">
                            <i class="fa-solid fa-hand-holding-heart text-2xl animate-pulse"></i>
                        </div>
                    </div>

                    <!-- Volume Donated -->
                    <div class="flex items-center justify-between bg-[var(--color-bg-base)]/50 p-5 rounded-3xl border border-[var(--color-border-neutral-200)]/60 shadow-sm transition-all duration-300 hover:border-[var(--color-primary)] hover:translate-x-1">
                        <div class="space-y-1">
                            <div class="text-[var(--color-text-main)] font-black text-3.5xl lg:text-4.5xl tracking-tight leading-none" id="volume-out">۰</div>
                            <div class="text-xs md:text-sm font-bold text-[var(--color-text-muted)] mt-1.5">لیتر پلاسما نجات‌بخش</div>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 shrink-0 shadow-inner">
                            <i class="fa-solid fa-droplet text-2xl"></i>
                        </div>
                    </div>

                    <!-- Calories Burned -->
                    <div class="flex items-center justify-between bg-[var(--color-bg-base)]/50 p-5 rounded-3xl border border-[var(--color-border-neutral-200)]/60 shadow-sm transition-all duration-300 hover:border-[var(--color-primary)] hover:translate-x-1">
                        <div class="space-y-1">
                            <div class="text-[var(--color-text-main)] font-black text-3.5xl lg:text-4.5xl tracking-tight leading-none" id="calories-out">۰</div>
                            <div class="text-xs md:text-sm font-bold text-[var(--color-text-muted)] mt-1.5">کالری مصرفی (Kcal)</div>
                        </div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-500/10 flex items-center justify-center text-amber-500 shrink-0 shadow-inner">
                            <i class="fa-solid fa-fire-flame-simple text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Col 3 (Dynamic Hero Level & Fact Panel) -->
                <div class="lg:col-span-3 bg-[var(--color-bg-section)] border border-[var(--color-border-neutral-300)] rounded-[2.5rem] p-8 flex flex-col justify-between relative overflow-hidden shadow-inner">
                    <!-- Background Decoration -->
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-primary/10 rounded-full blur-xl pointer-events-none"></div>

                    <div class="space-y-4 relative z-10">
                        <h4 class="text-xs md:text-sm font-black text-[var(--color-text-muted)] tracking-widest uppercase opacity-75">سطح همدلی و افتخار شما</h4>
                        <div class="py-2.5 px-4.5 rounded-2xl bg-white inline-block border border-[var(--color-border-neutral-200)] shadow-sm">
                            <span id="hero-badge" class="text-sm font-black text-amber-800">یاور برنزی</span>
                        </div>
                        <p id="hero-desc" class="text-xs md:text-sm text-[var(--color-text-muted)] leading-relaxed text-justify">قدم اول را در این مسیر باشکوه برداشته‌اید. هر اهدای شما تپش دوباره یک قلب است.</p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-[var(--color-border-neutral-300)] relative z-10 space-y-3">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/25 text-[var(--color-text-main)] flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-lightbulb text-sm"></i>
                            </div>
                            <div class="space-y-1">
                                <h5 class="text-xs md:text-sm font-black text-[var(--color-text-main)]">آیا می‌دانستید؟</h5>
                                <p class="text-xs md:text-sm text-[var(--color-text-muted)] leading-relaxed text-justify">پلاسما ۹۲٪ از آب تشکیل شده و بدن شما ظرف مدت ۴۸ ساعت مایع اهدایی را از طریق تغذیه سالم کاملاً بازسازی می‌کند.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. THE JOURNEY TIMELINE (Interactive Side-Panel Layout with Equal Height Columns) -->
    <section class="w-full py-16 bg-[var(--color-bg-base)]/40 relative z-10">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 relative">
            <!-- Section Header -->
            <div class="text-center space-y-4 mb-20">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white text-[var(--color-text-main)] text-xs font-bold tracking-wide border border-[var(--color-border-neutral-200)] shadow-sm">
                    مسیر تعاملی اهدا
                </span>
                <h2 class="text-3xl font-black text-[var(--color-text-main)]">مسیر همدلی؛ ساده، سریع و استاندارد</h2>
                <p class="text-sm md:text-base text-[var(--color-text-muted)] max-w-xl mx-auto">برای مشاهده جزئیات بیشتر و بررسی نکات ایمنی، نشانگر خود را روی هر یک از ۶ مرحله قرار دهید.</p>
            </div>

            <!-- Interactive Grid & Side Panel Layout (Stretched Equal Height Columns) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                <!-- Right Side: 6 Step Cards -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 h-full" id="timeline-steps-container">
                    
                    <!-- Step 1 -->
                    <div class="timeline-trigger bg-white border-2 border-[var(--color-primary)] bg-primary/5 shadow-md hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="1">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۱
                        </div>
                        <div class="text-right">
                            <h3 class="text-sm md:text-base font-black text-[var(--color-text-main)]">پذیرش و ثبت‌نام اولیه</h3>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)] mt-1">مدت زمان حدودی: ۵ الی ۱۰ دقیقه</p>
                        </div>
                        <i class="fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 2 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="2">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۲
                        </div>
                        <div class="text-right">
                            <h3 class="text-sm md:text-base font-black text-[var(--color-text-main)]">معاینه و مشاوره پزشکی</h3>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)] mt-1">تست رایگان فشار، هموگلوبین و سلامت</p>
                        </div>
                        <i class="fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 3 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="3">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۳
                        </div>
                        <div class="text-right">
                            <h3 class="text-sm md:text-base font-black text-[var(--color-text-main)]">فرآیند اهدای پلاسما</h3>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)] mt-1">مدت زمان جداسازی: ۳۰ الی ۴۰ دقیقه</p>
                        </div>
                        <i class="fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 4 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="4">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۴
                        </div>
                        <div class="text-right">
                            <h3 class="text-sm md:text-base font-black text-[var(--color-text-main)]">استراحت کوتاه و پذیرایی</h3>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)] mt-1">تغذیه با آب‌میوه و خوراکی‌های مغذی</p>
                        </div>
                        <i class="fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 5 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="5">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۵
                        </div>
                        <div class="text-right">
                            <h3 class="text-sm md:text-base font-black text-[var(--color-text-main)]">دریافت هزینه ایاب و ذهاب</h3>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)] mt-1">واریز کارت به کارت یا حواله نقدی تشکر</p>
                        </div>
                        <i class="fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 6 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="6">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۶
                        </div>
                        <div class="text-right">
                            <h3 class="text-sm md:text-base font-black text-[var(--color-text-main)]">ثبت و برنامه‌ریزی نوبت بعدی</h3>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)] mt-1">رعایت حداقل فاصله قانونی ۱۴ روز</p>
                        </div>
                        <i class="fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                </div>

                <!-- Left Side: Dynamic Details Panel (Sticky & Matching Height) -->
                <div class="lg:col-span-5 h-full">
                    <div class="bg-white border border-[var(--color-border-neutral-200)] rounded-[2.5rem] p-7 shadow-lg flex flex-col justify-between overflow-hidden relative h-full min-h-[480px]" id="timeline-details-card">
                        <div class="space-y-6">
                            <!-- Image Frame -->
                            <div class="w-full aspect-[16/10] rounded-2xl overflow-hidden relative border border-neutral-100 shadow-inner">
                                <img id="detail-img" src="https://images.unsplash.com/photo-1579684389782-64d84b5e901a?auto=format&fit=crop&w=600&q=80" alt="جزئیات مرحله" class="w-full h-full object-cover transition-opacity duration-300">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                <span class="absolute bottom-4 right-4 bg-white/95 backdrop-blur-sm text-xs md:text-sm font-black px-4 py-2 rounded-full text-[var(--color-text-main)] border border-neutral-100" id="detail-number">مرحله ۰۱</span>
                            </div>
                            
                            <!-- Dynamic Content -->
                            <div class="space-y-3 text-right">
                                <h3 class="text-xl font-black text-[var(--color-text-main)]" id="detail-title">پذیرش و ثبت‌نام اولیه</h3>
                                <p class="text-sm md:text-base text-[var(--color-text-muted)] leading-relaxed text-justify" id="detail-desc">
                                    به محض ورود به مرکز، تیم پذیرش نوژین با رویی گشاده از شما استقبال می‌کنند. در این مرحله، مدارک شناسایی معتبر شما (کارت ملی) ثبت سامانه شده و پرسش‌نامه اولیه سلامت عمومی را پر خواهید نمود. این ثبت‌نام کوتاه، گام اول در چرخه نجات جان بیماران خاص است.
                                </p>
                            </div>
                        </div>

                        <!-- Benefit Pill -->
                        <div class="mt-6 pt-5 border-t border-neutral-100 flex items-center gap-3 text-right bg-[var(--color-bg-base)]/50 p-4.5 rounded-2xl border border-[var(--color-border-neutral-200)]/60" id="detail-tip-box">
                            <div class="w-9 h-9 rounded-full bg-primary/20 text-[var(--color-primary-dark)] flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-shield-halved text-base" id="detail-tip-icon"></i>
                            </div>
                            <p class="text-xs md:text-sm font-bold text-[var(--color-text-muted)]" id="detail-tip">مدارک مورد نیاز: کارت ملی معتبر جهت ثبت سیستمی نوبت.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FAQ SECTION (Interactive Accordion Stack - 2 Column Layout Matching Main Page) -->
    <section class="w-full py-12 lg:py-20 bg-[var(--color-bg-base)]/20 border-t border-neutral-200/40 relative z-10" dir="rtl">
        <div class="container mx-auto px-4 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Right Column - FAQ Intro & Titles (Sticky) -->
            <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
                <div class="p-8">
                    <span class="text-neutral-900/50 font-semibold text-sm md:text-base block mb-2">پاسخگوی سوالات شما هستیم!</span>
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-[31px] h-[31px] bg-black rounded-full flex items-center justify-center shrink-0">
                            <img src="public/clipboard-search.svg" class="w-4 h-4" alt="">
                        </div>
                        <h2 class="text-neutral-900 font-black text-3xl lg:text-4xl">سوالات متداول شما</h2>
                    </div>
                    <h4 class="text-neutral-900 font-bold text-lg lg:text-xl mt-6">آیا سوالات بیشتری دارید؟</h4>
                    <p class="text-neutral-900/60 text-sm md:text-base leading-relaxed mt-4 w-full text-justify">
                        تیم پشتیبانی و متخصصین ما آماده پاسخگویی به تمامی پرسش‌های شما درباره فرآیند اهدای پلاسما، فواید آن و شرایط اهداکنندگان هستند. سلامت و آگاهی شما اولویت ماست.
                    </p>
                    
                    <div class="mt-8">
                        <a href="contact.php" class="bg-primary hover:brightness-110 text-neutral-900 font-semibold px-6 py-3 rounded-full inline-flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
                            <span>ارتباط با پشتیبانی</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <line x1="17" y1="17" x2="7" y2="7"></line>
                                <polyline points="17 7 7 7 7 17"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Left Column - Interactive Accordion Stack (Aligning with main page layout) -->
            <div class="lg:col-span-7 space-y-4" id="faq-accordion">
                
                <!-- Accordion Row 1 (Active) -->
                <div class="faq-row active group">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] rounded-t-3xl rounded-b-none px-6 py-4 flex justify-between items-center border border-gray-200 border-b-0 transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none cursor-pointer">
                        <span class="faq-title font-extrabold text-neutral-900 text-sm md:text-base lg:text-lg text-right">آیا اهدای پلاسما درد دارد یا خطرناک است؟</span>
                        <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-900 transition-all duration-500">
                            <i class="fa-solid fa-minus"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[1fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-gray-200 border-t-0">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm md:text-base leading-relaxed text-justify">
                                خیر. اهدای پلاسما یک فرآیند بسیار ایمن است. دستگاه‌های مورد استفاده مجهز به کیت‌های یک‌بار مصرف استریل هستند و خون شما با هیچ وجه با دستگاه در تماس نیست. احساس سوزش اولیه در زمان رگ‌گیری مشابه یک آزمایش خون معمولی است و پزشکان مرکز در تمام مراحل بر فرآیند نظارت دارند.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Row 2 (Inactive) -->
                <div class="faq-row group">
                    <button class="faq-header w-full bg-white hover:bg-[var(--color-bg-base)]/50 rounded-full px-6 py-4 flex justify-between items-center border border-gray-200 cursor-pointer transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none">
                        <span class="faq-title font-semibold text-neutral-900 text-sm md:text-base lg:text-lg text-right">تفاوت اهدای خون با اهدای پلاسما چیست؟</span>
                        <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-400 group-hover:text-neutral-900 transition-all duration-500">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-transparent border-t-0 overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm md:text-base leading-relaxed text-justify">
                                در اهدای خون، تمام اجزای خون (گلبول‌های قرمز، پلاکت و پلاسما) برداشته می‌شود. اما در اهدای پلاسما (پلاسمای جمع‌آوری شده)، تنها مایع زرد رنگ خون (پلاسما) که حاوی پروتئین‌هاست برداشته شده و سلول‌های خونی دیگر به همراه مقداری سرم نمکی به بدن شما بازگردانده می‌شوند. به همین دلیل روند بازسازی پلاسما بسیار سریع‌تر است.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Row 3 (Inactive) -->
                <div class="faq-row group">
                    <button class="faq-header w-full bg-white hover:bg-[var(--color-bg-base)]/50 rounded-full px-6 py-4 flex justify-between items-center border border-gray-200 cursor-pointer transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none">
                        <span class="faq-title font-semibold text-neutral-900 text-sm md:text-base lg:text-lg text-right">چند وقت یک‌بار می‌توان پلاسما اهدا کرد؟</span>
                        <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-400 group-hover:text-neutral-900 transition-all duration-500">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-transparent border-t-0 overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm md:text-base leading-relaxed text-justify">
                                بر اساس استانداردهای وزارت بهداشت و سازمان غذا و دارو، حداقل فاصله مجاز بین دو اهدای پلاسما ۴۸ ساعت است. با این حال، به صورت عمومی توصیه می‌شود حداکثر ۲ بار در هفته و با فاصله‌های منظم این کار انجام شود تا ایمنی کامل اهداکننده تضمین گردد.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Row 4 (Inactive) -->
                <div class="faq-row group">
                    <button class="faq-header w-full bg-white hover:bg-[var(--color-bg-base)]/50 rounded-full px-6 py-4 flex justify-between items-center border border-gray-200 cursor-pointer transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none">
                        <span class="faq-title font-semibold text-neutral-900 text-sm md:text-base lg:text-lg text-right">تسهیلات ایاب و ذهاب و هدیه تشکر چگونه پرداخت می‌شود؟</span>
                        <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-400 group-hover:text-neutral-900 transition-all duration-500">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-transparent border-t-0 overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm md:text-base leading-relaxed text-justify">
                                بلافاصله پس از اتمام مراحل اهدا و پذیرایی، با مراجعه به صندوق اداری مرکز، هزینه سفر و تشکر به صورت حواله نقدی یا واریز آنی کارت‌به‌کارت بانکی جهت تقدیر از وقتی که اختصاص داده‌اید خدمتتان پرداخت خواهد شد.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. THE CLOSING FUNNEL CTA (Luxury Dark Slate Background Card with enhanced fonts & patterns) -->
    <section class="w-full px-6 py-12 relative z-10">
        <div class="max-w-screen-xl mx-auto my-6 bg-[var(--color-secondary)] bg-cta-pattern rounded-[3.5rem] py-18 px-6 lg:py-24 text-center text-white relative overflow-hidden shadow-2xl">
            <!-- Overlaid design pattern -->
            <div class="absolute bottom-0 right-0 translate-y-1/2 translate-x-1/2 w-[35rem] h-[35rem] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 text-primary text-xs font-black bg-white/5 shadow-sm">
                    <i class="fa-solid fa-hands-holding text-[10px]"></i>
                    سفیر امید و نجات
                </div>
                
                <h2 class="text-white font-extrabold text-3.5xl md:text-4.5xl lg:text-5.5xl leading-tight tracking-tight max-w-4xl mx-auto">
                    آماده‌اید تا امروز نجات‌بخش چندین زندگی باشید؟
                </h2>

                <p class="text-neutral-300 text-sm md:text-base lg:text-lg font-medium max-w-2xl mx-auto leading-loose">
                    تنها با صرف ۴۵ دقیقه وقت گران‌بهای خود در محیطی فوق‌العاده آرام، استریل و استاندارد، امید را به چندین بیمار نیازمند اهدا کنید.
                </p>

                <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
                    <a href="request.php" class="inline-flex items-center justify-center gap-3 bg-primary text-[var(--color-text-main)] hover:shadow-[0_8px_25px_rgba(255,217,112,0.4)] font-black px-12 py-5.5 rounded-full text-base lg:text-lg transition-transform hover:scale-105 duration-300 cursor-pointer group">
                        <span>رزرو آنلاین نوبت اهدای پلاسما</span>
                        <i class="fa-solid fa-calendar-check text-base transition-transform duration-300 group-hover:rotate-6"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- 🧮 Interactive Calculator & Dynamic Stepper Scripts -->
<script>
// Timeline Steps Content Database
const timelineDb = {
    1: {
        title: "پذیرش و ثبت‌نام اولیه",
        num: "مرحله ۰۱",
        desc: "به محض ورود به مرکز، تیم پذیرش نوژین با رویی گشاده از شما استقبال می‌کنند. در این مرحله، مدارک شناسایی معتبر شما (کارت ملی) ثبت سامانه شده و پرسش‌نامه اولیه سلامت عمومی را پر خواهید نمود. این ثبت‌نام کوتاه، گام اول در چرخه نجات جان بیماران خاص است.",
        img: "https://images.unsplash.com/photo-1579684389782-64d84b5e901a?auto=format&fit=crop&w=600&q=80",
        tip: "مدارک مورد نیاز: کارت ملی معتبر جهت ثبت سیستمی نوبت.",
        icon: "fa-shield-halved"
    },
    2: {
        title: "معاینه و مشاوره پزشکی",
        num: "مرحله ۰۲",
        desc: "سپس وارد اتاق معاینه شده و پزشک مقیم مرکز علائم حیاتی شما مانند فشار خون، ضربان قلب، وزن، و سطح هموگلوبین خون را به صورت رایگان می‌سنجد. پزشک با صبر و حوصله به تمام سوالات شما پاسخ داده و ایمن بودن اهدا را برای بدنتان تایید می‌نماید.",
        img: "https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80",
        tip: "سنجش سلامتی: اطمینان کامل از سطح مطلوب هموگلوبین و فشار خون.",
        icon: "fa-user-doctor"
    },
    3: {
        title: "فرآیند اهدای پلاسما",
        num: "مرحله ۰۳",
        desc: "در سالن اهدا، روی تخت‌های ارگونومیک و بسیار راحت استراحت می‌کنید. کیت‌های یک‌بار مصرف استریل باز شده و فرآیند جداسازی پلاسما (پلاسمای فرز) با نظارت کادر مجرب آغاز می‌گردد. در این روش سلول‌های خون بلافاصله به بدنتان بازگردانده می‌شوند.",
        img: "https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=600&q=80",
        tip: "امنیت ۱۰۰ درصدی: استفاده از تجهیزات یک‌بار مصرف و تمام استریل.",
        icon: "fa-vial"
    },
    4: {
        title: "استراحت کوتاه و پذیرایی",
        num: "مرحله ۰۴",
        desc: "پس از پایان اهدا، حدود ۱۰ الی ۱۵ دقیقه در سالن استراحت می‌مانید. برای بازسازی فوری مایعات بدن و بازیابی انرژی، با نوشیدنی‌های شیرین، آب‌میوه و میان‌وعده‌های مغذی مخصوص که توسط کارشناس تغذیه تهیه شده، از شما پذیرایی به عمل می‌آید.",
        img: "https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=600&q=80",
        tip: "تغذیه پس از اهدا: نوشیدن مایعات کافی سرعت بازسازی خون را چند برابر می‌کند.",
        icon: "fa-cookie-bite"
    },
    5: {
        title: "دریافت هزینه ایاب و ذهاب",
        num: "مرحله ۰۵",
        desc: "به پاس وقت گران‌بهایی که برای نجات جان هم‌نوعان خود در اختیار مرکز قرار داده‌اید، مبلغی به عنوان حق ایاب و ذهاب و هدیه سپاسگزاری بلافاصله توسط بخش حسابداری به صورت آنی به کارت بانکی شما واریز یا به صورت حواله نقدی تقدیم می‌گردد.",
        img: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80",
        tip: "تسهیلات رفت و آمد: واریز آنی حق تشکر و ایاب و ذهاب به اهداکنندگان.",
        icon: "fa-wallet"
    },
    6: {
        title: "ثبت و برنامه‌ریزی نوبت بعدی",
        num: "مرحله ۰۶",
        desc: "قبل از ترک مرکز، کارشناس پذیرش نوبت اهدای بعدی شما را ثبت می‌کند. از آن‌جایی که پلاسما بسیار سریع بازسازی می‌شود، حداقل فاصله قانونی بین دو اهدا تنها ۱۴ روز است. با تداوم اهدا، شما به یکی از قهرمانان حیات نوژین تبدیل می‌شوید.",
        img: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80",
        tip: "تداوم اهدای زندگی: بازه مجاز مراجعه بعدی پس از گذشت ۱۴ روز است.",
        icon: "fa-calendar-plus"
    }
};

document.addEventListener('DOMContentLoaded', () => {
    // Spacing spacing alignment & Timeline hover init
    const steps = document.querySelectorAll('.timeline-trigger');
    const detailImg = document.getElementById('detail-img');
    const detailNumber = document.getElementById('detail-number');
    const detailTitle = document.getElementById('detail-title');
    const detailDesc = document.getElementById('detail-desc');
    const detailTip = document.getElementById('detail-tip');
    const detailTipIcon = document.getElementById('detail-tip-icon');
    const detailCard = document.getElementById('timeline-details-card');

    // Default step 1 highlight
    if (steps.length > 0) {
        steps[0].classList.add('border-[var(--color-primary)]', 'bg-primary/5', 'shadow-md');
    }

    steps.forEach(step => {
        const handler = () => {
            const stepNum = step.getAttribute('data-step');
            const data = timelineDb[stepNum];

            // Update Active Border styling on steps list
            steps.forEach(s => {
                s.classList.remove('border-[var(--color-primary)]', 'bg-primary/5', 'shadow-md');
            });
            step.classList.add('border-[var(--color-primary)]', 'bg-primary/5', 'shadow-md');

            // Apply smooth fade transition on card update
            detailCard.classList.remove('timeline-fade-active');
            detailCard.classList.add('timeline-fade-enter');

            setTimeout(() => {
                detailImg.src = data.img;
                detailNumber.textContent = data.num;
                detailTitle.textContent = data.title;
                detailDesc.textContent = data.desc;
                detailTip.textContent = data.tip;
                
                // Update Icon class
                detailTipIcon.className = `fa-solid ${data.icon} text-base`;
                
                detailCard.classList.remove('timeline-fade-enter');
                detailCard.classList.add('timeline-fade-active');
            }, 150);
        };

        step.addEventListener('mouseenter', handler);
        step.addEventListener('click', handler);
    });

    // Calculator Inputs
    const weightSlider = document.getElementById('weight-slider');
    const freqSlider = document.getElementById('freq-slider');
    const monthsSlider = document.getElementById('months-slider');
    
    const weightVal = document.getElementById('weight-val');
    const freqVal = document.getElementById('freq-val');
    const monthsVal = document.getElementById('months-val');
    
    const weightBadgeContainer = document.getElementById('weight-badge-container');
    const freqBadgeContainer = document.getElementById('freq-badge-container');
    const monthsBadgeContainer = document.getElementById('months-badge-container');
    
    const livesOut = document.getElementById('lives-out');
    const volumeOut = document.getElementById('volume-out');
    const caloriesOut = document.getElementById('calories-out');
    
    const heroBadge = document.getElementById('hero-badge');
    const heroDesc = document.getElementById('hero-desc');

    const toPersianDigits = (n) => n.toString().replace(/\d/g, x => "۰۱۲۳۴۵۶۷۸۹"[x]);

    function updateBadgePosition(slider, container) {
        if (!slider || !container) return;
        const min = parseFloat(slider.min) || 0;
        const max = parseFloat(slider.max) || 100;
        const val = parseFloat(slider.value);
        const percent = ((val - min) / (max - min)) * 100;
        container.style.right = `calc(${percent}% - 2px)`;
    }

    function updateCalculations() {
        if (!weightSlider || !freqSlider || !monthsSlider) return;

        const weight = parseInt(weightSlider.value);
        const freq = parseInt(freqSlider.value);
        const months = parseInt(monthsSlider.value);
        
        weightVal.textContent = toPersianDigits(weight);
        freqVal.textContent = toPersianDigits(freq);
        monthsVal.textContent = toPersianDigits(months);

        updateBadgePosition(weightSlider, weightBadgeContainer);
        updateBadgePosition(freqSlider, freqBadgeContainer);
        updateBadgePosition(monthsSlider, monthsBadgeContainer);

        const totalDonations = freq * months;
        const calories = totalDonations * 650;
        const lives = totalDonations * 3;
        const volume = (totalDonations * 0.65).toFixed(2);

        livesOut.textContent = toPersianDigits(Math.floor(lives));
        volumeOut.textContent = toPersianDigits(volume);
        caloriesOut.textContent = toPersianDigits(Math.round(calories));

        // Update Hero Status Badge
        if (totalDonations <= 2) {
            heroBadge.textContent = "یاور برنزی";
            heroBadge.className = "text-sm font-black text-amber-800";
            heroDesc.textContent = "قدم اول را در این مسیر باشکوه برداشته‌اید. هر اهدای شما تپش دوباره یک قلب است.";
        } else if (totalDonations <= 8) {
            heroBadge.textContent = "یاور نقره‌ای";
            heroBadge.className = "text-sm font-black text-slate-600";
            heroDesc.textContent = "شما در حال تبدیل شدن به یک اهداکننده مستمر هستید. تلاش شما زندگی‌های متعددی را دگرگون ساخته است.";
        } else {
            heroBadge.textContent = "قهرمان طلایی پلاسما";
            heroBadge.className = "text-sm font-black text-yellow-600";
            heroDesc.textContent = "شما ناجی واقعی بیماران خاص هستید! تداوم و فداکاری بی‌نظیر شما الهام‌بخش کل جامعه است.";
        }
    }

    if (weightSlider && freqSlider && monthsSlider) {
        weightSlider.addEventListener('input', updateCalculations);
        freqSlider.addEventListener('input', updateCalculations);
        monthsSlider.addEventListener('input', updateCalculations);
        
        window.addEventListener('resize', () => {
            updateBadgePosition(weightSlider, weightBadgeContainer);
            updateBadgePosition(freqSlider, freqBadgeContainer);
            updateBadgePosition(monthsSlider, monthsBadgeContainer);
        });

        updateCalculations();
        
        setTimeout(() => {
            updateBadgePosition(weightSlider, weightBadgeContainer);
            updateBadgePosition(freqSlider, freqBadgeContainer);
            updateBadgePosition(monthsSlider, monthsBadgeContainer);
        }, 100);
    }
});

// FAQ Accordion Logic
const faqRows = document.querySelectorAll('.faq-row');
faqRows.forEach(row => {
    const header = row.querySelector('.faq-header');
    const wrapper = row.querySelector('.faq-content-wrapper');
    const iconContainer = row.querySelector('.faq-icon-container');
    const title = row.querySelector('.faq-title');
    
    header.addEventListener('click', () => {
        const isActive = row.classList.contains('active');
        
        // Close all other rows
        faqRows.forEach(otherRow => {
            if (otherRow !== row) {
                otherRow.classList.remove('active');
                const otherWrapper = otherRow.querySelector('.faq-content-wrapper');
                const otherHeader = otherRow.querySelector('.faq-header');
                const otherIcon = otherRow.querySelector('.faq-icon-container i');
                const otherTitle = otherRow.querySelector('.faq-title');
                const otherIconContainer = otherRow.querySelector('.faq-icon-container');

                otherWrapper.style.gridTemplateRows = '0fr';
                
                otherHeader.classList.remove('rounded-t-3xl', 'rounded-b-none', 'bg-[var(--color-bg-base)]', 'border-b-0');
                otherHeader.classList.add('rounded-full', 'bg-white');
                
                otherIcon.classList.replace('fa-minus', 'fa-plus');
                otherIconContainer.classList.replace('text-neutral-900', 'text-neutral-400');
                
                otherTitle.classList.replace('font-black', 'font-semibold');
            }
        });
        
        // Toggle current row
        const icon = iconContainer.querySelector('i');
        if (isActive) {
            row.classList.remove('active');
            wrapper.style.gridTemplateRows = '0fr';
            
            header.classList.remove('rounded-t-3xl', 'rounded-b-none', 'bg-[var(--color-bg-base)]', 'border-b-0');
            header.classList.add('rounded-full', 'bg-white');
            
            icon.classList.replace('fa-minus', 'fa-plus');
            iconContainer.classList.replace('text-neutral-900', 'text-neutral-400');
            
            title.classList.replace('font-black', 'font-semibold');
        } else {
            row.classList.add('active');
            wrapper.style.gridTemplateRows = '1fr';
            
            header.classList.add('rounded-t-3xl', 'rounded-b-none', 'bg-[var(--color-bg-base)]', 'border-b-0');
            header.classList.remove('rounded-full', 'bg-white');
            
            icon.classList.replace('fa-plus', 'fa-minus');
            iconContainer.classList.replace('text-neutral-400', 'text-neutral-900');
            
            title.classList.replace('font-semibold', 'font-black');
        }
    });
});
</script>

<?php require_once 'template-parts/footer.php'; ?>