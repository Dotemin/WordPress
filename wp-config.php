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
define('DB_NAME', "orthocur_eclinic");

/** MySQL database username */
define('DB_USER', "orthocur_eclinic");

/** MySQL database password */
define('DB_PASSWORD', "0YX]}]JE6qHg");

/** MySQL hostname */
define('DB_HOST', "localhost:3306");

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
define( 'AUTH_KEY', 'jI#4<(gSZlrImGCjT}n;GL`.kXPIl3JK3$^Vh2ve%@JVX,U|H4bNhU+$]r$.j,3{' );
define( 'SECURE_AUTH_KEY', ',kr8SK95u.|<sqYb?Xl3u#Vf{c>MqHbsR (Lpj|@LhAOreEr7i~pqyEiLKWE7kH/' );
define( 'LOGGED_IN_KEY', 'T3`zJEF(-Gf ;F5GKJBkA#+j6x)v9LcnQm7fK>Mm`+EgUrk!)O DgpEwe=90 RWt' );
define( 'NONCE_KEY', 'L(!cODd@J7+2cvhMPozei +i,gCtYZ4J-DWpAj&if_e{}p8~+zQW,Xwo-p7B(=uh' );
define( 'AUTH_SALT', '?SG<c%/ebFe(b.T*Z:rsln=cRq6F72]n-$+i[]zW[XN]a_eh8;`G3HNjb]s9a_1&' );
define( 'SECURE_AUTH_SALT', 'Tc+_jQnv),?9wZ0JaUO(Ub8%gN8>guqujmRs- mAB~%/b<W|))m)-N5>{2{^DHoV' );
define( 'LOGGED_IN_SALT', 'V17H(VqJh|fNnrywGbZ/D0vj93+b(ZID}B2RobtMW>=Z?DvdOJ 3FI}Ve!86e^vR' );
define( 'NONCE_SALT', 'dN{Qr)q0-}J!!]I<4o`P?!foe$]R0BSv $e!1{IGeT569_?I(,?U<yxHQfX%m <e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = "15094_";

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

# define('WP_HOME','https://ortho.cazarindev.com');
# define('WP_SITEURL','https://ortho.cazarindev.com');