  <!-- About Section -->
  <section id="about" class="relative w-full py-20 lg:py-24 bg-bg-warm overflow-hidden">
    <!-- Background Patterns -->
    <div class="absolute right-0 top-[-20px] lg:top-[-60px] w-3/4 lg:w-[38%] pointer-events-none opacity-60">
      <img src="public/about/about-bg.svg" class="w-full h-auto" alt="" />
    </div>

    <div
      class="container mx-auto px-4 lg:max-w-[1170px] grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">

      <!-- Right Column: Media Canvas -->
      <div
        class="lg:col-span-5 relative w-full mb-16 lg:mb-0 lg:h-[500px] animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 ease-out">
        <!-- Back Card -->
        <div
          class="w-[85%] lg:w-[373px] lg:h-[438px] lg:absolute lg:top-0 lg:right-0 rounded-[1.5rem] lg:rounded-[2rem] overflow-hidden shadow-md">
          <img src="public/about/image-right-top.png" alt="نمایی از اهدای پلاسما" class="w-full h-full object-cover block" />
        </div>

        <!-- Front Card (Video Container) -->
        <div
          class="absolute bottom-0 left-0 w-[72%] lg:w-[377px] lg:h-[261px] lg:bottom-0 lg:-left-6 transform translate-y-[20%] lg:translate-y-4 rounded-[1.5rem] lg:rounded-[2rem] overflow-hidden shadow-2xl border-[6px] lg:border-8 border-bg-warm">
          <img src="public/about/img-video-cover.png" alt="ویدیو اهدای پلاسما" class="w-full h-full object-cover block" />

          <!-- Modern Play Button with Pulse/Sonar Effect -->
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="relative flex items-center justify-center">
              <!-- Ripple Layers -->
              <div
                class="absolute w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-primary/60 animate-ping [animation-duration:2.5s]">
              </div>
              <div
                class="absolute w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-white/50 animate-ping [animation-duration:3s] [animation-delay:0.5s]">
              </div>

              <!-- Central Button -->
              <button onclick="openVideoModal()"
                class="relative z-10 w-12 h-12 lg:w-14 lg:h-14 bg-black/90 hover:bg-black rounded-full flex items-center justify-center shadow-2xl transition-transform duration-300 hover:scale-110 border border-neutral-700/50">
                <i class="fa-solid fa-play text-white ml-1 text-sm lg:text-lg"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Left Column: Semantic Content Block -->
      <div
        class="lg:col-span-7 space-y-6 lg:space-y-8 pl-0 lg:pl-4 animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 delay-200 ease-out text-right">
        <!-- Section Title -->
        <div class="flex items-center justify-start gap-3">
          <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center text-primary shrink-0">
            <i class="fa-solid fa-question font-extrabold text-base"></i>
          </div>
          <h2 class="text-neutral-900 font-black text-[22px] lg:text-[28px] leading-tight tracking-tight">درباره اهدای
            پلاسما بیشتر بدانیم..</h2>
        </div>

        <!-- Paragraphs -->
        <div
          class="text-neutral-700 text-[14px] lg:text-[15.5px] leading-loose space-y-4 font-normal text-right">
          <p>پلاسما بخش مایع خون است که حدود ۵۵٪ حجم کل خون را تشکیل می‌دهد. این بخش زرد رنگ حاوی آب، پروتئین‌ها،
            نمک‌ها، و مواد مغذی است که نقش مهمی در حمل مواد مغذی، هورمون‌ها و پروتئین‌های حیاتی ایفا می‌کند.</p>
          <p>با اهدای پلاسما، نه تنها به دیگران کمک می‌کنید، بلکه حس همدلی و مسئولیت اجتماعی را تجربه می‌کنید. با یک
            اقدام ساده، می‌توانید تفاوت بزرگی در زندگی یک نفر بسازید.</p>
        </div>

        <!-- Benefits & Stats Row -->
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-start pt-4 lg:pt-6">

          <!-- Benefits List (RTL First -> Right Side) -->
          <div class="flex-1 space-y-5 w-full">
            <h3 class="font-bold text-neutral-900 text-[20px] text-right">پلاسما در درمان بسیاری از بیماری‌ها کاربرد
              دارد، از جمله:</h3>
            <ul class="space-y-3.5">
              <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
                <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                  <img src="public/about/tike.svg" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
                </div>
                بیماران مبتلا به سوختگی شدید
              </li>
              <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
                <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                  <img src="public/about/tike.svg" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
                </div>
                مبتلایان به اختلالات خونی مانند هموفیلی
              </li>
              <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
                <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                  <img src="public/about/tike.svg" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
                </div>
                بیماران نیازمند ایمونوگلوبولین (برای تقویت سیستم ایمنی)
              </li>
              <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
                <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                  <img src="public/about/tike.svg" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
                </div>
                بیماران کرونایی یا مبتلایان به برخی بیماری‌های عفونی در شرایط خاص
              </li>
            </ul>

            <!-- CTA Button -->
            <div class="pt-6 flex justify-start w-full">
              <a href="about.php"
                class="inline-flex items-center gap-3 bg-primary text-neutral-900 font-medium px-7 py-2.5 rounded-full hover:bg-[var(--color-primary-dark)] hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
                اطلاعات بیشتر
                <img src="public/about/btn-arrow-up-right.svg" class="w-4 h-4" alt="arrow" />
              </a>
            </div>
          </div>

          <!-- Stats Box with Counter (RTL Second -> Left Side) -->
          <div id="stats-box"
            class="relative w-full lg:w-[170px] lg:h-[170px] shrink-0 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-primary-dark)] border border-black/5 rounded-[3.5rem_1.5rem_3.5rem_1.5rem] p-6 flex flex-col items-center justify-center text-center shadow-[0_20px_50px_rgba(234,168,36,0.3)] animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 delay-300 ease-out group hover:shadow-[0_20px_60px_rgba(234,168,36,0.4)] hover:-translate-y-2">
            
            <!-- Counter Content -->
            <div class="relative z-10">
              <div class="font-black text-3xl lg:text-[42px] text-neutral-900 leading-none flex items-baseline justify-center gap-1">
                <span class="counter-value" data-target="10">0</span>
                <span class="text-xl lg:text-2xl text-neutral-900/60">+</span>
              </div>
              <div class="text-neutral-900 font-bold text-xl lg:text-[22px] mt-1">سال</div>
              <div class="text-[12px] lg:text-[13px] font-normal text-neutral-800/80 mt-4 uppercase tracking-[0.05em] leading-tight">تجربه و سابقه موفق</div>
            </div>
            
            <!-- Inner Decorative Glow -->
            <div class="absolute inset-2 border border-black/5 rounded-[3rem_1rem_3rem_1rem] pointer-events-none group-hover:border-black/10 transition-colors duration-500"></div>
          </div>

        </div>
      </div>
    </div>
  </section>

