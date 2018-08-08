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
define('DB_NAME', 'apptodate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'samcom4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

// define('WP_MEMORY_LIMIT', '256M');
// @ini_set( 'upload_max_size' , '12M' );
// @ini_set( 'post_max_size', '13M');
// @ini_set( 'memory_limit', '15M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`L&)#US1i$N9@w3/dq6[,Pmb!|HF@|$*ws%/##.=X{Df7%#=}1DN;+^b=(B^md}X');
define('SECURE_AUTH_KEY',  'w#,S*XTp4N97tK6Frw;P{NQc{Vpn>1MWc#A!xG~ti`D!7={Xjp2YoHL] Ucir={}');
define('LOGGED_IN_KEY',    '@@JYz9Uq}~/7@xMKb{&~vx6Z~oS!.[]iXkE/[^%U9wUhpN.PpDPSr#]{&M;R P6e');
define('NONCE_KEY',        'AtY+iy{E`v,30f`XIn83A,r{ZIqC9Gf?>-[4m <Ul@q=V40v=em_&mv[MAZXsI[W');
define('AUTH_SALT',        'Koy|{*1/VD2OD5FDBWT3,Tp7@/iVFLb]8$zFH)lY,8V&;th6qas$d{EC#M^-x2.7');
define('SECURE_AUTH_SALT', 'QSBx41JG$iOOP1kO?x+(-mD{~nXl{HD,|Cdg9{/b]Y)%vV*kt>6VS0krYdnOv]79');
define('LOGGED_IN_SALT',   '/tH]0$osMkS>?$bp#vMh-u%jn5x}O];OILZNU*2-e#}.L3.z;LfsjzrJV^<ViKmn');
define('NONCE_SALT',       'qpso:+;Z,qPoeQ)oCVrA(K|OY}#~*S0|fm1fRh:&U7GrgmH+m4jp*&|zxpivAQ;%');

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
