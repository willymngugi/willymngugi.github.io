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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\Guardian\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'guardian' );

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
define( 'AUTH_KEY',         '1;SCx X^YWn%@i}OYddQcTQ=KYk<[z<=>+EMXYiLqLZ;{D5tJ}pWymDz f0:zU_#' );
define( 'SECURE_AUTH_KEY',  'Z3df|(Q3^35,Ono9k |E:e45I4c-Y$K2=[z2}G<0<KVf}fa-e8@@unQ1i!T]{J@,' );
define( 'LOGGED_IN_KEY',    'n+BZW{JWg&31{*48Xp{n}qw_~0.q1EK-Ox#iM6A&Cq6Iqu4HoI^4nC4n{C>ETvB;' );
define( 'NONCE_KEY',        'y?=He5k&fxZdN-(--1 O_N@h-w@5rdt80=6)=/8u+P-<yp%I9sK*ZmaTpiYq=K];' );
define( 'AUTH_SALT',        'V3DyTD%:;_py*]+p0uB@ISxBaYV_^$ d$<XF$xVN,1U%5QckFVT+K_R]PmH?G#Q4' );
define( 'SECURE_AUTH_SALT', 'pBKO7JErTg3zKZH<B;CSyd#(foKA,apn$t7nm;EaUN=gKH2lw3FmLd&0A2-sSeB{' );
define( 'LOGGED_IN_SALT',   'MWBl2UxWfznNnI@2}fax0j}k7(ZnHujzq(4HQ.U<FZ[X#HCZQ+C&nN&/0/qjcLpK' );
define( 'NONCE_SALT',       'Gj%uM6k/_T-[3g=}.kLUpa4|0b|D<v{eF~ie]y(=r%rkc[hF,97F=+d;i#TL/y/:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
