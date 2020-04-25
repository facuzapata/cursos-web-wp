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
define( 'DB_NAME', 'wp-prueba' );

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
define( 'AUTH_KEY',         'kI,vvmozJ1?lmrM9r<^z0i[&}Y:Ce?@HB]K_:N4/R2H&5JY.G_n~01O%hl&/^;)S' );
define( 'SECURE_AUTH_KEY',  'Gh{4Xx_r!9:cWAQ(&**$Gw;LwEya(I|F=?ed Bb9n`.sj}-%,7onpmSClW!,>KpG' );
define( 'LOGGED_IN_KEY',    ']#I;YL)4F!seJuZp+L4DCtUf,kD+QIu)b?O/!Bsb@+_(ZEfhp#}?te*|Eh2L4y1b' );
define( 'NONCE_KEY',        'D4&BI8 S?KN,V<!;PC3^8,&S<Y Com~~LuA7<LD:kFGKfmf;qt}qc_Lgj+HR52DX' );
define( 'AUTH_SALT',        'Nyy`EpM5j5@r~I?dTD,]c;d=,2LWy6Y9s2mE|uz~5}TrJib_-:O9? lvl-sUdNgg' );
define( 'SECURE_AUTH_SALT', 'Mdwp1w/H|b~A2iz%~T[/Wk&xi=O3Va9}&*wi8.qp.-&:J5uhQwp7 dw.)v$}3i@1' );
define( 'LOGGED_IN_SALT',   '+=A$1>KYWijXnSyt/~1cv[F=:;~p!zmsy1MnH1{a)z8!NILB}dZ:WvL+R4Jm`~G0' );
define( 'NONCE_SALT',       'Mt#IqzgwoW,?ZpmT{:nDZVX6Rvk$:Ek%$mo[mAj|nxc3BR0*Ei?2)h|3=_^FfHsW' );

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
