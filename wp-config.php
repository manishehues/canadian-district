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
define( 'DB_NAME', 'cd' );

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
define( 'AUTH_KEY',         'kNo#xu<`lv?lgLYO|vbk-<a<Vd-8sR>Ysq@P*c4MA(bhh[da~K1xE%bF[@~A#e3<' );
define( 'SECURE_AUTH_KEY',  'zeJ0OI0Y`o]zPI2-+E|K>$op*jY#~`B}r@Sh%M:@]BD97s<u*eTO|R~NNBu#,Gx8' );
define( 'LOGGED_IN_KEY',    'K5fmI?$qU7r.Lf8PM79(Bn$plM-F` x~eWgz{Z|E}^e:qei%/P6QnxO^(QHXI&aY' );
define( 'NONCE_KEY',        'MTkVA~{+nC16d_{pg3Yb&%8g{u?dz.csu;=Gc=RpFRVGrN#F_5TqI/yQ]796`re(' );
define( 'AUTH_SALT',        '~jcszS>vJS..bLV{XlF8mq#`Z%He5BO3^*NaU=*KQBV&AoRJ|IwrR_RmWg*D,36=' );
define( 'SECURE_AUTH_SALT', 'h:%|zkqm~y}M(nb%(}piS|4vzIF%$Or[&X#Pv{X3SS}%j>J9dWTj}Js^<+kMtyz:' );
define( 'LOGGED_IN_SALT',   'g+q.~BB%H2rY$g]kS*}GTVjS_UvtrDy%%Mt1NC85-O7s{/yyN(~8~zGL<eUNAL:E' );
define( 'NONCE_SALT',       '/P-js|7$4fvl5so5bL|utmS@`<N/Uyz5!mkK`m;7Z)cf<~jLh#e)`pB>N!KBF<_q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'district_';

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
