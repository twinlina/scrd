<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'ss_dbname_d15e4kok3o');

/** MySQL database username */
define('DB_USER', 'tJfgMqB93dnO92R');

/** MySQL database password */
define('DB_PASSWORD', 'Lui2Kum7yFjefZho');

/** MySQL hostname */
define('DB_HOST', 'sonomacountyrollerde.ipagemysql.com');

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
define('AUTH_KEY', 'w);kzPT)b;^=hDGif?rkRueQymjHmwdF?L?}lzYW>!;S)|vVpMRn}OlGOlwfA/P_%]^K-f;DcX>+tB_hCVg]tGpdvaKkeR}F{@V*/u?kjK)*^?j>vuhbixVHg@rzVhv@');
define('SECURE_AUTH_KEY', 'VrsygJxI^l(lDOFFcx[Y-D|CLmWBL@{>cpUtswLXva{[[zVyE|(nAI>M[x(LNgi[yMeLiITiL|dgYefsmX@KsB^p$NHVWZqto/+%-OQ*@oioCfyk/Hnh]yb)h+uc${hk');
define('LOGGED_IN_KEY', '+k%a>)&c{Ml%;LefHu!TyyyN-O}<wH?GG*jFAaXnA!Uwod(K?fRa(sn$c<(HP%*Ln%Fw*=Rd<{]zZj!U=fs[M[a>D%%<MDYwU=]%M+[(tQOqmM{LgdV)F<z[_S=KpOhq');
define('NONCE_KEY', 'KlsJe-rf=>LbZEpEwCuoHkcZG;[gRxbgV$FhScByho{P<yfDi[!@MF{*KtoJ<S@^<<C+<M|LysI@vQJIXK*z][NuWePx_ptn)TuCEhGoKNZ=FL=$Ycd@!))ud]HL{!&e');
define('AUTH_SALT', '?S*?tbVBMqwFy>|g}AWRR|(X}WTvKph=;/A&XIX=;-gu-@hTgr><bUMBDXS&ODh+vpI$NdpRLYA/upTfNfKuKEGuKIpV|ZR-[t<Slw?x+bnK&>WkaOe;zhOSOmDthGGB');
define('SECURE_AUTH_SALT', 'K;U!o]IY_ToUej]g/)TxklSH=Kk{Pn<Fd%wz=([sML|@rzo^iICXV]*g?q-ZmWyhaeZ|LzIA]vEf[T@Q})Co*@Nmu^VS>r{s>!Tr;$@W]C{-x!|bmi!JmJXTuxVC>R*S');
define('LOGGED_IN_SALT', '?*xUw$g[x+LLVTIteH[hzhQzAJAZeQ[+jO^]W_UobHhxlrK}x}m*LYf}@}dQ_Jp^]o@Y_FMO^{IygK{))?C@ZlvImaQG))q-=McP%Kb(@%Dbt;OnJZAcYgBhxCSK{xxH');
define('NONCE_SALT', 'F^;st=xWOi{s}UsIPYq!CYd>usq?Ffz^%{iL{WlfVcsUJ[iECTYmqjsCvEBb--S@AHB$C$fvcpt=HIisI+*s|AqVw}JuSPmhGA_(Uy=qUs&!mKq&SwEt[e^@NllQgr$(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_vnir_';

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
