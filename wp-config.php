<?php
/**
 * ???????? ????????? WordPress.
 *
 * ???? ???? ???????? ????????? ?????????: ????????? MySQL, ??????? ??????,
 * ????????? ?????, ???? WordPress ? ABSPATH. ?????????????? ?????????? ????? ?????
 * ?? ???????? {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} ???????. ????????? MySQL ????? ?????? ? ???????-??????????.
 *
 * ???? ???? ???????????? ????????? ???????? wp-config.php ? ???????? ?????????.
 * ????????????? ???????????? ???-?????????, ????? ??????????? ???? ????
 * ? ?????? "wp-config.php" ? ????????? ????????.
 *
 * @package WordPress
 */

// ** ????????? MySQL: ??? ?????????? ????? ???????? ? ?????? ???????-?????????? ** //
/** ??? ???? ?????? ??? WordPress */
define('DB_NAME', 'wp_admin');

/** ??? ???????????? MySQL */
define('DB_USER', 'wp_admin');

/** ?????? ? ???? ?????? MySQL */
define('DB_PASSWORD', 'vthctltc');

/** ??? ??????? MySQL */
define('DB_HOST', 'localhost');

/** ????????? ???? ?????? ??? ???????? ??????. */
define('DB_CHARSET', 'utf8');

/** ????? ?????????????. ?? ???????, ???? ?? ???????. */
define('DB_COLLATE', '');

/**#@+
 * ?????????? ????? ? ???? ??? ??????????????.
 *
 * ??????? ???????? ?????? ????????? ?? ?????????? ?????.
 * ????? ????????????? ?? ? ??????? {@link https://api.wordpress.org/secret-key/1.1/salt/ ??????? ?????? ?? WordPress.org}
 * ????? ???????? ??, ????? ??????? ???????????? ????? cookies ?????????????????. ????????????? ??????????? ????? ??????????????.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hghfhfhf');
define('SECURE_AUTH_KEY',  'uououuou');
define('LOGGED_IN_KEY',    'retetete');
define('NONCE_KEY',        'ytyiyiy');
define('AUTH_SALT',        'lkljljkh');
define('SECURE_AUTH_SALT', 'khjggf');
define('LOGGED_IN_SALT',   'ytyryr');
define('NONCE_SALT',       'khjkh');

/**#@-*/

/**
 * ??????? ?????? ? ???? ?????? WordPress.
 *
 * ????? ?????????? ????????? ?????? ? ???? ???? ??????, ???? ?? ?????? ????????????
 * ?????? ????????. ??????????, ?????????? ?????? ?????, ????? ? ???? ?????????????.
 */
$table_prefix  = 'wp_';

/**
 * ???? ??????????? WordPress, ?? ????????? ??????????.
 *
 * ???????? ???? ????????, ????? ????????? ???????????. ??????????????? MO-????
 * ??? ?????????? ????? ?????? ???? ?????????? ? wp-content/languages. ????????,
 * ????? ???????? ????????? ???????? ?????, ?????????? ru_RU.mo ? wp-content/languages
 * ? ????????? WPLANG ???????? 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * ??? ?????????????: ????? ??????? WordPress.
 *
 * ???????? ??? ???????? ?? true, ????? ???????? ??????????? ??????????? ??? ??????????.
 * ???????????? ?????????????, ????? ???????????? ???????? ? ??? ???????????? WP_DEBUG
 * ? ????? ??????? ?????????.
 */
define('WP_DEBUG', false);

/* ??? ???, ?????? ?? ???????????. ???????! */

/** ?????????? ???? ? ?????????? WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ?????????????? ?????????? WordPress ? ?????????? ?????. */
require_once(ABSPATH . 'wp-settings.php');