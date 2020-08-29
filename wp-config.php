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
define( 'DB_NAME', 'obi_blog' );

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
define( 'AUTH_KEY',         'xa0M}>`E?2:5{ 0K>c:&z,:M8<VYtn;TH W?bO<7R|WKp4NjPeZ;x(k7)CH+ycl~' );
define( 'SECURE_AUTH_KEY',  '4Wq4y/K]p`/7rPv4~OsrzJQ@sSh|~OS;YpO>KEbx&l+#p4Z~h,}.$LRZ;,[{yhrs' );
define( 'LOGGED_IN_KEY',    'IevojD-NK>]tJb`pWg%9H%3U}N:n%JSDn_&,Un1%7PjTzW>/4s+xFz;DN,lep`[f' );
define( 'NONCE_KEY',        'n,fla-O0jkhXA;Y(-zTR J?eb*{$l_0-Au,ta^pkG-G`u/>kY[!w*(M%yzA2jf?e' );
define( 'AUTH_SALT',        'U4+Zrxx4W(ws3M(XeacX:s9E9g{q8yh6-K~2G !~p*wzf2hpHR^*_LNW.G[F^8Or' );
define( 'SECURE_AUTH_SALT', '@z%.;ge#K;l:</*u]N<69WM7f+{,ao=S4Q)E6^H]XZ6E/1vCW`~N/c3_$hm:U+Q]' );
define( 'LOGGED_IN_SALT',   ';xvh^mM!~!1LMq})w`jV2pGji8@)f2 *`6tjpi-`.)uQkW#!t^m}hZ)1gWR +lHJ' );
define( 'NONCE_SALT',       'IyJ:$[==MBGw#0P!ey0@pw~q])grC2FWArk8E$+5f8|2cxky3b&5XI#PIKr_ (3x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'obi_';

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
