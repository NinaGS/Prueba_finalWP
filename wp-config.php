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
define('DB_NAME', 'prueba_final_wp');

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
define('AUTH_KEY',         'S !h}8i/}_Q*R(&bE+u@8byql9R;#:SRPZf<l7)AS$&Q;rMJ]&P:{8SFTE-?p.?`');
define('SECURE_AUTH_KEY',  'tIAO(K@,iuJwghaIM=[]^|[ AbrKv._&p06Nnt}] JonpgWu;` 9o0~I!75w>t$B');
define('LOGGED_IN_KEY',    'Sh.CmI^vZ;SgFh4rzP.G|]O]waPR2}a6#)pPw2#I_BGBl-imb]si+8*O]L/uiWUh');
define('NONCE_KEY',        '+i~m5+5(mXve.[*cgx?=nXeXxHJeBqH0I0Bg}6ZFR@k.Q~_[`nh{aWY?/*53T/5M');
define('AUTH_SALT',        'nWhd^U-:=+JWKx!&fibpDk;Dx)*qS__y F g)g1|ls~I7GLU<7(u F)A<YpEs0}.');
define('SECURE_AUTH_SALT', '>>1Y6VdMX@2cJPQ?J*)]`.&8na#Tt9+=rAv AoOLodV]!M8ooNLBn/!N)7B!8H5)');
define('LOGGED_IN_SALT',   'C{ naHBMX-AGyAoji1d?_c5dM$YM}]za$Yd)T{oP*[YS-11B1oG3q=.,T<O1:XQj');
define('NONCE_SALT',       '-T;I(kedQ_cinny7w6UCv40GIsRMP~(#e%KDJ8o#ZVWL7yVdhM<F_W_!0M%#:kv]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
