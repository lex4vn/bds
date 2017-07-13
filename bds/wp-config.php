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
define('DB_NAME', 'bds');

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
define('AUTH_KEY',         'HdF%J;LD1&$%%eZ^t*xm)H_c.hxbc{+Y)rnx?nJ]Mj:h%KOi9<EVy6Nd[C#p9Q-^');
define('SECURE_AUTH_KEY',  'pAgq9oV.)Sh&x@%MS(8W?=].#6Y!b-#5y@~mZP-7oDru;X2Oy0Q|3T*,m7m5S4)A');
define('LOGGED_IN_KEY',    '7rUN-TQ#`Sp5?8-2*ydqVKK_[BK.?!XstYMKWM0W%}Wi$8IQ*:w:|D#B]2*4L~o>');
define('NONCE_KEY',        '-:s3oh.!YfY!,VGK|kDu-/)BP8?kiBVDnc!CvoW:GLKXx[kg@`*FUW9=rtM=/bqs');
define('AUTH_SALT',        '$/;zs[Q O ?In)uk&T`q1SAH<H68j+@IXTkTkQ!qCE=U6TXSK_P@{r@jrQN1kL)L');
define('SECURE_AUTH_SALT', '{]Ly[e6_F^p1M/E3upvD;(Q5z6ef]<CsHYh/:}c,&c|wjM!! em-Ai!*Rl_nH>&i');
define('LOGGED_IN_SALT',   '^W[3twY6CtMqL~q)FT:4.G ;Nyt-aMdI}S]`lLd s4mn1vNLEpc?X2eTaGQ&f3!{');
define('NONCE_SALT',       ';eatOamO@ks:p%<rz9yRg>A1^Y0XOab1X! vdf XCpv|S=hY:>w1:%wuw~lOZF<f');

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
define( 'UPLOADS', ''.'images' );
//define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content' );
//define( 'WP_CONTENT_URL', 'http://localhost/bds/content');
//define( 'WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content/plugins' );
//define( 'WP_PLUGIN_URL', 'http://localhost/bds/content/plugins');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
