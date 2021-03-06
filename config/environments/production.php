<?php

/* DEBUG */
ini_set('display_errors', 0);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
define('SAVEQUERIES', false);

/* QUERY MONITOR */
define('QUERY_MONITOR_HANDLE_PHP_ERRORS', true);

/* WONOLOG */
define('WP_CUBI_LOG_ENABLED', true);
define('WP_CUBI_LOG_LEVEL', 'CRITICAL');

/* MEMORY */
define('WP_MEMORY_LIMIT', '256M');

/* SECURITY */
define('FORCE_SSL_ADMIN', 'https' === wpg_local('WEB_SCHEME'));

/* AUTOSAVE, REVISIONS, TRASH */
define('AUTOSAVE_INTERVAL', '300');
define('WP_POST_REVISIONS', 10);
define('MEDIA_TRASH', true);
define('EMPTY_TRASH_DAYS', '100');

/* HIDE ACF MENU */
define('ACF_LITE', true);

/* WP-CRON */
define('DISABLE_WP_CRON', false);
define('ALTERNATE_WP_CRON', false);
define('WP_CRON_LOCK_TIMEOUT', 60);
