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
define( 'DB_NAME', 'jock-testwp-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']QKvCI>zk@<WB1t@T~O1f6Y4:w%T>!Me%_<C?$0rN1l:EjeV7<q~/l6*G2+lu%J=' );
define( 'SECURE_AUTH_KEY',  'RR1R(bPHdjGy>:zw%#e,`nSc$tf0;EP2JF=b]+|FY(/O[]TF}F=j#/-6n>ta%/l4' );
define( 'LOGGED_IN_KEY',    ' c34};WF|G&yJ/XTK&I?ly=YTYX{+h-RhG0,qP~MjJ2:#P!9uGm^wDnK_|Ntx<NX' );
define( 'NONCE_KEY',        'G.9Ya<U?~K=0ucm{6PY*WL V)y@%Un3GF$<[%RH*|]5Ez61TXoXBExDw>)4eNA*M' );
define( 'AUTH_SALT',        'K>1h}TUIJk#__XoO!fY+;8euVFJw54A[.)izYq^dsUeJrFe$r*SXDrMg$l!Hq$-/' );
define( 'SECURE_AUTH_SALT', ',{B`(UC|vGlxxsMSGtQr;$-TSL WdAi[`y6)ET 1BK~5~#3$#weYtL20/$A#SShz' );
define( 'LOGGED_IN_SALT',   '0*7DE=.-}V<c{_T1ZVPI0<t9=}Yp_a7nv7@e*8$jE$XqRMAQ{S1UP2XQSk]5Z-%Y' );
define( 'NONCE_SALT',       '<AZ&4VQSz-198:~.65ISRQGg$Z=^2NmfX2:MN#,l!o6Fq5l}laN(M*MIs:oE1u)s' );

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
