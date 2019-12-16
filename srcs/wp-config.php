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
define( 'DB_NAME', 'jonasdb' );

/** MySQL database username */
define( 'DB_USER', 'jonas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pmapass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change dthese at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$*/X7cN+Zl`N*C(^Nu]TT80]>~hF#B5a:GGZ(<z+.Z-}mcm+A-^Q-yU}H|T.&n1z');
define('SECURE_AUTH_KEY',  'gvo;#^Z.n87!fbcj?tu}-RFnJb_<)yH<N`)lkPj>#(vw>m}1DUu*h6NU&PB#qQ0^');
define('LOGGED_IN_KEY',    '2#hy;@+Jh#}]grm,qDbC/U|<z*f>W+)5^hWqAnkLC2xUL$RX9IXkA%w&OZ7Q#EZ%');
define('NONCE_KEY',        'L^x926$6O;xk0Q-c<=_!i^!(sT|.`ZQ,=6^aY?i<>6F0X8{5~]s7|Mo5bXaiPFg4');
define('AUTH_SALT',        'tWB-]*s+c85eJ05TLu^G/%M-^G*H+O7!MZr{^f5H[ci2KWMB0yO6r</j~mUhLA<k');
define('SECURE_AUTH_SALT', '+}&xR+|[Q!&;]!y/|$q6@:m|@beA^_N|#[Y:Fr8m_[*)wnTz4MwoU:gGc?n,j6ww');
define('LOGGED_IN_SALT',   't4|tII ag)H8e1v^Sl:hjz?G]P8GJX(Tg3:>iTWB>oHq/5p_`%;yGqfD(HSZNbwU');
define('NONCE_SALT',       '0H4+moIVe<uIeN3!-hv2GJ[L-wG}2C >fMSnZGi,rygWI;/I:5+#s-|m,*>lgXVl');

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );