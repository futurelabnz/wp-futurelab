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
define('DB_NAME', 'topp');

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
define('AUTH_KEY',         '-WCXslbGF/2`)~2zC+~I~#;>3Rf#5$i,FNl{@J#Ly)+2?^)9kf><+6I>^keQbpGd');
define('SECURE_AUTH_KEY',  '%1Vo/Nb-=NGv#71=?vpAK<y;?`~Hn_@1A%rkEuRb-m7M&[9Eyh(y> ]]gD43G,f|');
define('LOGGED_IN_KEY',    '+Ws)-rBpYTB3H-bMZ=:QIxFtK#,^Y&5Ed5t|8q)<S>kzX&XebIt-/zlD&K@^.p>T');
define('NONCE_KEY',        'KCAHO]7w>Edl_0mTjz-=qiXR0|Y%9O0vZHX[;-P9GZ=Uee#Qel}|T&6>3gRf&De7');
define('AUTH_SALT',        '=}%/@/D0D+q0Wt|XrA$+N#0zte:w{~Y%QY~K!B.UX*0j6d}4g@9i.J#+}!NBl|q)');
define('SECURE_AUTH_SALT', '|7w%VW>K]Yx?kFSbp&#dG+Q6-U)n(*f_[|(oD})p6E95=]s+h[DD9<4u*lnp9Y-O');
define('LOGGED_IN_SALT',   'Oe$vs*e9q0EYhBB%nF34Z2^.HP}3ZU+->3kogX6%iGG1A dO/rWtU#}b]-9-?|7s');
define('NONCE_SALT',       '}99N`]i(.*8`lcGOp|Qat!cVFlR8Lr|+vb|Yz{[mkpd)2I`?#Rb+!{1rx9`2-bL9');

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
