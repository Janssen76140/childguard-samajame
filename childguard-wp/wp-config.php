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
define( 'DB_NAME', 'childguard_samajame' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_POST_REVISIONS', 5 );
define( 'DISALLOW_FILE_EDIT', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i|pUH3Zy@Z`}BCC}l/X?BJ[n/v`d8&v|D)8u+*&*Kj.q3xzZ! Xy,6t%jnv_,V6%' );
define( 'SECURE_AUTH_KEY',  'rJFio4$(&kUaik2bwsyn|eaKF|dl/F~4X(*VbYS^ip;~nA5KQffwYz~#rrgBGp9u' );
define( 'LOGGED_IN_KEY',    's?1QJl {TYX%-(S!hOIIii~?X56ufVO|w>D<Cyviydv`aU$=@ICp0l:;0|C/cy]g' );
define( 'NONCE_KEY',        '.:]y0vYfD1fAyHi#LC4DG><bCO]R%X?[s9FZpoo?N v2:D$Y4!IrD@8I[Dm*LTY&' );
define( 'AUTH_SALT',        'qiW.7E}hYX7_)NUS3XS3z@ol}k }vc8~]0)+?$lNtUkHkz%U1:V./0!@1LR82$7>' );
define( 'SECURE_AUTH_SALT', 'c`%0FwDq*LQivwgZ~S*DpMKy_]e|m;AYxlnWAMPz{-Q[7~]`gm&,_;JrXO<#YQRW' );
define( 'LOGGED_IN_SALT',   'gFVe0N$B0ti69Vwb2|V0EOo$$@6}g6O7Hy?FI(m-WkuUUe,! 3WeS`_jRQQ2</Er' );
define( 'NONCE_SALT',       'q~6on_5dv!2&*UYCP6KsGIb4B:Hk;4Gj8BQrP~9{v.@{vTGSS^#{iNad98CJ9|@i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'chi_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
