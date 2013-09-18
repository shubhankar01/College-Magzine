<?php
include ('../../include/dbconnect.php');
?>
<?php
if(isset($_POST['title']) && isset($_POST['authors']) && isset($_POST['category']) && isset($_POST['content']))
{
	$query = mysql_query('INSERT INTO `article`(`category`, `title`, `content`,`authors`) VALUES (\''.$_POST['category'].'\',\''.$_POST['title'].'\',\''.$_POST['content'].'\',\''.$_POST['authors'].'\')');
	echo '<script>alert("Your article has been saved");</script>';
}
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
  
  <script type="text/javascript" language="javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="../../../common/plugins/datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" src="../../js/postarticle.js"></script>

</head>
<body class="off-canvas">
  
  <?php 
  	include ('../../include/header.php');
  ?>
  <img src="../../images/Detail.png" />
  <div class="row article-wrapper">
  <!-- Universal Search -->
    <div class="tweleve columns ">
    	
	     <fieldset style="min-height:0;">
	     	<legend>Search</legend>
	     	<form action="searchresult.php" method="post">
	     		<label class="label">String</label>
	     			<input type="text" class="input-text" required name="search"/>
	     			<br/><br/>
	     	  <input type="submit" class="small button margin-left" value="Search"/>
	     	</form>
	     </fieldset>
    </div>
    <!-- Advanced Search -->
    <div class="tweleve columns ">
    	
	     <fieldset>
	     	<legend>Advanced Search</legend>
	     	<form class="post-form" action="searchresult.php" method="post">
	     		<label class="label">Title</label>
	     			<input type="text" class="input-text" name="title"/>
	     		<label class="label">Authors</label>
	     			<input type="text" class="input-text" name="authors"/>
	     		<label class="label">Content</label>
	     			<textarea class="textarea" name="content"></textarea>
				<label class="label">Category</label>
	     			<select class="select" name="category">
	     			<option>Select One</option>
	     			<?php 
	     			$query=mysql_query('SELECT * FROM `category`');
	     			while($query_run=mysql_fetch_assoc($query))
	     			{
	     				echo '<option>'.$query_run['categoryname'].'</option>';
	     			}
	     			?>
	     			</select>
	     			<br/><br/>
	     	  <input type="submit" class="small button margin-left" value="Search"/>
	     	</form>
	     </fieldset>
    </div>

  </div>
</body>
</html >	 