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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'W9`iBhYIF=nO5nqR$CiKRxM =O(K_igY)uR:~~5s|kta/F8ViafbM!#: wL @w$B' );
define( 'SECURE_AUTH_KEY',  '(.-}m~-yT4m#}eVv*p_8$t:0JRkCL1khW{bu@9]-ISm9N[H+~QFe1FbY+8X~}[h%' );
define( 'LOGGED_IN_KEY',    'ht&Gt!bp<ySMmBu.HWo?3Lg[;oZJPVIhwDwpEUD|hfiDa;3<(Ja@SvQfQ!:v~!*H' );
define( 'NONCE_KEY',        'e_gaD|ZBL17CSAO9QXOyaY&M)eWsO7pT$LHgy>7I`r)n#7SjB)9ol;C<697V.%#e' );
define( 'AUTH_SALT',        'EdQ@[NJqo}k0oH HZn-FWj3((j!B?xipi4R-V@+jbx|DH+KF3(rhmy/{JW4/_W~>' );
define( 'SECURE_AUTH_SALT', 'QdIiQy4?1]0^;/Mx;;fJtm92.M.1u{.YlKMgC39@^4E/5iZU_^P/3i+GQ8LN}]%D' );
define( 'LOGGED_IN_SALT',   'C_mtMGMpj: jvq!u-~K,pD?SEVb78Hf_]g~vxRX=?}37,9V4:~7+aw1hA^(DF<X5' );
define( 'NONCE_SALT',       'eY:z+y2PueUqVp_iN|9UwW8]9)>AX^(TzxAR#}^,30#cwZPiTUsOzi7W6>Jrw5BE' );

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
