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
define( 'DB_NAME', 'internproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'HGDa<)}q]$u(Rg]k dU 7hS](:!a9#?Fu6e8`fOO9B5LOb9UEPfOho]:vx,%2,9N' );
define( 'SECURE_AUTH_KEY',  '6lF.wDgz_.cA*X6n}=ra6k-,=HV6P;U(AO)7XgW^@hQ/NxLK=|?/+=LCO+9H4!k#' );
define( 'LOGGED_IN_KEY',    '=s ;Q&[YJjsaTWOn@zUauEuoHS)l)M!]A@cj#n%I|)S(U>!{Gk#5r34Q;%P#VuS}' );
define( 'NONCE_KEY',        'pS>g7d+*V=#<U@Ahugv*M-2t <~wl4C0FBS#01}_Qz_{x~uYuAob>1VYAnOs*6+f' );
define( 'AUTH_SALT',        '$a/zF+AXW$e>t[{,(/hKiDUS9<(ck/M^|JR?}[_olCRHvS$(0RvQe,2KP~ud?SJv' );
define( 'SECURE_AUTH_SALT', '](|8N*c>`2yl*aAQeMq.0.a$p?)JgXc!5.y,$G.UKoOEKwahPdA-/@4UzW1Kph&{' );
define( 'LOGGED_IN_SALT',   '|bQFIMCztsS0bc]+ )BE9#z.Dhfx.MD@VU:NSZ--l7bcu#pw5?Pn{vzDg5I!U=jk' );
define( 'NONCE_SALT',       '23Gk@zc6?{H ]}[9MAmvN,.hc,6YpG0YBm>$)~nV %nILEM7XlV)o-LdXC}s=D.`' );

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
