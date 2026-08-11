<?php
/**
 * Advanced Page Templates Metabox & Header Settings System
 *
 * @package TaminTheme
 * @version 2.0.0
 */

defined('ABSPATH') || exit;

if (!class_exists('Tamin_Page_Metaboxes')) {

    class Tamin_Page_Metaboxes {

        public function __construct() {
            add_action('add_meta_boxes', [$this, 'register_metaboxes']);
            add_action('save_post_page', [$this, 'save_metaboxes']);
            add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
        }

        public function enqueue_admin_assets($hook): void {
            if (!in_array($hook, ['post.php', 'post-new.php'])) {
                return;
            }
            wp_enqueue_media();
            wp_enqueue_style('tamin-admin-metabox', TAMIN_THEME_URI . '/assets/css/admin-metabox.css', [], TAMIN_THEME_VERSION);
            wp_enqueue_script('tamin-admin-metabox', TAMIN_THEME_URI . '/assets/js/admin-metabox.js', ['jquery'], TAMIN_THEME_VERSION, true);
        }

        public function register_metaboxes(): void {
            add_meta_box(
                'tamin_page_options',
                __('تنظیمات اختصاصی برگه (تم نوژین)', 'tamin-theme'),
                [$this, 'render_metabox_content'],
                'page',
                'normal',
                'high'
            );
        }

        public function render_metabox_content($post): void {
            wp_nonce_field('tamin_page_metabox_save', 'tamin_page_metabox_nonce');

            $page_template = get_post_meta($post->ID, '_wp_page_template', true);
            $meta = get_post_meta($post->ID);
            
            $get_val = function($key, $default = '') use ($meta) {
                return isset($meta[$key]) ? $meta[$key][0] : $default;
            };

            ?>
            <div class="tamin-metabox-wrapper">
                <ul class="tamin-metabox-tabs">
                    <?php
                    // قالب‌هایی که هیرو و اختصاصی خودشان را مستقل مدیریت می‌کنند
                    $has_own_hero = in_array($page_template, ['page-about.php', 'page-policy.php', 'page-contact.php']);
                    ?>
                    <?php if (!$has_own_hero) : ?>
                    <li class="tamin-metabox-tab active" data-tab="tab-hero"><?php esc_html_e('تنظیمات هیرو / سربرگ', 'tamin-theme'); ?></li>
                    <li class="tamin-metabox-tab" data-tab="tab-template"><?php esc_html_e('تنظیمات اختصاصی قالب', 'tamin-theme'); ?></li>
                    <?php endif; ?>

                    <?php if ($page_template === 'page-plasma-info.php') : ?>
                        <li class="tamin-metabox-tab" data-tab="tab-plasma-benefits"><?php esc_html_e('فواید اهدا', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-plasma-calc"><?php esc_html_e('ماشین حساب', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-plasma-timeline"><?php esc_html_e('مراحل اهدا', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-plasma-faq"><?php esc_html_e('سوالات متداول', 'tamin-theme'); ?></li>
                    <?php endif; ?>
                    <?php if ($page_template === 'page-about.php') : ?>
                        <li class="tamin-metabox-tab active" data-tab="tab-about-hero"><?php esc_html_e('هیرو و مشخصات', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-about-values"><?php esc_html_e('ارزش‌ها و مأموریت', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-about-stats"><?php esc_html_e('آمار', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-about-certs"><?php esc_html_e('استانداردها', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-about-cta"><?php esc_html_e('بنر CTA', 'tamin-theme'); ?></li>
                    <?php endif; ?>
                    <?php if ($page_template === 'page-policy.php') : ?>
                        <li class="tamin-metabox-tab active" data-tab="tab-policy-hero"><?php esc_html_e('هیرو', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-policy-bento"><?php esc_html_e('کارت‌های بالا', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-policy-sections"><?php esc_html_e('بخش‌های محتوا', 'tamin-theme'); ?></li>
                    <?php endif; ?>
                    <?php if ($page_template === 'page-contact.php') : ?>
                        <li class="tamin-metabox-tab active" data-tab="tab-contact-faq"><?php esc_html_e('سوالات متداول', 'tamin-theme'); ?></li>
                        <li class="tamin-metabox-tab" data-tab="tab-contact-support"><?php esc_html_e('پشتیبانی و تماس', 'tamin-theme'); ?></li>
                    <?php endif; ?>
                </ul>

                <div class="tamin-metabox-content">

                    <?php if (!$has_own_hero) : ?>
                    <!-- Tab: Hero — فقط برای صفحاتی که هیرو عمومی دارند -->
                    <div id="tab-hero" class="tamin-tab-content active">
                        <div class="tamin-field-row">
                            <label class="tamin-label">
                                <input type="checkbox" name="tamin_hero_show" value="1" <?php checked($get_val('_tamin_hero_show', '1'), '1'); ?> />
                                <?php esc_html_e('نمایش بخش هیرو در این برگه', 'tamin-theme'); ?>
                            </label>
                        </div>
                        <?php
                        $this->render_field('_tamin_hero_badge', 'متن بج کوچک هدر (Badge):', 'text', $get_val('_tamin_hero_badge'));
                        $this->render_field('_tamin_hero_custom_title', 'عنوان اختصاصی هدر:', 'text', $get_val('_tamin_hero_custom_title'));
                        $this->render_field('_tamin_hero_custom_desc', 'توضیحات اختصاصی زیر عنوان:', 'textarea', $get_val('_tamin_hero_custom_desc'));
                        ?>
                    </div>

                    <!-- Tab: Template Specific -->
                    <div id="tab-template" class="tamin-tab-content">
                        <p class="description" style="margin-bottom: 20px;">
                            <?php printf(esc_html__('قالب فعال این برگه: %s', 'tamin-theme'), '<code>' . esc_html($page_template ?: 'default') . '</code>'); ?>
                        </p>
                    <?php if ($page_template === 'page-units.php') : ?>
                            <?php 
                            $this->render_field('_tamin_units_badge', 'بج سربرگ:', 'text', $get_val('_tamin_units_badge', 'شعب سراسر کشور')); 
                            $this->render_field('_tamin_units_title', 'عنوان سربرگ:', 'text', $get_val('_tamin_units_title', 'مراکز و واحدهای تأمین پلاسما نوژین')); 
                            $this->render_field('_tamin_units_desc', 'توضیحات سربرگ:', 'textarea', $get_val('_tamin_units_desc', 'دسترسی سریع به مدرن‌ترین مراکز استاندارد اهدا در سراسر کشور با کادری مجرب و تجهیزات پیشرفته')); 
                            $this->render_field('_tamin_units_count_text', 'متن خلاصه تعداد شعب:', 'text', $get_val('_tamin_units_count_text', '۱۲ مرکز فعال در سراسر کشور')); 
                            ?>
                    <?php elseif ($page_template === 'page-plasma-info.php') : ?>
                            <?php
                            $this->render_field('_tamin_hero_btn1_text', 'متن دکمه اول هیرو', 'text', $get_val('_tamin_hero_btn1_text'));
                            $this->render_field('_tamin_hero_btn1_url', 'لینک دکمه اول هیرو', 'text', $get_val('_tamin_hero_btn1_url'));
                            $this->render_field('_tamin_hero_btn2_text', 'متن دکمه دوم هیرو', 'text', $get_val('_tamin_hero_btn2_text'));
                            $this->render_field('_tamin_hero_btn2_url', 'لینک دکمه دوم هیرو', 'text', $get_val('_tamin_hero_btn2_url'));
                            $this->render_image_field('_tamin_hero_image', 'تصویر اصلی هیرو', $get_val('_tamin_hero_image'));
                            ?>
                    <?php else : ?>
                            <p><?php esc_html_e('این برگه از قالب استاندارد استفاده می‌کند.', 'tamin-theme'); ?></p>
                    <?php endif; ?>
                    </div>
                    <?php endif; // !$has_own_hero ?>

                    <?php if ($page_template === 'page-plasma-info.php') : ?>
                    <!-- Tab: Plasma Benefits -->
                    <div id="tab-plasma-benefits" class="tamin-tab-content">
                        <?php 
                        $this->render_field('_tamin_benefits_title', 'عنوان بخش فواید', 'text', $get_val('_tamin_benefits_title', 'چرا اهدای پلاسما یک تصمیم هوشمندانه و حیاتی است؟')); 
                        $default_benefits = [
                            ['icon' => 'fa-user-doctor', 'title' => 'بررسی رایگان و مستمر سلامت', 'desc' => 'در هر مراجعه، علائم حیاتی شما مانند فشار خون، ضربان قلب، هموگلوبین و سلامت عمومی توسط پزشک مرکز به صورت کاملاً رایگان بررسی و ثبت می‌شود.'],
                            ['icon' => 'fa-wallet', 'title' => 'حق تشکر و ایاب‌و‌ذهاب', 'desc' => 'به پاس فداکاری و زمان ارزشمندی که برای نجات جان دیگران اختصاص می‌دهید، هدیه تشکر و هزینه سفر شما بلافاصله پس از اتمام اهدا تقدیم می‌شود.'],
                            ['icon' => 'fa-hand-holding-heart', 'title' => 'تأثیرگذاری مستقیم بر جامعه', 'desc' => 'پلاسمای اهدایی شما ماده اولیه و حیاتی برای تولید داروهای بیماران هموفیلی، تالاسمی، نقص ایمنی و سوختگی‌های شدید است.']
                        ];
                        $benefits_val = $get_val('_tamin_benefits_list');
                        $benefits = $benefits_val ? json_decode($benefits_val, true) : $default_benefits;
                        $this->render_repeater('_tamin_benefits_list', 'لیست فواید (۳ ستون)', ['icon' => 'آیکون (فونت‌آوسام)', 'title' => 'عنوان', 'desc' => 'توضیحات (textarea)'], $benefits);
                        ?>
                    </div>

                    <!-- Tab: Plasma Calculator -->
                    <div id="tab-plasma-calc" class="tamin-tab-content">
                        <?php 
                        $this->render_field('_tamin_calc_badge', 'متن نشان بالا', 'text', $get_val('_tamin_calc_badge', 'محاسبه‌گر آنلاین')); 
                        $this->render_field('_tamin_calc_title', 'عنوان اصلی', 'text', $get_val('_tamin_calc_title', 'محاسبه‌گر تأثیر فداکاری شما')); 
                        $this->render_field('_tamin_calc_desc', 'توضیحات زیر عنوان', 'textarea', $get_val('_tamin_calc_desc', 'با تکان دادن اسلایدرهای زیر, تأثیر ارزشمند میزان پلاسمای اهدایی خود را در بازه‌های زمانی مختلف و در درمان بیماران خاص به صورت عینی مشاهده کنید.')); 
                        
                        echo '<hr style="margin:30px 0;"><h4 style="margin-bottom:15px;color:#d63638;">ضرایب فرمول محاسباتی ماشین حساب</h4>';
                        $this->render_field('_tamin_calc_coef_lives', 'ضریب بیماران نجات یافته (به ازای هر اهدا)', 'number', $get_val('_tamin_calc_coef_lives', '3')); 
                        $this->render_field('_tamin_calc_coef_volume', 'حجم پلاسما در هر اهدا (لیتر)', 'number', $get_val('_tamin_calc_coef_volume', '0.8')); 
                        $this->render_field('_tamin_calc_coef_cals', 'کالری مصرفی در هر اهدا (Kcal)', 'number', $get_val('_tamin_calc_coef_cals', '500')); 
                        ?>
                    </div>

                    <!-- Tab: Plasma Timeline -->
                    <div id="tab-plasma-timeline" class="tamin-tab-content">
                        <?php 
                        $this->render_field('_tamin_timeline_badge', 'نشان بالا', 'text', $get_val('_tamin_timeline_badge', 'مسیر تعاملی اهدا')); 
                        $this->render_field('_tamin_timeline_title', 'عنوان اصلی', 'text', $get_val('_tamin_timeline_title', 'مسیر همدلی؛ ساده، سریع و استاندارد')); 
                        $this->render_field('_tamin_timeline_desc', 'توضیحات', 'textarea', $get_val('_tamin_timeline_desc', 'برای مشاهده جزئیات بیشتر و بررسی نکات ایمنی، نشانگر خود را روی هر یک از ۶ مرحله قرار دهید.')); 
                        
                        $default_timeline = [
                            ['title' => 'پذیرش و ثبت‌نام اولیه', 'duration' => 'مدت زمان حدودی: ۵ الی ۱۰ دقیقه', 'detail_title' => 'تشکیل پرونده', 'detail_desc' => 'ارائه کارت ملی و ثبت مشخصات.', 'icon' => 'fa-clipboard-user'],
                            ['title' => 'معاینه و مشاوره پزشکی', 'duration' => 'تست رایگان فشار و سلامت', 'detail_title' => 'بررسی سلامت', 'detail_desc' => 'پزشک مرکز شما را معاینه میکند.', 'icon' => 'fa-stethoscope'],
                            ['title' => 'فرآیند اهدای پلاسما', 'duration' => 'مدت زمان: ۳۰ الی ۴۰ دقیقه', 'detail_title' => 'استراحت و اهدا', 'detail_desc' => 'در محیطی آرام پلاسما اهدا میشود.', 'icon' => 'fa-bed-pulse'],
                            ['title' => 'استراحت کوتاه و پذیرایی', 'duration' => 'تغذیه با آب‌میوه و خوراکی‌های مغذی', 'detail_title' => 'ریکاوری', 'detail_desc' => 'پذیرایی با آبمیوه و کیک.', 'icon' => 'fa-mug-hot'],
                            ['title' => 'دریافت هزینه ایاب و ذهاب', 'duration' => 'واریز کارت به کارت یا حواله نقدی', 'detail_title' => 'حق تشکر', 'detail_desc' => 'مبلغی به عنوان تشکر پرداخت میشود.', 'icon' => 'fa-hand-holding-dollar'],
                            ['title' => 'تعیین نوبت بعدی', 'duration' => 'امکان اهدای مجدد پس از ۴۸ ساعت', 'detail_title' => 'دیدار مجدد', 'detail_desc' => 'نوبت دهی برای مراجعه بعدی.', 'icon' => 'fa-calendar-check']
                        ];
                        $timeline_val = $get_val('_tamin_timeline_list');
                        $timeline = $timeline_val ? json_decode($timeline_val, true) : $default_timeline;
                        $this->render_repeater('_tamin_timeline_list', 'مراحل تایم‌لاین (سمت راست صفحه)', [
                            'title' => 'عنوان مرحله', 
                            'duration' => 'زمان / زیرنویس', 
                            'detail_title' => 'عنوان جزئیات (کارت سمت چپ)',
                            'detail_desc' => 'متن جزئیات (textarea)',
                            'icon' => 'آیکون (فونت‌آوسام)'
                        ], $timeline);
                        ?>
                    </div>

                    <!-- Tab: Plasma FAQ -->
                    <div id="tab-plasma-faq" class="tamin-tab-content">
                        <?php 
                        $this->render_field('_tamin_faq_badge', 'نشان بالا', 'text', $get_val('_tamin_faq_badge', 'پاسخگوی شما هستیم')); 
                        $this->render_field('_tamin_faq_title', 'عنوان اصلی', 'text', $get_val('_tamin_faq_title', 'سوالات پرتکرار درباره اهدای پلاسما')); 
                        
                        $default_faq = [
                            ['question' => 'آیا اهدای پلاسما دردناک است؟', 'answer' => 'خیر، اهدای پلاسما کاملاً بدون درد و با تجهیزات مدرن انجام می‌شود.'],
                            ['question' => 'هر چند وقت یک‌بار می‌توانم پلاسما اهدا کنم؟', 'answer' => 'شما می‌توانید تا دو بار در هفته (با فاصله حداقل ۴۸ ساعت) اهدا کنید.']
                        ];
                        $faq_val = $get_val('_tamin_faq_list');
                        $faq = $faq_val ? json_decode($faq_val, true) : $default_faq;
                        $this->render_repeater('_tamin_faq_list', 'لیست سوالات اختصاصی', [
                            'question' => 'سوال', 
                            'answer' => 'پاسخ (textarea)'
                        ], $faq);
                        ?>
                    </div>
                    <?php endif; // plasma-info ?>

                    <?php if ($page_template === 'page-about.php') : ?>
                    <!-- Tab: About Hero -->
                    <div id="tab-about-hero" class="tamin-tab-content active">
                        <?php
                        $this->render_field('_tamin_about_hero_badge', 'بج هیرو (Badge)', 'text', $get_val('_tamin_about_hero_badge'));
                        $this->render_field('_tamin_about_hero_title1', 'عنوان اول هیرو', 'text', $get_val('_tamin_about_hero_title1'));
                        $this->render_field('_tamin_about_hero_title2', 'عنوان دوم (گرادیانت رنگ)', 'text', $get_val('_tamin_about_hero_title2'));
                        $this->render_field('_tamin_about_hero_desc', 'توضیحات هیرو', 'textarea', $get_val('_tamin_about_hero_desc'));
                        $this->render_field('_tamin_about_hero_btn1_text', 'متن دکمه اول', 'text', $get_val('_tamin_about_hero_btn1_text'));
                        $this->render_field('_tamin_about_hero_btn1_url', 'لینک دکمه اول', 'text', $get_val('_tamin_about_hero_btn1_url'));
                        $this->render_field('_tamin_about_hero_btn2_text', 'متن دکمه دوم', 'text', $get_val('_tamin_about_hero_btn2_text'));
                        $this->render_field('_tamin_about_hero_btn2_url', 'لینک دکمه دوم', 'text', $get_val('_tamin_about_hero_btn2_url'));
                        $this->render_image_field('_tamin_about_hero_image', 'تصویر هیرو', $get_val('_tamin_about_hero_image'));
                        ?>
                    </div>

                    <!-- Tab: About Values -->
                    <div id="tab-about-values" class="tamin-tab-content">
                        <?php
                        $this->render_field('_tamin_about_values_title', 'عنوان بخش ارزش‌ها', 'text', $get_val('_tamin_about_values_title'));
                        $this->render_field('_tamin_about_values_desc', 'توضیحات بخش ارزش‌ها', 'textarea', $get_val('_tamin_about_values_desc'));
                        $values_val = $get_val('_tamin_about_values_list');
                        $values = $values_val ? json_decode($values_val, true) : [];
                        $this->render_repeater('_tamin_about_values_list', 'کارت‌های ارزش‌ها', ['icon' => 'آیکون (فونت‌آوسام)', 'title' => 'عنوان', 'desc' => 'توضیحات (textarea)'], $values ?: []);
                        ?>
                    </div>

                    <!-- Tab: About Stats -->
                    <div id="tab-about-stats" class="tamin-tab-content">
                        <?php
                        $stats_val = $get_val('_tamin_about_stats_list');
                        $stats = $stats_val ? json_decode($stats_val, true) : [];
                        $this->render_repeater('_tamin_about_stats_list', 'آمارها', ['prefix' => 'پیشوند (+, ٪)', 'value' => 'عدد (برای انیمیشن)', 'unit' => 'واحد (سال، هزار، شعبه)', 'suffix' => 'پسوند (٪)', 'label' => 'عنوان زیر آمار'], $stats ?: []);
                        ?>
                    </div>

                    <!-- Tab: About Certificates -->
                    <div id="tab-about-certs" class="tamin-tab-content">
                        <?php
                        $this->render_field('_tamin_about_certs_title', 'عنوان بخش مجوزها', 'text', $get_val('_tamin_about_certs_title'));
                        $certs_val = $get_val('_tamin_about_certs_list');
                        $certs = $certs_val ? json_decode($certs_val, true) : [];
                        $this->render_repeater('_tamin_about_certs_list', 'مجوزها و استانداردها', ['icon' => 'آیکون (فونت‌آوسام)', 'title' => 'عنوان مجوز'], $certs ?: []);
                        ?>
                    </div>

                    <!-- Tab: About CTA -->
                    <div id="tab-about-cta" class="tamin-tab-content">
                        <?php
                        $this->render_field('_tamin_about_cta_badge', 'متن بالای بنر', 'text', $get_val('_tamin_about_cta_badge'));
                        $this->render_field('_tamin_about_cta_title', 'عنوان CTA', 'text', $get_val('_tamin_about_cta_title'));
                        $this->render_field('_tamin_about_cta_desc', 'توضیحات CTA', 'textarea', $get_val('_tamin_about_cta_desc'));
                        $this->render_field('_tamin_about_cta_btn_text', 'متن دکمه', 'text', $get_val('_tamin_about_cta_btn_text'));
                        $this->render_field('_tamin_about_cta_btn_url', 'لینک دکمه', 'text', $get_val('_tamin_about_cta_btn_url'));
                        $this->render_image_field('_tamin_about_cta_image', 'تصویر CTA', $get_val('_tamin_about_cta_image'));
                        ?>
                    </div>
                    <?php endif; // page-about.php ?>

                    <?php if ($page_template === 'page-policy.php') : ?>
                    <!-- Tab: Policy Hero -->
                    <div id="tab-policy-hero" class="tamin-tab-content active">
                        <?php
                        $this->render_field('_tamin_policy_hero_badge', 'متن بج (آخرین بروزرسانی)', 'text', $get_val('_tamin_policy_hero_badge'));
                        $this->render_field('_tamin_policy_hero_title', 'عنوان اصلی', 'text', $get_val('_tamin_policy_hero_title'));
                        $this->render_field('_tamin_policy_hero_desc', 'توضیحات', 'textarea', $get_val('_tamin_policy_hero_desc'));
                        ?>
                    </div>
                    <!-- Tab: Policy Bento -->
                    <div id="tab-policy-bento" class="tamin-tab-content">
                        <?php
                        $this->render_field('_tamin_policy_bento_main_icon', 'آیکون کارت بزرگ', 'text', $get_val('_tamin_policy_bento_main_icon'));
                        $this->render_field('_tamin_policy_bento_main_title', 'عنوان کارت بزرگ', 'text', $get_val('_tamin_policy_bento_main_title'));
                        $this->render_field('_tamin_policy_bento_main_desc', 'توضیحات کارت بزرگ', 'textarea', $get_val('_tamin_policy_bento_main_desc'));
                        echo '<hr style="margin:20px 0">';
                        $this->render_field('_tamin_policy_bento_side_title', 'عنوان کارت کوچک (چک‌لیست)', 'text', $get_val('_tamin_policy_bento_side_title'));
                        $cl_val = $get_val('_tamin_policy_bento_checklist');
                        $cl = $cl_val ? json_decode($cl_val, true) : [];
                        $this->render_repeater('_tamin_policy_bento_checklist', 'آیتم‌های چک‌لیست', ['text' => 'متن آیتم'], $cl ?: []);
                        ?>
                    </div>
                    <!-- Tab: Policy Sections -->
                    <div id="tab-policy-sections" class="tamin-tab-content">
                        <?php
                        $sec_val = $get_val('_tamin_policy_sections');
                        $sec = $sec_val ? json_decode($sec_val, true) : [];
                        $this->render_repeater('_tamin_policy_sections', 'بخش‌های محتوا', ['title' => 'عنوان بخش', 'content' => 'محتوای بخش (textarea)'], $sec ?: []);
                        ?>
                    </div>
                    <?php endif; // page-policy.php ?>

                    <?php if ($page_template === 'page-contact.php') : ?>
                    <!-- Tab: Contact FAQ -->
                    <div id="tab-contact-faq" class="tamin-tab-content active">
                        <?php
                        $this->render_field('_tamin_contact_faq_badge', 'بج سوالات متداول', 'text', $get_val('_tamin_contact_faq_badge'));
                        $this->render_field('_tamin_contact_faq_title', 'عنوان اصلی FAQ', 'text', $get_val('_tamin_contact_faq_title'));
                        $this->render_field('_tamin_contact_faq_subtitle', 'زیرعنوان FAQ', 'text', $get_val('_tamin_contact_faq_subtitle'));
                        $this->render_field('_tamin_contact_faq_desc', 'توضیحات FAQ', 'textarea', $get_val('_tamin_contact_faq_desc'));
                        $this->render_field('_tamin_contact_faq_link_text', 'متن لینک «مشاهده همه»', 'text', $get_val('_tamin_contact_faq_link_text'));
                        $this->render_field('_tamin_contact_faq_link_url', 'لینک «مشاهده همه»', 'text', $get_val('_tamin_contact_faq_link_url'));
                        $faq_cv = $get_val('_tamin_contact_faq_list');
                        $faq_c = $faq_cv ? json_decode($faq_cv, true) : [];
                        $this->render_repeater('_tamin_contact_faq_list', 'لیست سوالات متداول', ['question' => 'سوال', 'answer' => 'پاسخ (textarea)'], $faq_c ?: []);
                        ?>
                    </div>
                    <!-- Tab: Contact Support -->
                    <div id="tab-contact-support" class="tamin-tab-content">
                        <?php
                        $this->render_field('_tamin_contact_support_badge', 'بج بخش پشتیبانی', 'text', $get_val('_tamin_contact_support_badge'));
                        $this->render_field('_tamin_contact_support_title1', 'عنوان اول پشتیبانی', 'text', $get_val('_tamin_contact_support_title1'));
                        $this->render_field('_tamin_contact_support_title2', 'عنوان دوم (مشکی)', 'text', $get_val('_tamin_contact_support_title2'));
                        $this->render_field('_tamin_contact_support_desc', 'توضیحات', 'textarea', $get_val('_tamin_contact_support_desc'));
                        $this->render_image_field('_tamin_contact_support_image', 'تصویر بخش پشتیبانی', $get_val('_tamin_contact_support_image'));
                        ?>
                    </div>
                    <?php endif; // page-contact.php ?>

                </div>
            </div>
            <?php
        }

        private function render_field($id, $label, $type = 'text', $value = '') {
            echo '<div class="tamin-field-row">';
            echo '<label class="tamin-label" for="' . esc_attr($id) . '">' . esc_html($label) . '</label>';
            if ($type === 'textarea') {
                echo '<textarea id="' . esc_attr($id) . '" name="' . esc_attr($id) . '" rows="4">' . esc_textarea($value) . '</textarea>';
            } else {
                echo '<input type="' . esc_attr($type) . '" id="' . esc_attr($id) . '" name="' . esc_attr($id) . '" value="' . esc_attr($value) . '" ' . ($type === 'number' ? 'step="any"' : '') . '>';
            }
            echo '</div>';
        }

        private function render_image_field($id, $label, $value = '') {
            echo '<div class="tamin-field-row tamin-image-field">';
            echo '<label class="tamin-label">' . esc_html($label) . '</label>';
            echo '<div class="tamin-image-preview"><img src="' . esc_url($value) . '" style="max-height: 150px; ' . ($value ? '' : 'display:none;') . '"></div>';
            echo '<div>';
            echo '<input type="hidden" id="' . esc_attr($id) . '" name="' . esc_attr($id) . '" value="' . esc_attr($value) . '">';
            echo '<button type="button" class="button tamin-upload-btn">انتخاب تصویر</button> ';
            echo '<button type="button" class="button tamin-remove-image-btn" style="' . ($value ? '' : 'display:none;color:#d63638;border-color:#d63638;') . '">حذف</button>';
            echo '</div>';
            echo '</div>';
        }

        private function render_repeater($id, $label, $fields, $values) {
            $values_json = esc_attr(wp_json_encode($values, JSON_UNESCAPED_UNICODE));
            $fields_json = esc_attr(wp_json_encode($fields, JSON_UNESCAPED_UNICODE));
            
            echo '<div class="tamin-field-row tamin-repeater" data-id="' . esc_attr($id) . '" data-fields="' . $fields_json . '">';
            echo '<label class="tamin-label">' . esc_html($label) . '</label>';
            echo '<input type="hidden" name="' . esc_attr($id) . '" id="' . esc_attr($id) . '" value="' . $values_json . '">';
            echo '<div class="tamin-repeater-list"></div>';
            echo '<button type="button" class="button button-primary tamin-repeater-add">+ افزودن آیتم جدید</button>';
            echo '</div>';
        }

        public function save_metaboxes($post_id): void {
            if (!isset($_POST['tamin_page_metabox_nonce']) || !wp_verify_nonce($_POST['tamin_page_metabox_nonce'], 'tamin_page_metabox_save')) {
                return;
            }
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }
            if (!current_user_can('edit_page', $post_id)) {
                return;
            }

            // Text / Checkbox / Number fields
            $standard_fields = [
                '_tamin_hero_show', '_tamin_hero_badge', '_tamin_hero_custom_title', '_tamin_hero_custom_desc',
                '_tamin_contact_phone', '_tamin_units_count_text', '_tamin_units_badge', '_tamin_units_title', '_tamin_units_desc',
                '_tamin_hero_btn1_text', '_tamin_hero_btn1_url', '_tamin_hero_btn2_text', '_tamin_hero_btn2_url', '_tamin_hero_image',
                '_tamin_benefits_title',
                '_tamin_calc_badge', '_tamin_calc_title', '_tamin_calc_desc', '_tamin_calc_coef_lives', '_tamin_calc_coef_volume', '_tamin_calc_coef_cals',
                '_tamin_timeline_badge', '_tamin_timeline_title', '_tamin_timeline_desc',
                '_tamin_faq_badge', '_tamin_faq_title',
                // About page
                '_tamin_about_hero_badge', '_tamin_about_hero_title1', '_tamin_about_hero_title2', '_tamin_about_hero_desc',
                '_tamin_about_hero_btn1_text', '_tamin_about_hero_btn1_url', '_tamin_about_hero_btn2_text', '_tamin_about_hero_btn2_url', '_tamin_about_hero_image',
                '_tamin_about_values_title', '_tamin_about_values_desc', '_tamin_about_certs_title',
                '_tamin_about_cta_badge', '_tamin_about_cta_title', '_tamin_about_cta_desc', '_tamin_about_cta_btn_text', '_tamin_about_cta_btn_url', '_tamin_about_cta_image',
                // Policy page
                '_tamin_policy_hero_badge', '_tamin_policy_hero_title', '_tamin_policy_hero_desc',
                '_tamin_policy_bento_main_icon', '_tamin_policy_bento_main_title', '_tamin_policy_bento_main_desc', '_tamin_policy_bento_side_title',
                // Contact page
                '_tamin_contact_faq_badge', '_tamin_contact_faq_title', '_tamin_contact_faq_subtitle', '_tamin_contact_faq_desc',
                '_tamin_contact_faq_link_text', '_tamin_contact_faq_link_url',
                '_tamin_contact_support_badge', '_tamin_contact_support_title1', '_tamin_contact_support_title2', '_tamin_contact_support_desc', '_tamin_contact_support_image',
            ];

            foreach ($standard_fields as $field) {
                if (isset($_POST[$field])) {
                    $val = wp_unslash($_POST[$field]);
                    if (str_contains($field, 'desc')) {
                        update_post_meta($post_id, $field, sanitize_textarea_field($val));
                    } elseif (str_contains($field, 'url') || str_contains($field, 'image')) {
                        update_post_meta($post_id, $field, esc_url_raw($val));
                    } elseif (str_contains($field, 'coef')) {
                        update_post_meta($post_id, $field, floatval($val));
                    } else {
                        update_post_meta($post_id, $field, sanitize_text_field($val));
                    }
                } else {
                    if ($field === '_tamin_hero_show') {
                        update_post_meta($post_id, $field, '0');
                    }
                }
            }

            // JSON Repeater Fields
            $repeater_fields = [
                '_tamin_benefits_list', '_tamin_timeline_list', '_tamin_faq_list',
                '_tamin_about_values_list', '_tamin_about_stats_list', '_tamin_about_certs_list',
                '_tamin_policy_bento_checklist', '_tamin_policy_sections',
                '_tamin_contact_faq_list',
            ];
            foreach ($repeater_fields as $field) {
                if (isset($_POST[$field])) {
                    $val = wp_unslash($_POST[$field]);
                    $decoded = json_decode($val, true);
                    if (is_array($decoded)) {
                        foreach ($decoded as &$item) {
                            foreach ($item as $k => $v) {
                                $item[$k] = sanitize_textarea_field($v);
                            }
                        }
                        update_post_meta($post_id, $field, wp_json_encode($decoded, JSON_UNESCAPED_UNICODE));
                    }
                }
            }
        }
    }

    new Tamin_Page_Metaboxes();
}
