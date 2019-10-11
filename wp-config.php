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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'f;M]]U67glBP[D~=!7wwJ6KKNp^=,}PlqjxwZy@X1<7tX3J(u:^e=^u}/a9DH*U-' );
define( 'SECURE_AUTH_KEY',  '[p5.! `{=q/D+k%Kz*-%|!,]-mjuW|$k:=83i{;7yIfk)_{rb`)^GCZioeeA43Jm' );
define( 'LOGGED_IN_KEY',    '7J&.J31yL1?jE7vC1!x~:6}:mgWI4sL0[ipACYt!E#P*[yKr;bjG27od&$3q|nug' );
define( 'NONCE_KEY',        '^f4Y?foGVNUOszZk!m?TKc*]JYg//c^;)D^P|,4z*?R%KEsd!dS.jb(d(*7`)5of' );
define( 'AUTH_SALT',        '2;wE#J*n1pePm1mlaL{Yr-`J>(_P[CY3Vm9JfbxW(LVu`b+Y;mh{]~EE6.0Kqnv9' );
define( 'SECURE_AUTH_SALT', 'hEzV)%ezsn*)TLo@/`)/6 2|K%HUMdyKylnCP0bDX[ 0(}P8lW+saiUQ(0U,Va.p' );
define( 'LOGGED_IN_SALT',   'G8rN6=;wpmQlQ*+8Uag5jFyo#AqLLCn69hy=v|8(-31a65X$,tZ9tR#}nB2Q$e@O' );
define( 'NONCE_SALT',       'Wh:F@j^8tH)O}Rbgi^xxR5pAS]cc%ag=ElXJNR8nGp#u6}<uB7dV|T#n#r:b= gh' );

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
