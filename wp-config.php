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
define( 'DB_NAME', 'wordpress_dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'o5%%o_,lKA{wB82,96px:/n&RpAnT^AU*)J}s#FB8x;+2w!bRtU~3%/$(_kr&RR]' );
define( 'SECURE_AUTH_KEY',  ':6I/u,O=y mOlJX6Pi<~?5k@N^BubZ@B2uGS+UtUmO_B`VX8;;wl_peLq=hIVmKq' );
define( 'LOGGED_IN_KEY',    'gOBe=!N!uq5T.[,=+G8%8%rp1)O@q6qS5&`uO^ew]8[y}:MB^4lPo.V!+*<v-&.#' );
define( 'NONCE_KEY',        'oMT/Nnl^GWj+}Un7XCwFFMePEK@Zc4;wT$~XaXDVS/i|bH|uL9HLQDCU5Bsbd^[@' );
define( 'AUTH_SALT',        'kVoh>TU,mSgV9B8J*Xv-a*(J?)Qu+zfBgPg7yn8xXF=+FP*);c72~HTRh%VmVS<I' );
define( 'SECURE_AUTH_SALT', '<Jlh`Ox(KNv_f[rXsk`G9roF(UlLgWq<XeB=(nZOJgn)6d#ZI,F3rBt +5+bgQ!,' );
define( 'LOGGED_IN_SALT',   'Z?J1b!`l(1TcL[!WF_)P2Y$iXAoG7ZE22r.#X$MV<w&;d-!C3-?zRwo5Ne~7@^ic' );
define( 'NONCE_SALT',       'V+zr!o2&<}gIk1<mkM7,g/Tr2=,Xa3oCD5>(C=Cp|@VTVC~!YZdN[YZp)[wE!t!.' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
