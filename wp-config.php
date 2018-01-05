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
define('DB_NAME', 'bertani');

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
define('AUTH_KEY',         '5_o:x},~cX7dzW#@,LF0{<kJYJToX%iXZ<y)J-O$JAB%]P&BW:_HX?TSEZMnDBjh');
define('SECURE_AUTH_KEY',  'gQnDtZQU$]7 C!/FiPcMOYp6l-p{dK8:zFw,fI)aG+0>Nrh8NnN@vJy5MTczh%#d');
define('LOGGED_IN_KEY',    '&b_1l1sk72)(=,E6SCr;UbXJ5g^,Lkm)p|-Rk>BnM7;GuW;+Kz-zWvmW)_YKutjn');
define('NONCE_KEY',        'FpB.82n_k$9!uE}RJ6sCAyZU1eiPh5JLn`thrY$l^e:0*ojKbAt:U.6L{EjW-Td7');
define('AUTH_SALT',        '=qS+a=*.VaDzpHdk0Brp-9XFpR7`?;PxF4s VxFsHTfc 3$v?x2brPDycj*X|v5r');
define('SECURE_AUTH_SALT', 'ck5rilsI *:N!N_xJpXYZWhx24t@7z/&KGw0k|<ph;rTm)0$HgJFog%F+#Kl8tqQ');
define('LOGGED_IN_SALT',   'k&/6SClr^F|;CgPY<9oX#os*g|~Trw|16hbLE!o!9oBcrh g0.(TsXY~v+]TpP(z');
define('NONCE_SALT',       'D{L?FO.tT5<@Ny.`2kxl!sygzuXcLOb+~1GU%4{|p3LePKdzZydjh7p^xg{eEg],');

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
define('WP_MEMORY_LIMIT', '128M');