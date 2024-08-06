<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '0bTd7G,[!dC-t&umcM8%j0N<GjA[>NGeH4aw;VNtI0wj{=0G~Q)Li@BzamD|&}_3' );
define( 'SECURE_AUTH_KEY',  '%4PYhzcFdF:I6k}3&^i2]lm|3$vQUQ/,b+{<A?A|_y T610sTG-E>wRD g)wfc<l' );
define( 'LOGGED_IN_KEY',    't*la0/]v==9#6[}Q+a/(*WJ{bC%w!]&3?vNtOxN<@e5%PBT-H%2|wKCR/9}DtcfR' );
define( 'NONCE_KEY',        '6tm,eD+^GIB&|]~;4#yiU-jI4 lN[uo%EDm$#INRL6=io0`yrr)JiQh-QmM|3_>{' );
define( 'AUTH_SALT',        '{qDgE<y=459W8_huam1D&;/DpAJisc!{ojI#6+jD`sK8A4O~/P;?xrjJM]GX9-4/' );
define( 'SECURE_AUTH_SALT', 'nh%gPc}*Ym)Fo>:8c[sZPq@2[?0>G9F%N7qpyIN)lPIjS){x8PXW=RO5S75}dX#v' );
define( 'LOGGED_IN_SALT',   'mI|dC7Fb~Zufpw{idY)WIT/qB,ZoW: f9#ZYX(//En-ZJz&3O|HmZ}]j# FcCvD]' );
define( 'NONCE_SALT',       'AOjCLqc)mO,<{=N:y(.W(n(&,@P!@28f60j*Q6 ;m~i|rpGbAeqd(qMCvRR9C.t+' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
