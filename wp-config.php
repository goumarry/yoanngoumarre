<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'yoanngoumarre_db' );

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
define( 'AUTH_KEY',         '79ftc}G>2Fqd8yxYrb/7SZ&Nsw0<7F(fcN5mfBUDUA<I_zo3Hv D@*)X!&<ZK;sy' );
define( 'SECURE_AUTH_KEY',  'b9qj>erO%59}Jk.Qz`fh@^sw.HBNV]Zx|Y2;aG*nx:@|Ii&~g4&l[.XX|3Yrj{]S' );
define( 'LOGGED_IN_KEY',    '%k& t]6wS}U_?YQ=D-LHH#^Y1K#pLp>Fvizdd;  zs5mDQtL4F+YktUxB:+!SHV]' );
define( 'NONCE_KEY',        '[/p3kWvKgo:=b/xh-@[FwRxGB_!BC5^n/o g}*=9kShWf+& stM2-prB?s_r}}1K' );
define( 'AUTH_SALT',        't5oTq_lvY8e+jaNSXRw+t>iMy5)WU@`]in]TCAjZXM^)4e`4jtY/!]Xd_<6QUpbI' );
define( 'SECURE_AUTH_SALT', '*>l~_DhJ0,R#Lu!1Li2R1Xd8uCW&Cg$ Hn;I4QOMaD8SV%lkB&;uODxvMd/I4h q' );
define( 'LOGGED_IN_SALT',   'oWocx7(_Zd$}M{sj!uFZ|5e$8(lIgMp6W vb|Qy)cv@r3_Ih0V~p@FoqQH+x:hzw' );
define( 'NONCE_SALT',       'DA*M:^xYSV(>feFpn5]%0fb?5(ibD>=,~@!1&[o)l9g-d[0P?S9Sh&~3kTY=YgmJ' );

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
