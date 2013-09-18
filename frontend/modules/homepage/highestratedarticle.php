<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
include 'dbconnect.php';
$data="select * from article order by (userrating+modrating) desc";
$result=mysql_query($data,$con);
$row=mysql_fetch_assoc($result);
echo '<div style="">'; 
echo '<span style="font-size:large;font-family:Arial, Helvetica, sans-serif;color:#3399FF;text-transform:capitalize;">';
echo $row['title'];
echo '</span>'.'<br/>';
echo '<span style="font-style:italic">';
echo "  By ".$row['authors'];
echo '</span>';
echo '<span style="font-style:italic">';
echo "  on  ".$row['timestamp'];
echo '</span>'.'<br/>';
echo '<span style="font-style:italic">';
echo $row['content'];
echo '</span>'.'<br/>';
echo "</div>";
?>
</body>

</html>
