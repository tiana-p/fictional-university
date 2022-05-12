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
define( 'DB_NAME', 'fictionaluniversity_db' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         '^UJ2t`rp5H=GQuLyg;$C^ym~Kw;Y<45,glxS{.y4nj5bQz0znv{|}_7ww)?xr0>L' );
define( 'SECURE_AUTH_KEY',  'hA}$xTo>)0%d_.~$;4QZEIkgFy~@C2xxR<2tkC(p>|_b`ulDU%n)&4_s:Y6<dwV.' );
define( 'LOGGED_IN_KEY',    'g|OT#o_)%a;HPh0!jJo3]|JrWfQCo%4@CFl4F0cOa+N^gR~(q:**_/Vi~=izcx{B' );
define( 'NONCE_KEY',        '*dwEI&r5_?7VLsR9K-bAoHMI53rLIRBv)ni<Xx2w;2-dRTqAatkRW>uOwH1%1`=G' );
define( 'AUTH_SALT',        'iaccudeYhRc}s)@Pj<)!.]P5-/+=Fj7f?T:ZhO,`Lg2q9ob`/]KIfe0Reh^..;H=' );
define( 'SECURE_AUTH_SALT', '}tsp@`$He!ib6]{F2v$}~E!OLfmm`rd!3%>iJWa(/<k`[##:?cb]eN.vb(Y_s{/V' );
define( 'LOGGED_IN_SALT',   ',3g,~x=!$J~NNlA Fk9iPB1U~MWfTSEyabLjGNvA#lPVWx^kJRiS&4p8R,NZOj@A' );
define( 'NONCE_SALT',       'y<5CZZ.V<R(:Mwt!`w=R:~;rrE#BidN<= |/ea4vuFnY}@Tq_|,9uK`^_)Q<;d$q' );

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
