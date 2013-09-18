<?php
include '../../include/dbconnect.php';
session_start();
if (!isset($_SESSION['loginattempts']))
{
	$_SESSION['loginattempts']=1;
}
if(isset($_POST['type']))
{
	switch($_POST['type'])
	{
		case 'login':
		
		if(isset($_POST['email'])&&isset($_POST['password'])&&!isset($_POST['verificationcode']))
		{
		$email=mysql_real_escape_string(htmlentities($_POST['email']));
		$password=mysql_real_escape_string(htmlentities($_POST['password']));
		$password_hash=md5($password);
		
		if(!empty($email)&&!empty($password))
		{
			$query=mysql_query('select * from users where email=\''.$email.'\' and password= \''.$password_hash.'\'');
			$query_run=mysql_fetch_assoc($query);
			if(mysql_num_rows($query)==0)
			{
				if($_SESSION['loginattempts']<6)
				{
					echo 'false';
					$_SESSION['loginattempts']++;
				}
				else
				{
					echo 'capcha';
				}
			}
			else
			{
				

				$user_id=mysql_result($query_run,0,'userid');
				$_SESSION['userID']=$user_id;
				$_SESSION['usertype']=1;
				unset ($_SESSION['loginattempts']);
				echo 'true';
		
			}
		}
				}
				else 
				{ 
					if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['verificationcode']))
				    {
				    $email=mysql_real_escape_string(htmlentities($_POST['email']));
					$password=mysql_real_escape_string(htmlentities($_POST['password']));
					$verificationcode=mysql_real_escape_string(htmlentities($_POST['verificationcode']));
					$password_hash=md5($password);
						if(!empty($email)&&!empty($password)&&!empty($verificationcode))
						{
						
						$query=mysql_query('select * from users where email=\''.$email.'\' and password= \''.$password_hash.'\'');
						echo $query;
						$query_run=mysql_fetch_assoc($query);
						
							if(mysql_num_rows($query)==0)
							{
								if($_SESSION['loginattempts']<6)
								{
								echo 'false';
								$_SESSION['loginattempts']++;
								}
								else echo 'capcha';
							}
							else
							{
							  if($verificationcode==$_SESSION['vercode'])
							  {
							  $user_id=mysql_result($query_run,0,'userid');
							  $_SESSION['userID']=$user_id;
							  unset ($_SESSION['loginattempts']);
							  unset ($_SESSION['vercode']);
							  echo 'true';
							  }
							  else 
							  echo 'verificationerror';
							}
						 }
				     }
		
				}
										
		break;
		case 'capcha':
		  echo '<a><img src="capture.php" style="float:left"/></a>';
		  echo '<label class="form-label capcha-label" >';echo  'Enter the verification Code'; echo '</label>';
		  echo '<input title="verification code" maxlength="25"  class="form-text" id="verificationcode" type="text" name="verificationcode"/>';
			break;
		
	}
}

	
?>

							