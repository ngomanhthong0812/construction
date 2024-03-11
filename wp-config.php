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
define( 'DB_NAME', 'db_construction' );

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
define( 'AUTH_KEY',         's8.SGV%}.L R_<fqSD=IUjM`C5}2Gd~ilKCxv!?jIu&!sGy/LA^f&[JaL;qJ14@E' );
define( 'SECURE_AUTH_KEY',  'Y,scv#_)~D,?y5z^g(jSgLA4zixEF,)`x V@=N07v}`5DRfo:A* t4MSx0{<h?XE' );
define( 'LOGGED_IN_KEY',    'Y7ApNz`lp!9%zk%Y(Sy+nuU;Z+NR5d/7VL~j[hGNAi}|e:8KG xufH>t{fxzlFy!' );
define( 'NONCE_KEY',        '~<L#/h5N1YVBgB5ymNc/U 23(SBCVG<HS;+:j@6+>ybRRw=Us><mV?<7!Q90r^%l' );
define( 'AUTH_SALT',        '6dPR6orN=kE`7ZPJd*tud=[1^J0Pk9qo,2?YUWd+P%Oh3!z4~Mp%TXt`75e7KtXT' );
define( 'SECURE_AUTH_SALT', '<.<)(D/|0=gQ)AkCu;1;UvCr,gh25k>C54W6uovTzwrPw:m<xCv~#r}icns4)gLN' );
define( 'LOGGED_IN_SALT',   '!Y|-Nks5;erw-Sef%GPKhe.8$F&!PwSt7guP/2:XCnnsn4$&#GTX-5Kk&k>M#a/N' );
define( 'NONCE_SALT',       'O?>7#NhITtL3zh/#[rc CY[8a/CPw611NS??lGrWK4pLYfDL]KvI897~1^sp6F^d' );

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
