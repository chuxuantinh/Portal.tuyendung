<?php


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eonfivon_hr');

/** MySQL database username */
define('DB_USER', 'eonfivon_chutinh');

/** MySQL database password */
define('DB_PASSWORD', 'Oibotoiddoos6765867234235346');

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
define('AUTH_KEY',         'B7,aH?QUN[#5Lf,>SfC_E&4Uw>[)C.%+J3B88f!SOAeWPuJ45H.4WOR:69Xg R@a');
define('SECURE_AUTH_KEY',  'MznN(3r{y_,zxwYfOdk3gv4HxHcLs)p&_;2[e&:^O0zvQw>37`z5M9R5$9P$F%A)');
define('LOGGED_IN_KEY',    'R{ |(S,A<WWft:<)/r=q;R6Ue5Ln9(q>hcH&zDifP}Q%RoIwuqfzZ6r);6;8+AAw');
define('NONCE_KEY',        'x8F>&=SOcAV%:H;1wS|`sNxdq./Xgi%+;v(NdW/[Be3|c6cT^]6}Qr]v#%Y&EF?w');
define('AUTH_SALT',        '*M`#GA&(xqIk._1O{Jo4I?UhYjG/~=oi[r0 {f;&02)(tfsuG$TL>vWA?Qq@*8ed');
define('SECURE_AUTH_SALT', 'QEq ~lXI7/8=rjAbGobfUAmvmp13~zi Q^l@5gv/z b%W6j3`IY(<szky/WywTd=');
define('LOGGED_IN_SALT',   'NDC6vWh1pwg:5jbE&7rF4vuzQ`f=DtYt 9_3JXr.P~7^af[cQL9,/G{eP/t3XA;(');
define('NONCE_SALT',       '99%FZ@._^,O}i+TRqw}|7TgW$2yMKpn}?E7!{h3v>xf{dmgcKjpYOR@p[2dH8ha|');

/**#@-*/

/**
 *  Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the  directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up  vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
