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
define('DB_NAME', 'purbasha_wp1');

/** MySQL database username */
define('DB_USER', 'purbasha_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'X^]Q06*wOnKwP2XJN&~91^.7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'g3Eymh3BnzNttzMEWwZa9a1cFq6fKTRzikshnzwpPHni2XFkydBxlvecCHNgnIGF');
define('SECURE_AUTH_KEY',  'ESFhSRABFpEDPM41lboZT93kC58MxbUWQWUEZ0Glw4tqXaGLAxzQxAwl0aCMAnZM');
define('LOGGED_IN_KEY',    'dQH2ZrX6sFljJDyYTlyQ0Hclj0btOrMOLYIMzqAWMgahBvttqdBomkpBx8hck62X');
define('NONCE_KEY',        'ELp8m8S4AYJnZyqZTFmnLjgQQWBOI55WR7nUaHpp2yDKBguuXqJZLe5h8RZQBlg4');
define('AUTH_SALT',        '1pehHjjMxXbfOQEl8J8d3WvwVqDUnA0ss88ZvrB8tA9VZDMdmMPSR92TzyEIALcw');
define('SECURE_AUTH_SALT', '5d75Rk2XgIhV0Ol6v0BNBc8kVlxYy67B7CrcuBARIL4yg2aTDJQlhNY3IvQ8RrzI');
define('LOGGED_IN_SALT',   'DEL3iivUxEjNqhU5xUlINadSammL5iOa0o5ozcEyCDCRr6q25RZo3OEp4mZQse7Q');
define('NONCE_SALT',       's7ad61DKmUegdPq0Wb0Ks3aJcEKAyzyyJtTd71hLDdfO5IKGVo2UmzJhomgNYh0q');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define( 'WP_MEMORY_LIMIT', '256M' );
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');