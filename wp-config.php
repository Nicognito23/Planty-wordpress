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
define( 'AUTH_KEY',          '}I^?3|*dAKq&C_BY?XJr.t[0X/j~u}NPfpS|j,9<MZZ`H(x<tXvrQNU_5Z4o}]J2' );
define( 'SECURE_AUTH_KEY',   'H,M(avU3N1ps9Z-Z6?om@;9:;l8RsklwAF?zZZ|K_uil;*#6L*Bn4U,DvtCr&.rr' );
define( 'LOGGED_IN_KEY',     'YK;af0)Dji//u96!KYIF5sF;*K2/AW;d1#oY%$eTJzK>4e.LHG+:8E_d7%2j$<dT' );
define( 'NONCE_KEY',         ']F-nz`QgHr9t4OUzDq7=nxS+4Qma%+x5?er`r2!3x-zlh2><`*4LsH=+:Ti#g[Fe' );
define( 'AUTH_SALT',         'OWt>r]Q/WO$2tjwQux7{Aa{U@g9Ckxw/Prrns{Zx&HA(i6N_+seqMz,,d.Q<OaGA' );
define( 'SECURE_AUTH_SALT',  'f9cQGrNDHz5tO*DbhHy[:l;?pM#yi4T|hg%w!eZv$y2/iDjxxR$fUD1U=Q*9,EPf' );
define( 'LOGGED_IN_SALT',    'PMeI7:(x]Tu4thuhxa[NOoHojvF5|R:74Np.&5Qfs:]]NSq#_|Tsf1;P !xZep2m' );
define( 'NONCE_SALT',        'W22ijMBceq2-LX#+]w<&kSAZoTnurNV5u%PCvd}0 wu3FU6HUtC]E,QQ0H^qW{`u' );
define( 'WP_CACHE_KEY_SALT', ',<%):{M3m%d!Tydmk<U? 7f7Z`$ce:QAU #sBpU&JMQg&D}zS&ZYfkQw;g,op~b$' );


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
