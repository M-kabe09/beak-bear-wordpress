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
define( 'AUTH_KEY',          '2GERTxFojq/+YN>{Vd_nGi:Y[O6PPqhOTqkfHlbs%(34(ESCct]NxOl;YmUeFV@+' );
define( 'SECURE_AUTH_KEY',   '{^r(Cu12E5YZ@tpA0!9C:Fp%G3dq;5`zQ1tq9YAQ;2L8 q;6h$O#b]KxX3@?%AZ_' );
define( 'LOGGED_IN_KEY',     '62`z[Fly,x{_X$^8F8oqCayL/y_s5tY-eznXMM)8U5zWk#L`SDzNCX1DLqUxe0[j' );
define( 'NONCE_KEY',         '`||6<[sU!9^3w+-yjH@Eq>:Dj{G$l(2sgsv[9yM;2^y4:]B f/X$6j?VwXP p~sL' );
define( 'AUTH_SALT',         ']jhupV|}/6Q0]OoH>1*x O]D^GNk<M:|%:cOxcnvat){s~%_;-ij~J=>]~t$`}YE' );
define( 'SECURE_AUTH_SALT',  '.H(.n~l%[+_#b2W0(^E[Q),arBQL|*>C1V+Ncd5iUvl>:SP~f7d##xQVmH;jJ*YJ' );
define( 'LOGGED_IN_SALT',    'dbQ,2%H.Q{= h~osM[$F12=|&u/DXsr%Vj{.4Py.cIW{BfEU[z$_s%({`Q1p68oA' );
define( 'NONCE_SALT',        'iOS[;AyUdJCz`OAn|9rUJ<CZQio^ Rp1Hc7B$[=;.ZT8aN+_rT,4Ne )o|DM-Kq&' );
define( 'WP_CACHE_KEY_SALT', 'Z;wvF{ws5/(spH4SL[r(MHA|_vQhW^9WXkCK{#%4j0<-}CGiS{RsDnfwoU&^]%mI' );


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
