<?php
	require_once('../../include/dbconnect.php');

	$file_path = '../../';
	
	if(isset($_POST['func']) && !empty($_POST['func']))
	{
		// FILE NAME _ INVENTORY.PHP
		if($_POST['func'] == 'getAllArticles')
		{
			$query = mysql_query('SELECT * FROM `article`');
			$data = array();
			$count = 0;
			while(($result = mysql_fetch_assoc($query))!=NULL)
			{
				$data[$count++] = $result;
			}
			echo json_encode($data);
		}
		else if($_POST['func'] == 'delete-article')
		{
				$query = mysql_query('DELETE FROM `article` WHERE `articleid` = '.$_POST['id']);
				echo 'Article has been updated';
		}
		else if($_POST['func'] == 'edit-article')
		{
				$query = mysql_query('UPDATE `article` SET `category`=\''.$_POST['category'].'\',`title`=\''.$_POST['title'].'\',`content`=\''.$_POST['content'].'\' where `articleid` = '.$_POST['articleid']);
				echo 'Feature has been updated';
		}
		
		else
		echo 'wrong';
	}
	
?>
