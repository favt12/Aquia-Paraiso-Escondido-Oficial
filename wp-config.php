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
define( 'DB_NAME', 'td_onweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Alexis98502789' );

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
define( 'AUTH_KEY',         '`Mtuqx*Spc5s{RE1;y[R_>T|a`zK(/qTL!G`N %&sQ,ua(KJkpOZ<j3kr%-~wWhX' );
define( 'SECURE_AUTH_KEY',  '>_EPp|D`nA8m&!zT$x8RLX4e.j-]a^}/7}(R.r_U*)^>pcSYmD(/]9:jS~kagu]m' );
define( 'LOGGED_IN_KEY',    'uS<V6<290@,ES=?!L&Wt(iVa:tv<sQQ6edcz:a0?62):3$0p~km|]Y(~_u1ZXpO{' );
define( 'NONCE_KEY',        'TIb$]ajbBmQDj-#*f:R>_PH^+f.0}f:rTa=Iz!IU%vV?f^qhv,IZ8HO[|G&TG(9K' );
define( 'AUTH_SALT',        'a>Friy6B{42rrW_<du<E,? |A[OIYX@^4WSjxT_>&ve^iW5hdLQ/,hxJX)hkb}Nd' );
define( 'SECURE_AUTH_SALT', '<S?@`7.pA)0,M9h5(Q!>k)riG,cN4=#%D;TJPFv-_~2km&)KydI#IIa,XqkZq<HJ' );
define( 'LOGGED_IN_SALT',   '5-tphP_-%N:{ eG-C)T6D<=@D62/[YcB+O}~nnpxzA/j/`!p#g9d]]GD&94PI/My' );
define( 'NONCE_SALT',       '8&v-LqIS4D@?!%>t(k4Yu0y~go?eS`d*B76rNTuQTT<.m]uTS=f4-|?![Ep^1BhO' );

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
