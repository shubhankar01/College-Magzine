<?php
	require '../backend/include/core.inc.php';

	session_destroy();
	
	header('Location:../backend/modules/index.php');
	ob_get_clean();
?>