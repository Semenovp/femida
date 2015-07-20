<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'femida');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '2w_yhf:k4Q}$jzOE/fL)~XZ>H>H=TL33c(]fp`=c`[8znHR&mPp~EI4[C}sS+[w&');
define('SECURE_AUTH_KEY',  'H2,+f#(;oM:;5{Tgq0n3Xu]#R.,u+P$k-V+{!vta?GYHdISc6gW,rD7bD-%xv;G=');
define('LOGGED_IN_KEY',    'osLZ1o|1[@.Hejsn$++D;vMZeff||}`>-ZiB9JzIqst7hEXC>HRI!a-#Si6<.UJr');
define('NONCE_KEY',        '0Zo[$(kQvu!lyC<&B8U[7j.L+-Tym+^rA_s>uR#;+%}/fV&( 49R19[+-0dTx>.&');
define('AUTH_SALT',        'z77Bjdt3Zps@[%!mncpIF)O9i+#;Pd2FpJrI =sempidiomGLWDcOPJQyDxD|UJW');
define('SECURE_AUTH_SALT', '>sDdOheN$#f)S]D^pzl8IRvuYMfd`~}=:pqz_|Uv*<Z-;C{~`Ujdp@W!O:nZ;pN9');
define('LOGGED_IN_SALT',   'x}`k|h??gH=$9.E2DeU-tVhH#iWrFe3]bc*Ru 21.~rv_&n$eJ/P|[YgSk#iqww~');
define('NONCE_SALT',       'jm@}s4bdBIRhg9h3I~qDp]d4vO~u5{-Z|8*R}E[EZh5n(xm eGZ;zv{.( 4WVIKM');

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
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
