<?php
/**
 * Dynamic WordPress Header Component
 *
 * @package TaminTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased'); ?>>
  <?php wp_body_open(); ?>

  <!-- Top Bar -->
  <div class="w-full bg-primary text-neutral-900 hidden md:block" dir="rtl">
    <div class="container mx-auto px-4 lg:px-12 h-8 flex justify-between items-center text-[11px] font-medium">


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
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 shrink-0" aria-label="<?php esc_attr_e('صفحه اصلی تأمین پلاسما نوژین', 'tamin-theme'); ?>">
        <!-- Overlapping Circles Logo -->
        <div class="relative w-8 h-5 flex items-center">
          <div class="absolute right-0 w-5 h-5 rounded-full bg-primary"></div>
          <div class="absolute right-3 w-5 h-5 rounded-full bg-[var(--color-black)]"></div>
        </div>
        <span class="font-semibold text-lg lg:text-xl text-[var(--color-text-main)] tracking-tight"><?php bloginfo('name'); ?></span>
      </a>

      <!-- Center: Navigation Menu -->
      <nav aria-label="<?php esc_attr_e('منوی اصلی', 'tamin-theme'); ?>" class="hidden md:flex flex-1 justify-center px-4">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex items-center gap-1 lg:gap-2 text-sm font-normal text-[var(--color-text-muted)]',
                'fallback_cb'    => false,
            ]);
        } else {
            ?>
            <ul class="flex items-center gap-1 lg:gap-2 text-sm font-normal text-[var(--color-text-muted)]">
              <li>
                <a href="<?php echo esc_url(home_url('/')); ?>"
                  class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 <?php echo is_front_page() ? 'bg-surface-warm rounded-xl text-neutral-900 font-medium' : 'hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900'; ?>">
                  <img src="<?php echo esc_url(tamin_img_url('home-dash.svg')); ?>" class="w-4 h-4" alt="" />
                  <span><?php esc_html_e('صفحه اصلی', 'tamin-theme'); ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo tamin_get_nav_url('tamin_plasma_info_url', '/plasma-info'); ?>"
                  class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
                  <img src="<?php echo esc_url(tamin_img_url('test-tube-alt.svg')); ?>" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity" alt="" />
                  <span><?php esc_html_e('اهدای پلاسما', 'tamin-theme'); ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo tamin_get_nav_url('tamin_units_url', '/units'); ?>"
                  class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
                  <img src="<?php echo esc_url(tamin_img_url('monitor-waveform.svg')); ?>" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity" alt="" />
                  <span><?php esc_html_e('واحدها', 'tamin-theme'); ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo tamin_get_nav_url('tamin_blog_url', '/blog'); ?>"
                  class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
                  <img src="<?php echo esc_url(tamin_img_url('papers-text.svg')); ?>" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity" alt="" />
                  <span><?php esc_html_e('اخبار و مقالات', 'tamin-theme'); ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo tamin_get_nav_url('tamin_about_url', '/about'); ?>"
                  class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
                  <img src="<?php echo esc_url(tamin_img_url('about-icon.svg')); ?>" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity" alt="" />
                  <span><?php esc_html_e('درباره ما', 'tamin-theme'); ?></span>
                </a>
              </li>
              <li>
                <a href="<?php echo tamin_get_nav_url('tamin_policy_url', '/policy'); ?>"
                  class="flex items-center gap-1.5 px-3 py-2 transition-all duration-300 hover:bg-surface-warm rounded-xl text-[var(--color-text-main)] hover:text-neutral-900 group">
                  <img src="<?php echo esc_url(tamin_img_url('quote (2).svg')); ?>" class="w-4 h-4 opacity-75 group-hover:opacity-100 transition-opacity" alt="" />
                  <span><?php esc_html_e('خط مشی', 'tamin-theme'); ?></span>
                </a>
              </li>
            </ul>
            <?php
        }
        ?>
      </nav>

      <!-- Left: Unique CTA Button & Mobile Menu Icon -->
      <div class="flex items-center gap-4 shrink-0">
        <!-- Interlocking Capsule CTA -->
        <a href="<?php echo tamin_get_nav_url('tamin_request_url', '/request'); ?>"
          class="flex items-center group cursor-pointer transition-transform duration-300 hover:-translate-y-0.5"
          aria-label="<?php esc_attr_e('درخواست اهدا', 'tamin-theme'); ?>">
          <!-- The Leading Badge (Right side in RTL) -->
          <div
            class="w-10 h-10 rounded-full bg-white flex items-center justify-center relative z-20 shadow-md border-2 border-[var(--color-primary)] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_0_15px_var(--color-primary)]">
            <img src="<?php echo esc_url(tamin_img_url('test-tube.svg')); ?>" alt=""
              class="w-4 h-4 brightness-0 transition-transform duration-500 group-hover:rotate-12 group-hover:scale-110" />
          </div>
          <!-- The Main Body (Left side in RTL) -->
          <div
            class="bg-primary text-[var(--color-text-main)] font-normal px-5 py-2 text-sm rounded-l-full -mr-4 z-10 pr-6 shadow-sm transition-all duration-500 group-hover:bg-primary">
            <?php echo esc_html(get_theme_mod('tamin_cta_button_text', __('درخواست اهدا', 'tamin-theme'))); ?>
          </div>
        </a>

        <!-- Mobile Menu Hamburger -->
        <button id="mobile-menu-trigger" class="md:hidden text-[var(--color-text-main)] hover:text-primary transition-colors cursor-pointer" aria-label="<?php esc_attr_e('باز کردن منو', 'tamin-theme'); ?>">
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
          <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
            <div class="relative w-7 h-4 flex items-center">
              <div class="absolute right-0 w-4 h-4 rounded-full bg-primary"></div>
              <div class="absolute right-2.5 w-4 h-4 rounded-full bg-[var(--color-black)]"></div>
            </div>
            <span class="font-bold text-base text-[var(--color-text-main)]"><?php bloginfo('name'); ?></span>
          </a>
          <button id="mobile-menu-close" class="w-9 h-9 rounded-xl hover:bg-surface-warm flex items-center justify-center text-[var(--color-text-main)] hover:text-primary transition-all cursor-pointer" aria-label="<?php esc_attr_e('بستن منو', 'tamin-theme'); ?>">
            <i class="fa-solid fa-xmark text-lg"></i>
          </button>
        </div>
        
        <!-- Navigation Links Stack -->
        <nav class="mt-8">
          <ul class="space-y-3">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="<?php echo esc_url(tamin_img_url('home-dash.svg')); ?>" class="w-4 h-4" alt="" />
                <span><?php esc_html_e('صفحه اصلی', 'tamin-theme'); ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo tamin_get_nav_url('tamin_plasma_info_url', '/plasma-info'); ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="<?php echo esc_url(tamin_img_url('test-tube-alt.svg')); ?>" class="w-4 h-4 opacity-75" alt="" />
                <span><?php esc_html_e('اهدای پلاسما', 'tamin-theme'); ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo tamin_get_nav_url('tamin_units_url', '/units'); ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="<?php echo esc_url(tamin_img_url('monitor-waveform.svg')); ?>" class="w-4 h-4 opacity-75" alt="" />
                <span><?php esc_html_e('واحدها', 'tamin-theme'); ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo tamin_get_nav_url('tamin_blog_url', '/blog'); ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="<?php echo esc_url(tamin_img_url('papers-text.svg')); ?>" class="w-4 h-4 opacity-75" alt="" />
                <span><?php esc_html_e('اخبار و مقالات', 'tamin-theme'); ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo tamin_get_nav_url('tamin_about_url', '/about'); ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="<?php echo esc_url(tamin_img_url('about-icon.svg')); ?>" class="w-4 h-4 opacity-75" alt="" />
                <span><?php esc_html_e('درباره ما', 'tamin-theme'); ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo tamin_get_nav_url('tamin_policy_url', '/policy'); ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-surface-warm text-sm font-semibold text-[var(--color-text-main)] transition-colors">
                <img src="<?php echo esc_url(tamin_img_url('quote (2).svg')); ?>" class="w-4 h-4 opacity-75" alt="" />
                <span><?php esc_html_e('خط مشی', 'tamin-theme'); ?></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Bottom Part: CTA & Quick Contact -->
      <div class="space-y-6 pt-6 border-t border-[var(--color-border-subtle)]">
        <!-- CTA Request Button -->
        <a href="<?php echo tamin_get_nav_url('tamin_request_url', '/request'); ?>" class="w-full bg-primary hover:bg-primary/95 text-[var(--color-text-main)] font-bold py-3.5 rounded-xl shadow-md flex items-center justify-center gap-2 transition-transform hover:-translate-y-0.5 active:translate-y-0 text-sm">
          <img src="<?php echo esc_url(tamin_img_url('test-tube.svg')); ?>" alt="" class="w-4 h-4 brightness-0" />
          <span><?php echo esc_html(get_theme_mod('tamin_cta_button_text', __('درخواست اهدا', 'tamin-theme'))); ?></span>
        </a>
        
        <!-- Social Icons Row -->
        <div class="flex items-center justify-center gap-4 text-sm text-[var(--color-text-muted)]">
          <a href="<?php echo esc_url(get_theme_mod('tamin_social_instagram', '#')); ?>" class="hover:text-primary transition-colors" aria-label="اینستاگرام"><i class="fa-brands fa-instagram"></i></a>
          <a href="<?php echo esc_url(get_theme_mod('tamin_social_telegram', '#')); ?>" class="hover:text-primary transition-colors" aria-label="تلگرام"><i class="fa-brands fa-telegram"></i></a>
          <a href="<?php echo esc_url(get_theme_mod('tamin_social_linkedin', '#')); ?>" class="hover:text-primary transition-colors" aria-label="لینکدین"><i class="fa-brands fa-linkedin-in"></i></a>
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
      if (closeBtn) closeBtn.addEventListener('click', closeMenu);
      if (overlay) overlay.addEventListener('click', closeMenu);

      // Close on Esc key
      window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !drawer.classList.contains('hidden')) {
          closeMenu();
        }
      });
    });
  </script>
