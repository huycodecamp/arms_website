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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arms' );

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
define( 'AUTH_KEY',         'synN<{&*J#>a6EP62HnpSfI/pdOlVVh4#LqI;=V_r)q`:# x)8 7 5eOY*3BblMk' );
define( 'SECURE_AUTH_KEY',  'H S{ma|J`>.C}3$uFbIVVqG.[ TD?Na^H5Jd1j7|sQt-(F#@4f0U(tp=x;U_nM2?' );
define( 'LOGGED_IN_KEY',    'dN876#Mm*&)[rO=?>-{K8tD )vfBc/z;bbf!q|+YNq[%mwmK#IGbR?S3y3Q*5pZ#' );
define( 'NONCE_KEY',        'l??n%E{@d)wo9}Pfug6t,s.eA8o7yt%;hZk0ZfgH%N<R25W9g u7_nTLULW[ln~0' );
define( 'AUTH_SALT',        'ZcI9W4>U Z<R_@:VZPIszAqrdnR{(+q:<^@yD0<Gkj}},7ssfll.^*czF9S:ve*S' );
define( 'SECURE_AUTH_SALT', '-/+a^D_],)X3h?x~Kz=Cz)RB)(~5~sAQH$Rr]xL_D@K*+YMtS2dipc2ji{B<]RwK' );
define( 'LOGGED_IN_SALT',   '6|FyP/F1+__pb.)FTERHO~{5u4^1oI;Ck@4chR+iD.W>gtL.-!Aj1lh9:gt#4:v ' );
define( 'NONCE_SALT',       '^Xl1xc]H|:0Et!ifH6F@evd)cbhB{sF2qyuA|OKN93C-^.dWW1&?Z,/q3~/7FcNg' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
