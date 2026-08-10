<?php
/**
 * Front Page Hero Section Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

// Check if Hero Section is enabled
if (!get_theme_mod('tamin_hero_enabled', true)) {
    return;
}

$hero_slides_json = get_theme_mod('tamin_hero_slides', '');
$hero_slides = json_decode($hero_slides_json, true);

if (empty($hero_slides) || !is_array($hero_slides)) {
    $hero_slides = [
        [
            'tab_label'  => 'زندگی دوباره',
            'icon_type'  => 'class',
            'icon_class' => 'fa-solid fa-heart-pulse',
            'title'      => 'اهدای پلاسما، امید به زندگی دوباره',
            'slogan'     => 'هر اهدا، جرقه‌ای برای نجات یک انسان',
            'desc'       => 'بسیاری از بیماران مبتلا به نقص ایمنی و بیماری‌های خاص، برای بقا به داروهای حیاتی مشتق از پلاسما نیازمندند. حضور پرمهر شما، لبخند دوباره را به خانواده‌هایشان هدیه می‌دهد. همین امروز تصمیم بگیرید.',
            'img'        => tamin_img_url('hero_slide.webp'),
        ]
    ];
}

$first_slide = $hero_slides[0];
?>
<!-- Hero Section -->
<section class="relative w-full min-h-[500px] lg:h-[600px] bg-[var(--color-bg-base)] overflow-hidden">
  <!-- Background Image & Overlays -->
  <div class="absolute inset-0 w-full h-full transition-opacity duration-500" id="hero-bg-container">
    <img id="hero-bg" src="<?php echo esc_url($first_slide['img'] ?? ''); ?>" alt="<?php esc_attr_e('پلاسما', 'tamin-theme'); ?>" class="w-full h-full object-cover object-left lg:object-center transition-transform duration-[2000ms] ease-out scale-100" />

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-transparent via-[var(--color-bg-base)]/70 to-[var(--color-bg-base)] lg:to-[var(--color-bg-base)]/35"></div>

    <!-- Pattern Overlay (Union.svg) -->
    <div class="absolute inset-0 opacity-50 bg-right bg-cover bg-no-repeat lg:bg-auto lg:bg-right-top mix-blend-multiply" style="background-image: url('<?php echo esc_url(tamin_img_url('Union.svg')); ?>');"></div>
  </div>

  <!-- Content Block -->
  <div class="grid grid-cols-1 lg:grid-cols-12 h-full items-center container mx-auto px-4 lg:px-12 relative z-10 pt-16 pb-24 lg:py-0">
    <div class="lg:col-span-6 space-y-6 lg:space-y-8 transition-opacity duration-500 opacity-100" id="hero-content">

      <!-- Headers -->
      <div class="space-y-4">
        <!-- Badge -->
        <div class="inline-block border border-neutral-300 rounded-full px-4 py-1.5 bg-white/40 backdrop-blur-sm">
          <span class="text-[11px] lg:text-xs font-sans tracking-[0.15em] text-neutral-800 font-normal uppercase">Tamin Plasma Nojin</span>
        </div>

        <!-- Main Title -->
        <h1 id="hero-title" class="text-[var(--color-secondary)] font-black text-3xl lg:text-4xl xl:text-[2.75rem] leading-tight drop-shadow-sm">
          <?php echo esc_html($first_slide['title'] ?? ''); ?>
        </h1>

        <!-- Slogan -->
        <p id="hero-slogan" class="text-neutral-900 font-semibold text-lg lg:text-xl">
          <?php echo esc_html($first_slide['slogan'] ?? ''); ?>
        </p>
      </div>

      <!-- Text Container -->
      <div class="max-w-[520px] space-y-6">
        <p id="hero-desc" class="text-neutral-700 text-sm lg:text-base leading-relaxed text-justify h-[72px]">
          <?php echo esc_html($first_slide['desc'] ?? ''); ?>
        </p>
      </div>

    </div>
  </div>

  <!-- Floating Bottom Tab Navigation -->
  <div class="absolute bottom-0 right-0 z-20 w-full lg:w-auto overflow-x-auto custom-scrollbar" id="hero-tabs">
    <div class="bg-[var(--color-bg-base)]/95 backdrop-blur-md rounded-t-3xl lg:rounded-t-none lg:rounded-tl-[3rem] px-4 lg:px-8 py-3 lg:py-5 flex items-center justify-start space-x-3 lg:space-x-4 space-x-reverse shadow-[0_-4px_20px_rgba(0,0,0,0.02)] min-w-max">

      <?php foreach ($hero_slides as $index => $slide) : 
        $is_active = ($index === 0);
        $tab_class = $is_active 
            ? 'hero-tab bg-primary text-neutral-900 font-medium rounded-full px-5 py-2.5 flex items-center gap-2.5 lg:gap-4 lg:w-48 shadow-lg transition-all duration-300 hover:scale-105' 
            : 'hero-tab bg-surface-warm text-neutral-900 rounded-full pr-1.5 pl-5 lg:pl-10 py-1.5 lg:py-2 flex items-center gap-2.5 lg:gap-4 lg:w-48 hover:bg-primary hover:text-black transition-all duration-300';
        $icon_type = $slide['icon_type'] ?? 'class';
      ?>
      <button data-index="<?php echo esc_attr($index); ?>" class="<?php echo esc_attr($tab_class); ?>">
        <div class="tab-icon bg-white <?php echo $is_active ? 'text-neutral-900' : ''; ?> w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-colors duration-300">
          <?php if ($icon_type === 'class') : ?>
            <i class="<?php echo esc_attr($slide['icon_class'] ?? 'fa-solid fa-heart-pulse'); ?> <?php echo !$is_active ? 'text-neutral-800' : ''; ?> text-sm lg:text-base"></i>
          <?php elseif ($icon_type === 'image' && !empty($slide['icon_image'])) : ?>
            <img src="<?php echo esc_url($slide['icon_image']); ?>" alt="icon" class="w-4 h-4 lg:w-5 lg:h-5 object-contain" />
          <?php elseif ($icon_type === 'svg' && !empty($slide['icon_svg'])) : ?>
            <div class="w-4 h-4 lg:w-5 lg:h-5 flex items-center justify-center"><?php echo $slide['icon_svg']; // Already escaped in customizer if needed, but SVG is HTML ?></div>
          <?php endif; ?>
        </div>
        <span class="text-sm lg:text-[16px] font-normal whitespace-nowrap"><?php echo esc_html($slide['tab_label'] ?? ''); ?></span>
      </button>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const slides = <?php echo wp_json_encode(array_map(function($slide) {
        return [
            'title' => $slide['title'] ?? '',
            'slogan' => $slide['slogan'] ?? '',
            'desc' => $slide['desc'] ?? '',
            'img' => esc_url($slide['img'] ?? ''),
            'icon_type' => $slide['icon_type'] ?? 'class',
        ];
    }, $hero_slides)); ?>;

    const tabs = document.querySelectorAll('.hero-tab');
    const titleEl = document.getElementById('hero-title');
    const sloganEl = document.getElementById('hero-slogan');
    const descEl = document.getElementById('hero-desc');
    const contentEl = document.getElementById('hero-content');
    const bgEl = document.getElementById('hero-bg');
    
    if (!tabs.length || !titleEl || !bgEl) return;
    let currentIndex = 0;
    let autoplayInterval;

    const setActiveTab = (index) => {
      tabs.forEach((tab, i) => {
        const icon = tab.querySelector('.tab-icon');
        if (i === index) {
          tab.className = 'hero-tab bg-primary text-neutral-900 font-medium rounded-full px-5 py-2.5 flex items-center gap-2.5 lg:gap-4 lg:w-48 shadow-lg transition-all duration-300 hover:scale-105';
          if (icon) {
            icon.className = 'tab-icon bg-white text-neutral-900 shadow-sm w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 transition-colors duration-300';
            const iconI = icon.querySelector('i');
            if (iconI) iconI.classList.remove('text-neutral-800');
          }
        } else {
          tab.className = 'hero-tab bg-surface-warm text-neutral-900 rounded-full pr-1.5 pl-5 lg:pl-10 py-1.5 lg:py-2 flex items-center gap-2.5 lg:gap-4 lg:w-48 hover:bg-primary hover:text-black transition-all duration-300';
          if (icon) {
            icon.className = 'tab-icon bg-white w-8 h-8 lg:w-10 lg:h-10 rounded-full flex items-center justify-center shrink-0 shadow-sm transition-colors duration-300';
            const iconI = icon.querySelector('i');
            if (iconI) iconI.classList.add('text-neutral-800');
          }
        }
      });
    };

    const changeSlide = (index) => {
      if (index === currentIndex) return;
      if (contentEl) {
        contentEl.classList.remove('opacity-100');
        contentEl.classList.add('opacity-0');
      }
      bgEl.classList.remove('scale-105');
      bgEl.classList.add('scale-100');

      setTimeout(() => {
        if (titleEl) titleEl.textContent = slides[index].title;
        if (sloganEl) sloganEl.textContent = slides[index].slogan;
        if (descEl) descEl.textContent = slides[index].desc;
        if (bgEl.getAttribute('src') !== slides[index].img) {
          bgEl.setAttribute('src', slides[index].img);
        }
        if (contentEl) {
          contentEl.classList.remove('opacity-0');
          contentEl.classList.add('opacity-100');
        }
        bgEl.classList.remove('scale-100');
        bgEl.classList.add('scale-105');
        currentIndex = index;
        setActiveTab(index);
      }, 300);
    };

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
      autoplayInterval = setInterval(nextSlide, 5000);
    };

    const resetAutoplay = () => {
      clearInterval(autoplayInterval);
      startAutoplay();
    };

    setActiveTab(0);
    startAutoplay();
    setTimeout(() => {
      bgEl.classList.remove('scale-100');
      bgEl.classList.add('scale-105');
    }, 100);
  });
</script>
