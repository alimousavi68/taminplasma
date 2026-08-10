jQuery(document).ready(function($) {
    // Save Request (Status & Note)
    $('.btn-save-request').on('click', function(e) {
        e.preventDefault();
        var btn = $(this);
        var row = btn.closest('tr');
        var code = btn.data('code');
        var status = row.find('.request-status-select').val();
        var note = row.find('.request-note').val();

        btn.prop('disabled', true).text('در حال ذخیره...');

        $.post(taminAdminL10n.ajax_url, {
            action: 'tamin_admin_update_request',
            nonce: taminAdminL10n.nonce,
            code: code,
            status: status,
            note: note
        }, function(response) {
            btn.prop('disabled', false).text('ذخیره تغییرات');
            if(response.success) {
                alert(response.data);
            } else {
                alert('خطا: ' + response.data);
            }
        });
    });

    // Edit Center (Populate Form)
    $('.btn-edit-center').on('click', function(e) {
        e.preventDefault();
        var center = $(this).data('center');
        
        $('#center_old_id').val(center.id);
        $('#center_id').val(center.id);
        $('#center_name').val(center.name);
        $('#center_city').val(center.city);
        $('#center_city_id').val(center.city_id);
        $('#center_phone').val(center.phone);
        $('#center_hours').val(center.hours);
        $('#center_map_link').val(center.map_link);
        $('#center_image_url').val(center.image_url);
        $('#center_active').prop('checked', center.active);

        $('#btn-cancel-edit').show();
        $('html, body').animate({
            scrollTop: $("#center-form").offset().top - 50
        }, 500);
    });

    // Cancel Edit
    $('#btn-cancel-edit').on('click', function(e) {
        e.preventDefault();
        $('#center-form')[0].reset();
        $('#center_old_id').val('');
        $(this).hide();
    });

    // Save Center
    $('#center-form').on('submit', function(e) {
        e.preventDefault();
        var btn = $(this).find('button[type="submit"]');
        btn.prop('disabled', true).text('در حال ذخیره...');

        $.post(taminAdminL10n.ajax_url, {
            action: 'tamin_admin_update_center',
            nonce: taminAdminL10n.nonce,
            old_id: $('#center_old_id').val(),
            id: $('#center_id').val(),
            name: $('#center_name').val(),
            city: $('#center_city').val(),
            city_id: $('#center_city_id').val(),
            phone: $('#center_phone').val(),
            hours: $('#center_hours').val(),
            map_link: $('#center_map_link').val(),
            image_url: $('#center_image_url').val(),
            active: $('#center_active').is(':checked')
        }, function(response) {
            if(response.success) {
                location.reload();
            } else {
                alert('خطا: ' + response.data);
                btn.prop('disabled', false).text('ذخیره شعبه');
            }
        });
    });

    // Delete Center
    $('.btn-delete-center').on('click', function(e) {
        e.preventDefault();
        if(!confirm('آیا از حذف این شعبه اطمینان دارید؟')) return;
        
        var id = $(this).data('id');
        var btn = $(this);
        btn.prop('disabled', true).text('...');

        $.post(taminAdminL10n.ajax_url, {
            action: 'tamin_admin_delete_center',
            nonce: taminAdminL10n.nonce,
            id: id
        }, function(response) {
            if(response.success) {
                location.reload();
            } else {
                alert('خطا: ' + response.data);
                btn.prop('disabled', false).text('حذف');
            }
        });
    });

    // WP Media Uploader
    var mediaUploader;
    $('.btn-upload-image').on('click', function(e) {
        e.preventDefault();
        var inputField = $('#center_image_url');

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media({
            title: 'انتخاب تصویر شعبه',
            button: { text: 'استفاده از این تصویر' },
            multiple: false
        });

        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            inputField.val(attachment.url);
        });

        mediaUploader.open();
    });
});
