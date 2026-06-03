<?php
/**
 * Contact Us Page
 * Role: Lead Front-End Architect & UI/UX Design System Expert
 */
require_once 'template-parts/header.php';
?>

<main class="bg-[var(--color-bg-base)] min-h-screen antialiased overflow-x-hidden">

    <!-- 1. PAGE HEADER & HERO BLOCK -->
    <section class="w-full">
        <div class="max-w-screen-xl mx-auto pt-16 pb-8 px-6 lg:px-12 text-center space-y-3">
            <h1 class="font-black text-2xl md:text-3xl lg:text-4xl text-[var(--color-text-main)] animate-fade-in">
                با نوژین در ارتباط باشید
            </h1>
            <p class="text-sm md:text-base text-[var(--color-text-muted)] max-w-xl mx-auto leading-relaxed">
                تیم پشتیبانی و مشاوره پزشکی نوژین در تمام مراحل همراه شماست. ما مشتاقانه آماده شنیدن نظرات و پاسخگویی به سوالات شما هستیم.
            </p>
        </div>
    </section>

    <!-- 2. QUICK CONNECT CARDS (3-Column Interactive Grid) -->
    <section class="w-full">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-3 gap-6 my-8 items-stretch">
            
            <!-- Card 1: Support Phone -->
            <div class="bg-white border border-neutral-100 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 group text-center flex flex-col items-center justify-center">
                <div class="w-14 h-14 rounded-full bg-[var(--color-bg-surface)] text-primary flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <h3 class="font-black text-base text-[var(--color-text-main)] mb-1">تلفن پشتیبانی</h3>
                <span class="font-black text-lg text-[var(--color-secondary)] tracking-wide dir-ltr block" dir="ltr">۰۲۱-۴۹۳۶۱۳۱۸</span>
                <p class="text-[10px] md:text-xs text-[var(--color-text-muted)] mt-2">شنبه تا پنجشنبه، ۸ صبح الی ۸ شب</p>
            </div>

            <!-- Card 2: Email & Correspondence -->
            <div class="bg-white border border-neutral-100 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 group text-center flex flex-col items-center justify-center">
                <div class="w-14 h-14 rounded-full bg-[var(--color-bg-surface)] text-primary flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-black text-base text-[var(--color-text-main)] mb-1">ایمیل و مکاتبات</h3>
                <span class="font-black text-lg text-[var(--color-secondary)] tracking-wide dir-ltr block" dir="ltr">info@tpnojine.com</span>
                <p class="text-[10px] md:text-xs text-[var(--color-text-muted)] mt-2">پاسخگویی در کمتر از ۲۴ ساعت کاری</p>
            </div>

            <!-- Card 3: Address -->
            <div class="bg-white border border-neutral-100 rounded-[2.5rem] p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 group text-center flex flex-col items-center justify-center">
                <div class="w-14 h-14 rounded-full bg-[var(--color-bg-surface)] text-primary flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="font-black text-base text-[var(--color-text-main)] mb-1">نشانی پستی</h3>
                <span class="font-black text-sm text-[var(--color-secondary)] leading-relaxed">تهران، خیابان پاسداران، مرکز نوژین</span>
                <p class="text-[10px] md:text-xs text-[var(--color-text-muted)] mt-2">امکان مراجعه حضوری با نوبت قبلی</p>
            </div>

        </div>
    </section>

    <!-- 3. THE SPLIT INTERACTION CANVAS (Form & Map Grid) -->
    <section class="w-full">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-8 my-12 items-start">
            
            <!-- RIGHT COLUMN: SMART INPUTS MATRIX -->
            <div class="lg:col-span-6 animate-fade-in-right">
                <div class="bg-white border border-neutral-100 rounded-[2.5rem] p-6 lg:p-8 shadow-xl text-right space-y-5">
                    <header>
                        <h2 class="font-black text-xl text-[var(--color-text-main)] mb-2">ارسال پیام مستقیم</h2>
                        <p class="text-xs text-[var(--color-text-muted)]">پیام شما مستقیماً به واحد مربوطه ارجاع داده خواهد شد.</p>
                    </header>

                    <form action="#" method="POST" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Full Name -->
                            <div class="bg-[var(--color-bg-surface)] rounded-2xl p-3 border border-transparent focus-within:border-[var(--color-primary)] transition-all group">
                                <label class="block text-[10px] font-black text-neutral-400 mb-1 group-focus-within:text-primary transition-colors">نام و نام خانوادگی</label>
                                <input type="text" placeholder="مثلاً: علی محمدی" class="w-full bg-transparent border-none outline-none text-sm font-bold text-[var(--color-text-main)] placeholder:text-neutral-300">
                            </div>
                            <!-- Phone Number -->
                            <div class="bg-[var(--color-bg-surface)] rounded-2xl p-3 border border-transparent focus-within:border-[var(--color-primary)] transition-all group">
                                <label class="block text-[10px] font-black text-neutral-400 mb-1 group-focus-within:text-primary transition-colors">شماره موبایل</label>
                                <input type="tel" placeholder="۰۹۱۲XXXXXXX" class="w-full bg-transparent border-none outline-none text-sm font-bold text-[var(--color-text-main)] placeholder:text-neutral-300 text-left" dir="ltr">
                            </div>
                        </div>

                        <!-- Request Subject (Select) -->
                        <div class="bg-[var(--color-bg-surface)] rounded-2xl p-3 border border-transparent focus-within:border-[var(--color-primary)] transition-all group relative">
                            <label class="block text-[10px] font-black text-neutral-400 mb-1 group-focus-within:text-primary transition-colors">موضوع درخواست شما</label>
                            <select class="w-full bg-transparent border-none outline-none text-sm font-bold text-[var(--color-text-main)] appearance-none cursor-pointer">
                                <option value="consultation">مشاوره اهدا پلاسما</option>
                                <option value="feedback">صدای مشتری و شکایات</option>
                                <option value="partnership">همکاری تجاری</option>
                                <option value="other">سایر موارد</option>
                            </select>
                            <div class="absolute left-4 top-1/2 translate-y-1 pointer-events-none text-neutral-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>

                        <!-- Message Body -->
                        <div class="bg-[var(--color-bg-surface)] rounded-2xl p-3 border border-transparent focus-within:border-[var(--color-primary)] transition-all group">
                            <label class="block text-[10px] font-black text-neutral-400 mb-1 group-focus-within:text-primary transition-colors">متن پیام شما</label>
                            <textarea rows="4" placeholder="چگونه می‌توانیم به شما کمک کنیم؟" class="w-full bg-transparent border-none outline-none text-sm font-bold text-[var(--color-text-main)] placeholder:text-neutral-300 resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-[var(--color-secondary)] text-white font-black py-4 rounded-full mt-4 transition-all hover:scale-[1.01] hover:shadow-lg active:scale-[0.98] shadow-md cursor-pointer flex items-center justify-center gap-2 group">
                            <span>ارسال پیام و تایید نهایی</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-[-4px] transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7 7-7" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- LEFT COLUMN: IMMERSIVE MAP FRAME -->
            <div class="lg:col-span-6 space-y-6 lg:sticky lg:top-24 animate-fade-in-left">
                <!-- Map Container -->
                <div class="w-full aspect-[4/3] bg-neutral-200 rounded-[2.5rem] overflow-hidden border border-neutral-100 relative shadow-md group">
                    <!-- Placeholder for Map - In production, replace with real Google Maps / Leaflet iframe -->
                    <img src="public/sharayet/Mask group.png" alt="نقشه دسترسی به مرکز نوژین" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors duration-500"></div>
                    
                    <!-- Map Pin Overlay -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <div class="relative">
                            <div class="absolute -inset-4 bg-primary/30 rounded-full animate-ping"></div>
                            <div class="w-8 h-8 bg-[var(--color-secondary)] rounded-full border-4 border-white shadow-xl flex items-center justify-center relative z-10">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Pill Toolbar -->
                <div class="bg-white border border-neutral-100 p-2 rounded-full flex flex-wrap justify-center gap-2 md:gap-3 shadow-sm">
                    <a href="https://nshn.ir/" target="_blank" class="bg-[var(--color-bg-surface)] text-[10px] md:text-xs font-black px-5 py-2.5 rounded-full hover:bg-primary hover:text-neutral-900 transition-all flex items-center gap-2">
                        <span>مسیریابی با نشان</span>
                    </a>
                    <a href="https://balad.ir/" target="_blank" class="bg-[var(--color-bg-surface)] text-[10px] md:text-xs font-black px-5 py-2.5 rounded-full hover:bg-primary hover:text-neutral-900 transition-all flex items-center gap-2">
                        <span>مسیریابی با بلد</span>
                    </a>
                    <a href="https://maps.google.com" target="_blank" class="bg-[var(--color-bg-surface)] text-[10px] md:text-xs font-black px-5 py-2.5 rounded-full hover:bg-primary hover:text-neutral-900 transition-all flex items-center gap-2">
                        <span>گوگل مپس</span>
                    </a>
                </div>

                <!-- Operating Hours Summary -->
                <div class="bg-[var(--color-bg-surface)]/50 border border-neutral-100/50 p-4 rounded-3xl text-center">
                    <p class="text-[11px] font-bold text-[var(--color-text-muted)] leading-relaxed">
                        <i class="fa-regular fa-clock ml-1"></i>
                        ساعات فعالیت مرکز: شنبه تا چهارشنبه از ساعت ۷:۳۰ الی ۱۹:۳۰ | پنجشنبه‌ها تا ساعت ۱۶:۰۰
                    </p>
                </div>
            </div>

        </div>
    </section>

</main>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
    .animate-fade-in-right { animation: fadeInRight 0.8s ease-out 0.2s forwards; opacity: 0; }
    .animate-fade-in-left { animation: fadeInLeft 0.8s ease-out 0.4s forwards; opacity: 0; }
    
    /* Custom Scrollbar for Textarea */
    textarea::-webkit-scrollbar { width: 4px; }
    textarea::-webkit-scrollbar-track { background: transparent; }
    textarea::-webkit-scrollbar-thumb { background: var(--color-primary); border-radius: 10px; }
</style>

<?php require_once 'template-parts/footer.php'; ?>
