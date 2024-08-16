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
define( 'AUTH_KEY',          'OPUZT^2&Baek(2iht/V$mz*xTRv9!F!SBYfkr3QDDa|*`Sk!pY_45p_7iSB@O}jO' );
define( 'SECURE_AUTH_KEY',   'U<h2RJR7,[mtE&p*PGDtr@DjigxDF(qG+L)h9m5(suc%Lh+;R1gr5Q(u<%om2j+q' );
define( 'LOGGED_IN_KEY',     'Sp9XukB`lC5iOHH-bUbcS+xZZ[5:-EP;9#@p^j!~d)yQ(A0;Y_O[2*W?#3n_oJ12' );
define( 'NONCE_KEY',         'wBhW59hZZIR[,t0R+0fpEl)E9TbzUcr6C^uN=wbSKsr&/xPVWXY=Bih7n>/8~58G' );
define( 'AUTH_SALT',         ' a);sw%^[]eM.i;5Q68FdIx$a>,q.D9Qo=azNu#2XN(Z~nSDkYs_8CN=9HMVXfGA' );
define( 'SECURE_AUTH_SALT',  '$Z$o<$XH&@XQz}]? dPs>_K]:*zjtb:}u~WK,GoxO*]oWi:fb?O(c^W!C8p+^(!z' );
define( 'LOGGED_IN_SALT',    '.@XDZzH._ELv33?S&4i(*kn#ozeXF$aI5iv)Z;?eSHlM?kJVPmIA{(N-9?Gn+?c)' );
define( 'NONCE_SALT',        'zT7qe^Kk!r6x%K3dC==I;f]7q iPE^!d,2O+M|%i@@PvW>Olb3Xo/T_]B40454wS' );
define( 'WP_CACHE_KEY_SALT', 'SoNhGz.)vi]O>@JSsX$hFEtDq<O($&`P@}&N,*%!Q7M856CKf?xEj}}R_D%I?w)c' );


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
