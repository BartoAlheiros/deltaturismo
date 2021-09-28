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
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         'k~$9[,oKFxQ*@@;x~vp-])8J[4.&,9RpMKpdUVr/ 7exPx~6F`VauoR3]&gF{TG!' );
define( 'SECURE_AUTH_KEY',  'NmJw4{obZZ_f8qv,U=lbpxw-CbYu`:p VmF&b~NKea+6U8eG7VsaZqveeh7!JWNQ' );
define( 'LOGGED_IN_KEY',    'SUOdzi%kYlm*hbf~$%F<u{T:bK2qMMF]Muiaf+%MiTMB.y.q?.KNjIYfM/!s`Zrn' );
define( 'NONCE_KEY',        '5l3TEB^f$`*vwkbS[WrTb@9%UJKn;)Y8st.dcqg`JOZ;7H=^;V~+aKo7J21~PV{F' );
define( 'AUTH_SALT',        't#`uA2)F6$?FCs0G-DtJ3e:Z~eF%]YqtX4A(;}n/jXI;kqC31u@xT6MDE+N(w0^`' );
define( 'SECURE_AUTH_SALT', 'No&)}3qb}2STq7Xs#hJf)~~9y$s!bQ#2*w=-BRo_wQzxqiZN[,vv-{Ww,3 p#u^O' );
define( 'LOGGED_IN_SALT',   'm;q~WC;%<s1Vx=>i}g|np@%=GTxxsSc#N*~%Ej|YQo(**1W&Q690|GE}i>5VQ&rS' );
define( 'NONCE_SALT',       'C#dJf$>nBAX@vM)FT?1z=7;=kyp7>*y6]i0 |&n1^iNz_Jc*(aa>LWuhn(:xMtxR' );

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
