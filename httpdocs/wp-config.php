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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ecomoni2_true' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'ecomoni2_user' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Ic2v7z8&4' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Sa=JyibOlDF_zX`luE.z!.`>|<O8{zA&K)6OUP<@>;r9Xb_pHHG$=n/07c/FfsgR' );
define( 'SECURE_AUTH_KEY',  'f7f6^yX/=!M,FCn:eT.7D/MYR/D+mEh_+:!(#gGvq.;jUkW2T*5|&X0hp}`?4M=8' );
define( 'LOGGED_IN_KEY',    '/XA*A@KJy[KCA4D<%H$Xr4o8EEqT_qkusy(<aVOsx-C56Hcsb*BrY76O=6 ,V7It' );
define( 'NONCE_KEY',        'mA)LDUB*lQg8Ob 2I>,4`LRkgY#E`lH &.bView}8E$q.a[x!NPluPW!+<ooO -=' );
define( 'AUTH_SALT',        '^MgbK#C}*29K|j^IG?`Tdk3n%!o]GO<?|Ej-M,LE*hwl*SAE{kVi |>HH28L0$.,' );
define( 'SECURE_AUTH_SALT', 'p.2NqgS*SI@?sacWC,BO?fp+UHe`S1~}X%d/tJod1>g.<G(Q,2fsVIDETJH1Aj#A' );
define( 'LOGGED_IN_SALT',   'f]Mpb-I@v]i#DNYik^]o@(rvQ2B^+[iR}h3Is#@`n)xkFe|_uz4/m<]+<2E#tn_i' );
define( 'NONCE_SALT',       'H6(~E2L;=WGPVd%)D]yPB{%k+wla4?hdWd2K!G^QpZ: tG&Lo&1WgWAe0eTxr0E_' );

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
