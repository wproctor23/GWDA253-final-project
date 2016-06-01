<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Leonardo_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'YBvh iJ{[?)&uq3DEUw%FO,Aa=cu$$R=)1)^drRU)K |tRy5^).]Ra,2Nv`xk@|U');
define('SECURE_AUTH_KEY',  'Mgo!a+S#^-4&;0Gpc-PCr=CG@1oEfyA||?>/ao{+~>f)U7l%W74%/<_1_B{0tn|G');
define('LOGGED_IN_KEY',    '43ZACJMlvUT $mc2ZthS5F8c0;b{I$0,I=w+HZ%[O^DB*kLS/F~xc&BMGL5-I9H]');
define('NONCE_KEY',        '}h!+(70-7{-r3M-TsDh_xgjZyS4uE)nL1|rCwJ}_CNN:tkZHmYpFP:gjfBq*-{1i');
define('AUTH_SALT',        'H`E%fC.4zM+<yvr7+fkry*ubZB8L}]R.*WmkuJJ95fbKn*Vx`4..vX2D?GQEl;.D');
define('SECURE_AUTH_SALT', 'M$M;y5{V/::%~kKTm-&EPxMybzq5>0[0e|%9&mf=N%RMWj|7)X[@e~H`$6}*uZ,9');
define('LOGGED_IN_SALT',   'QA@^DmJt@2T-{nELn+llL9:U$BZ/DL DWG{<gi($|HKL J~wsNQV^gyq6G+?@LHJ');
define('NONCE_SALT',       'cPSu@w8BdI)3VHoNZQX+_F,jOvTf>;=su1,Qw%ia3[-k]*9qefc]}TP-;U_t_;L3');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
