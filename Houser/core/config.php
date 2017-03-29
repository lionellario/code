<?php

/**
 * Configuration file for: Database Connection
 */
/** database host */
define("DBS_HOST", "127.0.0.1");
/** user for the database */
define("DBS_USER", "root");
/** The password of the below user */
define("DBS_PASS", "");
/** name of the database */
define("DBS_NAME", "houser");

/**
 * Configuration for: Cookies
 */
define('COOKIE_LIFETIME', 1209600); // 1209600 seconds = 2 weeks
define('COOKIE_DOMAIN', '.127.0.0.1'); // the domain where the cookie is valid for, like '.mydomain.com'
define('COOKIE_SECRET_KEY', '1gp@TMPS{+$78sfpMJFe-92s'); // use to salt cookie content and when changed, can invalidate all databases users cookies

?>