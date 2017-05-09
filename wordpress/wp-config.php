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
define('DB_NAME', 'wp-futurelab');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';5%qb`vj)B~/H;SN9fe$*h.EzV! +qJGbfu]]jF%$M[hB_?i`pXP{VG217iUb6JH');
define('SECURE_AUTH_KEY',  'U]e{>R~obImIbO,XwI9Qf8,KQD|t~{?vD4U@@nd=UZ-iP;pLR5={znrX/7dYL~_~');
define('LOGGED_IN_KEY',    'a<e3v1Ste1YL.z7t$@tB7uJA@4GONe=C~Uh5/w;QHaGm,ksKh:Kr7Gc/*Mb3IH(<');
define('NONCE_KEY',        '>2?Xf@e[;M+<(^Xv1KD]cS()tAs_nI)rqxeGp53Bcv(5Cdv93j0*7aA*?-E;BtP8');
define('AUTH_SALT',        'oIv>?~&Z*uJ!Tu-5>R?/Iu;+C0L|2_b.WMv0mc{_)?0hQ>t]W!CG4KqTjEZ&@#zY');
define('SECURE_AUTH_SALT', ':@/)tP3Xbg0aR{!{jxRXKG%2KcSH{BD&Uj-SpT%EV`MW63([Y$kuM:RU-k*)|?AM');
define('LOGGED_IN_SALT',   'i&kCa(pS%:WYshAX,&r&odw{(Z.sO$y_ws;[(>zDU#]Ym(D;N~[9s?Q!P,s:{-Yy');
define('NONCE_SALT',       '80[pb_+?Uyg^]Zf3AARryRD,KW@[qK{K0?[5p3F5rRh;^17M}+0nq._S{O}ivt2R');

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
