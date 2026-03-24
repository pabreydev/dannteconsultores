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
define( 'DB_NAME', 'dannteconsultoresDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'rootdev' );

/** Database hostname */
define( 'DB_HOST', '25.13.97.245' );

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
define( 'AUTH_KEY',         '1Yr36d)]3#o&m5Bk)vJSaTGrn1kJ*fiXbjg#S@0q;3!2^(Y.(~G6}xwmEduOfc4L' );
define( 'SECURE_AUTH_KEY',  'm|4#};m/%C$evhrfN 8Sz4:[1Bg/VgQ.AP9j?F.+Y56AVu0RZX;)g.!IQkA*vn!8' );
define( 'LOGGED_IN_KEY',    'C6x5[>XJ+%-[YUS}/KV?r/8rj;pi*lA5zW4bGT%yYn=L;Eh2G^c4)Gt&ZVqce(=_' );
define( 'NONCE_KEY',        '(xCZcv$Ww+H_J$%uELDTH^d`qj8,a4){[<I,n&@z;51FAV~8C/?X,wo %+zbCF:8' );
define( 'AUTH_SALT',        'E+_|]M( !<6.9-X{t3-u<Sfniw=q+92P^U Y4?v>Rt9(F,nHpteOd=flz$V:P/`s' );
define( 'SECURE_AUTH_SALT', '@sjSB Oh-`Xyg`[psns3q/5(w_oRkGZJhi8L#{yASQ|3!wzG}Iu31g5%k30tq6<J' );
define( 'LOGGED_IN_SALT',   '$T=GW%6}<PFy 5;(!mCE!iQbv}VLa<Z|08Q AuLDDldi{`sIhs@!yeEZw$e.ax&~' );
define( 'NONCE_SALT',       ':b&/03FVv:EF:wI_#E3|5}vMD%gYOtB^TiF0d2BL/_<R3pu eoVNO4aWm=pVXBzf' );

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
$table_prefix = 'wp_tb_';

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
