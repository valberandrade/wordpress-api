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
define('AUTH_KEY',         '3L{JQl;;L49h7w=ZDsrZ<)JgFJJz{cTy%dC`m!ce_}4~]R=w0&4Dk7LHpA-kF*E_');
define('SECURE_AUTH_KEY',  'q`mU9nblR{#+,r!YJO&p9:R:[ii`s|Jr![QtcS$5z^8Zd~lJ?1p Rij3pk[6k[7T');
define('LOGGED_IN_KEY',    '7+P~R5,tgZ&,u)O%b<m+(xC`Wtc-Gl;5,-`]MF+H2F-J=X]%m?56ILrOg~6c2^~Y');
define('NONCE_KEY',        '|ecgTD TBJqq$B|X8MReE<5$A--}|Xh~2>^,t.rXMd3xcJd,0HdfxLN<L1s{uvG(');
define('AUTH_SALT',        'A)3W:C@|8,D>Q:H+V{!Mo#*pPdFe<viMg[@&K(gbJV/7p{[/hvF--hx;2gL-E>jo');
define('SECURE_AUTH_SALT', '+RFAO`hS8%{Ga_I QI`55~WjYffwU#gIr34S:q>hD2^KQ@5.-{G8|P~U-m-ohj~c');
define('LOGGED_IN_SALT',   'q^O+?av4vV6h+rgHNm{E+**[}{{y_Fp|(,0F |v ^0L=(i[or2g@`0MC-k+`|7Ou');
define('NONCE_SALT',       '8lZ-O:R {p9X>N]xA)Y{{]D,K3@^4ehQ(OgZO}3rTtS)fC;v$t`3/-g@a%IA{*K>');

define('JWT_AUTH_SECRET_KEY', '3L{JQl;;L49h7w=ZDsrZ<)JgFJJz{cTy%dC`m!ce_}4~]R=w0&4Dk7LHpA-kF*E_');

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
