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
define( 'DB_NAME', 'site2' );

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
define( 'AUTH_KEY',         '<&J>&@mC^*PNr1w%kBd =6b.ufLa?t_ah0XQ6!.9&4hTBmvJnwQ5WVc$8Gcs|rl ' );
define( 'SECURE_AUTH_KEY',  'tc_?J(R~/ epYg/~FZTeBvnPFA3M}>@w|5gmU.^dS/>R!^C46sXrMDXj#$KzEum1' );
define( 'LOGGED_IN_KEY',    'DtCMt_No:%=[f<GH449iC/juIj=/sA_+QU,@[FaHQ?X*_}g>Pt%OvjF+{j]3Q9:N' );
define( 'NONCE_KEY',        ':qDmQ$={{{W*]{CpHlhJDnoE>8{bVh,$ZQWLUR:9#q2 CT3S9Ff3!e^K4>BJT.A ' );
define( 'AUTH_SALT',        ']>qMecuh&_|9e96utRm0ftNvC%tF!E l6?~c * $gG]4;9NXTq}:FBTmZSRVJQe8' );
define( 'SECURE_AUTH_SALT', ')Q1!yy!psNMW7ifEq9M8%!L{dfDirlhfX{$-PmH3T%kq,1]Gjs3~_1:q|^RUG0 p' );
define( 'LOGGED_IN_SALT',   ' tri<o(d&E}$I@QRsrmjgf[@EO2kWYC3J[FJUx%ps/!=Mt 1S36X}_1iB V!judm' );
define( 'NONCE_SALT',       'bz+r-~4}5CQ#EgCxh!*%^<^lh}SZI~Extg.GBz@Q(V`-o)lOdfTU%l(;Qyw*OBbr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_site';

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
