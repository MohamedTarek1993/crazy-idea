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
define( 'DB_NAME', 'crazy' );

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
define( 'AUTH_KEY',         'ehX3?Wv0LJ*,JnNf.nt^-B4%SV ;CeG(SFMQ9+IT%y:KO3CbYz&k<W>c#RolxBT/' );
define( 'SECURE_AUTH_KEY',  '^j@qKV!}OOYMl>Ew&04HpIbX1$(%lA]{Lwbr[tz%a$}3`i>ke`^j{QU=>z$U}E21' );
define( 'LOGGED_IN_KEY',    '<(lW:HBK >MST>/4EqRkuK`Ea|Ve?g#A|1UMPPeeVgGct]6707WqTR+fZ>nF;Q]u' );
define( 'NONCE_KEY',        'wa4Z>X:{8a=wVea;]#a%:3]2FQF+}4Bx/hyV5E[/Ljm!}5Zr6KjFFJqEsiGRQ/6m' );
define( 'AUTH_SALT',        'd(9*]xNh!XH|b|t5S8=E~u8kzp7(O[%LYbmS d?{NKDNsn9~QM9?`[p_y14`?rHR' );
define( 'SECURE_AUTH_SALT', 'e~qInW=s-h)7(!hmvrxck-aBy;wq3+FPXvOKQt~b+?zX;JnyN[V@L|aYSsIT4R z' );
define( 'LOGGED_IN_SALT',   '3`96dJGJNzn]L}G0mr{d$Zk2pIZI+&B:tCN?)Q>)(/zovmuCQlkEZ~BYL9q(Pj8+' );
define( 'NONCE_SALT',       '4,&<;BrwxR%lb}.kxZ+lXRzgBfU/$YD,|xly7 J;-GM.#w@M-g];(f,s5C[^7cG9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cr_';

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
