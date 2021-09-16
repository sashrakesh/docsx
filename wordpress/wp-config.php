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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'documentation_db' );

/** MySQL database username */
define( 'DB_USER', 'documentation' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1eWo0+C| [jEvAXMIx&1GqD/ m5O*zAS=npT~|_VOLF.pnF$/xts~IV0:NQt:ZWk' );
define( 'SECURE_AUTH_KEY',  'BcR)? zo.Tv?KYo-A16Mfur|xwp$D]=%Pj[qtd9W7P_5$WZLA[eazC3|,.j7@XV*' );
define( 'LOGGED_IN_KEY',    'TdyhdPZK(xtbq.C#W<]JB8Utw?.c0[dkPU?VqOXxacD2?Uca?^<=jqQ/N>z;<h[>' );
define( 'NONCE_KEY',        '#o+.<~seSxL1jY]&PF:`O4sAqMd&)VW<oEy/h6=lk~<MK!b=AmK;3ge7l.`BWZ+L' );
define( 'AUTH_SALT',        'TEM35v~a,Vhyz4ThQJZ-S-g!fB-mY48M7:-S6SN/u,qoyCK8hs/*qc6GA#AF<*:C' );
define( 'SECURE_AUTH_SALT', 'dLdNn-_(RV,SZ,*qjbj}Qq(4QECuL[O<Z!R|}WnQFO~8Q6e~f0#Tw/0K{pq.q uo' );
define( 'LOGGED_IN_SALT',   'dZcPS:sNQ}ynQkBUX>nq S^=Q^;%r}3~Q-S2.tl#g0*a)bZg}X7+CSVo`a7z:{gp' );
define( 'NONCE_SALT',       'UI,*=9!Yv<BH(AUGbg=XQ$JRtj)>x B7><V57$eR{Q:G|>hxp3I1>E)i{t!q8Aqv' );

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
