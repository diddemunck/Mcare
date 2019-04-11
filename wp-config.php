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
define( 'DB_NAME', 'urbandenmark_com' );

/** MySQL database username */
define( 'DB_USER', 'urbandenmark_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Diddeurban1' );

/** MySQL hostname */
define( 'DB_HOST', 'urbandenmark.com.mysql' );

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
define( 'AUTH_KEY',         '(eaKZ.<%*O5VP{jCRMC8z!)-T,sdt7=?%K|.;i-},L<62ZvETbwn|WG(^Ny++oNN' );
define( 'SECURE_AUTH_KEY',  '|TP>VXQMBa@maZj2 :_uSp-1F.)Y;rh:jryoo1*$-d:XSCJks[{D]Uk7@^c-FMoz' );
define( 'LOGGED_IN_KEY',    'pI8L@/e2odM5s_9B.,4%gO1zM?)B$+(,ndESXS/-YgyDI^p0>Sqt9#nOmh=xF{+I' );
define( 'NONCE_KEY',        ' #bkZh{u`#B~JUIhr&/$RK*f!j ^jNf+BWb)vN`^$M,`2|4l.OmlzNgkU-JDG%[,' );
define( 'AUTH_SALT',        'Y~Q;:i&q>&d?+N&xrxg}B# -[S0M,V(zT9>W%O2,POsI(Wx8#$v3Ks<D8^_*C6S ' );
define( 'SECURE_AUTH_SALT', 'w4G.of0/:YN-K#qj3e *x7-(u$?a,~cFa5yxiA*s2,@$[-LM|ilJr{zL% wFf2-(' );
define( 'LOGGED_IN_SALT',   'ge;$f!chW,#lX!}P_i+kUp5QfsjPX5w#^vK^AMu6uLipcY(*)V@F/R{MZ]`ij9n5' );
define( 'NONCE_SALT',       'a{ujiJfo2;pY s<{q uhWSn %EpK5cwb1IZ{^exT+:l-{~j`rgxrd#+zC7AFA/1y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mcare';

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
