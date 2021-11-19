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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>14rPve#zj)p7??.d?mo,AS[N=mRhU#II5.GxUW`q%mkJsz+i@;-8eywo:&i2(#U' );
define( 'SECURE_AUTH_KEY',  'i/X){x%j.&*#-2~/K,G9 ,UVZB&q-tZ;>4hRm#B7UWdd1X1Oadk:2l3;(m;-CMD/' );
define( 'LOGGED_IN_KEY',    '1r%3ApU c}UBr&bw*_grSFtJf^;%t{S>d67#xvG&#dO_~jc|dcnK/Ux;F_sKo^QE' );
define( 'NONCE_KEY',        '|(`.3uSmJB28S83gs?|LIrG>;hfwH b441&OMOAfgw-RwK:Jc8^>|7EwM+n_$Qbe' );
define( 'AUTH_SALT',        'nDVU5ltRV#{FneY8UpkZrmu+cPFW~~]$/h.{o3R42/=](qI~uY88371*P*V#_l?N' );
define( 'SECURE_AUTH_SALT', 'Ee;3x}D6&8:&7}if<;dJ7K!YEfb-IP&|Al^{mc/x5f1uutQnm5EBVB$d;z)n-`*0' );
define( 'LOGGED_IN_SALT',   'Mc<aUdZoGP_]Y8G4vecCw?}s_xJOybe=+^DX9-sq!f;]IY.mR6p !C9j/gFf0_-4' );
define( 'NONCE_SALT',       'Dd`*d))c2d$Tlh(ueJ`9j,Uhvwyf+2WCqVI7r^_rTxF<8$ANkQM0qJ/B6(4MP#|3' );

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
