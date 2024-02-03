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
define( 'DB_NAME', 'wordpress-demo' );

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
define( 'AUTH_KEY',         '-*T,35:|YPA.8B<SPOV)XNUBJ!C20M,7pUE3ia`{^@<QCjH~j pP~j[K7DUxX_5 ' );
define( 'SECURE_AUTH_KEY',  '}#vyA<H%oL4./h3}+qrV#i&B]ce>f9=:G/ NJf*WExX+D y0q~`(`$h6BpXz{)wv' );
define( 'LOGGED_IN_KEY',    'hk! CobIabQsxtYrqa[hr{?~uetlX_&,z&H`PL}/n?]jU>hP[OW*+Mwa;:m:y!w.' );
define( 'NONCE_KEY',        '~B.gQs@?%w%gdp*g_OB+~zt$1#Y(FBpTp}):gg|9Z0^uYB>^nm;aLVI3fZ}&ifxE' );
define( 'AUTH_SALT',        'f4|w,qQSls1Hmf^}nE3L+DePAG%Wx|v>`gU+14d>CoR=pcGp(#wuX]BG&AYvNSvF' );
define( 'SECURE_AUTH_SALT', '|i+@LB0d^?|,=[Hi7MWfP9oh@HRpT[R Q.8kch;x=8wcnt=<U<p?-Xv8U-Vq[3&+' );
define( 'LOGGED_IN_SALT',   ',8u2m_6VfpP;pGd$lb8B:$BP{+Upz0aS=0_olETXHkWRQ^LXom1[zlXC%`($cAiN' );
define( 'NONCE_SALT',       '+bkc pKV|/Pm@2=c6@fqb<YLDU1,STBmHCHv9U,9z$nV(2`^P{j?eJ3]|:Y@(x*x' );

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
