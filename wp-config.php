<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brightnotes_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J+51|%J$i3B?U5QWR d5%GUVc%0&_&vZvlrr/x)#9,rO{pTnHHdU+&8f2:$X7G>g' );
define( 'SECURE_AUTH_KEY',  'R/Ky]7]qcqph-c,2SOLxd_$7$nA%p)o+jYLOWj$y|(q?|OkjxLwZ%zDk5>En1/%W' );
define( 'LOGGED_IN_KEY',    ',h/p5],G`g5&5^0E2P};Rz`?  r)mm?K#;#N`F>i>ci~,rh$8oB(^F[S3*Xg(7!g' );
define( 'NONCE_KEY',        'f7CpEWGiBx`3V[@SA1f?:o$D!n/?dFkS&wjxnSP,,_I5!LY&8-O8}:x8Ajr)>q`l' );
define( 'AUTH_SALT',        'Z?EAh`:D9XrYIcugjpj_@q9SK//;`{z}GtX-fk3VsvBU&H(Q_%4hfe{IUe^Q$FT`' );
define( 'SECURE_AUTH_SALT', 'rO^bw!lsJCOveM`DAdO`p;tf$b;*JD=ZBXa`0G##CGFoTA:^)&Nuj?uKESa@Ws<d' );
define( 'LOGGED_IN_SALT',   'gByz$5`4?<}-/<j_?$:^6!.}[N/UYf1 z:Dk|F#3B3V0h|+jizS3y5~a)Y-X{$[!' );
define( 'NONCE_SALT',       'EDeIFzJ1hB$bJOic@R<~YP@bhba}-9D&cpMqA$^jctIdWI]-mJ^mN*#Bk<QA{qA}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
