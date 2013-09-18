<?php
include ('dbconnect.php');
require ('core.inc.php');
//print_r($_POST);
//echo $_SESSION['userID'].'dfdafd'.$_SESSION['username'];
if(!axi_user_loggedin())
{
	header('Location:index.php');
}
else
{
	//header('Location:dashboard.php');
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
			  <a href="" >Features</a>
			</li>
	        <li>
	          <a href="../post-article/post-article.php">Post Article</a>
	        </li>
			<li>
			  <a href="" >Discussion Room</a>
			</li>
			<li>
			  <a href="" >Feedback</a>
			</li>
			<li >
			  		<a href="../homepage/logout.php">'.$_SESSION['username'].' (Logout)</a>
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
		  			<label >Password</label><input type="password" name="password" required></input>
		  			<input type="submit" class="small button" value="Login" style="float:right;"/>
	  			</form>
	  		
	  	</div>
	  </div>
  </div>
';

?>
