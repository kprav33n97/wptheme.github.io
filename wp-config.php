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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lbhUFu>:^T_t%$EYyv_!a.UgB@8b[]Q4&qle,#bfIZ {<]@yw05sLe:T@Z{@QF@!' );
define( 'SECURE_AUTH_KEY',  'V|u[rQ@p!,R=2]V-RPXhRmd_$r_+hJ->aR&4}A*ete |V/FX1r$?`@X&uz%j@Y/6' );
define( 'LOGGED_IN_KEY',    'fYAC_<5Fd9w>Pl6xe2E lQoPQJi~70%|/(1K;WSjfFB]ovEEeMD2 !^O<B&)Fb=/' );
define( 'NONCE_KEY',        'oUe@{SMnB%-(imHlDrz,^kNi7,.BVOfpCvFeCRlx|:=I-Z3u>G6I@|?,#eboaID#' );
define( 'AUTH_SALT',        '9cB4}wwI;`,0+t^{BBm%<CS2U*C5@2#NeeSy@ssOaeeuLT2EfvUsyji`MA,ms#A2' );
define( 'SECURE_AUTH_SALT', '*dlp5+a&~W<.(aQ|BIh  #Pe}+:@.sAx )Uy8YQ^`oeG+cysJARtNy40T$Q8)^LM' );
define( 'LOGGED_IN_SALT',   '_S+!2XU40-rklORK$MTb~~A5~*b~%F0rv.y28YB|8U/H2cASgQ{fVIBT+Hn;E8#;' );
define( 'NONCE_SALT',       'fzMizyeb.}LA okEx[`VT|Lu}O5+Qf3x]_Hc{skzO)u:*Li(p(~W{Nf1?//tnzpA' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
