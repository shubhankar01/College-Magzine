<?php
    $con = mysql_connect("localhost","college","magazine");
    if (!$con)
    {
     die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("college_magazine", $con);
    
?>
