<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'malaga_al_dia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<:h@Ny%du?*#i?~<-J&u>%Gz!<k71kp7UzFZ_``%kagP>vp>jn/<j#0PTaoyxZk*' );
define( 'SECURE_AUTH_KEY',  '>u8#/K0Q5R,koe=dvJ!Y_$Z=<tOEhVm:I,A3;U<fAO[C}e 53o:{IBSj+X_~3/m7' );
define( 'LOGGED_IN_KEY',    'QeP=g+q?~,p:tsyy:nrEIN|`Uq1a ZT,6hQMhR>%bWEEQp=RT1LIdUS|I6u J?e:' );
define( 'NONCE_KEY',        '[;DTt6t`QcYt7pl+$z%jCb]p;g#fx[M9MH(UEPr-kt@v+I(W&k,kyB4Rw(%?J03s' );
define( 'AUTH_SALT',        '0ba>67d%{`)c-c9[e$V [=Q;$l^=Q*`$$.o#W^h!E*rX&|Va^Mh^~,SNZt;u(2m ' );
define( 'SECURE_AUTH_SALT', '|N:DwC H!Q87x?G*.:ze8WHfA<T`mm*6wt(}]DFDD3,]D-0KvhtPND(s/]BXHQrw' );
define( 'LOGGED_IN_SALT',   'PHlH5lq6yx9DE?&*/!a<==@a+w4Wqb;sf1<aXl!(kx mf`1;}~t({w?J#Xc;:Jd0' );
define( 'NONCE_SALT',       '>ND/2x-^kh2vj?WD2[nJf8CI:*1QP:insg}xE{<1_fWoFvH;W}oNPF4LHo;Pp47q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
