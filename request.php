<?php
/**
 * Multi-Step Donation Booking Form
 * Role: Elite UI/UX Engineer & CRO Expert
 */
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نوبت‌دهی اهدا - تأمین پلاسما نوژین</title>
    <!-- Compiled Stylesheet -->
    <link rel="stylesheet" href="dist/assets/style.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    
    <style>
        body {
            font-family: var(--font-peyda), system-ui, -apple-system, sans-serif;
            background-color: var(--color-bg-base);
            color: var(--color-text-main);
            overflow-x: hidden;
        }

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

        /* Custom Node Overrides */
        #step-node-1, #step-node-2, #step-node-3 {
            font-weight: 800;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .bg-primary {
            background-color: var(--color-primary) !important;
            color: var(--color-text-dark) !important;
        }
        .bg-\[var\(--color-border-subtle\)\] {
            background-color: var(--color-border-subtle) !important;
        }
        .text-\[var\(--color-text-light\)\] {
            color: var(--color-text-muted) !important;
        }
        .text-\[var\(--color-text-main\)\] {
            color: var(--color-text-main) !important;
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

        /* Custom Radio Style */
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
</head>
<body class="bg-[var(--color-bg-base)] min-h-screen">

    <!-- 1. ISOLATED CONVERSION HEADER -->
    <header class="w-full border-b border-[var(--color-border-subtle)]/40 bg-[var(--color-bg-base)] py-4 sticky top-0 z-50">
        <div class="max-w-screen-xl mx-auto px-6 flex justify-between items-center">
            <!-- Right Side: Logo & Title -->
            <a href="./" class="flex items-center gap-3 shrink-0" aria-label="صفحه اصلی تأمین پلاسما نوژین">
                <!-- Overlapping Circles Logo -->
                <div class="relative w-8 h-5 flex items-center">
                    <div class="absolute right-0 w-5 h-5 rounded-full bg-primary"></div>
                    <div class="absolute right-3 w-5 h-5 rounded-full bg-[var(--color-black)]"></div>
                </div>
                <span class="font-bold text-lg lg:text-xl text-[var(--color-text-main)] tracking-tight">تأمین پلاسما نوژین</span>
            </a>

            <!-- Left Side: Cancel Link -->
            <a href="index.php" class="text-[var(--color-text-light)] hover:text-[var(--color-text-main)] text-xs font-bold transition-colors flex items-center gap-1 group">
                <span>انصراف و بازگشت به خانه</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        </div>
    </header>

    <!-- Decorative background elements for high-end luxury feel -->
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>
    <div class="absolute top-1/3 right-0 w-[300px] h-[600px] bg-[var(--color-secondary)]/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <!-- 2. CENTRALIZED CONVERSION CONTAINER -->
    <main class="max-w-screen-xl mx-auto px-4 lg:px-12 py-8 lg:py-16 relative z-10">
        
        <!-- 3. LINEAR STEP PROGRESSION INDICATOR -->
        <div class="max-w-3xl mx-auto flex items-center justify-between mb-12 text-[10px] md:text-xs font-black relative px-4">
            <!-- Track Line Background -->
            <div class="absolute top-1/2 left-0 w-full h-0.5 bg-[var(--color-border-subtle)] -translate-y-1/2 z-0"></div>
            <!-- Progress Line (Dynamic) -->
            <div id="progress-bar" class="absolute top-1/2 right-0 w-0 h-0.5 bg-primary -translate-y-1/2 z-0 transition-all duration-500"></div>

            <!-- Step Nodes -->
            <div class="relative z-10 flex flex-col items-center gap-2">
                <div id="step-node-1" class="w-9 h-9 rounded-full flex items-center justify-center bg-primary text-[var(--color-text-main)] shadow-md scale-110 transition-all duration-300">۱</div>
                <span class="text-[var(--color-text-main)]">سنجش سلامت</span>
            </div>
            <div class="relative z-10 flex flex-col items-center gap-2">
                <div id="step-node-2" class="w-9 h-9 rounded-full flex items-center justify-center bg-[var(--color-border-subtle)] text-[var(--color-text-muted)] transition-all duration-300">۲</div>
                <span class="text-[var(--color-text-muted)]">انتخاب مرکز و زمان</span>
            </div>
            <div class="relative z-10 flex flex-col items-center gap-2">
                <div id="step-node-3" class="w-9 h-9 rounded-full flex items-center justify-center bg-[var(--color-border-subtle)] text-[var(--color-text-muted)] transition-all duration-300">۳</div>
                <span class="text-[var(--color-text-muted)]">تأیید نهایی</span>
            </div>
        </div>

        <!-- 2-Column Responsive Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Right Column: Step Panels (lg:col-span-8) -->
            <div class="lg:col-span-8 space-y-6">

                <!-- 4. STEP 1 PANEL: HEALTH ELIGIBILITY GATE -->
                <section id="step-1" class="step-panel space-y-6">
                    <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2.5rem] p-6 lg:p-10 shadow-[0_12px_40px_rgba(30,41,59,0.03)] text-right space-y-6">
                        <header class="border-b border-[var(--color-border-subtle)] pb-5">
                            <h1 class="font-extrabold text-2xl text-[var(--color-text-main)] mb-2 flex items-center gap-2">
                                <span class="w-2.5 h-6 bg-primary rounded-full inline-block"></span>
                                ارزیابی اولیه سلامت اهداکننده
                            </h1>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)]">لطفاً به سوالات زیر با دقت پاسخ دهید تا وضعیت سلامت شما بررسی شود.</p>
                        </header>

                        <div class="space-y-4">
                            <!-- Question Row 1 -->
                            <div class="flex flex-col md:flex-row justify-between items-start md:items-center p-5 bg-[var(--color-bg-warm)]/30 border border-[var(--color-border-subtle)]/60 rounded-2xl gap-4 hover:border-primary transition-colors duration-300">
                                <span class="text-sm font-semibold text-[var(--color-text-main)]">آیا سن شما بین ۱۸ تا ۶۰ سال است؟</span>
                                <div class="flex gap-2 binary-toggle">
                                    <input type="radio" name="age_check" id="age_yes" value="yes" class="hidden" checked>
                                    <label for="age_yes" class="px-6 py-2 rounded-full text-xs font-bold cursor-pointer transition-all">بله</label>
                                    
                                    <input type="radio" name="age_check" id="age_no" value="no" class="hidden">
                                    <label for="age_no" class="px-6 py-2 rounded-full text-xs font-bold cursor-pointer transition-all">خیر</label>
                                </div>
                            </div>

                            <!-- Question Row 2 -->
                            <div class="flex flex-col md:flex-row justify-between items-start md:items-center p-5 bg-[var(--color-bg-warm)]/30 border border-[var(--color-border-subtle)]/60 rounded-2xl gap-4 hover:border-primary transition-colors duration-300">
                                <span class="text-sm font-semibold text-[var(--color-text-main)]">آیا وزن شما بالای ۵۰ کیلوگرم است؟</span>
                                <div class="flex gap-2 binary-toggle">
                                    <input type="radio" name="weight_check" id="weight_yes" value="yes" class="hidden" checked>
                                    <label for="weight_yes" class="px-6 py-2 rounded-full text-xs font-bold cursor-pointer transition-all">بله</label>
                                    
                                    <input type="radio" name="weight_check" id="weight_no" value="no" class="hidden">
                                    <label for="weight_no" class="px-6 py-2 rounded-full text-xs font-bold cursor-pointer transition-all">خیر</label>
                                </div>
                            </div>

                            <!-- Question Row 3 -->
                            <div class="flex flex-col md:flex-row justify-between items-start md:items-center p-5 bg-[var(--color-bg-warm)]/30 border border-[var(--color-border-subtle)]/60 rounded-2xl gap-4 hover:border-primary transition-colors duration-300">
                                <span class="text-sm font-semibold text-[var(--color-text-main)]">آیا در یک ماه گذشته تاتو یا جراحی داشته‌اید؟</span>
                                <div class="flex gap-2 binary-toggle">
                                    <input type="radio" name="surgery_check" id="surgery_yes" value="yes" class="hidden">
                                    <label for="surgery_yes" class="px-6 py-2 rounded-full text-xs font-bold cursor-pointer transition-all">بله</label>
                                    
                                    <input type="radio" name="surgery_check" id="surgery_no" value="no" class="hidden" checked>
                                    <label for="surgery_no" class="px-6 py-2 rounded-full text-xs font-bold cursor-pointer transition-all">خیر</label>
                                </div>
                            </div>
                        </div>

                        <button id="btn-to-step-2" class="w-full bg-[var(--color-secondary)] hover:bg-[var(--color-secondary-light)] text-white font-extrabold py-4 px-6 rounded-full mt-6 text-center hover:-translate-y-0.5 active:translate-y-0 shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer flex justify-center items-center gap-2">
                            <span>مرحله بعد: انتخاب زمان نوبت</span>
                            <i class="fa-solid fa-arrow-left text-xs"></i>
                        </button>
                    </div>
                </section>

                <!-- 5. STEP 2 PANEL: SCHEDULER MATRIX -->
                <section id="step-2" class="step-panel hidden space-y-6">
                    <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2.5rem] p-6 lg:p-10 shadow-[0_12px_40px_rgba(30,41,59,0.03)] text-right space-y-6">
                        <header class="border-b border-[var(--color-border-subtle)] pb-5">
                            <h1 class="font-extrabold text-2xl text-[var(--color-text-main)] mb-2 flex items-center gap-2">
                                <span class="w-2.5 h-6 bg-primary rounded-full inline-block"></span>
                                انتخاب مرکز و زمان نوبت
                            </h1>
                            <p class="text-xs md:text-sm text-[var(--color-text-muted)]">نزدیک‌ترین مرکز و زمان مناسب برای مراجعه را انتخاب کنید.</p>
                        </header>

                        <!-- Input Block A: Center Selection -->
                        <div class="space-y-2">
                            <label class="text-xs font-extrabold text-[var(--color-text-muted)] mr-1">انتخاب نزدیک‌ترین مرکز نوژین</label>
                            <div class="relative group">
                                <select class="w-full bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] p-4 rounded-2xl appearance-none focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary font-bold text-sm transition-colors duration-300">
                                    <option value="1">مرکز شماره ۱ - تهران (پاسداران)</option>
                                    <option value="2">مرکز شماره ۲ - تهران (ستارخان)</option>
                                    <option value="3">مرکز شماره ۳ - کرج (مرکز شهر)</option>
                                </select>
                                <div class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none text-[var(--color-text-muted)] group-hover:text-primary transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Input Block B: Scheduler -->
                        <div class="space-y-4">
                            <div class="flex justify-between items-center border-b border-[var(--color-border-subtle)]/40 pb-2">
                                <label class="text-xs font-extrabold text-[var(--color-text-muted)] mr-1">انتخاب روز و ساعت</label>
                                <span class="text-xs font-extrabold text-[var(--color-secondary)]">خرداد ۱۴۰۳</span>
                            </div>
                            
                            <!-- Calendar Grid Header -->
                            <div class="grid grid-cols-7 gap-2 text-center text-xs font-extrabold text-[var(--color-text-muted)] mb-2">
                                <div>ش</div><div>ی</div><div>د</div><div>س</div><div>چ</div><div>پ</div><div>ج</div>
                            </div>
                            <!-- Calendar Grid Body -->
                            <div class="grid grid-cols-7 gap-2 calendar-grid">
                                <!-- Days -->
                                <div class="pointer-events-none">۱</div>
                                <div class="pointer-events-none">۲</div>
                                <div class="pointer-events-none">۳</div>
                                <div>۴</div>
                                <div>۵</div>
                                <div class="bg-primary text-[var(--color-text-main)] shadow-sm font-black">۶</div>
                                <div class="pointer-events-none">۷</div>
                                <div>۸</div>
                                <div>۹</div>
                                <div>۱۰</div>
                                <div>۱۱</div>
                                <div>۱۲</div>
                                <div>۱۳</div>
                                <div class="pointer-events-none">۱۴</div>
                            </div>
                        </div>

                        <!-- Privacy Shield Box -->
                        <div class="bg-[var(--color-bg-warm)]/40 border border-[var(--color-border-subtle)]/75 p-5 rounded-2xl text-xs text-[var(--color-text-muted)] flex items-start gap-4 transition-colors">
                            <div class="bg-[var(--color-bg-surface)] p-2.5 rounded-xl text-primary border border-[var(--color-border-subtle)] shrink-0 shadow-sm">
                                <i class="fa-solid fa-user-shield text-base"></i>
                            </div>
                            <p class="leading-relaxed">اطلاعات سلامت و اطلاعات هویتی شما کاملاً محفوظ است. یک ساعت قبل از نوبت، پیامک یادآوری حاوی جزئیات نوبت برای شما ارسال خواهد شد.</p>
                        </div>

                        <!-- Actions -->
                        <div class="flex gap-4">
                            <button id="btn-back-to-1" class="w-1/3 border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-extrabold py-4 rounded-full hover:bg-[var(--color-bg-base)] hover:text-[var(--color-text-main)] hover:border-[var(--color-text-muted)]/30 transition-all duration-300 cursor-pointer">
                                بازگشت
                            </button>
                            <button id="btn-final-submit" class="w-2/3 bg-[var(--color-secondary)] hover:bg-[var(--color-secondary-light)] text-white font-extrabold py-4 rounded-full text-center hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 cursor-pointer shadow-lg hover:shadow-xl flex justify-center items-center gap-2">
                                <span>تأیید قطعی و دریافت کد نوبت</span>
                                <i class="fa-solid fa-check text-xs"></i>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- EMPATHETIC REJECTION CARD (Hidden by default) -->
                <section id="rejection-card" class="step-panel hidden space-y-6">
                    <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2.5rem] p-8 lg:p-12 shadow-[0_12px_40px_rgba(30,41,59,0.03)] text-center space-y-6">
                        <div class="w-20 h-20 bg-red-50 text-[var(--color-red)] rounded-full flex items-center justify-center mx-auto shadow-inner">
                            <i class="fa-solid fa-heart-crack text-4xl"></i>
                        </div>
                        <h2 class="font-extrabold text-2xl text-[var(--color-text-main)]">خیلی ممنون از قلب مهربانتان</h2>
                        <p class="text-[var(--color-text-muted)] text-sm leading-relaxed max-w-sm mx-auto">
                            در حال حاضر با توجه به پاسخ‌های شما، امکان پذیرش شما برای اهدای پلاسما وجود ندارد. اما می‌توانید با اشتراک‌گذاری این صفحه با دوستانتان، سفیر نجات جان بیماران باشید.
                        </p>
                        <div class="pt-4 flex flex-col gap-3 max-w-xs mx-auto">
                            <button onclick="location.reload()" class="w-full bg-primary hover:bg-[var(--color-primary-hover)] text-[var(--color-text-dark)] font-extrabold py-4 rounded-full shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                                تلاش مجدد
                            </button>
                            <a href="index.php" class="text-[var(--color-text-muted)] text-xs font-bold hover:text-[var(--color-text-main)] transition-colors">بازگشت به صفحه اصلی</a>
                        </div>
                    </div>
                </section>

                <!-- SUCCESS CARD (Hidden by default) -->
                <section id="success-card" class="step-panel hidden space-y-6">
                    <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2.5rem] p-8 lg:p-12 shadow-[0_12px_40px_rgba(30,41,59,0.03)] text-center space-y-6">
                        <div class="w-20 h-20 bg-green-50 text-[var(--color-green-500)] rounded-full flex items-center justify-center mx-auto shadow-inner">
                            <i class="fa-solid fa-circle-check text-4xl animate-bounce"></i>
                        </div>
                        <h2 class="font-extrabold text-2xl text-[var(--color-text-main)]">نوبت شما با موفقیت ثبت شد</h2>
                        <div class="bg-[var(--color-bg-base)] border border-[var(--color-border-subtle)] p-6 rounded-3xl space-y-2 max-w-sm mx-auto shadow-sm">
                            <span class="text-xs text-[var(--color-text-muted)] font-extrabold block">کد پیگیری نوبت شما:</span>
                            <span class="text-3xl font-extrabold tracking-widest text-[var(--color-secondary)] block select-all">TP-88429</span>
                        </div>
                        <p class="text-[var(--color-text-muted)] text-xs md:text-sm leading-relaxed max-w-md mx-auto">
                            پیامک تایید حاوی آدرس دقیق مرکز و ساعت مراجعه برای شما ارسال شد. لطفاً ۱۵ دقیقه قبل از زمان مقرر در مرکز حضور داشته باشید.
                        </p>
                        <a href="index.php" class="block w-full max-w-xs mx-auto bg-[var(--color-secondary)] hover:bg-[var(--color-secondary-light)] text-white font-extrabold py-4 rounded-full shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                            متوجه شدم
                        </a>
                    </div>
                </section>

            </div>

            <!-- Left Column: Premium Information Sidebar (lg:col-span-4) -->
            <div class="lg:col-span-4 space-y-6 hidden lg:block">
                
                <!-- Sidebar Widget 1: Steps Timeline -->
                <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2rem] p-6 shadow-[0_8px_32px_rgba(30,41,59,0.03)] space-y-5">
                    <h3 class="font-extrabold text-base text-[var(--color-text-main)] flex items-center gap-2">
                        <i class="fa-solid fa-route text-primary text-lg"></i>
                        <span>مراحل اهدا در مرکز نوژین</span>
                    </h3>
                    <div class="relative pr-4 border-r border-dashed border-[var(--color-border-subtle)] space-y-6 text-xs text-[var(--color-text-muted)]">
                        <div class="relative">
                            <div class="absolute -right-[21px] top-0.5 w-2.5 h-2.5 rounded-full bg-primary ring-4 ring-primary/20"></div>
                            <h4 class="font-extrabold text-[var(--color-text-main)] mb-1">۱. خوش‌آمدگویی و پذیرش</h4>
                            <p class="leading-relaxed">ارائه کارت ملی و انجام ثبت‌نام اولیه در سیستم.</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -right-[21px] top-0.5 w-2.5 h-2.5 rounded-full bg-[var(--color-border-subtle)]"></div>
                            <h4 class="font-extrabold text-[var(--color-text-main)] mb-1">۲. کنترل علائم حیاتی</h4>
                            <p class="leading-relaxed">بررسی فشار خون، وزن و سطح هموگلوبین خون شما توسط پزشک.</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -right-[21px] top-0.5 w-2.5 h-2.5 rounded-full bg-[var(--color-border-subtle)]"></div>
                            <h4 class="font-extrabold text-[var(--color-text-main)] mb-1">۳. اهدای پلاسما</h4>
                            <p class="leading-relaxed">استفاده از کیت‌های یک‌بارمصرف و کاملاً استریل در حدود ۴۵ دقیقه.</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -right-[21px] top-0.5 w-2.5 h-2.5 rounded-full bg-[var(--color-border-subtle)]"></div>
                            <h4 class="font-extrabold text-[var(--color-text-main)] mb-1">۴. پذیرایی و پرداخت هزینه</h4>
                            <p class="leading-relaxed">پذیرایی مختصر و پرداخت هزینه ایاب و ذهاب جهت تقدیر از شما.</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget 2: Preparation Tips -->
                <div class="bg-[var(--color-bg-surface)] border border-[var(--color-border-subtle)] rounded-[2rem] p-6 shadow-[0_8px_32px_rgba(30,41,59,0.03)] space-y-4">
                    <h3 class="font-extrabold text-base text-[var(--color-text-main)] flex items-center gap-2">
                        <i class="fa-solid fa-circle-info text-primary text-lg"></i>
                        <span>آمادگی برای اهدای پلاسما</span>
                    </h3>
                    <ul class="space-y-3.5 text-xs text-[var(--color-text-muted)] leading-relaxed">
                        <li class="flex items-start gap-2.5">
                            <span class="text-primary font-black mt-0.5">•</span>
                            <span>نوشیدن حداقل ۴ تا ۶ لیوان آب یا مایعات غیرالکلی قبل از مراجعه.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-primary font-black mt-0.5">•</span>
                            <span>خوردن یک وعده غذایی سبک و مناسب در فاصله ۲ تا ۳ ساعت قبل از اهدا.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-primary font-black mt-0.5">•</span>
                            <span>خواب کافی (حداقل ۷ تا ۸ ساعت) در شب قبل از مراجعه.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="text-primary font-black mt-0.5">•</span>
                            <span>پرهیز از مصرف غذاهای چرب در ۲۴ ساعت منتهی به اهدا.</span>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar Widget 3: Support -->
                <div class="bg-[var(--color-secondary)] border border-[var(--color-border-subtle)]/10 rounded-[2rem] p-6 text-white shadow-[0_8px_32px_rgba(30,41,59,0.08)] relative overflow-hidden group">
                    <div class="absolute -right-10 -bottom-10 w-32 h-32 bg-primary/10 rounded-full blur-2xl group-hover:bg-primary/20 transition-colors duration-500"></div>
                    <div class="relative z-10 space-y-4">
                        <h3 class="font-extrabold text-base text-primary flex items-center gap-2">
                            <i class="fa-solid fa-headset text-lg"></i>
                            <span>پشتیبانی نوبت‌دهی نوژین</span>
                        </h3>
                        <p class="text-xs text-[var(--color-bg-lighter)] opacity-90 leading-relaxed">
                            اگر سوالی دارید یا در فرآیند ثبت نوبت نیاز به راهنمایی دارید، کارشناسان ما آماده پاسخگویی هستند:
                        </p>
                        <div class="flex items-center gap-3 pt-2">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-primary border border-white/15 shadow-inner">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[10px] text-[var(--color-bg-lighter)] opacity-70">شماره تماس مرکز نوژین</span>
                                <span class="text-sm font-extrabold tracking-wider" dir="ltr">۰۲۱-۴۹۳۶۱۳۱۸</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <!-- 6. JAVASCRIPT ANIMATION TRIGGER -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const step1 = document.getElementById('step-1');
            const step2 = document.getElementById('step-2');
            const rejectionCard = document.getElementById('rejection-card');
            const successCard = document.getElementById('success-card');
            
            const btnToStep2 = document.getElementById('btn-to-step-2');
            const btnBackTo1 = document.getElementById('btn-back-to-1');
            const btnFinalSubmit = document.getElementById('btn-final-submit');
            
            const progressBar = document.getElementById('progress-bar');
            const nodes = [
                document.getElementById('step-node-1'),
                document.getElementById('step-node-2'),
                document.getElementById('step-node-3')
            ];

            function updateProgress(stepIndex) {
                // stepIndex: 0, 1, 2
                const percentages = ['0%', '50%', '100%'];
                progressBar.style.width = percentages[stepIndex];
                
                nodes.forEach((node, idx) => {
                    const label = node.nextElementSibling;
                    if (idx <= stepIndex) {
                        node.classList.add('bg-primary', 'text-[var(--color-text-main)]', 'shadow-md', 'scale-110');
                        node.classList.remove('bg-[var(--color-border-subtle)]', 'text-[var(--color-text-light)]');
                        if(label) label.classList.add('text-[var(--color-text-main)]');
                        if(label) label.classList.remove('text-[var(--color-text-light)]');
                    } else {
                        node.classList.remove('bg-primary', 'text-[var(--color-text-main)]', 'shadow-md', 'scale-110');
                        node.classList.add('bg-[var(--color-border-subtle)]', 'text-[var(--color-text-light)]');
                        if(label) label.classList.remove('text-[var(--color-text-main)]');
                        if(label) label.classList.add('text-[var(--color-text-light)]');
                    }
                });
            }

            function switchPanel(from, to) {
                from.classList.add('hidden');
                to.classList.remove('hidden');
                to.classList.add('fade-in');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            // Step 1 -> Step 2 logic
            btnToStep2.addEventListener('click', () => {
                const age = document.querySelector('input[name="age_check"]:checked').value;
                const weight = document.querySelector('input[name="weight_check"]:checked').value;
                const surgery = document.querySelector('input[name="surgery_check"]:checked').value;

                // Eligibility Check
                if (age === 'no' || weight === 'no' || surgery === 'yes') {
                    switchPanel(step1, rejectionCard);
                    // Hide progress bar on rejection
                    document.querySelector('.relative.px-4').classList.add('opacity-0');
                } else {
                    switchPanel(step1, step2);
                    updateProgress(1);
                }
            });

            // Step 2 -> Step 1
            btnBackTo1.addEventListener('click', () => {
                switchPanel(step2, step1);
                updateProgress(0);
            });

            // Final Submit
            btnFinalSubmit.addEventListener('click', () => {
                btnFinalSubmit.innerHTML = `<svg class="animate-spin h-5 w-5 text-white mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>`;
                
                setTimeout(() => {
                    switchPanel(step2, successCard);
                    updateProgress(2);
                }, 1500);
            });

            // Calendar Selection logic
            const slots = document.querySelectorAll('.calendar-grid div:not(.pointer-events-none)');
            slots.forEach(slot => {
                slot.addEventListener('click', () => {
                    slots.forEach(s => {
                        s.classList.remove('bg-primary', 'text-[var(--color-text-main)]', 'shadow-sm', 'font-black');
                    });
                    slot.classList.add('bg-primary', 'text-[var(--color-text-main)]', 'shadow-sm', 'font-black');
                });
            });
        });
    </script>
</body>
</html>
