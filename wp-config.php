<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'ouspen_tv');

/** Имя пользователя MySQL */
define('DB_USER', 'ouspen_tv');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '@[h^*4?D');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P7 ethcnkb(#h{iwb9r:v6{%S(5|DU}4BG<<NDm>bcA[:_sW>aiGUV=XjzIYH%9W');
define('SECURE_AUTH_KEY',  'pY^~_ E)@MVu@3ob*l,~U$rNvm};tH~2Np14JuIW)0ZEjs T+n4:$KKoM}__tfSF');
define('LOGGED_IN_KEY',    '%$ec3E*|q04$UP,XYXR/.J@EUZ JM7Xr~hM:CJR(rO8/KnuE`M,h|3u~J~9xhNEV');
define('NONCE_KEY',        'rgEu?,{%UO6/ P;n?1Fzxv`3[n$0KoY!b[N[l{~/f|x=L|&WUnT|(m<)v3,,A@:A');
define('AUTH_SALT',        'w8UGur7c>79SSS=47DAybMvRFoX*T,:xDc`Iee|:M@.JO3:bu84WU[XmdYE)vy!R');
define('SECURE_AUTH_SALT', 'ayDIvH3HRVFdsG-?1&oUzcICVw%uEP`% f,b<ST%HUl_o0A_Xb4l%s{l,=lQ5,n;');
define('LOGGED_IN_SALT',   'D#s&/g>Q{vegYsy5ffJRZ~gR}r>Jiiqn=$)|p-~WYlV$,u2/r*I,U_8&b#<G6TLn');
define('NONCE_SALT',       'OpPqBMipTPg]GJOd<D.2Jgs)e4je&vue_uc?VAPvO[PiW@x9~rq-`v5rG0n?%_R~');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define( 'WPCF7_USE_REALLY_SIMPLE_CAPTCHA', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
