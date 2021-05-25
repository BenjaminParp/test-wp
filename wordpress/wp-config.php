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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',          'du7=DuO<^+QGuK;XA{{hX89cNl:4Wml<+LHxeB(i sKjUK_DX%@d(#SI^)?iWQo4' );
define( 'SECURE_AUTH_KEY',   'q9L>iRL)Ou]CQ&jy9Yf>Z^OPolj|D:$wgaT&4P&!&lb v$Lm!w[WOmZ{=<2q }3M' );
define( 'LOGGED_IN_KEY',     'xwDwjM#gLP#`v)d[v`7+`qZTYkCm-&A!wO0=s>C{fawrH3A$4GJ|m95y2V4GC<d)' );
define( 'NONCE_KEY',         'OwY!x58R nR@uKPrY};-W&KDJ,h`0iQU~Wvn_GM=0w%PN4j4<I3X%F.rkqU7YC?3' );
define( 'AUTH_SALT',         'Y=@ %s+?^M&QP<J.svk+<Gl4J7}u2G|ET,_8(.e>m*b0%.cktKFlJ/;&?`{-sAlK' );
define( 'SECURE_AUTH_SALT',  'aHt903s$i!qzp@9VmX$vZ+h, PjGa/poi76Ip6[M]N#bOvbH:Q_43z%6zdHBei G' );
define( 'LOGGED_IN_SALT',    '}l6Q~<`cC-+JYe3l(Gp>SgCvIl)=zX;:3i4~#hVYl{`P%MIoB|r;h-T9rLvwPLqJ' );
define( 'NONCE_SALT',        '[__/8IZWYs]wS c0G*%lrqd*Sb*JcrqTF!1BK;*hPxJpoaZ/ree2{8 Fj6+:4Ja=' );
define( 'WP_CACHE_KEY_SALT', 'E7^@NwlVHKxM0]*k+T#@2-x3>$9}DIZoSWJSW %ZhV776qlDWrj1> D2r#a+iY 9' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
