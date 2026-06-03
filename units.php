<?php require_once 'template-parts/header.php'; ?>

<!-- 🎨 Dynamic Theme Variables Overrides & Local CSS Utilities -->
<style>
:root {
  /* Override secondary with black/steel-slate on this page if needed, avoiding circular loops */
  --color-secondary: var(--color-black);
  --color-bg-base: var(--color-bg-lightest);
}

/* Base Body Color Overrides */
body {
  background-color: var(--color-bg-base) !important;
  color: var(--color-text-main) !important;
}

/* Hide scrollbar for Chrome, Safari and Opera */
.scrollbar-none::-webkit-scrollbar {
  display: none;
}
/* Hide scrollbar for IE, Edge and Firefox */
.scrollbar-none {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

/* Card filter animations */
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

<main class="min-h-screen bg-[var(--color-bg-base)] overflow-x-hidden pb-16" dir="rtl" aria-label="مراکز و واحدهای تأمین پلاسما">
    
    <!-- 1. PAGE HEADER & WIDESCREEN PROTECTION -->
    <header class="w-full bg-[var(--color-bg-base)] pt-12 pb-6 relative">
        <div class="max-w-screen-xl mx-auto px-6 lg:px-12 text-center space-y-3">
            <span class="inline-block px-4 py-1.5 rounded-full bg-[var(--color-bg-surface)] text-[var(--color-text-main)] text-xs font-bold tracking-wide shadow-sm border border-[var(--color-bg-surface)]/20 mb-2">
                شعب سراسر کشور
            </span>
            <h1 class="font-black text-2xl md:text-3xl lg:text-4xl text-[var(--color-text-main)]">
                مراکز و واحدهای تأمین پلاسما نوژین
            </h1>
            <p class="text-sm md:text-base text-[var(--color-text-muted)] max-w-xl mx-auto leading-relaxed">
                دسترسی سریع به مدرن‌ترین مراکز استاندارد اهدا در سراسر کشور با کادری مجرب و تجهیزات پیشرفته
            </p>
        </div>
    </header>

    <!-- 2. DYNAMIC TABS FILTER (Mobile-Responsive Overflow) -->
    <section class="max-w-md mx-auto my-8 px-4" aria-label="فیلتر شهرها">
        <div class="bg-white border border-neutral-200/60 p-1.5 rounded-full flex justify-between items-center shadow-sm overflow-x-auto whitespace-nowrap scrollbar-none" role="tablist">
            <button role="tab" aria-selected="true" aria-controls="units-grid" data-filter="all" class="tab-item flex-1 text-center py-2.5 px-4 text-xs md:text-sm font-black bg-primary text-[var(--color-text-main)] shadow-sm cursor-pointer transition-all duration-300 rounded-full">
                همه مراکز
            </button>
            <button role="tab" aria-selected="false" aria-controls="units-grid" data-filter="tehran" class="tab-item flex-1 text-center py-2.5 px-4 text-xs md:text-sm font-bold text-[var(--color-text-muted)] cursor-pointer transition-all duration-300 rounded-full hover:text-[var(--color-text-main)]">
                تهران
            </button>
            <button role="tab" aria-selected="false" aria-controls="units-grid" data-filter="khorasan" class="tab-item flex-1 text-center py-2.5 px-4 text-xs md:text-sm font-bold text-[var(--color-text-muted)] cursor-pointer transition-all duration-300 rounded-full hover:text-[var(--color-text-main)]">
                خراسان
            </button>
            <button role="tab" aria-selected="false" aria-controls="units-grid" data-filter="isfahan" class="tab-item flex-1 text-center py-2.5 px-4 text-xs md:text-sm font-bold text-[var(--color-text-muted)] cursor-pointer transition-all duration-300 rounded-full hover:text-[var(--color-text-main)]">
                اصفهان
            </button>
            <button role="tab" aria-selected="false" aria-controls="units-grid" data-filter="fars" class="tab-item flex-1 text-center py-2.5 px-4 text-xs md:text-sm font-bold text-[var(--color-text-muted)] cursor-pointer transition-all duration-300 rounded-full hover:text-[var(--color-text-main)]">
                فارس
            </button>
        </div>
    </section>

    <!-- 3. THE UNITS MATRIX (3-Column Grid) -->
    <section class="max-w-screen-xl mx-auto px-6 lg:px-12 my-10">
        <div id="units-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch" aria-live="polite">
            
            <!-- Card 1: ونک (تهران) -->
            <article class="unit-card flex flex-col justify-between bg-white border border-neutral-100 rounded-[2.5rem] p-5 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer relative" data-city="tehran">
                <div>
                    <!-- Top Image Box -->
                    <div class="w-full aspect-[4/3] rounded-[1.75rem] overflow-hidden relative bg-neutral-100 mb-4">
                        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" alt="شعبه مرکزی ونک" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" />
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-xs font-black px-3 py-1.5 rounded-full text-[var(--color-text-main)] border border-neutral-200/40">
                            تهران
                        </span>
                    </div>

                    <!-- Center Info Stack -->
                    <h2 class="font-black text-lg text-[var(--color-text-main)] mt-2 mb-3">
                        شعبه مرکزی ونک
                    </h2>
                    
                    <div class="space-y-2.5">
                        <!-- Working Hours -->
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>ساعت کاری: ۸ صبح الی ۸ شب</span>
                        </div>
                        <!-- Phone Number -->
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.502-5.124-3.802-6.625-6.626l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span dir="ltr">۰۲۱-۴۹۳۶۱۳۱۸</span>
                        </div>
                    </div>
                </div>

                <!-- Card Action Button -->
                <a href="https://maps.google.com/?q=Vanak+Square+Tehran" target="_blank" rel="noopener noreferrer" class="w-full bg-[var(--color-bg-surface)] group-hover:bg-primary text-[var(--color-text-main)] font-black text-center py-3.5 rounded-xl transition-all duration-300 mt-5 text-sm block" aria-label="مسیریابی شعبه مرکزی ونک روی نقشه">
                    مشاهده روی نقشه و مسیریابی
                </a>
            </article>

            <!-- Card 2: تهرانپارس (تهران) -->
            <article class="unit-card flex flex-col justify-between bg-white border border-neutral-100 rounded-[2.5rem] p-5 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer relative" data-city="tehran">
                <div>
                    <!-- Top Image Box -->
                    <div class="w-full aspect-[4/3] rounded-[1.75rem] overflow-hidden relative bg-neutral-100 mb-4">
                        <img src="https://images.unsplash.com/photo-1579684389782-64d84b5e901a?auto=format&fit=crop&w=800&q=80" alt="شعبه تهرانپارس" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" />
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-xs font-black px-3 py-1.5 rounded-full text-[var(--color-text-main)] border border-neutral-200/40">
                            تهران
                        </span>
                    </div>

                    <!-- Center Info Stack -->
                    <h2 class="font-black text-lg text-[var(--color-text-main)] mt-2 mb-3">
                        شعبه تهرانپارس
                    </h2>
                    
                    <div class="space-y-2.5">
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>ساعت کاری: ۸ صبح الی ۶ عصر</span>
                        </div>
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.502-5.124-3.802-6.625-6.626l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span dir="ltr">۰۲۱-۷۷۸۸۹۹۰۰</span>
                        </div>
                    </div>
                </div>

                <a href="https://maps.google.com/?q=Tehranpars+Tehran" target="_blank" rel="noopener noreferrer" class="w-full bg-[var(--color-bg-surface)] group-hover:bg-primary text-[var(--color-text-main)] font-black text-center py-3.5 rounded-xl transition-all duration-300 mt-5 text-sm block" aria-label="مسیریابی شعبه تهرانپارس روی نقشه">
                    مشاهده روی نقشه و مسیریابی
                </a>
            </article>

            <!-- Card 3: احمدآباد (مشهد) -->
            <article class="unit-card flex flex-col justify-between bg-white border border-neutral-100 rounded-[2.5rem] p-5 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer relative" data-city="khorasan">
                <div>
                    <!-- Top Image Box -->
                    <div class="w-full aspect-[4/3] rounded-[1.75rem] overflow-hidden relative bg-neutral-100 mb-4">
                        <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=800&q=80" alt="شعبه مشهد (احمدآباد)" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" />
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-xs font-black px-3 py-1.5 rounded-full text-[var(--color-text-main)] border border-neutral-200/40">
                            خراسان
                        </span>
                    </div>

                    <!-- Center Info Stack -->
                    <h2 class="font-black text-lg text-[var(--color-text-main)] mt-2 mb-3">
                        شعبه مشهد (احمدآباد)
                    </h2>
                    
                    <div class="space-y-2.5">
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>ساعت کاری: ۷:۳۰ صبح الی ۷:۳۰ شب</span>
                        </div>
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.502-5.124-3.802-6.625-6.626l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span dir="ltr">۰۵۱-۳۸۴۰۰۰۰۰</span>
                        </div>
                    </div>
                </div>

                <a href="https://maps.google.com/?q=Ahmadabad+Mashhad" target="_blank" rel="noopener noreferrer" class="w-full bg-[var(--color-bg-surface)] group-hover:bg-primary text-[var(--color-text-main)] font-black text-center py-3.5 rounded-xl transition-all duration-300 mt-5 text-sm block" aria-label="مسیریابی شعبه مشهد احمدآباد روی نقشه">
                    مشاهده روی نقشه و مسیریابی
                </a>
            </article>

            <!-- Card 4: دروازه شیراز (اصفهان) -->
            <article class="unit-card flex flex-col justify-between bg-white border border-neutral-100 rounded-[2.5rem] p-5 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer relative" data-city="isfahan">
                <div>
                    <!-- Top Image Box -->
                    <div class="w-full aspect-[4/3] rounded-[1.75rem] overflow-hidden relative bg-neutral-100 mb-4">
                        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80" alt="شعبه اصفهان (دروازه شیراز)" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" />
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-xs font-black px-3 py-1.5 rounded-full text-[var(--color-text-main)] border border-neutral-200/40">
                            اصفهان
                        </span>
                    </div>

                    <!-- Center Info Stack -->
                    <h2 class="font-black text-lg text-[var(--color-text-main)] mt-2 mb-3">
                        شعبه اصفهان (دروازه شیراز)
                    </h2>
                    
                    <div class="space-y-2.5">
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>ساعت کاری: ۸ صبح الی ۷ شب</span>
                        </div>
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.502-5.124-3.802-6.625-6.626l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span dir="ltr">۰۳۱-۳۶۶۰۰۰۰۰</span>
                        </div>
                    </div>
                </div>

                <a href="https://maps.google.com/?q=Azadi+Square+Isfahan" target="_blank" rel="noopener noreferrer" class="w-full bg-[var(--color-bg-surface)] group-hover:bg-primary text-[var(--color-text-main)] font-black text-center py-3.5 rounded-xl transition-all duration-300 mt-5 text-sm block" aria-label="مسیریابی شعبه اصفهان دروازه شیراز روی نقشه">
                    مشاهده روی نقشه و مسیریابی
                </a>
            </article>

            <!-- Card 5: ملاصدرا (شیراز) -->
            <article class="unit-card flex flex-col justify-between bg-white border border-neutral-100 rounded-[2.5rem] p-5 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 group cursor-pointer relative" data-city="fars">
                <div>
                    <!-- Top Image Box -->
                    <div class="w-full aspect-[4/3] rounded-[1.75rem] overflow-hidden relative bg-neutral-100 mb-4">
                        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" alt="شعبه شیراز (ملاصدرا)" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" />
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-xs font-black px-3 py-1.5 rounded-full text-[var(--color-text-main)] border border-neutral-200/40">
                            فارس
                        </span>
                    </div>

                    <!-- Center Info Stack -->
                    <h2 class="font-black text-lg text-[var(--color-text-main)] mt-2 mb-3">
                        شعبه شیراز (ملاصدرا)
                    </h2>
                    
                    <div class="space-y-2.5">
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>ساعت کاری: ۸ صبح الی ۸ شب</span>
                        </div>
                        <div class="text-xs md:text-sm text-[var(--color-text-muted)] flex items-center gap-2">
                            <svg class="w-4 h-4 text-[var(--color-text-muted)] group-hover:text-primary transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.502-5.124-3.802-6.625-6.626l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span dir="ltr">۰۷۱-۳۲۳۰۰۰۰۰</span>
                        </div>
                    </div>
                </div>

                <a href="https://maps.google.com/?q=Mallasadra+Shiraz" target="_blank" rel="noopener noreferrer" class="w-full bg-[var(--color-bg-surface)] group-hover:bg-primary text-[var(--color-text-main)] font-black text-center py-3.5 rounded-xl transition-all duration-300 mt-5 text-sm block" aria-label="مسیریابی شعبه شیراز ملاصدرا روی نقشه">
                    مشاهده روی نقشه و مسیریابی
                </a>
            </article>

        </div>
    </section>

</main>

<!-- ⚡ Pure JS Filter System with Smooth Dynamic Fade Transitions -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab-item');
    const cards = document.querySelectorAll('.unit-card');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Update Active tab styling
            tabs.forEach(t => {
                t.setAttribute('aria-selected', 'false');
                t.classList.remove('bg-primary', 'text-[var(--color-text-main)]', 'font-black', 'shadow-sm');
                t.classList.add('text-[var(--color-text-muted)]', 'font-bold');
            });

            tab.setAttribute('aria-selected', 'true');
            tab.classList.remove('text-[var(--color-text-muted)]', 'font-bold');
            tab.classList.add('bg-primary', 'text-[var(--color-text-main)]', 'font-black', 'shadow-sm');

            const filterValue = tab.getAttribute('data-filter');

            // Apply filter with smooth transition
            cards.forEach(card => {
                const cardCity = card.getAttribute('data-city');
                if (filterValue === 'all' || cardCity === filterValue) {
                    card.classList.remove('hidden-card');
                    // Add subtle micro-animation entry effect
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1) translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95) translateY(8px)';
                    // Complete removal after transition completes
                    setTimeout(() => {
                        card.classList.add('hidden-card');
                    }, 300);
                }
            });
        });
    });
});
</script>

<?php require_once 'template-parts/footer.php'; ?>
