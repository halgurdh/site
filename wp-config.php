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
define( 'DB_NAME', 'site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`Vijr*pYIqV*Oqis~lSzI`P-3m8@w4OcB-35#%t_061sbu5ONdRJ>4[$C81^>!RC' );
define( 'SECURE_AUTH_KEY',  'mgVFO,|>5%nXcdV)r77cigU~ry}w$Q?&_O[a56I;l(~|iL8r9 gb[?%q2G|;!wh:' );
define( 'LOGGED_IN_KEY',    'wzharjy]?@[MK^:K9(!}hVh=MUBQ#n*h.,-t>}v3-0cN2;,2]l^f Y7)QMADbycb' );
define( 'NONCE_KEY',        '0u:-(e$_LD*(,7!2[lp/=202]>GG$@nw| o$]A.Ez_]wH`rN.>p>=1sf(ErY8HQa' );
define( 'AUTH_SALT',        'y sSHed&xafrGuj0R*#KzLyySR1%=${@Q~{_MsArRPik)lhux`67o`!DBT0cRmi/' );
define( 'SECURE_AUTH_SALT', 'AIa^DZs=Vo*l7:{nrx?uUo3?m/(+0:A4nbSqX0En&]tD!`gq.,eI/zrL-`ywb2co' );
define( 'LOGGED_IN_SALT',   'Q[/fD<J<pw:sTnD.^o=hgkx,HS8Y*DID |O`n6e[{B@#ZJ5Ny5X=wh,Buc%PXBX?' );
define( 'NONCE_SALT',       'IF-Sd$2bW5*~qv618-%sE{]B`g q#dv4xF$+(r<,p[/nL:OKs^o=5DLE~m/$2Php' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
