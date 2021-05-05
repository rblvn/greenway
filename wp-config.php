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
define( 'DB_NAME', 'greenway' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oJs{x7Rc:.pTGX|_dl*_#28%GF3t%*!R9yqTAiC#NXeh`~wG?q`RbUkwdU#GZQXF' );
define( 'SECURE_AUTH_KEY',  'M=d2, XzP18;qlcZeuA$RlhZ=Y$}uFlSd%? ?cj{;{RhJMTlR4O2Rz*M9lQbYB2@' );
define( 'LOGGED_IN_KEY',    'sGMLpf?:P)fbcA9Rr}A1dU$H4+tZmb0-m~O;;@gTh(-GlJnWu?#dJjepg*Qyx.(p' );
define( 'NONCE_KEY',        'WVA@Aem6Dv[H 7,YOYxOfC2Tu&hxE%cF,jn5wAX]pvn3K-mi#isG5`cw6JAW)aRg' );
define( 'AUTH_SALT',        'wE~yC+k,E=ZdhOE~$,DlA-zSIko`=,R%^a=DAooyn@.Szsg$r!c.5T-[HP~K(wOU' );
define( 'SECURE_AUTH_SALT', '/%IU7L$T=c0N/z31o6RnHlN( s]kK~<rtEqr7X#V >&k*:bR31smb%l<pr8Ndb,r' );
define( 'LOGGED_IN_SALT',   'aa)n,ID}x*?*t?^?K).eQLa40NoyXJdEl#$fRIb6UvDC9Tq%6_,r?|hS;g>5{>t%' );
define( 'NONCE_SALT',       '4x!fd{;fwj*UK1N1I@p]=z?N,Q?[Lr6#t.AhK[ls@/GZ_~~:>df]i7U*;!rMWN?Q' );

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
