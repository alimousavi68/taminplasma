<?php
/**
 * Front Page Conditions Section Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;
?>
<!-- Donation Conditions Section -->
<section id="conditions" class="relative w-full py-20 lg:py-24 bg-white overflow-hidden">
  <div class="container mx-auto px-4 lg:max-w-[1170px] flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-0 relative z-10">

    <!-- Right Side - Content & Interactive Conditions Grid -->
    <div class="w-full lg:w-[55%] flex flex-col justify-center animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 ease-out order-2 lg:order-1 relative z-20">

      <div class="space-y-6 w-full">
        <!-- Sub-header -->
        <div class="flex items-center gap-3 justify-start">
          <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center shrink-0">
            <img src="<?php echo esc_url(tamin_img_url('sharayet/megaphone.png')); ?>" class="w-4 h-4" alt="megaphone" />
          </div>
          <h3 class="text-neutral-900 font-black text-xl lg:text-[22px]"><?php esc_html_e('شرایط اهداکننده:', 'tamin-theme'); ?></h3>
        </div>

        <!-- Cards Grid -->
        <div id="conditions-grid" class="flex flex-row flex-wrap lg:flex-nowrap gap-3 lg:gap-[15px] w-full lg:w-[950px] max-w-none relative z-20">
          <!-- Card 1 -->
          <div data-index="0" class="condition-card bg-primary text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-md gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300">
            <img src="<?php echo esc_url(tamin_img_url('sharayet/user-viewfinder.svg')); ?>" class="w-[39px] h-[39px] shrink-0 transition-transform duration-300" alt="age" />
            <span class="font-semibold text-[18px] leading-[1.3] w-full text-right mt-1"><?php esc_html_e('دارای شرایط سنی ۱۸ تا ۶۰ سال', 'tamin-theme'); ?></span>
          </div>

          <!-- Card 2 -->
          <div data-index="1" class="condition-card bg-surface-warm text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-none gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300 group hover:bg-primary/40 hover:-translate-y-1 hover:shadow-sm">
            <img src="<?php echo esc_url(tamin_img_url('sharayet/weight-scale.svg')); ?>" class="w-[39px] h-[39px] shrink-0 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6" alt="weight" />
            <span class="font-semibold text-[18px] leading-[1.3] w-full text-right mt-1 transition-colors"><?php esc_html_e('دارای وزن حداقل ۵۰ کیلوگرم', 'tamin-theme'); ?></span>
          </div>

          <!-- Card 3 -->
          <div data-index="2" class="condition-card bg-surface-warm text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-none gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300 group hover:bg-primary/40 hover:-translate-y-1 hover:shadow-sm">
            <img src="<?php echo esc_url(tamin_img_url('sharayet/monitor-waveform (1).svg')); ?>" class="w-[39px] h-[39px] shrink-0 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6" alt="health" />
            <span class="font-semibold text-[18px] leading-[1.3] w-full text-right mt-1 transition-colors"><?php esc_html_e('سلامت عمومی مناسب', 'tamin-theme'); ?></span>
          </div>

          <!-- Card 4 -->
          <div data-index="3" class="condition-card bg-surface-warm text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-none gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300 group hover:bg-primary/40 hover:-translate-y-1 hover:shadow-sm">
            <img src="<?php echo esc_url(tamin_img_url('sharayet/pills.svg')); ?>" class="w-[39px] h-[39px] shrink-0 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6" alt="pills" />
            <span class="font-bold text-[18px] leading-[1.3] w-full text-right mt-1 transition-colors"><?php esc_html_e('عدم مصرف داروی خاص', 'tamin-theme'); ?></span>
          </div>
        </div>
      </div>

      <!-- Lower Dynamic Heading & Explanation Paragraph -->
      <div class="flex flex-col items-start space-y-4 pt-10 lg:pt-14 w-full">
        <div class="flex items-center gap-2">
          <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse" id="condition-progress-dot"></span>
          <h4 id="condition-detail-title" class="text-neutral-900 font-black text-[22px] lg:text-[26px] transition-all duration-300 ease-out">
            <?php esc_html_e('دارای شرایط سنی ۱۸ تا ۶۰ سال', 'tamin-theme'); ?>
          </h4>
        </div>
        <p id="condition-detail-desc" class="text-neutral-700 text-[15px] lg:text-[18px] leading-8 lg:leading-[2.2] font-normal text-right lg:max-w-[548px] min-h-[190px] sm:min-h-[150px] lg:min-h-[175px] xl:min-h-[145px] transition-all duration-300 ease-out">
          <?php esc_html_e('بازه سنی قانونی برای اهدای پلاسما به منظور حفظ سلامت اهداکننده و کیفیت بیولوژیک پلاسما تعیین شده است. اولین مراجعه‌کنندگان می‌توانند تا سن ۶۰ سال اقدام کنند و اهداکنندگان مستمر با تایید پزشک امکان اهدای پلاسما تا سنین بالاتر را نیز دارند.', 'tamin-theme'); ?>
        </p>
      </div>

    </div>

    <!-- Left Side - Visual Canvas -->
    <div class="w-full lg:w-[45%] relative z-10 mb-8 lg:mb-0 animate-on-scroll opacity-0 translate-y-12 transition-all duration-1000 delay-300 ease-out order-1 lg:order-2 flex justify-end shrink-0">
      <div class="relative w-full lg:w-[542px] max-w-none shrink-0">
        <div class="w-full rounded-[2rem] lg:rounded-[2.5rem] overflow-hidden shadow-lg bg-neutral-200">
          <img src="<?php echo esc_url(tamin_img_url('sharayet/image 15.png')); ?>" alt="<?php esc_attr_e('زن اهداکننده پلاسما', 'tamin-theme'); ?>" class="w-full h-auto block" />
        </div>

        <div class="absolute -bottom-6 lg:-bottom-10 -right-6 lg:-right-[114px] z-20 w-48 md:w-56 lg:w-[228px] max-w-none filter drop-shadow-xl pointer-events-none">
          <img src="<?php echo esc_url(tamin_img_url('sharayet/Mask group.png')); ?>" alt="<?php esc_attr_e('لوله آزمایش پلاسما و گل', 'tamin-theme'); ?>" class="w-full h-auto" />
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Interactive Carousel Logic -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const conditionsDb = [
      {
        title: "دارای شرایط سنی ۱۸ تا ۶۰ سال",
        desc: "بازه سنی قانونی برای اهدای پلاسما به منظور حفظ سلامت اهداکننده و کیفیت بیولوژیک پلاسما تعیین شده است. اولین مراجعه‌کنندگان می‌توانند تا سن ۶۰ سال اقدام کنند و اهداکنندگان مستمر با تایید پزشک امکان اهدای پلاسما تا سنین بالاتر را نیز دارند."
      },
      {
        title: "دارای وزن حداقل ۵۰ کیلوگرم",
        desc: "وزن اهداکننده رابطه مستقیمی با حجم کل خون بدن دارد. به منظور پیشگیری از هرگونه ضعف یا افت فشار، حداقل وزن مجاز ۵۰ کیلوگرم تعیین شده است. حجم پلاسمای اهدایی نیز متناسب با وزن شما به طور کاملاً علمی محاسبه و دریافت می‌شود."
      },
      {
        title: "سلامت عمومی مناسب",
        desc: "قبل از هر بار اهدا، وضعیت هموگلوبین (جهت بررسی عدم کم‌خونی)، فشار خون، ضربان قلب و دمای بدن شما توسط پزشک بررسی می‌شود. برخورداری از سلامت عمومی و شادابی فیزیکی، ضامن یک اهدای ایمن و بدون عوارض است."
      },
      {
        title: "عدم مصرف داروی خاص",
        desc: "مصرف برخی داروها (مانند آنتی‌بیوتیک‌ها، داروهای هورمونی خاص یا رقیق‌کننده‌های خون) ممکن است بر کیفیت پلاسما یا فرآیند اهدا اثرگذار باشد. پزشک مرکز پیش از شروع، لیست داروهای مصرفی شما را پایش کرده و راهنمایی‌های لازم را ارائه می‌دهد."
      }
    ];

    const cards = document.querySelectorAll('.condition-card');
    const detailTitle = document.getElementById('condition-detail-title');
    const detailDesc = document.getElementById('condition-detail-desc');
    const container = document.getElementById('conditions-grid');

    if (!cards.length || !detailTitle || !detailDesc) return;

    let currentIndex = 0;
    let rotationInterval = null;

    function setActiveIndex(index) {
      currentIndex = index;
      const data = conditionsDb[index];

      cards.forEach((card, i) => {
        if (i === index) {
          card.className = "condition-card bg-primary text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-md gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300";
          const img = card.querySelector('img');
          if (img) img.classList.add('scale-110', 'rotate-6');
        } else {
          card.className = "condition-card bg-surface-warm text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-none gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300 group hover:bg-primary/40 hover:-translate-y-1 hover:shadow-sm";
          const img = card.querySelector('img');
          if (img) img.classList.remove('scale-110', 'rotate-6');
        }
      });

      detailTitle.style.opacity = '0';
      detailDesc.style.opacity = '0';

      setTimeout(() => {
        detailTitle.textContent = data.title;
        detailDesc.textContent = data.desc;
        detailTitle.style.opacity = '1';
        detailDesc.style.opacity = '1';
      }, 150);
    }

    function startAutoPlay() {
      if (rotationInterval) clearInterval(rotationInterval);
      rotationInterval = setInterval(() => {
        let nextIndex = (currentIndex + 1) % conditionsDb.length;
        setActiveIndex(nextIndex);
      }, 4000);
    }

    function stopAutoPlay() {
      if (rotationInterval) {
        clearInterval(rotationInterval);
        rotationInterval = null;
      }
    }

    cards.forEach((card, i) => {
      const triggerHandler = () => {
        stopAutoPlay();
        setActiveIndex(i);
      };
      card.addEventListener('mouseenter', triggerHandler);
      card.addEventListener('click', triggerHandler);
    });

    if (container) {
      container.addEventListener('mouseleave', startAutoPlay);
      container.addEventListener('mouseenter', stopAutoPlay);
    }

    startAutoPlay();
  });
</script>
