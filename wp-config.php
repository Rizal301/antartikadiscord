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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'cDni;]/07B$$Ttah}SwRlCnMJP(RBEH~Apf%ywD&YNV%qa*cZw;`mIeYJ}ebE<Z.' );
define( 'SECURE_AUTH_KEY',  '+:ST1+_Zgt{n2O_L(s|gm6[u75}1_ 9>>8YT;Zm~Zu_k `H ;Ps!{a)CWa6Q1rdA' );
define( 'LOGGED_IN_KEY',    'Qj4>_a.YD#pe2LBLS>JJG+jq[--E}BI[<WXS(G! EqlBh9PsbTDO[F>|:?D/m(ho' );
define( 'NONCE_KEY',        '[mO7yDxO0VZ$F7p-o=X>Mc!!@Z,eeO|V@iVm=+]xv{~aK03SrG=T%ki+j9?)SG!5' );
define( 'AUTH_SALT',        '8=*yD19gj(+Lj#}{?)v[Bt}(y~5$3Ldf(BDui4js87V4|&6%}|gTQwX6^IO@y5MH' );
define( 'SECURE_AUTH_SALT', 'sgh>R8&oB)r:FBSl/-??aO{z&9t3h(]a4vgG1 N$RP8;vO(/x2L&#T%D%N7T>F$-' );
define( 'LOGGED_IN_SALT',   '`Ji,Wdh}2dO+_}{_>HQo?^:+H) fgpEYBA|Xv[f.A#7nv8,6SwpYvwXH4be&#DPD' );
define( 'NONCE_SALT',       '&z6DV>;~P0hh/&SD{*1Hrlz<usJPxPdrbc)c$4SgIKKA7<SkOAC9u4I-AKJ5<rJP' );

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
