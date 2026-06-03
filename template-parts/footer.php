<footer class="w-full relative overflow-hidden bg-[var(--color-secondary)] text-neutral-300 py-12 lg:py-16" dir="rtl">
  <!-- Background Image & Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="public/hero_slide.webp" class="w-full h-full object-cover opacity-20 blur-[2px]" alt="Footer Background" />
    <div class="absolute inset-0 bg-[var(--color-secondary)]/80 backdrop-blur-[2px] mix-blend-multiply"></div>
  </div>

  <div class="container mx-auto px-4 lg:px-12 relative z-10">
    <!-- Main Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 pb-12 border-b border-neutral-700/40">
      
      <!-- Column 1: Brand Info & CTAs -->
      <div class="lg:col-span-4 space-y-6">
        <a href="./" class="flex items-center gap-3">
          <div class="relative w-8 h-5 flex items-center">
            <div class="absolute right-0 w-5 h-5 rounded-full bg-primary"></div>
            <div class="absolute right-3 w-5 h-5 rounded-full bg-[var(--color-white)]"></div>
          </div>
          <span class="text-white font-extrabold text-xl lg:text-2xl tracking-tight">تأمین پلاسما نوژین</span>
        </a>
        
        <div class="flex items-center gap-2 text-primary font-normal text-sm">
          <i class="fa-solid fa-star text-[10px]"></i>
          <span>مشاوره تخصصی و همراهی شما در فرآیند اهدای زندگی</span>
        </div>
        
        <p class="text-[var(--color-text-light)] text-xs lg:text-sm leading-relaxed max-w-md">
          مرکز تامین پلاسما نوژین، با بهره‌گیری از تکنولوژی‌های روز دنیا و کادری متخصص، متعهد به تامین فرآورده‌های پلاسمایی با کیفیت برای نجات جان بیماران و ارتقای سلامت جامعه است.
        </p>
        
        <!-- Social Icons (Moved from bottom) -->
        <div class="flex items-center gap-3 pt-2">
          <a href="./" class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 hover:bg-primary hover:text-[var(--color-text-main)] flex items-center justify-center text-white transition-all group" aria-label="LinkedIn">
            <i class="fa-brands fa-linkedin-in text-sm group-hover:scale-110 transition-transform"></i>
          </a>
          <a href="blog.php" class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 hover:bg-primary hover:text-[var(--color-text-main)] flex items-center justify-center text-white transition-all group" aria-label="Twitter">
            <i class="fa-brands fa-x-twitter text-sm group-hover:scale-110 transition-transform"></i>
          </a>
          <a href="jobs.php" class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 hover:bg-primary hover:text-[var(--color-text-main)] flex items-center justify-center text-white transition-all group" aria-label="Aparat">
            <i class="fa-solid fa-video text-sm group-hover:scale-110 transition-transform"></i>
          </a>
          <a href="#" class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 hover:bg-primary hover:text-[var(--color-text-main)] flex items-center justify-center text-white transition-all group" aria-label="Telegram">
            <i class="fa-brands fa-telegram text-sm group-hover:scale-110 transition-transform"></i>
          </a>
        </div>
      </div>

      <!-- Column 2 & 3: Navigation & Contact/Map Info -->
      <div class="lg:col-span-6 grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Sub-Column A: دسترسی سریع -->
        <div>
          <h3 class="text-primary font-extrabold text-base mb-6">دسترسی سریع</h3>
          <ul class="space-y-4">
            <li><a href="#" class="text-[var(--color-text-light)] hover:text-primary text-sm transition-colors duration-200 flex items-center gap-2">
              <span class="w-1 h-1 rounded-full bg-primary"></span> صفحه اصلی
            </a></li>
            <li><a href="#" class="text-[var(--color-text-light)] hover:text-primary text-sm transition-colors duration-200 flex items-center gap-2">
              <span class="w-1 h-1 rounded-full bg-primary"></span> اخبار و مقالات
            </a></li>
            <li><a href="#" class="text-[var(--color-text-light)] hover:text-primary text-sm transition-colors duration-200 flex items-center gap-2">
              <span class="w-1 h-1 rounded-full bg-primary"></span> فرصت‌های شغلی
            </a></li>
            <li><a href="policy.php" class="text-[var(--color-text-light)] hover:text-primary text-sm transition-colors duration-200 flex items-center gap-2">
              <span class="w-1 h-1 rounded-full bg-primary"></span> خط مشی
            </a></li>
            <li><a href="about.php" class="text-[var(--color-text-light)] hover:text-primary text-sm transition-colors duration-200 flex items-center gap-2">
              <span class="w-1 h-1 rounded-full bg-primary"></span> درباره ما
            </a></li>
          </ul>
        </div>

        <!-- Sub-Column B: اطلاعات تماس و نقشه -->
        <div class="space-y-6">
          <h3 class="text-primary font-extrabold text-base mb-6">اطلاعات تماس</h3>
          <div class="space-y-4">
            <div class="flex items-start gap-3 group">
              <div class="w-8 h-8 rounded-lg bg-[var(--color-white)]/5 border border-[var(--color-white)]/10 flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-all">
                <i class="fa-solid fa-location-dot text-sm"></i>
              </div>
              <p class="text-[var(--color-text-light)] text-xs leading-relaxed group-hover:text-[var(--color-white)] transition-colors">
                تهران، خیابان ولیعصر، بالاتر از میدان ونک، پلاک ۱۹۳۶
              </p>
            </div>
            <div class="flex items-center gap-3 group">
              <div class="w-8 h-8 rounded-lg bg-[var(--color-white)]/5 border border-[var(--color-white)]/10 flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-[var(--color-text-main)] transition-all">
                <i class="fa-solid fa-phone text-sm"></i>
              </div>
              <p class="text-[var(--color-text-light)] text-xs group-hover:text-[var(--color-white)] transition-colors" dir="ltr">
                ۰۲۱ ۴۹۳۶۱۳۱۸
              </p>
            </div>
          </div>
          
          <!-- Modern Map -->
          <div class="w-full h-32 rounded-2xl overflow-hidden border border-white/10 relative group shadow-lg grayscale invert contrast-[0.9] opacity-60 hover:opacity-100 hover:grayscale-0 hover:invert-0 transition-all duration-700">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.9304387217343!2d51.4087!3d35.7592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQ1JzMzLjEiTiA1McKwMjQnMzEuMyJF!5e0!3m2!1sen!2sir!4v1622620000000!5m2!1sen!2sir" 
              class="w-full h-full border-0" 
              allowfullscreen="" 
              loading="lazy">
            </iframe>
            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[var(--color-secondary)] to-transparent opacity-20"></div>
          </div>
        </div>
      </div>

      <!-- Column 4: Trust Badges & Micro-Chat widget -->
      <div class="lg:col-span-2 flex flex-col justify-between items-center lg:items-end gap-8">
        <!-- Trust Badges -->
        <div class="flex gap-3">
          <div class="w-20 h-24 border border-[var(--color-white)]/20 rounded-xl bg-[var(--color-white)]/5 flex items-center justify-center text-[10px] text-white/60 font-medium text-center p-2 uppercase tracking-widest hover:border-[var(--color-primary)]/50 transition-colors">
            نماد
          </div>
          <div class="w-20 h-24 border border-[var(--color-white)]/20 rounded-xl bg-[var(--color-white)]/5 flex items-center justify-center text-[10px] text-white/60 font-medium text-center p-2 uppercase tracking-widest hover:border-[var(--color-primary)]/50 transition-colors">
            نماد
          </div>
        </div>
        
        <!-- Floating Support Widget -->
        <div class="w-full max-w-[200px] space-y-2">
          <div class="flex items-center gap-2 bg-[var(--color-white)]/5 border border-[var(--color-white)]/10 px-3 py-2 rounded-full text-[11px] text-white">
            <div class="w-6 h-6 rounded-full bg-[var(--color-text-muted)] overflow-hidden shrink-0">
              <img src="https://ui-avatars.com/api/?name=Support&background=var(--color-error)&color=fff" alt="Avatar" />
            </div>
            <span>سوالی دارید؟ از ما بپرسید.</span>
          </div>
          <button class="w-full bg-primary text-[var(--color-text-main)] font-medium px-4 py-2 rounded-xl text-xs hover:scale-[1.02] transition-transform active:scale-95 shadow-lg flex items-center justify-center">
            پیام به پشتیبانی
          </button>
        </div>
      </div>
    </div>

    <!-- Bottom Copyright Bar -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-8 text-[11px] font-normal text-neutral-500 border-t border-[var(--color-border-subtle)]">
      
      <!-- Right Side (Back to Top & Copyright) -->
      <div class="flex items-center gap-6 order-2 md:order-1">
        <!-- Back To Top Button -->
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="group flex items-center gap-3 bg-[var(--color-white)]/5 hover:bg-primary px-4 py-2 rounded-full transition-all cursor-pointer" aria-label="Back to Top">
          <span class="text-[var(--color-text-light)] group-hover:text-[var(--color-text-main)] font-semibold uppercase tracking-wider">بازگشت به بالا</span>
          <div class="w-7 h-7 rounded-full bg-[var(--color-white)]/10 group-hover:bg-[var(--color-black)]/10 flex items-center justify-center">
            <i class="fa-solid fa-arrow-up text-[10px] group-hover:text-[var(--color-text-main)]"></i>
          </div>
        </button>
        
        <p class="text-center md:text-right">
          تمامی حقوق مادی و معنوی این وبسایت متعلق به تامین پلاسما می باشد.
        </p>
      </div>
      
      <!-- Left Side (Signature) -->
      <div class="flex items-center gap-2 order-1 md:order-2">
        <span class="text-[var(--color-text-muted)] font-semibold">طراحی و توسعه:</span>
        <a href="https://ihasht.ir" target="_blank" class="text-[var(--color-text-light)] hover:text-primary font-semibold transition-all flex items-center gap-1.5">
          <span>هشت بهشت</span>
          <i class="fa-solid fa-code text-[10px]"></i>
        </a>
      </div>

    </div>
  </div>
</footer>

  <!-- Video Modal -->
  <div id="video-modal"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/80 backdrop-blur-md transition-opacity">
    <div
      class="relative w-full max-w-4xl mx-4 aspect-video bg-black rounded-2xl overflow-hidden shadow-2xl border border-neutral-800">
      <button onclick="closeVideoModal()"
        class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/20 hover:bg-white/40 rounded-full flex items-center justify-center text-white transition-colors">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
      <iframe id="promo-video" class="w-full h-full" src="/" frameborder="0" allow="autoplay; fullscreen"></iframe>
    </div>
  </div>

  <div id="app"></div>
  <!-- Load compiled production scripts -->
  <script type="module" src="dist/assets/main.js"></script>
  <script>
    // Video Modal Handlers
    function openVideoModal() {
      const modal = document.getElementById('video-modal');
      const video = document.getElementById('promo-video');
      modal.classList.remove('hidden');
      modal.classList.add('flex');
      // Adding a sample video URL with autoplay
      video.src = "https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1";
    }

    function closeVideoModal() {
      const modal = document.getElementById('video-modal');
      const video = document.getElementById('promo-video');
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      // Stop the video when closed
      video.src = "";
    }

    // Intersection Observer for Scroll Animations & Counter
    document.addEventListener("DOMContentLoaded", () => {
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
      };

      let counterStarted = false;

      const animateValue = (obj, start, end, duration) => {
        let startTimestamp = null;
        const step = (timestamp) => {
          if (!startTimestamp) startTimestamp = timestamp;
          const progress = Math.min((timestamp - startTimestamp) / duration, 1);
          obj.innerHTML = Math.floor(progress * (end - start) + start);
          if (progress < 1) {
            window.requestAnimationFrame(step);
          } else {
            obj.innerHTML = end;
          }
        };
        window.requestAnimationFrame(step);
      };

      const sectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Reveal element
            entry.target.classList.add('opacity-100', 'translate-y-0');
            entry.target.classList.remove('opacity-0', 'translate-y-12');

            // Trigger counter if stats box
            if (entry.target.id === 'stats-box' && !counterStarted) {
              counterStarted = true;
              const counterEl = entry.target.querySelector('.counter-value');
              const targetVal = parseInt(counterEl.getAttribute('data-target'));
              animateValue(counterEl, 0, targetVal, 2000);
            }

            // Stop observing once animated
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      // Observe all elements with animate-on-scroll class
      document.querySelectorAll('.animate-on-scroll').forEach(el => {
        sectionObserver.observe(el);
      });
    });
  </script>
</body>

</html>