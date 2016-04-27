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
define('DB_NAME', 'lounging-lizzard');

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
define('AUTH_KEY',         '@V*(jdbip}`$ww I|#|l9qx!;;*]Bi&~6/4{3w0)QojvMl|njV5,NsZ>?r f${I4');
define('SECURE_AUTH_KEY',  'zF7V&i>|KegMjBq`)S_<KD(pu3}*$?Q!<.m|;d4NasKgL==/}rwgzZ6IMlFLGiTy');
define('LOGGED_IN_KEY',    ';C^(&y@7G{.2.^{nV*gvxtz:`n260Ks:v5K+v/;ecA*{}tYi)*_ZWo3V@yM cL46');
define('NONCE_KEY',        '#; rAr7Kgso%CgTDI/}+C;^fX-j8j>tzq#gph|p#P[wE|},$-,)-gCkJLe?|v{6m');
define('AUTH_SALT',        'wW+n8Zl@BE;i5@, T8kr=Bu!sY)I=P<Ql!/F6uF!}m;:vX:^`T^m]=E1:zQ*?j~]');
define('SECURE_AUTH_SALT', 'o5/gk(D=q@gqR[@~?e,k`XS!!),F%E_4#Z{(aQ0S;YU~xWh~,G hkU5k`3?a=>(+');
define('LOGGED_IN_SALT',   'h!>HiG,[W|u76o{nnI65m,T,Mj)%g$syHA.]U6!R&WaWE:$b13gm]K*pE6:wR},:');
define('NONCE_SALT',       '9_tua`N#TE9&Z0/+Lm/)+YaP_YmG=Uihf(aEC-NxqEg!gD/Tx6fK=wah$OIh)dSy');

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
