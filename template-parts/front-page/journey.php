<?php
/**
 * Front Page Journey Timeline Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;
?>
<!-- Plasma Donation Journey Timeline Section -->
<style>
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fade-in-up {
    opacity: 0;
    animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
</style>
<section id="journey" class="w-full py-20 lg:py-24 bg-[var(--color-bg-warm)] relative overflow-hidden">
  <!-- Decorative background circles -->
  <div class="absolute -top-32 -right-32 w-[600px] h-[600px] rounded-full border-[1px] border-[var(--color-primary)]/10 pointer-events-none"></div>
  <div class="absolute -top-16 -right-16 w-[450px] h-[450px] rounded-full border-[1px] border-[var(--color-primary)]/10 pointer-events-none"></div>
  <div class="absolute top-0 right-0 w-[300px] h-[300px] rounded-full border-[1px] border-[var(--color-primary)]/10 pointer-events-none"></div>
  
  <div class="w-full absolute right-0 top-1/2 bg-white h-24 -translate-y-1/2 border-r-8 border-[var(--color-primary)]"></div>

  <div class="container mx-auto px-4 lg:max-w-[1210px] relative z-10">
    
    <!-- DESKTOP TIMELINE (Hidden on Mobile) -->
    <div class="hidden md:flex w-full items-center justify-center gap-8 relative z-10">

      <!-- TITLE CARD -->
      <div class="animate-fade-in-up shrink-0" style="width: 300px;">
        <div class="flex items-center gap-3 px-8 py-8">
          <div class="bg-primary w-18 h-18 rounded-full flex items-center justify-center shadow-sm shrink-0">
            <img src="<?php echo esc_url(tamin_img_url('path/route.png')); ?>" alt="<?php esc_attr_e('مسیر', 'tamin-theme'); ?>" class="w-8 h-8 object-contain" style="filter: brightness(0);" />
          </div>
          <div class="flex flex-col text-right">
            <span class="text-neutral-900 font-extrabold text-2xl leading-tight"><?php esc_html_e('مسیر', 'tamin-theme'); ?></span>
            <span class="text-primary font-extrabold text-2xl leading-tight"><?php esc_html_e('اهدای پلاسما:', 'tamin-theme'); ?></span>
          </div>
        </div>
      </div>

      <!-- Six-step container -->
      <div class="flex flex-row justify-center items-start gap-8" style="width: 800px;">

        <!-- STEP 01 -->
        <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url(tamin_img_url('path/step-1.png')); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php esc_attr_e('خوش‌آمدگویی و پذیرش', 'tamin-theme'); ?>" />
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; bottom: -44px;" alt="" />
          </div>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative mt-[40px] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            ۰۱
          </div>
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('خوش‌آمدگویی و پذیرش', 'tamin-theme'); ?></p>
        </div>

        <!-- STEP 02 -->
        <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('کنترل علائم حیاتی', 'tamin-theme'); ?></p>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            ۰۲
          </div>
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative mt-[40px] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url(tamin_img_url('path/step-2.png')); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php esc_attr_e('کنترل علائم حیاتی', 'tamin-theme'); ?>" />
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; top: -44px; transform: scaleY(-1);" alt="" />
          </div>
        </div>

        <!-- STEP 03 -->
        <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url(tamin_img_url('path/step-3.png')); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php esc_attr_e('اهدای پلاسما', 'tamin-theme'); ?>" />
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; bottom: -44px;" alt="" />
          </div>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative mt-[40px] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            ۰۳
          </div>
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('اهدای پلاسما', 'tamin-theme'); ?></p>
        </div>

        <!-- STEP 04 -->
        <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('تعیین وقت برای اهدای بعدی (دلخواه)', 'tamin-theme'); ?></p>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            ۰۴
          </div>
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative mt-[40px] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url(tamin_img_url('path/step-4.png')); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php esc_attr_e('تعیین وقت برای اهدای بعدی', 'tamin-theme'); ?>" />
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; top: -44px; transform: scaleY(-1);" alt="" />
          </div>
        </div>

        <!-- STEP 05 -->
        <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url(tamin_img_url('path/step-5.png')); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php esc_attr_e('پذیرایی و بررسی سلامت شما توسط پزشک', 'tamin-theme'); ?>" />
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; bottom: -44px;" alt="" />
          </div>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative mt-[40px] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            ۰۵
          </div>
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('پذیرایی و بررسی سلامت شما توسط پزشک', 'tamin-theme'); ?></p>
        </div>

        <!-- STEP 06 -->
        <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('پرداخت هزینه ایاب ذهاب', 'tamin-theme'); ?></p>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            ۰۶
          </div>
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative mt-[40px] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url(tamin_img_url('path/step-6.png')); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php esc_attr_e('پرداخت هزینه ایاب و ذهاب', 'tamin-theme'); ?>" />
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; top: -44px; transform: scaleY(-1);" alt="" />
          </div>
        </div>
            

      </div>
    </div>

    <!-- MOBILE TIMELINE (Hidden on Desktop) -->
    <div class="flex flex-col md:hidden w-full relative z-10 gap-10">
      <div class="bg-white rounded-2xl p-4 pl-6 pr-12 shadow-sm flex flex-col justify-center w-[90%] z-20 shrink-0 relative h-[84px] animate-fade-in-up">
        <div class="absolute -right-6 top-1/2 -translate-y-1/2 bg-primary w-14 h-14 rounded-full flex items-center justify-center shadow-md border-4 border-[var(--color-bg-warm)]">
          <img src="<?php echo esc_url(tamin_img_url('path/route.png')); ?>" alt="<?php esc_attr_e('مسیر', 'tamin-theme'); ?>" class="w-6 h-6 object-contain" style="filter: brightness(0);" />
        </div>
        <h3 class="text-neutral-900 font-extrabold text-lg text-right leading-tight"><?php esc_html_e('مسیر', 'tamin-theme'); ?></h3>
        <h3 class="text-[var(--color-secondary)] font-extrabold text-lg text-right leading-tight mt-1"><?php esc_html_e('اهدای پلاسما:', 'tamin-theme'); ?></h3>
      </div>

      <div class="relative w-full pr-4 mt-6">
        <div class="absolute top-8 bottom-16 right-[34px] border-r-2 border-dashed border-[var(--color-border-dashed)] z-0 opacity-70"></div>

        <!-- Mobile Step 01 -->
        <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
          <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۱</div>
          <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
            <img src="<?php echo esc_url(tamin_img_url('path/step-1.png')); ?>" class="w-full h-full object-cover" alt="<?php esc_attr_e('خوش‌آمدگویی و پذیرش', 'tamin-theme'); ?>" />
          </div>
          <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('خوش‌آمدگویی و پذیرش', 'tamin-theme'); ?></p>
        </div>

        <!-- Mobile Step 02 -->
        <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
          <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۲</div>
          <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
            <img src="<?php echo esc_url(tamin_img_url('path/step-2.png')); ?>" class="w-full h-full object-cover" alt="<?php esc_attr_e('کنترل علائم حیاتی', 'tamin-theme'); ?>" />
          </div>
          <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('کنترل علائم حیاتی', 'tamin-theme'); ?></p>
        </div>

        <!-- Mobile Step 03 -->
        <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
          <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۳</div>
          <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
            <img src="<?php echo esc_url(tamin_img_url('path/step-3.png')); ?>" class="w-full h-full object-cover" alt="<?php esc_attr_e('اهدای پلاسما', 'tamin-theme'); ?>" />
          </div>
          <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('اهدای پلاسما', 'tamin-theme'); ?></p>
        </div>

        <!-- Mobile Step 04 -->
        <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
          <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۴</div>
          <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
            <img src="<?php echo esc_url(tamin_img_url('path/step-4.png')); ?>" class="w-full h-full object-cover" alt="<?php esc_attr_e('تعیین وقت', 'tamin-theme'); ?>" />
          </div>
          <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('تعیین وقت برای اهدای بعدی (دلخواه)', 'tamin-theme'); ?></p>
        </div>

        <!-- Mobile Step 05 -->
        <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
          <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۵</div>
          <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
            <img src="<?php echo esc_url(tamin_img_url('path/step-5.png')); ?>" class="w-full h-full object-cover" alt="<?php esc_attr_e('پذیرایی و بررسی سلامت', 'tamin-theme'); ?>" />
          </div>
          <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('پذیرایی و بررسی سلامت شما توسط پزشک', 'tamin-theme'); ?></p>
        </div>

        <!-- Mobile Step 06 -->
        <div class="flex items-center gap-6 relative z-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
          <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۶</div>
          <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
            <img src="<?php echo esc_url(tamin_img_url('path/step-6.png')); ?>" class="w-full h-full object-cover" alt="<?php esc_attr_e('ایاب ذهاب', 'tamin-theme'); ?>" />
          </div>
          <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php esc_html_e('پرداخت هزینه ایاب ذهاب', 'tamin-theme'); ?></p>
        </div>

      </div>
    </div>

  </div>
</section>
