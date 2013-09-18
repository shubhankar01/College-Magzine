<?php
require_once('../include/dbconnect.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Admin Panel</title>
<style type="text/css">
</style>
<!-- CSS Files -->
<link type="text/css" rel="stylesheet" href="../css/module/psychometric.css"/>
<link rel="stylesheet" type="text/css" href="../css/adminpanel-layout.css"  />
<link rel="stylesheet" type="text/css" href="../css/adminpanel-main.css" />
<link rel="stylesheet" type="text/css" href="../css/adminpanel-dropdown.css" />

<!-- Javascript Files -->
<script type="text/javascript" language="javascript" src="../js/jquery-1.9.0.js"></script>
<script type="text/javascript" language="javascript" src="../js/module/psychometric/quizdesc.js"></script>

</head>

<body>
<?php require('../include/header.php')?>
<div id="wrapper">
<div class="heading1">Posted Articles
</div>
<br/>
<?php
	$query=mysql_query('select * from article');
	while($query_run=mysql_fetch_assoc($query))
	{
		echo '<div class="title">'.$query_run['title'].' ('.$query_run['category'].')'.'</div><br/>'.'<div class="content">'.$query_run['content'].'</div>';
	}
?>
</div>
<?php require("../include/footer.php")?>
</body>

</html>
