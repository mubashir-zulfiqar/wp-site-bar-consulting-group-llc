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
define( 'DB_NAME', 'u855990186_4thSiteSaad' );

/** Database username */
define( 'DB_USER', 'u855990186_4thSiteSaad' );

/** Database password */
define( 'DB_PASSWORD', 'SaadPass@11' );

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
define( 'AUTH_KEY',         '0C${k8LJvqiC8J&iB(}:s,T;>34Y9-{OLF4o[uI=u}oJ49-e]~;ASaSrLYB:)X_^' );
define( 'SECURE_AUTH_KEY',  ')h[ju<mkZ*%C(|-}*vosW(h4(H<pO_SU}Pk^*sa1 Z[++i-KH*H[GgrS&zdn]GdI' );
define( 'LOGGED_IN_KEY',    '!1In9#!n6GRK$Ig2%cZ>/6>Z!|tDqrqHR.5=Kc(*2D(:f2^H`{]D_D:4C}g`!U*I' );
define( 'NONCE_KEY',        '/T:%}z&,Z=c2jT5S#]qwqS56<D@umrkqMA6Y$p <P.e&PNL$rXJ7|dpn] 0.O9]l' );
define( 'AUTH_SALT',        'DL:AZ?/vn5c5:<o5}|i8FWn#2Q}e@fAdjt4NuDcd?D{X(BT8qU,~[Sy9nb)Sxv_T' );
define( 'SECURE_AUTH_SALT', 'LAvaXb3jCM6c%I^=EP~<H;J1Xrs<?Kz|W6/FCbBG tGK8hECf/okRb>TB,| @o]G' );
define( 'LOGGED_IN_SALT',   '2rJIck{iJ-!}yI.$8wWQnhT>=l<ES=:/8xBniz{VAz#u3otM(fVB.,;k?o=p]AJ:' );
define( 'NONCE_SALT',       '],Fz^F9-_SLkp4#@Tx0D[Z]Be!k15zK@&wDgPp/5,edG_y<1. .+i/,V0QP&GkQ/' );

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
