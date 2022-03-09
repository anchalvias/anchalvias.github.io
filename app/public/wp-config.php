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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9DOCwRtWC34rGGQJTL91jjdMM+Jww+6xlxORM8D08z64wGI/B6CrELuuTsaKrGisu4+XEtdi1c8gj1KmCKJ/Fw==');
define('SECURE_AUTH_KEY',  '7cSGUDIevQ53wEQq5ApPs9p8lZ8Tx1e19Ha+zmLnSMvGx6V47liQxS5SmE4x8NAXeQPr31cEz+OPM5DAQzpE3A==');
define('LOGGED_IN_KEY',    'Xm5a5eij7O/JdtuwCrzKTomBbX9VDbQG7sTS7+E28RBc9PTjC2QbRpnhy3wx72TlqWgjyXgZN1qNuAhyulMc7Q==');
define('NONCE_KEY',        'RUzDJqTXI7LbkyVFsYXcvzam2K4xLjTcCsCAKpy3Med2U3wFuV+beoIC2PUBR6JFShQ65GgeilHbOGynD70U+w==');
define('AUTH_SALT',        'h5hlk47nklyR7EP8DMX+wckLTDs237DcaNFGXnV0iOpzHj4aeReKdpUsMy0+SBnMsshsdPs1Ax8VDB43KQ4hfw==');
define('SECURE_AUTH_SALT', 'rNlyf7M/nVxOgcJQffvlibKYgWgdVH7peeBer8gauSAXnxg+1Pwk6XKCk9DhMULqI7MxK9ihd1jdvv4IM3fpMA==');
define('LOGGED_IN_SALT',   'ODDg4a7R/zLHrAgT4AjQ5N/ArZUF2xqwIvi4laEMhWCRb2buET7yMcEq3F5qsKO27yo2pjKoXWQSOXdYgvP3LA==');
define('NONCE_SALT',       'M49iaW0Z8s8ISUyWhElCrOwUnsxKff92RlpUL+Srg1IfErvO/rTH8RlBnazna4VnsYCmbP/vsP83qycp3QkWgg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
