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
define( 'DB_NAME', 'gp_solutions' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>:w:fDpvK/UzybeT.KFi_W#b$>x4EaG4kV;6Y5Ka?D`O/n[C=[,Vl_I9)?iSBtD3' );
define( 'SECURE_AUTH_KEY',  'ZaS6kxEt%pW5+g@pS_W&~!X>h.yc2dgvV.]@X<n<?!&x%P{H#D^C4JuVyd_HBKxV' );
define( 'LOGGED_IN_KEY',    '*O-j$$.<(Dxq9LT<ee }[6<vjjHi!|5oH%T!7}q15zQ#O|^Az;,wp4}{ML(>Xh^<' );
define( 'NONCE_KEY',        'TqXzyUWp&NSB36#6 /{mMKq,2inToXE/PZx|PqkC.[{D(>-I#ut|57lm4(<9aGi!' );
define( 'AUTH_SALT',        'rLq6h}VA]ZX9Q+4w-j512-V_~BFtu*q`+E,uJZ1^6wJqjd+P6kmYS 4Gxrg[q-<y' );
define( 'SECURE_AUTH_SALT', '}ox-j}_+aVYd!N5G|v|?t>^V3#tbfg4P8YqtK8_W>{$@7?KTbA$tKDa#vgm59g5T' );
define( 'LOGGED_IN_SALT',   'Aygeq1{zpLUgPsu@c|;gOE7/>.q=gOF/@udR`GX@&=G=m5wugM/O*k%d=F|[}9M(' );
define( 'NONCE_SALT',       'FZ1DQ=!d+tYop7uL1O/@qy-km=JTNL}S-%u4l/SmMpCd)<e6j_zk;Uvu}BXu}]NY' );

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
