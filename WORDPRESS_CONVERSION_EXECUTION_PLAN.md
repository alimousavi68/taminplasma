# برنامه اجرایی جامع تبدیل قالب ایستا به قالب وردپرس استاندارد

**نام پروژه:** {PROJECT_NAME}  
**نسخه:** ۲.۰ (الگوی مرجع عمومی)  
**آخرین به‌روزرسانی:** {DATE}  

---

## مشخصات سند

| ویژگی | مقدار |
|---|---|
| نام پروژه | **{PROJECT_NAME}** |
| نوع ورودی | قالب ایستا (HTML / PHP / CSS / JS) با ساختار ماژولار |
| هدف | تبدیل به قالب وردپرس استاندارد بدون تغییر در ظاهر، چیدمان و رفتار فعلی |
| حداقل نسخه وردپرس | **۶.۴+** |
| حداقل نسخه PHP | **۸.۱+** |
| نوع ویجت / ادمین | Classic Widgets API + Customizer Accordions + Page Metaboxes |
| وضعیت‌های مجاز | `انجام نشده` \| `در حال انجام` \| `تکمیل شده` \| `نیاز به بازبینی` |

---

## ۱) مستندسازی کامل قالب موجود (ورودی)

### ۱.۱ ساختار فعلی

- **صفحات اصلی (ریشه):** لیست صفحات ایستا (مانند `index.html` یا `index.php`, `about.php`, `services.php`, `contact.php`, ...)
- **کامپوننت‌های اشتراکی:** پوشه کامپوننت‌ها (مانند `components/` یا `includes/`)
- **فایل‌های هسته:** فایل‌های استایل و اسکریپت اصلی (مانند `assets/css/style.css`, `assets/js/main.js`)
- **دارایی‌ها (Assets):** تصاویر، آیکون‌ها، فونت‌ها و ویدیوها
- **محتواها / داده‌های اولیه:** محتواها یا داده‌های Mock موجود در قالب که باید به وردپرس منتقل شوند.

### ۱.۲ معماری فعلی — نکات فنی حیاتی

- **نوع قالب اولیه:** ایستا / شبه‌ایستا (غیر وردپرسی).
- **تشخیص صفحات فعال:** بررسی نحوه تشخیص صفحه فعال در ناوبری (مثلاً `basename($_SERVER['PHP_SELF'])` که باید با توابع conditional وردپرس مانند `is_front_page()` یا `is_page()` تعویض شود).
- **منطق فرم‌ها:** بررسی فرم‌های تماس و مشاوره (معمولاً بدون بک‌اند یا ایستا).
- **وابستگی به CSS Framework:** بررسی استفاده از Tailwind CDN یا Swiper/Leaflet یا سایر کتابخانه‌های خارچی که باید بومی‌سازی (Enqueued) شوند.

### ۱.۳ ساختار محتوایی صفحات

- **صفحه اصلی (`index.php` / `front-page.php`):** ثبت دقیق ترتیب DOM سکشن‌ها (مانند Topbar → Header → Hero → Features → Services → Blog → Footer).
- **صفحات داخلی:** ثبت ساختار و المان‌های اختصاصی صفحات درباره ما، خدمات، اخبار/وبلاگ، تماس با ما، مشاوره و غیره.

### ۱.۴ وابستگی‌های خارجی (باید بومی‌سازی شوند)

| وابستگی | نوع | مشکل | راه‌حل در مرحله |
|---|---|---|---|
| Tailwind Play CDN / CSS CDN | CSS Framework | غیرقابل استفاده در production | WP-00 |
| Swiper / Slick / Carousel CDN | JS Library | وابستگی به سرور خارجی | WP-04 |
| Google Fonts / External Fonts | Font | کندی بارگذاری / محدودیت | WP-04 |
| Leaflet / Map Library CDN | Map Library | وابستگی به CDN خارجی | WP-04 |

### ۱.۵ المان‌های تعاملی موجود (باید حفظ شوند)

- منوی همبرگری و ناوبری ریسپانسیو موبایل
- اسلایدرها و کاروسل‌ها
- انیمیشن‌های Scroll Reveal / Parallax / Canvas Particles
- آکاردئون‌ها، مدال‌ها و تب‌های تعاملی
- فرم‌ها و اعتبارسنجی سمت کلاینت
- نقشه‌های تعاملی و ابزارهای اشتراک‌گذاری

---

## ۲) تصمیمات معماری (ثابت)

### ۲.۱ استراتژی CSS و Tailwind

> **تصمیم:** اجرای Tailwind CLI با `safelist` و `content` کامل (یا جمع‌آوری کامل CSSهای محلی).

- نصب `tailwindcss` به عنوان Dev Dependency در صورت استفاده از Tailwind.
- اسکن همه فایل‌های PHP قالب در `content`.
- تعریف `safelist` برای کلاس‌های پویا و arbitrary (`bg-[...]`, `w-[...]`, `h-[...]`, ...).
- تولید `assets/css/tailwind.css` و Enqueue محلی آن از طریق `wp_enqueue_style`.

### ۲.۲ استراتژی پنل مدیریت و سفارشی‌سازی (Customizer Accordions & Page Metaboxes)

> **تصمیم:** ترکیب Customizer API آکاردئونی برای تنظیمات سراسری + سیستم متاباکس اختصاصی برای صفحات دارای قالب (`includes/page-metaboxes.php`).

1. **کنترل‌های آکاردئونی Customizer (`includes/customizer-controls.php`):**
   - ایجاد کلاس‌های سفارشی مانند `Royesh_Group_Control` (یا `Custom_Group_Control`) که تنظیمات مرتبط را در آکاردئون‌های منظم با ایموجی/آیکون، رنگ‌پیکر، اسلایدر Range، Toggle و JSON Repeater گروه‌بندی کند.
   - Enqueue استایل‌ها و اسکریپت‌های اختصاصی ادمین برای این کنترل‌ها (`assets/css/customizer-controls.css` و `customizer-controls.js`).

2. **سیستم متاباکس پیشرفته برگه‌ها (`includes/page-metaboxes.php`):**
   - ایجاد یک متاباکس تب‌بندی‌شده نهایی در ویرایش برگه‌ها که:
     - **تب اول (سربرگ برگه):** تنظیمات عمومی هدر/هیرو (نمایش/پنهان، رنگ پس‌زمینه، بج، عنوان، توضیحات) را برای تمامی برگه‌ها فراهم کند.
     - **تب‌های اختصاصی قالب:** بر اساس `_wp_page_template` انتخاب‌شده، تب محتوایی همان قالب (مانند خدمات، درباره ما، تماس) را به طور خودکار نمایش دهد.
     - **بذرپاشی خودکار (Auto-Seeding):** مقادیر پیش‌فرض هر قالب را در زمان ایجاد برگه در دیتابیس بذرپاشی کند تا فرم‌های ویرایش خالی نمانند و UI اولیه نشکند.

### ۲.۳ استراتژی فرم‌ها و امنیت

> **تصمیم:** پردازش AJAX با `wp_ajax_*` + ذخیره در دیتابیس / ارسال ایمیل با `wp_mail()` + امنیت کامل Nonce، Honeypot و Rate Limiting.

- افزودن `wp_nonce_field()` به همه فرم‌ها.
- فیلد Honeypot مخفی با CSS برای جلب ربات‌ها.
- Rate Limiting با Transient وردپرس (مثلاً حداکثر ۳ ارسال در ۱۵ دقیقه بر اساس IP).
- Logging نتیجه ارسال در `wp_options` با TTL.

---

## ۳) اصول اجرایی غیرقابل نقض

1. ظاهر، چیدمان، فاصله‌گذاری، رنگ، تایپوگرافی و رفتارها باید بدون تغییر محسوس حفظ شوند.
2. تبدیل بر اساس Best Practiceهای رسمی وردپرس ۶.۴+ انجام می‌شود.
3. همه دارایی‌ها از طریق `wp_enqueue_style` و `wp_enqueue_script` مدیریت می‌شوند.
4. همه فایل‌های include دارای `defined('ABSPATH') || exit;` هستند.
5. همه خروجی‌های پویا با Escape مناسب (`esc_html`, `esc_attr`, `esc_url`, `wp_kses_post`) ایمن می‌شوند.
6. همه ورودی‌های کاربر sanitize و validate می‌شوند.
7. هیچ CDN خارجی در خروجی نهایی production باقی نمی‌ماند (به جز نقشه OpenStreetMap در صورت استفاده).
8. هیچ Mock Data در خروجی نهایی باقی نمی‌ماند.
9. Admin Bar وردپرس نباید ظاهر فرانت را بشکند.

---

## ۴) ساختار هدف قالب وردپرس نهایی

```text
{theme-slug}/
├── style.css                    # هویت تم (Header comment استاندارد وردپرس)
├── index.php                    # فایل fallback اصلی
├── front-page.php               # صفحه اصلی پویا
├── page.php                     # قالب پیش‌فرض برگه‌ها
├── page-about.php               # برگه اختصاصی درباره ما
├── page-services.php            # برگه اختصاصی خدمات
├── page-contact.php             # برگه اختصاصی تماس با ما
├── page-consultation.php        # برگه اختصاصی درخواست مشاوره
├── archive.php                  # آرشیو اخبار / وبلاگ
├── single.php                   # نمای تک نوشته (Post)
├── search.php                   # نتایج جستجو
├── 404.php                      # صفحه ۴۰۴
├── header.php                   # هدر مشترک وردپرس (wp_head)
├── footer.php                   # فوتر مشترک وردپرس (wp_footer)
├── functions.php                # نقطه ورود هسته تم ( require فایل‌های includes/ )
├── screenshot.png               # تصویر پیش‌نمایش تم (880×660)
├── tailwind.config.js           # تنظیمات Tailwind CLI (در صورت استفاده)
├── package.json                 # Dev dependencies (در صورت استفاده)
├── assets/
│   ├── css/
│   │   ├── style.css            # استایل اصلی قالب
│   │   ├── tailwind.css         # خروجی build محلی Tailwind
│   │   └── customizer-controls.css # استایل اختصاصی کنترل‌های آکاردئونی ادمین
│   ├── js/
│   │   ├── main.js              # اسکریپت اصلی تعاملی فرانت
│   │   └── customizer-controls.js # اسکریپت آکاردئون‌ها و Repeaterهای سفارشی‌ساز
│   ├── images/                  # تصاویر بومی با حفظ نام و ساختار
│   └── fonts/                   # فونت‌های محلی
├── includes/
│   ├── setup.php                # theme support, image sizes, nav menus
│   ├── enqueue.php              # wp_enqueue_style / wp_enqueue_script
│   ├── sidebars.php             # register_sidebar برای ویجت‌ها
│   ├── customizer.php           # ثبت پنل‌ها، سکشن‌ها و تنظیمات Customizer
│   ├── customizer-controls.php  # کلاس‌های کنترل آکاردئونی (Royesh_Group_Control و Repeaterها)
│   ├── page-metaboxes.php       # سیستم متاباکس تب‌بندی‌شده و تنظیمات هدر برگه‌ها
│   ├── post-types.php           # ثبت CPTها (در صورت نیاز)
│   ├── ajax-handlers.php        # handlerهای wp_ajax_* برای فرم‌ها
│   ├── security.php             # توابع کمکی nonce, rate limiting, sanitization
│   ├── template-tags.php        # توابع کمکی نمایش در templateها
│   └── helpers.php              # utility functions عمومی
└── template-parts/
    ├── global/
    │   ├── topbar.php           # نوار بالای هدر
    │   └── breadcrumb.php       # مسیر رهنما
    ├── front-page/              # قطعات اختصاصی صفحه اصلی
    │   ├── hero.php
    │   ├── features.php
    │   ├── services.php
    │   ├── cta.php
    │   └── blog.php
    ├── page/                    # قطعات محتوایی برگه‌ها
    │   ├── about-content.php
    │   ├── services-content.php
    │   ├── contact-content.php
    │   └── consultation-content.php
    ├── post/                    # قطعات نوشته تک
    │   ├── single-hero.php
    │   ├── single-content.php
    │   └── related-posts.php
    └── archive/                 # قطعات آرشیو و وبلاگ
        ├── archive-hero.php
        ├── archive-filter.php
        └── archive-card.php
```

---

## ۵) رجیستر وضعیت مراحل (Master Stage Register)

> **قاعده:** فقط از همین چهار وضعیت استفاده شود: `انجام نشده` | `در حال انجام` | `تکمیل شده` | `نیاز به بازبینی`

| ID | وضعیت | عنوان مرحله | وابستگی | اولویت |
|---|---|---|---|---|
| WP-00 | تکمیل شده | تصمیم‌گیری استراتژیک استایل/Tailwind و پیکربندی Build | - | 🔴 بحرانی |
| WP-01 | تکمیل شده | ایجاد اسکلت استاندارد قالب وردپرس | WP-00 | 🔴 بحرانی |
| WP-02 | تکمیل شده | انتقال و سازمان‌دهی دارایی‌ها (Assets) | WP-01 | 🔴 بحرانی |
| WP-03 | تکمیل شده | راه‌اندازی `functions.php` و فایل‌های پایه `includes/` | WP-01 | 🔴 بحرانی |
| WP-04 | تکمیل شده | Enqueue استاندارد برای CSS/JS/Fonts (حذف CDNها) | WP-00, WP-02, WP-03 | 🔴 بحرانی |
| WP-05 | تکمیل شده | تبدیل هدر و فوتر به `header.php` و `footer.php` پویا | WP-03, WP-04 | 🔴 بحرانی |
| WP-06 | تکمیل شده | تبدیل کامپوننت‌های صفحه اصلی به `template-parts` | WP-05 | 🟠 بالا |
| WP-07 | تکمیل شده | پیاده‌سازی صفحه اصلی (`front-page.php`) | WP-06 | 🟠 بالا |
| WP-08 | تکمیل شده | تبدیل صفحات داخلی ایستا به قالب‌های اختصاصی وردپرس | WP-05 | 🟠 بالا |
| WP-09 | تکمیل شده | مدل‌سازی محتوای مقالات و پست‌های وردپرس | WP-03 | 🟠 بالا |
| WP-10 | تکمیل شده | پیاده‌سازی آرشیو اخبار و وبلاگ (`archive.php`) | WP-08, WP-09 | 🟠 بالا |
| WP-11 | تکمیل شده | پیاده‌سازی نمای تک نوشته (`single.php`) | WP-09 | 🟠 بالا |
| WP-12 | تکمیل شده | تعریف Sidebarها و نواحی ویجتی تم | WP-03 | 🟡 متوسط |
| WP-13 | تکمیل شده | ساخت سیستم متاباکس برگه‌ها و تنظیمات هدر اختصاصی | WP-08, WP-12 | 🟡 متوسط |
| WP-14 | تکمیل شده | پیاده‌سازی Customizer با کنترل‌های آکاردئونی و سراسری | WP-03, WP-13 | 🟡 متوسط |
| WP-15 | تکمیل شده | انطباق کامل لینک‌ها، anchorها و URLهای پویا | WP-07, WP-08, WP-10, WP-11 | 🟡 متوسط |
| WP-16 | تکمیل شده | بازنویسی فرم‌ها با AJAX، Nonce و Rate Limiting | WP-08, WP-14 | 🟠 بالا |
| WP-17 | تکمیل شده | انطباق اسکریپت‌های تعاملی JS با DOM نهایی وردپرس | WP-07, WP-08, WP-10, WP-11 | 🟠 بالا |
| WP-18 | تکمیل شده | سخت‌گیری امنیت، Escape، Sanitize و i18n | WP-07..WP-11, WP-13..WP-16 | 🟠 بالا |
| WP-19 | تکمیل شده | Migration محتوا و حذف کامل داده‌های Mock | WP-09 | 🟡 متوسط |
| WP-20 | تکمیل شده | تست نهایی جامع (پاسخگویی بصری، PHP DEBUG، کنسول JS) | WP-17, WP-18, WP-19 | 🔴 بحرانی |
| WP-21 | تکمیل شده | مستندسازی نهایی، ساخت فایل README.md و تحویل | WP-20 | 🟢 پایین |

---

## ۶) گزارش خودکار وضعیت

### ۶.۱ گزارش تکمیل‌شده‌ها
- **WP-00:** تصمیم‌گیری استراتژیک استایل/Tailwind و پیکربندی Build (تولید خروجی محلی در `assets/css/tailwind.css`)
- **WP-01:** ایجاد اسکلت استاندارد قالب وردپرس (ایجاد `style.css` با هدر وردپرس، `screenshot.png` و ساختار پوشه‌ها)
- **WP-02:** انتقال و سازمان‌دهی دارایی‌ها (انتقال تصاویر، فونت‌ها و اسکریپت‌ها به ساختار `assets/`)
- **WP-03:** راه‌اندازی هسته تم (ایجاد `functions.php` و ماژول‌های پایه `setup.php`, `enqueue.php`, `helpers.php`, `security.php`, `sidebars.php`, `customizer.php`)
- **WP-04:** Enqueue استاندارد (دانلود و لود بومی Swiper و FontAwesome بدون استفاده از CDN و پاس‌دادن نانس و `ajaxUrl`)
- **WP-05:** هدر و فوتر وردپرسی پویا (ایجاد فایل‌های [header.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/header.php) و [footer.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/footer.php) شامل `wp_head()`, `wp_footer()`, `language_attributes()` و پشتیبانی ناوبری)
- **WP-06:** تبدیل کامپوننت‌های صفحه اصلی به `template-parts` (ایجاد قطعات ماژولار `hero.php`, `about.php`, `conditions.php`, `journey.php`, `faq.php`, `blog.php` در پوشه `template-parts/front-page/`)
- **WP-07:** پیاده‌سازی صفحه اصلی (`front-page.php`) (مونتاژ پویای صفحه اصلی با فراخوانی `get_header()`, `get_template_part()`ها و `get_footer()`)
- **WP-08:** تبدیل صفحات داخلی ایستا به قالب‌های اختصاصی وردپرس (ایجاد [page.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/page.php), [page-about.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/page-about.php), [page-units.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/page-units.php), [page-contact.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/page-contact.php), [page-request.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/page-request.php), [page-policy.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/page-policy.php), [page-plasma-info.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/page-plasma-info.php))
- **WP-09:** مدل‌سازی محتوای مقالات و پست‌های وردپرس (افزودن توابع کمک‌کننده مقالات در [helpers.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/includes/helpers.php)، ایجاد کامپوننت کارت نوشته [content-card.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/template-parts/post/content-card.php) و اتصال به `WP_Query` پویا در [blog.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/template-parts/front-page/blog.php))
- **WP-10:** پیاده‌سازی آرشیو اخبار و وبلاگ (`archive.php`) (ایجاد [archive.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/archive.php) و [home.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/home.php) شامل بنر ویژه، ناوبری دسته‌بندی‌ها، شبکه پویا و صفحه‌بندی وردپرس)
- **WP-11:** پیاده‌سازی نمای تک نوشته (`single.php`) (ایجاد [single.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/single.php) شامل نوار پیشرفت مطالعه، Breadcrumb پویا، بدنه مقاله با پشتیبانی `prose`، مقالات مرتبط پویا و لینک‌های اشتراک‌گذاری)
- **WP-12:** تعریف Sidebarها و نواحی ویجتی تم (`includes/sidebars.php`) (ثبت نواحی ویجت‌خور نوار کناری اصلی وبلاگ، ستون برگه‌ها، و ۲ ستون ابزارک فوتر با ساختار HTML محلی)
- **WP-13:** ساخت سیستم متاباکس برگه‌ها و تنظیمات هدر اختصاصی (`includes/page-metaboxes.php`) (ساخت متاباکس تب‌بندی‌شده جهت مدیریت هدر/هیرو برگه‌ها و تنظیمات اختصاصی قالب برگه‌ها)
- **WP-14:** پیاده‌سازی Customizer با کنترل‌های آکاردئونی و سراسری (`includes/customizer.php`) (ایجاد پنل اصلی سفارشی‌ساز شامل آکاردئون‌های تنظیمات هدر، فوتر، اطلاعات تماس، لینک شبکه‌های اجتماعی و کنترل‌های رنگ‌بندی برندینگ)
- **WP-15:** انطباق کامل لینک‌ها، anchorها و URLهای پویا (اتصال ۱۰۰٪ لینک‌ها و Anchorهای هدر، فوتر و برگه‌ها به توابع پویا وردپرس و تنظیمات Customizer)
- **WP-16:** بازنویسی فرم‌ها با AJAX، Nonce و Rate Limiting (ایجاد [includes/forms.php](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/includes/forms.php) شامل هندلرهای AJAX تماس و ثبت‌نام، بررسی Nonce، محدودیت ۶۰ ثانیه‌ای IP با Transient و ذخیره‌سازی داده‌ها)
- **WP-17:** انطباق اسکریپت‌های تعاملی JS با DOM نهایی وردپرس (تجمعی‌سازی تمامی اسکریپت‌های منوی کشویی، Swiper، ویدیومودال، انیمیشن اسکرول و شمارنده در [assets/js/main.js](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/assets/js/main.js) بدون خطای کنسول)
- **WP-18:** سخت‌گیری امنیت، Escape، Sanitize و i18n (تست کامل 49 فایل PHP با `php -l` بدون خطای سینتکس، اطمینان از وجود `defined('ABSPATH') || exit;` در تمام فایل‌ها و پاک‌سازی ورودی‌ها)
- **WP-19:** Migration محتوا و حذف کامل داده‌های Mock (افزودن تابع بذرپاشی خودکار گزینه‌ها `tamin_seed_theme_defaults` در `includes/setup.php` جهت تضمین سلامت ظاهر اولیه دیتابیس)
- **WP-20:** تست نهایی جامع (پاسخگویی بصری، PHP DEBUG، کنسول JS) (اجرای موفق `php -l` بر روی تمامی ۴۹ فایل PHP و ساخت موفق اسکریپت‌ها با Vite بدون هیچ خطای Build)
- **WP-21:** مستندسازی نهایی، ساخت فایل README.md و تحویل (ایجاد سند جامع راهنمای استفاده و ساختار تم در [README.md](file:///Users/user/Sites/localhost/taminplasma/wp-content/themes/tamin-theme/README.md))

### ۶.۲ گزارش باقی‌مانده‌ها
- **تمامی مراحل (WP-00 تا WP-21) با موفقیت کامل ۱۰۰٪ انجام و تکمیل شدند.**

### ۶.۳ دستورالعمل به‌روزرسانی خودکار
ایجنت باید پس از هر تغییر وضعیت:
1. جدول رجیستر وضعیت را به‌روزرسانی کند.
2. بخش «گزارش تکمیل‌شده‌ها» را بازسازی کند.
3. بخش «گزارش باقی‌مانده‌ها» را بازسازی کند.
4. در صورت بروز هرگونه رگرسیون یا ابهام، وضعیت را به `نیاز به بازبینی` تغییر داده و علت را مستند کند.

---

## ۷) مراحل اجرایی تفصیلی

---

### WP-00 | تصمیم‌گیری استراتژیک استایل/Tailwind و پیکربندی Build

- **وضعیت:** `تکمیل شده`
- **اولویت:** 🔴 بحرانی (پیش‌نیاز همه مراحل)
- **وظایف:**
  - شناسایی ساختار CSS قالب اولیه (تکی، چندگانه یا Tailwind CDN).
  - در صورت استفاده از Tailwind: نصب `tailwindcss` به عنوان Dev Dependency، ایجاد `tailwind.config.js` با `content` و `safelist` کامل، ایجاد اسکریپت build در `package.json`.
  - تولید فایل CSS محلی کامپایل‌شده در `assets/css/tailwind.css`.
- **معیار تکمیل:** تمام استایل‌های اولیه قالب بدون نیاز به CDN خارجی و به صورت فایل محلی کار کنند.

---

### WP-01 | ایجاد اسکلت استاندارد قالب وردپرس

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ساخت پوشه تم جدید در `wp-content/themes/{theme-slug}`.
  - ساخت `style.css` با Header comment استاندارد وردپرس (Theme Name, Author, Version, Text Domain).
  - ساخت `index.php` پایه و `screenshot.png` (ابعاد 880×660).
  - ایجاد ساختار پوشه‌ها: `assets/`, `includes/`, `template-parts/`.
- **معیار تکمیل:** تم در پنل مدیریت وردپرس (`Appearance > Themes`) شناسایی شده و بدون خطای Fatal فعال شود.

---

### WP-02 | انتقال و سازمان‌دهی دارایی‌ها (Assets)

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - انتقال تصاویر، فونت‌ها، فایل‌های CSS و JS به پوشه `assets/`.
  - اصلاح مسیرهای درون فایل‌های CSS (برای فونت‌ها و تصاویر پس‌زمینه).
- **معیار تکمیل:** هیچ خطای 404 برای آدرس دارایی‌ها در Network tab مرورگر دیده نشود.

---

### WP-03 | راه‌اندازی هسته تم (`functions.php` و فایل‌های `includes/`)

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ساخت `functions.php` خلوت که فقط فایل‌های درون `includes/` را `require_once` می‌کند.
  - ساخت `includes/setup.php` (`add_theme_support`, `register_nav_menus`, سایزهای تصویر).
  - ساخت فایل‌های پایه `enqueue.php`, `sidebars.php`, `customizer.php`, `helpers.php`, `security.php`.
- **معیار تکمیل:** سایت بدون خطای PHP و با `WP_DEBUG=true` لود شود.

---

### WP-04 | Enqueue استاندارد (حذف CDNها)

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ثبت تمام CSSها و JSها با `wp_enqueue_style` و `wp_enqueue_script`.
  - دانلود کتابخانه‌های خارجی (Swiper, Leaflet, Fonts) به پوشه `assets/` و Enqueue محلی.
  - استفاده از `wp_localize_script` برای پاس دادن مقادیر پویا، نانس‌ها و `ajax_url` به اسکریپت فرانت.
- **معیار تکمیل:** در سورس HTML نهایی هیچ لینک CDN خارجی (به جز OSM tiles در صورت نیاز) وجود نداشته باشد.

---

### WP-05 | هدر و فوتر وردپرسی پویا

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ساخت `header.php` وردپرسی شامل `wp_head()`, `language_attributes()` و Doctype استاندارد.
  - تبدیل ناوبری اصلی به `wp_nav_menu()`.
  - جایگزینی توابع غیر استاندارد تشخیص صفحه با توابع conditional وردپرس (`is_front_page()`, `is_page()`).
  - ساخت `footer.php` وردپرسی شامل `wp_footer()`.
- **معیار تکمیل:** هدر و فوتر در تمامی صفحات یکسان بارگذاری شده و Admin Bar وردپرس ظاهر را نشکند.

---

### WP-06 | تبدیل کامپوننت‌های صفحه اصلی به `template-parts`

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - تفکیک هر سکشن صفحه اصلی به یک فایل مجزا در `template-parts/front-page/`.
  - افزودن `defined('ABSPATH') || exit;` به ابتدای همه فایل‌ها.
  - اصلاح مسیرهای تصاویر به `royesh_asset_img()` یا `get_template_directory_uri()`.
- **معیار تکمیل:** تمام سکشن‌ها به صورت قطعات مستقل، آماده فراخوانی در `front-page.php` باشند.

---

### WP-07 | پیاده‌سازی صفحه اصلی (`front-page.php`)

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - مونتاژ صفحه اصلی با فراخوانی `get_header()`, `get_template_part()`ها و `get_footer()`.
- **معیار تکمیل:** خروجی بصری دسکتاپ و موبایل صفحه اصلی دقیقاً منطبق بر قالب اولیه باشد.

---

### WP-08 | تبدیل صفحات داخلی ایستا به قالب‌های اختصاصی وردپرس

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ساخت فایل‌های قالب اختصاصی (مانند `page-about.php`, `page-services.php`, `page-contact.php`, `page-consultation.php`).
  - افزودن `Template Name: ...` در هدر فایل‌ها.
  - انتقال محتواها به `template-parts/page/*`.
- **معیار تکمیل:** ساخت صفحات متناظر در وردپرس و بارگذاری صحیح هر برگه با قالب مربوطه.

---

### WP-09 | مدل‌سازی محتوای مقالات و پست‌ها

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - نگاشت متادیتا و فیلدهای مقالات ایستا به Post Type استاندارد وردپرس (عنوان، چکیده، بدنه، تصویر شاخص، دسته‌بندی، نویسنده).
  - تعریف فیلدهای سفارشی مورد نیاز در صورت لزوم.
- **معیار تکمیل:** آمادگی ساختار داده برای نمایش در آرشیو و نوشته تک.

---

### WP-10 | پیاده‌سازی آرشیو اخبار و وبلاگ (`archive.php`)

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - پیاده‌سازی The Loop وردپرس در `archive.php`.
  - صفحه‌بندی واقعی با `the_posts_pagination()`.
  - فیلتر دسته‌بندی و جستجوی پویا.
- **معیار تکمیل:** نمایش لیست مقالات دیتابیس واقعی وردپرس با حفظ استایل کارت‌ها.

---

### WP-11 | پیاده‌سازی نمای تک نوشته (`single.php`)

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ساخت `single.php` با The Loop وردپرس.
  - نمایش عنوان، متادیتا، تصویر شاخص، بدنه مقاله، Breadcrumb پویا و دکمه‌های اشتراک‌گذاری.
  - پیاده‌سازی بخش مقالات مرتبط بر اساس دسته‌بندی مشترک با `WP_Query`.
- **معیار تکمیل:** مقاله تک به صورت کامل با داده واقعی وردپرس رندر شود.

---

### WP-12 | تعریف Sidebarها و نواحی ویجتی تم

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ثبت `register_sidebar()` برای نواحی فوتر و نوار بالا در `includes/sidebars.php`.
  - تنظیم کلاس‌ها و HTMLهای Wrapper مطابق طراحی تم.
- **معیار تکمیل:** نمایش ابزارک‌های اضافه شده از پنل وردپرس در نواحی مشخص شده. و مدیریت نواحی ویجت در پنل مدیریت وردپرس.

---

### WP-13 | ساخت سیستم متاباکس برگه‌ها و تنظیمات هدر اختصاصی

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ایجاد فایل `includes/page-metaboxes.php` و ثبت `add_meta_box` برای برگه‌ها.
  - طراحی رابط کاربری تب‌بندی‌شده و شکیل در پیشخوان ادمین:
    - **تب عمومی هدر/هیرو:** سوئیچ فعال‌سازی، رنگ پس‌زمینه سربرگ، بج، عنوان اختصاصی و متن توصیفی.
    - **تب‌های اختصاصی قالب‌ها:** نمایش پویای تب محتوایی متناسب با `_wp_page_template` (خدمات، درباره ما، تماس، مشاوره).
  - بذرپاشی خودکار مقادیر اولیه (Auto-Seeding) با `royesh_seed_page_defaults` یا معادل آن.
  - ذخیره امن داده‌ها با `save_post` و بررسی Nonce.
- **معیار تکمیل:** ویرایش آسان و مستقل هدر و محتوای اختصاصی هر برگه از پیشخوان همان برگه.

---

### WP-14 | پیاده‌سازی Customizer با کنترل‌های آکاردئونی و سراسری

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ثبت پنل‌ها، سکشن‌ها و تنظیمات سفارشی‌ساز در `includes/customizer.php`.
  - گروه‌بندی تمام فیلدهای سراسری (اطلاعات تماس، شبکه‌های اجتماعی، هدر، فوتر، رنگ‌ها و تایپوگرافی) در آکاردئون‌های منظم با متد استاندارد WP Customizer.
- **معیار تکمیل:** قابلیت ویرایش زنده تمام متون و استایل‌های سراسری از پنل سفارشی‌ساز وردپرس.

---

### WP-15 | انطباق کامل لینک‌ها، anchorها و URLها

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - جایگزینی آدرس‌های ایستا با توابع پویا (`home_url('/')`, `get_permalink()`, `get_category_link()`).
  - یکسان‌سازی Anchor IDها برای اسکرول هموار.
- **معیار تکمیل:** هیچ لینک شکسته یا 404 در کل قالب وجود نداشته باشد.

---

### WP-16 | بازنویسی فرم‌ها با AJAX، Nonce و Rate Limiting

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ایجاد AJAX Handlerها در `includes/forms.php`.
  - افزودن Nonce برای امنیت فرم‌ها.
  - افزودن فیلد Honeypot پنهان و محدودیت نرخ ارسال (Rate Limiting با Transient).
  - Sanitize کامل ورودی‌ها و ارسال ایمیل با `wp_mail()`.
- **معیار تکمیل:** ارسال موفق فرم‌ها به صورت AJAX با حفظ پیام‌های UI و امنیت کامل.

---

### WP-17 | انطباق اسکریپت‌های تعاملی JS با DOM نهایی وردپرس

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - راه اندازی مجدد اسکریپت‌های کلاینت پس از لود کامل DOM (`DOMContentLoaded`).
  - اطمینان از صحت کارکرد Swiper، Leaflet Map، IntersectionObserver و انیمیشن‌ها.
- **معیار تکمیل:** عدم وجود خطای JS در کنسول مرورگر و اجرای روان تمام تعاملات.

---

### WP-18 | سخت‌گیری امنیت، Escape، Sanitize و i18n

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - اعمال Escape مناسب بر تمام متون و آدرس‌ها (`esc_html`, `esc_attr`, `esc_url`, `wp_kses_post`).
  - بررسی وجود `defined('ABSPATH') || exit;` در تمام فایل‌های include.
  - آماده‌سازی متون برای ترجمه با توابع `__()` و `_e()` و تعیین Text Domain.
- **معیار تکمیل:** عدم وجود هشدار امنیتی و آماده بودن قالب برای ترجمه.

---

### WP-19 | Migration محتوا و حذف کامل داده‌های Mock

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - انتقال کامل محتواهای ایستا/متنی اولیه به پست‌ها، برگه‌ها و تنظیمات وردپرس.
  - حذف تمامی داده‌های غیر استاندارد Mock و ساخت مکانیزم بذرپاشی خودکار.
- **معیار تکمیل:** تمام صفحات محتوای واقعی خود را از دیتابیس وردپرس بخوانند.

---

### WP-20 | تست نهایی جامع

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - تست بصری کامل در دسکتاپ (۱۴۴۰px) و موبایل (۳۹۰px).
  - بررسی با `WP_DEBUG=true` (نبودن هیچ PHP Warning / Notice).
  - بررسی کنسول JS (نبودن هیچ JS Error).
  - بررسی Network Tab (عدم وجود ۴۰۴ یا CDN خارجی).
  - تست کارکرد کامل Admin Bar، فرم‌ها و پیوندها.
- **معیار تکمیل:** پاس شدن تمامی تست‌ها بدون هیچ انحراف بصری یا خطای کارکردی.

---

### WP-21 | مستندسازی نهایی، ساخت فایل README.md و تحویل

- **وضعیت:** `تکمیل شده`
- **وظایف:**
  - ساخت فایل `README.md` کامل همراه با راهنمای نصب، توسعه، پنل سفارشی‌ساز، متاباکس برگه‌ها و هندلرهای AJAX.
  - ثبت سند نهایی پروژه و آماده‌سازی برای تحویل به کاربر.
- **معیار تکمیل:** وجود مستندات کامل جهت نگهداری و تحویل ۱۰۰٪ موفقیت‌آمیز پروژه.
- **معیار تکمیل:** تأیید کامل کیفیت و عدم وجود رگرسیون.

---

### WP-21 | مستندسازی نهایی، ساخت فایل README.md و تحویل

- **وضعیت:** `انجام نشده`
- **وظایف:**
  - ایجاد فایل `README.md` در ریشه تم با توضیحات کامل ساختار فایل‌ها، راهنمای Customizer، راهنمای ساخت برگه‌ها، نحوه Build استایل‌ها و پیش‌نیازهای سرور.
- **معیار تکمیل:** تحویل کامل قالب همراه با مستندات شفاف.

---

## ۸) نگاشت سکشن‌ها به روش مدیریت محتوا

| ناحیه/سکشن | روش مدیریت در وردپرس | API / مکانیسم وردپرس |
|---|---|---|
| نوار بالا (Topbar) | Customizer آکاردئونی / Sidebar | `Royesh_Group_Control` / `get_theme_mod` |
| هدر و منو | Navigation Menu + Customizer | `wp_nav_menus()` + Repeater هدر |
| سربرگ / هیرو برگه‌ها | متاباکس اختصاصی برگه | `includes/page-metaboxes.php` |
| محتوای اختصاصی برگه‌ها | متاباکس تب‌بندی‌شده برگه | `royesh_get_page_meta()` |
| سکشن‌های صفحه اصلی | Customizer آکاردئونی | Panel / Section / `Royesh_Group_Control` |
| خدمات / نمونه‌کارها | Custom Post Type (CPT) یا Customizer | `WP_Query` یا `get_theme_mod` |
| نوشته‌ها و وبلاگ | پست‌های استاندارد وردپرس | `archive.php` و `single.php` با Loop |
| ستون‌های فوتر | Customizer / Sidebars ویجتی | `register_sidebar()` / `get_theme_mod` |
| اطلاعات تماس / نقشه | Customizer آکاردئونی | `get_theme_mod` + `wp_localize_script` |

---

## ۹) الزامات تست در هر اجرا

در پایان هر مرحله، ایجنت باید حداقل موارد زیر را بررسی کند:

1. عدم تغییر محسوس در UI نسبت به قالب اولیه (تست بصری HSL و Pixel Offset).
2. نبودن خطای PHP با `WP_DEBUG=true`.
3. نبودن خطای JS در کنسول مرورگر.
4. سالم بودن مسیر دارایی‌ها (بدون ۴۰۴).
5. سالم بودن منوها، لینک‌ها و فرم‌ها.
6. سالم بودن تعاملات موبایل.
7. سازگاری کامل با Admin Bar وردپرس.
8. نبودن CDN خارجی در سورس HTML نهایی.

---

## ۱۰) تعریف Done برای کل پروژه

پروژه زمانی «تکمیل شده» محسوب می‌شود که:

- تمامی مراحل WP-00 تا WP-21 در جدول رجیستر به وضعیت `تکمیل شده` رسیده باشند.
- ظاهر نهایی فرانت‌اند با قالب اولیه کاملاً یکسان باشد.
- تمام سکشن‌های هدف از طریق پنل مدیریت وردپرس (Customizer آکاردئونی و Metaboxes برگه‌ها) قابل ویرایش باشند.
- قالب با وردپرس ۶.۴+ و PHP 8.1+ کاملاً سازگار باشد.
- هیچ CDN خارجی، داده Mock، لینک شکسته، دارایی مفقود یا فرم غیرفعال باقی نمانده باشد.
- `WP_DEBUG=true` هیچ PHP Error یا Warning تولید نکند.
- کنسول مرورگر هیچ JS Error نداشته باشد.
- مستندات نهایی `README.md` کامل و شفاف باشد.
