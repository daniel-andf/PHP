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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '/|30A&RG=)(x+|mpw.,uj*p?~58>#fgtrJTGzI{-%{lMbrexV~Jh*C7T@phgswW6');
define('SECURE_AUTH_KEY',  '<ZY<=h[}-W!bmQUPbJ*)bhXTD_2l2eh(UNv#t;bZ]kJH;F5yXilR#XNC?KiBi2HN');
define('LOGGED_IN_KEY',    'jqA?]RR3Ls4c)B~2t4=lc=U[Dd-;Z&Z6c.8Ic]#cim.T0{ERPEE!7$(3%~m {3Zk');
define('NONCE_KEY',        'q&5&b<p4.M,H2PFqiyH$[^9)3t1Hu1L,ew9*ADra0u<tXkkM!?[1D_|#5t ab_y6');
define('AUTH_SALT',        'A|+a5FhMO1z#juh~~8!Jd!4U~O(ev=`>5j;GFVNiU|H8y:)>!DhD-. t=XZO0,BH');
define('SECURE_AUTH_SALT', 'SQP0j9wW}UIDLSWbWXtl9ZJOlPcj$L#7sWE/)4D=1Mr|l304ZE<KVwv{U,#SGq+e');
define('LOGGED_IN_SALT',   '#{QF&4`&/?)wZtDK01IJ}CyM~INxxVw/Ucer&&ODZ1b;[9+H3a&;O_8<(GXKyTrX');
define('NONCE_SALT',       'F?}<Kqa#Cx+wXR6xA8>>&C5Q;bxI;FF3C&JTdIg$PA_7ok~I3#v2z9ngtzg$.nfM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_daniel_fonseca_portfolio';

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
