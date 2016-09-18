<?php
require 'header_inc.php';

/*
require does the same thing as include but
include executes the echo line even if the header_inc.php doesnot exist
but require kills the rest of the page when it doesnot find the header_inc.php file
*/
echo $var2;
?>