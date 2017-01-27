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
define('DB_NAME', 'bancoin');

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
define('AUTH_KEY',         '9(#z6!e4XSh+M&[(G(]#TEiV7^pW{rO!FY^1|7RRq^tkQN$oi1daP1+)g.$xX.lP');
define('SECURE_AUTH_KEY',  '4{*l^,V`BkM* ]dQLKBa0%/ +6a;qW6iqjarC|V&_TjO-x4D=j8DVVCh$~%9LLlq');
define('LOGGED_IN_KEY',    ':rT)(-EI{JM:=>vrr[+U774r1% +6{(buRwTy7kM5f/qFFIw(v0f)a|AP.uUb,0E');
define('NONCE_KEY',        'oY;ytEInj?3]b)M{7qeVrf&$ZiS-M%)k}&.z.HGQw8wu0MJU=qHqkQG[pe5,)bDd');
define('AUTH_SALT',        'udzg[nth8)T<(h9$?,Wc;,>,rp0u!Rl8dbb4:N~g)GqJibzgIjeDZ|~xsPHxdFzZ');
define('SECURE_AUTH_SALT', 'T{y2eg<~/!0=/~_9xti><bQgbQR[QXk?a9l5DoOI[B,fyLjJSOq^jU~+Cdw}StkN');
define('LOGGED_IN_SALT',   'OR^.x}$?rOGfniwPiT@Rm|E$CJ[khYu>TADRSM`B5RaG}87u,PeseV[3Mhi3@AZy');
define('NONCE_SALT',       'd>ZovE*F%J:4k^SWT]gzeGPmd%GhojCpeM[CoP3X~Agq <^Vq/*%0s[&2,=-NDR4');

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
