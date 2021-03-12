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
define( 'DB_NAME', 'abegin' );

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
define( 'AUTH_KEY',         'a#~i,ppur8_)=G1cc<y_NQlIfuj+jX&qiZL*pfa~CHjNP[[T>wdRQX~=th+)dLnk' );
define( 'SECURE_AUTH_KEY',  'u$?fiff|8sZU ;^Ut&P%7Y6K |f.eEggZHB%QVuJJq;hLY/UlP2#<R`_+[@!h/_-' );
define( 'LOGGED_IN_KEY',    '[lh44UriqbK0i3zV:G^F,CG{JcdV>m7-lOUup*P]q{:Zmx#D=*0K__Zy4S5N]Y*x' );
define( 'NONCE_KEY',        'dxieeA7ThxOi$,T+NK8@s6e_?dU$8F9kdk/0.JN(Eb.hl}};JR;f@Z)g$_%BQZBo' );
define( 'AUTH_SALT',        '_^j<3eZxyK%c-gS>pZC6,rj2&[E5n>-p uE]{g)2.vVPEzSh?QqF )&&_&~g2&^m' );
define( 'SECURE_AUTH_SALT', 'X_>_@.6>GZ[G2skO.G<re;gu1g3wNha<Vu%3-Z?kh^ONX4gQ6*xr!IQdGI@YxMj{' );
define( 'LOGGED_IN_SALT',   'f#Zpa.!V+]e+4GXp&!PqI,`Dv2}HxxkAhv`f{<(jVOzq$([keL<F=I;0&a4k!=up' );
define( 'NONCE_SALT',       '+vi7qlTy.Sh}qao6xNh^9f+G{6kui.d2Zp?zWr?pv$Lrd7|M_-h$y`EiE%dCD%v+' );

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
