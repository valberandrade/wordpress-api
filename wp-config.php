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
/** The name of the DB for WordPress */
define( 'DB_NAME', 'wordpress_api' );

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
define( 'AUTH_KEY',         'E3VNi6x^mkR$?]A:YURh*z,WS$t@3BR>^_g!iK7+aPhZDqjzrWzl;(o&/41+!cd=' );
define( 'SECURE_AUTH_KEY',  'ZU@E<G&*6<D&2Kjm:hQNsI44-^p,wo_# p?*h+L]%Yv!NX)Ax{mw4r?r}*FfV=VF' );
define( 'LOGGED_IN_KEY',    '2wPTfh| fkgA$(l#iB%q&.fxxdK1oCL:b,S*v||Z`W?/G!wqO(*2{j/aNH3==3)@' );
define( 'NONCE_KEY',        'Aeg|#Rk|/dd$a[:gVfMK@Vf8xzBk))jDTS <BW%% VBrF2N8,3:@v?0c5HWbrSi@' );
define( 'AUTH_SALT',        ']h~XR)@:(FIAqr)PxZeqKM5 %{{cqv16a4q*(u~d}OYfVC4@p[l8~bf=[MfGo4r^' );
define( 'SECURE_AUTH_SALT', 'OKX1FGGLq(!3-0X% ?ldCPpFf(uMhd{/QXM&+c8CA0+6])vly@xRa4#K,iVXVbC2' );
define( 'LOGGED_IN_SALT',   'N*45JSP~n*m5w$orDZt{i0$3b&F{./R?5Y+)c])D@ajq fY+ddQs/3$jrY64I?6I' );
define( 'NONCE_SALT',       'v&@CwZ7.%?vt<SQSVmWP<bcG2y|Pt3xa#K>1XJq}Y`aJX_-Oq$DBWb$>v!TZ:uN3' );

define('JWT_AUTH_SECRET_KEY', '$&:Tl~]@QM60`dn<9+*ZJQUziM51PS[jYsjf2Qsq1;I*=d!)!#%}m$_]mOIzw/nd');

define('JWT_AUTH_CORS_ENABLE', true);

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
$table_prefix = 'api_';

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
