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
define('DB_NAME', 'entersoft');

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
define('AUTH_KEY',         'o[pczZdBw@C#-g{gbAf,asYv|H<] Y[5Uk(>nG6MR*%wu4+{RwKT2f I7nxurZj7');
define('SECURE_AUTH_KEY',  'Tx]u,`h*ngE}t,Q4,1IPWN4I|8#D_zrwGq>Z0S-@zYr.Uwhg*r&`Py/gY3Q}YSUZ');
define('LOGGED_IN_KEY',    '$!K=mkvLSG=Sbr}B3+%CAtp8M_j^Ul#DTC7Bsv8Y)W;JN)S]v9AIw1eVHE>Bx!OR');
define('NONCE_KEY',        'X]7g+;TRSh8}ZUE6KW4fY8;4lz`(7jJpa Tj3-DtdC1Kp_kr)PUMF7&hhu!1.hEB');
define('AUTH_SALT',        'Y,&K`$chnB/347XBUE)}7,;z],P;>#WO:Qyimooy:iUnKjK`<Yzr^Ga?n!~$GXKC');
define('SECURE_AUTH_SALT', '*i0Vbwm/e@J&NdS*;L24XW.Mv-7x~<m~%[2H5h!bv$/,G5;ifsXFB0}*yc M@pW{');
define('LOGGED_IN_SALT',   '=]K4UDYOH</whw=)>l-]i/vW@$}&>gFRB`2xg^~z&:#xxc2]A(>bGcFF9[E@B`fP');
define('NONCE_SALT',       'a?m><y;t=2L6jkLz@tEJeH~vAh?jL&jU$aTv,LLJF;]PPI%>gQS5;ZS|D(9r`yJ:');

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
