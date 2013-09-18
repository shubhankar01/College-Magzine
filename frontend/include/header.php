<?php
session_start();
include ('dbconnect.php');
require ('core.inc.php');
//print_r($_POST);
//echo $_SESSION['userID'].'dfdafd';
if(!axi_user_loggedin())
{
	if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['verificationcode']))
		{
		$email=mysql_real_escape_string(htmlentities($_POST['email']));
		$password=mysql_real_escape_string(htmlentities($_POST['password']));
		$password_hash=md5($password);
			if(!empty($email)&&!empty($password) && !empty($_POST['verificationcode']))
			{
			//echo 'select * from users where email=\''.$email.'\' and password= \''.$password_hash.'\'';
			//die();
			$query=mysql_query('select * from users where email=\''.$email.'\' and password= \''.$password_hash.'\'');
				$query_run=mysql_fetch_assoc($query);
				if(mysql_num_rows($query)==0 || ($_POST['verificationcode'] != $_SESSION["vercode"]))
				{
					//echo '<script>alert("Incorrect Login!!!");</script>';
					header('Location:../modules/homepage/index.php');
				}
				else
				{
					echo 'Successful Login ';
					$user_id=mysql_result($query,0,'userid');
					$_SESSION['userID']=$user_id;
					$_SESSION['username']=$query_run['firstname'];
					echo $user_id.'sfsrgsrgse';
					echo '<script>alert("Incorrect Login!!!");</script>';
					header('Location:../modules/homepage/dashboard.php');
				}
			}
		
	}
}
else
{
	header('Location:dashboard.php');
}
echo '<div class="container top-bar home-border">
    <div class="attached">
	    <div class="name" onclick="void(0);">
	        <span><a   href="../homepage/index.php" class="name">College Magezine</a></span>
	  	</div>
	  	<ul class="right">
	        <li class="show-for-small">
	          <a href="">Home</a>
	        </li>
			<li>
	          <a href="../search/search.php">Search</a>
	        </li>
	        <li>
	          <a href="../post-article/post-article.php">Post Articles</a>
	        </li>
	        <li>
	        	<a href="../post-article/manage-articles.php" >Manage Articles</a>
	        </li>
			<li>
			  <a href="" >Discussion Room</a>
			</li>
			<li>
			  <a href="" >Feedback</a>
			</li>
			<li >
			  <a href="#login-box" class="trigger-fancybox-login">Login</a>
			</li>
	  	</ul>
	 </div>
  </div>
  <br/><br/>
  
  <div class="fancybox" style="display:none;">
	  <div class="row" id="login-box" style="width:500px;min-width:500px;">
	  	<div class="twelve columns">
	  			<form action="../../include/header.php" method="post">
	  			<label >Username</label><input type="text" name="email" required></input>
	  			<label >Password</label><input type="password" name="password" required></input>';
	  			
		  echo '<a><center><img src="capture.php" style="width:200px;height:40px;"/></center></a><br/>';
		  echo '<label class="form-label capcha-label" >Enter the verification Code</label>';
		  echo '<input title="verification code" maxlength="25"  class="form-text" id="verificationcode" type="text" name="verificationcode"/>';
	  	  echo '<input type="submit" class="small button" value="Login" style="float:right;"/>
	  			</form>
	  		
	  	</div>
	  </div>
  </div>
';

?>
