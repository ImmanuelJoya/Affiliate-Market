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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'YlF*16[)0RKB<tZ2n;a@Vvh3=&,/]5_FbUaK,b^$|E+!njjCX:$eL/>=]nKs0IZ{' );
define( 'SECURE_AUTH_KEY',   '5nC18kWyil<U^pvH~$d2ECOHAq.n?,eydTwq2UNVtt1dd{]h,J1/Fi.j5l4T Er-' );
define( 'LOGGED_IN_KEY',     '47G,=Q)~4TVx&/8x;0Dv;a|_@7RqfLz;)hFki}BvD1)AGI_x Fh,PVu)8n_75f0g' );
define( 'NONCE_KEY',         's+%C5eb/W!aV!44]}-R?1j(K&Qe^zcV<z6+<G>i6flx{w93wUOHsH]V}89H*>ic|' );
define( 'AUTH_SALT',         ':EYE1M%(%A/`nHDDyOs@~Ik$<Vb!,,H#}PQB1]1BiOTl-OV&C|og-VwA&_zO5,l}' );
define( 'SECURE_AUTH_SALT',  'RcCn1.Yrqvk/AV3:Xr10+COFyrhSGrH63Cn(ck[X1tGr([AB]3BWy5hEFLv^;Na_' );
define( 'LOGGED_IN_SALT',    ',C{~JateVJ{4=j1-AW6ep 1lyP^~+:Kmsxjc`J!g7F3BIC|huve_S9>TLkxq9/[;' );
define( 'NONCE_SALT',        '27I>2d=1f{A>vF&&U|SNSVN1?5FL-|7(4V&H;ghsWeWhmZt~`;WUpicAHOQ$4_+V' );
define( 'WP_CACHE_KEY_SALT', 'B0nP1oVB~T5Km 4Fq:075eBs&DpXFP;`zA@SJQ:1y_#,Wuc:6GiJO)<CTn$!} ws' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
