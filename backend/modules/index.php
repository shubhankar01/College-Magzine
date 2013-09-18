<?php
	require_once('../include/dbconnect.php');
	require_once('../include/core.inc.php');

	$login = true;
	if(axi_admin_loggedin())
	{
		header('Location: dashboard.php');
	}
	else
	{
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			
			
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			
			if(!empty($username) && !empty($password))
			{ 
				$query=mysql_query('select * from `admin` where adminname = \''.$username.'\' and password = \''.$password.'\'');
				$q = mysql_fetch_assoc($query);
				if( mysql_num_rows($query)==0)
				{
					$login = false;
				}
				else
				{
					$_SESSION['adminid']=$q['adminid'];			
					$_SESSION['adminname']=$q['adminname'];		
					header('Location:dashboard.php');					
				}
				
			}
			
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Login | Moderator - Excelsior Education</title>
<!-- Metadata -->
<meta content="" name="description" />
<meta content="" name="keywords" />
<meta content="" name="author" />
<!-- CSS Styles -->
<link rel="stylesheet" type="text/css" href="../css/yum-forms.css"/>
<link rel="stylesheet" type="text/css" href="../css/adminpanel-loginform.css"/>
<!-- Favicon -->
<link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<!-- JavaScript -->
<script type="text/javascript" language="javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" language="javascript" src="..js/yumtoolkit.js"></script>
<script type="text/javascript" language="javascript" src="../js/login.js"></script>
</head>

<body>

<div id="wrapper">
	<div class="clear">
	</div>
	<div id="content-area" class="box">
		<div id="content-area-img">
		<img src="../images/logo.png"/>
		</div>
		<div id="content-area-text">
			<p class="title"><span style="color: black">Moderator Panel</span></p>
			<br />
			<div id="content-area-text" class="box" style="height: 280px; margin-left: 10px">
				<div class="page-title">
					Login</div>
				<form action="index.php" class="form-main" method="post" id="loginForm">
					<table>
						<tr>
							<td align="left" valign="top">Username</td>
							<td><input name="username" size="15" type="text" required/></td>
						</tr>
						<tr>
							<td align="left" valign="top" required>Password </td>
							<td>
							<input name="password" size="10" type="password" /></td>
						</tr>
					</table>
					<?php
					if($login == false)
					{
						echo '<p class="invalid-password">Invalid Email or Password.</p><br/>';
					}
					?>
					<input id="submit-form" class="form-submitButton " type="submit" value="Login"/>
				</form>
			</div>
			<div class="clear">
			</div>
		</div>
	</div>
	<div class="clear">
	</div>
	<?php require("../include/footer.php") ?>
</div>
</body>

</html>