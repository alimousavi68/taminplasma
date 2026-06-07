<?php
/**
 * News & Articles Section
 * Implement a pixel-perfect, highly responsive blog section with Swiper Carousel.
 */
?>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section id="blog" class="w-full py-20 lg:py-24 bg-white" dir="rtl">
  <div class="container mx-auto px-4 lg:max-w-[1170px] relative">
    
    <!-- Section Header Layer -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
      <!-- Right Side (First in RTL): Section title group -->
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-xl bg-primary flex items-center justify-center shadow-sm shrink-0">
          <img src="public/papers-text.svg" class="w-6 h-6 lg:w-7 lg:h-7" alt="News Icon" />
        </div>
        <h2 class="text-neutral-900 font-black text-2xl lg:text-3xl">اخبار و مقالات</h2>
      </div>

      <!-- Left Side (Second in RTL): Navigation & View All link -->
      <div class="flex items-center gap-4 lg:gap-6">
        <a href="blog.php" class="text-neutral-900 font-normal text-sm hover:brightness-110 transition-colors">مشاهده همه</a>
        <div class="flex items-center gap-2">
          <!-- Slider Controller Buttons -->
          <button class="blog-prev w-[25px] h-[25px] bg-primary hover:opacity-80 text-white rounded-md flex items-center justify-center transition-all cursor-pointer" aria-label="قبلی">
            <i class="fa-solid fa-caret-right text-xs"></i>
          </button>
          <button class="blog-next w-[25px] h-[25px] bg-primary hover:opacity-80 text-white rounded-md flex items-center justify-center transition-all cursor-pointer" aria-label="بعدی">
            <i class="fa-solid fa-caret-left text-xs"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- The Article Cards Swiper -->
    <div class="swiper blogSwiper overflow-visible">
      <div class="swiper-wrapper">
        
        <!-- Article Card 1 -->
        <div class="swiper-slide flex flex-col relative group cursor-pointer">
          <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
            <img src="src/assets/post-1.webp" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="نقش پلاسما در درمان بیماری‌های نادر" />
          </div>
          <div class="mt-4 px-2 space-y-3 relative">
            <h3 class="text-neutral-900 font-semibold text-base lg:text-lg">نقش پلاسما در درمان بیماری‌های نادر</h3>
            <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
              پلاسما حاوی پروتئین‌های حیاتی است که برای تولید داروهای بیماران خاص و نادر استفاده می‌شود.
            </p>
            <a href="single-post.php" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
              <span>ادامه مطلب</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                <line x1="17" y1="17" x2="7" y2="7"></line>
                <polyline points="17 7 7 7 7 17"></polyline>
              </svg>
            </a>
          </div>
        </div>

        <!-- Article Card 2 -->
        <div class="swiper-slide flex flex-col relative group cursor-pointer">
          <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
            <img src="src/assets/post-2.webp" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="تغذیه مناسب قبل و بعد از اهدای پلاسما" />
          </div>
          <div class="mt-4 px-2 space-y-3 relative">
            <h3 class="text-neutral-900 font-semibold text-base lg:text-lg">تغذیه مناسب قبل و بعد از اهدای پلاسما</h3>
            <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
              با رعایت یک رژیم غذایی سالم و مصرف مایعات کافی، تجربه بهتری از اهدای پلاسما خواهید داشت.
            </p>
            <a href="single-post.php" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
              <span>ادامه مطلب</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                <line x1="17" y1="17" x2="7" y2="7"></line>
                <polyline points="17 7 7 7 7 17"></polyline>
              </svg>
            </a>
          </div>
        </div>

        <!-- Article Card 3 -->
        <div class="swiper-slide flex flex-col relative group cursor-pointer">
          <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
            <img src="src/assets/post-3.webp" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="تفاوت پلاسمای انسانی و فرآورده‌های خونی" />
          </div>
          <div class="mt-4 px-2 space-y-3 relative">
            <h3 class="text-neutral-900 font-semibold text-base lg:text-lg">تفاوت پلاسمای انسانی و فرآورده‌های خونی</h3>
            <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
              بررسی علمی کاربردهای پلاسما در مقایسه با خون کامل و نقش آن در پزشکی مدرن.
            </p>
            <a href="single-post.php" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
              <span>ادامه مطلب</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                <line x1="17" y1="17" x2="7" y2="7"></line>
                <polyline points="17 7 7 7 7 17"></polyline>
              </svg>
            </a>
          </div>
        </div>

        <!-- Article Card 4 -->
        <div class="swiper-slide flex flex-col relative group cursor-pointer">
          <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
            <img src="src/assets/post-4.webp" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="چگونه اهداکننده مستمر پلاسما شویم؟" />
          </div>
          <div class="mt-4 px-2 space-y-3 relative">
            <h3 class="text-neutral-900 font- text-base lg:text-lg">چگونه اهداکننده مستمر پلاسما شویم؟</h3>
            <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
              راهنمای گام به گام برای کسانی که می‌خواهند به طور منظم در نجات جان بیماران سهیم باشند.
            </p>
            <a href="single-post.php" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
              <span>ادامه مطلب</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                <line x1="17" y1="17" x2="7" y2="7"></line>
                <polyline points="17 7 7 7 7 17"></polyline>
              </svg>
            </a>
          </div>
        </div>

        <!-- Article Card 5 -->
        <div class="swiper-slide flex flex-col relative group cursor-pointer">
          <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
            <img src="src/assets/post-5.webp" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="استانداردهای ایمنی در مراکز ما" />
          </div>
          <div class="mt-4 px-2 space-y-3 relative">
            <h3 class="text-neutral-900 font-semibold text-base lg:text-lg">استانداردهای ایمنی در مراکز ما</h3>
            <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
              آشنایی با تجهیزات پیشرفته و پروتکل‌های بهداشتی سخت‌گیرانه در مراکز تامین پلاسما نوژین.
            </p>
            <a href="single-post.php" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
              <span>ادامه مطلب</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                <line x1="17" y1="17" x2="7" y2="7"></line>
                <polyline points="17 7 7 7 7 17"></polyline>
              </svg>
            </a>
          </div>
        </div>

        <!-- Article Card 6 -->
        <div class="swiper-slide flex flex-col relative group cursor-pointer">
          <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
            <img src="src/assets/post-6.webp" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="فواید علمی اهدای پلاسما برای بدن" />
          </div>
          <div class="mt-4 px-2 space-y-3 relative">
            <h3 class="text-neutral-900 font-semibold text-base lg:text-lg">فواید علمی اهدای پلاسما برای بدن</h3>
            <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
              مطالعات نشان می‌دهد که اهدای منظم پلاسما می‌تواند به بهبود گردش خون و سلامت عمومی کمک کند.
            </p>
            <a href="single-post.php" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
              <span>ادامه مطلب</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                <line x1="17" y1="17" x2="7" y2="7"></line>
                <polyline points="17 7 7 7 7 17"></polyline>
              </svg>
            </a>
          </div>
        </div>

      </div>
      
      <!-- Bottom Pagination Dots -->
      <div class="blog-pagination flex items-center justify-center gap-2 mt-12 swiper-pagination-custom"></div>
    </div>

  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.blogSwiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.blog-next',
        prevEl: '.blog-prev',
      },
      pagination: {
        el: '.blog-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + ' w-2 h-2 bg-primary/20 rounded-full hover:bg-primary/40 cursor-pointer transition-all duration-300"></span>';
        },
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  });
</script>

<style>
  .blog-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
  }
  .blog-pagination .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background: rgba(255, 196, 54, 0.2) !important;
    opacity: 1 !important;
    margin: 0 !important;
    transition: all 0.3s ease;
    border-radius: 9999px;
  }
  .blog-pagination .swiper-pagination-bullet-active {
    width: 24px !important;
    background: #000 !important;
  }
</style>
