<!-- ============================================
    CONVERSION & FAQ ZONE
============================================ -->

<!-- SECTION 1: RESERVATION & TESTIMONIALS -->
<section class="w-full py-20 lg:py-24 bg-white" dir="rtl">
    <div class="container mx-auto px-4 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- Right Column - Online Reservation Form (Now Left due to swap) -->
        <div class="lg:col-span-7 order-2 lg:order-1">
            <div class="bg-[var(--color-bg-base)] rounded-[2.5rem] py-8 px-6 lg:py-10 shadow-sm flex flex-col h-full border border-neutral-200">
                <h3 class="text-neutral-900 font-black text-xl lg:text-2xl mb-8">رزرو آنلاین نوبت شما..</h3>
                
                <form action="#" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Fields -->
                    <div class="group">
                        <input type="text" placeholder="نام و نام خانوادگی" class="w-full bg-white rounded-2xl px-4 py-3.5 text-sm text-neutral-900 border border-neutral-200 focus:border-[var(--color-primary)] focus:ring-2 focus:ring-[var(--color-primary)]/20 outline-none transition-all placeholder-neutral-400">
                    </div>
                    <div class="group">
                        <input type="text" dir="ltr" placeholder="کد ملی" class="w-full bg-white rounded-2xl px-4 py-3.5 text-sm text-neutral-900 border border-neutral-200 focus:border-[var(--color-primary)] focus:ring-2 focus:ring-[var(--color-primary)]/20 outline-none transition-all placeholder-neutral-400 text-right">
                    </div>
                    <div class="group">
                        <input type="tel" dir="ltr" placeholder="شماره تماس" class="w-full bg-white rounded-2xl px-4 py-3.5 text-sm text-neutral-900 border border-neutral-200 focus:border-[var(--color-primary)] focus:ring-2 focus:ring-[var(--color-primary)]/20 outline-none transition-all placeholder-neutral-400 text-right">
                    </div>
                    <div class="group relative">
                        <select class="w-full bg-white rounded-2xl px-4 py-3.5 text-sm text-neutral-900 border border-neutral-200 focus:border-[var(--color-primary)] focus:ring-2 focus:ring-[var(--color-primary)]/20 outline-none transition-all placeholder-neutral-400 appearance-none cursor-pointer">
                            <option value="" disabled selected>نوع مراجعه</option>
                            <option value="donation">اهدای پلاسما</option>
                            <option value="first-visit">معاینه اولیه (اولین بار)</option>
                            <option value="consultation">مشاوره تخصصی</option>
                        </select>
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none text-neutral-400">
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </div>
                    </div>
                    <div class="group">
                        <input type="text" placeholder="تاریخ پیشنهادی (مثلاً ۱۴۰۲/۰۳/۱۵)" class="w-full bg-white rounded-2xl px-4 py-3.5 text-sm text-neutral-900 border border-neutral-200 focus:border-[var(--color-primary)] focus:ring-2 focus:ring-[var(--color-primary)]/20 outline-none transition-all placeholder-neutral-400">
                    </div>
                    <div class="group relative">
                        <select class="w-full bg-white rounded-2xl px-4 py-3.5 text-sm text-neutral-900 border border-neutral-200 focus:border-[var(--color-primary)] focus:ring-2 focus:ring-[var(--color-primary)]/20 outline-none transition-all placeholder-neutral-400 appearance-none cursor-pointer">
                            <option value="" disabled selected>بازه زمانی</option>
                            <option value="morning">شیفت صبح (۸ الی ۱۲)</option>
                            <option value="afternoon">شیفت عصر (۱۴ الی ۱۸)</option>
                        </select>
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none text-neutral-400">
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </div>
                    </div>
                    
                    <!-- Message Textarea -->
                    <div class="col-span-full mt-2">
                        <textarea placeholder="توضیحات تکمیلی (اختیاری)..." class="w-full bg-white rounded-2xl px-4 py-3.5 text-sm text-neutral-900 border border-neutral-200 focus:border-[var(--color-primary)] focus:ring-2 focus:ring-[var(--color-primary)]/20 outline-none transition-all placeholder-neutral-400 h-28 resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="col-span-full w-full bg-primary hover:brightness-110 text-neutral-900 font-black py-4 rounded-xl transition-all shadow-md hover:shadow-lg mt-4 text-base text-center cursor-pointer">
                        ثبت درخواست نوبت
                    </button>
                </form>
            </div>
        </div>

        <!-- Left Column - Testimonials Slider (Now Right due to swap) -->
        <div class="lg:col-span-5 order-1 lg:order-2">
            <div class="bg-[var(--color-bg-base)] rounded-[2rem] py-8 px-6 lg:py-10 shadow-sm border border-neutral-200 overflow-hidden group h-full flex flex-col justify-between">
                <div>
                    <span class="text-neutral-900/50 font-semibold text-sm block mb-2">نظرات شما</span>
                    <h3 class="text-neutral-900 font-black text-2xl mb-8">نظرات مراجعین ما</h3>
                    
                    <!-- Inner Testimonial Content -->
                    <div class="relative">
                        <!-- Top Bar -->
                        <div class="flex justify-between items-start mb-4">
                            <!-- Decorative Quote Icon (Now on the right/start of row in RTL) -->
                            <div class="text-primary/10">
                                <svg width="48" height="36" viewBox="0 0 48 36" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8 36C10.1333 36 7.8 35.1333 5.8 33.4C3.8 31.6667 2.33333 29.3333 1.4 26.4C0.466667 23.4667 0 20.2 0 16.6C0 12.0667 1.06667 8.26667 3.2 5.2C5.33333 2.13333 8.33333 0.4 12.2 0L14.2 4.4C11.8 4.93333 10.0667 6.13333 9 8C7.93333 9.86667 7.4 12.2667 7.4 15.2H14.8V36H12.8ZM33.8 36C31.1333 36 28.8 35.1333 26.8 33.4C24.8 31.6667 23.3333 29.3333 22.4 26.4C21.4667 23.4667 21 20.2 21 16.6C21 12.0667 22.0667 8.26667 24.2 5.2C26.3333 2.13333 29.3333 0.4 33.2 0L35.2 4.4C32.8 4.93333 31.0667 6.13333 30 8C28.9333 9.86667 28.4 12.2667 28.4 15.2H35.8V36H33.8Z" />
                                </svg>
                            </div>
                            <!-- Star Rating (Now on the left/end of row in RTL) -->
                            <div class="flex items-center gap-2">
                                <div class="flex text-primary gap-0.5">
                                    <i class="fa-solid fa-star text-xs"></i>
                                    <i class="fa-solid fa-star text-xs"></i>
                                    <i class="fa-solid fa-star text-xs"></i>
                                    <i class="fa-solid fa-star text-xs"></i>
                                    <i class="fa-solid fa-star text-xs"></i>
                                </div>
                                <span class="text-neutral-400 text-xs font-bold">(۴.۰)</span>
                            </div>
                        </div>

                        <!-- Body Text -->
                        <p id="testimonial-text" class="text-neutral-900/70 text-sm leading-relaxed mt-4 transition-opacity duration-300">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>
                    </div>
                </div>

                <!-- Bottom Part: User Profile & CTA -->
                <div class="space-y-8">
                    <div class="flex items-end justify-between mt-8">
                        <!-- User Profile -->
                        <div class="flex items-center gap-3">
                            <div class="w-14 h-14 rounded-full border-2 border-[var(--color-primary)] overflow-hidden shrink-0">
                                <img id="testimonial-avatar" src="https://i.pravatar.cc/150?u=ali" alt="علی احمدی" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col">
                                <span id="testimonial-name" class="font-bold text-neutral-900">علی احمدی</span>
                                <span id="testimonial-role" class="text-xs text-neutral-400">مشتری</span>
                            </div>
                        </div>

                        <!-- Navigation Arrows -->
                        <div class="flex gap-2">
                            <button class="w-[25px] h-[25px] bg-primary hover:opacity-80 text-white rounded-md flex items-center justify-center transition-all" onclick="prevTestimonial()" aria-label="قبلی">
                                <i class="fa-solid fa-caret-right text-xs"></i>
                            </button>
                            <button class="w-[25px] h-[25px] bg-primary hover:opacity-80 text-white rounded-md flex items-center justify-center transition-all" onclick="nextTestimonial()" aria-label="بعدی">
                                <i class="fa-solid fa-caret-left text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Bottom CTA -->
                    <a href="#" class="bg-primary hover:brightness-110 text-neutral-900 font-bold px-6 py-3 rounded-full flex items-center gap-2 self-start transition-all shadow-md hover:shadow-lg group w-fit">
                        <span>مشاهده همه</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                            <line x1="17" y1="17" x2="7" y2="7"></line>
                            <polyline points="17 7 7 7 7 17"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: FAQ -->
<section class="w-full py-20 lg:py-24 bg-[var(--color-bg-warm)]" dir="rtl">
    <div class="container mx-auto px-4 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Right Column - FAQ Intro & Titles -->
        <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
            <div class="p-8">
                <span class="text-neutral-900/50 font-semibold text-sm block mb-2">پاسخگوی سوالات شما هستیم!</span>
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-[31px] h-[31px] bg-black rounded-full flex items-center justify-center shrink-0">
                        <img src="public/clipboard-search.svg" class="w-4 h-4" alt="">
                    </div>
                    <h2 class="text-neutral-900 font-black text-3xl lg:text-4xl">سوالات متداول شما</h2>
                </div>
                <h4 class="text-neutral-900 font-bold text-lg mt-6">آیا سوالات بیشتری دارید؟</h4>
                <p class="text-neutral-900/60 text-sm leading-relaxed mt-4 w-full">
                    تیم پشتیبانی و متخصصین ما آماده پاسخگویی به تمامی پرسش‌های شما درباره فرآیند اهدای پلاسما، فواید آن و شرایط اهداکنندگان هستند. سلامت و آگاهی شما اولویت ماست.
                </p>
                
                <div class="mt-8">
                    <a href="#" class="bg-primary hover:brightness-110 text-neutral-900 font-semibold px-6 py-3 rounded-full inline-flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
                        <span>مشاهده همه</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                            <line x1="17" y1="17" x2="7" y2="7"></line>
                            <polyline points="17 7 7 7 7 17"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Left Column - Interactive Accordion Stack -->
        <div class="lg:col-span-7 space-y-4" id="faq-accordion">
            
            <!-- Accordion Row 1 (Active) -->
            <div class="faq-row active group">
                <button class="faq-header w-full bg-[var(--color-bg-base)] rounded-t-3xl rounded-b-none px-6 py-4 flex justify-between items-center border border-gray-200 border-b-0 transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none">
                    <span class="faq-title font-extrabold text-neutral-900 text-base text-right">اهدای پلاسما چیست و چه تفاوتی با اهدای خون دارد؟</span>
                    <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-900 transition-all duration-500">
                        <i class="fa-solid fa-minus"></i>
                    </div>
                </button>
                <div class="faq-content-wrapper grid grid-rows-[1fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-gray-200 border-t-0">
                    <div class="overflow-hidden">
                        <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm leading-relaxed">
                            در اهدای پلاسما، تنها بخش مایع خون (پلاسما) جمع‌آوری می‌شود و سلول‌های خونی (گلبول‌های قرمز و سفید) به بدن اهداکننده بازگردانده می‌شوند. این فرآیند به بیماران دارای نقص ایمنی و هموفیلی کمک شایانی می‌کند.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Row 2 (Inactive) -->
            <div class="faq-row group">
                <button class="faq-header w-full bg-white hover:bg-[var(--color-bg-base)]/50 rounded-full px-6 py-4 flex justify-between items-center border border-gray-200 cursor-pointer transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none">
                    <span class="faq-title font-semibold text-neutral-900 text-sm md:text-base text-right">آیا اهدای پلاسما برای سلامتی ضرر دارد؟</span>
                    <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-400 group-hover:text-neutral-900 transition-all duration-500">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </button>
                <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-transparent border-t-0 overflow-hidden">
                    <div class="overflow-hidden">
                        <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm leading-relaxed">
                            خیر، اهدای پلاسما یک فرآیند ایمن است که تحت نظارت پزشک انجام می‌شود. پلاسما سریع‌تر از خون در بدن جایگزین می‌شود و اهداکنندگان می‌توانند به طور مستمر در این امر خیر مشارکت کنند.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Row 3 (Inactive) -->
            <div class="faq-row group">
                <button class="faq-header w-full bg-white hover:bg-[var(--color-bg-base)]/50 rounded-full px-6 py-4 flex justify-between items-center border border-gray-200 cursor-pointer transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none">
                    <span class="faq-title font-semibold text-neutral-900 text-sm md:text-base text-right">هر چند وقت یک‌بار می‌توان پلاسما اهدا کرد؟</span>
                    <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-400 group-hover:text-neutral-900 transition-all duration-500">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </button>
                <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-transparent border-t-0 overflow-hidden">
                    <div class="overflow-hidden">
                        <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm leading-relaxed">
                            طبق استانداردهای بهداشتی، شما می‌توانید تا دو بار در هفته با فاصله حداقل ۴۸ ساعت بین هر اهدا، پلاسما اهدا کنید. این تکرارپذیری به دلیل بازگشت سریع پلاسما به بدن است.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Row 4 (Inactive) -->
            <div class="faq-row group">
                <button class="faq-header w-full bg-white hover:bg-[var(--color-bg-base)]/50 rounded-full px-6 py-4 flex justify-between items-center border border-gray-200 cursor-pointer transition-all duration-500 focus:outline-none focus-visible:outline-none active:outline-none">
                    <span class="faq-title font-semibold text-neutral-900 text-sm md:text-base text-right">شرایط اصلی برای اهداکننده شدن چیست؟</span>
                    <div class="faq-icon-container w-8 h-8 flex items-center justify-center text-neutral-400 group-hover:text-neutral-900 transition-all duration-500">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </button>
                <div class="faq-content-wrapper grid grid-rows-[0fr] transition-all duration-500 ease-in-out bg-[var(--color-bg-base)] rounded-b-3xl border border-transparent border-t-0 overflow-hidden">
                    <div class="overflow-hidden">
                        <div class="faq-content px-6 pb-6 pt-2 text-neutral-900/70 text-sm leading-relaxed">
                            داشتن سن بین ۱۸ تا ۶۰ سال، وزن حداقل ۵۰ کیلوگرم، همراه داشتن کارت ملی و برخورداری از سلامت عمومی از شرایط اصلی است. قبل از هر اهدا، یک معاینه پزشکی رایگان انجام می‌شود.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
// Testimonial Data
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

let currentTestimonialIdx = 0;

function updateTestimonial() {
    const textEl = document.getElementById('testimonial-text');
    const nameEl = document.getElementById('testimonial-name');
    const roleEl = document.getElementById('testimonial-role');
    const avatarEl = document.getElementById('testimonial-avatar');
    
    const data = testimonials[currentTestimonialIdx];
    
    textEl.style.opacity = 0;
    setTimeout(() => {
        textEl.textContent = data.text;
        nameEl.textContent = data.user;
        roleEl.textContent = data.role;
        avatarEl.src = data.avatar;
        textEl.style.opacity = 1;
    }, 300);
}

function nextTestimonial() {
    currentTestimonialIdx = (currentTestimonialIdx + 1) % testimonials.length;
    updateTestimonial();
}

function prevTestimonial() {
    currentTestimonialIdx = (currentTestimonialIdx - 1 + testimonials.length) % testimonials.length;
    updateTestimonial();
}

document.addEventListener('DOMContentLoaded', () => {
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

                    otherWrapper.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
                    otherWrapper.classList.replace('border-gray-200', 'border-transparent');
                    
                    otherHeader.classList.remove('rounded-t-3xl', 'rounded-b-none', 'bg-[var(--color-bg-base)]', 'border-b-0');
                    otherHeader.classList.add('rounded-full', 'bg-white');
                    otherHeader.classList.replace('border-gray-200', 'border-gray-200'); // Ensure it stays consistent
                    
                    otherIcon.classList.replace('fa-minus', 'fa-plus');
                    otherIconContainer.classList.replace('text-neutral-900', 'text-neutral-400');
                    
                    otherTitle.classList.replace('font-black', 'font-bold');
                }
            });
            
            // Toggle current row
            const icon = iconContainer.querySelector('i');
            if (isActive) {
                row.classList.remove('active');
                wrapper.classList.replace('grid-rows-[1fr]', 'grid-rows-[0fr]');
                wrapper.classList.replace('border-gray-200', 'border-transparent');
                
                header.classList.remove('rounded-t-3xl', 'rounded-b-none', 'bg-[var(--color-bg-base)]', 'border-b-0');
                header.classList.add('rounded-full', 'bg-white');
                
                icon.classList.replace('fa-minus', 'fa-plus');
                iconContainer.classList.replace('text-neutral-900', 'text-neutral-400');
                
                title.classList.replace('font-black', 'font-bold');
            } else {
                row.classList.add('active');
                wrapper.classList.replace('grid-rows-[0fr]', 'grid-rows-[1fr]');
                wrapper.classList.replace('border-transparent', 'border-gray-200');
                
                header.classList.add('rounded-t-3xl', 'rounded-b-none', 'bg-[var(--color-bg-base)]', 'border-b-0');
                header.classList.remove('rounded-full', 'bg-white');
                
                icon.classList.replace('fa-plus', 'fa-minus');
                iconContainer.classList.replace('text-neutral-400', 'text-neutral-900');
                
                title.classList.replace('font-semibold', 'font-extrabold');
            }
        });
    });
});
</script>
