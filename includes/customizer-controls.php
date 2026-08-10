<?php
/**
 * Tamin Customizer — Custom Control Classes
 *
 * @package TaminTheme
 */

if (!defined('ABSPATH')) {
    exit;
}

/* ==========================================================================
   Tamin_Group_Control
   
   یک کنترل ترکیبی که یک گروه از تنظیمات مرتبط را داخل یک آکاردئون رندر می‌کند.
   ========================================================================== */
if (class_exists('WP_Customize_Control')) {

class Tamin_Group_Control extends WP_Customize_Control {

    public $type        = 'tamin_group';
    public $group_icon  = '⚙️';
    public $open        = false;
    public $fields      = [];
    public $capability  = 'edit_theme_options';
    public $settings    = [];

    public function __construct($manager, $id, $args = []) {
        $this->capability = 'edit_theme_options';
        $this->settings   = [];
        parent::__construct($manager, $id, $args);
        $this->capability = 'edit_theme_options';
        $this->settings   = [];
    }

    public function render_content() {
        $open_class = $this->open ? 'tamin-group--open' : '';
        ?>
        <div class="tamin-group <?php echo esc_attr($open_class); ?>">

            <button type="button" class="tamin-group__header" aria-expanded="<?php echo $this->open ? 'true' : 'false'; ?>">
                <span class="tamin-group__icon"><?php echo esc_html($this->group_icon); ?></span>
                <span class="tamin-group__title"><?php echo esc_html($this->label); ?></span>
                <span class="tamin-group__chevron">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path d="M2 4L6 8L10 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>

            <div class="tamin-group__body">
                <?php
                foreach ($this->fields as $field) {
                    $setting_key = $field['setting'] ?? '';
                    $label       = $field['label']   ?? '';
                    $type        = $field['type']     ?? 'text';
                    $desc        = $field['description'] ?? '';
                    $default_val = $field['default'] ?? '';
                    $options     = $field['options']  ?? [];

                    $current = get_theme_mod($setting_key, $default_val);
                    ?>
                    <div class="tamin-group__field tamin-group__field--<?php echo esc_attr($type); ?>">
                        <?php if ($type !== 'checkbox') : ?>
                            <label class="tamin-group__field-label" for="tamin-field-<?php echo esc_attr($setting_key); ?>">
                                <?php echo esc_html($label); ?>
                            </label>
                        <?php endif; ?>

                        <?php if ($type === 'text' || $type === 'url' || $type === 'email') : ?>
                            <input
                                type="<?php echo esc_attr($type); ?>"
                                id="tamin-field-<?php echo esc_attr($setting_key); ?>"
                                class="tamin-group__input"
                                value="<?php echo esc_attr($current); ?>"
                                data-customize-setting-link="<?php echo esc_attr($setting_key); ?>"
                            />

                        <?php elseif ($type === 'textarea') : ?>
                            <textarea
                                id="tamin-field-<?php echo esc_attr($setting_key); ?>"
                                class="tamin-group__input tamin-group__input--textarea"
                                rows="3"
                                data-customize-setting-link="<?php echo esc_attr($setting_key); ?>"><?php echo esc_textarea($current); ?></textarea>

                        <?php elseif ($type === 'color') : ?>
                            <div class="tamin-group__color-wrap">
                                <input
                                    type="color"
                                    id="tamin-field-<?php echo esc_attr($setting_key); ?>"
                                    class="tamin-group__color-picker"
                                    value="<?php echo esc_attr($current); ?>"
                                    data-customize-setting-link="<?php echo esc_attr($setting_key); ?>"
                                />
                                <input
                                    type="text"
                                    class="tamin-group__color-hex"
                                    value="<?php echo esc_attr($current); ?>"
                                    maxlength="7"
                                    aria-label="کد رنگ HEX"
                                />
                            </div>

                        <?php elseif ($type === 'checkbox') : ?>
                            <label class="tamin-group__toggle-label">
                                <input
                                    type="checkbox"
                                    id="tamin-field-<?php echo esc_attr($setting_key); ?>"
                                    class="tamin-group__toggle"
                                    <?php checked((bool) $current); ?>
                                    data-customize-setting-link="<?php echo esc_attr($setting_key); ?>"
                                />
                                <span class="tamin-group__toggle-track">
                                    <span class="tamin-group__toggle-thumb"></span>
                                </span>
                                <span class="tamin-group__toggle-text"><?php echo esc_html($label); ?></span>
                            </label>

                        <?php elseif ($type === 'range') : ?>
                            <div class="tamin-group__range-wrap">
                                <input
                                    type="range"
                                    id="tamin-field-<?php echo esc_attr($setting_key); ?>"
                                    class="tamin-group__range"
                                    value="<?php echo esc_attr($current); ?>"
                                    min="<?php echo esc_attr($field['min'] ?? 0); ?>"
                                    max="<?php echo esc_attr($field['max'] ?? 100); ?>"
                                    step="<?php echo esc_attr($field['step'] ?? 1); ?>"
                                    data-customize-setting-link="<?php echo esc_attr($setting_key); ?>"
                                />
                                <output class="tamin-group__range-value"><?php echo esc_html($current); ?></output>
                                <?php if (!empty($field['unit'])) : ?>
                                    <span class="tamin-group__range-unit"><?php echo esc_html($field['unit']); ?></span>
                                <?php endif; ?>
                            </div>

                        <?php elseif ($type === 'select') : ?>
                            <select
                                id="tamin-field-<?php echo esc_attr($setting_key); ?>"
                                class="tamin-group__input"
                                data-customize-setting-link="<?php echo esc_attr($setting_key); ?>"
                            >
                                <?php foreach ($options as $val => $opt_label) : ?>
                                    <option value="<?php echo esc_attr($val); ?>" <?php selected($current, $val); ?>>
                                        <?php echo esc_html($opt_label); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                        <?php elseif ($type === 'number') : ?>
                            <input
                                type="number"
                                id="tamin-field-<?php echo esc_attr($setting_key); ?>"
                                class="tamin-group__input tamin-group__input--number"
                                value="<?php echo esc_attr($current); ?>"
                                min="<?php echo esc_attr($field['min'] ?? ''); ?>"
                                max="<?php echo esc_attr($field['max'] ?? ''); ?>"
                                step="<?php echo esc_attr($field['step'] ?? 1); ?>"
                                data-customize-setting-link="<?php echo esc_attr($setting_key); ?>"
                            />

                        <?php endif; ?>

                        <?php if (!empty($desc)) : ?>
                            <p class="tamin-group__field-desc"><?php echo esc_html($desc); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
}

class Tamin_Repeater_Control extends WP_Customize_Control {
    public $type = 'tamin_repeater';
    public $fields = []; // Array of field definitions
    public $item_label = 'آیتم';

    public function render_content() {
        $value = $this->value();
        $items = json_decode($value, true);
        if (!is_array($items)) {
            $items = [];
        }

        // Helper function to render fields for an item
        $render_fields = function($item_val = [], $index = '{index}') {
            ob_start();
            foreach ($this->fields as $field) {
                $type = $field['type'] ?? 'text';
                $id = $field['id'] ?? '';
                $label = $field['label'] ?? '';
                $desc = $field['description'] ?? '';
                $options = $field['options'] ?? [];
                
                $val = isset($item_val[$id]) ? $item_val[$id] : ($field['default'] ?? '');
                
                echo '<div class="tamin-repeater-field tamin-group__field tamin-group__field--' . esc_attr($type) . '">';
                if ($type !== 'checkbox') {
                    echo '<label class="tamin-group__field-label">' . esc_html($label) . '</label>';
                }

                if ($type === 'text' || $type === 'url' || $type === 'number') {
                    echo '<input type="' . esc_attr($type) . '" data-field="' . esc_attr($id) . '" class="tamin-group__input tamin-repeater-input" value="' . esc_attr($val) . '" />';
                } elseif ($type === 'textarea') {
                    echo '<textarea data-field="' . esc_attr($id) . '" class="tamin-group__input tamin-group__input--textarea tamin-repeater-input" rows="3">' . esc_textarea($val) . '</textarea>';
                } elseif ($type === 'checkbox') {
                    echo '<label class="tamin-group__toggle-label">';
                    echo '<input type="checkbox" data-field="' . esc_attr($id) . '" class="tamin-group__toggle tamin-repeater-input" ' . checked((bool)$val, true, false) . ' />';
                    echo '<span class="tamin-group__toggle-track"><span class="tamin-group__toggle-thumb"></span></span>';
                    echo '<span class="tamin-group__toggle-text">' . esc_html($label) . '</span>';
                    echo '</label>';
                } elseif ($type === 'select') {
                    echo '<select data-field="' . esc_attr($id) . '" class="tamin-group__input tamin-repeater-input">';
                    foreach ($options as $opt_val => $opt_label) {
                        echo '<option value="' . esc_attr($opt_val) . '" ' . selected($val, $opt_val, false) . '>' . esc_html($opt_label) . '</option>';
                    }
                    echo '</select>';
                } elseif ($type === 'image') {
                    echo '<div class="tamin-repeater-image-wrap" style="display:flex; gap:8px; align-items:center;">';
                    echo '<input type="url" data-field="' . esc_attr($id) . '" class="tamin-group__input tamin-repeater-input tamin-image-url" value="' . esc_attr($val) . '" placeholder="URL تصویر..." style="flex:1;" />';
                    echo '<button type="button" class="button tamin-upload-btn">آپلود</button>';
                    echo '</div>';
                } elseif ($type === 'dropdown-pages') {
                    echo '<select data-field="' . esc_attr($id) . '" class="tamin-group__input tamin-repeater-input">';
                    echo '<option value="">' . __('— انتخاب برگه —', 'tamin-theme') . '</option>';
                    $pages = get_pages();
                    foreach ($pages as $page) {
                        echo '<option value="' . esc_url(get_permalink($page->ID)) . '" ' . selected($val, get_permalink($page->ID), false) . '>' . esc_html($page->post_title) . '</option>';
                    }
                    echo '</select>';
                }

                if (!empty($desc)) {
                    echo '<p class="tamin-group__field-desc">' . esc_html($desc) . '</p>';
                }
                echo '</div>';
            }
            return ob_get_clean();
        };
        ?>
        <div class="tamin-group tamin-group--open tamin-repeater-complex">
            <button type="button" class="tamin-group__header" aria-expanded="true">
                <span class="tamin-group__icon">📋</span>
                <span class="tamin-group__title"><?php echo esc_html($this->label); ?></span>
                <span class="tamin-group__chevron">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 4L6 8L10 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
            </button>
            <div class="tamin-group__body">
                <?php if (!empty($this->description)) : ?>
                    <p class="tamin-group__field-desc" style="margin-top:0"><?php echo esc_html($this->description); ?></p>
                <?php endif; ?>

                <div class="tamin-repeater__list">
                    <?php foreach ($items as $index => $item) : ?>
                        <div class="tamin-repeater-complex__item" data-index="<?php echo $index; ?>" style="background:#f6f7f7; border:1px solid #dcdcde; border-radius:6px; margin-bottom:8px; padding:10px;">
                            <div class="tamin-repeater-complex__item-header" style="display:flex; justify-content:space-between; align-items:center; cursor:move; margin-bottom:10px; padding-bottom:8px; border-bottom:1px dashed #dcdcde;">
                                <div style="display:flex; gap:8px; align-items:center;">
                                    <span class="tamin-repeater__drag" style="color:#aaa; cursor:grab; font-size:16px;">⠿</span>
                                    <strong><?php echo esc_html($this->item_label); ?> <span class="item-index-label"><?php echo $index + 1; ?></span></strong>
                                </div>
                                <button type="button" class="tamin-repeater-complex__delete" style="background:none; border:none; color:#d63638; cursor:pointer;">✕ حذف</button>
                            </div>
                            <div class="tamin-repeater-complex__item-body" style="display:flex; flex-direction:column; gap:8px;">
                                <?php echo $render_fields($item, $index); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="tamin-repeater-complex__prototype" style="display:none;">
                    <div class="tamin-repeater-complex__item" data-index="{index}" style="background:#f6f7f7; border:1px solid #dcdcde; border-radius:6px; margin-bottom:8px; padding:10px;">
                        <div class="tamin-repeater-complex__item-header" style="display:flex; justify-content:space-between; align-items:center; cursor:move; margin-bottom:10px; padding-bottom:8px; border-bottom:1px dashed #dcdcde;">
                            <div style="display:flex; gap:8px; align-items:center;">
                                <span class="tamin-repeater__drag" style="color:#aaa; cursor:grab; font-size:16px;">⠿</span>
                                <strong><?php echo esc_html($this->item_label); ?> <span class="item-index-label">{index_label}</span></strong>
                            </div>
                            <button type="button" class="tamin-repeater-complex__delete" style="background:none; border:none; color:#d63638; cursor:pointer;">✕ حذف</button>
                        </div>
                        <div class="tamin-repeater-complex__item-body" style="display:flex; flex-direction:column; gap:8px;">
                            <?php echo $render_fields([], '{index}'); ?>
                        </div>
                    </div>
                </div>

                <button type="button" class="tamin-repeater__add" style="margin-top:10px;">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v10M1 6h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    افزودن <?php echo esc_html($this->item_label); ?>
                </button>

                <input type="hidden" class="tamin-repeater__value" <?php $this->link(); ?> value="<?php echo esc_attr($value); ?>" />
            </div>
        </div>
        <?php
    }
}

} // End class_exists('WP_Customize_Control')

/* ==========================================================================
   Enqueue Assets در پنل Customizer
   ========================================================================== */
function tamin_customizer_controls_enqueue() {
    wp_enqueue_media(); // For image uploads

    $css_path = get_template_directory() . '/assets/css/customizer-controls.css';
    $js_path  = get_template_directory() . '/assets/js/customizer-controls.js';
    
    wp_enqueue_style(
        'tamin-customizer-controls',
        get_template_directory_uri() . '/assets/css/customizer-controls.css',
        [],
        file_exists($css_path) ? filemtime($css_path) : '1.0.0'
    );
    wp_enqueue_script(
        'tamin-customizer-controls',
        get_template_directory_uri() . '/assets/js/customizer-controls.js',
        ['jquery', 'customize-controls'],
        file_exists($js_path) ? filemtime($js_path) : '1.0.0',
        true
    );
}
add_action('customize_controls_enqueue_scripts', 'tamin_customizer_controls_enqueue');
