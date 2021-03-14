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
define( 'DB_NAME', 'beauthy-healthshop_db' );

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
define( 'AUTH_KEY',         'DF(*eAN!48ZXlwDH#Z4RL750h*l6@]bxJZyN<JC=In4eccF@515H.%Q@64b:+ndx' );
define( 'SECURE_AUTH_KEY',  'BT4BF0@V0C1fLcKCK#gQ<g^^Y/rHXDmIUvpS#U:v o6h9jI*J2wq*reA;(0-- nL' );
define( 'LOGGED_IN_KEY',    '!E&be8KyTRO1{ UA-}~:2U=&aqkS77Yq1:f3S(^tFe!WrK1`S-4.9rWw)qxFJR60' );
define( 'NONCE_KEY',        '4d/ EMC_Z]1jU6Pe9FGj{wUj2O McS^HCz2xUPH6e,8c`T,ccV:k}xJGV!c#ybf_' );
define( 'AUTH_SALT',        '#`AK9kw6<LU.9y7=?OGZ|?~.+Qdv|uQ~Bh}ctS!qKcDAC8mj)XqN LvOo4<94@v7' );
define( 'SECURE_AUTH_SALT', ',T:K,) 7[tP|N|!^W4<qETg%4/,^VoK&k]BRz6HliqRZ_ycRS046<DXWQ*^M.uSI' );
define( 'LOGGED_IN_SALT',   '+>&5yprop?6ZHEkkL4xO>?<Gf0(]7-KcHNJ)U%+DG4VikHRL<ffM9^b)<<}t)bqz' );
define( 'NONCE_SALT',       'SR)2+!MKoP }wt)g*qAUM0$fSIqvs*}m^zWY8R^M:Sxa[$VN-cc+lk#^=A(,-nif' );

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
