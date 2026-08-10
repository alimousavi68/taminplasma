<?php
/**
 * Front Page Blog Section Component
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

// Query dynamic WordPress blog posts
$blog_query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
]);
?>
<!-- Blog Section -->
<section id="blog" class="w-full py-20 lg:py-24 bg-white" dir="rtl">
  <div class="container mx-auto px-4 lg:max-w-[1170px] relative">
    
    <!-- Section Header Layer -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
      <!-- Right Side: Section title group -->
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-xl bg-primary flex items-center justify-center shadow-sm shrink-0">
          <img src="<?php echo esc_url(tamin_img_url('papers-text.svg')); ?>" class="w-6 h-6 lg:w-7 lg:h-7" alt="News Icon" />
        </div>
        <h2 class="text-neutral-900 font-black text-2xl lg:text-3xl"><?php esc_html_e('اخبار و مقالات', 'tamin-theme'); ?></h2>
      </div>

      <!-- Left Side: Navigation & View All link -->
      <div class="flex items-center gap-4 lg:gap-6">
        <a href="<?php echo tamin_get_nav_url('tamin_blog_url', '/blog'); ?>" class="text-neutral-900 font-normal text-sm hover:brightness-110 transition-colors"><?php esc_html_e('مشاهده همه', 'tamin-theme'); ?></a>
        <div class="flex items-center gap-2">
          <button class="blog-prev w-[25px] h-[25px] bg-primary hover:opacity-80 text-white rounded-md flex items-center justify-center transition-all cursor-pointer" aria-label="<?php esc_attr_e('قبلی', 'tamin-theme'); ?>">
            <i class="fa-solid fa-caret-right text-xs"></i>
          </button>
          <button class="blog-next w-[25px] h-[25px] bg-primary hover:opacity-80 text-white rounded-md flex items-center justify-center transition-all cursor-pointer" aria-label="<?php esc_attr_e('بعدی', 'tamin-theme'); ?>">
            <i class="fa-solid fa-caret-left text-xs"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- The Article Cards Swiper -->
    <div class="swiper blogSwiper overflow-visible">
      <div class="swiper-wrapper">
        
        <?php
        if ($blog_query->have_posts()) {
            while ($blog_query->have_posts()) {
                $blog_query->the_post();
                get_template_part('template-parts/post/content-card');
            }
            wp_reset_postdata();
        } else {
            // Static Fallback Cards when database has no posts yet
            $static_posts = [
                [
                    'title' => __('نقش پلاسما در درمان بیماری‌های نادر', 'tamin-theme'),
                    'desc'  => __('پلاسما حاوی پروتئین‌های حیاتی است که برای تولید داروهای بیماران خاص و نادر استفاده می‌شود.', 'tamin-theme'),
                    'img'   => 'post-1.webp',
                ],
                [
                    'title' => __('تغذیه مناسب قبل و بعد از اهدای پلاسما', 'tamin-theme'),
                    'desc'  => __('با رعایت یک رژیم غذایی سالم و مصرف مایعات کافی، تجربه بهتری از اهدای پلاسما خواهید داشت.', 'tamin-theme'),
                    'img'   => 'post-2.webp',
                ],
                [
                    'title' => __('تفاوت پلاسمای انسانی و فرآورده‌های خونی', 'tamin-theme'),
                    'desc'  => __('بررسی علمی کاربردهای پلاسما در مقایسه با خون کامل و نقش آن در پزشکی مدرن.', 'tamin-theme'),
                    'img'   => 'post-3.webp',
                ],
                [
                    'title' => __('چگونه اهداکننده مستمر پلاسما شویم؟', 'tamin-theme'),
                    'desc'  => __('راهنمای گام به گام برای کسانی که می‌خواهند به طور منظم در نجات جان بیماران سهیم باشند.', 'tamin-theme'),
                    'img'   => 'post-4.webp',
                ],
                [
                    'title' => __('استانداردهای ایمنی در مراکز ما', 'tamin-theme'),
                    'desc'  => __('آشنایی با تجهیزات پیشرفته و پروتکل‌های بهداشتی سخت‌گیرانه در مراکز تامین پلاسما نوژین.', 'tamin-theme'),
                    'img'   => 'post-5.webp',
                ],
                [
                    'title' => __('فواید علمی اهدای پلاسما برای بدن', 'tamin-theme'),
                    'desc'  => __('مطالعات نشان می‌دهد که اهدای منظم پلاسما می‌تواند به بهبود گردش خون و سلامت عمومی کمک کند.', 'tamin-theme'),
                    'img'   => 'post-6.webp',
                ],
            ];

            foreach ($static_posts as $item) {
                ?>
                <div class="swiper-slide flex flex-col relative group cursor-pointer">
                  <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-sm bg-neutral-200 relative">
                    <img src="<?php echo esc_url(tamin_img_url($item['img'])); ?>" class="transition-transform duration-500 group-hover:scale-105 object-cover w-full h-full" alt="<?php echo esc_attr($item['title']); ?>" />
                  </div>
                  <div class="mt-4 px-2 space-y-3 relative">
                    <h3 class="text-neutral-900 font-semibold text-base lg:text-lg"><?php echo esc_html($item['title']); ?></h3>
                    <p class="text-neutral-900/60 text-xs lg:text-sm text-right leading-relaxed line-clamp-2">
                      <?php echo esc_html($item['desc']); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="w-fit bg-primary hover:brightness-110 text-neutral-900 font-semibold px-4 py-2 rounded-full flex items-center gap-2 transition-all shadow-md hover:shadow-lg group">
                      <span><?php esc_html_e('ادامه مطلب', 'tamin-theme'); ?></span>
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                        <line x1="17" y1="17" x2="7" y2="7"></line>
                        <polyline points="17 7 7 7 7 17"></polyline>
                      </svg>
                    </a>
                  </div>
                </div>
                <?php
            }
        }
        ?>

      </div>
      
      <!-- Bottom Pagination Dots -->
      <div class="blog-pagination flex items-center justify-center gap-2 mt-12 swiper-pagination-custom"></div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper === 'undefined') return;
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
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
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
