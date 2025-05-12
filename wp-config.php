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
define( 'DB_NAME', 'areadeprojetos15' );

/** Database username */
define( 'DB_USER', 'areadeprojetos15' );

/** Database password */
define( 'DB_PASSWORD', 'v7f2d5' );

/** Database hostname */
define( 'DB_HOST', 'mysql16-farm2.uni5.net' );

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
define( 'AUTH_KEY',         'VrE?# _qguHF2%_fXUYUu?*,l,X,g})t(BE.+Xms0}RKfg7 lkc:70wxa1BoQxB#' );
define( 'SECURE_AUTH_KEY',  'RJo._l6E{?J?%Vo` asAG1PB)5AiR+y-JQ<6hKV#NGYAF18lBW()t-bhw=z]R[45' );
define( 'LOGGED_IN_KEY',    'xjy|JjW).pH|P>2gwLA7Cv>j|]7Sfl(E>0C)X;AJk4NwluDx@}Yi8%XJ5z#o#`79' );
define( 'NONCE_KEY',        'nj^qwlF=(`:R/2~a(JGO.)w]on3G^G5wp (W>LuOY~F]d(~w?5VwS$p$@4.DBqWP' );
define( 'AUTH_SALT',        '{5BWe#1qHv=tkk!o9$Ypgu3Rdz -4G@s6J-B90O-HeQEWjwa3@mh/iv+eD[1AIxo' );
define( 'SECURE_AUTH_SALT', 'EkRWY(`_CfrW|o0vt+<f0/Nh%]NCLks:_2?qLNzQ69KO5yNV&|A}u;,F+x| _d=$' );
define( 'LOGGED_IN_SALT',   'uWOQzX.o1k|z(R{M{HMYU&9>xS;cCh{;E@-!idH>!/NroEWZ^G-v4@B Om5*$Hg!' );
define( 'NONCE_SALT',       'D,suJ>5~d@C8wA2(}}9goAb37W_Gt#^jTNv7:JK~RYT-JjrvN&HzCn*$7.N.;uuQ' );

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
