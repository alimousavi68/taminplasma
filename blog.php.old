<?php
/**
 * Blog Archive Page Template
 * Optimized for widescreen visual grids with RTL support.
 */
require_once 'template-parts/header.php';
?>

<main dir="rtl" class="bg-[var(--color-bg-base)] min-h-screen py-8">

    <!-- 1. FEATURED ARTICLE BANNER -->
    <section class="max-w-screen-xl mx-auto px-6 lg:px-12 my-8">
        <article class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-[var(--color-surface-warm)] border border-[var(--color-border-subtle)] rounded-[3rem] p-6 shadow-sm group cursor-pointer overflow-hidden">
            <!-- Left Column Media (6 Columns) -->
            <div class="lg:col-span-6 w-full aspect-[16/10] rounded-[2.25rem] overflow-hidden relative bg-[var(--color-border-subtle)]">
                <img src="src/assets/post-4.webp" alt="Featured Article" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-500">
            </div>

            <!-- Right Column Metadata (6 Columns) -->
            <div class="lg:col-span-6 space-y-4 text-right">
                <div class="flex items-center justify-end gap-2 text-xs text-neutral-800 font-semibold">
                    <span>زمان مطالعه: ۵ دقیقه</span>
                    <span class="w-1 h-1 bg-neutral-900/30 rounded-full"></span>
                    <span>۱۰ خرداد ۱۴۰۵</span>
                </div>
                
                <h2 class="font-black text-xl md:text-2xl lg:text-3xl text-neutral-900 leading-tight">
                    جدیدترین دستاوردهای علمی نوژین در حوزه بیوتکنولوژی پلاسما
                </h2>
                
                <p class="text-sm text-neutral-700 leading-relaxed line-clamp-3">
                    در سال‌های اخیر، پیشرفت‌های چشمگیری در حوزه فرآوری پلاسما و تولید داروهای مشتق از آن صورت گرفته است. تیم تحقیق و توسعه نوژین با بهره‌گیری از تکنولوژی‌های روز دنیا، موفق به بومی‌سازی فرآیندهایی شده است که نقش حیاتی در درمان بیماری‌های خاص ایفا می‌کنند.
                </p>
                
                <a href="#" class="inline-flex items-center gap-1.5 bg-white text-neutral-900 font-bold px-5 py-2.5 rounded-full text-xs hover:bg-primary transition-colors border border-transparent shadow-sm">
                    مطالعه کامل مقاله
                    <i class="fa-solid fa-arrow-left text-[10px]"></i>
                </a>
            </div>
        </article>
    </section>

    <!-- 2. HORIZONTAL SUB-NAV CATEGORIES -->
    <nav class="max-w-screen-xl mx-auto px-6 lg:px-12 my-10">
        <div class="flex items-center gap-3 overflow-x-auto whitespace-nowrap pb-4 scrollbar-none border-b border-[var(--color-border-subtle)]/40">
            <button class="bg-primary border-transparent text-[var(--color-text-main)] font-black shadow-sm px-5 py-2 rounded-full text-xs md:text-sm cursor-pointer transition-all">همه مقالات</button>
            <button class="border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-bold text-xs md:text-sm px-5 py-2 rounded-full hover:bg-[var(--color-bg-surface)] hover:text-[var(--color-text-main)] transition-all cursor-pointer">دستاوردهای علمی</button>
            <button class="border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-bold text-xs md:text-sm px-5 py-2 rounded-full hover:bg-[var(--color-bg-surface)] hover:text-[var(--color-text-main)] transition-all cursor-pointer">سلامت و تغذیه</button>
            <button class="border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-bold text-xs md:text-sm px-5 py-2 rounded-full hover:bg-[var(--color-bg-surface)] hover:text-[var(--color-text-main)] transition-all cursor-pointer">اخبار مرکز</button>
            <button class="border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-bold text-xs md:text-sm px-5 py-2 rounded-full hover:bg-[var(--color-bg-surface)] hover:text-[var(--color-text-main)] transition-all cursor-pointer">آموزش اهدا</button>
            <button class="border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-bold text-xs md:text-sm px-5 py-2 rounded-full hover:bg-[var(--color-bg-surface)] hover:text-[var(--color-text-main)] transition-all cursor-pointer">تکنولوژی پلاسما</button>
        </div>
    </nav>

    <!-- 3. CORE POSTS GRID (3-Column Framework) -->
    <section class="max-w-screen-xl mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        
        <?php
        $articles = [
            [
                'title' => 'نقش پلاسما در درمان بیماری‌های نادر',
                'image' => 'src/assets/post-1.webp',
                'excerpt' => 'پلاسما حاوی پروتئین‌های حیاتی است که برای تولید داروهای بیماران خاص و نادر استفاده می‌شود.'
            ],
            [
                'title' => 'تغذیه مناسب قبل و بعد از اهدای پلاسما',
                'image' => 'src/assets/post-2.webp',
                'excerpt' => 'با رعایت یک رژیم غذایی سالم و مصرف مایعات کافی، تجربه بهتری از اهدای پلاسما خواهید داشت.'
            ],
            [
                'title' => 'تفاوت پلاسمای انسانی و فرآورده‌های خونی',
                'image' => 'src/assets/post-3.webp',
                'excerpt' => 'بررسی علمی کاربردهای پلاسما در مقایسه با خون کامل و نقش آن در پزشکی مدرن.'
            ],
            [
                'title' => 'چگونه اهداکننده مستمر پلاسما شویم؟',
                'image' => 'src/assets/post-4.webp',
                'excerpt' => 'راهنمای گام به گام برای کسانی که می‌خواهند به طور منظم در نجات جان بیماران سهیم باشند.'
            ],
            [
                'title' => 'استانداردهای ایمنی در مراکز ما',
                'image' => 'src/assets/post-5.webp',
                'excerpt' => 'آشنایی با تجهیزات پیشرفته و پروتکل‌های بهداشتی سخت‌گیرانه در مراکز تامین پلاسما نوژین.'
            ],
            [
                'title' => 'فواید علمی اهدای پلاسما برای بدن',
                'image' => 'src/assets/post-6.webp',
                'excerpt' => 'مطالعات نشان می‌دهد که اهدای منظم پلاسما می‌تواند به بهبود سلامت عمومی کمک کند.'
            ]
        ];

        foreach ($articles as $article):
        ?>
        <article class="flex flex-col group cursor-pointer">
            <!-- Card Image Container -->
            <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden relative group shadow-sm bg-neutral-200">
                <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                
                <!-- Floating Action Circle Button -->
                <div class="absolute bottom-4 left-4 bg-[var(--color-secondary)] text-white w-10 h-10 rounded-full flex items-center justify-center shadow-md group-hover:bg-[var(--color-secondary)] transition-colors duration-300">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>

            <!-- Card Text Block -->
            <div class="mt-5 space-y-3">
                <div class="flex items-center gap-2">
                    <h3 class="text-[var(--color-text-main)] font-black text-lg leading-tight group-hover:text-[var(--color-secondary)] transition-colors">
                        <?= $article['title'] ?>
                    </h3>
                </div>
                <p class="text-sm text-[var(--color-text-muted)] leading-relaxed line-clamp-2">
                    <?= $article['excerpt'] ?>
                </p>
            </div>
        </article>
        <?php endforeach; ?>

    </section>

    <!-- 4. MINIMAL PAGINATION CONTROLS -->
    <nav class="flex items-center justify-center gap-2 my-12" aria-label="Pagination">
        <button class="w-9 h-9 border border-[var(--color-border-subtle)] rounded-xl flex items-center justify-center text-sm font-bold text-[var(--color-text-muted)] hover:border-[var(--color-primary-dark)] hover:text-[var(--color-text-main)] transition-colors cursor-pointer">
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
        </button>
        
        <button class="w-9 h-9 bg-primary border-transparent text-[var(--color-text-main)] font-black rounded-xl flex items-center justify-center text-sm shadow-sm">۱</button>
        <button class="w-9 h-9 border border-[var(--color-border-subtle)] rounded-xl flex items-center justify-center text-sm font-bold text-[var(--color-text-muted)] hover:border-[var(--color-primary-dark)] hover:text-[var(--color-text-main)] transition-colors cursor-pointer">۲</button>
        <button class="w-9 h-9 border border-[var(--color-border-subtle)] rounded-xl flex items-center justify-center text-sm font-bold text-[var(--color-text-muted)] hover:border-[var(--color-primary-dark)] hover:text-[var(--color-text-main)] transition-colors cursor-pointer">۳</button>
        
        <span class="text-[var(--color-text-muted)] px-1">...</span>
        
        <button class="w-9 h-9 border border-[var(--color-border-subtle)] rounded-xl flex items-center justify-center text-sm font-bold text-[var(--color-text-muted)] hover:border-[var(--color-primary-dark)] hover:text-[var(--color-text-main)] transition-colors cursor-pointer">۱۰</button>

        <button class="w-9 h-9 border border-[var(--color-border-subtle)] rounded-xl flex items-center justify-center text-sm font-bold text-[var(--color-text-muted)] hover:border-[var(--color-primary-dark)] hover:text-[var(--color-text-main)] transition-colors cursor-pointer">
            <i class="fa-solid fa-chevron-left text-[10px]"></i>
        </button>
    </nav>

</main>

<?php require_once 'template-parts/footer.php'; ?>
