<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webprincipal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*>H,cnB:>_nA#r:|/a1@e9Es;O<cen,:b|T.}lf.oTL!vU~@,efQ]m;Im[dGJD[v' );
define( 'SECURE_AUTH_KEY',  '1{Yu|2 @.(+6~H,(arZu<Sap>jC=@%bNLTL&kW!{gV@~2.JzCieoMB`i/p0?decH' );
define( 'LOGGED_IN_KEY',    'sh1~mE%M5$qNXhe&sEJR/`A2`OP> s%~-z;uZY15fM9JI,+K.K%^ z4_[Ukh^ny:' );
define( 'NONCE_KEY',        '2[M5=/bke9/j;8TWwN@H#_nt.gPAi>jb$IcVLjh`oL;a!7u9k,wmaQ<&aLH+kZSO' );
define( 'AUTH_SALT',        'Brvi&[[e/Oa#@0&0Bx&2#mq%<vw=du>ifC.oEd)&@{qgm:XTk-RXoe7RM#N$r.3n' );
define( 'SECURE_AUTH_SALT', 'aWm/x:i`>LMN=Q~(JG^J]3!M).@zjWeoW}sw81U=/-8KgI{E?Q^s% :OQ44yFwcq' );
define( 'LOGGED_IN_SALT',   'F|jG.8>gw(HXh;j!$Y!~NqMloIlZ]KyJ~=1[CAv%i.0-gd+J_.T,TQ{?ZTKEY+<0' );
define( 'NONCE_SALT',       '/8*H7q[#m1qX6 xe!}$:.*Nnj[R`D%I..e@)=84d >l%w9KM3;918:~mWd.]ZsgO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
