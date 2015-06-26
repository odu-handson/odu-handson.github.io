<?php
$dbhost = 'qwyvr.cs.odu.edu';
$dbuser = 'handson_web';
$dbpass = 'handsonweb2015';
$dbname = 'handson_web';
$conn =  mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysql_select_db($dbname);
?>