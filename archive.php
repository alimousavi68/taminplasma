<?php
/**
 * WordPress Archive & Blog Template
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();

// Featured Post for Header Banner
$featured_query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
]);
?>

<main dir="rtl" class="bg-[var(--color-bg-base)] min-h-screen py-8">

    <!-- 1. FEATURED ARTICLE BANNER -->
    <section class="max-w-screen-xl mx-auto px-6 lg:px-12 my-8">
        <?php
        if ($featured_query->have_posts()) :
            while ($featured_query->have_posts()) :
                $featured_query->the_post();
                $feat_thumb = tamin_get_post_thumbnail_url(get_the_ID(), 'full');
                $feat_read  = tamin_get_reading_time(get_the_ID());
                ?>
                <article class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-[var(--color-surface-warm)] border border-[var(--color-border-subtle)] rounded-[3rem] p-6 shadow-sm group cursor-pointer overflow-hidden">
                    <div class="lg:col-span-6 w-full aspect-[16/10] rounded-[2.25rem] overflow-hidden relative bg-[var(--color-border-subtle)]">
                        <img src="<?php echo esc_url($feat_thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-500">
                    </div>

                    <div class="lg:col-span-6 space-y-4 text-right">
                        <div class="flex items-center justify-end gap-2 text-xs text-neutral-800 font-semibold">
                            <span><?php printf(esc_html__('زمان مطالعه: %d دقیقه', 'tamin-theme'), $feat_read); ?></span>
                            <span class="w-1 h-1 bg-neutral-900/30 rounded-full"></span>
                            <span><?php echo esc_html(get_the_date('j F Y')); ?></span>
                        </div>
                        
                        <h2 class="font-black text-xl md:text-2xl lg:text-3xl text-neutral-900 leading-tight">
                            <a href="<?php the_permalink(); ?>" class="hover:text-[var(--color-secondary)] transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <p class="text-sm text-neutral-700 leading-relaxed line-clamp-3">
                            <?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?>
                        </p>
                        
                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1.5 bg-white text-neutral-900 font-bold px-5 py-2.5 rounded-full text-xs hover:bg-primary transition-colors border border-transparent shadow-sm">
                            <?php esc_html_e('مطالعه کامل مقاله', 'tamin-theme'); ?>
                            <i class="fa-solid fa-arrow-left text-[10px]"></i>
                        </a>
                    </div>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            // Static Fallback Featured Banner
            ?>
            <article class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-[var(--color-surface-warm)] border border-[var(--color-border-subtle)] rounded-[3rem] p-6 shadow-sm group cursor-pointer overflow-hidden">
                <div class="lg:col-span-6 w-full aspect-[16/10] rounded-[2.25rem] overflow-hidden relative bg-[var(--color-border-subtle)]">
                    <img src="<?php echo esc_url(tamin_img_url('post-4.webp')); ?>" alt="Featured Article" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-500">
                </div>

                <div class="lg:col-span-6 space-y-4 text-right">
                    <div class="flex items-center justify-end gap-2 text-xs text-neutral-800 font-semibold">
                        <span><?php esc_html_e('زمان مطالعه: ۵ دقیقه', 'tamin-theme'); ?></span>
                        <span class="w-1 h-1 bg-neutral-900/30 rounded-full"></span>
                        <span><?php esc_html_e('۱۰ خرداد ۱۴۰۵', 'tamin-theme'); ?></span>
                    </div>
                    
                    <h2 class="font-black text-xl md:text-2xl lg:text-3xl text-neutral-900 leading-tight">
                        <?php esc_html_e('جدیدترین دستاوردهای علمی نوژین در حوزه بیوتکنولوژی پلاسما', 'tamin-theme'); ?>
                    </h2>
                    
                    <p class="text-sm text-neutral-700 leading-relaxed line-clamp-3">
                        <?php esc_html_e('در سال‌های اخیر، پیشرفت‌های چشمگیری در حوزه فرآوری پلاسما و تولید داروهای مشتق از آن صورت گرفته است. تیم تحقیق و توسعه نوژین با بهره‌گیری از تکنولوژی‌های روز دنیا، موفق به بومی‌سازی فرآیندهایی شده است که نقش حیاتی در درمان بیماری‌های خاص ایفا می‌کنند.', 'tamin-theme'); ?>
                    </p>
                    
                    <a href="<?php echo esc_url(home_url('/single-post')); ?>" class="inline-flex items-center gap-1.5 bg-white text-neutral-900 font-bold px-5 py-2.5 rounded-full text-xs hover:bg-primary transition-colors border border-transparent shadow-sm">
                        <?php esc_html_e('مطالعه کامل مقاله', 'tamin-theme'); ?>
                        <i class="fa-solid fa-arrow-left text-[10px]"></i>
                    </a>
                </div>
            </article>
            <?php
        endif;
        ?>
    </section>

    <!-- 2. HORIZONTAL SUB-NAV CATEGORIES -->
    <nav class="max-w-screen-xl mx-auto px-6 lg:px-12 my-10">
        <div class="flex items-center gap-3 overflow-x-auto whitespace-nowrap pb-4 scrollbar-none border-b border-[var(--color-border-subtle)]/40">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog')); ?>" class="<?php echo !is_category() ? 'bg-primary border-transparent text-[var(--color-text-main)] font-black' : 'border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-bold hover:bg-[var(--color-bg-surface)]'; ?> shadow-sm px-5 py-2 rounded-full text-xs md:text-sm transition-all">
                <?php esc_html_e('همه مقالات', 'tamin-theme'); ?>
            </a>
            <?php
            $categories = get_categories(['hide_empty' => false]);
            foreach ($categories as $cat) {
                $is_active = is_category($cat->term_id);
                ?>
                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="<?php echo $is_active ? 'bg-primary border-transparent text-[var(--color-text-main)] font-black' : 'border border-[var(--color-border-subtle)] text-[var(--color-text-muted)] font-bold hover:bg-[var(--color-bg-surface)]'; ?> text-xs md:text-sm px-5 py-2 rounded-full transition-all">
                    <?php echo esc_html($cat->name); ?>
                </a>
                <?php
            }
            ?>
        </div>
    </nav>

    <!-- 3. CORE POSTS GRID (3-Column Framework) -->
    <section class="max-w-screen-xl mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                $thumb_url = tamin_get_post_thumbnail_url(get_the_ID());
                ?>
                <article class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden relative group shadow-sm bg-neutral-200">
                        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        
                        <a href="<?php the_permalink(); ?>" class="absolute bottom-4 left-4 bg-[var(--color-secondary)] text-white w-10 h-10 rounded-full flex items-center justify-center shadow-md group-hover:bg-[var(--color-secondary)] transition-colors duration-300">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>

                    <div class="mt-5 space-y-3">
                        <div class="flex items-center gap-2">
                            <h3 class="text-[var(--color-text-main)] font-black text-lg leading-tight group-hover:text-[var(--color-secondary)] transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                        <p class="text-sm text-[var(--color-text-muted)] leading-relaxed line-clamp-2">
                            <?php echo esc_html(wp_strip_all_tags(get_the_excerpt())); ?>
                        </p>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            // Static Fallback Articles Grid
            $fallback_articles = [
                ['title' => __('نقش پلاسما در درمان بیماری‌های نادر', 'tamin-theme'), 'image' => 'post-1.webp', 'excerpt' => __('پلاسما حاوی پروتئین‌های حیاتی است که برای تولید داروهای بیماران خاص و نادر استفاده می‌شود.', 'tamin-theme')],
                ['title' => __('تغذیه مناسب قبل و بعد از اهدای پلاسما', 'tamin-theme'), 'image' => 'post-2.webp', 'excerpt' => __('با رعایت یک رژیم غذایی سالم و مصرف مایعات کافی، تجربه بهتری از اهدای پلاسما خواهید داشت.', 'tamin-theme')],
                ['title' => __('تفاوت پلاسمای انسانی و فرآورده‌های خونی', 'tamin-theme'), 'image' => 'post-3.webp', 'excerpt' => __('بررسی علمی کاربردهای پلاسما در مقایسه با خون کامل و نقش آن در پزشکی مدرن.', 'tamin-theme')],
                ['title' => __('چگونه اهداکننده مستمر پلاسما شویم؟', 'tamin-theme'), 'image' => 'post-4.webp', 'excerpt' => __('راهنمای گام به گام برای کسانی که می‌خواهند به طور منظم در نجات جان بیماران سهیم باشند.', 'tamin-theme')],
                ['title' => __('استانداردهای ایمنی در مراکز ما', 'tamin-theme'), 'image' => 'post-5.webp', 'excerpt' => __('آشنایی با تجهیزات پیشرفته و پروتکل‌های بهداشتی سخت‌گیرانه در مراکز تامین پلاسما نوژین.', 'tamin-theme')],
                ['title' => __('فواید علمی اهدای پلاسما برای بدن', 'tamin-theme'), 'image' => 'post-6.webp', 'excerpt' => __('مطالعات نشان می‌دهد که اهدای منظم پلاسما می‌تواند به بهبود سلامت عمومی کمک کند.', 'tamin-theme')],
            ];

            foreach ($fallback_articles as $article) :
                ?>
                <article class="flex flex-col group cursor-pointer">
                    <div class="w-full aspect-[4/3] rounded-[2rem] overflow-hidden relative group shadow-sm bg-neutral-200">
                        <img src="<?php echo esc_url(tamin_img_url($article['image'])); ?>" alt="<?php echo esc_attr($article['title']); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        
                        <a href="<?php echo esc_url(home_url('/single-post')); ?>" class="absolute bottom-4 left-4 bg-[var(--color-secondary)] text-white w-10 h-10 rounded-full flex items-center justify-center shadow-md group-hover:bg-[var(--color-secondary)] transition-colors duration-300">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>

                    <div class="mt-5 space-y-3">
                        <div class="flex items-center gap-2">
                            <h3 class="text-[var(--color-text-main)] font-black text-lg leading-tight group-hover:text-[var(--color-secondary)] transition-colors">
                                <a href="<?php echo esc_url(home_url('/single-post')); ?>"><?php echo esc_html($article['title']); ?></a>
                            </h3>
                        </div>
                        <p class="text-sm text-[var(--color-text-muted)] leading-relaxed line-clamp-2">
                            <?php echo esc_html($article['excerpt']); ?>
                        </p>
                    </div>
                </article>
                <?php
            endforeach;
        endif;
        ?>

    </section>

    <!-- 4. PAGINATION CONTROLS -->
    <nav class="flex items-center justify-center gap-2 my-12" aria-label="Pagination">
        <?php
        the_posts_pagination([
            'prev_text' => '<i class="fa-solid fa-chevron-right text-[10px]"></i>',
            'next_text' => '<i class="fa-solid fa-chevron-left text-[10px]"></i>',
            'class'     => 'flex items-center gap-2',
        ]);
        ?>
    </nav>

</main>

<?php
get_footer();
