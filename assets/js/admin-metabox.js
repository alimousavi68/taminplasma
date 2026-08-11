jQuery(document).ready(function($) {
    
    // Tab Switching
    $('.tamin-metabox-tab').on('click', function() {
        var target = $(this).data('tab');
        var wrapper = $(this).closest('.tamin-metabox-wrapper');
        
        wrapper.find('.tamin-metabox-tab').removeClass('active');
        $(this).addClass('active');
        
        wrapper.find('.tamin-tab-content').removeClass('active');
        wrapper.find('#' + target).addClass('active');
    });

    // Image Upload
    var mediaUploader;
    $('.tamin-upload-btn').on('click', function(e) {
        e.preventDefault();
        var btn = $(this);
        var container = btn.closest('.tamin-image-field');
        var input = container.find('input[type="hidden"]');
        var preview = container.find('img');
        var removeBtn = container.find('.tamin-remove-image-btn');

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'انتخاب تصویر',
            button: { text: 'انتخاب' },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            input.val(attachment.url).trigger('change');
            preview.attr('src', attachment.url).parent().show();
            removeBtn.show();
        });

        mediaUploader.open();
    });

    $('.tamin-remove-image-btn').on('click', function(e) {
        e.preventDefault();
        var btn = $(this);
        var container = btn.closest('.tamin-image-field');
        container.find('input[type="hidden"]').val('').trigger('change');
        container.find('img').attr('src', '').parent().hide();
        btn.hide();
    });

    // Repeater Logic
    $('.tamin-repeater').each(function() {
        var wrapper = $(this);
        var id = wrapper.data('id');
        var fields = wrapper.data('fields'); // JSON array of field definitions
        var inputHidden = wrapper.find('input#' + id);
        var listContainer = wrapper.find('.tamin-repeater-list');
        var addBtn = wrapper.find('.tamin-repeater-add');

        var data = [];
        try {
            if (inputHidden.val()) {
                data = JSON.parse(inputHidden.val());
            }
        } catch (e) {
            console.error('Tamin Repeater JSON parse error', e);
        }

        function renderItem(itemData, index) {
            var html = '<div class="tamin-repeater-item" data-index="' + index + '">';
            html += '<a href="#" class="tamin-repeater-item-remove">حذف</a>';
            
            $.each(fields, function(fieldKey, fieldLabel) {
                var val = itemData[fieldKey] || '';
                html += '<div class="tamin-repeater-field">';
                html += '<label>' + fieldLabel + '</label>';
                if (fieldLabel.indexOf('textarea') !== -1) {
                    html += '<textarea data-key="' + fieldKey + '" rows="2">' + val + '</textarea>';
                } else {
                    html += '<input type="text" data-key="' + fieldKey + '" value="' + val + '">';
                }
                html += '</div>';
            });

            html += '</div>';
            return html;
        }

        function updateData() {
            var newData = [];
            listContainer.find('.tamin-repeater-item').each(function() {
                var itemObj = {};
                $(this).find('input, textarea').each(function() {
                    var key = $(this).data('key');
                    itemObj[key] = $(this).val();
                });
                newData.push(itemObj);
            });
            inputHidden.val(JSON.stringify(newData));
        }

        // Initial Render
        if (Array.isArray(data)) {
            $.each(data, function(i, item) {
                listContainer.append(renderItem(item, i));
            });
        }

        // Add
        addBtn.on('click', function(e) {
            e.preventDefault();
            var emptyItem = {};
            $.each(fields, function(key, val) { emptyItem[key] = ''; });
            listContainer.append(renderItem(emptyItem, listContainer.children().length));
            updateData();
        });

        // Remove
        listContainer.on('click', '.tamin-repeater-item-remove', function(e) {
            e.preventDefault();
            if (confirm('آیا از حذف این آیتم مطمئن هستید؟')) {
                $(this).closest('.tamin-repeater-item').remove();
                updateData();
            }
        });

        // Change
        listContainer.on('input change', 'input, textarea', function() {
            updateData();
        });
    });

});
