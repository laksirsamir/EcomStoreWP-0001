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
define( 'DB_NAME', 'bdmonsite' );

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
define( 'AUTH_KEY',         'P9p)uMFr;?MG>O$*^`;|W*8v3qVH36Ts` Y~>ei%BLqr6qp|ep9m!vRwlKPlu@lV' );
define( 'SECURE_AUTH_KEY',  '{y!^41.yB>1c-5|kG9Q)_Zcmk ~VqEkC-BKV7D*R[HF]2];?QWjZw;[32nmv%Z@|' );
define( 'LOGGED_IN_KEY',    '95IG22<1#5C,(FY a?l@!:%p6Z/;?Iy lgVi,e.}0fU`XC^}I[?^r@b#LEkJn5>9' );
define( 'NONCE_KEY',        'Sd#AtQq^Qv%71Ai2EvOYb#U Pb.j,e.Nky>h%W!3=8Tyz;Zqdh~Uh?bKp7LRBJF6' );
define( 'AUTH_SALT',        '>BIk1P |-ArVCaIF0J[O!C`e}j&N:d4H-U%Rx*x_DvYIti_[G(vdg^T~rjQ.#j5(' );
define( 'SECURE_AUTH_SALT', 'b.jue!G/JB}H+y& zxvZ8>K/GM?3R;IMW0yEnHGo}1!1OSe]}TceeAZC04*gezuj' );
define( 'LOGGED_IN_SALT',   '&:$* uav1o8~vn=mGYU>C6Uf$`!>vj/?3-*1B)!X-8R]p92ClG>OnoM**W#j!_KQ' );
define( 'NONCE_SALT',       '`Sgre*a-RqPeA9Q#Tw)PngP1O,au-0u[zvsSLO8|VzDa*iHdsO`3RxN9LX{76z,u' );

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
