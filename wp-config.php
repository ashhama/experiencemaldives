<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u703710965_experienceon' );

/** MySQL database username */
define( 'DB_USER', 'u703710965_experienceon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L0gm31n123@#' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'A:O1& f3Di-%&%#u-G-@A>KmL!`j0MGy8?b>??{|o)RHznuooR/<7{#7n}q;Q1~9' );
define( 'SECURE_AUTH_KEY',   'ADUKMO7z9k}^FS~DwQfWb&s7osTl+$~[O,=4B+&/kTlL3KZ)<uALuaPgMOI-R(u*' );
define( 'LOGGED_IN_KEY',     'l-|p,P^?CFC@V^o[q/pf8&FzJ6Mn(fP1@|{Yx!8 F1a4yTI4-ZvPKa]a:n9Jwrfj' );
define( 'NONCE_KEY',         '}Xr39GFQS++}+GkPuan8spN1cn3|Wm_~)-#Bcj(gpt1lT6aGnIR90h7dbIJ7s:vr' );
define( 'AUTH_SALT',         'hy.sqJKd]L.G`p7^u)U@LC[!CD%#jI+9^5Gs/u;#Y9HpxRmw<fYQi6#TS%B;N+Q?' );
define( 'SECURE_AUTH_SALT',  '!$RTLA ; rPp%g?7dW08br` (.#/KQb[RZtkJ6OH&yxzn;v|*D^n5dY89,f>7wHB' );
define( 'LOGGED_IN_SALT',    '92j3!ypWTkOO4}a(7p5zbFUDv|%c{~EsS~>`L*e=a7wvAbj{J|L^+]c.:=IuR3b0' );
define( 'NONCE_SALT',        'O)Cz^9B-3H2p3ghWWO&Lamvo!SseG|rt!6df*$IK;hZJje[jVErEr4rlli>ph:`[' );
define( 'WP_CACHE_KEY_SALT', 's6v/b:*~kxTKrh]{G&IQ  i+&(;r6Ok>3cxG!!cM3q3p~@?0WrR:Pk;4@eg:?)<l' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
