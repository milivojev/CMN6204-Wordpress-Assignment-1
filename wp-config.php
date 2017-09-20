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
define('DB_NAME', 'wordpress-milivoj');

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
define('AUTH_KEY',         'o3>:`:AY$.*psg-@IJe8M.,AB>90b*CIlADlUTNxH<2xo1]mjO/GT| kbTMEsI@ ');
define('SECURE_AUTH_KEY',  'i%7V%:9,Q.fOQn51@?vBLIx|Wu.Z!feQ[ZSvnD~Kr;Uc5Bg %2-syh+cR!^(tCb5');
define('LOGGED_IN_KEY',    ')wJ?<maY8(OLkt@YoT.VR8.QB^GQko&}A:lW*NOJg,G`Y&~lO5YaC%9=j53mgH|e');
define('NONCE_KEY',        '4.>$VVdcI7QT`s!g-B(%:0&8Y9t^tE5.$e=!Qu-Z^p27UjxrIYKqNWyu.d`M/q{P');
define('AUTH_SALT',        'nwRt^5oe0yP<BS~MD~?FjrBG-VQE=h[Ltp4j3;^o_1Nn||uu*MC|[;c,&sNXPJrf');
define('SECURE_AUTH_SALT', 'qI_^@=s#Cv`1Q{[31AnS*gT[4`PD(&uYX0^e6tJ+f5g4d+nz~C%G_ktDMD*Zf<jI');
define('LOGGED_IN_SALT',   '|%oy<J6?Jkf~.TpHOQ5^}RILP{,bb>3,7hCfC8k!f,&[FHRFTR[+#]P~zFODp&`|');
define('NONCE_SALT',       ')7 CK4R@-HB)W#LlQ #zH(V&2;%Ez=tLu! =X~Pul_?2ANLPGwqh&(PR/Q<xt]A2');

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
