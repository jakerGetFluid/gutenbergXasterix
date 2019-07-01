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
define('DB_NAME', 'asterix_gutenberg_theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',@#dX|-7dY><}7d G_#BGg`XE+xj1j=GX^XDHup~}h0@x;:*9`|F$6S3U}PdQS+}');
define('SECURE_AUTH_KEY',  '#`8l-a`XPMBQAvly, ELv0*:pp+e1Uwz?yR+99c-i.%An ,]#-524OKBygNDCC@3');
define('LOGGED_IN_KEY',    'gQj+i,SX49/-6T)+^-&M!!Y+^I4RipFMxY$9Qb+2O3_hr:Q+yO0Z8D9qi{]@j+$.');
define('NONCE_KEY',        'rdsTF5*#|@C4ijI}<@RlEa_:[)c6,u.]K#URy)!e15:tB+:8%%XS#(|&jKz{18!(');
define('AUTH_SALT',        'l#D`cK-^3U&[Z%pGd@(gR+;?-0I!;;G:lNP>w}MwDCuQRR~IuveieO||^%d**{Q+');
define('SECURE_AUTH_SALT', '`HL<$g1 Um,c_6/CUm`h! 6xV`&B+RJyZ~/RpIr1KY&-|.`&Zw5o`-!y=CaowyDX');
define('LOGGED_IN_SALT',   '7NY+39,E7|U4TH8?Eymuk82rM6-,~LNoivd^os{/E0PYY_aqM-CugLIRh$6o,PXj');
define('NONCE_SALT',       '8>>;138>[+*,~-4+_b9)).Ck1Roz$=uKnxkcxM |}i;-<o:b<`Z[-=ypWWx+I39W');

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
