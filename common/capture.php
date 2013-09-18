<?php 
session_start(); 
//$text = rand(10000,99999); 
//Let's generate a totally random string using md5 
$md5_hash = md5(rand(0,999)); 
//We don't need a 32 character long string so we trim it down to 5 
$text = substr($md5_hash, 15, 7); 
//Set the session to store the security code
//$_SESSION["security_code"] = $security_code;
$_SESSION["vercode"] = $text; 
$height = 25; 
$width = 141; 
  
$image_p = imagecreate($width, $height); 
$black = imagecolorallocate($image_p, 195, 195, 195); 
$white = imagecolorallocate($image_p, 255, 255, 255); 
$font_size = 14; 
  
imagestring($image_p, $font_size, 35, 5, $text, $white); 
imagejpeg($image_p, null, 40); 
?>
<div style="color:"></div>