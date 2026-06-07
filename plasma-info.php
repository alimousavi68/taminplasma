<?php 
$page_title = "راهنمای جامع اهدای پلاسما | تامین پلاسما نوژین";
$page_description = "هر آنچه درباره اهدای پلاسما، مراحل اهدا، ماشین حساب تاثیر، فواید برای اهدا کننده و سوالات متداول باید بدانید. با اهدای پلاسما نجات‌بخش بیماران خاص باشید.";
require_once 'template-parts/header.php'; 
?>

<!-- 🎨 Dynamic Theme Variables Overrides & Component Styling -->
<style>
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
</style>

<main class="min-h-screen bg-[var(--color-bg-base)] overflow-x-hidden pb-12 relative" dir="rtl">
    <!-- Dot Pattern Background -->
    <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(30,41,59,0.04) 1.5px, transparent 1.5px); background-size: 28px 28px;"></div>
    
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

                <!-- Left Column (Media Canvas) -->
                <div class="lg:col-span-6 w-full animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200 relative">
                    <div class="w-full aspect-[4/3] lg:aspect-[1.2] rounded-[3rem] overflow-hidden relative border border-[var(--color-border-neutral-300)] bg-[var(--color-bg-surface)] shadow-lg">
                        <img src="public/plasmaoo.webp" alt="اهدای پلاسما" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW SECTION: WHY DONATE (فواید و دلایل اهدای پلاسما) -->
    <section class="w-full py-20 lg:py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-4 lg:max-w-[1170px] relative z-10">
            <!-- Section Title -->
            <div class="flex items-center justify-start gap-3 mb-10 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center text-primary shrink-0">
                    <i class="fa-solid fa-heart font-extrabold text-base"></i>
                </div>
                <h2 class="text-neutral-900 font-black text-[22px] lg:text-[28px] leading-tight tracking-tight">چرا اهدای پلاسما یک تصمیم هوشمندانه و حیاتی است؟</h2>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div class="bg-surface-warm text-neutral-900 rounded-[1.75rem] p-8 flex flex-col items-start justify-between cursor-pointer transition-all duration-300 group hover:bg-primary hover:-translate-y-1.5 hover:shadow-xl min-h-[220px] text-right animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
                    <div class="w-14 h-14 rounded-2xl bg-white text-neutral-900 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fa-solid fa-user-doctor text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">بررسی رایگان و مستمر سلامت</h3>
                        <p class="text-neutral-700 text-sm leading-loose text-justify font-normal">
                            در هر مراجعه، علائم حیاتی شما مانند فشار خون، ضربان قلب، هموگلوبین و سلامت عمومی توسط پزشک مرکز به صورت کاملاً رایگان بررسی و ثبت می‌شود.
                        </p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="bg-surface-warm text-neutral-900 rounded-[1.75rem] p-8 flex flex-col items-start justify-between cursor-pointer transition-all duration-300 group hover:bg-primary hover:-translate-y-1.5 hover:shadow-xl min-h-[220px] text-right animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-100">
                    <div class="w-14 h-14 rounded-2xl bg-white text-neutral-900 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fa-solid fa-wallet text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">حق تشکر و ایاب‌و‌ذهاب</h3>
                        <p class="text-neutral-700 text-sm leading-loose text-justify font-normal">
                            به پاس فداکاری و زمان ارزشمندی که برای نجات جان دیگران اختصاص می‌دهید، هدیه تشکر و هزینه سفر شما بلافاصله پس از اتمام اهدا تقدیم می‌شود.
                        </p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="bg-surface-warm text-neutral-900 rounded-[1.75rem] p-8 flex flex-col items-start justify-between cursor-pointer transition-all duration-300 group hover:bg-primary hover:-translate-y-1.5 hover:shadow-xl min-h-[220px] text-right animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12 delay-200">
                    <div class="w-14 h-14 rounded-2xl bg-white text-neutral-900 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fa-solid fa-hand-holding-heart text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">تأثیرگذاری مستقیم بر جامعه</h3>
                        <p class="text-neutral-700 text-sm leading-loose text-justify font-normal">
                            پلاسمای اهدایی شما ماده اولیه و حیاتی برای تولید داروهای بیماران هموفیلی، تالاسمی، نقص ایمنی و سوختگی‌های شدید است.
                        </p>
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
                <div class="lg:col-span-5 space-y-8 flex flex-col justify-center order-1 lg:order-none">
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
                <div class="lg:col-span-4 bg-white/90 border-2 border-[var(--color-primary)] rounded-[2.5rem] p-8 flex flex-col justify-center gap-6 shadow-md relative overflow-hidden order-2 lg:order-none">
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
                <div class="lg:col-span-3 bg-[var(--color-bg-section)] border border-[var(--color-border-neutral-300)] rounded-[2.5rem] p-8 flex flex-col justify-between relative overflow-hidden shadow-inner order-3 lg:order-none">
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
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 relative animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12">
            <!-- Section Header -->
            <div class="text-center space-y-4 mb-20">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white text-[var(--color-text-main)] text-xs font-bold tracking-wide border border-[var(--color-border-neutral-200)] shadow-sm">
                    مسیر تعاملی اهدا
                </span>
                <h2 class="text-3xl font-black text-[var(--color-text-main)]">مسیر همدلی؛ ساده، سریع و استاندارد</h2>
                <p class="text-sm md:text-base text-[var(--color-text-muted)] max-w-xl mx-auto">برای مشاهده جزئیات بیشتر و بررسی نکات ایمنی، نشانگر خود را روی هر یک از ۶ مرحله قرار دهید.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
                <!-- Right Side: Step Triggers List (Vertical Stack) -->
                <div class="lg:col-span-7 space-y-4 flex flex-col justify-between">
                    <!-- Step 1 -->
                    <div class="timeline-trigger bg-primary border-2 border-primary shadow-md rounded-3xl p-6 cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="1">
                        <div class="step-badge w-14 h-14 rounded-2xl bg-white/90 text-neutral-900 font-black text-xl flex items-center justify-center shrink-0 shadow-sm transition-colors">
                            ۰۱
                        </div>
                        <div class="text-right">
                            <h3 class="step-title text-sm md:text-base font-black text-neutral-900 transition-colors">پذیرش و ثبت‌نام اولیه</h3>
                            <p class="step-desc text-xs md:text-sm text-neutral-800 mt-1 transition-colors">مدت زمان حدودی: ۵ الی ۱۰ دقیقه</p>
                        </div>
                        <i class="step-arrow fa-solid fa-chevron-left text-[11px] text-neutral-900 absolute left-5 transition-colors"></i>
                    </div>

                    <!-- Step 2 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="2">
                        <div class="step-badge w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۲
                        </div>
                        <div class="text-right">
                            <h3 class="step-title text-sm md:text-base font-black text-[var(--color-text-main)] transition-colors">معاینه و مشاوره پزشکی</h3>
                            <p class="step-desc text-xs md:text-sm text-[var(--color-text-muted)] mt-1 transition-colors">تست رایگان فشار، هموگلوبین و سلامت</p>
                        </div>
                        <i class="step-arrow fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 3 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="3">
                        <div class="step-badge w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۳
                        </div>
                        <div class="text-right">
                            <h3 class="step-title text-sm md:text-base font-black text-[var(--color-text-main)] transition-colors">فرآیند اهدای پلاسما</h3>
                            <p class="step-desc text-xs md:text-sm text-[var(--color-text-muted)] mt-1 transition-colors">مدت زمان جداسازی: ۳۰ الی ۴۰ دقیقه</p>
                        </div>
                        <i class="step-arrow fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 4 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="4">
                        <div class="step-badge w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۴
                        </div>
                        <div class="text-right">
                            <h3 class="step-title text-sm md:text-base font-black text-[var(--color-text-main)] transition-colors">استراحت کوتاه و پذیرایی</h3>
                            <p class="step-desc text-xs md:text-sm text-[var(--color-text-muted)] mt-1 transition-colors">تغذیه با آب‌میوه و خوراکی‌های مغذی</p>
                        </div>
                        <i class="step-arrow fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 5 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="5">
                        <div class="step-badge w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۵
                        </div>
                        <div class="text-right">
                            <h3 class="step-title text-sm md:text-base font-black text-[var(--color-text-main)] transition-colors">دریافت هزینه ایاب و ذهاب</h3>
                            <p class="step-desc text-xs md:text-sm text-[var(--color-text-muted)] mt-1 transition-colors">واریز کارت به کارت یا حواله نقدی تشکر</p>
                        </div>
                        <i class="step-arrow fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>

                    <!-- Step 6 -->
                    <div class="timeline-trigger bg-white border-2 border-transparent hover:border-[var(--color-primary)] rounded-3xl p-6 shadow-sm cursor-pointer transition-all duration-300 flex items-center gap-5 relative group" data-step="6">
                        <div class="step-badge w-14 h-14 rounded-2xl bg-primary/10 text-[var(--color-primary-dark)] font-black text-xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-colors">
                            ۰۶
                        </div>
                        <div class="text-right">
                            <h3 class="step-title text-sm md:text-base font-black text-[var(--color-text-main)] transition-colors">ثبت و برنامه‌ریزی نوبت بعدی</h3>
                            <p class="step-desc text-xs md:text-sm text-[var(--color-text-muted)] mt-1 transition-colors">رعایت حداقل فاصله قانونی ۱۴ روز</p>
                        </div>
                        <i class="step-arrow fa-solid fa-chevron-left text-[11px] text-neutral-300 absolute left-5 group-hover:text-primary transition-colors"></i>
                    </div>
                </div>

                <!-- Left Side: Dynamic Details Panel (Sticky & Matching Height) -->
                <div class="lg:col-span-5 h-full">
                    <div class="bg-white border border-[var(--color-border-neutral-200)] rounded-[2.5rem] p-7 shadow-lg flex flex-col justify-between overflow-hidden relative h-full min-h-[480px]" id="timeline-details-card">
                        <div class="space-y-6">
                            <!-- Image Frame -->
                            <div class="w-full aspect-[16/10] rounded-2xl overflow-hidden relative border border-neutral-100 shadow-inner">
                                <img id="detail-img" src="public/path/step-1.png" alt="جزئیات مرحله" class="w-full h-full object-cover transition-opacity duration-300">
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
            <div class="lg:col-span-7 space-y-3" id="faq-accordion">
                
                <!-- FAQ Item 1 (Active) -->
                <div class="faq-row active" data-index="0">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.12)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/50 shrink-0 leading-none font-mono">۰۱</span>
                            <span class="faq-title font-extrabold text-neutral-900 text-sm md:text-base leading-snug">آیا اهدای پلاسما درد دارد یا خطرناک است؟</span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-primary text-neutral-900 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-minus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[1fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                خیر. اهدای پلاسما یک فرآیند بسیار ایمن است. دستگاه‌های مورد استفاده مجهز به کیت‌های یک‌بار مصرف استریل هستند و خون شما به هیچ وجه با دستگاه در تماس نیست. احساس سوزش اولیه در زمان رگ‌گیری مشابه یک آزمایش خون معمولی است و پزشکان مرکز در تمام مراحل بر فرآیند نظارت دارند.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-row" data-index="1">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۲</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug">تفاوت اهدای خون با اهدای پلاسما چیست؟</span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                در اهدای خون، تمام اجزای خون (گلبول‌های قرمز، پلاکت و پلاسما) برداشته می‌شود. اما در اهدای پلاسما (پلاسمای جمع‌آوری شده)، تنها مایع زرد رنگ خون (پلاسما) که حاوی پروتئین‌هاست برداشته شده و سلول‌های خونی دیگر به همراه مقداری سرم نمکی به بدن شما بازگردانده می‌شوند. به همین دلیل روند بازسازی پلاسما بسیار سریع‌تر است.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-row" data-index="2">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۳</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug">چند وقت یک‌بار می‌توان پلاسما اهدا کرد؟</span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                بر اساس استانداردهای وزارت بهداشت و سازمان غذا و دارو، حداقل فاصله مجاز بین دو اهدای پلاسما ۴۸ ساعت است. با این حال، به صورت عمومی توصیه می‌شود حداکثر ۲ بار در هفته و با فاصله‌های منظم این کار انجام شود تا ایمنی کامل اهداکننده تضمین گردد.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-row" data-index="3">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۴</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug">تسهیلات ایاب و ذهاب و هدیه تشکر چگونه پرداخت می‌شود؟</span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                بلافاصله پس از اتمام مراحل اهدا و پذیرایی، با مراجعه به صندوق اداری مرکز، هزینه سفر و تشکر به صورت حواله نقدی یا واریز آنی کارت‌به‌کارت بانکی جهت تقدیر از وقتی که اختصاص داده‌اید خدمتتان پرداخت خواهد شد.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-row" data-index="4">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۵</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug">شرایط جسمانی مورد نیاز برای اهدا چیست؟</span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                تمامی افراد سالم بین سنین ۱۸ تا ۶۰ سال که وزن بالای ۵۰ کیلوگرم دارند، می‌توانند پلاسما اهدا کنند. در زمان مراجعه اولیه، پرونده کامل پزشکی برای شما تشکیل شده و پزشک مقیم با انجام معاینات رایگان، صلاحیت جسمانی شما را تایید می‌نماید. داشتن کارت ملی معتبر در اولین مراجعه الزامی است.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-row" data-index="5">
                    <button class="faq-header w-full bg-[var(--color-bg-base)] hover:bg-[var(--color-bg-warm)]/40 rounded-[1.75rem] px-6 py-5 flex justify-between items-center border border-neutral-200/80 hover:border-primary/40 hover:shadow-[0_12px_40px_rgba(234,168,36,0.08)] transition-all duration-500 focus:outline-none cursor-pointer">
                        <div class="flex items-center gap-4 text-right">
                            <span class="text-[11px] font-black text-primary/30 shrink-0 leading-none font-mono">۰۶</span>
                            <span class="faq-title font-semibold text-neutral-600 text-sm md:text-base leading-snug">آیا گروه خونی خاصی برای اهدای پلاسما اولویت دارد؟</span>
                        </div>
                        <div class="faq-icon-btn w-9 h-9 rounded-full bg-neutral-100 text-neutral-400 flex items-center justify-center shrink-0 transition-all duration-300 mr-2">
                            <i class="fa-solid fa-plus text-xs"></i>
                        </div>
                    </button>
                    <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out overflow-hidden">
                        <div class="overflow-hidden">
                            <div class="faq-content px-6 pt-2 pb-6 text-neutral-500 text-sm leading-[2.2] border-r-2 border-primary/30 mr-10 mt-2">
                                تمام گروه‌های خونی می‌توانند پلاسما اهدا کنند. با این حال، دارندگان گروه خونی AB به عنوان دهنده عمومی پلاسما شناخته می‌شوند، زیرا پلاسمای آن‌ها فاقد آنتی‌بادی‌های ضد گروه‌های خونی A و B است و می‌تواند به هر بیماری تزریق شود. به همین دلیل اهدای پلاسما توسط دارندگان گروه خونی AB اهمیت و ارزش حیاتی فوق‌العاده‌ای دارد.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. THE CLOSING FUNNEL CTA (Same design as home page CTA) -->
    <section class="w-full px-4 mb-8 relative z-10 animate-on-scroll transition-all duration-1000 opacity-0 translate-y-12" dir="rtl">
        <div class="lg:max-w-[1170px] mx-auto my-16 bg-[#FFD970] rounded-[3.5rem] relative overflow-hidden min-h-[450px] shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center py-16 lg:py-24 px-8 lg:px-16">
            
            <!-- Right Column: Text & Action -->
            <div class="lg:col-span-6 p-0 text-right space-y-6 z-20 relative">
                <div class="text-[#7a4a00] text-[11px] md:text-xs font-semibold tracking-[0.2em] uppercase font-mono">
                    همین امروز اقدام کنید
                </div>
                <h2 class="font-bold text-2xl lg:text-4xl text-[#1a0e00] leading-tight">
                    آماده‌اید تا امروز نجات‌بخش چندین زندگی باشید؟
                </h2>
                <p class="text-[#4a2e00] text-sm md:text-base leading-loose max-w-xl opacity-90">
                    تنها با صرف ۴۵ دقیقه وقت گران‌بهای خود در محیطی فوق‌العاده آرام، استریل و استاندارد، امید را به چندین بیمار نیازمند اهدا کنید.
                </p>
                <div class="pt-4 flex flex-col items-start justify-start text-right gap-3">
                    <a href="request.php"
                        class="inline-flex items-center gap-2 bg-[#1a0e00] text-[#FFD970] font-bold py-[14px] px-[28px] rounded-[8px] text-base hover:bg-[#2d1a00] transition-colors duration-300 shadow-md cursor-pointer group">
                        <span>رزرو آنلاین نوبت اهدای پلاسما</span>
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
                <img src="public/cta_healthy_person_1780520206862.png" alt="آماده‌اید تا امروز نجات‌بخش چندین زندگی باشید؟" class="w-full h-full object-cover absolute inset-0">
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
        img: "public/path/step-1.png",
        tip: "مدارک مورد نیاز: کارت ملی معتبر جهت ثبت سیستمی نوبت.",
        icon: "fa-shield-halved"
    },
    2: {
        title: "معاینه و مشاوره پزشکی",
        num: "مرحله ۰۲",
        desc: "سپس وارد اتاق معاینه شده و پزشک مقیم مرکز علائم حیاتی شما مانند فشار خون، ضربان قلب، وزن، و سطح هموگلوبین خون را به صورت رایگان می‌سنجد. پزشک با صبر و حوصله به تمام سوالات شما پاسخ داده و ایمن بودن اهدا را برای بدنتان تایید می‌نماید.",
        img: "public/path/step-2.png",
        tip: "سنجش سلامتی: اطمینان کامل از سطح مطلوب هموگلوبین و فشار خون.",
        icon: "fa-user-doctor"
    },
    3: {
        title: "فرآیند اهدای پلاسما",
        num: "مرحله ۰۳",
        desc: "در سالن اهدا، روی تخت‌های ارگونومیک و بسیار راحت استراحت می‌کنید. کیت‌های یک‌بار مصرف استریل باز شده و فرآیند جداسازی پلاسما (پلاسمای فرز) با نظارت کادر مجرب آغاز می‌گردد. در این روش سلول‌های خون بلافاصله به بدنتان بازگردانده می‌شوند.",
        img: "public/path/step-3.png",
        tip: "امنیت ۱۰۰ درصدی: استفاده از تجهیزات یک‌بار مصرف و تمام استریل.",
        icon: "fa-vial"
    },
    4: {
        title: "استراحت کوتاه و پذیرایی",
        num: "مرحله ۰۴",
        desc: "پس از پایان اهدا، حدود ۱۰ الی ۱۵ دقیقه در سالن استراحت می‌مانید. برای بازسازی فوری مایعات بدن و بازیابی انرژی، با نوشیدنی‌های شیرین، آب‌میوه و میان‌وعده‌های مغذی مخصوص که توسط کارشناس تغذیه تهیه شده، از شما پذیرایی به عمل می‌آید.",
        img: "public/path/step-4.png",
        tip: "تغذیه پس از اهدا: نوشیدن مایعات کافی سرعت بازسازی خون را چند برابر می‌کند.",
        icon: "fa-cookie-bite"
    },
    5: {
        title: "دریافت هزینه ایاب و ذهاب",
        num: "مرحله ۰۵",
        desc: "به پاس وقت گران‌بهایی که برای نجات جان هم‌نوعان خود در اختیار مرکز قرار داده‌اید، مبلغی به عنوان حق ایاب و ذهاب و هدیه سپاسگزاری بلافاصله توسط بخش حسابداری به صورت آنی به کارت بانکی شما واریز یا به صورت حواله نقدی تقدیم می‌گردد.",
        img: "public/path/step-5.png",
        tip: "تسهیلات رفت و آمد: واریز آنی حق تشکر و ایاب و ذهاب به اهداکنندگان.",
        icon: "fa-wallet"
    },
    6: {
        title: "ثبت و برنامه‌ریزی نوبت بعدی",
        num: "مرحله ۰۶",
        desc: "قبل از ترک مرکز، کارشناس پذیرش نوبت اهدای بعدی شما را ثبت می‌کند. از آن‌جایی که پلاسما بسیار سریع بازسازی می‌شود، حداقل فاصله قانونی بین دو اهدا تنها ۱۴ روز است. با تداوم اهدا، شما به یکی از قهرمانان حیات نوژین تبدیل می‌شوید.",
        img: "public/path/step-6.png",
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

    steps.forEach(step => {
        const handler = () => {
            const stepNum = step.getAttribute('data-step');
            const data = timelineDb[stepNum];

            // Reset all trigger styles
            steps.forEach(s => {
                s.classList.remove('bg-primary', 'border-primary', 'shadow-md');
                s.classList.add('bg-white', 'border-transparent');
                
                const badge = s.querySelector('.step-badge');
                if (badge) {
                    badge.classList.remove('bg-white/90', 'text-neutral-900');
                    badge.classList.add('bg-primary/10', 'text-[var(--color-primary-dark)]');
                }
                
                const title = s.querySelector('.step-title');
                if (title) {
                    title.classList.remove('text-neutral-900');
                    title.classList.add('text-[var(--color-text-main)]');
                }
                
                const desc = s.querySelector('.step-desc');
                if (desc) {
                    desc.classList.remove('text-neutral-800');
                    desc.classList.add('text-[var(--color-text-muted)]');
                }
                
                const arrow = s.querySelector('.step-arrow');
                if (arrow) {
                    arrow.classList.remove('text-neutral-900');
                    arrow.classList.add('text-neutral-300');
                }
            });

            // Set active trigger styles
            step.classList.remove('bg-white', 'border-transparent');
            step.classList.add('bg-primary', 'border-primary', 'shadow-md');
            
            const activeBadge = step.querySelector('.step-badge');
            if (activeBadge) {
                activeBadge.classList.remove('bg-primary/10', 'text-[var(--color-primary-dark)]');
                activeBadge.classList.add('bg-white/90', 'text-neutral-900');
            }
            
            const activeTitle = step.querySelector('.step-title');
            if (activeTitle) {
                activeTitle.classList.remove('text-[var(--color-text-main)]');
                activeTitle.classList.add('text-neutral-900');
            }
            
            const activeDesc = step.querySelector('.step-desc');
            if (activeDesc) {
                activeDesc.classList.remove('text-[var(--color-text-muted)]');
                activeDesc.classList.add('text-neutral-800');
            }
            
            const activeArrow = step.querySelector('.step-arrow');
            if (activeArrow) {
                activeArrow.classList.remove('text-neutral-300');
                activeArrow.classList.add('text-neutral-900');
            }

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

            // Mobile UX: scroll detail card into view if screen is mobile/tablet size
            if (window.innerWidth < 1024) {
                detailCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
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

    // Smooth Count-Up Animation Function
    function animateCount(element, start, end, duration, formatFn = (val) => val) {
        if (!element) return;
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const currentVal = start + progress * (end - start);
            element.textContent = formatFn(currentVal);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    let prevLives = 0;
    let prevVolume = 0;
    let prevCalories = 0;

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
        // Correct calculations based on clinical facts:
        // Volume is proportional to weight (approx. 0.007 L of plasma per kg of body weight per donation)
        const volumePerDonation = weight * 0.007; 
        const volume = (totalDonations * volumePerDonation).toFixed(2);
        
        // 1 patient dose is approx. 0.22 L of plasma, so lives saved matches the ratio of volume to 0.22 (roughly 4.5 patients per liter)
        const lives = Math.max(1, Math.floor(volume * 4.5));
        
        // Calories burned is approx 550 per donation, scaling slightly with weight
        const calories = totalDonations * (550 + (weight - 50) * 2);

        const currentLives = Math.floor(lives);
        const currentVolume = parseFloat(volume);
        const currentCalories = Math.round(calories);

        // Animate counting up for premium UI feel
        animateCount(livesOut, prevLives, currentLives, 400, (v) => toPersianDigits(Math.floor(v)));
        animateCount(volumeOut, prevVolume, currentVolume, 400, (v) => toPersianDigits(v.toFixed(2)));
        animateCount(caloriesOut, prevCalories, currentCalories, 400, (v) => toPersianDigits(Math.round(v)));

        prevLives = currentLives;
        prevVolume = currentVolume;
        prevCalories = currentCalories;

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

// FAQ Accordion Logic matching the homepage exactly
document.addEventListener('DOMContentLoaded', () => {
    const faqRows = document.querySelectorAll('.faq-row');

    faqRows.forEach(row => {
        const header = row.querySelector('.faq-header');
        const wrapper = row.querySelector('.faq-content-wrapper');
        const iconBtn = row.querySelector('.faq-icon-btn');
        const icon = iconBtn.querySelector('i');
        const title = row.querySelector('.faq-title');

        header.addEventListener('click', () => {
            const isActive = row.classList.contains('active');

            // Close all other rows
            faqRows.forEach(other => {
                if (other !== row) {
                    other.classList.remove('active');
                    other.querySelector('.faq-content-wrapper').classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
                    const otherIconBtn = other.querySelector('.faq-icon-btn');
                    const otherIcon = otherIconBtn.querySelector('i');
                    otherIconBtn.classList.remove('bg-primary', 'text-neutral-900');
                    otherIconBtn.classList.add('bg-neutral-100', 'text-neutral-400');
                    otherIcon.classList.replace('fa-minus', 'fa-plus');
                    other.querySelector('.faq-title').classList.replace('font-extrabold', 'font-semibold');
                    other.querySelector('.faq-title').classList.replace('text-neutral-900', 'text-neutral-600');
                    other.querySelector('.faq-header').classList.remove('border-primary/40');
                    other.querySelector('.faq-header').classList.add('border-neutral-200/80');
                }
            });

            // Toggle current row
            if (isActive) {
                row.classList.remove('active');
                wrapper.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
                iconBtn.classList.remove('bg-primary', 'text-neutral-900');
                iconBtn.classList.add('bg-neutral-100', 'text-neutral-400');
                icon.classList.replace('fa-minus', 'fa-plus');
                title.classList.replace('font-extrabold', 'font-semibold');
                title.classList.replace('text-neutral-900', 'text-neutral-600');
                header.classList.remove('border-primary/40');
                header.classList.add('border-neutral-200/80');
            } else {
                row.classList.add('active');
                wrapper.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
                iconBtn.classList.add('bg-primary', 'text-neutral-900');
                iconBtn.classList.remove('bg-neutral-100', 'text-neutral-400');
                icon.classList.replace('fa-plus', 'fa-minus');
                title.classList.replace('font-semibold', 'font-extrabold');
                title.classList.replace('text-neutral-600', 'text-neutral-900');
                header.classList.add('border-primary/40');
                header.classList.remove('border-neutral-200/80');
            }
        });
    });
});
</script>

<?php require_once 'template-parts/footer.php'; ?>