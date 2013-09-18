<?php
    //session_start();
    ob_start();
    $currentfile=$_SERVER['SCRIPT_NAME'];
    			
    function axi_user_loggedin()
    {
        if(isset($_SESSION['userID']) && !empty($_SESSION['userID']))
        {
            return true;
        }
        else return false;
    }
    
    function axi_admin_loggedin()
    {
        if(isset($_SESSION['adminid']) && !empty($_SESSION['adminid']))
        {
            return true;
        }
        else return false;
    }
?>