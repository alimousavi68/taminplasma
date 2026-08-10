<?php
/**
 * Front Page Conditions Section Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

// Check if Conditions Section is enabled
if (!get_theme_mod('tamin_conditions_enabled', true)) {
    return;
}

$conditions_json = get_theme_mod('tamin_conditions_list', '');
$conditions_list = json_decode($conditions_json, true);

if (empty($conditions_list) || !is_array($conditions_list)) {
    $conditions_list = [
        [
            'icon_type' => 'image',
            'icon_image' => tamin_img_url('sharayet/user-viewfinder.svg'),
            'short_title' => 'دارای شرایط سنی ۱۸ تا ۶۰ سال',
            'detail_title' => 'دارای شرایط سنی ۱۸ تا ۶۰ سال',
            'detail_desc' => 'حداقل سن برای اهدای پلاسما ۱۸ سال تمام و حداکثر سن ۶۰ سال است.',
        ],
        [
            'icon_type' => 'image',
            'icon_image' => tamin_img_url('sharayet/weight-scale.svg'),
            'short_title' => 'دارای وزن حداقل ۵۰ کیلوگرم',
            'detail_title' => 'دارای وزن حداقل ۵۰ کیلوگرم',
            'detail_desc' => 'برای اهدای خون و پلاسما، وزن اهداکننده باید حداقل ۵۰ کیلوگرم باشد.',
        ],
        [
            'icon_type' => 'image',
            'icon_image' => tamin_img_url('sharayet/monitor-waveform (1).svg'),
            'short_title' => 'سلامت عمومی مناسب',
            'detail_title' => 'سلامت عمومی مناسب',
            'detail_desc' => 'اهداکننده باید از سلامت جسمانی برخوردار بوده و به بیماری‌های عفونی مبتلا نباشد.',
        ],
        [
            'icon_type' => 'image',
            'icon_image' => tamin_img_url('sharayet/pills.svg'),
            'short_title' => 'عدم مصرف داروی خاص',
            'detail_title' => 'عدم مصرف داروی خاص',
            'detail_desc' => 'مصرف برخی داروها مانند آنتی‌بیوتیک‌ها ممکن است مانع از اهدای پلاسما شود.',
        ],
    ];
}

$first_condition = $conditions_list[0] ?? [];
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
          <h3 class="text-neutral-900 font-black text-xl lg:text-[22px]"><?php echo esc_html(get_theme_mod('tamin_conditions_title', 'شرایط اهداکننده:')); ?></h3>
        </div>

        <!-- Cards Grid -->
        <div id="conditions-grid" class="flex flex-row flex-wrap lg:flex-nowrap gap-3 lg:gap-[15px] w-full lg:w-[950px] max-w-none relative z-20">
          
          <?php foreach ($conditions_list as $index => $cond) : 
            $is_active = ($index === 0);
            $card_class = $is_active 
                ? 'condition-card bg-primary text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-md gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300'
                : 'condition-card bg-surface-warm text-neutral-900 rounded-[1.25rem] px-3 py-4 lg:px-4 flex flex-row items-start justify-between shadow-none gap-3 min-h-[94px] w-[calc(50%-6px)] lg:w-[217px] shrink-0 cursor-pointer transition-all duration-300 group hover:bg-primary/40 hover:-translate-y-1 hover:shadow-sm';
            $icon_type = $cond['icon_type'] ?? 'image';
          ?>
          <div data-index="<?php echo esc_attr($index); ?>" class="<?php echo esc_attr($card_class); ?>">
            <?php if ($icon_type === 'image' && !empty($cond['icon_image'])) : ?>
              <img src="<?php echo esc_url($cond['icon_image']); ?>" class="w-[39px] h-[39px] shrink-0 transition-transform duration-300 <?php echo !$is_active ? 'group-hover:scale-110 group-hover:rotate-6' : ''; ?>" alt="icon" />
            <?php elseif ($icon_type === 'class') : ?>
              <i class="<?php echo esc_attr($cond['icon_class'] ?? ''); ?> text-[39px] shrink-0 transition-transform duration-300 <?php echo !$is_active ? 'group-hover:scale-110 group-hover:rotate-6' : ''; ?>"></i>
            <?php elseif ($icon_type === 'svg' && !empty($cond['icon_svg'])) : ?>
              <div class="w-[39px] h-[39px] shrink-0 transition-transform duration-300 <?php echo !$is_active ? 'group-hover:scale-110 group-hover:rotate-6' : ''; ?> flex items-center justify-center">
                <?php echo $cond['icon_svg']; ?>
              </div>
            <?php endif; ?>
            <span class="font-semibold text-[18px] leading-[1.3] w-full text-right mt-1 <?php echo !$is_active ? 'transition-colors' : ''; ?>"><?php echo esc_html($cond['short_title'] ?? ''); ?></span>
          </div>
          <?php endforeach; ?>

        </div>
      </div>

      <!-- Lower Dynamic Heading & Explanation Paragraph -->
      <div class="flex flex-col items-start space-y-4 pt-10 lg:pt-14 w-full">
        <div class="flex items-center gap-2">
          <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse" id="condition-progress-dot"></span>
          <h4 id="condition-detail-title" class="text-neutral-900 font-black text-[22px] lg:text-[26px] transition-all duration-300 ease-out">
            <?php echo esc_html($first_condition['detail_title'] ?? ''); ?>
          </h4>
        </div>
        <p id="condition-detail-desc" class="text-neutral-700 text-[15px] lg:text-[18px] leading-8 lg:leading-[2.2] font-normal text-right lg:max-w-[548px] min-h-[190px] sm:min-h-[150px] lg:min-h-[175px] xl:min-h-[145px] transition-all duration-300 ease-out">
          <?php echo esc_html($first_condition['detail_desc'] ?? ''); ?>
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
    const conditionsDb = <?php echo wp_json_encode(array_map(function($cond) {
        return [
            'title' => $cond['detail_title'] ?? '',
            'desc'  => $cond['detail_desc'] ?? '',
        ];
    }, $conditions_list)); ?>;

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
