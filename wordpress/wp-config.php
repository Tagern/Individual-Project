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
define('DB_NAME', 'jemmaWordpress');

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
define('AUTH_KEY',         'PqS<1|_F%?Io2H48%=ecHN+;YMj@5Q*m/B8,yqaW,]+;9Cx]69P17]H~!,:aH{gZ');
define('SECURE_AUTH_KEY',  'd/=3n`JFdgq+H$7<qsiHU7,31XF*Xk;1HOokm4R,ctE7,R*yvWfFz9`2Z-[W74x/');
define('LOGGED_IN_KEY',    'K5@up#F54L$VFfnuK:dxzOH_e^a|3P!+c9=<u2w`WQ^nYN2^kY s:w=KKGi`yh_]');
define('NONCE_KEY',        'o!V+u+w[(g3NP1 ?MG#cYwb+FYX(Ccu#!+Sg]1EOrxjJik)kqJ5+QO`vWbii7>w%');
define('AUTH_SALT',        'DSK_!mzV- cgm)-ByX<>JoW2ii^ZzL*cFhIPYj>;L=.so(sAByd?99xVvzU?mC+R');
define('SECURE_AUTH_SALT', 'G-]4d=wwpof+F5^bSBCPmo!PJ4^]+U,))F9PlA25W(*&d.ly{oS#x|#mjhA!Jm%L');
define('LOGGED_IN_SALT',   'jH^YgV)>(-}4/%m^35ljC*:UX1/CK93:2AHy%;I|UE$u[geJyg-1cv_zJ hK[0,z');
define('NONCE_SALT',       '7qpD==&!W:`8dz{9nmTyBnH[i@%*;,`MItwmcz.l7(c<`_G(~}*x)2S`q m|Lj/F');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
