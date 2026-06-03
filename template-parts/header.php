
<!doctype html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
    <!-- Load compiled production styles -->
    <link rel="stylesheet" href="dist/assets/style.css" />
  <link rel="icon" type="image/svg+xml" href="public/favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>تامین پلاسما - Tamin Plasma</title>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="antialiased">
  <!-- Top Bar -->
  <div class="w-full bg-primary text-neutral-900 hidden md:block" dir="rtl">
    <div class="container mx-auto px-4 lg:px-12 h-8 flex justify-between items-center text-[11px] font-light">

      <!-- Social Icons (Right Side) -->
      <div class="flex items-center gap-5 text-[14px]">
        <a href="blog.php" class="hover:opacity-75 transition-opacity" aria-label="WhatsApp">
          <i class="fa-brands fa-whatsapp"></i>
        </a>
        <span class="w-[1px] h-3 bg-[var(--color-text-main)]/20"></span>

        <a href="#" class="hover:opacity-75 transition-opacity" aria-label="Instagram">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <span class="w-[1px] h-3 bg-[var(--color-text-main)]/20"></span>

        <a href="#" class="hover:opacity-75 transition-opacity" aria-label="Telegram">
          <i class="fa-regular fa-paper-plane"></i>
        </a>
      </div>

      <!-- Contact Info (Left Side) -->
      <div class="flex items-center gap-6 tracking-wide font-sans">
        <div class="flex items-center gap-2">
          <span class="font-light">info@tpnojine.com</span>
          <i class="fa-regular fa-envelope text-[13px]"></i>
        </div>
        <span class="w-[1px] h-3 bg-[var(--color-text-main)]/20"></span>
        <div class="flex items-center gap-2">
          <span dir="ltr" class="font-light">۰۲۱ ۴۹۳۶۱۳۱۸</span>
          <i class="fa-solid fa-phone text-[13px]"></i>
        </div>
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
            class="w-10 h-10 rounded-full bg-[var(--color-black)] flex items-center justify-center relative z-20 shadow-md border-2 border-[var(--color-black)] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_0_15px_var(--color-primary)]">
            <img src="public/test-tube.svg" alt=""
              class="w-4 h-4 invert brightness-0 transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110" />
          </div>
          <!-- The Main Body (Left side in RTL) -->
          <div
            class="bg-primary text-[var(--color-text-main)] font-normal px-5 py-2 text-sm rounded-l-full -mr-4 z-10 pr-6 shadow-sm transition-all duration-500 group-hover:bg-primary">
            درخواست اهدا
          </div>
        </a>

        <!-- Mobile Menu Hamburger -->
        <button class="md:hidden text-[var(--color-text-main)] hover:text-primary transition-colors" aria-label="باز کردن منو">
          <i class="fa-solid fa-bars text-xl"></i>
        </button>
      </div>

    </div>
  </header>
</body>

