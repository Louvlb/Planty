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
define( 'DB_NAME', 'planity' );

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
define( 'AUTH_KEY',         'lPN8#zX)6h#h<tV%$It#i[w}:ZX8%Z4 ZQ|{8aYIgzCf_[bkuR8]Uh@rQlxJC-pt' );
define( 'SECURE_AUTH_KEY',  'a#<T$[o+LeZKKZ(s H1mL[kD%85@,hzi*iKw>]TP@(qvp;;k1(Ks,0iP0WFRnuw?' );
define( 'LOGGED_IN_KEY',    'c0Q7sQu8-_cP)E3Y8-ObJf.s]sN~Fx@6vNU|UP%yywYT1pjSMMXlR85Fe $fffr9' );
define( 'NONCE_KEY',        '3G &l`#G}5e47@| MdaK!B!%txEn{==uYV6X>IZ#^ht*1Cs?PnJ{NY-?9kgV{)01' );
define( 'AUTH_SALT',        '7 si.4AU~PK)1[hfu[,8C3=}~I(Q3KifxBIm58*l_$=7rB{>_!@Q/hI&xW)+eB~-' );
define( 'SECURE_AUTH_SALT', '9OUI%w+W,F196A@MkYi$arY+F}> U(O0H|J_hA6Z<:iONG;..Dzt<LhAqRlD^/1x' );
define( 'LOGGED_IN_SALT',   'wYfXOx2@=2`SLmEH?wHP`[/TAL]s5vmP40W2Rd0BiO[ 3_tr?_e Wdm6H;K~G4V4' );
define( 'NONCE_SALT',       'Fd7%90>(VW!m<Mp?EUHS];h$<&MHr~7v2@I[;X:Q~pl`_N[?mf5j+jC1_$2oR-1H' );

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
