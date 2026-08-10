/**
 * Tamin Customizer Controls JS v1.0
 * Accordion toggle + Color sync + Range output + Repeater (drag/add/remove)
 */
(function ($) {
    'use strict';

    /* ==============================================================
       1. Accordion Toggle
       ============================================================== */
    $(document).on('click', '.tamin-group__header', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var $header = $(this);
        var $group  = $header.closest('.tamin-group');
        var isOpen  = $group.hasClass('tamin-group--open');

        $group.toggleClass('tamin-group--open', !isOpen);
        $header.attr('aria-expanded', !isOpen ? 'true' : 'false');
    });

    /* ==============================================================
       2. Color Picker ↔ HEX Input Sync
       ============================================================== */
    // Color picker → HEX text
    $(document).on('input change', '.tamin-group__color-picker', function () {
        var val = $(this).val();
        $(this).siblings('.tamin-group__color-hex').val(val.toUpperCase());
    });

    // HEX text → Color picker
    $(document).on('input', '.tamin-group__color-hex', function () {
        var val = $(this).val().trim();
        if (/^#[0-9a-fA-F]{6}$/.test(val)) {
            $(this).siblings('.tamin-group__color-picker').val(val);
            // Trigger change so setting link picks it up
            $(this).siblings('.tamin-group__color-picker').trigger('change');
        }
    });

    /* ==============================================================
       3. Range → Output Sync
       ============================================================== */
    $(document).on('input', '.tamin-group__range', function () {
        $(this).siblings('.tamin-group__range-value').text($(this).val());
    });

    /* ==============================================================
       4. Complex Repeater & Media Uploader
       ============================================================== */
    function taminSyncRepeater($control) {
        var items = [];
        $control.find('.tamin-repeater__list > .tamin-repeater-complex__item').each(function () {
            var $item = $(this);
            var itemData = {};
            $item.find('.tamin-repeater-input').each(function () {
                var fieldKey = $(this).data('field');
                if (!fieldKey) return;
                var val = $(this).is(':checkbox') ? $(this).is(':checked') : $(this).val();
                itemData[fieldKey] = val;
            });
            items.push(itemData);
        });
        $control.find('.tamin-repeater__value').val(JSON.stringify(items)).trigger('change');
    }

    // افزودن آیتم جدید
    $(document).on('click', '.tamin-repeater__add', function () {
        var $control  = $(this).closest('.tamin-repeater-complex');
        var $list     = $control.find('.tamin-repeater__list');
        var $proto    = $control.find('.tamin-repeater-complex__prototype').html();
        var newIndex  = $list.find('.tamin-repeater-complex__item').length;
        
        // Replace placeholders
        var newItemHtml = $proto.replace(/\{index\}/g, newIndex).replace(/\{index_label\}/g, newIndex + 1);
        var $newItem = $(newItemHtml);
        
        $list.append($newItem);
        taminSyncRepeater($control);
        taminInitSortable($list);
    });

    // حذف آیتم
    $(document).on('click', '.tamin-repeater-complex__delete', function () {
        if (!confirm('آیا از حذف این آیتم اطمینان دارید؟')) return;
        var $control = $(this).closest('.tamin-repeater-complex');
        $(this).closest('.tamin-repeater-complex__item').remove();
        
        // Re-index labels
        $control.find('.tamin-repeater__list > .tamin-repeater-complex__item').each(function(i) {
            $(this).find('.item-index-label').text(i + 1);
        });
        
        taminSyncRepeater($control);
    });

    // تغییر ورودی‌ها
    $(document).on('input change', '.tamin-repeater-input', function () {
        var $control = $(this).closest('.tamin-repeater-complex');
        taminSyncRepeater($control);
    });

    // Media Uploader
    var file_frame;
    $(document).on('click', '.tamin-upload-btn', function (e) {
        e.preventDefault();
        var $button = $(this);
        var $input = $button.siblings('.tamin-image-url');
        var $control = $button.closest('.tamin-repeater-complex');

        if (file_frame) {
            file_frame.off('select'); // Clear previous bindings
        } else {
            file_frame = wp.media.frames.file_frame = wp.media({
                title: 'انتخاب یا آپلود تصویر',
                button: { text: 'انتخاب تصویر' },
                multiple: false
            });
        }

        file_frame.on('select', function () {
            var attachment = file_frame.state().get('selection').first().toJSON();
            $input.val(attachment.url).trigger('change');
            if ($control.length) {
                taminSyncRepeater($control);
            }
        });

        file_frame.open();
    });

    // Icon Type Toggle
    $(document).on('change', 'select[data-field="icon_type"]', function () {
        var $item = $(this).closest('.tamin-repeater-complex__item');
        var val = $(this).val();
        $item.find('[data-field="icon_class"]').closest('.tamin-group__field').toggle(val === 'class');
        $item.find('[data-field="icon_image"]').closest('.tamin-group__field').toggle(val === 'image');
        $item.find('[data-field="icon_svg"]').closest('.tamin-group__field').toggle(val === 'svg');
    });

    // Run toggle logic on load
    wp.customize && wp.customize.bind('ready', function () {
        $('select[data-field="icon_type"]').trigger('change');
    });

    /* ==============================================================
       5. Drag & Drop Sortable
       ============================================================== */
    function taminInitSortable($list) {
        if (typeof $.fn.sortable === 'undefined') return;
        if ($list.hasClass('ui-sortable')) return;
        $list.sortable({
            handle:  '.tamin-repeater__drag',
            axis:    'y',
            opacity: 0.75,
            update: function () {
                taminSyncRepeater($(this).closest('.tamin-group, .tamin-repeater-wrap'));
            },
        });
    }

    wp.customize && wp.customize.bind('ready', function () {
        $('.tamin-repeater__list').each(function () {
            taminInitSortable($(this));
        });
    });

    /* ==============================================================
       6. data-customize-setting-link binding helper
       ============================================================== */
    $(document).on('input change', '[data-customize-setting-link]', function () {
        var settingKey = $(this).data('customize-setting-link');
        if (settingKey && wp.customize) {
            var setting = wp.customize(settingKey);
            if (setting) {
                var val = $(this).is(':checkbox') ? $(this).is(':checked') : $(this).val();
                setting.set(val);
            }
        }
    });

})(jQuery);

/* ==============================================================
   7. Header Nav Repeater (Advanced)
   ============================================================== */
(function ($) {
    'use strict';

    function serializeNavItems($repeater) {
        var items = [];
        $repeater.find('.tamin-nav-item').each(function () {
            var $item = $(this);
            var iconType = $item.find('.tamin-nav-item__icon-type').val() || 'img';
            var iconSrc  = (iconType === 'svg')
                ? $item.find('.tamin-nav-item__icon-svg').val().trim()
                : $item.find('.tamin-nav-item__icon-src').val().trim();

            items.push({
                label:      $item.find('.tamin-nav-item__label-input').val().trim(),
                url:        $item.find('.tamin-nav-item__url-input').val().trim(),
                match_path: $item.find('.tamin-nav-item__match-input').val().trim(),
                enabled:    $item.find('.tamin-nav-item__enabled-val').val() === '1',
                icon_type:  iconType,
                icon_src:   iconSrc,
            });
        });
        return JSON.stringify(items);
    }

    function saveNavItems($repeater) {
        var json = serializeNavItems($repeater);
        var $hiddenInput = $repeater.find('.tamin-nav-repeater__value');
        $hiddenInput.val(json).trigger('change');
    }

    function buildNewNavItem(index) {
        return $(
            '<div class="tamin-nav-item" data-index="' + index + '">' +
                '<div class="tamin-nav-item__header">' +
                    '<span class="tamin-nav-item__drag" title="درگ برای مرتب‌سازی">⠿</span>' +
                    '<span class="tamin-nav-item__preview"><span style="font-size:16px">📄</span></span>' +
                    '<span class="tamin-nav-item__label">آیتم جدید</span>' +
                    '<div class="tamin-nav-item__actions">' +
                        '<button type="button" class="tamin-nav-item__toggle-btn" title="پنهان کردن">👁️</button>' +
                        '<button type="button" class="tamin-nav-item__expand-btn" title="ویرایش">✏️</button>' +
                        '<button type="button" class="tamin-nav-item__delete-btn" title="حذف">✕</button>' +
                    '</div>' +
                '</div>' +
                '<div class="tamin-nav-item__body" style="display:flex">' +
                    '<div class="tamin-nav-item__field"><label>متن آیتم</label>' +
                        '<input type="text" class="tamin-nav-item__input tamin-nav-item__label-input" value="" placeholder="مثلاً: خانه" /></div>' +
                    '<div class="tamin-nav-item__field"><label>لینک (URL)</label>' +
                        '<input type="url" class="tamin-nav-item__input tamin-nav-item__url-input" value="" placeholder="مثلاً: /about" /></div>' +
                    '<div class="tamin-nav-item__field"><label>مسیر تطبیق Active</label>' +
                        '<input type="text" class="tamin-nav-item__input tamin-nav-item__match-input" value="" placeholder="مثلاً: /about" /></div>' +
                    '<div class="tamin-nav-item__field"><label>نوع آیکون</label>' +
                        '<select class="tamin-nav-item__input tamin-nav-item__icon-type">' +
                            '<option value="img">آدرس فایل SVG/PNG</option>' +
                            '<option value="svg">کد SVG مستقیم</option>' +
                        '</select></div>' +
                    '<div class="tamin-nav-item__field tamin-nav-item__icon-img-wrap">' +
                        '<label>آدرس آیکون (URL)</label>' +
                        '<input type="text" class="tamin-nav-item__input tamin-nav-item__icon-src" value="" placeholder="/wp-content/..." /></div>' +
                    '<div class="tamin-nav-item__field tamin-nav-item__icon-svg-wrap" style="display:none">' +
                        '<label>کد SVG مستقیم</label>' +
                        '<textarea class="tamin-nav-item__input tamin-nav-item__icon-svg" rows="3" placeholder="<svg ...></svg>"></textarea></div>' +
                '</div>' +
                '<input type="hidden" class="tamin-nav-item__enabled-val" value="1" />' +
            '</div>'
        );
    }

    $(document).on('click', '.tamin-nav-repeater__add', function () {
        var $repeater = $(this).closest('.tamin-nav-repeater');
        var $list = $repeater.find('.tamin-nav-repeater__list');
        var idx = $list.find('.tamin-nav-item').length;
        var $newItem = buildNewNavItem(idx);
        $list.append($newItem);
        saveNavItems($repeater);
    });

    $(document).on('click', '.tamin-nav-item__delete-btn', function () {
        if (!confirm('این آیتم حذف شود؟')) return;
        var $repeater = $(this).closest('.tamin-nav-repeater');
        $(this).closest('.tamin-nav-item').remove();
        saveNavItems($repeater);
    });

    $(document).on('click', '.tamin-nav-item__expand-btn', function () {
        var $body = $(this).closest('.tamin-nav-item').find('.tamin-nav-item__body');
        var isVisible = $body.is(':visible');
        $body.toggle(!isVisible);
        $(this).text(isVisible ? '✏️' : '🔼');
    });

    $(document).on('click', '.tamin-nav-item__toggle-btn', function () {
        var $item = $(this).closest('.tamin-nav-item');
        var $enabledInput = $item.find('.tamin-nav-item__enabled-val');
        var isEnabled = $enabledInput.val() === '1';
        $enabledInput.val(isEnabled ? '0' : '1');
        $item.toggleClass('tamin-nav-item--disabled', isEnabled);
        $(this).text(isEnabled ? '🙈' : '👁️');
        saveNavItems($item.closest('.tamin-nav-repeater'));
    });

    $(document).on('change', '.tamin-nav-item__icon-type', function () {
        var $item = $(this).closest('.tamin-nav-item');
        var isSvg = $(this).val() === 'svg';
        $item.find('.tamin-nav-item__icon-img-wrap').toggle(!isSvg);
        $item.find('.tamin-nav-item__icon-svg-wrap').toggle(isSvg);
    });

    $(document).on('input change', '.tamin-nav-item__input', function () {
        var $repeater = $(this).closest('.tamin-nav-repeater');
        var $item = $(this).closest('.tamin-nav-item');
        if ($(this).hasClass('tamin-nav-item__label-input')) {
            $item.find('.tamin-nav-item__label').text($(this).val() || 'آیتم بدون نام');
        }
        saveNavItems($repeater);
    });

    $(document).ready(function () {
        if ($.fn.sortable) {
            function initSortable($list) {
                if ($list.data('sortable-init')) return;
                $list.data('sortable-init', true);
                $list.sortable({
                    handle: '.tamin-nav-item__drag',
                    placeholder: 'tamin-nav-item sortable-placeholder',
                    tolerance: 'pointer',
                    stop: function () {
                        saveNavItems($list.closest('.tamin-nav-repeater'));
                    }
                });
            }
            wp.customize && wp.customize.bind('ready', function () {
                wp.customize.section.each(function (section) {
                    section.expanded.bind(function (expanded) {
                        if (expanded) {
                            setTimeout(function () {
                                $('.tamin-nav-repeater__list').each(function () {
                                    initSortable($(this));
                                });
                            }, 300);
                        }
                    });
                });
            });
        }
    });

})(jQuery);
