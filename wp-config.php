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
define('DB_NAME', 'trimurty_mrmtc');

/** MySQL database username */
define('DB_USER', 'trimurty_dev');

/** MySQL database password */
define('DB_PASSWORD', '6TP%8~m(QDUE');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'd/iLnd|4,+-vmMz-Jx{Q2)R(cy/Tc;_ZklN^i{1R/9L},wBs7S;Mq)={dy Sx7,!');
define('SECURE_AUTH_KEY',  '{0>=bJcoU/m4Zdhpou+HTrBL+s2SSaAmj4m2Fj^C$6so}&P[b|fw{UfND?RoWWmN');
define('LOGGED_IN_KEY',    'bxSko-iObzP~is1%F]Qh9wKHx3I0KJ$nzqdiPR6|m6bR:|s}8V:qQ;/{ToI#;@MK');
define('NONCE_KEY',        '7eI9!yI]5G>Osy;/<x#OS79_Q(/;=ZzoX]#aCsT]U4o`,yktqP5}DZ4NcBS^rxr3');
define('AUTH_SALT',        '&2{lV3?:2l-fSoI5(<bDcE@)*It#fXwM_U7jO)J=BRXv-_jl?Q@v{5vh%CEY5SQW');
define('SECURE_AUTH_SALT', '(oq/XydKhp3.sPf`fBg4Oho!Bpmlh.Xm=,lU/o3`pd0+:)[-qP|r#@e)iAiVT(Md');
define('LOGGED_IN_SALT',   '#f?@F7Ift_C)vSQrb>>1X/dV0y8V`DA>BCd[hfKKvAxLUt:nP VIpF]G*@A=/5t?');
define('NONCE_SALT',       'xwrASc b(}O}17h!XrtKEOcv[_(6xf]Z,ud)52T#q0BWq0qt`&<)cS(. LM2phJc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmr_';

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
