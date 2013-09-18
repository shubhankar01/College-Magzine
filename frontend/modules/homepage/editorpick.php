<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="../../js/jsapi.js"></script>
     </head>
     <body>
     <?php
      $result=mysql_query("select * from article where `articleid` in (select max(articleid) from article)");
			$i=0;
			while($db_field = mysql_fetch_assoc($result))
			{
			$i++;
			$blogId=$db_field['articleid'];
				echo '<div class="news-item" id="'.$db_field['articleid'].'">
				<div class="blog-page-header ">';
								echo '<div class="blog-right-side-comments" name="'.$i.'">
                   	  </div>
				    &nbsp; <div class="blog-page-header-style">'.$db_field['timestamp'].', by <a href="#"  class="tipsy">Admin</a></div>
				    <div class="clear"></div>
				    </div>

                    <div class="clear"></div>
					<div class="blog-title">'.$db_field['title'].'</div>
					<div class="blog-content">'.$db_field['content'].'</div>
					</div>
					';
				}

?>
     </body>
</html>