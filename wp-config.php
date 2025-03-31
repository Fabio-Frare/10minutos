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
/** The name of the database for WordPress */
define( 'DB_NAME', '10minutos' );

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
define( 'AUTH_KEY',         'fPYU|MIyFXzI2mr&oP<cX#_7@^csK{wU@Vz#} tL6?<Pb0v2u&vbFaF,,y#rFv%7' );
define( 'SECURE_AUTH_KEY',  'LCf`(#po+jGfNd|i!+aRb[PIKC~m9R3TJXrjX,Q%:K_E+EWoa l5{4wT]&DIX&Je' );
define( 'LOGGED_IN_KEY',    've[n$[SbRBs.]V6%=9E_F5zxXw/hA(3>#c[Ef;1lw+k;xdsrh39Fa5Rh/X.(cvi>' );
define( 'NONCE_KEY',        'INu*4=>FnaWQtMvEld|jCEZXuh<_V(5x1#a*&~mb45Ws%BADD>[WmJA4~GVkGxnl' );
define( 'AUTH_SALT',        'JhEi9&VC`0jJ_[7lc^,#B!NE~!Vf}}dX0SY*,U+qa.r% *F+73.hFs&^oMtN6|Pp' );
define( 'SECURE_AUTH_SALT', 'cO/n,,:~y~*6VT0c_B:xOU[RAT}.aEf!L10/lglL1$j%tI?G:<QZmOZ$QrBIyWxE' );
define( 'LOGGED_IN_SALT',   '`}v$><:v0Cz+(0LDASP.4lVqfnKBW54Sl&B,wJV^B^(+vk}H]G~Ux-P3]#uHUrjr' );
define( 'NONCE_SALT',       '=8up0z7T$h&PU&5Gp4z/]sNp_;B15#uX>HaW@|::@:P_{~%*1&VU.AA&M%HnCWfg' );

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
