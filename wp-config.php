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
define('DB_NAME', 'blue');

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
define('AUTH_KEY',         'YL]m~I>%2ciGDi-S>}(c;9( 5EmFQDvngj%g<F^*F8l%1Dq1Hu}j)6:81tmzN5{h');
define('SECURE_AUTH_KEY',  'b;Xr(oh4Q~P+ap{R~oUHp1LEpe{1(EW.#;=f82213*=$S2c|P0ps}yF>fcWqJY.,');
define('LOGGED_IN_KEY',    's%N)_vV&`qogAm!+CG1s]/zk[KqH8?FlDTPR>7p3J5{2)a9h#5]}0q@wMtVyF}?D');
define('NONCE_KEY',        '2(ulnJlb$3gZIPa]-Qbd>WktuWM7V6wnfOGvCF{,ysSgh!V==QKVHnyBd-nPbJ1w');
define('AUTH_SALT',        'R|zL {~v(]3TfPi>|1C-Im~ Irc+s7w,y. r|)grjwY^,WV*nF4VEjwNemw/!~ro');
define('SECURE_AUTH_SALT', '~wy()E4O;1W2xG*Nc~pweXn#2tHDILO@R)vR+ ]<q%?+buOyv]T+SIV*Tcj~]p5.');
define('LOGGED_IN_SALT',   'g{2UpE|Q&3.S%U<0kCO.OfG*^RLh06c00W{vJQO;Gp~3h3A}g5);AySENhM^;`Ku');
define('NONCE_SALT',       '+U3q)PS8?)Vo3b,zQYE!)?FY6|uvj| Xr#h&5;xHOLZFp >3nZrCGAzgk8|;/g=,');

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
