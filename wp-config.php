<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'colbeckwedding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '85375975');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Remove parsed markup ln>br from cf7 editor */
define ( 'WPCF7_AUTOP', false );

define('AUTH_KEY',         'S1=y[L)$jbcNE/9I8d:DiH;bT>mBU;FM-t}k3_<n[:SG.CEKGDWnC*=s6>voa|r{');
define('SECURE_AUTH_KEY',  'auhZ&N&)P/j/0FM+oi(Q<;#o/IPWfBpgrK_0=t`eFl C8-|Rmry%A;9=]N+^4k)f');
define('LOGGED_IN_KEY',    '>&TUmek!rXW|l|w{5LxlL8Sl]z&<_=6jM$BZbj{al5DW/Zcn;vf[l*]!u$1Xr?7?');
define('NONCE_KEY',        '9NB=T&;1J=+htiq}9/%YqLai&n.~0whm<*-EVfS|bo-:4<sx3?Lejr(I{ 2>`!PF');
define('AUTH_SALT',        '%xKLU W^czN1X3aZx[oQ<qXq&qQ:=Og?eh9zTamY|!]n(14N1R>Yg<fr<|PVR5KX');
define('SECURE_AUTH_SALT', 'RHP-#>)xWy 9h+A7=R8p}j@u&wp=f<y30l2PqoD_#Fi -TjI,k)SsugX3j;+]izZ');
define('LOGGED_IN_SALT',   '|@e1}[bQ;p~!62:o#X?nRb*18G([+Q/GwG:lTr#hWjc21>w)Gyg]c(`3(1Oy4g<Q');
define('NONCE_SALT',       'fdmQMkS-%7gT2u]Psv39dV2|s77vq>;HmBy`wCVkI8K+V-] qI$QvZ.q1ftp0[A|');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
