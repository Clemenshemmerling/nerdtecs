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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'Cxyh_/R2=%Z5a,iL+Zny,.1>Zqd<J2}Y6w4@Bs^`~/d/qq_kdcqVGwhK)+bv-Q2?');
define('SECURE_AUTH_KEY',  '5p-@hzB,>1=wH3T}B(/oIHw:EU<Jee7OZXv&V`KDCh[iZ!b8`^y~S*ltED//]Esg');
define('LOGGED_IN_KEY',    '^Jy!`3Qbm[2kKt:cgM=H )JU@]I%iEP,2-yM1TP/~L!yW%@^&w`(@qOMz[?l$p-c');
define('NONCE_KEY',        's!#rZ>LY#=-[s!_Ltx(fK(tCT{LU`o+n#o&aB1[<f!z$aK.w]h{s)^3![TX#5+G&');
define('AUTH_SALT',        'YaBg}bc;-MK1a})o:Z;kLwoxH-wUGeso+%D?y52>4*.VopErd,D=$VT>fb*//C:_');
define('SECURE_AUTH_SALT', '#v9A}hZT1Epi/vNOe#UQ Vx9rGs/3x$Zso[>L@[dF+. 2.jF0BFJ9 B1QV?M%]w#');
define('LOGGED_IN_SALT',   '^_hUg[FOih?mXhS6WxYq!h`g;n*^)={6r)_kHFX^}/DLt#BT*Y:t^}gI=;eiqB+9');
define('NONCE_SALT',       'V|i`eoW^)7v6ZK7YA+fl.k2R/R:8-CI]C2&XlM}Ts=ew^%& a00QSju*@OU;XK8@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress';

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
