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
define('DB_NAME', 'passionrouge');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Gr.9Pj[4p;8@|jJ8cM rZ!@:BH;9%C&Cm^M Xd~HR4X%04g1?E]vjHykuJ&}D2+U');
define('SECURE_AUTH_KEY',  '3%_Cs@%gFL0kxBJCjNM ~x&)SzUT R3Sf).Q^h(f(bH^iY+[fdjOPH _V#u@/7U-');
define('LOGGED_IN_KEY',    'fT?Y5J8,1sfB/o0nf/TqL$!dK0[ANVna60EU*riFIBTIIdZn5!QOR!n0rfq)1V/n');
define('NONCE_KEY',        '+%K^c*9w`KZ@=l7>$[_yUtTs[Q)~TSL)Ox(I&VHf9/cj*.6G;Snb7+d@~^S@E5; ');
define('AUTH_SALT',        'Hszh^WZTEXM!nL9Ng4{am+_Qeo<j_i$MNk4Ix*>ReTc@E.pwZ|ciY~+,+jvgUSmD');
define('SECURE_AUTH_SALT', 'HrWwU^@ym[}9U&)=PDk(W7*&1zOK;U%FM1Iv_=Uiq;ZfbHv4+G1efx9>XdCjv`W^');
define('LOGGED_IN_SALT',   'A6r|*WI4b`!Eyqso^.pl!Vqv}W`(y}m+p,qsDiDFUZX{oQ/#9-)dZ$|.G`3_?rV|');
define('NONCE_SALT',       '0JTUdV;y^~?VAC}Z^cQN&o@. fx2E_Z{q,I:#a5([)~04tTJz]?0L?d[bF kZ[@&');

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
