<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nhannt3' );

/** Database username */
define( 'DB_USER', 'nhannt3' );

/** Database password */
define( 'DB_PASSWORD', 'Nguyennhan4720@#*' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&_g#|AC{eo4+tN#JRuYohi:&5l6Cc-0`X#Q;@o)dv*aCdbfBRh!,1F!s[3M3bRtF' );
define( 'SECURE_AUTH_KEY',  'wcQ`o.(fy!l-_R}r@$nRrW*##d|bLIOhQvQ~t!*hz.hRR.=FA^2S3_=80K]iVvcV' );
define( 'LOGGED_IN_KEY',    'Tw{U8fl Lr2@3OKzAWSo%!IW9BeX_ypPzeDP a1pC5fXKyoP=:&-fR7>b{)1hSiA' );
define( 'NONCE_KEY',        '~@x}xMrq1e2<r5.5MT$d]<4LxquwF4UZk~d<w{l_)=qbmr2u:j+Mgt9{FH>KB?Jf' );
define( 'AUTH_SALT',        'Z3Xqp-.96B07Sm8$lvXd9J%*8zoS}iaO6b%()M!$z$x(<})W2Q4P8>-?F*>C?}u.' );
define( 'SECURE_AUTH_SALT', '`]J>f;Q1n]=Wv_3c& vq:`<ThYCUkwV,8Y/>Q;O-aB>**N|47!SQ,rKx?$-JE&g_' );
define( 'LOGGED_IN_SALT',   'wfmuvu48flfx[:mg!+%{u?BM6K>Jsxn{KJBFnQbJ]i{#>;P]I&cR&VIP!V$l`iey' );
define( 'NONCE_SALT',       'C0h-ALWId>#F*YXiTj}t!/AD<R Me#f1*WQcV{yWfCQ?N7T/}}M[vdP!m1;!?w}|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ls_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
