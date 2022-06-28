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
define( 'DB_NAME', 'itg' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'po@<J_}W/4<7(9Bp4vtZOR$~_l)Xtv,W*@c_.07=TL*A#vjhJE*Ta>fk[cH;-Qd%' );
define( 'SECURE_AUTH_KEY',  ']D/o[pXd@Y{?dkbh(/[PH[U537^=DzOBAti_/v@U0Mc~|B$^P5woH=],^-2Oekz:' );
define( 'LOGGED_IN_KEY',    '*x-9lvdDFqotT1^k*2iUJs(E@:&62!A]8EHB!>.l/mnD)U),aCYHr^?XH>gI[?RA' );
define( 'NONCE_KEY',        'b6#GWW(>6@SkmN-s,1-%Xgb{w5.@aBQ:kO2 =`sQ8r_!o >^m/STlU-=x31DPFh:' );
define( 'AUTH_SALT',        '=zwdimpk&u Q*jEC^=2Z;dTiy^-ET{OK-t7>ln%Ru.:h?B#*/Qp1_A$)?Fa9q@8B' );
define( 'SECURE_AUTH_SALT', 'YG$wWr7y]iOt,$Aufd@K,p[6ioCSyuH{J4xH6m)xzg@z E+2%k<p5C|J`*A86O}F' );
define( 'LOGGED_IN_SALT',   'F1pS!0`xHVpOxBlEO0?9ESo81`su%Wb5H8ljz*cpI4r)SY?gJ9ihxJ0i5aZUl~eg' );
define( 'NONCE_SALT',       '/@>.ls MZ-VV@i$y:gF]%t!>2ldBgkI0 yUafpcFj]]%vJ3bd-+k~G=yxQvHe<$6' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
