<?php
require_once('../include/dbconnect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Admin  - Manage Users</title>
<style type="text/css">
</style>
<!-- CSS Files -->
<link type="text/css" rel="stylesheet" href="../css/module/psychometric.css"/>
<link rel="stylesheet" type="text/css" href="../css/adminpanel-layout.css"  />
<link rel="stylesheet" type="text/css" href="../css/adminpanel-main.css" />
<link rel="stylesheet" type="text/css" href="../css/adminpanel-dropdown.css" />
<link rel="stylesheet" type="text/css" href="../../common/plugins/datatable/css/jquery.dataTables.css" />
<link rel="stylesheet" type="text/css" href="../../common/plugins/datatable/css/jquery.dataTables_themeroller.css" />

<!-- Javascript Files -->
<script type="text/javascript" language="javascript" src="../../common/plugins/datatable/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../../common/plugins/datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="../javascripts/modules/manageusers.js"></script>

</head>

<body>
<?php require('../include/header.php')?>
<div id="wrapper">
<div class="heading1">Posted Articles
</div>
<br/>
	<div class="yum-datatable user-datatable">
			<table>
				<thead>
					<tr>
						<th style="width: 40px;">S.No</th>
						<th style="width: 300px;">Name</th>
						<th style="width: 270px;">Email</th>
						<th>Action</th>
					</tr>
				</thead>
			</table>	
		</div>
</div>
<?php require("../include/footer.php")?>

</body>

</html>
