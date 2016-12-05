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
define('DB_NAME', 'tutowp');

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
define('AUTH_KEY',         'G}jm_sdY09L!8;$+y_8]oRNS&U,dz=C@rY_+)J|0lX_]P3Z/laPXp9/FomOex}4(');
define('SECURE_AUTH_KEY',  ' u^J4*lGo[$p8=2:DcbT5%}<9V8N$fdV;O1}>tkH#1q9xA6siu%a*pM%9GK|<$W,');
define('LOGGED_IN_KEY',    '5%NK7Bl:4H3EZf:]FrB:9=d8NN(|E&j=aJR<#uY^f9<p0Ici/sb@O@)*A?g}5AOy');
define('NONCE_KEY',        '5CFD!~vQP`okL8^R2sA>!(q{}b7a:7bx7`2w{uSwuDKsVPf(;XMOM7hgTEp}x0v-');
define('AUTH_SALT',        '!16{LGt#oD583.5.tE$zoPB@T]~[7Q89zit)JVsPE&ni1DzwuE$t<23|NlU<+P.C');
define('SECURE_AUTH_SALT', 'Q&gt|w?DbJvrP=_V%e0+cmL%-UrZY^!`fl9nB64Q/^L%*g%*f/|N]EdRR`S2<spC');
define('LOGGED_IN_SALT',   'd?=l8AvIBQ6vJb&]EpPg3}r6VryFWQF&2ZToV53#@Xr:j6[tb/M,19iGRI}8uOLI');
define('NONCE_SALT',       'sybSc3mSN4,JAMb1:6N+pCd^_FDNpHP,<Rtp50n 9ToU]?(hI+;|,%uQ1:.)H$Bh');

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
