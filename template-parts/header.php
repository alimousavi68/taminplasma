
<!doctype html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
    <!-- Load compiled production styles -->
    <link rel="stylesheet" href="dist/assets/style.css" />
  <link rel="icon" type="image/svg+xml" href="public/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? $page_title : 'تامین پلاسما - Tamin Plasma'; ?></title>
  <?php if (isset($page_description)): ?>
    <meta name="description" content="<?php echo $page_description; ?>" />
  <?php endif; ?>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="antialiased">
  <!-- Top Bar -->
  <div class="w-full bg-primary text-neutral-900 hidden md:block" dir="rtl">
    <div class="container mx-auto px-4 lg:px-12 h-8 flex justify-between items-center text-[11px] font-light">

      <!-- Social Icons (Right Side) -->
      <div class="flex items-center gap-5 text-[14px]">
        <a href="#" class="hover:opacity-60 hover:-translate-y-[1px] active:translate-y-0 transition-all duration-300" aria-label="WhatsApp">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
        <span class="w-[1px] h-3 bg-[var(--color-text-main)]/20"></span>

        <a href="#" class="hover:opacity-60 hover:-translate-y-[1px] active:translate-y-0 transition-all duration-300" aria-label="Instagram">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <span class="w-[1px] h-3 bg-[var(--color-text-main)]/20"></span>

        <a href="#" class="hover:opacity-60 hover:-translate-y-[1px] active:translate-y-0 transition-all duration-300" aria-label="Telegram">
          <i class="fa-regular fa-paper-plane"></i>
        </a>
      </div>

      <!-- Contact Info (Left Side) -->
      <div class="flex items-center gap-6 tracking-wide font-sans">
        <a href="mailto:info@tpnojine.com" class="flex items-center gap-2 hover:opacity-60 hover:-translate-y-[1px] active:translate-y-0 transition-all duration-300">
          <span class="font-light">info@tpnojine.com</span>
          <i class="fa-regular fa-envelope text-[13px]"></i>
        </a>
        <span class="w-[1px] h-3 bg-[var(--color-text-main)]/20"></span>
        <a href="tel:+982149361318" class="flex items-center gap-2 hover:opacity-60 hover:-translate-y-[1px] active:translate-y-0 transition-all duration-300">
          <span dir="ltr" class="font-light">۰۲۱ ۴۹۳۶۱۳۱۸</span>
          <i class="fa-solid fa-phone text-[13px]"></i>
        </a>
      </div>

    </div>
  </div>

  <!-- Header Navigation -->
  <header class="w-full bg-[var(--color-bg-base)]/90 backdrop-blur-md sticky top-0 z-50 shadow-sm">
    <div class="container mx-auto px-4 lg:px-12 h-[88px] flex justify-between items-center">

      <!-- Right: Branding -->
      <a href="./" class="flex items-center gap-3 shrink-0" aria-label="صفحه اصلی تأمین پلاسما نوژین">
        <!-- Overlapping Circles Logo Placeholder -->
        <div class="relative w-8 h-5 flex items-center">
          <div class="absolute right-0 w-5 h-5 rounded-full bg-primary"></div>
          <div class="absolute right-3 w-5 h-5 rounded-full bg-[var(--color-black)]"></div>
        </div>
        <span class="font-semibold text-lg lg:text-xl text-[var(--color-text-main)] tracking-tight">تأمین پلاسما نوژین</span>
      </a>

      <!-- Center: Navigation Menu -->
      <nav aria-label="Main Navigation" class="hidden md:flex flex-1 justify-center px-4">
        <ul class="flex items-center gap-1 lg:gap-2 text-sm font-normal text-[var(--color-text-muted)]">
          <li>
            <a href="./"
              class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 bg-surface-warm rounded-xl text-neutral-900 font-medium">
              <img src="public/home-dash.svg" class="w-4 h-4" alt="" />
              <span>صفحه اصلی</span>
            </a>
          </li>
          <li>
            <a href="plasma-info.php"
              class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
              <img src="public/test-tube-alt.svg" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity"
                alt="" />
              <span>اهدای پلاسما</span>
            </a>
          </li>
          <li>
            <a href="units.php"
              class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
              <img src="public/monitor-waveform.svg" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity"
                alt="" />
              <span>واحدها</span>
            </a>
          </li>
          <li>
            <a href="blog.php"
              class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
              <img src="public/papers-text.svg" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity"
                alt="" />
              <span>اخبار و مقالات</span>
            </a>
          </li>
          <li>
            <a href="about.php"
              class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
              <img src="public/about-icon.svg" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity" alt="" />
              <span>درباره ما</span>
            </a>
          </li>
          <li>
            <a href="policy.php"
              class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
              <img src="public/quote (2).svg" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity"
                alt="" />
              <span>خط مشی</span>
            </a>
          </li>
        </ul>
      </nav>

      <!-- Left: Unique CTA Button & Mobile Menu Icon -->
      <div class="flex items-center gap-4 shrink-0">
        <!-- Interlocking Capsule CTA -->
        <a href="request.php"
          class="flex items-center group cursor-pointer transition-transform duration-300 hover:-translate-y-0.5"
          aria-label="درخواست اهدا">
          <!-- The Leading Badge (Right side in RTL) -->
          <div
            class="w-10 h-10 rounded-full bg-white flex items-center justify-center relative z-20 shadow-md border-2 border-[var(--color-primary)] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_0_15px_var(--color-primary)]">
            <img src="public/test-tube.svg" alt=""
              class="w-4 h-4 brightness-0 transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110" />
          </div>
          <!-- The Main Body (Left side in RTL) -->
          <div
            class="bg-primary text-[var(--color-text-main)] font-normal px-5 py-2 text-sm rounded-l-full -mr-4 z-10 pr-6 shadow-sm transition-all duration-500 group-hover:bg-primary">
            درخواست اهدا
          </div>
        </a>

        <!-- Mobile Menu Hamburger -->
        <button id="mobile-menu-trigger" class="md:hidden text-[var(--color-text-main)] hover:text-primary transition-colors cursor-pointer" aria-label="باز کردن منو">
          <i class="fa-solid fa-bars text-xl"></i>
        </button>
      </div>

    </div>
  </header>

  <!-- Mobile Menu Drawer (Overlay & Panel) -->
  <div id="mobile-menu-drawer" class="fixed inset-0 z-50 hidden opacity-0 transition-opacity duration-300">
    <!-- Dark Glassmorphic Backdrop -->
    <div id="mobile-menu-overlay" class="absolute inset-0 bg-neutral-950/40 backdrop-blur-sm"></div>
    
    <!-- Drawer Panel (Slides from the right) -->
    <div id="mobile-menu-panel" class="absolute top-0 right-0 h-full w-full max-w-[300px] bg-[var(--color-bg-base)] shadow-2xl border-l border-[var(--color-border-subtle)] flex flex-col justify-between p-6 transform translate-x-full transition-transform duration-300 ease-out z-10" dir="rtl">
      <div>
        <!-- Top Row: Logo & Close Button -->
        <div class="flex items-center justify-between pb-6 border-b border-[var(--color-border-subtle)]">
          <a href="./" class="flex items-center gap-2">
            <div class="relative w-7 h-4 flex items-center">
              <div class="absolute right-0 w-4 h-4 rounded-full bg-primary"></div>
              <div class="absolute right-2.5 w-4 h-4 rounded-full bg-[var(--color-black)]"></div>
            </div>
            <span class="font-bold text-base text-[var(--color-text-main)]">تأمین پلاسما نوژین</span>
          </a>
          <button id="mobile-menu-close" class="w-9 h-9 rounded-xl hover:bg-surface-warm flex items-center justify-center text-[var(--color-text-main)] hover:text-primary transition-all cursor-pointer" aria-label="بستن منو">
            <i class="fa-solid fa-xmark text-lg"></i>
          </button>
        </div>
        
        <!-- Navigation Links Stack -->
        <nav class="mt-8">
          <ul class="space-y-3">
            <li>
              <a href="./" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="public/home-dash.svg" class="w-4 h-4" alt="" />
                <span>صفحه اصلی</span>
              </a>
            </li>
            <li>
              <a href="plasma-info.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="public/test-tube-alt.svg" class="w-4 h-4 opacity-75" alt="" />
                <span>اهدای پلاسما</span>
              </a>
            </li>
            <li>
              <a href="units.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="public/monitor-waveform.svg" class="w-4 h-4 opacity-75" alt="" />
                <span>واحدها</span>
              </a>
            </li>
            <li>
              <a href="blog.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="public/papers-text.svg" class="w-4 h-4 opacity-75" alt="" />
                <span>اخبار و مقالات</span>
              </a>
            </li>
            <li>
              <a href="about.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="public/about-icon.svg" class="w-4 h-4 opacity-75" alt="" />
                <span>درباره ما</span>
              </a>
            </li>
            <li>
              <a href="policy.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="public/quote (2).svg" class="w-4 h-4 opacity-75" alt="" />
                <span>خط مشی</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Bottom Part: CTA & Quick Contact -->
      <div class="space-y-6 pt-6 border-t border-[var(--color-border-subtle)]">
        <!-- CTA Request Button -->
        <a href="request.php" class="w-full bg-primary hover:bg-primary/95 text-[var(--color-text-main)] font-bold py-3.5 rounded-xl shadow-md flex items-center justify-center gap-2 transition-transform hover:-translate-y-0.5 active:translate-y-0 text-sm">
          <img src="public/test-tube.svg" alt="" class="w-4 h-4 brightness-0" />
          <span>درخواست اهدا</span>
        </a>
        
        <!-- Social Icons Row -->
        <div class="flex items-center justify-center gap-4 text-sm text-[var(--color-text-muted)]">
          <a href="#" class="hover:text-primary transition-colors" aria-label="واتساپ"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#" class="hover:text-primary transition-colors" aria-label="اینستاگرام"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="hover:text-primary transition-colors" aria-label="تلگرام"><i class="fa-regular fa-paper-plane"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Menu JS Toggle Controller -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const trigger = document.getElementById('mobile-menu-trigger');
      const drawer = document.getElementById('mobile-menu-drawer');
      const overlay = document.getElementById('mobile-menu-overlay');
      const panel = document.getElementById('mobile-menu-panel');
      const closeBtn = document.getElementById('mobile-menu-close');

      if (!trigger || !drawer || !panel) return;

      function openMenu() {
        drawer.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        setTimeout(() => {
          drawer.classList.add('opacity-100');
          panel.classList.remove('translate-x-full');
        }, 10);
      }

      function closeMenu() {
        panel.classList.add('translate-x-full');
        drawer.classList.remove('opacity-100');
        document.body.classList.remove('overflow-hidden');
        setTimeout(() => {
          drawer.classList.add('hidden');
        }, 300);
      }

      trigger.addEventListener('click', openMenu);
      closeBtn.addEventListener('click', closeMenu);
      overlay.addEventListener('click', closeMenu);

      // Close on Esc key
      window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !drawer.classList.contains('hidden')) {
          closeMenu();
        }
      });
    });
  </script>

