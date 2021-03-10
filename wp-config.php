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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alsaiada_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e]K,9;1Yp<e~j1P$4@1+A>]a;9tV@j*2pr~T8s1;{j^&,nzY%)b*i9GoRPP1+>H[' );
define( 'SECURE_AUTH_KEY',  'VW507*ljjagZ|Fys1+%V-_9T;4oYIQ?h/<x;M#|Oi(iKOSm*-IZxJM(SnZ52jn%~' );
define( 'LOGGED_IN_KEY',    'NEgDnz+_@f=Le^{+7u3Cw$7l,$eP/>GYvPe.@u#UKrR*Ca_*eyE b@QD^S`(DN`C' );
define( 'NONCE_KEY',        'a#yk=IR*])AU)ec~2?YSx6!PcZ:FpKbm%l[H{w<UEF[Q$6cRRxHcM_:C sCBhA:1' );
define( 'AUTH_SALT',        'vyR)3XGx Txi_9Ag|7?n,a*k$smMd,i0>+N0m@q:?CjiQ~B^eaS;lw1bT3Oh-otE' );
define( 'SECURE_AUTH_SALT', 'g~LYni]g=t,=:}pD<lNJEpropKE Jk3JcgGe51~3y,<kY?B#hqyKp<zGh99dRhaN' );
define( 'LOGGED_IN_SALT',   'I{)M,/S:CIxW/c{hT+gybJI[T2DD<CK#cz@9X1r*0}:O&(Mw/j/`Z}Z2h}8RFd(|' );
define( 'NONCE_SALT',       '<_L[v{FJG~$|hAxqgICM ICWe=[*yVqE}:3W{U_;e/KA,K{?j.,=+K=x1@8[U-S.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
