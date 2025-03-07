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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'aK]zly`[FT_2^NmppsH6:gw( WmUUw28/uIshQ=c<,HoTIX]yvcDs`uBZ@&-V M6' );
define( 'SECURE_AUTH_KEY',  '[IbC_MC,>~ZX.2gH3.tzNZNfQ4P*?q eJ;_K+6xUyD~WQ/vbV4=&z>YqkKzlCs9E' );
define( 'LOGGED_IN_KEY',    ')S_F[H^Q{tiEHB2vjLZV@YT[5UxM&#)?:@3F ~(]$S@oS}6!}4e.>R(eXMxg.|RW' );
define( 'NONCE_KEY',        '|4(3vI,F&14>G-x%Ij|^BBIX V`YcK3O{;z)9osllWYBzED~4 &P2nNji]qpZi,j' );
define( 'AUTH_SALT',        'cRQB.+5d}G 4o!E(}9[r>uws3x*O]tTPo)ewV9_ClfAE.X2:$[qT0^*#zgJq}i4]' );
define( 'SECURE_AUTH_SALT', '*`e&_cf=uE6}A6hlc.[S7Am]2:dq`l]j+5!R9mnh0%l </fG#t%Smwdx4+1!jP%a' );
define( 'LOGGED_IN_SALT',   '*lxU,Sy#JkC1TZr%Q}i9161ZUyN`=;CpE@r^}O/&Js_F|a|.kENo!|,]r|=.s1+2' );
define( 'NONCE_SALT',       'MU%){/fIMP`A}yy_q5Ig/Bzpcg:MCr|r[vRgGa [X&_7JZ[#43zz:W5aq:`Zy<7c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
