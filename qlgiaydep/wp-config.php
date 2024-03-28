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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qlgiaydep' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'W#%l`(&nu#FXm__uVsqV!W#;)PW $<ss}3Ge4y&=/P3XDQXe69#R?2%whL)K%o,/' );
define( 'SECURE_AUTH_KEY',  'S0qXnUB]<N!eMnUc`@K $j%uSO3sudc(gF4J/<i[Hx%6%aIm_(<$>Mq-nXHlQY-Y' );
define( 'LOGGED_IN_KEY',    ']oAtSEc^`YZkDo:@-&A5}nu|jXuy^A{c}~:#2xP[b^f,]<}`+=zKODRBOyu,n@m%' );
define( 'NONCE_KEY',        'W{Xx^]OA4>E2(s`<kHahewrev=1{D9!`.gG8EhPDkH#0/MKQDik8TY~E&N4`F0,e' );
define( 'AUTH_SALT',        'mMM!d/xp~MME(g4)#4WzzVFXYZ>8 Fd.f*g}/7:6@eZYzgoZvu=1#A6>je]KldZ=' );
define( 'SECURE_AUTH_SALT', 'zeMCbIR=!QMb93{rOTk0@1y`%1nH8njIBoN?K([P1|NV;)SU4e#=x5-=6-x4i+,7' );
define( 'LOGGED_IN_SALT',   'J*.gb$Fl?E|paX(KEuAQl?qs>[: p0PkFE0?<:|LWPa|k:QXe0saDBoYg+XW}Z2V' );
define( 'NONCE_SALT',       '>mR|Mz~C`40.;PZJQ|xTN8nWdk<T?>NS#W2X=f`TsjcWkn(hUnG8-x%AiPJ21bjH' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
