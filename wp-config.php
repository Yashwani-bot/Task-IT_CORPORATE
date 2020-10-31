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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'it_corporate' );

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
define( 'AUTH_KEY',         'qm:E#M2<Ve&$n2Y&dY{(^#4T[?fy,(*rF/N5jOTwsY;9IZr/^^;zt@Gz%#qB&E!U' );
define( 'SECURE_AUTH_KEY',  'k6M72b+c3w}H?IZv2<J@abMhgoWU!l#F-5Ar]jg2uDJM%n#A[d!R?roh*W*u-yv{' );
define( 'LOGGED_IN_KEY',    '?8dAKW#E]&d%DC>gO4H[4U/zj^|fa^j9wbp+)/Vm!1cah%1WGuo?i[67X_<|-xzL' );
define( 'NONCE_KEY',        's%e[|[SQrV.mqQu$z9+fNbap<7~Gkw|sf9E{$Y]Ja4D6zlOfwrCmrVY68Ap6FkRs' );
define( 'AUTH_SALT',        'N3uT399aKHB^.bVt8<fS[DVw5qgf9QQQBpRA]|*!%R)5l~b8w0WOcab97HbOLYN(' );
define( 'SECURE_AUTH_SALT', '`> v^zed8+-$Fk-FTSV$<|_Z?mpyps~lD`XxuvE&hW9d?<@# Yukpb,x`)Zom^,J' );
define( 'LOGGED_IN_SALT',   'l33>A`;]ohG#nbFTv4MnUuV1b54dxEUk&/&nWo _e:6Te*e%-A%5rGK_t4=5rB[S' );
define( 'NONCE_SALT',       'f=IJmZbl/BHzO-0ORv9{h1HDZ}}&?yEfi@FH_Ds[/p{)}34&)J/ MzJ?-A9 NFzj' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
