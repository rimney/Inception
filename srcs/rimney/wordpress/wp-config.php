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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'rimney' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?t1JF+,#9PO7q9<`/T|k)y/)/ag[3:lM`j$.%}8[bF>(5r2`S1~;DwpbKPM~!}7b' );
define( 'SECURE_AUTH_KEY',   '?lc|m!p?b=3<>j:q,VZ:n.+DehX;Gaz5iz=!1~bCv_b}*[>cwEXnCLAK[uy$I [*' );
define( 'LOGGED_IN_KEY',     '?>@t8G30o9U*XiI/&PrIjNHq_} mCnyAR=QGbE>-tl2Pp:afxtVe.*cs6,u#*dSS' );
define( 'NONCE_KEY',         '+C[wR+9 ONJVW6fow>0A0ui>T0*X/YP3+(lz`q+s%9~,`}l1RI-HND(5?R{;Ifzn' );
define( 'AUTH_SALT',         '+kGd|92S,=@4`sG(DpOS$vu[BpA!)LF?Fc3JMU sYM%p{0/F]et)O&{AEntfVD<)' );
define( 'SECURE_AUTH_SALT',  'B[rP:}Iuw=Iz2J@BK&!M`{ZS+HnH(4zP9`?!sjn(0.Yk.v@3u|wB,WgIT-D8O=((' );
define( 'LOGGED_IN_SALT',    '!$B,v=ZdjK4]8Aq sSfP!R+9Z0p$mr&$]gRBwA42Qm2WA&@6Y&6q[>%4cdsu[)$u' );
define( 'NONCE_SALT',        '+zTt@DzxG5wLxS|`)i>Uo3 Vojk0o!|}~IHJD2ZNxVy?L;#CJM{nIr,&5Ah; F$V' );
define( 'WP_CACHE_KEY_SALT', 'lrCrLpFBB0o=uQ?j.R~y?:8@kEo3;SOML|ugGw6P7CnV&e^ar}Js[iuub>GRlRH]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
