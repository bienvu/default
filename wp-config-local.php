<?php
define('WP_HOME', 'http://kennedy.docksal');
define('WP_SITEURL', 'http://kennedy.docksal');
// define('WP_DEBUG', true);
// define('WP_DEBUG_LOG', true);
// define( 'SCRIPT_DEBUG', true );
// define( 'WP_DEBUG_DISPLAY', true );
// ini_set( 'display_errors', 1 );
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
define( 'DB_NAME', 'default' );
/** MySQL database username */
define( 'DB_USER', 'user' );
/** MySQL database password */
define( 'DB_PASSWORD', 'user' );
/** MySQL hostname */
define( 'DB_HOST', 'db' );
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
define( 'AUTH_KEY',          'U2SnVW&#2aEA0:-3bjw[/o_%qP(#vl+BcCbRpVm`[El%ix:AF9{7g-T.PH.)w_Jj' );
define( 'SECURE_AUTH_KEY',   '-3,89`ejlnciFn4CEdkpsu.:#1~JHW:~p^emnDss#W{Rcw;nm|Yv9hB`aJq)SRcr' );
define( 'LOGGED_IN_KEY',     '076ZDh[H[?bfI3~%w-0VRqN^xdEh>ftG:2csY1-,G3p;}b+l%!cb6n<`0M2UMA2A' );
define( 'NONCE_KEY',         'tS#9=h+[~6l1:~3e<6rg6tetIZqtlYe zvqhxyv}ME:>*2[:XQUwLx?#Y^CU|JP|' );
define( 'AUTH_SALT',         'RA4c7|S5FMI?1y>)2*WcBxGKR6a^WiQlAj4MnF_|<0BQ$@/2vg9|;AH<tW&bPF:`' );
define( 'SECURE_AUTH_SALT',  '> Z*R$a iN|7g:)PYLDU:}9<VT%3k><TV]zx=K5Xhl#I.A( 7Q} e_rQYBT]e]/{' );
define( 'LOGGED_IN_SALT',    'rU%oCs2PFbzE9OT%jSa@8w,!g> %BeAh{=*KACY|A(U&0H9`bmT&1Vf@DaYO3dS)' );
define( 'NONCE_SALT',        'B_9>.,<20z9iijbxfU)Cpv`]1c@IN4I2 hUrJ1_>Wf~*.% `@Z_we6cyM*6mv~Kg' );
define( 'WP_CACHE_KEY_SALT', '5ilf/W6g/JJEz?q$}d9Ar!g~{#R+l]+AK~#Kh-At+28{u t6h~,CT6Aw!X(X~2m)' );













