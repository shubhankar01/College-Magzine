<?php
require ('../../include/dbconnect.php');
require ('../../../backend/include/core.inc.php');

if(!axi_user_loggedin())
{
	
	
		/*	$email = $_POST['email'];
			$password = $_POST['password'];
			if(!empty($email)&&!empty($password))
			{
				$query=mysql_query('select * from users where `email`= $email and `password`= $password');
				$query_run=mysql_fetch_assoc($query);
				if(mysql_num_rows($query_run)==0)
				{
					echo 'Incorerect Login!!!';
				}
				else
				{
					echo 'Successful Login ';
					$user_id=mysql_result($query_run,0,'candID');
					$_SESSION['cand_ID']=$user_id;
					$_SESSION['userID']=$user_id;
				    $_SESSION['usertype']=1;

					header('Location:dashboard.php');
				}
			}
		
	*/
}
else
{
	header('Location:dashboard.php');
}
?>
   <script type="text/javascript" language="javascript" src="../../js/jquery.js"></script>

				<p id="main-page-title">Candidate Login</p>
				<p class="main-content content">
					login into your account from here.
				</p>
				<div class="main-twocol-left">
							<div class="form-area">
						
									
									<div class="form-sub-area">

		<div class="clear">
		</div>
			
				<form >
						
							<div class="login-div">
							<label class="form-label login-label" >Email</label>
							<input title="Email" maxlength="25"  class="form-text format-email" id="email" type="text" name="email"/>
							 <p id='status-msg'></p>
							<label class="form-label login-label" >Password</label>
							<input maxlength="25" class="form-password" title="Password" type="password" id="password" name="password"/>
						     <div class="clear"></div></div><div class="clear"></div>
							<p class="incorrect-login" style="display:none;"></p>
							<p class="capcha-login" style="display:none;"></p>
							<div class="clear"></div>
						
					<input class="form-submitButton " title="Submit" type="button" id="login-button" value="Submit" />
					
					
					</form>
					
					
	 			
		
</div>


<script  language="javascript" type="text/javascript" src="../../js/login.js" ></script>
