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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdemo' );

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
define( 'AUTH_KEY',         'Vzs!m!,-9<97i/V0P fqFld;5WuWgTizKCgE.1Q11c1D]#q2IAUHdm%=3:aC2sJk' );
define( 'SECURE_AUTH_KEY',  'Yp=BoRU@$ bxI*ont*?~p2fW{I#F%HX/$AHpHyGzdAdYIM1-3EI^FeLs&Mo}z[(o' );
define( 'LOGGED_IN_KEY',    '&N;-gXbBzcsL8N%m(: pyKOs^j%<*/lpI)gfxw~Eq>1`GLIpXHVTez5iK&@Mnrkj' );
define( 'NONCE_KEY',        'yzzI!{9?+8]N9,,TPga> zsV393Z_(WILp255Di&&9n9XK8wz|)alU[t}KOlvfPb' );
define( 'AUTH_SALT',        's92-O5zn,S9*J+ s/oTjjwiV|iV__@Ac8Bc1BKFHj$:tP=h9[k%!:(HaxeYW>N w' );
define( 'SECURE_AUTH_SALT', '|tQ0nXCW:3&2HR?-$7g-[i{Ua_oV)DAz/0,ue:*b!!Q> }5^}Nb& iYN2k{HW-Q/' );
define( 'LOGGED_IN_SALT',   'QE!U~#j-zzxx4uGU1EOkCK!$n`FoDtX,So@IAzG|(Ro0&:e^b-8[p[wN>[ZHjGIV' );
define( 'NONCE_SALT',       'knJ)M]^mA*wl&Ka:-*w[Zt.Fi~Z1(j=vA~0]sF1@&BHQ]B1D31qkG%8:BS~WP]4e' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
