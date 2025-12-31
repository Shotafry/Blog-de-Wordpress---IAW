<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_013097' );

/** Database username */
define( 'DB_USER', 'bryan_wp' );

/** Database password */
define( 'DB_PASSWORD', 'Pass_Wordpress_123!' );

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
define( 'AUTH_KEY',         'k0?h`gYOx[Gzfu@IlA+|J%&,i,Y_v Ny15&p4PlGAogv_gj[^Y*jP](L9z~6=_zO' );
define( 'SECURE_AUTH_KEY',  '51WV]hz|Z]VO)s.boS0WBCki`DuJ$ID}b[PA?XCNN(C%DFtYf~y/a7$NLI^lzW<#' );
define( 'LOGGED_IN_KEY',    '?_M}v,Sq:srX~:WCYR&sOBRdQ.YQF/3nRLyF,Kk/q>&PP!XUp%~wIuzC!z#)<AF5' );
define( 'NONCE_KEY',        '62IpbNjwVLoRlr>BN_v.G)]%|RbhY+J:SbB&PhDn=7WsA*;zyTqu[}6q96a0w%*$' );
define( 'AUTH_SALT',        '7V[LV,7B4tYjsXA 6>jXO: 8-Wx>ji^F_O^`cNI9*Z9?7g}-W5T!8KW`Kn$4+&WB' );
define( 'SECURE_AUTH_SALT', 'N+0NbV5Bv*fWbWLYvJ_`OV:X9jXuWIxxKjm?g=U@pT`eJ<OAA;FlWl%{DCWYJ![7' );
define( 'LOGGED_IN_SALT',   '2&r2Zq*->sQT5+*^0wX+@nxc6p+Z18Lv?8~2gjvx/|$SiG0VbNVua7q8t] hN<>.' );
define( 'NONCE_SALT',       '62omT0PfKrMX)ogwrbxIGh{J@JKia9`bw}K0y5$?pVDtJ8=(FM5U{q .zQsQN6TI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
