<?php
/**
 * Front Page Journey Timeline Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

// Check if Journey Section is enabled
if (!get_theme_mod('tamin_journey_enabled', true)) {
    return;
}

$journey_json = get_theme_mod('tamin_journey_steps', '');
$journey_steps = json_decode($journey_json, true);

if (empty($journey_steps) || !is_array($journey_steps)) {
    $journey_steps = [
        ['title' => 'خوش‌آمدگویی و پذیرش', 'image' => tamin_img_url('path/step-1.png')],
        ['title' => 'کنترل علائم حیاتی', 'image' => tamin_img_url('path/step-2.png')],
        ['title' => 'اهدای پلاسما', 'image' => tamin_img_url('path/step-3.png')],
        ['title' => 'تعیین وقت برای اهدای بعدی (دلخواه)', 'image' => tamin_img_url('path/step-4.png')],
        ['title' => 'پذیرایی و بررسی سلامت شما توسط پزشک', 'image' => tamin_img_url('path/step-5.png')],
        ['title' => 'پرداخت هزینه ایاب ذهاب', 'image' => tamin_img_url('path/step-6.png')],
    ];
}

$title1 = get_theme_mod('tamin_journey_title1', 'مسیر');
$title2 = get_theme_mod('tamin_journey_title2', 'اهدای پلاسما:');

// Calculate width dynamically
$desktop_container_width = max(600, count($journey_steps) * 133);
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
            <img src="<?php echo esc_url(tamin_img_url('path/route.png')); ?>" alt="<?php echo esc_attr($title1); ?>" class="w-8 h-8 object-contain" style="filter: brightness(0);" />
          </div>
          <div class="flex flex-col text-right">
            <span class="text-neutral-900 font-extrabold text-2xl leading-tight"><?php echo esc_html($title1); ?></span>
            <span class="text-primary font-extrabold text-2xl leading-tight"><?php echo esc_html($title2); ?></span>
          </div>
        </div>
      </div>

      <!-- Dynamic Steps Container -->
      <div class="flex flex-row justify-center items-start gap-8" style="width: <?php echo $desktop_container_width; ?>px;">

        <?php foreach ($journey_steps as $index => $step) : 
            $num = str_pad(tamin_en_to_fa($index + 1), 2, '۰', STR_PAD_LEFT);
            $is_even = ($index % 2 !== 0); // 0-indexed: index 1 is step 2 (even)
            
            $img_url = !empty($step['image']) ? $step['image'] : tamin_img_url('path/step-1.png');
            $title = !empty($step['title']) ? $step['title'] : 'مرحله ' . ($index + 1);
        ?>
        <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
          
          <?php if (!$is_even) : ?>
          <!-- ODD STEP (e.g. 1, 3, 5) -->
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url($img_url); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php echo esc_attr($title); ?>" />
            <?php if ($index < count($journey_steps) - 1) : ?>
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; bottom: -44px;" alt="" />
            <?php endif; ?>
          </div>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative mt-[40px] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            <?php echo esc_html($num); ?>
          </div>
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php echo esc_html($title); ?></p>
          
          <?php else : ?>
          <!-- EVEN STEP (e.g. 2, 4, 6) -->
          <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php echo esc_html($title); ?></p>
          <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
            <?php echo esc_html($num); ?>
          </div>
          <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative mt-[40px] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
            <img src="<?php echo esc_url($img_url); ?>" class="w-full h-full object-cover rounded-[1.5rem]" alt="<?php echo esc_attr($title); ?>" />
            <?php if ($index < count($journey_steps) - 1) : ?>
            <img src="<?php echo esc_url(tamin_img_url('path/line.svg')); ?>" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; top: -44px; transform: scaleY(-1);" alt="" />
            <?php endif; ?>
          </div>
          <?php endif; ?>

        </div>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- MOBILE TIMELINE (Hidden on Desktop) -->
    <div class="flex flex-col md:hidden w-full relative z-10 gap-10">
      <div class="bg-white rounded-2xl p-4 pl-6 pr-12 shadow-sm flex flex-col justify-center w-[90%] z-20 shrink-0 relative h-[84px] animate-fade-in-up">
        <div class="absolute -right-6 top-1/2 -translate-y-1/2 bg-primary w-14 h-14 rounded-full flex items-center justify-center shadow-md border-4 border-[var(--color-bg-warm)]">
          <img src="<?php echo esc_url(tamin_img_url('path/route.png')); ?>" alt="<?php echo esc_attr($title1); ?>" class="w-6 h-6 object-contain" style="filter: brightness(0);" />
        </div>
        <h3 class="text-neutral-900 font-extrabold text-lg text-right leading-tight"><?php echo esc_html($title1); ?></h3>
        <h3 class="text-[var(--color-secondary)] font-extrabold text-lg text-right leading-tight mt-1"><?php echo esc_html($title2); ?></h3>
      </div>

      <div class="relative w-full pr-4 mt-6">
        <div class="absolute top-8 bottom-16 right-[34px] border-r-2 border-dashed border-[var(--color-border-dashed)] z-0 opacity-70"></div>

        <?php foreach ($journey_steps as $index => $step) : 
            $num = str_pad(tamin_en_to_fa($index + 1), 2, '۰', STR_PAD_LEFT);
            $img_url = !empty($step['image']) ? $step['image'] : tamin_img_url('path/step-1.png');
            $title = !empty($step['title']) ? $step['title'] : 'مرحله ' . ($index + 1);
            $mb_class = ($index < count($journey_steps) - 1) ? 'mb-10' : '';
        ?>
        <!-- Mobile Step <?php echo esc_attr($num); ?> -->
        <div class="flex items-center gap-6 relative z-10 <?php echo esc_attr($mb_class); ?> group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
          <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg"><?php echo esc_html($num); ?></div>
          <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
            <img src="<?php echo esc_url($img_url); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr($title); ?>" />
          </div>
          <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]"><?php echo esc_html($title); ?></p>
        </div>
        <?php endforeach; ?>

      </div>
    </div>

  </div>
</section>
