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
	     	<legend>Manage Articles</legend>
	     	<div class="yum-datatable article-datatable">
		     	<table>
					<thead>
						<tr>
							<th style="width: 40px;">S.No</th>
							<th style="width: 300px;">Title</th>
							<th style="width: 270px;">Content</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
	     	</div>
	     </fieldset>
    </div>
  </div>
  <div class="fancybox-form" style="display:none;">
  	<div id="view-form">
  		<fieldset>
	     	<legend id="form-legend">View/Edit Article</legend>
	     	<form class="post-form" action="" method="post" id="post-article">
	     	<input type="text" class="input-text" required name="id" id="atricleid" style="display:none;"/>
	     		<label class="label">Title</label>
	     			<input type="text" class="input-text" required name="title" id="title"/>
	     		<label class="label">Authors</label>
	     			<input type="text" class="input-text" required name="authors" id="authors"/>
	     		<label class="label">Content</label>
	     			<textarea class="textarea" required name="content" id="content"></textarea>
				<label class="label">Category</label>
	     			<select class="select" name="category" id="category">
	     			<option>Select One</option>
	     			<?php 
	     			$query=mysql_query('SELECT * FROM `category`');
	     			$i = 0;
	     			while($query_run=mysql_fetch_assoc($query))
	     			{
	     				echo '<option value="'.$query_run['categoryname'].'">'.$query_run['categoryname'].'</option>';
	     			}
	     			?>
	     			</select>
	     			<br/><br/>
	     	  <input type="button" class="small button margin-left" value="POST" id="submit-form"/>
	     	</form>
	     </fieldset>
  	</div>
  </div>
</body>
</html>	 