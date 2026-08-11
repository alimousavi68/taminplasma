<?php defined('ABSPATH') || exit; ?>
<!-- ============================================
    FAQ & CONTACT SECTION — Dynamic Version
============================================ -->
<?php
$contact_post_id = get_the_ID();
$meta = get_post_meta($contact_post_id);
$get_val = function($key) use ($meta) {
    return isset($meta[$key]) && $meta[$key][0] !== '' ? $meta[$key][0] : '';
};

$faq_badge    = $get_val('_tamin_contact_faq_badge');
$faq_title    = $get_val('_tamin_contact_faq_title');
$faq_subtitle = $get_val('_tamin_contact_faq_subtitle');
$faq_desc     = $get_val('_tamin_contact_faq_desc');
$faq_link_text = $get_val('_tamin_contact_faq_link_text');
$faq_link_url  = $get_val('_tamin_contact_faq_link_url');
$faq_json     = $get_val('_tamin_contact_faq_list');
$faq_items    = $faq_json ? json_decode($faq_json, true) : [];
if (!is_array($faq_items)) $faq_items = [];

$support_badge   = $get_val('_tamin_contact_support_badge');
$support_title1  = $get_val('_tamin_contact_support_title1');
$support_title2  = $get_val('_tamin_contact_support_title2');
$support_desc    = $get_val('_tamin_contact_support_desc');
$support_image   = $get_val('_tamin_contact_support_image');
?>
<section class="w-full bg-white py-16 lg:py-24 relative overflow-hidden" id="faq-contact-section">
    <div class="container mx-auto px-4 lg:max-w-[1170px] relative z-10">

        <?php if (!empty($faq_title) || !empty($faq_items)) : ?>
        <!-- Row 1: FAQ Section -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start mb-20 lg:mb-32">
            
            <!-- Right Column: Text Content -->
            <div class="lg:col-span-5 space-y-6">
                <?php if (!empty($faq_badge)) : ?>
                <div class="inline-block border border-neutral-300 rounded-full px-4 py-1.5 bg-white/40 backdrop-blur-sm">
                    <span class="text-[11px] lg:text-xs font-sans tracking-[0.1em] text-neutral-800 font-bold uppercase"><?php echo esc_html($faq_badge); ?></span>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($faq_title)) : ?>
                <h2 class="text-[var(--color-secondary)] font-black text-3xl lg:text-4xl leading-tight"><?php echo esc_html($faq_title); ?></h2>
                <?php endif; ?>
                <?php if (!empty($faq_subtitle)) : ?>
                <h3 class="text-neutral-900 font-bold text-lg lg:text-xl"><?php echo esc_html($faq_subtitle); ?></h3>
                <?php endif; ?>
                <?php if (!empty($faq_desc)) : ?>
                <p class="text-neutral-700 text-sm lg:text-base leading-relaxed text-justify"><?php echo esc_html($faq_desc); ?></p>
                <?php endif; ?>
                
                <?php if (!empty($faq_link_text)) : ?>
                <div class="pt-4">
                    <a href="<?php echo esc_url($faq_link_url); ?>" class="inline-flex items-center gap-4 group">
                        <span class="font-bold text-neutral-800 group-hover:text-[var(--color-secondary)] transition-colors"><?php echo esc_html($faq_link_text); ?></span>
                        <span class="w-10 h-10 rounded-full border border-neutral-300 flex items-center justify-center group-hover:bg-primary group-hover:border-[var(--color-primary)] transition-all duration-300 shadow-sm group-hover:shadow-md">
                            <i class="fa-solid fa-arrow-left text-sm transform group-hover:-translate-x-1 transition-transform duration-300"></i>
                        </span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <?php if (!empty($faq_items)) : ?>
            <!-- Left Column: FAQ Accordion -->
            <div class="lg:col-span-7 space-y-4">
                <?php foreach ($faq_items as $fi => $item) : ?>
                <div class="bg-white rounded-2xl p-2 shadow-sm border border-neutral-100 faq-item <?php echo $fi === 0 ? 'active' : ''; ?> transition-all duration-300" onclick="toggleFaq(this)">
                    <button class="w-full flex items-center justify-between p-4 text-right">
                        <span class="font-bold text-neutral-900 text-base lg:text-lg"><?php echo esc_html($item['question'] ?? ''); ?></span>
                        <div class="w-8 h-8 rounded-full bg-[var(--color-bg-section)] flex items-center justify-center <?php echo $fi === 0 ? 'text-[var(--color-secondary)] rotate-180' : 'text-neutral-400'; ?> shrink-0 transition-transform duration-300 icon-container">
                            <i class="fa-solid fa-chevron-down text-sm"></i>
                        </div>
                    </button>
                    <div class="px-4 pb-4 text-neutral-600 text-sm lg:text-base leading-relaxed content-container <?php echo $fi === 0 ? 'block' : 'hidden'; ?>">
                        <?php echo esc_html($item['answer'] ?? ''); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Row 2: Contact & Support Section -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Right Column: Contact Form Card -->
            <div class="lg:col-span-6 lg:order-last">
                <div class="bg-white rounded-[2.5rem] p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-neutral-100">
                    <form id="tamin-contact-form" class="space-y-5" onsubmit="handleContactAjaxSubmit(event)">
                        <input type="text" name="website_hp" style="display:none !important; opacity:0; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">
                        <div id="contact-form-response" class="hidden p-4 rounded-2xl text-xs font-bold transition-all"></div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <input type="text" name="fullname" placeholder="<?php esc_attr_e('نام و نام خانوادگی', 'tamin-theme'); ?>" class="w-full px-5 py-4 rounded-2xl bg-[var(--color-bg-section)] border border-transparent focus:border-[var(--color-secondary)] focus:bg-white focus:outline-none transition-all text-sm font-medium" required>
                            <input type="tel" name="phone" placeholder="<?php esc_attr_e('شماره تماس', 'tamin-theme'); ?>" class="w-full px-5 py-4 rounded-2xl bg-[var(--color-bg-section)] border border-transparent focus:border-[var(--color-secondary)] focus:bg-white focus:outline-none transition-all text-sm font-medium text-right" dir="rtl" required>
                        </div>
                        
                        <input type="email" name="email" placeholder="<?php esc_attr_e('ایمیل', 'tamin-theme'); ?>" class="w-full px-5 py-4 rounded-2xl bg-[var(--color-bg-section)] border border-transparent focus:border-[var(--color-secondary)] focus:bg-white focus:outline-none transition-all text-sm font-medium text-right" dir="rtl">
                        
                        <div class="relative">
                            <select name="subject" class="w-full px-5 py-4 rounded-2xl bg-[var(--color-bg-section)] border border-transparent focus:border-[var(--color-secondary)] focus:bg-white focus:outline-none transition-all text-sm font-medium appearance-none text-neutral-500 cursor-pointer">
                                <option value="درخواست ثبت ایده" selected><?php esc_html_e('درخواست ثبت ایده', 'tamin-theme'); ?></option>
                                <option value="ثبت ایده دارویی"><?php esc_html_e('ثبت ایده دارویی', 'tamin-theme'); ?></option>
                                <option value="ثبت ایده زیست‌فناوری"><?php esc_html_e('ثبت ایده زیست‌فناوری', 'tamin-theme'); ?></option>
                                <option value="شتاب‌دهی و سرمایه‌گذاری"><?php esc_html_e('شتاب‌دهی و سرمایه‌گذاری', 'tamin-theme'); ?></option>
                                <option value="سایر درخواست‌ها"><?php esc_html_e('سایر درخواست‌ها', 'tamin-theme'); ?></option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute left-5 top-1/2 -translate-y-1/2 text-neutral-400 text-xs pointer-events-none"></i>
                        </div>
                        
                        <textarea name="message" placeholder="<?php esc_attr_e('پیام شما...', 'tamin-theme'); ?>" rows="4" class="w-full px-5 py-4 rounded-2xl bg-[var(--color-bg-section)] border border-transparent focus:border-[var(--color-secondary)] focus:bg-white focus:outline-none transition-all text-sm font-medium resize-none" required></textarea>
                        
                        <button type="submit" id="contact-submit-btn" class="w-full bg-primary hover:bg-[var(--color-primary-dark)] text-neutral-900 font-bold py-4 rounded-2xl transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 cursor-pointer">
                            <span><?php esc_html_e('ثبت اطلاعات', 'tamin-theme'); ?></span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Left Column: Support Text & Image -->
            <div class="lg:col-span-6 space-y-8 lg:pr-8">
                <div class="space-y-6">
                    <?php if (!empty($support_badge)) : ?>
                    <div class="inline-block border border-neutral-300 rounded-full px-4 py-1.5 bg-white/40 backdrop-blur-sm">
                        <span class="text-[11px] lg:text-xs font-sans tracking-[0.1em] text-neutral-800 font-bold uppercase"><?php echo esc_html($support_badge); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($support_title1) || !empty($support_title2)) : ?>
                    <h2 class="text-[var(--color-secondary)] font-black text-3xl lg:text-4xl leading-tight">
                        <?php echo esc_html($support_title1); ?>
                        <?php if (!empty($support_title2)) : ?>
                        <br class="hidden lg:block">
                        <span class="text-neutral-900"><?php echo esc_html($support_title2); ?></span>
                        <?php endif; ?>
                    </h2>
                    <?php endif; ?>
                    <?php if (!empty($support_desc)) : ?>
                    <p class="text-neutral-700 text-sm lg:text-base leading-relaxed text-justify max-w-md"><?php echo esc_html($support_desc); ?></p>
                    <?php endif; ?>
                </div>
                
                <?php if (!empty($support_image)) : ?>
                <div class="relative rounded-[2.5rem] overflow-hidden aspect-[4/3] shadow-lg border-4 border-white">
                    <img src="<?php echo esc_url($support_image); ?>" alt="<?php echo esc_attr($support_title1); ?>" class="w-full h-full object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                </div>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>

<script>
function toggleFaq(element) {
    const allItems = document.querySelectorAll('.faq-item');
    const content = element.querySelector('.content-container');
    const icon = element.querySelector('.icon-container');
    const isCurrentlyActive = element.classList.contains('active');

    allItems.forEach(item => {
        item.classList.remove('active', 'border-[var(--color-secondary)]/30', 'shadow-md');
        item.classList.add('border-neutral-100', 'shadow-sm');
        item.querySelector('.content-container').classList.add('hidden');
        item.querySelector('.content-container').classList.remove('block');
        item.querySelector('.icon-container').classList.remove('rotate-180', 'text-[var(--color-secondary)]');
        item.querySelector('.icon-container').classList.add('text-neutral-400');
    });

    if (!isCurrentlyActive) {
        element.classList.add('active', 'border-[var(--color-secondary)]/30', 'shadow-md');
        element.classList.remove('border-neutral-100', 'shadow-sm');
        content.classList.remove('hidden');
        content.classList.add('block');
        icon.classList.add('rotate-180', 'text-[var(--color-secondary)]');
        icon.classList.remove('text-neutral-400');
    }
}

function handleContactAjaxSubmit(e) {
    e.preventDefault();
    const form = e.target;
    const btn = document.getElementById('contact-submit-btn');
    const respBox = document.getElementById('contact-form-response');
    if (!form || !btn || !respBox) return;

    btn.disabled = true;
    btn.classList.add('opacity-50');
    respBox.classList.add('hidden');

    const formData = new FormData(form);
    formData.append('action', 'tamin_submit_contact');
    formData.append('nonce', typeof tamin_ajax !== 'undefined' ? tamin_ajax.nonce : '');
    const ajaxUrl = typeof tamin_ajax !== 'undefined' ? tamin_ajax.ajax_url : '/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, { method: 'POST', body: formData })
    .then(res => res.json())
    .then(data => {
        btn.disabled = false;
        btn.classList.remove('opacity-50');
        respBox.classList.remove('hidden');
        if (data.success) {
            respBox.className = 'p-4 rounded-2xl text-xs font-bold bg-emerald-50 text-emerald-800 border border-emerald-200 block';
            respBox.textContent = data.data.message;
            form.reset();
        } else {
            respBox.className = 'p-4 rounded-2xl text-xs font-bold bg-rose-50 text-rose-800 border border-rose-200 block';
            respBox.textContent = data.data ? data.data.message : 'خطایی رخ داد.';
        }
    })
    .catch(() => {
        btn.disabled = false;
        btn.classList.remove('opacity-50');
        respBox.classList.remove('hidden');
        respBox.className = 'p-4 rounded-2xl text-xs font-bold bg-rose-50 text-rose-800 border border-rose-200 block';
        respBox.textContent = 'خطای ارتباط با سرور. لطفاً مجدداً تلاش کنید.';
    });
}
</script>
