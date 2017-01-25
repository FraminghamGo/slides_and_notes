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

define('DB_NAME', 'wp-custom-name');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', 'root');



/** MySQL hostname */

define('DB_HOST', 'db:3306');



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

define('AUTH_KEY',         'd11bf6e3c228edd2f2fbc4e41d74327ddc4375df');

define('SECURE_AUTH_KEY',  '6d23468af0f4f8ed8d10f691bc5206ec483beab8');

define('LOGGED_IN_KEY',    'e06a5d8ea3c2d9e25a5e3ab0ed5dc2bbeefddd9a');

define('NONCE_KEY',        'ca40898e7184069da0f19ad217e1a5f9785c5ef7');

define('AUTH_SALT',        '3616779ba8e628c477bd41e22cb278f2cf49b47f');

define('SECURE_AUTH_SALT', '4763f9e4844b55c9db7d7957bf1755cce1809cad');

define('LOGGED_IN_SALT',   '1ce9c3e4705ea5d17ac9503ba5acf96c7591245e');

define('NONCE_SALT',       'd52f9a0b86fd2041c8e8fd85f7be1c10d8587abf');



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



// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

