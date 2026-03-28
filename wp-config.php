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
define( 'DB_NAME', 'Data' );

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
define( 'AUTH_KEY',         '2.Es/G:O1_,k/c;w8{^U1C|fFGtPo2sgo#O<SD+r&CvreLJ{2qIb+QVJLyyh?_XU' );
define( 'SECURE_AUTH_KEY',  'q|KLx2Uv]83GZN3jr~gBP~x5NEhaHsdzuI}~6END>~qQv^lLbkJK#7bgMHKeQxm8' );
define( 'LOGGED_IN_KEY',    'f^%nBDDk_KT$@:NNqGS/EoIy@O!mWt|O!94Mn9_Io`.}w;2 yu.K%X1sfeV9FPLQ' );
define( 'NONCE_KEY',        'h&UsvXLRqe08^R2{q{gaA,-rYU0_X86{M2rEXRg~QKW!RWWlX|`ef(mag3W;F!*5' );
define( 'AUTH_SALT',        'Ij7y@u`@j}hDvizBSW|jYqpP0I}h~_yTW?n*Q~$bqDltSE+k%~@oi^v#:XSnVhtt' );
define( 'SECURE_AUTH_SALT', '@|{<UCE-<kmZ0ULJeZLI@};V`h#Yd&=2cOmY]Q33fx&55:<oG{.)+*q@YVUc;i7@' );
define( 'LOGGED_IN_SALT',   'syKi(MbdImN49|&r:D2FU}*Jp79?01(78+Geq{$~MUue{DX:x_t:k?&>0i!&I#NF' );
define( 'NONCE_SALT',       'JLgYHnoefg|=xAe=}L| 7$I]yW*lQM06}v7Z1A%|xK#H7f)~v|eblh/TW0?Wh@-a' );

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
