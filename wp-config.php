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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worthynetmob_db' );

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
define( 'AUTH_KEY',         ':Z+@XEwi[f5saF(I5YE,sL,=LvfHqSAUur}O6m<a8.y/yo(K/z*GIt2:GGHQZ_(%' );
define( 'SECURE_AUTH_KEY',  '*;)%Z4@&_llM-d(RbTt]Q?[3g >~.gak/b$Ej<K|h8R]m7RbeuJSb/h_S^rO!+N[' );
define( 'LOGGED_IN_KEY',    'yI});1PU[D{z&P.pLSxjK >`E_;_ jb*!vIwx@}5c61]|)%Q-=|61t&Q=&<;.[&m' );
define( 'NONCE_KEY',        '2U;uSkyl{UR)G?J3 zY)2{cF89^!c O8AF{1/trE_iSQ(G4Rf5=tLr<z$G.t:xoR' );
define( 'AUTH_SALT',        '&Am8ubr!nPbHnlV3F_Z(64yhi+a|KJ6l!MMb?OBzt|vSDC_Yf-WD+iJHIE3Bz<E&' );
define( 'SECURE_AUTH_SALT', '&~pEZ({NNXY@bG:bviHLE$|SY6}<KFf!bX#LJ~Q]F3K/d_FnDJrX`%t!vvK,!9Vs' );
define( 'LOGGED_IN_SALT',   'O(:M;O8?aw|Ni9|lnm&:m8ULS0GaS+pY>I~;Q&tg:ad]@eB*@Y<Oqd4%.dJ?X:O.' );
define( 'NONCE_SALT',       '=WCV[|YU;f`C3l.Aok`A!S+xAKP;ah1.FH0BB<EckweuRD[z+&p_UZnIH?(Wo6:P' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
