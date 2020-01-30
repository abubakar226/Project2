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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'h;/7E{A,qJXn%<@wA3~ZC]vbG1uQ`|whCwEFL?yrhzZ2i/-a8SIK?t@1RA~#BXr~' );
define( 'SECURE_AUTH_KEY',  'daJeo<OyraN=]ZmJI%!nTCm$a~1Hj4N_:kgqk]qB1.!lFGFJC.Z~3<~Q*OmaYawM' );
define( 'LOGGED_IN_KEY',    '0+rry~s=g3g1TpCi)r)UrIGj 18x8Ep+&Lm*N+SRlmR3-S_HNL83)bB=8`bf9TeB' );
define( 'NONCE_KEY',        'w,A~d0DnU=wRA/eSry$U>u#+7KQ}~*%eE&%3iKh3x`v/3e e7@viDjkb#;/p@iI!' );
define( 'AUTH_SALT',        'uXcWd}o_cJC%/#/cc.w*~oCQK/!pmOt]<^C+Vk~As_{bv$i]#S}ID0`TJr0<0}!%' );
define( 'SECURE_AUTH_SALT', 'qHESejVK0(Wi}>1T#:i;<=yc(fMv?)iU{|R-+Pt1+c$aWv.x}j^n~2>2J~W63_I&' );
define( 'LOGGED_IN_SALT',   'z1yO7Tw5{Sv_gLceGPpf`vZl/c8wk=9V4(F1H{*hSqZ<0IuH=m|&Z:h-J%y`-FZW' );
define( 'NONCE_SALT',       '7_T1<a.TRWm.&G#Z{CAO .xAt+n/$eyxRGI@ku|>=F?pzQJ+o#7A?TnIHoUea}O&' );

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
