<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


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
define( 'DB_NAME', 'u404636189_hAki9' );

/** Database username */
define( 'DB_USER', 'u404636189_ruEtt' );

/** Database password */
define( 'DB_PASSWORD', '3qR1tTRI9y' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '!0tqh:ayl<p:b(2wf{#$l$1hwHkKpsCk3]jOPOuAAoDDxH&4@H<7k,@DJ9d-[0C:' );
define( 'SECURE_AUTH_KEY',   '3)#KSl(#noVA$|2]a{%VaYlPf?Q:TC7RzrqvJ;bC%93uGE,dD>F3SiC6Q>uP uj ' );
define( 'LOGGED_IN_KEY',     '>ne}urXU4|P>L~kh +_kTq||#NswWo@lMv%]mlNc+vrZmLSoE4mN~w> zr;ym_Fq' );
define( 'NONCE_KEY',         'Yyk<Ohe`O)jT,ze[ ~k&[;E/{K/n(Vw9-t--B)|Fi0<-~g5X=dw3t3E]hBm1%USM' );
define( 'AUTH_SALT',         ',pL?=?:kaZOS4B]:kNoj><jn*s,@tcB?N4i*g j4K1V<]l]2I}e}m+6x439p)`4A' );
define( 'SECURE_AUTH_SALT',  '@qgCesEt5 `tXu`:Jjw4Fe1$J^|xS`T-wrU8%W0ILO@}sB>nd9N,:X%5 F6[}6-Q' );
define( 'LOGGED_IN_SALT',    '?&I6?zy97Jf.j{D$DQ{3.yjf:[,Y};-[p_:v@,WcQDC(k0LJGEQtqsE#p=0yap#g' );
define( 'NONCE_SALT',        '+s8Pq&{^RMFWl5S7l@UjnOEl(WWZBLNI:v(2e`tJplNxxSI4!u#bE;TpJwgc]8*5' );
define( 'WP_CACHE_KEY_SALT', 'E~(zwBQi&~vTUU,BU!Q^C8]|%>Vcl}>E_W|!UeAL$9OeRY28FhdA5(YDt>lEw%uK' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
