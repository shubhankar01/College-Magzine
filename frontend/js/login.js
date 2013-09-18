$(document).ready(function()
{
$("#email").focusin(function()
	{
	$('.incorrect-login').hide();
	});
$("#password").focusin(function()
	{
	$('.incorrect-login').hide();
	});
		
});
$('#login-button').live('click',function(){


});