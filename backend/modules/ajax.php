<?php
	require_once('../include/dbconnect.php');

	$file_path = '../../';
	
	if(isset($_POST['func']) && !empty($_POST['func']))
	{
		// FILE NAME _ INVENTORY.PHP
		if($_POST['func'] == 'getAllUsers')
		{
			$query = mysql_query('SELECT * FROM `users`');
			$data = array();
			$count = 0;
			while(($result = mysql_fetch_assoc($query))!=NULL)
			{
				$data[$count++] = $result;
			}
			echo json_encode($data);
		}
		else if($_POST['func'] == 'getAllOrders_Dispatched')
		{
			$query = $db->axi_getQuery('SELECT * FROM `axi_invoice` a left join `axi_user_info` b on a.userID = b.userID left join `axi_user_shipping_addresses` c on a.dispatchShippingID = c.shippingID WHERE a.invoiceActionType = "dispatched";');
			$data = array();
			$count = 0;
			while(($result = $db->axi_mysql_fetch_assoc($query))!=NULL)
			{
				$data[$count++] = $result;
			}
			echo json_encode($data);
		}
		else if($_POST['func'] == 'getAllOrders_Delivered')
		{
			$query = $db->axi_getQuery('SELECT * FROM `axi_invoice` a left join `axi_user_info` b on a.userID = b.userID left join `axi_user_shipping_addresses` c on a.dispatchShippingID = c.shippingID WHERE a.invoiceActionType = "delivered";');
			$data = array();
			$count = 0;
			while(($result = $db->axi_mysql_fetch_assoc($query))!=NULL)
			{
				$data[$count++] = $result;
			}
			echo json_encode($data);
		}
		else if($_POST['func'] == 'get-order-details')
		{
			//echo 'SELECT * FROM `axi_invoice_list` a join `axi_stock` b on a.stockID = b.stockID join `axi_item` c on b.itemID = c.itemID join `axi_general_category` d on c.itemCategoryID = d.categoryID join `axi_item_photo` e on c.itemPhotoID = e.PhotoID WHERE a.invoiceID='.$_POST['id'];
			$query = $db->axi_getQuery('SELECT * FROM `axi_invoice_list` a join `axi_stock` b on a.stockID = b.stockID join `axi_item` c on b.itemID = c.itemID join `axi_general_category` d on c.itemCategoryID = d.categoryID join `axi_item_photo` e on c.itemPhotoID = e.PhotoID WHERE a.invoiceID='.$_POST['id']);
			$data = array();
			$count = 0;
			while(($result = $db->axi_mysql_fetch_assoc($query))!=NULL)
			{
				$data[$count++] = $result;
			}
			echo json_encode($data);
		}
		else if($_POST['func'] == 'cancel-order')
		{
				$query = $db->axi_updateQuery('axi_invoice',array('invoiceActionType'=>'cancelled'),array('invoiceID'=>$_POST['id']),'AND',true);
				echo 'Feature has been updated';
		}
		else if($_POST['func'] == 'dispatch-order')
		{
				$query = $db->axi_updateQuery('axi_invoice',array('invoiceActionType'=>'dispatched','dispatchDate'=>strtotime($_POST['dispatchDate']),'dispatchCompany'=>$_POST['dispatchCompany'],'dispatchTrackingNum'=>$_POST['dispatchTrackingNum']),array('invoiceID'=>$_POST['id']),'AND',true);
				echo 'Feature has been updated';
		}
		else if($_POST['func'] == 'deliver-order')
		{
				$query = $db->axi_updateQuery('axi_invoice',array('invoiceActionType'=>'delivered'),array('invoiceID'=>$_POST['id']),'AND',true);
				echo 'Feature has been updated';
		}
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
