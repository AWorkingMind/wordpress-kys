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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3305' );

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
define( 'AUTH_KEY',         '9Gqf7X9;M!St~a$/s$$,j!;XY4{cu$6ML?1P)x{R6>mOQAe^EdLKgqx0f^k_%,Z/' );
define( 'SECURE_AUTH_KEY',  '~xi`49yT7XeO8#@)upx}-*YWx#Q1V#>X3?$^695LrzZa&yD),NX-?g59yjM4!$f&' );
define( 'LOGGED_IN_KEY',    '?1$OUY8o+L^ee1g+9Q2Dukj5xL9@e!(@h~?xk9oe9/D-iL7y)MR5V5p]1AW| +y/' );
define( 'NONCE_KEY',        'ZWqy=_tJ.y`7B-2)3f,Jm#>sqcii6M``{-.U)es9H$pu|E[TCuw$.UE~yq(;^6X5' );
define( 'AUTH_SALT',        '6ibcrAJ)ho5&O|r2BlJ ZWl:S$ge:00SwuY!xE;uOkug*XVb7kmk}^K$S(p-SsrU' );
define( 'SECURE_AUTH_SALT', '/d7^&_Z)=F}VDd_oKE[.{8}{T*DqB(m`SKv&d_^^qnnw6pO5cu*x=sbU?h`F]btP' );
define( 'LOGGED_IN_SALT',   'ckr~#Fa7*|{qte:KxYJCRbzL|7{6px,;fZ8ITWwbOM,ar`O|M9$EeG/sSQW+kR{.' );
define( 'NONCE_SALT',       ')xGSAQ1]g8j5>x!kWT%4YDB|DaH+FT%p9Z~6(cW >B{/-6f% OM5mF2F0Howtzf7' );

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
