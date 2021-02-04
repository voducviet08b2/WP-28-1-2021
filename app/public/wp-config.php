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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hPr4Lh11bma79evDXF9ciFEtG9TjVqO/oMg8b0N+j88mQ00Y9gBdlYZ+o1UjtCehredv0FZF4WDtorSTX2QPZg==');
define('SECURE_AUTH_KEY',  'rfYsT0/VsIoq94ZeSl6h6v+8e+54TppOSftBcxyywLguEzVZEdrhFFrc/k6ACwocXb9hl8DwQ8hsnZcM0eaL6A==');
define('LOGGED_IN_KEY',    'vYe/Q2PXmFEzz4d0tdtAlsucEuDAqSKuAwd05bftuMGew3HjWJq91EwB/kE7vUcDaMI1RbTCj1h5qpyqHfaO+w==');
define('NONCE_KEY',        '71jxLjEczjSYxd+ymE5R+dJp2iG4N0AKADvpfKaSuO/oWEaTPlCn4wmcVTyfh66VcnSA8cTvE888zw7PHXEdNA==');
define('AUTH_SALT',        'QOreefZWGmkvSvaON8XYm72K/qN99LgULlA9dGcMgIxXJRunvmlH2s2SYeZon2ze6fSOwRF7COZkh4QbaVO6WA==');
define('SECURE_AUTH_SALT', 'S4SD8EECuPUI8vON1rtm3LpCrYBypYxm8cLPbr1/DIYaDFDubAwuwLB2oA6SbQQKtFtcknuHHWL/HaSBz0K/Yg==');
define('LOGGED_IN_SALT',   'i65sOxEw4vSvFfaXjJAOIcuV2u2kGhJnSbQQ/QP7LFm5/NKgAAL1lWVhkEgWTR/GWAsndfyHCeFMzVXhjqdXoA==');
define('NONCE_SALT',       'wYRPSHxHXuwS2qdHdTsnYf4cQa6MkQVQLSixrFBFPwWdXqV+UCSSBBhqYuQJ2Fjid9vP0BUtnugIS37p5va6OQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
