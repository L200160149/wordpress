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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'y`s0OXjL~9PW{4bz$<9`L8=ce)zfl%hK~gWHHe,v@i$/s57Q@ssZmswyzOv9Ad>/' );
define( 'SECURE_AUTH_KEY',  'qDc@xs}{|1dzvMe,KaPj2-EPLI#MyqX5Gu|6~A];;:-C}2PEK#a>khnuC3cs/@{<' );
define( 'LOGGED_IN_KEY',    '_CU;/D?_[QAWNm`ePvSC5!0|27XNn..Kd1K3R]u3DF,SDR$n-60d_`n<=]HDC?Nr' );
define( 'NONCE_KEY',        'Bv$Ag<<%%f@2) 1{sY(sv=l+ @o!p(d9_1=F1!m{X,ASO~6Qo/Ul `DptdI)/t=]' );
define( 'AUTH_SALT',        '<u.|i}m,7r7U k|J/`A^?d[H,kCNqz>NX?e1r(T[<|u}uUguddri TgW=95$,B<<' );
define( 'SECURE_AUTH_SALT', '{cL.ZN[}Z80z1il*5,cAR2KL]3-k_86;((N%`lJ31%91s*A+dx cOX*H&!3qne0@' );
define( 'LOGGED_IN_SALT',   '~,f#t<#u2ti=`MusY$xQ4TUIjBz>W;WFHkO`YxT,H<-O|eCf.~Pvq:&a>T 6X3C+' );
define( 'NONCE_SALT',       'f.PYqs,iZ4$uKA&?s.LL:*=)Oc`I=K6*n3SQW^RB]7mb5T660{pnsxA.YXR3u?W|' );

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
