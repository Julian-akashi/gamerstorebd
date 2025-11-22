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
define( 'DB_NAME', 'gamerstorebd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '`fOvT:>Z4eB(vh:&5AmOHMdvtvq-6F]j2h*pQ6Ah/!#w.5N$$#Z~=DZhi&p/FNF_' );
define( 'SECURE_AUTH_KEY',  '8korJi4WE^jHV2jz`bK.O50s9p$[zC()Og5bzL~M&?Ka?PK#:bdt/q0()m?%;18l' );
define( 'LOGGED_IN_KEY',    '(^q^e|2uBLHV ]`l10hRdt`;qN[vo&H7)$.:r#a-d$>UCY>qV}>;>DP4M8OxP71T' );
define( 'NONCE_KEY',        '*,p,&,BI<yJWwv;Y)&u@JUQCsIqr)_4KntL5ha3-<[7+RdW]GEXyNCR,IB8O,bs,' );
define( 'AUTH_SALT',        'kA?chg8I=wGWoV<Bc+IWXFcmh4{tit]Bg+[4G;97~Qfs8B4zyh3pt|E=2G~<X&d1' );
define( 'SECURE_AUTH_SALT', '~:b_m8O0b,+80#bL9>~78~XZid-5{d%?Gmw<gh:<{18FN+{Iy.OXI #6,2G]1]e?' );
define( 'LOGGED_IN_SALT',   '%DvlqFvtn4l=L`u@@ys:BE#=>PP`w<lQt=L6wuf[ib^=+-j53jmo>~.q==qAJsb@' );
define( 'NONCE_SALT',       'bbkRYk(l<nUd1tsEQVb1}; C^?NXQpIP~WYh8zc5ZfoJ{,pd.$v=SF~r7{%a {jR' );

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
$table_prefix = 'gamer_';

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
