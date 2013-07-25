<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'devopsdirector' );
	define( 'DB_USER', 'wordpressadmin' );
	define( 'DB_PASSWORD', 'reWCJUitZN8G8w' );
	define( 'DB_HOST', 'devopsdirector-prod.cm6eyojsvzeu.us-east-1.rds.amazonaws.com:3306' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'RLx_|rwnZpJntlUm4Ti-4Q]UMWMv]i^Rl$.hMD>O&)6P`7`U+?PJwHu?W;$RSLqR');
define('SECURE_AUTH_KEY',  'CnW`?)vLbQcgBsr&+;l$XW`SgPLQNo-~4%I7dfDIBhXDw=i./9b$<q2yiP40Y!^r');
define('LOGGED_IN_KEY',    'GC;4+;)d4nu)ZH8fxNZ,%zhWA`.e,`K;ukP~. |^IrUwEDa+O+-rq[p}+[Xl( g&');
define('NONCE_KEY',        'm(l:h.USDIJqTLXIZ.q$Y)pcD6)u]KmHGm!M9ibBqYt+CpA[fXKQ Ho;W{}9;[x6');
define('AUTH_SALT',        'y3Bo8jr`Pn5l*I%SsjT(*b}^_SfBTSC5)9:%!zF;#K]bQsJ3R#RX^oA~{-U8~}O;');
define('SECURE_AUTH_SALT', 'aF6:bHt$h(M=!Yp;n;];^RCv)p1 +0|}.X6d&7jwXz hP;+:!+.u,z0V( !:^ySo');
define('LOGGED_IN_SALT',   'tGEVPXGIK1^wSp:.*<DNJ_>YyTSh nq/vd.Z+dj1MTYn53+2BdZ,+f>tFpiQ-cTe');
define('NONCE_SALT',       '}28|nDq|Gp#Ifkn~2PgPgJyg8,F/(x|O3Qu+HE-]( +%|$10-&Q+l>IT6i?/meQ:');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
