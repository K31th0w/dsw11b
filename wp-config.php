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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         '|z=BGnI^f-Ts%`qh@IU#_jOg3,WQ!6{dK+gD_,6_iKZJu,gm7+nj*z{=Qb,7h|XB' );
define( 'SECURE_AUTH_KEY',  '.O#~,1+k<>+/bo>Sc1L1hSv>D(`Sy&]4!q^EB9QOt]Z>B60}kg]pv|OQkNempC2=' );
define( 'LOGGED_IN_KEY',    '~YoK:C4Vdr%y&sMhdTJp-GDM.7;O00I<}^w*- ?$cVmJ/^9,/?TmcO=u;Q;QTG7t' );
define( 'NONCE_KEY',        'n0)/a|`L@?<=]U?==WPZN2r_G>VlH.m[+0Uwt&H|M}g/XPz:QQ6rp/!7FA*XhZSI' );
define( 'AUTH_SALT',        'mCakvp *ei,v;WI $vW-qcH^SJK(n6DdQ@ W-vr^DIg)?k$yht`Q:i= LkiCnzRY' );
define( 'SECURE_AUTH_SALT', 'D$$$,V&=&E7AqE)`8*^g4uLq{hiye[*/ui<.A]UhgxRwtZY$OSpN_,YZ|+Qq7AM*' );
define( 'LOGGED_IN_SALT',   '?af>$<PM>-{q.70&`T>1 Ga<VgV28d]PVI-V%&%N}K&,<mM^4OWBMs_|`GPwK1 7' );
define( 'NONCE_SALT',       'd6j0=Oni=ggBrHj@Sv,@fcv@F<8DltDGwqdxWxX0i0Jzt@SanPR,,R!}.MVnHrO-' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
