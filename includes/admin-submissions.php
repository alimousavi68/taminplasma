<?php
/**
 * Admin Panel for Submissions and Centers Management
 *
 * @package TaminTheme
 */

defined('ABSPATH') || exit;

class Tamin_Admin_Dashboard {

    public function __construct() {
        add_action('admin_menu', [$this, 'register_admin_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
        
        // AJAX Handlers for Admin
        add_action('wp_ajax_tamin_admin_update_request', [$this, 'ajax_update_request']);
        add_action('wp_ajax_tamin_admin_update_center', [$this, 'ajax_update_center']);
        add_action('wp_ajax_tamin_admin_delete_center', [$this, 'ajax_delete_center']);
    }

    public function register_admin_menu() {
        add_menu_page(
            __('سامانه مدیریت نوژین', 'tamin-theme'),
            __('سامانه نوژین', 'tamin-theme'),
            'manage_options',
            'tamin-dashboard',
            [$this, 'render_dashboard_page'],
            'dashicons-clipboard',
            2
        );
    }

    public function enqueue_admin_assets($hook) {
        if ($hook !== 'toplevel_page_tamin-dashboard') {
            return;
        }

        wp_enqueue_media(); // For center images

        $css_path = get_template_directory() . '/assets/css/admin.css';
        $js_path  = get_template_directory() . '/assets/js/admin.js';
        $css_ver  = file_exists($css_path) ? filemtime($css_path) : '1.0';
        $js_ver   = file_exists($js_path) ? filemtime($js_path) : '1.0';

        wp_enqueue_style('tamin-admin-style', get_template_directory_uri() . '/assets/css/admin.css', [], $css_ver);
        wp_enqueue_script('tamin-admin-js', get_template_directory_uri() . '/assets/js/admin.js', ['jquery'], $js_ver, true);

        wp_localize_script('tamin-admin-js', 'taminAdminL10n', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('tamin_admin_nonce')
        ]);
    }

    public function render_dashboard_page() {
        if (!current_user_can('manage_options')) {
            wp_die(__('شما اجازه دسترسی به این برگه را ندارید.', 'tamin-theme'));
        }

        $active_tab = isset($_GET['tab']) ? sanitize_key($_GET['tab']) : 'requests';
        ?>
        <div class="wrap" dir="rtl">
            <h1 class="wp-heading-inline"><?php esc_html_e('سامانه جامع مدیریت نوژین پلاسما', 'tamin-theme'); ?></h1>
            <hr class="wp-header-end">
            
            <h2 class="nav-tab-wrapper">
                <a href="?page=tamin-dashboard&tab=requests" class="nav-tab <?php echo $active_tab === 'requests' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('مدیریت نوبت‌ها', 'tamin-theme'); ?></a>
                <a href="?page=tamin-dashboard&tab=centers" class="nav-tab <?php echo $active_tab === 'centers' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('مدیریت شعب', 'tamin-theme'); ?></a>
                <a href="?page=tamin-dashboard&tab=contacts" class="nav-tab <?php echo $active_tab === 'contacts' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e('پیام‌های تماس', 'tamin-theme'); ?></a>
            </h2>

            <div class="tamin-dashboard-content" style="margin-top:20px;">
                <?php
                switch ($active_tab) {
                    case 'requests':
                        $this->render_requests_tab();
                        break;
                    case 'centers':
                        $this->render_centers_tab();
                        break;
                    case 'contacts':
                        $this->render_contacts_tab();
                        break;
                }
                ?>
            </div>
        </div>
        <?php
    }

    private function render_requests_tab() {
        $requests = array_reverse(get_option('tamin_request_submissions', []));
        ?>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th><?php esc_html_e('کد پیگیری', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('تاریخ', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('نام', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('شماره تماس', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('شعبه انتخابی', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('وضعیت', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('عملیات', 'tamin-theme'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($requests)) : ?>
                    <tr><td colspan="7"><?php esc_html_e('هیچ نوبتی ثبت نشده است.', 'tamin-theme'); ?></td></tr>
                <?php else : ?>
                    <?php foreach ($requests as $req) : 
                        $code = isset($req['code']) ? $req['code'] : '';
                        $status = isset($req['status']) ? $req['status'] : 'pending';
                        $note = isset($req['note']) ? $req['note'] : '';
                        $status_labels = [
                            'pending' => 'در حال بررسی',
                            'contacted' => 'تماس گرفته شد',
                            'confirmed' => 'تایید شده',
                            'completed' => 'انجام شده',
                            'cancelled' => 'لغو شده'
                        ];
                    ?>
                        <tr data-code="<?php echo esc_attr($code); ?>">
                            <td><strong><?php echo esc_html($code ?: '-'); ?></strong></td>
                            <td dir="ltr" style="text-align:right"><?php echo esc_html($req['time']); ?></td>
                            <td><?php echo esc_html($req['name']); ?></td>
                            <td><a href="tel:<?php echo esc_attr($req['phone']); ?>"><?php echo esc_html($req['phone']); ?></a></td>
                            <td><?php echo esc_html($req['center']); ?></td>
                            <td>
                                <select class="request-status-select">
                                    <?php foreach($status_labels as $val => $label): ?>
                                        <option value="<?php echo esc_attr($val); ?>" <?php selected($status, $val); ?>><?php echo esc_html($label); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>
                                <button type="button" class="button btn-save-request" data-code="<?php echo esc_attr($code); ?>"><?php esc_html_e('ذخیره تغییرات', 'tamin-theme'); ?></button>
                                <textarea class="request-note" rows="1" placeholder="<?php esc_attr_e('یادداشت ادمین...', 'tamin-theme'); ?>" style="width:100%; margin-top:5px;"><?php echo esc_textarea($note); ?></textarea>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <?php
    }

    private function render_centers_tab() {
        $centers = get_option('tamin_centers_data', []);
        
        // If empty, let's provide some defaults
        if (empty($centers)) {
            $centers = [
                'tehran_vanak' => ['id' => 'tehran_vanak', 'name' => 'شعبه مرکزی ونک', 'city' => 'تهران', 'city_id' => 'tehran', 'phone' => '۰۲۱-۴۹۳۶۱۳۱۸', 'hours' => '۸ صبح الی ۸ شب', 'map_link' => 'https://maps.google.com/?q=Vanak+Square+Tehran', 'image_url' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80', 'active' => true],
                'tehranpars' => ['id' => 'tehranpars', 'name' => 'شعبه تهرانپارس', 'city' => 'تهران', 'city_id' => 'tehran', 'phone' => '۰۲۱-۷۷۸۸۹۹۰۰', 'hours' => '۸ صبح الی ۶ عصر', 'map_link' => 'https://maps.google.com/?q=Tehranpars+Tehran', 'image_url' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=800&q=80', 'active' => true],
                'mashhad_ahmadabad' => ['id' => 'mashhad_ahmadabad', 'name' => 'شعبه مشهد (احمدآباد)', 'city' => 'مشهد', 'city_id' => 'khorasan', 'phone' => '۰۵۱-۳۸۴۰۰۰۰۰', 'hours' => '۷:۳۰ صبح الی ۷:۳۰ شب', 'map_link' => 'https://maps.google.com/?q=Ahmadabad+Mashhad', 'image_url' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=800&q=80', 'active' => true]
            ];
            update_option('tamin_centers_data', $centers);
        }
        ?>
        <div style="display:flex; gap:20px;">
            <div style="flex:2;">
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('تصویر', 'tamin-theme'); ?></th>
                            <th><?php esc_html_e('نام شعبه', 'tamin-theme'); ?></th>
                            <th><?php esc_html_e('شهر (ID)', 'tamin-theme'); ?></th>
                            <th><?php esc_html_e('وضعیت', 'tamin-theme'); ?></th>
                            <th><?php esc_html_e('عملیات', 'tamin-theme'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($centers as $id => $center) : ?>
                            <tr>
                                <td><img src="<?php echo esc_url($center['image_url']); ?>" style="width:60px; height:45px; object-fit:cover; border-radius:4px;"></td>
                                <td><strong><?php echo esc_html($center['name']); ?></strong><br><small><?php echo esc_html($center['phone']); ?></small></td>
                                <td><?php echo esc_html($center['city']); ?> (<?php echo esc_html($center['city_id']); ?>)</td>
                                <td>
                                    <?php if($center['active']): ?>
                                        <span style="color:green; font-weight:bold;"><?php esc_html_e('فعال', 'tamin-theme'); ?></span>
                                    <?php else: ?>
                                        <span style="color:red;"><?php esc_html_e('غیرفعال', 'tamin-theme'); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <button type="button" class="button btn-edit-center" data-center='<?php echo esc_attr(json_encode($center)); ?>'><?php esc_html_e('ویرایش', 'tamin-theme'); ?></button>
                                    <button type="button" class="button btn-delete-center" data-id="<?php echo esc_attr($id); ?>" style="color:red; border-color:red;"><?php esc_html_e('حذف', 'tamin-theme'); ?></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div style="flex:1;">
                <div class="postbox">
                    <h2 class="hndle" style="padding:10px;"><span><?php esc_html_e('افزودن / ویرایش شعبه', 'tamin-theme'); ?></span></h2>
                    <div class="inside">
                        <form id="center-form">
                            <input type="hidden" id="center_old_id" value="">
                            
                            <p>
                                <label for="center_id"><?php esc_html_e('شناسه شعبه (انگلیسی):', 'tamin-theme'); ?></label>
                                <input type="text" id="center_id" class="widefat" placeholder="tehran_vanak" required>
                            </p>
                            <p>
                                <label for="center_name"><?php esc_html_e('نام شعبه:', 'tamin-theme'); ?></label>
                                <input type="text" id="center_name" class="widefat" required>
                            </p>
                            <p>
                                <label for="center_city"><?php esc_html_e('نام شهر (فارسی):', 'tamin-theme'); ?></label>
                                <input type="text" id="center_city" class="widefat" required>
                            </p>
                            <p>
                                <label for="center_city_id"><?php esc_html_e('شناسه شهر (برای تب‌ها - انگلیسی):', 'tamin-theme'); ?></label>
                                <input type="text" id="center_city_id" class="widefat" placeholder="tehran" required>
                            </p>
                            <p>
                                <label for="center_phone"><?php esc_html_e('تلفن:', 'tamin-theme'); ?></label>
                                <input type="text" id="center_phone" class="widefat">
                            </p>
                            <p>
                                <label for="center_hours"><?php esc_html_e('ساعت کاری:', 'tamin-theme'); ?></label>
                                <input type="text" id="center_hours" class="widefat">
                            </p>
                            <p>
                                <label for="center_map_link"><?php esc_html_e('لینک نقشه مسیریابی:', 'tamin-theme'); ?></label>
                                <input type="url" id="center_map_link" class="widefat">
                            </p>
                            <p>
                                <label for="center_image_url"><?php esc_html_e('لینک تصویر:', 'tamin-theme'); ?></label>
                                <div style="display:flex; gap:10px;">
                                    <input type="url" id="center_image_url" class="widefat">
                                    <button type="button" class="button btn-upload-image"><?php esc_html_e('انتخاب', 'tamin-theme'); ?></button>
                                </div>
                            </p>
                            <p>
                                <label><input type="checkbox" id="center_active" checked> <?php esc_html_e('شعبه فعال باشد (نمایش در فرم و سایت)', 'tamin-theme'); ?></label>
                            </p>
                            <p>
                                <button type="submit" class="button button-primary"><?php esc_html_e('ذخیره شعبه', 'tamin-theme'); ?></button>
                                <button type="button" class="button" id="btn-cancel-edit" style="display:none;"><?php esc_html_e('انصراف', 'tamin-theme'); ?></button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    private function render_contacts_tab() {
        $contacts = array_reverse(get_option('tamin_contact_submissions', []));
        ?>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th><?php esc_html_e('تاریخ', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('نام', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('تلفن', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('ایمیل', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('موضوع', 'tamin-theme'); ?></th>
                    <th><?php esc_html_e('متن پیام', 'tamin-theme'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($contacts)) : ?>
                    <tr><td colspan="6"><?php esc_html_e('هیچ پیامی دریافت نشده است.', 'tamin-theme'); ?></td></tr>
                <?php else : ?>
                    <?php foreach ($contacts as $contact) : ?>
                        <tr>
                            <td dir="ltr" style="text-align:right"><?php echo esc_html($contact['time']); ?></td>
                            <td><?php echo esc_html($contact['fullname']); ?></td>
                            <td><a href="tel:<?php echo esc_attr($contact['phone']); ?>"><?php echo esc_html($contact['phone']); ?></a></td>
                            <td><?php echo esc_html($contact['email']); ?></td>
                            <td><?php echo esc_html($contact['subject']); ?></td>
                            <td><?php echo nl2br(esc_html($contact['message'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <?php
    }

    // --- AJAX Methods ---

    public function ajax_update_request() {
        check_ajax_referer('tamin_admin_nonce', 'nonce');
        if (!current_user_can('manage_options')) wp_send_json_error('عدم دسترسی');

        $code = sanitize_text_field($_POST['code'] ?? '');
        $status = sanitize_text_field($_POST['status'] ?? '');
        $note = sanitize_textarea_field($_POST['note'] ?? '');

        if (empty($code)) {
            wp_send_json_error('کد پیگیری نامعتبر است.');
        }

        $requests = get_option('tamin_request_submissions', []);
        $updated = false;
        
        foreach ($requests as $idx => $req) {
            if (isset($req['code']) && $req['code'] === $code) {
                $requests[$idx]['status'] = $status;
                $requests[$idx]['note'] = $note;
                $updated = true;
                break;
            }
        }
        
        if ($updated) {
            update_option('tamin_request_submissions', $requests);
            wp_send_json_success('با موفقیت بروزرسانی شد.');
        } else {
            wp_send_json_error('نوبت یافت نشد.');
        }
    }

    public function ajax_update_center() {
        check_ajax_referer('tamin_admin_nonce', 'nonce');
        if (!current_user_can('manage_options')) wp_send_json_error('عدم دسترسی');

        $old_id = sanitize_key($_POST['old_id'] ?? '');
        $center = [
            'id' => sanitize_key($_POST['id']),
            'name' => sanitize_text_field($_POST['name']),
            'city' => sanitize_text_field($_POST['city']),
            'city_id' => sanitize_key($_POST['city_id']),
            'phone' => sanitize_text_field($_POST['phone']),
            'hours' => sanitize_text_field($_POST['hours']),
            'map_link' => esc_url_raw($_POST['map_link']),
            'image_url' => esc_url_raw($_POST['image_url']),
            'active' => filter_var($_POST['active'], FILTER_VALIDATE_BOOLEAN)
        ];

        if (empty($center['id']) || empty($center['name'])) {
            wp_send_json_error('شناسه و نام شعبه الزامی است.');
        }

        $centers = get_option('tamin_centers_data', []);
        
        if ($old_id && $old_id !== $center['id'] && isset($centers[$old_id])) {
            unset($centers[$old_id]);
        }

        $centers[$center['id']] = $center;
        update_option('tamin_centers_data', $centers);
        
        wp_send_json_success('شعبه با موفقیت ذخیره شد.');
    }

    public function ajax_delete_center() {
        check_ajax_referer('tamin_admin_nonce', 'nonce');
        if (!current_user_can('manage_options')) wp_send_json_error('عدم دسترسی');

        $id = sanitize_key($_POST['id'] ?? '');
        $centers = get_option('tamin_centers_data', []);
        
        if (isset($centers[$id])) {
            unset($centers[$id]);
            update_option('tamin_centers_data', $centers);
            wp_send_json_success('شعبه با موفقیت حذف شد.');
        } else {
            wp_send_json_error('شعبه یافت نشد.');
        }
    }
}

new Tamin_Admin_Dashboard();
