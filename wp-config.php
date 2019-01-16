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
define('DB_NAME', 'Ron_Penksa');

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
define('AUTH_KEY',         'OaF~?HzQrdt_O$VNLI*uj%~Ih?/7q6Q2NXw&S-5L0IeL2]-CFnUXqSkq.@q$)HX6');
define('SECURE_AUTH_KEY',  '||Y~-C+oICpt|2~rIUL=trY&.vfu9Z<{einMu%..uR= cL.GFux5f+<or}tZX%j~');
define('LOGGED_IN_KEY',    'C{+~TG+89&&f%X (#C{zT5)rJq)Uke8{0r&G.cZD{Yp6%1?|}v]l+TP:1trXUb[{');
define('NONCE_KEY',        'w6Jf4:l~EM@D^3x5?kH2]65=~l!DMbr1TLovoY~z44ZoUfd`:k}je0N2tnP~ngYS');
define('AUTH_SALT',        'Ilx]8+)sd2~q&}C)-do,pW0AVFe]kidzQF8[9Sl<86|.RvAnw[CR;D6#?(S`%Xvp');
define('SECURE_AUTH_SALT', '!m[G$a%p]*;>P;$TE7k)(8xL95OanL@qdThE4E]!T>R>beh#L$K*:Xi@5mJ%i=s8');
define('LOGGED_IN_SALT',   'f_A+<Gum&Ev;o$63um@ZS,<m5_>e8iW;O}dVgZU%u7..]8~WHarm:g(O0g+I4O^C');
define('NONCE_SALT',       '}sGg%*8Q^0$^Upfnz[/ca9 P_Q5h=FrirdW=`F{wcxT?u^u6di#,)Hyr kQ0,QSe');

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
