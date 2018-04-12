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
define('DB_NAME', 'starovecka');

/** MySQL database username */
define('DB_USER', 'starovecka');

/** MySQL database password */
define('DB_PASSWORD', '2ezjK9G4Ik');

/** MySQL hostname */
define('DB_HOST', ':/tmp/mariadb101.sock');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^-o3@7SdWZR2mAtPs|<A/95~GP#5-!-A2Gy:VQMp=V8GPSRzkZU~zMpod4eW?^I ');
define('SECURE_AUTH_KEY',  '3m4~}qP0@Mpc.=$|FtdlwSBl9F1}c!-6UHe!}kIT=,yqz<)TD)z2*kM7!mj~@;8L');
define('LOGGED_IN_KEY',    '}XIx*OD#drjK*Bezb-TvJB#dyKg4_M271uX155cXAW%$7}Dc~#XxWup W%f+i3z4');
define('NONCE_KEY',        'gtTw;n?ybn(oNqO6,]^iQ3=/:2CX~nZ[!C/fL*O/spJ MI#;Y+W863tWs0m*G_UE');
define('AUTH_SALT',        'I}mKDk^2]=Fbf-;cS.9x&o<koQL:5?Hh@Vj(CV(c)_DNH0SA#^LULCvLh8%KT%#v');
define('SECURE_AUTH_SALT', '!B~lv<@2(glS5{@8FXm9jH<>$hGBMmsi^<t4~C-=1,{ouTbDol^&y CCKsnl/+m+');
define('LOGGED_IN_SALT',   'Z?9p)gJ(!peaLgG!ozs)2s0P_QKB.W6 Q1Z#u$v147+s%%;z(Evw?6F%S>7pI]<+');
define('NONCE_SALT',       '[&|/P0uy8y-wbIMA|U3y6jlvy:$KMag /Z7$5LgJK*ivH,:#59N4_03U/n0>X^RQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
