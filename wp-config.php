<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'metarevamp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&PQ@;y=cd+@rGTB d|A^<:ru8!)&hH?,2hX9#V<>=Ut^k5r.*+4Ha0&9ypQ2|HG5' );
define( 'SECURE_AUTH_KEY',  'PkKx$aM=UrkR$*WnyyL6.M*]lO`X`6R|jih,]q=4%c_7~:ZoIOE]`>j`1[6mq7{s' );
define( 'LOGGED_IN_KEY',    ']k/&Yp?L{_Da4^,&ml6(H]6O(U+*lqdc2fxQU +3Iu@xbTdH~(IQL6*tPMtVXSoR' );
define( 'NONCE_KEY',        'db]Sk(3C=6sqIJ$+Hn|R^N$Zw*_Bh Pr^=w?9/_03g>eRzE`fTE8HMJHq;Nl]TbI' );
define( 'AUTH_SALT',        'h2V%Rk`D%>m6x6[.V-Gq6YaZx[h&KnWIJo+=zG(QC9a[w723xL/Km|W49IyHUf~w' );
define( 'SECURE_AUTH_SALT', 'X]{F9Z%5m0t/_]XP)lWLg#BN)D!cz4<iI31E]U7K8)W7OAJc9O5k_>Cfss4;Hht/' );
define( 'LOGGED_IN_SALT',   '{9t}`D(zB)$Xek5raD#u`E-+1*V-5mLXC@eqL_z|>(#pLeD1d?hkXRk& 0MT!Re ' );
define( 'NONCE_SALT',       'v(K?U:HTkTeBD>528Zj~pLKsRlVYC+ k6ye^.L$,LJ{N)m@@HAdMOrd|qd}{eGwQ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


test