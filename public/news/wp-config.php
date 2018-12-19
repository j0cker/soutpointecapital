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
define('DB_NAME', 'southpointe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5kQyACS2z=^v, BcY3^{x.c>&dI{$ ;!-iC]u|E8}+QOZ0ifjZzyW:|IwB>y02&N');
define('SECURE_AUTH_KEY',  'hzKO1GC>T(4n/I:ZQ 5U$,NX]KnCUlrD1Qm~s4Ox(0?H?JnX1B}REHGhI=Wg^66{');
define('LOGGED_IN_KEY',    'G*{-;>27#hhYp[J9SuIx*CX)DLclQfSlHYO%s&Sk=w|5Zf<P1AHzo=4qQ#LPJ/]o');
define('NONCE_KEY',        'XRJHn?vT|e1-< pne:f8iU`v,w3M5gYwjZ!0(ccY}hxRj=J3MOo/.#%zKq~z3]F?');
define('AUTH_SALT',        '1 v%?|b!G}N):y)$loRd&s+SnuX$u1k/)<WqF~i]{_qW(Wx2zo%L%UB`4-hoXos<');
define('SECURE_AUTH_SALT', 'O}])SJiFAz62~OxITgv{Xxi!%}R|>qs+h5^317<-yq=YcZ_/=IJKB6;] -0Rjp^S');
define('LOGGED_IN_SALT',   '1M8C vu*PuXt}p0TX{h0`TVfXGWF.O5B7(bIn>2/59X>aJ)lVeP-.B=a!dGk#NBr');
define('NONCE_SALT',       'rOc5Ie|#e&`f~jFOV8G3e:-B8Pq40B (W?/-XP_lN6#Sx<L]$,[} C*}2}PjXt1u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
