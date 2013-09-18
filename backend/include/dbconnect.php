<?php
	$server = 'localhost';
	$user = 'college';
	$pass = "magazine";
	$database = 'college_magazine';

    
    if (!mysql_connect($server, $user, $pass) || !mysql_select_db($database))
   	{
           die('Sorry but not able to connect to database..');
    }
?>