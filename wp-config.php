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
define( 'AUTH_KEY',         '{xf9zqpb*vO_6n`WV6o:CEWl!n|F2:b=p-UXUql[p/Ini7`JK?Molu-fD6g2H!-G' );
define( 'SECURE_AUTH_KEY',  ';4I.d~1HifVo9DVPe>[(yjaCld?2e@r?AQt3s9TiL9erOQnq(>?aOZB3L[24!lPA' );
define( 'LOGGED_IN_KEY',    'gw.) v+bJqenZ*d1T8)6~%k5rTl*MD*v^S|${8zRqGQU{.#Fe0^:d;bOE@T?|cX#' );
define( 'NONCE_KEY',        'zU1L$o7yuwWXLWwwI,O T1kvL>%B7uHf_pYWNa,E35XQ])q|ZCsp$c/sRobL5bfo' );
define( 'AUTH_SALT',        'q]]+@7%Yk;(=i=@Uf#j}q>Q%+lY%7*#icRqD)>dT~xppSh&a^:_KsU{9j9:]{OtD' );
define( 'SECURE_AUTH_SALT', 'DtT,wJt]!Ud<NQuku&lzO{NfnbY!cmfp.H=~{;N*V6i%<g~IN1oVy5msFVLd%? E' );
define( 'LOGGED_IN_SALT',   '{]_uULSC~2u, k*9vpZfH^9-&pE{vB<kO%O([rtoCjCGFC`)/T{Qj7rZ;+gbo]V|' );
define( 'NONCE_SALT',       '[gB$,T-H^fS^{CF)(FQwSptGN9 IYAS)L-%C!<+/m?Y-(Om-Rje;~_F>*qKel8i2' );

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
