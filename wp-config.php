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
define('DB_NAME', 'v93733tx_test');

/** MySQL database username */
define('DB_USER', 'v93733tx_test');

/** MySQL database password */
define('DB_PASSWORD', 'moboru06');

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
define('AUTH_KEY',         'O~?,U2<8_I>RVg0UQ|G7:ISUF|8A*(P:~lr|8E?7k%ID<`nCMfAbeF3Nfp8 Q#qP');
define('SECURE_AUTH_KEY',  '-mvMmdYK(lZ#5#~7uu{Xww/<dXAbK`!)8rSh*YR)gqN|v%ZUW7(c@t,p|b(YQ0(8');
define('LOGGED_IN_KEY',    '/b9M/wh$<ci_0,i`+{MT%>4yn=G&{8H_!pR`W&h$5^C:iZGC?7Q3Lzg2PRt%HpRN');
define('NONCE_KEY',        ')v9v*24F6TO q^w|ldr<U0n!T)eM^6%MPv)_UV8(l*TMB95HK4m87Ld*O:7ps/;i');
define('AUTH_SALT',        'Cmp}/v8%}0jTc`wv c!`v)fLj:.D9x+x<?C.mw$RFKd7vtbxE?LDikJXe0WOo<^(');
define('SECURE_AUTH_SALT', '~=#bjmkRVU%!8P6h`)XcEFA4yEwnXLRPIKmJi7&.]>pCNQOCIvSbzPOO 0[=*one');
define('LOGGED_IN_SALT',   'DDN}I&v~QP7R|8qh.VF50!CA%e*I#[cWeVSN:KD]/p8QGYTn,&nd{f@`&O4|V,`B');
define('NONCE_SALT',       'A*r4Q6p1ao7JK!L#eW|U0Md0LmQ~m|=:kgC+cSbW7uvuc5a(<u/OS|sq535jbv|m');

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
