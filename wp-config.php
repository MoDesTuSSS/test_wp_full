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
define('AUTH_KEY',         '~<xGA6B?R<=(;PlC-e2Qa~[N&<3yMnWwE $YsS|lE.EgA7T4YpJ^.7=c0P`/y tx');
define('SECURE_AUTH_KEY',  'FU!!&0JqA7!FJvL}Q)O?8s}!yV~*-]GtuJ1i2q)WJsc[}&AF_Wx`oSw#>lc30{f:');
define('LOGGED_IN_KEY',    ']dzXX4D_Qt)W%RSrK$tf*m9O-GJNux(-[+l?|=R}!gbpj|dI6X4![,#5!UtmaBma');
define('NONCE_KEY',        ' s9c.W%nU&aSY+7(B6d]GmFs,#)+3jV1h[Rw_6B#]@NL=elTLlYf+X/OU3MC.cV^');
define('AUTH_SALT',        'yVL>KbJqFUN;#)/Sm]QGTv7SKCtu0/T?V$4J3[etFO$[F<wghvX46iNL%ID1k^Qr');
define('SECURE_AUTH_SALT', 'rJ9U/*Hc#RD38(U:F0kzu<,Zc/YtR7_.h=XD~9E:B,F,s;5sUY+4$V>*%wx /RoW');
define('LOGGED_IN_SALT',   'd}&.E92m-e_0MJqR6qx7aDC5*B2>E>^g9;X29YV#!w$U3_+XA0e]Q4p=!&06<6!B');
define('NONCE_SALT',       'lAJ[^~C/7N@B&e#KHW%+4e&kiu+8Q#lbXtlPpsZ/ZwoS;GBjV=vq0@`&a/-L2luk');

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
