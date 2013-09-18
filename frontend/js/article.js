$(document).ready(function()
{
  $(".blog-right-label:even").css("background-color", "#efefef");
   $(".blog-right-label:odd").css("background-color", "#fafafa");

});


$(".news-button-submit").live('click',function(){
var blogid=$(this).attr('id');
var i=$(this).attr('name');
var url='blogpagelib.php';
	$.post(url,{blogid:blogid,comment:$('.comment-text'+i).val(),func:'blogpagecomment'},function(data){
		});		

		$.post(url,{func:'blogpagereload'},function(data){
   
   $('#blog').html(data);
   $('.news-comments-box'+i).show();
   
});
return false;
});

$(".blog-right-side-comments").live('click',function(){
var i=$(this).attr('name');
$('.news-comments-box'+i).show();

return false;
});
//$(".news-comment").hover()

$('.hide-blog-button').live('click',function(){
var i=$(this).attr('name');
$('.news-comments-box'+i).hide();
});





