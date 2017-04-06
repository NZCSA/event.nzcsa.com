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
define('DB_NAME', 'nzcsa_wp1');

/** MySQL database username */
define('DB_USER', 'nzcsa_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'Q&ayNE1ADz&h3c]sso~33.@0');

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
define('AUTH_KEY',         'N&Gj~m_FDGhuVN%LaZyE<Rr3Z*@+c8wn8d+T:[+j#4*U .!( ITy#BPdCKD/dtSx');
define('SECURE_AUTH_KEY',  'Z<aYOMO*8J>iR#,qf0<!=uufcFLF&6Jn]y9uqIvUT j9f|0Ez{$#`?{*mFOd/Zn[');
define('LOGGED_IN_KEY',    '&cQ/.Kk@}D`Y+}XUx{V`;.,n|0F/n8JSzJ_;7_M;g+0{ ;<W?zFUe3]oU*nQa7N1');
define('NONCE_KEY',        '|Xn@r1,un!~+{1 FDYAz%(AF}`v=C&Mf~GSTj!riDTyIJ-#,iFZ`ObjeOC=HuV_4');
define('AUTH_SALT',        'N+S/1^Hu((JT#|TIWMUIgAlvL&,vl7cQMZ2wPU5K-z=U&=la.[E^}>g$#siC[?J}');
define('SECURE_AUTH_SALT', 'Jv-K{2,=tn>xGf5yYt &d8.~.g!~nqnGcv/D[~8}}/OA,n 2VqLz?6d7=,].^B-r');
define('LOGGED_IN_SALT',   'qXAA%RlLkWf*|b8zfi!2OSnT8oAtKQNCI(q9[>Hev^dBR,u(htJilrC8y0-#[CGW');
define('NONCE_SALT',       '8szyEu@4@Y9*r:`WfkAVT^M d;!`4Ji:`gpqut-]iTxazJWEmio;yNjM@g:T<T]j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_event';

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
