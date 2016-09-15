

<?php
// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
echo $var = "Alex"
$var2 = "billy";

/*

changed in php.ini file in /etc/php5/apache2/php.ini
and also changed in php.ini file in /etc/php5/cli/php.ini

and to display the error in browser changed the display_error to On in both the above files

if we change in both the above files the above "error_reporting" functions and "ini_set" functions are not necessary
*/
?>