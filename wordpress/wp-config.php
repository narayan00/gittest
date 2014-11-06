<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gittest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5aJ2L%;KgbObJ=9puRt~&jq1Qt(O#? O_TU_AJn~v;>gM[{!i{oI5i3$5YT~Og86');
define('SECURE_AUTH_KEY',  '~,oDmDzC>?EyNk7~P1~[b4:5|Re@9-o./|X7QX%o)-TmOT5VI@|5BV,B.,y~Ug18');
define('LOGGED_IN_KEY',    '<e<?:7OdvItRwE6oL(+J)-Ydk2^X|Ww+C`?s.n?&F jX%m=~kPFG@f|xn5vH5*)!');
define('NONCE_KEY',        '&=7GR:ufUb(Jy?PCM67lB*k}wzeOd2CiQ@Si+s6kY&0bYdZ~C&35EDyr[pC#EbpM');
define('AUTH_SALT',        'dwxmV4&F+n-@R/S4g`Zx1dUipo_ysC.KG8}d-WXP F?W/?[gP3L=D9@WpXjd+Tm}');
define('SECURE_AUTH_SALT', '0M8%~FD|p^@)<v-*w0?CB>Lx3)PPb}8ttb)z$V&_7x.|j.|^Jt|cI+y*&KRf,-Ei');
define('LOGGED_IN_SALT',   'yVeH,+tg].5Uz*u$Jyv=Ud^F.Lero@[NnfZ@o#jeT)Jg3M4^S>@-?>t$2<$7 Ei!');
define('NONCE_SALT',       'xXe_zuu-4sd4ldT g*HM/9uXvyS,S2J/#>AQ/+Jhy)x|!2aa2eIt>lEUgMU,iYf?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
