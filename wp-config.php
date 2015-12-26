<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db567379936');

/** MySQL database username */
define('DB_USER', 'dbo567379936');

/** MySQL database password */
define('DB_PASSWORD', 'kcDd9rGv');

/** MySQL hostname */
define('DB_HOST', 'db5.db.1and1.it:3306');

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
define('AUTH_KEY',         'Zzf!IaMiFNu6i&zppI1^qM(q!kKQH0438Vi$0NEzqWg7w&pH1QsOEbOKw((Fe6F*');
define('SECURE_AUTH_KEY',  '8&%^r#gapqUK%F!ylR6C#mwFss@0v0u%r5o9OoqXUVGyY4acLD5b%L&guOjpxvTg');
define('LOGGED_IN_KEY',    'Y5637gXzKSJg!dbzn^p7uqrKl7cg5MDiiv7kHF0b7ux@U!PE6V&^KBm3ef$MKPNY');
define('NONCE_KEY',        'vtxxgFUKRCa4gUWXch4J170YHJBO@fBq#HDercGgjeTXBEEuufpv^G3jtIo@r79k');
define('AUTH_SALT',        'V#1v7PIH8S&qBNOch6VY1g7Q4IBbk(sJT$UDmjWi#vK*JVO3UflevIdfq))k$3wx');
define('SECURE_AUTH_SALT', '@UyEruc8isNFV%9Pl6SzMKXAzeP!H6GL1zTtdziuOwJdc7BzclFIr&zL#p@Gs(UZ');
define('LOGGED_IN_SALT',   'Rk%#oyxR2&%ZaWSXk5y!nB37)qQoupWrOlYVkqDHwrjS3e8iOOS0j@Eb4EK7E2z#');
define('NONCE_SALT',       'j0nCswV@REOP%T$9mhAvtPE#BZtidLQxtqVz8HGTQ45M2E5ka7XpyH7UP!2kfGN(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sh60sjtw17';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Disable the Plugin and Theme Editor.
 *
 * Occasionally you may wish to disable the plugin or theme editor to prevent
 * overzealous users from being able to edit sensitive files and potentially crash the site.
 * Disabling these also provides an additional layer of security if a hacker
 * gains access to a well-privileged user account.
 */
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
