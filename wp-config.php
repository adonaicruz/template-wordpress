<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'D`O-shcDy6qk&vD$fG#odx|^7V#EDw{?l[ -~CpTW>bsWYKD0&!.y]WHAQTpn28z');
define('SECURE_AUTH_KEY',  ':U8)JHpL-7%D~u%:AG%lj_i8, GAz7{Zn&/d8PNq0UGB#4Ti*[suzK^t3+!E-HM3');
define('LOGGED_IN_KEY',    'FM]*B YY]d<X{-b]H|N4^TJlD~ehqmv5$b|QmZOG({;EK[QP&.gHa7#mtrgo;Ngq');
define('NONCE_KEY',        '=H@&yoAApiyFS2b#^[~ Dt<1ShytZXqb@ZaW4vdT<_ry{[KJdzld.+=Y>DNDE@Wf');
define('AUTH_SALT',        '+#1j!f9HF>/MRUE`Jy8VInjh>t;uz;9_)m{7lk]0oIl~s?Kuk!2>[AqYIe9xGvLF');
define('SECURE_AUTH_SALT', '9Wn^F#E.j)[Dp(`I%s$ht3_|lD<A@|57cfKR<g{:m*]GDj/DD:kJfjX2T<^E6r8G');
define('LOGGED_IN_SALT',   '.[_8}Rb1!q.@sefSYgfaKFTe%`| kf[fa/!Q:{xxVHH]s|dcOh8;:hh_jQyESl:4');
define('NONCE_SALT',       '6MjG-1JjrxFuWY;em-<1$axd*%JcAF(yYHZTXu]vrbZmTcr8S9KIWjl~HlqOWGXQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
