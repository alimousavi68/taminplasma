<?php
/**
 * Advanced Page Templates Metabox & Header Settings System
 *
 * @package TaminTheme
 * @version 1.0.0
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
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_script('wp-color-picker');
        }

        public function register_metaboxes(): void {
            add_meta_box(
                'tamin_page_options',
                __('تنظیمات اختصاصی برگه و سربرگ (تم نوژین)', 'tamin-theme'),
                [$this, 'render_metabox_content'],
                'page',
                'normal',
                'high'
            );
        }

        public function render_metabox_content($post): void {
            wp_nonce_field('tamin_page_metabox_save', 'tamin_page_metabox_nonce');

            $show_hero = get_post_meta($post->ID, '_tamin_hero_show', true);
            if ($show_hero === '') $show_hero = '1';

            $badge_text = get_post_meta($post->ID, '_tamin_hero_badge', true);
            $custom_title = get_post_meta($post->ID, '_tamin_hero_custom_title', true);
            $custom_desc  = get_post_meta($post->ID, '_tamin_hero_custom_desc', true);
            $bg_color    = get_post_meta($post->ID, '_tamin_hero_bg_color', true);

            $page_template = get_post_meta($post->ID, '_wp_page_template', true);
            ?>

            <style>
                .tamin-metabox-tabs { display: flex; border-bottom: 2px solid #e2e8f0; margin-bottom: 15px; }
                .tamin-metabox-tab { padding: 10px 18px; cursor: pointer; font-weight: bold; border-bottom: 3px solid transparent; color: #64748b; }
                .tamin-metabox-tab.active { border-bottom-color: #eaa824; color: #0f172a; background: #f8fafc; }
                .tamin-tab-content { display: none; padding: 10px 0; }
                .tamin-tab-content.active { display: block; }
                .tamin-field-row { margin-bottom: 15px; }
                .tamin-field-row label { display: block; font-weight: 600; margin-bottom: 6px; }
                .tamin-field-row input[type="text"], .tamin-field-row textarea { width: 100%; max-width: 600px; padding: 8px; border-radius: 6px; border: 1px solid #cbd5e1; }
            </style>

            <div class="tamin-metabox-wrapper">
                <div class="tamin-metabox-tabs">
                    <div class="tamin-metabox-tab active" onclick="taminSwitchTab(event, 'tab-hero')"><?php esc_html_e('تنظیمات هیرو / سربرگ', 'tamin-theme'); ?></div>
                    <div class="tamin-metabox-tab" onclick="taminSwitchTab(event, 'tab-template')"><?php esc_html_e('تنظیمات اختصاصی قالب', 'tamin-theme'); ?></div>
                </div>

                <!-- Tab 1: Hero & Header Settings -->
                <div id="tab-hero" class="tamin-tab-content active">
                    <div class="tamin-field-row">
                        <label>
                            <input type="checkbox" name="tamin_hero_show" value="1" <?php checked($show_hero, '1'); ?> />
                            <?php esc_html_e('نمایش بخش هیرو در این برگه', 'tamin-theme'); ?>
                        </label>
                    </div>

                    <div class="tamin-field-row">
                        <label for="tamin_hero_badge"><?php esc_html_e('متن بج کوچک هدر (Badge):', 'tamin-theme'); ?></label>
                        <input type="text" id="tamin_hero_badge" name="tamin_hero_badge" value="<?php echo esc_attr($badge_text); ?>" placeholder="<?php esc_attr_e('مثال: داستان نوژین یا ارتباط با ما', 'tamin-theme'); ?>" />
                    </div>

                    <div class="tamin-field-row">
                        <label for="tamin_hero_custom_title"><?php esc_html_e('عنوان اختصاصی هدر (در صورت خالی بودن، عنوان برگه استفاده می‌شود):', 'tamin-theme'); ?></label>
                        <input type="text" id="tamin_hero_custom_title" name="tamin_hero_custom_title" value="<?php echo esc_attr($custom_title); ?>" />
                    </div>

                    <div class="tamin-field-row">
                        <label for="tamin_hero_custom_desc"><?php esc_html_e('توضیحات اختصاصی زیر عنوان:', 'tamin-theme'); ?></label>
                        <textarea id="tamin_hero_custom_desc" name="tamin_hero_custom_desc" rows="3"><?php echo esc_textarea($custom_desc); ?></textarea>
                    </div>
                </div>

                <!-- Tab 2: Template Specific Settings -->
                <div id="tab-template" class="tamin-tab-content">
                    <p class="description">
                        <?php printf(esc_html__('قالب فعال این برگه: %s', 'tamin-theme'), '<code>' . esc_html($page_template ?: 'default') . '</code>'); ?>
                    </p>
                    <?php if ($page_template === 'page-contact.php') : ?>
                        <div class="tamin-field-row">
                            <label for="tamin_contact_phone"><?php esc_html_e('شماره تلفن واحد پشتیبانی:', 'tamin-theme'); ?></label>
                            <input type="text" id="tamin_contact_phone" name="tamin_contact_phone" value="<?php echo esc_attr(get_post_meta($post->ID, '_tamin_contact_phone', true)); ?>" placeholder="۰۲۱-۴۹۳۶۱۳۱۸" />
                        </div>
                    <?php elseif ($page_template === 'page-units.php') : ?>
                        <div class="tamin-field-row">
                            <label for="tamin_units_count_text"><?php esc_html_e('متن خلاصه تعداد شعب:', 'tamin-theme'); ?></label>
                            <input type="text" id="tamin_units_count_text" name="tamin_units_count_text" value="<?php echo esc_attr(get_post_meta($post->ID, '_tamin_units_count_text', true)); ?>" placeholder="<?php esc_attr_e('۱۲ مرکز فعال در سراسر کشور', 'tamin-theme'); ?>" />
                        </div>
                    <?php else : ?>
                        <p><?php esc_html_e('این برگه از قالب استاندارد استفاده می‌کند.', 'tamin-theme'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <script>
                function taminSwitchTab(evt, tabId) {
                    var tabs = document.querySelectorAll('.tamin-metabox-tab');
                    var contents = document.querySelectorAll('.tamin-tab-content');
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));
                    evt.currentTarget.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                }
            </script>
            <?php
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

            $show_hero = isset($_POST['tamin_hero_show']) ? '1' : '0';
            update_post_meta($post_id, '_tamin_hero_show', $show_hero);

            if (isset($_POST['tamin_hero_badge'])) {
                update_post_meta($post_id, '_tamin_hero_badge', sanitize_text_field($_POST['tamin_hero_badge']));
            }
            if (isset($_POST['tamin_hero_custom_title'])) {
                update_post_meta($post_id, '_tamin_hero_custom_title', sanitize_text_field($_POST['tamin_hero_custom_title']));
            }
            if (isset($_POST['tamin_hero_custom_desc'])) {
                update_post_meta($post_id, '_tamin_hero_custom_desc', sanitize_textarea_field($_POST['tamin_hero_custom_desc']));
            }
            if (isset($_POST['tamin_contact_phone'])) {
                update_post_meta($post_id, '_tamin_contact_phone', sanitize_text_field($_POST['tamin_contact_phone']));
            }
            if (isset($_POST['tamin_units_count_text'])) {
                update_post_meta($post_id, '_tamin_units_count_text', sanitize_text_field($_POST['tamin_units_count_text']));
            }
        }
    }

    new Tamin_Page_Metaboxes();
}
