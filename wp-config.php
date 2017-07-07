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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'RQNg|Dw$K?]6,J*~.Uk~n&tWHVU:H9SxPBbAl{sd]EI_E5Cnyzon$T?AZdy[~m4H');
define('SECURE_AUTH_KEY',  '@.IDTi]RgF-1HF@0X0g9C&QCv8%):7{sYZ~YyM>oY<N(m6LV0?P-q2L`IEla)F{k');
define('LOGGED_IN_KEY',    '/)ixOko=[9 Y>&z/rFyw4l@e.YeeEsbXeJT+#n0i)82H],X~L@D35JX)HjI-MP:D');
define('NONCE_KEY',        ';p_:}JQiYLM^VjXDB4)2pai}yPFCyk0L @tw:=ze VFT9P.%pwT%D0^LkOwYkhO(');
define('AUTH_SALT',        '(u$q(W.15`HK2P?Vb]kSy%>c{j)YGy4mIfX9gA8t>~.8=eXd_tL&Ik9H`z,+_4f?');
define('SECURE_AUTH_SALT', ';>1K ^3N1}){JCHAJ@H SCc>iZ:0 P-GC3<A#{Nt[H;WU@.aoUo :@iMSD2d8N{H');
define('LOGGED_IN_SALT',   '1<e@F~I:(Y5|M9?P$&SG?sHf0zNgBvm-8vn~)_H?XR`<PU&}GhisJa^uko{l@shl');
define('NONCE_SALT',       '^1}zNC3DU:+>nQ%s>tX+_xh(2TTXtKRE)%BX$]^6Sg8h],GNVdMGak9QN-0RS_Td');

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
