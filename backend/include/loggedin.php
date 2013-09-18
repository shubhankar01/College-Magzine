<?php
	require_once('core.inc.php');

if(!isset($_SESSION['adminid']) && empty($_SESSION['adminid']))
{
	header('Location:index.php');
}
?>
