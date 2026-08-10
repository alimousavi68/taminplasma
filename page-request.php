<?php
/**
 * Template Name: درخواست نوبت‌دهی اهدا (Donation Request)
 * Description: Custom multi-step page template for Plasma Donation Booking.
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
  .step-transition {
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .fade-in {
      animation: fadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  @keyframes fadeIn {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
  }
  #step-node-1, #step-node-2, #step-node-3 {
      font-weight: 800;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  .calendar-grid div {
      aspect-ratio: 1 / 1;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      border-radius: 0.75rem;
  }
  .calendar-grid div.pointer-events-none {
      opacity: 0.25;
      background-color: rgba(30, 41, 59, 0.03);
  }
  .calendar-grid div:not(.pointer-events-none) {
      border: 1px solid var(--color-border-subtle);
      background-color: var(--color-bg-surface);
      color: var(--color-text-main);
  }
  .calendar-grid div:not(.pointer-events-none):hover {
      border-color: var(--color-primary);
      background-color: var(--color-bg-warm);
      transform: scale(1.05);
  }
  .calendar-grid div:not(.pointer-events-none).bg-primary {
      background-color: var(--color-primary) !important;
      border-color: var(--color-primary) !important;
      color: var(--color-text-dark) !important;
      box-shadow: 0 4px 15px rgba(255, 217, 112, 0.35) !important;
      transform: scale(1.05);
      font-weight: 800 !important;
  }
  .binary-toggle label {
      background-color: var(--color-bg-base);
      border: 1px solid var(--color-border-subtle);
      color: var(--color-text-muted);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .binary-toggle label:hover {
      border-color: var(--color-primary);
      color: var(--color-text-dark);
  }
  .binary-toggle input:checked + label {
      background-color: var(--color-primary) !important;
      border-color: var(--color-primary) !important;
      color: var(--color-text-dark) !important;
      font-weight: 800;
      transform: scale(1.05);
      box-shadow: 0 4px 15px rgba(255, 217, 112, 0.3);
  }
</style>

<main class="max-w-screen-xl mx-auto px-4 lg:px-12 py-8 lg:py-16 relative z-10" dir="rtl">
    <!-- Progress Indicator -->
    <div class="max-w-3xl mx-auto flex items-center justify-between mb-12 text-[10px] md:text-xs font-black relative px-4">
        <div class="absolute top-1/2 left-0 w-full h-0.5 bg-[var(--color-border-subtle)] -translate-y-1/2 z-0"></div>
        <div id="progress-bar" class="absolute top-1/2 right-0 w-0 h-0.5 bg-primary -translate-y-1/2 z-0 transition-all duration-500"></div>

        <div class="relative z-10 flex flex-col items-center gap-2">
            <div id="step-node-1" class="w-9 h-9 rounded-full flex items-center justify-center bg-primary text-[var(--color-text-main)] shadow-md scale-110 transition-all duration-300">۱</div>
            <span class="text-[var(--color-text-main)]"><?php esc_html_e('سنجش سلامت', 'tamin-theme'); ?></span>
        </div>
        <div class="relative z-10 flex flex-col items-center gap-2">
            <div id="step-node-2" class="w-9 h-9 rounded-full flex items-center justify-center bg-[var(--color-border-subtle)] text-[var(--color-text-muted)] transition-all duration-300">۲</div>
            <span class="text-[var(--color-text-muted)]"><?php esc_html_e('انتخاب مرکز و زمان', 'tamin-theme'); ?></span>
        </div>
        <div class="relative z-10 flex flex-col items-center gap-2">
            <div id="step-node-3" class="w-9 h-9 rounded-full flex items-center justify-center bg-[var(--color-border-subtle)] text-[var(--color-text-muted)] transition-all duration-300">۳</div>
            <span class="text-[var(--color-text-muted)]"><?php esc_html_e('تأیید نهایی', 'tamin-theme'); ?></span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        <div class="lg:col-span-8 space-y-6">
            <!-- STEP 1 PANEL -->
            <section id="step-1" class="step-panel space-y-6">
                <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2.5rem] p-6 lg:p-10 shadow-sm text-right space-y-6">
                    <header class="border-b border-[var(--color-border-subtle)] pb-5">
                        <h1 class="font-extrabold text-2xl text-[var(--color-text-main)] mb-2 flex items-center gap-2">
                            <span class="w-2.5 h-6 bg-primary rounded-full inline-block"></span>
                            <?php esc_html_e('ارزیابی اولیه سلامت اهداکننده', 'tamin-theme'); ?>
                        </h1>
                        <p class="text-xs md:text-sm text-[var(--color-text-muted)]"><?php esc_html_e('لطفاً به سوالات زیر با دقت پاسخ دهید تا وضعیت سلامت شما بررسی شود.', 'tamin-theme'); ?></p>
                    </header>

                    <form id="health-form" class="space-y-6">
                        <!-- Age Check -->
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-[var(--color-text-main)]"><?php esc_html_e('آیا سن شما بین ۱۸ تا ۶۰ سال است؟', 'tamin-theme'); ?></label>
                            <div class="binary-toggle flex gap-4">
                                <input type="radio" id="age-yes" name="age" value="yes" class="hidden" checked>
                                <label for="age-yes" class="flex-1 py-3 text-center rounded-xl font-bold cursor-pointer transition-all"><?php esc_html_e('بله', 'tamin-theme'); ?></label>
                                <input type="radio" id="age-no" name="age" value="no" class="hidden">
                                <label for="age-no" class="flex-1 py-3 text-center rounded-xl font-bold cursor-pointer transition-all"><?php esc_html_e('خیر', 'tamin-theme'); ?></label>
                            </div>
                        </div>

                        <!-- Weight Check -->
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-[var(--color-text-main)]"><?php esc_html_e('آیا وزن شما بالای ۵۰ کیلوگرم است؟', 'tamin-theme'); ?></label>
                            <div class="binary-toggle flex gap-4">
                                <input type="radio" id="weight-yes" name="weight" value="yes" class="hidden" checked>
                                <label for="weight-yes" class="flex-1 py-3 text-center rounded-xl font-bold cursor-pointer transition-all"><?php esc_html_e('بله', 'tamin-theme'); ?></label>
                                <input type="radio" id="weight-no" name="weight" value="no" class="hidden">
                                <label for="weight-no" class="flex-1 py-3 text-center rounded-xl font-bold cursor-pointer transition-all"><?php esc_html_e('خیر', 'tamin-theme'); ?></label>
                            </div>
                        </div>

                        <!-- Chronic Disease Check -->
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-[var(--color-text-main)]"><?php esc_html_e('آیا مبتلا به بیماری مزمن، دیابت انسولینی یا فشار خون کنترل نشده هستید؟', 'tamin-theme'); ?></label>
                            <div class="binary-toggle flex gap-4">
                                <input type="radio" id="disease-no" name="disease" value="no" class="hidden" checked>
                                <label for="disease-no" class="flex-1 py-3 text-center rounded-xl font-bold cursor-pointer transition-all"><?php esc_html_e('خیر', 'tamin-theme'); ?></label>
                                <input type="radio" id="disease-yes" name="disease" value="yes" class="hidden">
                                <label for="disease-yes" class="flex-1 py-3 text-center rounded-xl font-bold cursor-pointer transition-all"><?php esc_html_e('بله', 'tamin-theme'); ?></label>
                            </div>
                        </div>

                        <button type="button" onclick="nextStep(2)" class="w-full bg-primary hover:brightness-110 text-neutral-900 font-extrabold py-4 rounded-xl text-base shadow-md transition-all cursor-pointer mt-4">
                            <?php esc_html_e('تأیید و ادامه به مرحله بعد', 'tamin-theme'); ?>
                        </button>
                    </form>
                </div>
            </section>

            <!-- STEP 2 PANEL -->
            <section id="step-2" class="step-panel hidden space-y-6">
                <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2.5rem] p-6 lg:p-10 shadow-sm text-right space-y-6">
                    <header class="border-b border-[var(--color-border-subtle)] pb-5">
                        <h2 class="font-extrabold text-2xl text-[var(--color-text-main)] mb-2 flex items-center gap-2">
                            <span class="w-2.5 h-6 bg-primary rounded-full inline-block"></span>
                            <?php esc_html_e('انتخاب مرکز و زمان مراجعه', 'tamin-theme'); ?>
                        </h2>
                    </header>

                    <div class="space-y-4">
                        <label class="block text-sm font-bold text-[var(--color-text-main)]"><?php esc_html_e('انتخاب مرکز اهدا', 'tamin-theme'); ?></label>
                        <select id="center-select" class="w-full p-4 rounded-xl border border-neutral-300 bg-white text-neutral-900 font-bold focus:outline-none focus:border-primary">
                            <option value="" disabled selected><?php esc_html_e('شعبه مورد نظر را انتخاب کنید...', 'tamin-theme'); ?></option>
                            <?php
                            $centers = get_option('tamin_centers_data', []);
                            if (!empty($centers)) {
                                foreach ($centers as $center) {
                                    if (!empty($center['active'])) {
                                        echo '<option value="' . esc_attr($center['id']) . '">' . esc_html($center['city'] . ' - ' . $center['name']) . '</option>';
                                    }
                                }
                            } else {
                                echo '<option value="" disabled>' . esc_html__('مرکزی یافت نشد', 'tamin-theme') . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="space-y-4">
                        <label class="block text-sm font-bold text-[var(--color-text-main)]"><?php esc_html_e('اطلاعات تماس شما', 'tamin-theme'); ?></label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" id="user-name" placeholder="<?php esc_attr_e('نام و نام خانوادگی', 'tamin-theme'); ?>" class="w-full p-4 rounded-xl border border-neutral-300 bg-white text-neutral-900 font-bold focus:outline-none focus:border-primary">
                            <input type="tel" id="user-phone" placeholder="<?php esc_attr_e('شماره موبایل (مثلاً ۰۹۱۲۳۴۵۶۷۸۹)', 'tamin-theme'); ?>" class="w-full p-4 rounded-xl border border-neutral-300 bg-white text-neutral-900 font-bold focus:outline-none focus:border-primary">
                            <input type="text" id="website_hp" style="display:none !important; opacity:0; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">
                        </div>
                    </div>

                    <div id="request-form-error" class="hidden p-4 rounded-xl text-xs font-bold bg-rose-50 text-rose-800 border border-rose-200"></div>

                    <div class="flex gap-4 pt-4">
                        <button type="button" onclick="prevStep(1)" class="w-1/3 border border-neutral-300 text-neutral-700 font-bold py-4 rounded-xl text-base hover:bg-neutral-100 transition-all cursor-pointer">
                            <?php esc_html_e('مرحله قبل', 'tamin-theme'); ?>
                        </button>
                        <button type="button" id="request-submit-btn" onclick="submitBookingForm()" class="w-2/3 bg-primary hover:brightness-110 text-neutral-900 font-extrabold py-4 rounded-xl text-base shadow-md transition-all cursor-pointer">
                            <span><?php esc_html_e('تأیید و ثبت نهایی', 'tamin-theme'); ?></span>
                        </button>
                    </div>
                </div>
            </section>

            <!-- STEP 3 PANEL -->
            <section id="step-3" class="step-panel hidden space-y-6">
                <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2.5rem] p-6 lg:p-10 shadow-sm text-center space-y-6">
                    <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-3xl">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h2 class="font-extrabold text-2xl text-[var(--color-text-main)]"><?php esc_html_e('نوبت شما با موفقیت ثبت شد!', 'tamin-theme'); ?></h2>
                    <p class="text-sm text-neutral-600 leading-relaxed max-w-md mx-auto">
                        <?php esc_html_e('کد پیگیری نوبت شما:', 'tamin-theme'); ?>
                        <strong id="tracking-code-display" class="block text-xl text-primary font-black dir-ltr mt-2">NOZHIN-100200</strong>
                    </p>
                    <p class="text-xs text-neutral-500">
                        <?php esc_html_e('کارشناسان مرکز نوژین جهت هماهنگی نهایی به‌زودی با شما تماس خواهند گرفت.', 'tamin-theme'); ?>
                    </p>
                    <div class="pt-4">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-primary text-neutral-900 font-bold px-8 py-3.5 rounded-full hover:brightness-110 transition-all shadow-sm">
                            <?php esc_html_e('بازگشت به صفحه اصلی', 'tamin-theme'); ?>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <!-- Left Column: Trust Info Canvas -->
        <div class="lg:col-span-4 bg-surface-warm border border-neutral-200/60 rounded-[2.5rem] p-6 lg:p-8 space-y-6">
            <h3 class="font-black text-lg text-neutral-900 border-b border-neutral-200 pb-3"><?php esc_html_e('چرا نوژین؟', 'tamin-theme'); ?></h3>
            <ul class="space-y-4 text-xs lg:text-sm text-neutral-700 leading-relaxed">
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-shield-halved text-primary text-base shrink-0"></i>
                    <span><?php esc_html_e('فرآیند ۱۰۰٪ استریل با دستگاه‌های آفرزیس تک‌بار مصرف', 'tamin-theme'); ?></span>
                </li>
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-user-doctor text-primary text-base shrink-0"></i>
                    <span><?php esc_html_e('معاینه و پایش کامل سلامت توسط پزشک مقیم', 'tamin-theme'); ?></span>
                </li>
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-wallet text-primary text-base shrink-0"></i>
                    <span><?php esc_html_e('پرداخت آنی هدیه ایاب‌و‌ذهاب بلافاصله بعد اهدا', 'tamin-theme'); ?></span>
                </li>
            </ul>
        </div>
    </div>
</main>

<script>
function nextStep(step) {
    document.querySelectorAll('.step-panel').forEach(panel => panel.classList.add('hidden'));
    document.getElementById('step-' + step).classList.remove('hidden');
    
    const pb = document.getElementById('progress-bar');
    if (step === 2) {
        if (pb) pb.style.width = '50%';
        document.getElementById('step-node-2').className = 'w-9 h-9 rounded-full flex items-center justify-center bg-primary text-[var(--color-text-main)] shadow-md scale-110 transition-all duration-300';
    } else if (step === 3) {
        if (pb) pb.style.width = '100%';
        document.getElementById('step-node-3').className = 'w-9 h-9 rounded-full flex items-center justify-center bg-primary text-[var(--color-text-main)] shadow-md scale-110 transition-all duration-300';
    }
}

function prevStep(step) {
    nextStep(step);
    const pb = document.getElementById('progress-bar');
    if (step === 1 && pb) pb.style.width = '0%';
}

function submitBookingForm() {
    const nameInput = document.getElementById('user-name');
    const phoneInput = document.getElementById('user-phone');
    const centerSelect = document.getElementById('center-select');
    const errBox = document.getElementById('request-form-error');
    const btn = document.getElementById('request-submit-btn');

    if (!nameInput || !phoneInput) return;

    if (!nameInput.value.trim() || !phoneInput.value.trim() || (centerSelect && !centerSelect.value)) {
        if (errBox) {
            errBox.classList.remove('hidden');
            errBox.textContent = 'لطفاً نام، شماره تلفن همراه و مرکز مورد نظر خود را وارد کنید.';
        }
        return;
    }

    if (errBox) errBox.classList.add('hidden');
    if (btn) { btn.disabled = true; btn.classList.add('opacity-50'); }

    const formData = new FormData();
    formData.append('action', 'tamin_submit_request');
    formData.append('nonce', typeof tamin_ajax !== 'undefined' ? tamin_ajax.nonce : '');
    formData.append('name', nameInput.value.trim());
    formData.append('phone', phoneInput.value.trim());
    formData.append('center', centerSelect ? centerSelect.value : '');
    const hpInput = document.getElementById('website_hp');
    if (hpInput) formData.append('website_hp', hpInput.value);

    const ajaxUrl = typeof tamin_ajax !== 'undefined' ? tamin_ajax.ajax_url : '/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (btn) { btn.disabled = false; btn.classList.remove('opacity-50'); }
        if (data.success) {
            const codeDisplay = document.getElementById('tracking-code-display');
            if (codeDisplay && data.data.tracking_code) {
                codeDisplay.textContent = data.data.tracking_code;
            }
            nextStep(3);
        } else {
            if (errBox) {
                errBox.classList.remove('hidden');
                errBox.textContent = data.data ? data.data.message : 'خطایی رخ داد.';
            }
        }
    })
    .catch(err => {
        if (btn) { btn.disabled = false; btn.classList.remove('opacity-50'); }
        if (errBox) {
            errBox.classList.remove('hidden');
            errBox.textContent = 'خطای ارتباط با سرور. لطفاً مجدداً تلاش کنید.';
        }
    });
}
</script>

<?php
get_footer();
