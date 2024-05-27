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
define( 'AUTH_KEY',          '4<1&%J+$tAz>-MI,[UH_F~tn0:p|ex*`vk}&cYO?TdyS8Qi=tIo/idM2c;zj<w38' );
define( 'SECURE_AUTH_KEY',   '9E3i2M7<#66ht2V8}-~Dkbj/&a@L$@[{.h?iVB<JXRs,3xp0<qhX oPJ|x[d[+2w' );
define( 'LOGGED_IN_KEY',     '~vusa-+kK.py8/NG$4sIEz epS<%_g=2&A&V~|VA!dbZ%XgB|e5CR<b}!BYl7!Yu' );
define( 'NONCE_KEY',         't3*gz_~0?LBJ2x7zpt7Ft[U#!=t?U*mB]YMxu $9ymGCeAIv_dWN[P:n!Zce(,oQ' );
define( 'AUTH_SALT',         '%nF`w?/*M_j_PLo[&65I!03k*V;zP?#On3GVgp}!M+%Eq}soX$?+YS_A732P[gC>' );
define( 'SECURE_AUTH_SALT',  'Azv,TU8r$]pM-Q>HPyAw)=A(wrMamSfvPp%9NC[@,AC:c:]zSI`(E&cd.1]!lCC-' );
define( 'LOGGED_IN_SALT',    '-J ~fD138$+058$;QuGqTEPe)_=#Z<k?OpYy47JQKtt?LeG.2=q$Tek|Ugv!b*FP' );
define( 'NONCE_SALT',        '7y5JU=$8Z8mlEafaPEI)+6ql<K_Tjr<k_DELvRqfDo}*X^kn!>`DJ?YyUofK-Uuy' );
define( 'WP_CACHE_KEY_SALT', 'euEO;8#ADy^< =T~/z~i9`JcpyJfv&@OKT%Cht~w,Vq47L-(~eADi1OG7ns}rAx]' );


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
