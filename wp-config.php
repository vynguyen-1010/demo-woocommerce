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
define( 'DB_NAME', 'demo_woocommerce' );

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
define( 'AUTH_KEY',         '``AyDJVoW6M;h,*S14gu1] hy35M},X+`Ha0RoRt$xl!GH49RC`U$>^d-DyijTqk' );
define( 'SECURE_AUTH_KEY',  'Plswq?&<XhOI]4jj{[JlFKJ[akRfE|_|&Y.9_P`*1Px=p)`Ft81vt6#;BV91c~V]' );
define( 'LOGGED_IN_KEY',    '`hVn+9f-v+/M6;?G:jm9D#w9jGGO(>)dpt%!*ch dLH&wTR:&Cy3a>iUOQxs{?un' );
define( 'NONCE_KEY',        'F^DA_sG0J!rvC#>i51,G19zuY7(-!+l9cOc<dx6=rSkoD:A3xM#Vtvku2@9MUc-K' );
define( 'AUTH_SALT',        'GaKR9]/^N!IMcc?mN]Fk]njf^E?W=6gax@wfp, -rR&Z=tA+B~GF__:{o#%G]3+t' );
define( 'SECURE_AUTH_SALT', '822cL4:hSEOS>or?IQi=aLh1g8e7`)-BP. goK-0|S98 h70Ip(}<M/K14CC+r^Q' );
define( 'LOGGED_IN_SALT',   ' bO]IJ=%FFg{QvdJvtA-7@``WxrxFrcBX1]$;7 IMlY0db-DqTU4<Mf*d^C|XRbD' );
define( 'NONCE_SALT',       '8|H8z%):P(F,U3Rmz^LUQS8)fe2d5-!m_4>cr[WiBcj 95q2D2_7JuZDY=-h?wAh' );

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
