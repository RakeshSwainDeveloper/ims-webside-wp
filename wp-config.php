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
define( 'AUTH_KEY',          '?<}c/B4IdW-|gyT/]r3wVL9wszbD(YiaPECnG*F!Lc4!mF;JB5r^SX(YyQN,m|3|' );
define( 'SECURE_AUTH_KEY',   '=S;qiJ(A5mBL^Y6q7uY$C+]tcSvq&.9,8{_cNZGi<M`FZMyQ-$IFWk7kOMX{K(nt' );
define( 'LOGGED_IN_KEY',     'Sj:h8#/j-i|>,_r>q3Rf)!D(bl=}c+pOEG^rOP{$c<ij?httQ $CU_^8TKS#1jqF' );
define( 'NONCE_KEY',         '/2CXa.rn|p<- p)zkH/o_9)3C5p#eGi!=<u _>jvyb3jLyZs43@mzL!SHf$] A+d' );
define( 'AUTH_SALT',         '~qg?}y!hUmF[c1b=1<iQ5$.pm-8Wmx;0,d|jvt.L4fNdm8C/3s)Q&m0&]>@Y/UE=' );
define( 'SECURE_AUTH_SALT',  '4=$j=M%Z?{ET70s]~tcA<OYxY8D-iJih+gksYaZNGGUu7J,&Bp1[P4 &,`1+-MR2' );
define( 'LOGGED_IN_SALT',    '@7pRiN0dHaK6J-X)J,AfpVXbl@XN0LqHV3[=y,4@p<EMx`$S0Mw;r_3o5<ICpfCt' );
define( 'NONCE_SALT',        'si{oCW.}y75(cxS>8LCT/KB;8aHIhq[V=YM=|E0IeEmRVRRp9X-Yg:e[.K4<n;b6' );
define( 'WP_CACHE_KEY_SALT', 'f,gj9jK>QY>ed0PK2Ya~KpMh<B=IiLX:yKCk@R.@rG%Iz4;G#6BEP#i_ooGNF9[D' );


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
