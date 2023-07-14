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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oslabs' );

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
define( 'AUTH_KEY',         'Q(PD %_>x)V?^^5sg@WrS7&9I*N~pKr7gsLBHs?h7j(AOI5`C,eOSsarvOo*zGc[' );
define( 'SECURE_AUTH_KEY',  '`;U5G9R^Hnsyh9^femLFf@p-tQML3$5sN;dwKYePeZt@GMLFtn4sQ2:Z q`oeWQ@' );
define( 'LOGGED_IN_KEY',    'L?hQ-65,,FiGQ&UnlYEz![Da)EW2NT~,h:S%@b&K>ExW{9qD|q7W|5B3.^Vs8jnN' );
define( 'NONCE_KEY',        'ig81`C^@{NQ< ;4!eE?Jc?Avt?SXwB`}DTyKd6s&/8OWh6/c8L!sRND/6rs>3hn|' );
define( 'AUTH_SALT',        'PU<7.yr.TJCOXG8N`KlW$f:I/D(m07c(EaRW/JHL^2gJ^Hk{d<_V97z^}0e1Oc:{' );
define( 'SECURE_AUTH_SALT', 'e#keIOPd;X#x{/2#YF=g#0 cNG3x<^94AZp`u7(o`:;:0!z.dw{^%b[8vr^&T7Rs' );
define( 'LOGGED_IN_SALT',   'j{AZg4./c5TS`h{;b?}6Mp!o-#f7SHrxmF,[VPb;b_ix`<}]X-%C6ISHsBkCj]G,' );
define( 'NONCE_SALT',       'CE,4.ry[M0;[glrtq:pwZmXv5whEvzPiZPZ>!<1C#gFIZYmyIJtabuyYiYVx4h`[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
