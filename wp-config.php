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
define( 'DB_NAME', 'brief8_wp' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

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
define( 'AUTH_KEY',         'E6Zi0<{RecBQvHJk!+*x;![sg^nN]4hGwF;&}N{+~p7s_RDs00jOR`dZ7Z*ppB0k' );
define( 'SECURE_AUTH_KEY',  'M]`:$S|y/y62(]bUpM`u(fu7@Wi]$.h9lC2n(wjaO|j^HfS*h&%>TGdeB)Y78*=3' );
define( 'LOGGED_IN_KEY',    'TW8uY,)A KyJ?.f(?8A S4]a~xoxX|]11aWO*81y]IrHMT$F<)-a#V@~[J4MGh_+' );
define( 'NONCE_KEY',        '<:23*LZE1FD+A_axp~4plq/(.F;[gGbfI}:4;0Zy(XA$/s:V)/{tqgj}]k/To7*o' );
define( 'AUTH_SALT',        'k5.!`.6sGA5rTaid@[6QUsGowWx55Gct*3Jnt~h>icFBu]3cxqggxT.3~ROIuw)i' );
define( 'SECURE_AUTH_SALT', '`DD9%syb2%53<a7L|&B5gXDh;H+D|X3#)zKr*]*D6-:GLz:<zTs<kC3Jd|Yy0{Q<' );
define( 'LOGGED_IN_SALT',   'UtYN%QpbKF)KGZqOl&;K7.<C`;yJ{Nt%_rOup9sWz@NAJp!2lmzdpwwHL-&jI^q+' );
define( 'NONCE_SALT',       'f4Jm=~lMQvSJs8^g6Y.hSDMD9Y(G@6~yf+kd3AZ9m&f7]u8.W18F +rkeqK_%0uT' );

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
