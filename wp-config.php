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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'resturent' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '^+{GBmY:/Y-BIDjQ ;Ud[uZ}~H6RkfjQ[CMr)UC6kmV(kW[P7<@xX~0bihm~(VaR' );
define( 'SECURE_AUTH_KEY',  '6h @vQ&YtyZncZ48Rcmbo!;CEli|y4czAw$0!JgDsl<w2BXJqCg%W/gK0L-*OF+a' );
define( 'LOGGED_IN_KEY',    '$Dqv,U:$0o|>t}x%6YnL?lKU$)O%wk;FPz1m%JYV~]2_GFF)!)ki<m0N0Ukl]ew}' );
define( 'NONCE_KEY',        'pw3[NNl[-fVN$|,,FhLNi`IEe+KB&7GtkPSTYd|XN!qsNn#_Ti.D+F |&4R`$pks' );
define( 'AUTH_SALT',        '#0Qb]Z]uLG_.qi-B Wv.3h7:J~:S-tqAo[gj(Oh1:JM]Nx1`j&^pdn(F03z^Cvz:' );
define( 'SECURE_AUTH_SALT', 'w&XR|(?;PL-~P/e=G,6wTs_oq<~x$SbCGezDj%@|6u3F/v7BH;441)PlktSqNV(Y' );
define( 'LOGGED_IN_SALT',   '?}a5caLwW4mZx+7+;E+`=Y>wLw_Uuwlogl^?z7JD$72T{w9<kJFUsiHSRyNy@AxM' );
define( 'NONCE_SALT',       'xU)=!BZ)LgY6a@=f9`Z:&ND@Bg<xU%MIz>:ynpfk0Gz9n)y:kOzGe;~|VRx+UVDj' );

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
