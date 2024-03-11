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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'vaHNz`HQT4~[P:a8/p7}; n!`..2ra52o.iDA+It.|adC}I8NsLp,>6H7*KV(hpG' );
define( 'SECURE_AUTH_KEY',   '-g!N;XO!s<bh0+spQm|1t9uBAEXDiY8cgrIN&2|Oo@UFvyuTsS?vei!Ia:a$Qe#h' );
define( 'LOGGED_IN_KEY',     'Te#c8?coQ1zOQ.CBiLYe*<>ReciR:)ZT-5%PA|WJ)nZg636_g@S$OK;Z{8K0t ^T' );
define( 'NONCE_KEY',         'U-{/N;5WFKqP2SK:(E 9TKc`<S<Vw7#1mGShx;FK]Me{@=.z]H*x5gf~*{,^k{au' );
define( 'AUTH_SALT',         'Y(.AQm7#-1s#yXyjf7ViXrit70hj#gZ)Jk$*!45TCR7kZ]&uxI&*aSjtYg-b;?M.' );
define( 'SECURE_AUTH_SALT',  '#{IPmih~U3`Ygu9]I2Gwx@HmcOdr^}RYolo fN98|{cxneR#(P[fzv3xD6v<:e8S' );
define( 'LOGGED_IN_SALT',    '/C78;9v*woiU/4J $n}Y C$rkR J>Ha`4@zgKkXAq.7jGcDZ;ds8njUk-`bjdJEV' );
define( 'NONCE_SALT',        '1=ZAIo#nnxT{?,9C/0Vw9xZ:Y]Ye(2LGx={t:KH0V+aZn_}-nRVRp4XhYDkF.0T&' );
define( 'WP_CACHE_KEY_SALT', 'A}YORqmSI,g{F O|0/;0Rn_l(K)xxv<}Bmi@_2nFOv?><CHYLPIiz^]rm$YO7a`I' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
