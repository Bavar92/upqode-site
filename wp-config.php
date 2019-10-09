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
define( 'DB_NAME', 'upqode' );

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
define( 'AUTH_KEY',         'Gy]ci,@yEFur~D0{RTKRsz6:#w@vCEYydQBaKmo)-|w>M*.Yu ED!i>20/dU9_T/' );
define( 'SECURE_AUTH_KEY',  'sE`&mWb^+!!jeCo|rv{h1x|J=o[=O}-Fry3,/;c:+GG>$F .D=GOuH6^0;Jxjg|a' );
define( 'LOGGED_IN_KEY',    'My(D!/5RxA)5mY;`xj4u3#mgJ#]p>ObK7<&Pn$l.(zh,,fvexNv.3$ z_ApDR5ZW' );
define( 'NONCE_KEY',        '#7}.Qt73g0FlXr~j.oZOMBF?$$.kcCH?Ez*xP)Q2^q[5ukV2dop-#h(vFm/WNpnb' );
define( 'AUTH_SALT',        'sj4+MZ}@E+QJ?>jEgZ!@dZsw}h`O#WlZZF[bjVpXXsjW7Zj*E<.$oSB_/d,ns>-d' );
define( 'SECURE_AUTH_SALT', 'p%nHj!-/S7Zo{K<M2//aZ1apE3~@=n]|#6#o]<z/iET&poWS(l9}E,HC,y=qiA40' );
define( 'LOGGED_IN_SALT',   '$|{4z-wieDGSIXS)}qfNO54$uJnH[w#V>:mvf^Cdz$agfV}TY]H(;eZ^lxzg{YI>' );
define( 'NONCE_SALT',       'f[XjQr#,6F~4!eETzw;iXa0oQ~pd8H][ vYD*)T(<nm)BD.>kJ~v;5[FZPe+au`0' );

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
