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
define( 'DB_USER', 'Flopi' );

/** Database password */
define( 'DB_PASSWORD', 'Flopinou5250....' );

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
define( 'AUTH_KEY',         'OUAN{eb(U<OlweE.F0H|8,2Ke4}5)-+zk$<Zy`OekT<nbS/$FV|lJ<5w?VL{c%V,' );
define( 'SECURE_AUTH_KEY',  'nj%m)v^Gb@e4$MK3N-t.?^4]9_ByHuN_+EzW|qGm{2e#-=3+T=iA-7@Qs,lp#`6R' );
define( 'LOGGED_IN_KEY',    ',zGL:F/g/*y#83AIV=rmang86.A4ph1w*&]Q%GS%18eWFvHO3IDlZy6a2h_l30,T' );
define( 'NONCE_KEY',        'O!H`ZRW~Adu(v<Fe1O #z?Q75jiPssqBF+eeyWN}sr7@Q%}~%:r2Xj9;U:~PZ#)9' );
define( 'AUTH_SALT',        '2IE4J5qG1_vKgPG1/b(wh490?YW>e|`KanQ4%Hy1548Rq#?Yi:p4)*tQMa6]~eGh' );
define( 'SECURE_AUTH_SALT', 'r@8TtBZ=t$ph n59&.Odx!4m$t(dd47dm`-i?hXx%j{;D6/WBCWNRVzfxV*E];}e' );
define( 'LOGGED_IN_SALT',   'KMxYi(dx@6])#GW-g70B$uN4a8X!D)fwx>_C;W}5DempeK}^-bg9|->N45Y$W<:z' );
define( 'NONCE_SALT',       '+QX(z&O@5*%yplvXH.stA3VjY[DH(HQ{b(!R.S7kKRoN^U}mg9MN!Zol[@2;JG*$' );

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
define( 'UPLOADS', 'wp-content/uploads' );
define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
