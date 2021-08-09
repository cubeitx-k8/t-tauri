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
define( 'DB_NAME', 'tt-main' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JPe4<}y;{*vGj5d`](nxPdN@twc@NvdO:n&etXaRD(AVYFlGNW0%J`{%EQO,+w@`' );
define( 'SECURE_AUTH_KEY',  '5pNb= q0Sg>./0J@OB`7Ew,(KbuoQ3H7U,7uU8{rW8@6 )avQUsA2y |cN#-!_z@' );
define( 'LOGGED_IN_KEY',    '9XLxVqP@NCCcDq@agS4yM[L-3Z0mu]DZ%XDBwhX>xT0y.a#fulYog)m(ke?ny:yd' );
define( 'NONCE_KEY',        '?CJ2Sd&aTGo<JBxe@JL@xuXiu!3,o-<eiN@Ye54C)V0M~xHi&TOE=;G<qNzi}pd1' );
define( 'AUTH_SALT',        'KA|z!%]^u@9CR4y?m+_]LBwQ48[m%9w*>jI2!i/=}9U89_e34v$[k4gCu7[QB$HF' );
define( 'SECURE_AUTH_SALT', 'S6Fh1h^;%i`i9p-jFi%Z3A0o0:<#qe@cIwa2`A>c=Vv)z0@-t~IF!~,DU1^YNY+7' );
define( 'LOGGED_IN_SALT',   '@&Z6~)tCwgs~UmL/63o}bePCp;t?R{;E/q/Z3u :N2@Sh_-3)wmKuWv0cvC/Lj|a' );
define( 'NONCE_SALT',       'p;2#dr3zEqSC0)IL5+i|ifur:oF>~{Ds2zw9XADqF>173|h/m;^goH;B.m>XowtN' );

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
