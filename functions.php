<?php
/**
 * Tamin Plasma Theme Functions
 *
 * @package TaminTheme
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

// Define Theme Constants
define('TAMIN_THEME_VERSION', '1.0.0');
define('TAMIN_THEME_DIR', get_template_directory());
define('TAMIN_THEME_URI', get_template_directory_uri());

// Require Core Modules
require_once TAMIN_THEME_DIR . '/includes/helpers.php';
require_once TAMIN_THEME_DIR . '/includes/setup.php';
require_once TAMIN_THEME_DIR . '/includes/enqueue.php';
require_once TAMIN_THEME_DIR . '/includes/security.php';
require_once TAMIN_THEME_DIR . '/includes/sidebars.php';
require_once TAMIN_THEME_DIR . '/includes/customizer.php';
require_once TAMIN_THEME_DIR . '/includes/page-metaboxes.php';
require_once TAMIN_THEME_DIR . '/includes/forms.php';
require_once TAMIN_THEME_DIR . '/includes/admin-submissions.php';
