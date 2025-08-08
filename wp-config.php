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
define( 'DB_NAME', 'ims_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Swain@1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'O=Y>);;aiWxa@l/<hq!8<O`k8Ge}=WOlClh=7IuryV)1t(-4Coo)q>ZONu1mt9`.' );
define( 'SECURE_AUTH_KEY',   ']3?muv^A5IPVa8BLH!|,8$~L/[CDC1M%^#y}U*k~sN1rfv:+$L@k`},)*3kR-} ,' );
define( 'LOGGED_IN_KEY',     '&>T%p=Kr$sc:C/F}((3&Kg|3Y*UiY~`)!7}XRp;J+O}`ILxW;;Gcp18<D5#(CgK9' );
define( 'NONCE_KEY',         'MGi%,P!bJGZ(/njzEzo8sfb5RrGVuL/;|Zm!i4<WVXyGL`-5J^]E`?!~ju2D(85O' );
define( 'AUTH_SALT',         '/ ]PfUP&j>8=):E_u|<M#h%5gO-Fls2,~6HQE7!u!_Qa9sZ]yl,awl^&S+FL*9fJ' );
define( 'SECURE_AUTH_SALT',  'x{l+=r~2>H%a2afu,URTFQ1[VEh6s*,Cqbp%08N#1{2C3S/5<%<>FxGWv@BuzXRU' );
define( 'LOGGED_IN_SALT',    'E,#MSBG_k+v[aDx6n*xBT(51`/;ex^]4g9V_o#4r99_(T,w1$py]-HN*fSl(,o>A' );
define( 'NONCE_SALT',        'P:nkD[WXi<Dlh}o^L`rxB3[>%:.tRFJUYDV>[*sy)sg9Hd:cX/OR.|;JwR,Bc,7i' );
define( 'WP_CACHE_KEY_SALT', 'mV+QSH(2r8hSb]E%[&6?R%6VfG^ev9U( TpPhp?[n@zJ,`Fl@Wl| Nx51.}p<p<(' );


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
