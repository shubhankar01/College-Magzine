<?php
    session_start();

	echo '<div id="status-bar">
		<p id="status-left-col"><a href="">College Magazine &nbsp;</a></p>
		<div id="status-right-col">
			<p id="user-detail">Welcome '.$_SESSION['adminname'].' , <a href="../../common/logout.php">logout</a></p>
			<div id="top-time">'.date("h:i A jS M,Y") .'</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="header-area">
		<div id="logo"><a href=""><img src="../images/logo.png" style="width:200px;margin-left:-14px;" class="logo" alt="logo"/>
</a></div>
		<div class="clear"></div>
	</div>
	<div id="menu-area">
		<div id="main-menu">
			<ul id="main-menu-ul">
				<li>
					<a href="../modules/dashboard.php">View Articles</a>
				</li>
				<!--<li>
					<a href="../modules/resultset.php">Website Report </a>	
					
				</li>-->
				<li>
					<a href="../modules/manage-articles.php">Manage Articles</a>
				</li>				
			</ul>
		</div>
		<div id="search-bar">
			<form id="search" action="" method="post">
				<input type="text" value="Search..." id="txt-search" name="txtSearch"/>
				<a href="#search" id="search-icon"><img src="resources/images/icons/mag-glass.png" alt="Search"/></a>
			</form>
		</div>
	</div>';
?>


