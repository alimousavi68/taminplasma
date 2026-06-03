    <!-- ============================================
        FAQ & CONTACT SECTION
    ============================================ -->
    <section class="faq-contact-section" id="faq-contact-section">
        <div class="faq-contact-container">

            <!-- Row 1: FAQ Section -->
            <div class="faq-row">
                <!-- Right Column: Text Content -->
                <div class="faq-content-col">
                    <div class="faq-badge">سوالات متداول</div>
                    <h2 class="faq-title"><?php echo esc_html(get_theme_mod('persis_faq_title', 'سوالات متداول مشتریان ما')); ?></h2>
                    <h3 class="faq-subtitle">آیا سوالات بیشتری دارید؟</h3>
                    <p class="faq-desc">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                    </p>
                    <div class="faq-actions">
                        <a href="#" class="faq-btn-combined">
                            <span class="faq-btn-combined__text">مشاهده همه</span>
                            <span class="faq-btn-combined__circle">
                                <svg class="faq-btn-combined__icon" width="19" height="15" viewBox="0 0 19 15"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.263855 7.84759L6.57111 14.1548C6.74684 14.3306 6.97757 14.4189 7.20826 14.4189C7.43896 14.4189 7.66969 14.3306 7.84541 14.1548C8.19777 13.8025 8.19777 13.2329 7.84541 12.8805L3.07559 8.11072H17.1211C17.6194 8.11072 18.0222 7.707 18.0222 7.20956C18.0222 6.71211 17.6194 6.30839 17.1211 6.30839H3.07559L7.84541 1.53857C8.19777 1.18621 8.19777 0.616621 7.84541 0.264266C7.49306 -0.0880887 6.92347 -0.0880887 6.57111 0.264266L0.263855 6.57153C0.180046 6.65533 0.114225 6.7544 0.0682659 6.86524C-0.0227528 7.08512 -0.0227528 7.33399 0.0682659 7.55387C0.114225 7.66471 0.180046 7.76378 0.263855 7.84759Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Left Column: FAQ Accordion -->
                <div class="faq-accordion-col">
                    <div class="faq-accordion">

                        <!-- Accordion Item 1 (Active by Default) -->
                        <?php
                        $faq_query = new WP_Query(array(
                            'post_type' => 'faq',
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        ));
                        $is_first = true;
                        if ($faq_query->have_posts()):
                            while ($faq_query->have_posts()): $faq_query->the_post();
                        ?>
                            <div class="accordion-item <?php echo $is_first ? 'is-active' : ''; ?>">
                                <button class="accordion-header">
                                    <span class="accordion-header__title"><?php the_title(); ?></span>
                                    <span class="accordion-header__icon">
                                        <svg class="accordion-toggle-icon" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="toggle-line-h"
                                                d="M14.75 8.75H0.75C0.336 8.75 0 8.414 0 8C0 7.586 0.336 7.25 0.75 7.25H14.75C15.164 7.25 15.5 7.586 15.5 8C15.5 8.414 15.164 8.75 14.75 8.75Z"
                                                fill="currentColor" />
                                            <path class="toggle-line-v"
                                                d="M8 14.75C7.586 14.75 7.25 14.414 7.25 14V0.75C7.25 0.336 7.586 0 8 0C8.414 0 8.75 0.336 8.75 0.75V14C8.75 14.414 8.414 14.75 8 14.75Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                                $is_first = false;
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>

                    </div>
                </div>
            </div>

            <!-- Row 2: Contact & Support Section -->
            <div class="contact-row">
                <!-- Right Column: Contact Form Card -->
                <div class="contact-form-col">
                    <div class="contact-card">
                        <form class="contact-form" id="main-contact-form" onsubmit="event.preventDefault();">

                            <!-- Row 1: Name and Phone -->
                            <div class="contact-form__row-2col">
                                <input type="text" class="contact-form__input" placeholder="نام و نام خانوادگی"
                                    required>
                                <input type="tel" class="contact-form__input" placeholder="شماره تماس" required>
                            </div>

                            <!-- Row 2: Email -->
                            <div class="contact-form__row-full">
                                <input type="email" class="contact-form__input" placeholder="ایمیل" required>
                            </div>

                            <!-- Row 3: Dropdown Select -->
                            <div class="contact-form__row-full">
                                <div class="contact-form__select-wrapper">
                                    <select class="contact-form__select" required>
                                        <option value="" disabled selected hidden>درخواست ثبت ایده</option>
                                        <option value="idea-1">ثبت ایده دارویی</option>
                                        <option value="idea-2">ثبت ایده زیست‌فناوری</option>
                                        <option value="idea-3">شتاب‌دهی و سرمایه‌گذاری</option>
                                        <option value="idea-4">سایر درخواست‌ها</option>
                                    </select>
                                    <span class="contact-form__select-arrow">
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L7 7L13 1" stroke="var(--color-text-gray-dark)" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <!-- Row 4: Message (Textarea) -->
                            <div class="contact-form__row-full">
                                <textarea class="contact-form__textarea" placeholder="پیام شما..." required></textarea>
                            </div>

                            <!-- Row 5: Submit button -->
                            <div class="contact-form__row-full">
                                <button type="submit" class="contact-form__submit-btn">ثبت اطلاعات</button>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Left Column: Support Text & Image -->
                <div class="contact-support-col">
                    <div class="support-text-part">
                        <div class="support-badge">مشاوره رایگان</div>
                        <h2 class="support-title">خدمات حرفه‌ای و <span class="text-purple">پشتیبانی اختصاصی</span></h2>
                        <p class="support-desc">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                            است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                        </p>
                    </div>
                    <div class="support-image-wrapper">
                        <img class="support-image" src="<?php echo get_template_directory_uri(); ?>/images/Mask group.jpg" alt="پشتیبانی اختصاصی">
                    </div>
                </div>
            </div>

        </div>
    </section>
