<?php
/**
 * Front Page About Section Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;
?>
<!-- About Section -->
<section id="about" class="relative w-full py-20 lg:py-24 bg-bg-warm overflow-hidden">
  <!-- Background Patterns -->
  <div class="absolute right-0 top-[-20px] lg:top-[-60px] w-3/4 lg:w-[38%] pointer-events-none opacity-60">
    <img src="<?php echo esc_url(tamin_img_url('about/about-bg.svg')); ?>" class="w-full h-auto" alt="" />
  </div>

  <div class="container mx-auto px-4 lg:max-w-[1170px] grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">

    <!-- Right Column: Media Canvas -->
    <div class="lg:col-span-5 relative w-full mb-16 lg:mb-0 lg:h-[500px] animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 ease-out">
      <!-- Back Card -->
      <div class="w-[85%] lg:w-[373px] lg:h-[438px] lg:absolute lg:top-0 lg:right-0 rounded-[1.5rem] lg:rounded-[2rem] overflow-hidden shadow-md">
        <img src="<?php echo esc_url(tamin_img_url('about/image-right-top.png')); ?>" alt="<?php esc_attr_e('نمایی از اهدای پلاسما', 'tamin-theme'); ?>" class="w-full h-full object-cover block" />
      </div>

      <!-- Front Card (Video Container) -->
      <a href="javascript:void(0)" onclick="openVideoModal()"
        class="group/video absolute bottom-0 left-0 w-[72%] lg:w-[377px] lg:h-[261px] lg:bottom-0 lg:-left-6 transform translate-y-[20%] lg:translate-y-4 rounded-[1.5rem] lg:rounded-[2rem] overflow-hidden shadow-2xl border-[6px] lg:border-8 border-bg-warm block cursor-pointer transition-all duration-500 hover:shadow-[0_25px_60px_rgba(0,0,0,0.35)] hover:-translate-y-1">
        <img src="<?php echo esc_url(tamin_img_url('about/img-video-cover.png')); ?>" alt="<?php esc_attr_e('ویدیو اهدای پلاسما', 'tamin-theme'); ?>" class="w-full h-full object-cover block transition-transform duration-700 ease-out group-hover/video:scale-105 group-hover/video:opacity-90" />

        <!-- Modern Play Button -->
        <div class="absolute inset-0 flex items-center justify-center bg-black/10 group-hover/video:bg-black/20 transition-colors duration-500">
          <div class="relative flex items-center justify-center">
            <div class="absolute w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-primary/60 animate-ping [animation-duration:2.5s]"></div>
            <div class="absolute w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-white/50 animate-ping [animation-duration:3s] [animation-delay:0.5s]"></div>
            <div class="relative z-10 w-12 h-12 lg:w-14 lg:h-14 bg-black/90 group-hover/video:bg-primary group-hover/video:text-neutral-900 rounded-full flex items-center justify-center shadow-2xl transition-all duration-300 group-hover/video:scale-110 border border-neutral-700/50">
              <i class="fa-solid fa-play text-white group-hover/video:text-neutral-900 ml-1 text-sm lg:text-lg transition-colors"></i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Left Column: Content Block -->
    <div class="lg:col-span-7 space-y-6 lg:space-y-8 pl-0 lg:pl-4 animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 delay-200 ease-out text-right">
      <!-- Section Title -->
      <div class="flex items-center justify-start gap-3">
        <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center text-primary shrink-0">
          <i class="fa-solid fa-question font-extrabold text-base"></i>
        </div>
        <h2 class="text-neutral-900 font-black text-[22px] lg:text-[28px] leading-tight tracking-tight">
          <?php esc_html_e('درباره اهدای پلاسما بیشتر بدانیم..', 'tamin-theme'); ?>
        </h2>
      </div>

      <!-- Paragraphs -->
      <div class="text-neutral-700 text-[14px] lg:text-[15.5px] leading-loose space-y-4 font-normal text-right">
        <p><?php esc_html_e('پلاسما بخش مایع خون است که حدود ۵۵٪ حجم کل خون را تشکیل می‌دهد. این بخش زرد رنگ حاوی آب، پروتئین‌ها، نمک‌ها، و مواد مغذی است که نقش مهمی در حمل مواد مغذی، هورمون‌ها و پروتئین‌های حیاتی ایفا می‌کند.', 'tamin-theme'); ?></p>
        <p><?php esc_html_e('با اهدای پلاسما، نه تنها به دیگران کمک می‌کنید، بلکه حس همدلی و مسئولیت اجتماعی را تجربه می‌کنید. با یک اقدام ساده، می‌توانید تفاوت بزرگی در زندگی یک نفر بسازید.', 'tamin-theme'); ?></p>
      </div>

      <!-- Benefits & Stats Row -->
      <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-start pt-4 lg:pt-6">

        <!-- Benefits List -->
        <div class="flex-1 space-y-5 w-full">
          <h3 class="font-bold text-neutral-900 text-[20px] text-right"><?php esc_html_e('پلاسما در درمان بسیاری از بیماری‌ها کاربرد دارد، از جمله:', 'tamin-theme'); ?></h3>
          <ul class="space-y-3.5">
            <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
              <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                <img src="<?php echo esc_url(tamin_img_url('about/tike.svg')); ?>" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
              </div>
              <?php esc_html_e('بیماران مبتلا به سوختگی شدید', 'tamin-theme'); ?>
            </li>
            <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
              <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                <img src="<?php echo esc_url(tamin_img_url('about/tike.svg')); ?>" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
              </div>
              <?php esc_html_e('مبتلایان به اختلالات خونی مانند هموفیلی', 'tamin-theme'); ?>
            </li>
            <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
              <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                <img src="<?php echo esc_url(tamin_img_url('about/tike.svg')); ?>" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
              </div>
              <?php esc_html_e('بیماران نیازمند ایمونوگلوبولین (برای تقویت سیستم ایمنی)', 'tamin-theme'); ?>
            </li>
            <li class="flex items-center justify-start gap-3 text-[14px] font-normal text-neutral-700">
              <div class="w-[18px] h-[18px] rounded-full bg-[var(--color-accent-brown)] flex items-center justify-center shrink-0">
                <img src="<?php echo esc_url(tamin_img_url('about/tike.svg')); ?>" class="w-2.5 h-2.5 brightness-0 invert" alt="tike" />
              </div>
              <?php esc_html_e('بیماران کرونایی یا مبتلایان به برخی بیماری‌های عفونی در شرایط خاص', 'tamin-theme'); ?>
            </li>
          </ul>

          <!-- CTA Button -->
          <div class="pt-6 flex justify-start w-full">
            <a href="<?php echo esc_url(home_url('/about')); ?>"
              class="inline-flex items-center gap-3 bg-primary text-neutral-900 font-medium px-7 py-2.5 rounded-full hover:bg-[var(--color-primary-dark)] hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
              <?php esc_html_e('اطلاعات بیشتر', 'tamin-theme'); ?>
              <img src="<?php echo esc_url(tamin_img_url('about/btn-arrow-up-right.svg')); ?>" class="w-4 h-4" alt="arrow" />
            </a>
          </div>
        </div>

        <!-- Stats Box -->
        <div id="stats-box"
          class="relative w-full lg:w-[170px] lg:h-[170px] shrink-0 bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-primary-dark)] border border-black/5 rounded-[2.5rem] p-6 flex flex-col items-center justify-center text-center shadow-[0_20px_50px_rgba(234,168,36,0.3)] animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 delay-300 ease-out group hover:shadow-[0_20px_60px_rgba(234,168,36,0.4)] hover:-translate-y-2">
          
          <div class="relative z-10">
            <div class="font-black text-3xl lg:text-[42px] text-[#333333] leading-none flex items-baseline justify-center gap-1" dir="rtl">
              <span class="counter-value" data-target="10">۰</span>
              <span class="text-xl lg:text-2xl text-[#333333]/60 font-black">+</span>
            </div>
            <div class="text-[#333333] font-bold text-xl lg:text-[22px] mt-1"><?php esc_html_e('سال', 'tamin-theme'); ?></div>
            <div class="text-[12px] lg:text-[13px] font-normal text-[#444444] mt-4 uppercase tracking-[0.05em] leading-tight"><?php esc_html_e('تجربه و سابقه موفق', 'tamin-theme'); ?></div>
          </div>
          
          <div class="absolute inset-2 border border-black/5 rounded-[2.1rem] pointer-events-none group-hover:border-black/10 transition-colors duration-500"></div>
        </div>

      </div>
    </div>
  </div>
</section>
