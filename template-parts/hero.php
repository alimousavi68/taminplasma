  <!-- Hero Section -->
  <section class="relative w-full min-h-[500px] lg:h-[600px] bg-[var(--color-bg-base)] overflow-hidden">
    <!-- Background Image & Overlays -->
    <div class="absolute inset-0 w-full h-full transition-opacity duration-500" id="hero-bg-container">
      <img id="hero-bg" src="public/hero_slide.webp" alt="پلاسما" class="w-full h-full object-cover object-left lg:object-center transition-transform duration-[2000ms] ease-out scale-100" />

      <!-- Gradient Overlay: Transparent on left, solid/semi-transparent on right -->
      <div
        class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-[var(--color-bg-base)]/70 to-[var(--color-bg-base)] lg:to-[var(--color-bg-base)]/35">
      </div>

      <!-- Pattern Overlay (Union.svg) on the right side -->
      <div
        class="absolute inset-0 opacity-50 bg-right bg-cover bg-no-repeat lg:bg-auto lg:bg-right-top mix-blend-multiply" style="background-image: url('public/Union.svg');">
      </div>
    </div>

    <!-- Content Block -->
    <div
      class="grid grid-cols-1 lg:grid-cols-12 h-full items-center container mx-auto px-4 lg:px-12 relative z-10 pt-16 pb-24 lg:py-0">
      <div class="lg:col-span-6 space-y-6 lg:space-y-8 transition-opacity duration-500 opacity-100" id="hero-content">

        <!-- Headers -->
        <div class="space-y-4">
          <!-- Badge -->
          <div class="inline-block border border-neutral-300 rounded-full px-4 py-1.5 bg-white/40 backdrop-blur-sm">
            <span class="text-[11px] lg:text-xs font-sans tracking-[0.15em] text-neutral-800 font-normal uppercase">Tamin
              Plasma Nojin</span>
          </div>

          <!-- Main Title -->
          <h1 id="hero-title" class="text-[var(--color-secondary)] font-black text-4xl lg:text-5xl xl:text-[3.5rem] leading-tight drop-shadow-sm">
            تأمین پلاسما نوژین
          </h1>

          <!-- Slogan -->
          <p id="hero-slogan" class="text-neutral-900 font-semibold text-lg lg:text-xl">
            بخشی که زندگی می‌شود..
          </p>
        </div>

        <!-- Text & Buttons Container -->
        <div class="max-w-[440px] space-y-6">
          <!-- Description -->
          <p id="hero-desc" class="text-neutral-700 text-sm lg:text-base leading-relaxed text-justify h-[72px]">
            تأمین پلاسما نوژین با تکیه بر دانش تخصصی و تجهیزات مدرن، پلاسما را مطابق با استانداردهای بین‌المللی سلامت تأمین می‌کند.
          </p>

          <!-- CTA -->
          <div class="flex items-center justify-end gap-3 lg:gap-4 pt-2">
            <!-- Group 1: درباره ما -->
            <a href="about.php"
              class="group/play bg-primary text-neutral-900 rounded-full pl-6 pr-2 py-2 font-normal flex items-center gap-3 shadow-sm hover:shadow-lg hover:-translate-y-0.5 hover:bg-[var(--color-primary-dark)] transition-all duration-300">
              <div
                class="bg-black/10 rounded-full w-8 h-8 flex items-center justify-center group-hover/play:bg-neutral-900 group-hover/play:text-primary group-hover/play:scale-110 transition-all duration-300">
                <i class="fa-solid fa-play text-xs ml-0.5"></i>
              </div>
              درباره ما
            </a>

            <!-- Group 2: فرایند اهدا + Arrow -->
            <a href="plasma-info.php"
              class="group/donate flex items-center gap-6 bg-[var(--color-bg-base)]/80 backdrop-blur-md border border-neutral-300 rounded-full pl-5 pr-6 py-2.5 font-normal text-neutral-800 shadow-sm hover:bg-white hover:border-neutral-400 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
              <span>فرایند اهدا</span>
              <i
                class="fa-solid fa-arrow-up -rotate-45 group-hover/donate:translate-x-[-3px] group-hover/donate:translate-y-[-3px] transition-transform duration-300"></i>
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- Floating Bottom Tab Navigation -->
    <div class="absolute bottom-0 right-0 z-20 w-full lg:w-auto" id="hero-tabs">
      <div
        class="bg-[var(--color-bg-base)]/95 backdrop-blur-md rounded-t-3xl lg:rounded-t-none lg:rounded-tl-[3rem] px-4 lg:px-8 py-3 lg:py-5 flex items-center justify-center lg:justify-start space-x-3 lg:space-x-4 space-x-reverse shadow-[0_-4px_20px_rgba(0,0,0,0.02)]">

        <!-- Tab 0 -->
        <button data-index="0"
          class="hero-tab bg-primary text-neutral-900 font-medium rounded-full px-5 py-2.5 flex items-center gap-2.5 lg:gap-4 lg:w-48 shadow-lg transition-all duration-300 hover:scale-105">
          <div
            class="tab-icon bg-white text-neutral-900 shadow-sm w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 transition-colors duration-300">
            <i class="fa-solid fa-heart text-sm lg:text-base"></i>
          </div>
          <span class="text-sm lg:text-[16px] font-normal whitespace-nowrap">زندگی دوباره</span>
        </button>

        <!-- Tab 1 -->
        <button data-index="1"
          class="hero-tab bg-surface-warm text-neutral-900 rounded-full pr-1.5 pl-5 lg:pl-10 py-1.5 lg:py-2 flex items-center gap-2.5 lg:gap-4 lg:w-48 hover:bg-primary hover:text-black transition-all duration-300">
          <div
            class="tab-icon bg-white w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-colors duration-300">
            <i class="fa-solid fa-stethoscope text-neutral-800 text-sm lg:text-base"></i>
          </div>
          <span class="text-sm lg:text-[16px] font-normal whitespace-nowrap">علم درمان</span>
        </button>

        <!-- Tab 2 -->
        <button data-index="2"
          class="hero-tab bg-surface-warm text-neutral-900 rounded-full pr-1.5 pl-5 lg:pl-10 py-1.5 lg:py-2 flex items-center gap-2.5 lg:gap-4 lg:w-48 hover:bg-primary hover:text-black transition-all duration-300">
          <div
            class="tab-icon bg-white w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-colors duration-300">
            <i class="fa-solid fa-wave-square text-neutral-800 text-sm lg:text-base"></i>
          </div>
          <span class="text-sm lg:text-[16px] font-normal whitespace-nowrap">اهدای حیات</span>
        </button>

      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const slides = [
        {
          title: 'تأمین پلاسما نوژین',
          slogan: 'بخشی که زندگی می‌شود..',
          desc: 'تأمین پلاسما نوژین با تکیه بر دانش تخصصی و تجهیزات مدرن، پلاسما را مطابق با استانداردهای بین‌المللی سلامت تأمین می‌کند.',
          img: 'public/hero_slide.webp'
        },
        {
          title: 'علم درمان و نوآوری',
          slogan: 'پیشگام در ارتقای سلامت',
          desc: 'ما با بهره‌گیری از جدیدترین دستاوردهای علمی در زمینه پلاسما، راهکارهای نوین درمانی را برای بیماران نیازمند فراهم می‌آوریم.',
          img: 'public/hero_slide.webp' // Using the same image for now, can be changed later
        },
        {
          title: 'اهدای حیات به همنوع',
          slogan: 'قطره‌ای برای نجات یک انسان',
          desc: 'اهدای پلاسمای شما می‌تواند ناجی جان ده‌ها بیمار نیازمند به فرآورده‌های مشتق از پلاسما باشد. با ما همراه شوید.',
          img: 'public/hero_slide.webp' // Using the same image for now
        }
      ];

      const tabs = document.querySelectorAll('.hero-tab');
      const titleEl = document.getElementById('hero-title');
      const sloganEl = document.getElementById('hero-slogan');
      const descEl = document.getElementById('hero-desc');
      const contentEl = document.getElementById('hero-content');
      const bgEl = document.getElementById('hero-bg');
      
      let currentIndex = 0;
      let autoplayInterval;

      const setActiveTab = (index) => {
        tabs.forEach((tab, i) => {
          const icon = tab.querySelector('.tab-icon');
          if (i === index) {
            // Active state
            tab.className = 'hero-tab bg-primary text-neutral-900 font-medium rounded-full px-5 py-2.5 flex items-center gap-2.5 lg:gap-4 lg:w-48 shadow-lg transition-all duration-300 hover:scale-105';
            icon.className = 'tab-icon bg-white text-neutral-900 shadow-sm w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 transition-colors duration-300';
            icon.querySelector('i').classList.remove('text-neutral-800');
          } else {
            // Inactive state
            tab.className = 'hero-tab bg-surface-warm text-neutral-900 rounded-full pr-1.5 pl-5 lg:pl-10 py-1.5 lg:py-2 flex items-center gap-2.5 lg:gap-4 lg:w-48 hover:bg-primary hover:text-black transition-all duration-300';
            icon.className = 'tab-icon bg-white w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-colors duration-300';
            icon.querySelector('i').classList.add('text-neutral-800');
          }
        });
      };

      const changeSlide = (index) => {
        if (index === currentIndex) return;
        
        // Fade out
        contentEl.classList.remove('opacity-100');
        contentEl.classList.add('opacity-0');
        
        // Zoom out bg slightly
        bgEl.classList.remove('scale-105');
        bgEl.classList.add('scale-100');

        setTimeout(() => {
          // Update content
          titleEl.textContent = slides[index].title;
          sloganEl.textContent = slides[index].slogan;
          descEl.textContent = slides[index].desc;
          
          if(bgEl.getAttribute('src') !== slides[index].img) {
            bgEl.setAttribute('src', slides[index].img);
          }

          // Fade in
          contentEl.classList.remove('opacity-0');
          contentEl.classList.add('opacity-100');
          
          // Zoom in bg
          bgEl.classList.remove('scale-100');
          bgEl.classList.add('scale-105');
          
          currentIndex = index;
          setActiveTab(index);
        }, 300); // Wait for fade out to complete
      };

      // Handle Tab Clicks
      tabs.forEach(tab => {
        tab.addEventListener('click', () => {
          const index = parseInt(tab.getAttribute('data-index'));
          changeSlide(index);
          resetAutoplay();
        });
      });

      const nextSlide = () => {
        const nextIndex = (currentIndex + 1) % slides.length;
        changeSlide(nextIndex);
      };

      const startAutoplay = () => {
        autoplayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
      };

      const resetAutoplay = () => {
        clearInterval(autoplayInterval);
        startAutoplay();
      };

      // Initialize
      setActiveTab(0);
      startAutoplay();
      
      // Start with initial zoom effect
      setTimeout(() => {
        bgEl.classList.remove('scale-100');
        bgEl.classList.add('scale-105');
      }, 100);
    });
  </script>

