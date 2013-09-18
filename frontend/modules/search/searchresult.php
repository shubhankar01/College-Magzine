<?php
include ('../../include/dbconnect.php');
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>College Magazine</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../../css/app.css">
  <link rel="stylesheet" href="../../css/presentation.css">
  <link rel="stylesheet" href="../../css/homepage/index.css">
  <link rel="stylesheet" href="../../css/foundation.min.css">
  <link rel="stylesheet" href="../../css/post-article/post-article.css"/>
  <link rel="stylesheet" type="text/css" href="../../../common/plugins/datatable/css/jquery.dataTables.css" />
  <link rel="stylesheet" type="text/css" href="../../../common/plugins/datatable/css/jquery.dataTables_themeroller.css" />
   <link href="../../../common/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />

  <script type="text/javascript" language="javascript" src="../../js/jquery.js"></script>
  <script language="javascript" src="../../../common/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="../../../common/plugins/datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" src="../../js/postarticle.js"></script>

</head>
<body class="off-canvas">
  
  <?php 
  	include ('../../include/header.php');
  ?>
  <div class="row article-wrapper">
    <div class="tweleve columns">
	     <fieldset>
	     	<legend>Search Results</legend>
	     	<?php
			$query = "";
			if(isset($_POST['search']))
			{
				echo 'select * from article where `title` like \'%'.$_POST['search'].'%\' or `content` like \'%'.$_POST['search'].'%\' or `authors` like \'%'.$_POST['search'].'%\' or `category` like \'%'.$_POST['search'].'%\'';
				$query = mysql_query('select * from article where `title` like \'%'.$_POST['search'].'%\' or `content` like \'%'.$_POST['search'].'%\' or `authors` like \'%'.$_POST['search'].'%\' or `category` like \'%'.$_POST['search'].'%\'');
			}
			else if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['category']) && isset($_POST['authors'])) 
			{
				$query = mysql_query('select * from article where `title` like \'%'.$_POST['title'].'%\' and `content` like \'%'.$_POST['content'].'%\' and `authors` like \'%'.$_POST['authors'].'%\' and `category` like \'%'.$_POST['category'].'%\'');
			}
			else 
				header('Location:search.php');
			?>
			<div class="yum-datatable article-datatable">
		     	<table>
					<thead>
						<tr>
							<th style="width: 40px;">S.No</th>
							<th style="width: 300px;">Title</th>
							<th style="width: 270px;">Content</th>
						</tr>
					</thead>
				<tbody>
	     	<?php
	     	$i = 0;
	     	while($q = mysql_fetch_assoc($query))
	     	{
	     		echo '
						<tr>
							<td style="width: 40px;">'.($i+1).'</td>
							<td style="width: 300px;">'.$q['title'].'</td>
							<td style="width: 270px;">'.$q['content'].'</td>
						</tr>';
				$i++;
	     	}
	     	?>
	     	</tbody>
	     	</table>
	     	</div>
	     </fieldset>
    </div>
  </div>
</body>
</html>	 
