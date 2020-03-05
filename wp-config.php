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
define( 'DB_NAME', 'thiennhan' );

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
define( 'AUTH_KEY',         'K9}?c85MYeY.opsG&x+-ap@XcD2Q+Vs)!/:P]A]W9.cK*-89<c`ICt:!^)Qi=4{r' );
define( 'SECURE_AUTH_KEY',  'N5) M]&#H4c1jaTO]Px#!7G[3eBmixNHE#47YW#qYP6~r6baOb4hY$3C/HC1-~xZ' );
define( 'LOGGED_IN_KEY',    'T+<jE8IIZ7Q6 -:p>6]1pp(PK4y)n-N(+@nOwN4$;$j)k706K}O/$~e~c:T^2:+x' );
define( 'NONCE_KEY',        '=,4Zq!.MOke1jrJBe:2?g=5 jpVxN=7.Skj_P!kYx>7L]BUM9t=33S^28{AGb#Q)' );
define( 'AUTH_SALT',        '-eed-QWmlDeXoW2go =t02#-y3?L*if^Y6LJ|Y|a.|k3oYuUTL+qd$k4ame9C#a)' );
define( 'SECURE_AUTH_SALT', 'xW:)5;=?<C{7);~CBZ#s7~[~Z]&QDX5o>vuFqcc*.Bu,7cmNxOI,_fKcveW(Phkl' );
define( 'LOGGED_IN_SALT',   'Ef9MOF{<taECtaO*opPJzb_46Zh8n%?A,YK(vH=6#V8!FO)j)<zsLw<zPkI1R^kw' );
define( 'NONCE_SALT',       'i00MD.jO[<T.Q*hMaq9p:}lQH*n)Jq2d+A4UB~:A%p_QD8(7FKuy_p6$6YEHia81' );

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
