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
define( 'DB_NAME', 'e_tag' );

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
define( 'AUTH_KEY',         '!E 4(iw.!Dsk?/ikpTH]ZxnzLj/iZ8t.f&3l_(l}g0Xt{zZrW#i9[I?q6@i>pOWb' );
define( 'SECURE_AUTH_KEY',  '5YzVnzN$h4iRhCQ!j!=>4/hP4Rv,fIG4+DY@*=:idfvMV^(yJ)Fs2tUbp-q+3c!+' );
define( 'LOGGED_IN_KEY',    '?_+vIO*|qgX3,az{E6ZG`)unQjeQJ~(#h,AOq+!hJQvI3~,jf]]A# +>?V/fZcYD' );
define( 'NONCE_KEY',        'a5m%#acP[i1b(Czm&mQ^} omJ#^G#nYIT&,y{p1_EY$|cvuaEO!;DztY7diY?f*k' );
define( 'AUTH_SALT',        '/$Gyw3,62+zRL pKbz__dt+f/zZ96P6DF7Q1:#~t;{-.Ptt9mVp9u6i}VSUg6oZ`' );
define( 'SECURE_AUTH_SALT', 'blx~oWm&VRz*&*s-{Kl @d @1$[ y`HVlj|; []}G{ !GyJW;N<$EITppPOf7JT;' );
define( 'LOGGED_IN_SALT',   'pg6Bdp%DjjGMt;tx0yt7Vsz$lRH_$gp?hc ;r*(utXR,-?vVg6n<jA;.h5L}e&GB' );
define( 'NONCE_SALT',       'RN10je2EFoDe.rp3zH+_U8keb<qM^d<*>SOIVa.gy4[82?Syh~TiS>rbsQ$tEV[}' );

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
