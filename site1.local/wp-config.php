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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'site1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'site1' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '15745513' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-EV^%0cu3{AHi^nUxpTV(77O_4L6%?n+i+YiN]-?37um*?K6o4g#U$*te#OF0{v5');
define('SECURE_AUTH_KEY',  'X,(SGT(wk+vH_Q-NhGY9j.o^3Y;-G.sctnL$/MFzl-12D8w+Vu;/;bfSm>Wt;.&U');
define('LOGGED_IN_KEY',    '&Ifc5{3]bQKOTEeq/+xdMdSzbE /1`hGzi7-B`hZ<B i7Wv;+uO8#,QPDEt|S,$m');
define('NONCE_KEY',        'BNqy*hne82RriB@B#Fy+nr(V4/q%N E{vr|Z0I5GZT.e-J1P?Qd4l;Bp<+m,}4G<');
define('AUTH_SALT',        ']k53D[-}!=6(k#Wn`g+$2sE5FfowbZOw+kzhD`-U@Ks=Djm0ISjcD*2:K&agZXt0');
define('SECURE_AUTH_SALT', '(a7,Tq$>ct.m3S+ze4Uw>NbuC#q0i) 3w=M3T01MKcAoQ X``&>}A_=%J_.{AHbN');
define('LOGGED_IN_SALT',   'J2LoMT%4:(6i4A*G<76/kNdd+sIE|bW3H+0YRgDsL@.G<Xd^|+h}c/A/JVX,yAS~');
define('NONCE_SALT',       'QDt2MiU|-<m`.:@H-o-,p1nx)6  Vf+ky@La=CEtC}arXP^Zf`hmL=>%&>2$TQ?9');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
