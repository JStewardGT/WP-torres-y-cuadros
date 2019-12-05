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
define( 'DB_NAME', 'torresycuadros' );

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
define( 'AUTH_KEY',         'ud{sr)P{As@_MeKL1bKLo6MBZEl4j{~?r5^hk}5%d%i=lD=12]S9_&|yY@gU9Yl!' );
define( 'SECURE_AUTH_KEY',  '4,Wn}1~Npu|(4|hA;?smT/&d6F)z]v|ZX-AejF!HQB-YfLz~.lv(D|{]PcSg,Wyb' );
define( 'LOGGED_IN_KEY',    'Oy*a{[x->L0nU<#A^}zO-059)O&pMLQ7a=<$/SbsLkH75E@n6E67rpu3nY+8ETJ>' );
define( 'NONCE_KEY',        '+3I}puCbN}+~&(Z~#IZkf6|$mpkIx>aN.60:uetU4xLk`ttQ2_D7;AXW5hyiMwq@' );
define( 'AUTH_SALT',        ';(dfPx.2t*91(AgB^<ZCi$|FV{|1]C/FUZ41`Drr_svnh8F6=?q<sG_- Euwl .6' );
define( 'SECURE_AUTH_SALT', '{iD<!518_7{X`s-2PfYe;Z{@<a1l:wBFa01XPjsmLKKU/z5CJ&.$^c*/D<?!`h*!' );
define( 'LOGGED_IN_SALT',   '}>5Qzyx=<xY|!E@ztGd@[uWs;wc/jTS@9rGU:Qpb[sW?p<NiHq$~I/MR!Od@lTz@' );
define( 'NONCE_SALT',       'X6_71xY7jX>seKOe~OtuK1/Nnh@TRFx<rl%@=GHHzvRh|A&[{):vnv4g& bzWWY=' );

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
