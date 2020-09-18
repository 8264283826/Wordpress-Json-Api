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
define( 'DB_NAME', 'wel' );

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
define( 'AUTH_KEY',         'vZIA=@5]6Qd^OP&uM/R0+r-uUE/VP#x0u,yJdE4r-eSHtSpT&=-SHon%_J.ViptL' );
define( 'SECURE_AUTH_KEY',  'Fr=Z_iFkg[=%OFsgg!SR+(QU%v*p}:%M$qFwLx[UQ (CXX}s]<}5ss1PFFqUm(!=' );
define( 'LOGGED_IN_KEY',    '/^.+td/tS<bB~V3KC{}+b|ow4(1[whurm_sSnL-|&L~Z>N+OEh[]|+@k?e_9+m&]' );
define( 'NONCE_KEY',        'lN82$-n*^sN<Xe6&q3t4XH6nt+eCIz<hpt17$4A%c%&wVpG| FQyNwN~w:_DjUy1' );
define( 'AUTH_SALT',        'L0qvqhm#(4p5Ke<m$:<s}n|sB-Nk:RYyRrkiDp${B:6/qF,I,#GX%5BVT8%6L]xL' );
define( 'SECURE_AUTH_SALT', ' jZ2aFO;<N1 &!3$#~5X@rE8RzxT.4<}c-U{fuIb@XC+yzIUW+*G4[x6>yK(4p=1' );
define( 'LOGGED_IN_SALT',   'l7j&n$$%K3 ;*o|aI.]wM@Ho>|Ng<4q:r`X9+3_$c@dp*,w&.:K$eV<~ivAW3RPy' );
define( 'NONCE_SALT',       'Fm8=d38?SA%$2kJ`Gn}+lQ%C^X!$/azKPaZH!21P|$V_z]4dg7^{)+ec2qfPg=D?' );

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
