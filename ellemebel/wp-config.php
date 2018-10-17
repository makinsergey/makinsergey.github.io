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
define('DB_NAME', 'ellemebel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!)2m2?CUw|dcB3f%ak*g~Q7-p7A.%b7fFQ4zsV#9rT.k~iw4pm{)kOC&omP{oiky');
define('SECURE_AUTH_KEY',  'mY=51hIdRL{i}$dwg,~|J6VrE,E#Zpt*ED*~g(ky ,8o[U%fqY xs.Pr=V1G^/KR');
define('LOGGED_IN_KEY',    'sDF3<Sx~.f]#+Sf7&sg 7,v6&.>^C_^!y!B#zVKt!G.=Eq?~4AHHY]B!CFhoD?Yc');
define('NONCE_KEY',        '{RHmQ^Q~BjEao6QhqZV7xJl]FSE^3)b.D?GX`[]LKxiR%G&s8fKo&PCiR#jWbC (');
define('AUTH_SALT',        '{G;.L1?NCnk)R0~pV4zT0kPAJPL@K;~$ty5jTEaNb.VU|*t$oJX*%B3VQxCwcEHy');
define('SECURE_AUTH_SALT', '8wjR=q&$~L+u Kh1)93qq/2yy0 ]y;C*WbCUNzFk}F9`[z!C:Kj2R^=g/}rb8py.');
define('LOGGED_IN_SALT',   'S 3Th?H_8Q/*kJ>(,BYkC!V-^~Q`A-3T,&3A1U MX:{a_IwK|z8o89pD(h4lG>cJ');
define('NONCE_SALT',       'Zhw,]K|`T T%f|qpi3Zyoj;Ny<al+nH?V+RJZwcMY#!lw518$e lp{(:xHM:fED<');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
define('WPLANG', 'ru_RU');