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
define( 'DB_NAME', 'hosecallss' );

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
define( 'AUTH_KEY',         'w3kBwF, CiS&3%:,N5(nVpOPC<1YPsp%sQi6*)]q$UMItc3W-2D@0I%P8G[ghtlg' );
define( 'SECURE_AUTH_KEY',  '69/N-:WNzX}r;:^lxv+dha(1am6R#E,K`zR%_{G}h7E{&{oA(%2vDP3{ ioHHjxq' );
define( 'LOGGED_IN_KEY',    'pNg?g@XWe<jd3uUen0`HhNzD!X4R2(dV=N54K!{el;bR_s_#M*8j>K4&pWDp+2BR' );
define( 'NONCE_KEY',        'E;-c#/#5bV-r_BLO.G*PWA69[fpNqQN;iDXat^g]4)3k$E.w;a5dR_;Ko-^5 846' );
define( 'AUTH_SALT',        'VFyq2Z`{A^,Rz^&UluT2w$HWeMw(uu~|?gS6A<q%]BSWF:3UScaH5!%,6Z^EeQRo' );
define( 'SECURE_AUTH_SALT', '}OaXSdS]GdgvK2q^?&5VFbtJ{>>$T]sya>j0={<era:&3D^DI6?P^_v{(U%K+m`;' );
define( 'LOGGED_IN_SALT',   ']K:|WtOMHePa11[cxmCL<b{j`ClZrl7oV|<:$K4xaxa>geKD;;-bto`gUY^1s+.l' );
define( 'NONCE_SALT',       'DLc>fQ-[6?+`65ioBC;z|]qr<2[e99U&@R6h[BvYC!I,tns]&0U@<5e0`F=X,Ob6' );

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
