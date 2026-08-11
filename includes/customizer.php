<?php
/**
 * Theme Customizer Options with Accordion Panels & Global Controls
 *
 * @package TaminTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

if (!function_exists('tamin_customize_register')) {

    function tamin_customize_register(WP_Customize_Manager $wp_customize): void {

        // Require custom control classes ONLY when customizer is loaded
        require_once TAMIN_THEME_DIR . '/includes/customizer-controls.php';

        // Selective Refresh & PostMessage
        $wp_customize->get_setting('blogname')->transport        = 'postMessage';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

        // 1. MAIN PANEL: Tamin Theme Options
        $wp_customize->add_panel('tamin_theme_options', [
            'priority'    => 10,
            'title'       => __('تنظیمات پویا قالب تامین پلاسما', 'tamin-theme'),
            'description' => __('مدیریت متون، اطلاعات تماس، شبکه‌های اجتماعی و برندینگ قالب نوژین', 'tamin-theme'),
        ]);

        // SECTION 1: Header & Top Bar Settings
        $wp_customize->add_section('tamin_header_section', [
            'title'    => __('تنظیمات هدر و نوارهای بالا', 'tamin-theme'),
            'panel'    => 'tamin_theme_options',
            'priority' => 10,
        ]);

        // 2. PANEL: Front Page Sections
        $wp_customize->add_panel('tamin_frontpage_panel', [
            'priority'    => 15,
            'title'       => __('بخش‌های صفحه اصلی', 'tamin-theme'),
            'description' => __('مدیریت سکشن‌های صفحه اصلی سایت', 'tamin-theme'),
        ]);

        // SECTION: Hero (Hero Slides)
        $wp_customize->add_section('tamin_hero_section', [
            'title'    => __('هیرو و اسلایدر', 'tamin-theme'),
            'panel'    => 'tamin_frontpage_panel',
            'priority' => 10,
        ]);

        // Hero Settings
        $wp_customize->add_setting('tamin_hero_enabled', [
            'default'           => true,
            'sanitize_callback' => 'tamin_sanitize_checkbox',
        ]);
        $wp_customize->add_control('tamin_hero_enabled', [
            'label'    => __('نمایش بخش هیرو', 'tamin-theme'),
            'section'  => 'tamin_hero_section',
            'type'     => 'checkbox',
        ]);

        $default_slides = [
            [
                'tab_label'  => 'زندگی دوباره',
                'icon_type'  => 'class',
                'icon_class' => 'fa-solid fa-heart-pulse',
                'title'      => 'اهدای پلاسما، امید به زندگی دوباره',
                'slogan'     => 'هر اهدا، جرقه‌ای برای نجات یک انسان',
                'desc'       => 'بسیاری از بیماران مبتلا به نقص ایمنی و بیماری‌های خاص، برای بقا به داروهای حیاتی مشتق از پلاسما نیازمندند. حضور پرمهر شما، لبخند دوباره را به خانواده‌هایشان هدیه می‌دهد. همین امروز تصمیم بگیرید.',
                'img'        => tamin_img_url('hero_slide.webp'),
            ],
            [
                'tab_label'  => 'علم درمان',
                'icon_type'  => 'class',
                'icon_class' => 'fa-solid fa-microscope',
                'title'      => 'دانش پیشرفته در خدمت سلامت بیماران',
                'slogan'     => 'ایمنی بالا و استانداردهای بین‌المللی در محیطی امن',
                'desc'       => 'مرکز نوژین با بهره‌گیری از تجهیزات مدرن، فرآیند جداسازی پلاسما (آفرزیس) را در استریل‌ترین شرایط انجام می‌دهد. سلامت شما اولویت ماست و تمامی مراحل تحت نظارت کامل پزشک انجام می‌شود.',
                'img'        => tamin_img_url('hero_slide.webp'),
            ],
            [
                'tab_label'  => 'اهدای حیات',
                'icon_type'  => 'class',
                'icon_class' => 'fa-solid fa-hand-holding-heart',
                'title'      => 'گامی ساده برای یک حماسه‌ی بزرگ',
                'slogan'     => 'اهدای پلاسما؛ تکرارپذیر، بدون عوارض و حیات‌بخش',
                'desc'       => 'پلاسما به سرعت در بدن جایگزین می‌شود. با اهدای پلاسما، علاوه بر کمک به تولید داروهای حیاتی برای کودکان و بیماران خاص، از معاینات دوره‌ای و چکاپ کامل سلامت خود به صورت رایگان بهره‌مند شوید.',
                'img'        => tamin_img_url('hero_slide.webp'),
            ],
        ];

        $wp_customize->add_setting('tamin_hero_slides', [
            'default'           => wp_json_encode($default_slides),
            'sanitize_callback' => 'tamin_sanitize_json',
        ]);

        $wp_customize->add_control(new Tamin_Repeater_Control($wp_customize, 'tamin_hero_slides', [
            'label'       => __('اسلایدهای هیرو', 'tamin-theme'),
            'description' => __('هر اسلاید را تنظیم کنید. برای نوع آیکون می‌توانید از کلاس‌های آماده، آپلود SVG یا درج کد خام استفاده کنید.', 'tamin-theme'),
            'section'     => 'tamin_hero_section',
            'item_label'  => 'اسلاید',
            'fields'      => [
                ['id' => 'tab_label', 'label' => 'عنوان تب', 'type' => 'text'],
                ['id' => 'icon_type', 'label' => 'نوع آیکون', 'type' => 'select', 'options' => [
                    'class' => 'کلاس FontAwesome',
                    'image' => 'آپلود تصویر / SVG',
                    'svg'   => 'کد SVG خام',
                ]],
                ['id' => 'icon_class', 'label' => 'انتخاب آیکون (FontAwesome)', 'type' => 'select', 'options' => [
                    'fa-solid fa-heart-pulse' => 'قلب و نبض (Heart Pulse)',
                    'fa-solid fa-microscope' => 'میکروسکوپ (Microscope)',
                    'fa-solid fa-hand-holding-heart' => 'دست و قلب (Hand Heart)',
                    'fa-solid fa-syringe' => 'سرنگ (Syringe)',
                    'fa-solid fa-hospital' => 'بیمارستان (Hospital)',
                    'fa-solid fa-user-doctor' => 'پزشک (Doctor)',
                    'fa-solid fa-vial' => 'لوله آزمایش (Vial)',
                    'fa-solid fa-droplet' => 'قطره (Droplet)',
                    'fa-regular fa-calendar-check' => 'تقویم تایید (Calendar Check)',
                ]],
                ['id' => 'icon_image', 'label' => 'آپلود آیکون (URL)', 'type' => 'image'],
                ['id' => 'icon_svg', 'label' => 'کد SVG خام', 'type' => 'textarea'],
                ['id' => 'title', 'label' => 'عنوان اصلی اسلاید', 'type' => 'text'],
                ['id' => 'slogan', 'label' => 'شعار زیر عنوان', 'type' => 'text'],
                ['id' => 'desc', 'label' => 'متن توضیحات', 'type' => 'textarea'],
                ['id' => 'img', 'label' => 'تصویر پس‌زمینه (URL)', 'type' => 'image'],
            ]
        ]));

        // SECTION: About & Stats
        $wp_customize->add_section('tamin_about_section', [
            'title'    => __('درباره ما و آمار', 'tamin-theme'),
            'panel'    => 'tamin_frontpage_panel',
            'priority' => 20,
        ]);

        $wp_customize->add_setting('tamin_about_enabled', [
            'default'           => true,
            'sanitize_callback' => 'tamin_sanitize_checkbox',
        ]);
        $wp_customize->add_control('tamin_about_enabled', [
            'label'    => __('نمایش بخش درباره ما', 'tamin-theme'),
            'section'  => 'tamin_about_section',
            'type'     => 'checkbox',
        ]);

        // General texts
        $wp_customize->add_setting('tamin_about_title', ['default' => 'درباره اهدای پلاسما بیشتر بدانیم..', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_about_p1', ['default' => 'پلاسما بخش مایع خون است که حدود ۵۵٪ حجم کل خون را تشکیل می‌دهد. این بخش زرد رنگ حاوی آب، پروتئین‌ها، نمک‌ها، و مواد مغذی است که نقش مهمی در حمل مواد مغذی، هورمون‌ها و پروتئین‌های حیاتی ایفا می‌کند.', 'sanitize_callback' => 'sanitize_textarea_field']);
        $wp_customize->add_setting('tamin_about_p2', ['default' => 'با اهدای پلاسما، نه تنها به دیگران کمک می‌کنید، بلکه حس همدلی و مسئولیت اجتماعی را تجربه می‌کنید. با یک اقدام ساده، می‌توانید تفاوت بزرگی در زندگی یک نفر بسازید.', 'sanitize_callback' => 'sanitize_textarea_field']);
        $wp_customize->add_setting('tamin_about_list_title', ['default' => 'پلاسما در درمان بسیاری از بیماری‌ها کاربرد دارد، از جمله:', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_about_btn_text', ['default' => 'اطلاعات بیشتر', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_about_btn_url', ['default' => '', 'sanitize_callback' => 'esc_url_raw']);

        $wp_customize->add_control(new Tamin_Group_Control($wp_customize, 'tamin_about_texts_group', [
            'label'      => __('متون اصلی و دکمه', 'tamin-theme'),
            'section'    => 'tamin_about_section',
            'group_icon' => '📝',
            'fields'     => [
                ['setting' => 'tamin_about_title', 'label' => 'عنوان بخش', 'type' => 'text'],
                ['setting' => 'tamin_about_p1', 'label' => 'پاراگراف اول', 'type' => 'textarea'],
                ['setting' => 'tamin_about_p2', 'label' => 'پاراگراف دوم', 'type' => 'textarea'],
                ['setting' => 'tamin_about_list_title', 'label' => 'عنوان لیست مزایا', 'type' => 'text'],
                ['setting' => 'tamin_about_btn_text', 'label' => 'متن دکمه', 'type' => 'text'],
                ['setting' => 'tamin_about_btn_url', 'label' => 'لینک دکمه (انتخاب برگه)', 'type' => 'dropdown-pages'],
            ]
        ]));

        // List Repeater
        $default_about_list = [
            ['text' => 'بیماران مبتلا به سوختگی شدید'],
            ['text' => 'مبتلایان به اختلالات خونی مانند هموفیلی'],
            ['text' => 'بیماران نیازمند ایمونوگلوبولین (برای تقویت سیستم ایمنی)'],
            ['text' => 'بیماران کرونایی یا مبتلایان به برخی بیماری‌های عفونی در شرایط خاص'],
        ];
        $wp_customize->add_setting('tamin_about_list', [
            'default'           => wp_json_encode($default_about_list),
            'sanitize_callback' => 'tamin_sanitize_json',
        ]);
        $wp_customize->add_control(new Tamin_Repeater_Control($wp_customize, 'tamin_about_list', [
            'label'       => __('آیتم‌های لیست مزایا', 'tamin-theme'),
            'section'     => 'tamin_about_section',
            'item_label'  => 'آیتم',
            'fields'      => [
                ['id' => 'text', 'label' => 'متن آیتم', 'type' => 'text'],
            ]
        ]));

        // Stats Box
        $wp_customize->add_setting('tamin_stats_number', ['default' => '10', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_stats_label', ['default' => 'سال', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_stats_desc', ['default' => 'تجربه و سابقه موفق', 'sanitize_callback' => 'sanitize_text_field']);

        $wp_customize->add_control(new Tamin_Group_Control($wp_customize, 'tamin_stats_group', [
            'label'      => __('باکس آمار', 'tamin-theme'),
            'section'    => 'tamin_about_section',
            'group_icon' => '📊',
            'fields'     => [
                ['setting' => 'tamin_stats_number', 'label' => 'عدد', 'type' => 'text'],
                ['setting' => 'tamin_stats_label', 'label' => 'پسوند (مثلا سال/شعبه)', 'type' => 'text'],
                ['setting' => 'tamin_stats_desc', 'label' => 'توضیحات آمار', 'type' => 'text'],
            ]
        ]));

        // SECTION: Conditions
        $wp_customize->add_section('tamin_conditions_section', [
            'title'    => __('شرایط اهدای پلاسما', 'tamin-theme'),
            'panel'    => 'tamin_frontpage_panel',
            'priority' => 30,
        ]);

        $wp_customize->add_setting('tamin_conditions_enabled', [
            'default'           => true,
            'sanitize_callback' => 'tamin_sanitize_checkbox',
        ]);
        $wp_customize->add_control('tamin_conditions_enabled', [
            'label'    => __('نمایش بخش شرایط', 'tamin-theme'),
            'section'  => 'tamin_conditions_section',
            'type'     => 'checkbox',
        ]);

        $wp_customize->add_setting('tamin_conditions_title', ['default' => 'شرایط اهداکننده:', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_control('tamin_conditions_title', [
            'label'   => __('عنوان بخش', 'tamin-theme'),
            'section' => 'tamin_conditions_section',
            'type'    => 'text',
        ]);

        $default_conditions = [
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

        $wp_customize->add_setting('tamin_conditions_list', [
            'default'           => wp_json_encode($default_conditions),
            'sanitize_callback' => 'tamin_sanitize_json',
        ]);

        $wp_customize->add_control(new Tamin_Repeater_Control($wp_customize, 'tamin_conditions_list', [
            'label'       => __('کارت‌های شرایط اهدا', 'tamin-theme'),
            'section'     => 'tamin_conditions_section',
            'item_label'  => 'شرط',
            'fields'      => [
                ['id' => 'icon_type', 'label' => 'نوع آیکون', 'type' => 'select', 'options' => [
                    'image' => 'آپلود تصویر / SVG',
                    'class' => 'کلاس FontAwesome',
                    'svg'   => 'کد SVG خام',
                ]],
                ['id' => 'icon_image', 'label' => 'آپلود آیکون (URL)', 'type' => 'image'],
                ['id' => 'icon_class', 'label' => 'کلاس FontAwesome', 'type' => 'text'],
                ['id' => 'icon_svg', 'label' => 'کد SVG خام', 'type' => 'textarea'],
                ['id' => 'short_title', 'label' => 'عنوان روی کارت', 'type' => 'text'],
                ['id' => 'detail_title', 'label' => 'عنوان بخش توضیحات', 'type' => 'text'],
                ['id' => 'detail_desc', 'label' => 'متن توضیحات کامل', 'type' => 'textarea'],
            ]
        ]));

        // SECTION: Journey
        $wp_customize->add_section('tamin_journey_section', [
            'title'    => __('مسیر اهدای پلاسما', 'tamin-theme'),
            'panel'    => 'tamin_frontpage_panel',
            'priority' => 40,
        ]);

        $wp_customize->add_setting('tamin_journey_enabled', [
            'default'           => true,
            'sanitize_callback' => 'tamin_sanitize_checkbox',
        ]);
        $wp_customize->add_control('tamin_journey_enabled', [
            'label'    => __('نمایش بخش مسیر اهدا', 'tamin-theme'),
            'section'  => 'tamin_journey_section',
            'type'     => 'checkbox',
        ]);

        $wp_customize->add_setting('tamin_journey_title1', ['default' => 'مسیر', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_journey_title2', ['default' => 'اهدای پلاسما:', 'sanitize_callback' => 'sanitize_text_field']);
        
        $wp_customize->add_control(new Tamin_Group_Control($wp_customize, 'tamin_journey_title_group', [
            'label'      => __('عناوین بخش', 'tamin-theme'),
            'section'    => 'tamin_journey_section',
            'group_icon' => '📝',
            'fields'     => [
                ['setting' => 'tamin_journey_title1', 'label' => 'عنوان اول (مشکی)', 'type' => 'text'],
                ['setting' => 'tamin_journey_title2', 'label' => 'عنوان دوم (رنگی)', 'type' => 'text'],
            ]
        ]));

        $default_journey = [
            ['title' => 'خوش‌آمدگویی و پذیرش', 'image' => tamin_img_url('path/step-1.png')],
            ['title' => 'کنترل علائم حیاتی', 'image' => tamin_img_url('path/step-2.png')],
            ['title' => 'اهدای پلاسما', 'image' => tamin_img_url('path/step-3.png')],
            ['title' => 'تعیین وقت برای اهدای بعدی (دلخواه)', 'image' => tamin_img_url('path/step-4.png')],
            ['title' => 'پذیرایی و بررسی سلامت شما توسط پزشک', 'image' => tamin_img_url('path/step-5.png')],
            ['title' => 'پرداخت هزینه ایاب ذهاب', 'image' => tamin_img_url('path/step-6.png')],
        ];

        $wp_customize->add_setting('tamin_journey_steps', [
            'default'           => wp_json_encode($default_journey),
            'sanitize_callback' => 'tamin_sanitize_json',
        ]);

        $wp_customize->add_control(new Tamin_Repeater_Control($wp_customize, 'tamin_journey_steps', [
            'label'       => __('مراحل اهدا', 'tamin-theme'),
            'section'     => 'tamin_journey_section',
            'item_label'  => 'مرحله',
            'fields'      => [
                ['id' => 'title', 'label' => 'عنوان مرحله', 'type' => 'text'],
                ['id' => 'image', 'label' => 'تصویر مرحله (URL)', 'type' => 'image'],
            ]
        ]));

        // SECTION: FAQ
        $wp_customize->add_section('tamin_faq_section', [
            'title'    => __('سوالات متداول', 'tamin-theme'),
            'panel'    => 'tamin_frontpage_panel',
            'priority' => 50,
        ]);

        $wp_customize->add_setting('tamin_faq_enabled', [
            'default'           => true,
            'sanitize_callback' => 'tamin_sanitize_checkbox',
        ]);
        $wp_customize->add_control('tamin_faq_enabled', [
            'label'    => __('نمایش بخش سوالات متداول', 'tamin-theme'),
            'section'  => 'tamin_faq_section',
            'type'     => 'checkbox',
        ]);

        $wp_customize->add_setting('tamin_faq_subtitle', ['default' => 'پاسخگوی سوالات شما هستیم', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_faq_title1', ['default' => 'سوالات متداول', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_setting('tamin_faq_title2', ['default' => ' شما', 'sanitize_callback' => 'sanitize_text_field']);

        $wp_customize->add_control(new Tamin_Group_Control($wp_customize, 'tamin_faq_title_group', [
            'label'      => __('عناوین بخش', 'tamin-theme'),
            'section'    => 'tamin_faq_section',
            'group_icon' => '📝',
            'fields'     => [
                ['setting' => 'tamin_faq_subtitle', 'label' => 'زیرعنوان', 'type' => 'text'],
                ['setting' => 'tamin_faq_title1', 'label' => 'عنوان اول (مشکی)', 'type' => 'text'],
                ['setting' => 'tamin_faq_title2', 'label' => 'عنوان دوم (رنگی)', 'type' => 'text'],
            ]
        ]));

        $default_faqs = [
            [
                'question' => 'اهدای پلاسما چیست و چه تفاوتی با اهدای خون دارد؟',
                'answer'   => 'در اهدای پلاسما، تنها بخش مایع خون (پلاسما) جمع‌آوری می‌شود و سلول‌های خونی به بدن اهداکننده بازگردانده می‌شوند.'
            ],
            [
                'question' => 'آیا اهدای پلاسما برای سلامتی ضرر دارد؟',
                'answer'   => 'خیر، اهدای پلاسما یک فرآیند ایمن است که تحت نظارت پزشک انجام می‌شود.'
            ],
            [
                'question' => 'هر چند وقت یک‌بار می‌توان پلاسما اهدا کرد؟',
                'answer'   => 'شما می‌توانید تا دو بار در هفته با فاصله حداقل ۴۸ ساعت بین هر اهدا، پلاسما اهدا کنید.'
            ],
        ];

        $wp_customize->add_setting('tamin_faq_list', [
            'default'           => wp_json_encode($default_faqs),
            'sanitize_callback' => 'tamin_sanitize_json',
        ]);

        $wp_customize->add_control(new Tamin_Repeater_Control($wp_customize, 'tamin_faq_list', [
            'label'       => __('لیست سوالات', 'tamin-theme'),
            'section'     => 'tamin_faq_section',
            'item_label'  => 'سوال',
            'fields'      => [
                ['id' => 'question', 'label' => 'سوال', 'type' => 'text'],
                ['id' => 'answer', 'label' => 'پاسخ', 'type' => 'textarea'],
            ]
        ]));

        $default_testimonials = [
            [
                'text' => 'برخورد پرسنل مرکز تامین پلاسما نوژین فوق‌العاده حرفه‌ای و صمیمی است. محیط کاملاً بهداشتی و آرامش‌بخش است و حس خوبی از کمک به بیماران دارم.',
                'user' => 'سارا راد',
                'role' => 'اهداکننده مستمر',
                'avatar' => 'https://i.pravatar.cc/150?u=sara'
            ],
            [
                'text' => 'پلاسمای تولید شده در این مرکز با بالاترین استانداردهای بین‌المللی مطابق دارد. این محصولات حیاتی، جان بسیاری از بیماران خاص را نجات می‌دهند.',
                'user' => 'دکتر محمدی',
                'role' => 'متخصص ایمونولوژی',
                'avatar' => 'https://i.pravatar.cc/150?u=mohammadi'
            ],
            [
                'text' => 'اولین تجربه‌ام از اهدای پلاسما بسیار عالی بود. فرآیند آن خیلی راحت‌تر از چیزی بود که فکر می‌کردم و خوشحالم که در این کار خیر سهیم شدم.',
                'user' => 'امیرحسین',
                'role' => 'اهداکننده',
                'avatar' => 'https://i.pravatar.cc/150?u=amir'
            ]
        ];

        $wp_customize->add_setting('tamin_testimonials_list', [
            'default'           => wp_json_encode($default_testimonials),
            'sanitize_callback' => 'tamin_sanitize_json',
        ]);

        $wp_customize->add_control(new Tamin_Repeater_Control($wp_customize, 'tamin_testimonials_list', [
            'label'       => __('لیست نظرات مراجعین', 'tamin-theme'),
            'section'     => 'tamin_faq_section',
            'item_label'  => 'نظر',
            'fields'      => [
                ['id' => 'text', 'label' => 'متن نظر', 'type' => 'textarea'],
                ['id' => 'user', 'label' => 'نام شخص', 'type' => 'text'],
                ['id' => 'role', 'label' => 'نقش / تخصص', 'type' => 'text'],
                ['id' => 'avatar', 'label' => 'عکس (URL)', 'type' => 'image'],
            ]
        ]));

        // SECTION: Blog
        $wp_customize->add_section('tamin_blog_section', [
            'title'    => __('اخبار و مقالات', 'tamin-theme'),
            'panel'    => 'tamin_frontpage_panel',
            'priority' => 60,
        ]);

        $wp_customize->add_setting('tamin_blog_enabled', [
            'default'           => true,
            'sanitize_callback' => 'tamin_sanitize_checkbox',
        ]);
        $wp_customize->add_control('tamin_blog_enabled', [
            'label'    => __('نمایش بخش مقالات', 'tamin-theme'),
            'section'  => 'tamin_blog_section',
            'type'     => 'checkbox',
        ]);

        $wp_customize->add_setting('tamin_blog_title', ['default' => 'اخبار و مقالات', 'sanitize_callback' => 'sanitize_text_field']);
        $wp_customize->add_control('tamin_blog_title', [
            'label'   => __('عنوان بخش', 'tamin-theme'),
            'section' => 'tamin_blog_section',
            'type'    => 'text',
        ]);
        
        $wp_customize->add_setting('tamin_blog_posts_count', [
            'default'           => 6,
            'sanitize_callback' => 'absint',
        ]);
        $wp_customize->add_control('tamin_blog_posts_count', [
            'label'       => __('تعداد مقالات جهت نمایش', 'tamin-theme'),
            'section'     => 'tamin_blog_section',
            'type'        => 'number',
            'input_attrs' => ['min' => 3, 'max' => 12],
        ]);

        // Topbar Notice

        $wp_customize->add_setting('tamin_topbar_notice', [
            'default'           => __('مرکز تامین پلاسما نوژین | اهداکنندگان، سرمایه‌های معنوی و حیات‌بخش کشور', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control('tamin_topbar_notice', [
            'label'    => __('متن اعلان نوار بالایی هدر', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        if (isset($wp_customize->selective_refresh)) {
            $wp_customize->selective_refresh->add_partial('tamin_topbar_notice', [
                'selector'            => '#topbar-notice-text',
                'render_callback'     => function() {
                    return esc_html(get_theme_mod('tamin_topbar_notice'));
                },
                'container_inclusive' => false,
            ]);
            $wp_customize->selective_refresh->add_partial('tamin_footer_about', [
                'selector'            => '#footer-about-text',
                'render_callback'     => function() {
                    return esc_html(get_theme_mod('tamin_footer_about'));
                },
                'container_inclusive' => false,
            ]);
        }

        // Header Phone Number
        $wp_customize->add_setting('tamin_phone_number', [
            'default'           => '۰۲۱-۴۹۳۶۱۳۱۸',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_phone_number', [
            'label'    => __('شماره تلفن پشتیبانی هدر', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        // Header Work Hours
        $wp_customize->add_setting('tamin_work_hours', [
            'default'           => __('شنبه تا پنج‌شنبه: ۸:۰۰ الی ۲۰:۰۰', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_work_hours', [
            'label'    => __('ساعات کاری مرکز', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        // Header CTA Text & URL
        $wp_customize->add_setting('tamin_cta_button_text', [
            'default'           => __('درخواست نوبت اهدا', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_cta_button_text', [
            'label'    => __('متن دکمه درخواست اهدا', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'text',
        ]);

        $wp_customize->add_setting('tamin_cta_button_url', [
            'default'           => '/request',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_cta_button_url', [
            'label'    => __('لینک دکمه درخواست اهدا (انتخاب برگه)', 'tamin-theme'),
            'section'  => 'tamin_header_section',
            'type'     => 'dropdown-pages',
        ]);

        // SECTION 2: Footer & Contact Settings
        $wp_customize->add_section('tamin_footer_section', [
            'title'    => __('تنظیمات فوتر و ارتباطات', 'tamin-theme'),
            'panel'    => 'tamin_theme_options',
            'priority' => 20,
        ]);

        // Footer About Text
        $wp_customize->add_setting('tamin_footer_about', [
            'default'           => __('مرکز تامین پلاسما نوژین، با بهره‌گیری از تکنولوژی‌های روز دنیا و کادری متخصص، متعهد به تامین فرآورده‌های پلاسمایی با کیفیت برای نجات جان بیماران و ارتقای سلامت جامعه است.', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);
        $wp_customize->add_control('tamin_footer_about', [
            'label'    => __('متن معرفی کوتاه فوتر', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'textarea',
        ]);

        // Footer Address
        $wp_customize->add_setting('tamin_footer_address', [
            'default'           => __('تهران، خیابان ولیعصر، بالاتر از میدان ونک، پلاک ۱۹۳۶', 'tamin-theme'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('tamin_footer_address', [
            'label'    => __('آدرس متنی در فوتر', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'text',
        ]);

        // Social Networks
        $wp_customize->add_setting('tamin_social_telegram', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_telegram', [
            'label'    => __('لینک تلگرام', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        $wp_customize->add_setting('tamin_social_instagram', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_instagram', [
            'label'    => __('لینک اینستاگرام', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        $wp_customize->add_setting('tamin_social_linkedin', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_linkedin', [
            'label'    => __('لینک لینکدین', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        $wp_customize->add_setting('tamin_social_aparat', [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_social_aparat', [
            'label'    => __('لینک آپارات', 'tamin-theme'),
            'section'  => 'tamin_footer_section',
            'type'     => 'url',
        ]);

        // SECTION 4: Section Button & Page Links
        $wp_customize->add_section('tamin_links_section', [
            'title'    => __('تنظیمات لینک‌ها و دکمه‌های سکشن‌های صفحه اصلی', 'tamin-theme'),
            'panel'    => 'tamin_theme_options',
            'priority' => 25,
        ]);

        // About Section Button Link
        $wp_customize->add_setting('tamin_about_url', [
            'default'           => '/about',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_about_url', [
            'label'    => __('لینک دکمه «اطلاعات بیشتر» سکشن درباره ما', 'tamin-theme'),
            'section'  => 'tamin_links_section',
            'type'     => 'dropdown-pages',
        ]);

        // Plasma Info Button Link
        $wp_customize->add_setting('tamin_plasma_info_url', [
            'default'           => '/plasma-info',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_plasma_info_url', [
            'label'    => __('لینک دکمه «اهدای پلاسما» و نحوه اهدا', 'tamin-theme'),
            'section'  => 'tamin_links_section',
            'type'     => 'dropdown-pages',
        ]);

        // Units Page Link
        $wp_customize->add_setting('tamin_units_url', [
            'default'           => '/units',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_units_url', [
            'label'    => __('لینک صفحه مراکز اهدا (واحدها)', 'tamin-theme'),
            'section'  => 'tamin_links_section',
            'type'     => 'dropdown-pages',
        ]);

        // Booking Request CTA Link
        $wp_customize->add_setting('tamin_request_url', [
            'default'           => '/request',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_request_url', [
            'label'    => __('لینک دکمه درخواست نوبت اهدا (هدر و بنر CTA)', 'tamin-theme'),
            'section'  => 'tamin_links_section',
            'type'     => 'dropdown-pages',
        ]);

        // Blog Archive Link
        $wp_customize->add_setting('tamin_blog_url', [
            'default'           => '/blog',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_blog_url', [
            'label'    => __('لینک «مشاهده همه مقالات و اخبار»', 'tamin-theme'),
            'section'  => 'tamin_links_section',
            'type'     => 'dropdown-pages',
        ]);

        // Policy Page Link
        $wp_customize->add_setting('tamin_policy_url', [
            'default'           => '/policy',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_policy_url', [
            'label'    => __('لینک صفحه خط مشی (فوتر)', 'tamin-theme'),
            'section'  => 'tamin_links_section',
            'type'     => 'dropdown-pages',
        ]);

        // Contact / FAQ Page Link
        $wp_customize->add_setting('tamin_contact_url', [
            'default'           => '/contact',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control('tamin_contact_url', [
            'label'    => __('لینک برگه «تماس با ما / سوالات متداول»', 'tamin-theme'),
            'section'  => 'tamin_links_section',
            'type'     => 'text',
        ]);

        // SECTION 3: Branding Colors
        $wp_customize->add_section('tamin_colors_section', [
            'title'    => __('تنظیمات رنگ‌بندی و برندینگ', 'tamin-theme'),
            'panel'    => 'tamin_theme_options',
            'priority' => 30,
        ]);

        $wp_customize->add_setting('tamin_primary_color', [
            'default'           => '#eaa824',
            'sanitize_callback' => 'sanitize_hex_color',
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tamin_primary_color', [
            'label'    => __('رنگ اصلی برند (Primary Yellow/Gold)', 'tamin-theme'),
            'section'  => 'tamin_colors_section',
        ]));

        $wp_customize->add_setting('tamin_secondary_color', [
            'default'           => '#172635',
            'sanitize_callback' => 'sanitize_hex_color',
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'tamin_secondary_color', [
            'label'    => __('رنگ ثانویه برند (Dark Blue/Navy)', 'tamin-theme'),
            'section'  => 'tamin_colors_section',
        ]));
    }
}
add_action('customize_register', 'tamin_customize_register');
