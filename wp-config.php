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
define( 'DB_NAME', 'dasti' );

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
define( 'AUTH_KEY',         '`(xCsTMjfIT8bL 3-ep>;ZEE~S387uWQ&Ja+qs(SZ}`:T9@^HE:QH~gs_lL{N]`=' );
define( 'SECURE_AUTH_KEY',  'Cl%a7)wSlD+`MYxV{d3xleZV/!H],%&=/WJ_b6Uz]6;Blmm;wy#(!<2FA;Z.(Eg>' );
define( 'LOGGED_IN_KEY',    'luLnb~$f:cBQ:8RaAGEVv45A4ecq^HK,*(C`WT^<@]p)|TG.Jbj?wywFnKX^.%s&' );
define( 'NONCE_KEY',        '88xRv_qbsWa:Zz&rY5NT8EljGyvG%GzA@Y!/3L$~|%>~WGT_:ZGki;ajZ[x-4O5}' );
define( 'AUTH_SALT',        'y:K~?qLK.f-~:m:ly#KkX7V)~+7tn4C^JuPIjo_Q{@?$4J hp6/wLiC@UuC9;nkz' );
define( 'SECURE_AUTH_SALT', 'O,EE+!gexNVyE03Hv(Ji^*lFmO8|lw8[K+N;;|0KfBExd%TSN|e]#6{,.|;95wrd' );
define( 'LOGGED_IN_SALT',   '=u~oAS.FO:WpWvOo&cYb+GA<(O)%t3vL:z*Z&j,0@huu% 0@0u.}){c)QVnmQ():' );
define( 'NONCE_SALT',       'US?q6b]Z-|xzS/97B&c<|(4b9,U~CcWy$GrJ}Tf_032yK_NDG)&XI@Vqm@yBMF)R' );

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
