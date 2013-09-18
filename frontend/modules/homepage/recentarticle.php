<?php
include '../../include/dbconnect.php';


/*if(!axi_user_loggedin())
{
header('Location:article-notlogin.php');
}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<!--  <?php
$data="select * from article order by timestamp desc";
$result=mysql_query($data,$con);

while($row = mysql_fetch_assoc($result))
{
   echo '<div style="">'; 
   echo '<span style="font-size:large;font-family:Arial, Helvetica, sans-serif;color:#3399FF;text-transform:capitalize;">';
   echo $row['title'];
   echo '</span>'.'<br/>';
   echo '<span style="font-style:italic">';
   echo "  By ".$row['authors'];
   echo '</span>';
   echo '<span style="font-style:italic">';
   echo "  on  ".$row['timestamp'];
   echo '</span>'.'<hr/>';
   echo "</div>";
}   
?>-->

		<div id="content-newsfeed" >
				<div id="blog">
				
			<?php
	       $result=mysql_query("select * from article order by timestamp desc");
			$i=0;
			while($db_field = mysql_fetch_assoc($result))
			{
			$i++;
			
				$blogId=$db_field['articleid'];
				$query_run=mysql_query("select * from article_comment where `articleid` = \"".$db_field['articleid']."\"");
					$rowno=mysql_num_rows($query_run);
				echo '<div class="news-item" id="'.$db_field['articleid'].'">
				<div class="blog-page-header ">';
								echo '<div class="blog-right-side-comments" name="'.$i.'">
						<span class="number-of-comment">';echo '('.$rowno.')';echo '</span>
                   	  </div>
				    &nbsp; <div class="blog-page-header-style">'.$db_field['timestamp'].', by <a href="#"  class="tipsy">Admin</a></div>
				    <div class="clear"></div>
				    </div>

                    <div class="clear"></div>
					<div class="blog-title">'.$db_field['title'].'</div>
					<div class="blog-content">'.$db_field['content'].'</div></div>';
				    	
				    	
	              
					echo '<div class="news-comments-box'.$i.'"  id="blog-comment-box" style="display:none;">
					<div class="hide-blog-button" name="'.$i.'"><a href="#"><img  src="../../images/Minus.png"  alt="Hide" title="Hide"/></a></div>';
				
					if($rowno>0)
					{
					
						while($db_field_id = mysql_fetch_assoc($query_run))
						{
					
							echo '<div class="news-comment" id="news-comment'.$i.'" name="'.$i.'">';
								if(!empty($db_field_id['userid']))
								{
								$run=mysql_query("select * from users where userid = \"".$_SESSION['userID']."\"");
								$run2=mysql_fetch_assoc($run);
								
								echo '<img class="blog-candidate-img" src="../../uploads/pictures/candidate/'.$run2['pic'].'"/>
								
								<div style="float:left;margin-left:10px;"><span style="margin-top:-10px">'; echo $run2['firstname'].'&nbsp;'.$run2['lastname'].'</span>
					            <br/><span class="news-author"><a href="#"  class="tipsy blog-tipsy">'.$run2['email'].'</a>, at '.$db_field_id['timestamp'].'</span></div>
								<p class="news-comment-text"><br/>'.$db_field_id['comment'].'</p>
								</div>';
																		
								}
							
					
						}
						
						echo '<div class="news-comment-form-box">
						<textarea id="comment-text" class="comment-text'.$i.'" name="'.$i.'" placeholder="Write a comment ..."></textarea> ';
						
						echo '<input type="button" class="news-button-submit"  id="'.$db_field['userid'].'" name="'.$i.'" value="Post"/>';					

						echo '</div></div><br />';
						
						
						
						
					 }
					 else 
					 { 
						 echo '<label> No comments </label>';
						 echo '<br/>';
						 echo '<div class="news-comment-form-box">
						<textarea id="comment-text1" class="comment-text'.$i.'"  name="'.$i.'" placeholder="Write a comment ..."></textarea>';						
						echo '<input type="button" class="news-button-submit"  id="'.$db_field['userid'].'"  name="'.$i.'" value="Post"/>';					
						echo '</div></div><br />';
						}
				    echo '';

				    	
				    	
			}





	?>
			
				</div>
				</div>
				


</body>

</html>
