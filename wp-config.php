<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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
define( 'DB_NAME', 'site' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':3zA))^e}6Gp^I=Vi1|l&9PqF$#s%s[: AWWtJ,de/j.4/c*0pdxU#eujCWdXBB^' );
define( 'SECURE_AUTH_KEY',  'u4=c2A/ZTh*E6*40wdtvGR[k}~0n+(f1f}:AH-6=ER`-F$A/rP5s:NcWe`@u.|sR' );
define( 'LOGGED_IN_KEY',    'u^73ogcgJIL3I06)jAX{9+Zha>XPx{)I_GQ1@l6PgLze*Em`KTgrq2NX:fv0qEX]' );
define( 'NONCE_KEY',        '/A>]6s|&.t{cmXq{LVS(+[ =i167}$.u)97Zgalq@o(+uAS{8k+h-8@/m,93Ksnl' );
define( 'AUTH_SALT',        'DcVi+nI)#}*1=!p.+LtNP%Vi!jnc/Z`ywQagu3o/n2 Ob,sB[|hwjZ~tzR1*g1&E' );
define( 'SECURE_AUTH_SALT', 'RX,8^C bV{&uGmutkcHu=8+Ef,]5(zHWv{]B>fBJ0N?weCI/3>H.r |XVqUrrx!R' );
define( 'LOGGED_IN_SALT',   '1za@n_%F??amiJj4*K.q2|CFc2pW~fm>o@n0|;,smt0!9Ay]/6iH`N,7W$3c`fgY' );
define( 'NONCE_SALT',       'sR&w:rW^/EFZ>D# D[IE*$ZF<.dRBzYil#j8lgd(rRyX/SM.EyiB$A^gi6=%GJGZ' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
