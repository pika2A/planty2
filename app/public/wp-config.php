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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'vFqm9zNXLUFu/etklcdrO7+C+f6xDxAns3uHQlasbUrWRITKFlFVAROvG0oRNvpwSCKT9ZeDnFLG9WL3T0oPig==');
define('SECURE_AUTH_KEY',  'ZONr6s23O+POT0XoDtzz+Wa7Sn/Xpi+t8ybKdW98oNn1T3PpbkOFODDEeQE6OEL0QJaEvy3Rc1VxInIY22Dl0w==');
define('LOGGED_IN_KEY',    'YAbH3gPPQIouthTrNDjr8ZIh7SfPJVfAiw6bjHnjjWLGK6NuKhCoJzPj3rD6U7BsUCAaAbM8ZeT0RPpnexKb7Q==');
define('NONCE_KEY',        '1La/QVl0W6NgsZ5JUAC4xrY0e+se37UvtkNoT9gbtiBgGzKESqUG3z3Q/n48/3fM4CTH8ilxqaOXh5P74Y8p4Q==');
define('AUTH_SALT',        'Zf4YVPSZsgreUEC2ynWrOKcoYemUgwwgayAU7jXb3Hi26Nju+f5m3/SL4JYvP2gTSzyrmhwuwR4ZhE5+N6o8gQ==');
define('SECURE_AUTH_SALT', 'JVPqtHF52YynbKQCTKvguBcz2qT6QhNQ5WsNYqD6zjlYyRQr6txGhBMjo31Sr46vuVlzbJToE2OeHhO7fYHDzw==');
define('LOGGED_IN_SALT',   'NBEQKdV6+45sv1ysXiZC26nkWDwjiealoG3hVKcmGmBYM7jVy6y55Tkhc9PPp65xvWKAA0cuMG7lLBXARSvciA==');
define('NONCE_SALT',       'MNdJTM0w0++WB80Bgp4D56aJZMhMCesT8g4LQ2Y/pZ0rA1Wlaw+sXFj30RGaMjQTNph2PzWBXbvOR/ttCYfnDA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
