<?php
/**
 * Dynamic Single Post Template
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

get_header();

while (have_posts()) :
    the_post();
    $post_id   = get_the_ID();
    $thumb_url = tamin_get_post_thumbnail_url($post_id, 'full');
    $read_time = tamin_get_reading_time($post_id);
    $category  = tamin_get_primary_category($post_id);
    $post_url  = urlencode(get_permalink());
    $post_title = urlencode(get_the_title());
    ?>

    <!-- 1. READING PROGRESS INDICATOR -->
    <div id="reading-progress" class="fixed top-0 left-0 h-1 bg-primary z-[100] w-0 transition-all duration-150 ease-out"></div>

    <main dir="rtl" class="bg-[var(--color-bg-base)] min-h-screen">

        <!-- 2. CONTENT META HEADER -->
        <header class="max-w-3xl mx-auto pt-16 pb-6 text-right px-4 space-y-4">
            <!-- Breadcrumbs Trail -->
            <nav class="text-xs text-[var(--color-text-muted)] font-medium gap-2 flex items-center" aria-label="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary transition-colors"><?php esc_html_e('صفحه اصلی', 'tamin-theme'); ?></a>
                <i class="fa-solid fa-chevron-left text-[8px] opacity-50"></i>
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog')); ?>" class="hover:text-primary transition-colors"><?php esc_html_e('اخبار و مقالات', 'tamin-theme'); ?></a>
                <i class="fa-solid fa-chevron-left text-[8px] opacity-50"></i>
                <span class="text-[var(--color-text-main)]"><?php echo esc_html(wp_trim_words(get_the_title(), 5, '...')); ?></span>
            </nav>

            <!-- Title (H1) -->
            <h1 class="font-black text-2xl md:text-3xl lg:text-4xl text-[var(--color-text-main)] leading-tight">
                <?php the_title(); ?>
            </h1>

            <!-- Author Info Row -->
            <div class="flex items-center gap-3 mt-4 pb-4 border-b border-neutral-200/50">
                <div class="w-10 h-10 rounded-full bg-neutral-200 overflow-hidden flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-user-doctor text-neutral-400"></i>
                </div>
                <div class="text-[10px] md:text-xs text-[var(--color-text-muted)] font-medium leading-relaxed">
                    <span><?php printf(esc_html__('نویسنده: %s', 'tamin-theme'), get_the_author() ?: __('دپارتمان پزشکی نوژین', 'tamin-theme')); ?></span>
                    <span class="mx-2 opacity-30">|</span>
                    <span><?php printf(esc_html__('زمان مطالعه: %d دقیقه', 'tamin-theme'), $read_time); ?></span>
                    <span class="mx-2 opacity-30">|</span>
                    <span><?php printf(esc_html__('تاریخ انتشار: %s', 'tamin-theme'), get_the_date('j F Y')); ?></span>
                </div>
            </div>
        </header>

        <!-- 3. GRAND WIDE HERO BANNER -->
        <section class="max-w-screen-xl mx-auto px-6 lg:px-12 my-4">
            <div class="w-full aspect-[21/9] rounded-[2.5rem] lg:rounded-[3.5rem] overflow-hidden shadow-sm border border-neutral-100">
                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover">
            </div>
        </section>

        <!-- 4. SPLIT TWO-COLUMN READING LAYOUT -->
        <section class="max-w-screen-xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start my-10 pb-20">
            
            <!-- RIGHT COLUMN: ARTICLE MAIN BODY -->
            <article class="lg:col-span-8 space-y-6 text-right">
                <div class="prose max-w-none text-[var(--color-text-main)] text-base md:text-lg leading-loose space-y-6 text-justify font-normal">
                    <?php the_content(); ?>
                </div>

                <!-- Article Tags -->
                <?php
                $tags = get_the_tags();
                if ($tags) :
                    ?>
                    <div class="flex flex-wrap gap-2 pt-8 border-t border-neutral-100">
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="text-[10px] font-bold text-[var(--color-text-muted)] bg-neutral-100 px-3 py-1 rounded-full hover:bg-primary hover:text-black transition-colors">
                                #<?php echo esc_html($tag->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </article>

            <!-- LEFT COLUMN: STICKY CONVERSION SIDEBAR -->
            <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-28">
                
                <!-- Related Stories Widget -->
                <div class="bg-white border border-neutral-100 p-5 rounded-[2rem] shadow-sm space-y-4">
                    <h4 class="font-black text-[var(--color-text-main)] text-sm border-b border-neutral-50 pb-3"><?php esc_html_e('مقالات پیشنهادی', 'tamin-theme'); ?></h4>
                    
                    <div class="space-y-4">
                        <?php
                        $related_cats = wp_get_post_categories($post_id);
                        $related_query = new WP_Query([
                            'category__in'   => $related_cats,
                            'post__not_in'   => [$post_id],
                            'posts_per_page' => 3,
                        ]);

                        if ($related_query->have_posts()) :
                            while ($related_query->have_posts()) :
                                $related_query->the_post();
                                $rel_thumb = tamin_get_post_thumbnail_url(get_the_ID());
                                $rel_read  = tamin_get_reading_time(get_the_ID());
                                ?>
                                <a href="<?php the_permalink(); ?>" class="flex items-center gap-3 group">
                                    <img src="<?php echo esc_url($rel_thumb); ?>" class="w-16 h-16 rounded-xl object-cover shrink-0" alt="<?php echo esc_attr(get_the_title()); ?>">
                                    <div class="space-y-1">
                                        <h5 class="text-xs font-bold text-[var(--color-text-main)] group-hover:text-[var(--color-secondary)] transition-colors line-clamp-2"><?php the_title(); ?></h5>
                                        <span class="text-[10px] text-[var(--color-text-muted)]"><?php printf(esc_html__('%d دقیقه مطالعه', 'tamin-theme'), $rel_read); ?></span>
                                    </div>
                                </a>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            // Fallback Related Items
                            $fallback_rel = [
                                ['title' => __('نقش پلاسما در درمان بیماری‌های نادر', 'tamin-theme'), 'img' => 'post-1.webp'],
                                ['title' => __('تغذیه مناسب قبل و بعد از اهدا', 'tamin-theme'), 'img' => 'post-2.webp'],
                                ['title' => __('تفاوت پلاسمای انسانی و خون کامل', 'tamin-theme'), 'img' => 'post-3.webp'],
                            ];
                            foreach ($fallback_rel as $rel) :
                                ?>
                                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="flex items-center gap-3 group">
                                    <img src="<?php echo esc_url(tamin_img_url($rel['img'])); ?>" class="w-16 h-16 rounded-xl object-cover shrink-0" alt="<?php echo esc_attr($rel['title']); ?>">
                                    <div class="space-y-1">
                                        <h5 class="text-xs font-bold text-[var(--color-text-main)] group-hover:text-[var(--color-secondary)] transition-colors line-clamp-2"><?php echo esc_html($rel['title']); ?></h5>
                                        <span class="text-[10px] text-[var(--color-text-muted)]"><?php esc_html_e('۴ دقیقه مطالعه', 'tamin-theme'); ?></span>
                                    </div>
                                </a>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>

                <!-- FLOATING FUNNEL ANCHOR (Conversion Box) -->
                <div class="bg-[var(--color-secondary)] text-white p-8 rounded-[2.5rem] text-center shadow-lg relative overflow-hidden group">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/5 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-black/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

                    <div class="relative z-10 space-y-4">
                        <h4 class="font-black text-lg md:text-xl text-white mb-2 leading-tight"><?php esc_html_e('شما هم می‌توانید قهرمان باشید', 'tamin-theme'); ?></h4>
                        <p class="text-xs text-neutral-300 leading-relaxed">
                            <?php esc_html_e('تنها با صرف ۴۵ دقیقه، امید به زندگی را به چندین خانواده بازگردانید و سلامت خود را تضمین کنید.', 'tamin-theme'); ?>
                        </p>
                        <a href="<?php echo esc_url(home_url('/request')); ?>" class="w-full bg-primary text-neutral-950 font-black text-center py-4 rounded-full inline-block mt-4 text-sm hover:scale-[1.02] transition-transform shadow-md cursor-pointer">
                            <?php esc_html_e('رزرو سریع نوبت اهدا', 'tamin-theme'); ?>
                        </a>
                    </div>
                </div>

                <!-- Share Article -->
                <div class="flex items-center justify-between bg-white/50 border border-neutral-100 p-4 rounded-2xl">
                    <span class="text-xs font-bold text-[var(--color-text-muted)]"><?php esc_html_e('اشتراک‌گذاری مقاله:', 'tamin-theme'); ?></span>
                    <div class="flex gap-3">
                        <a href="https://t.me/share/url?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" rel="noopener noreferrer" class="text-neutral-400 hover:text-[var(--color-secondary)] transition-colors"><i class="fa-brands fa-telegram"></i></a>
                        <a href="https://api.whatsapp.com/send?text=<?php echo $post_title; ?>%20<?php echo $post_url; ?>" target="_blank" rel="noopener noreferrer" class="text-neutral-400 hover:text-[var(--color-secondary)] transition-colors"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" target="_blank" rel="noopener noreferrer" class="text-neutral-400 hover:text-[var(--color-secondary)] transition-colors"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>

            </aside>
        </section>

    </main>

    <script>
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            const progressBar = document.getElementById('reading-progress');
            if (progressBar) {
                progressBar.style.width = scrolled + "%";
            }
        });
    </script>

<?php
endwhile;

get_footer();
