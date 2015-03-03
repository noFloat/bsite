<?php  
$num="";  
for($i=0;$i<4;$i++){  
    $num .= rand(0,9);  
}  
Session_start();  
$_SESSION["check"] = $num;  
Header("Content-type: image/PNG");  
srand((double)microtime()*1000000);  
$im = imagecreate(60,20);  
//颜色
$black = ImageColorAllocate($im, 0,0,0);  
$gray = ImageColorAllocate($im, 200,200,200);  
$red = imagecolorallocate($im, 255, 0, 0);
imagefill($im,0,0,$gray);   
$style = array($black, $black, $black, $red,$black, $black, $gray, $gray, $gray, $gray, $gray);  
imagesetstyle($im, $style);  
$y1=rand(0,20);  
$y2=rand(0,20);  
$y3=rand(0,20);  
$y4=rand(0,20);  
imageline($im, 0, $y1, 60, $y3, IMG_COLOR_STYLED); 
 //画线
imageline($im, 0, $y2, 60, $y4, IMG_COLOR_STYLED);    
for($i=0;$i<80;$i++)  
{  
	imagesetpixel($im, rand(0,60), rand(0,20), $black);  
}  
$strx=rand(3,8);  
for($i=0;$i<4;$i++){  
	$strpos=rand(1,6);  
	//填充num
    imagestring($im,5,$strx,$strpos, substr($num,$i,1), $black);  
    $strx+=rand(8,12);  
}  
ImagePNG($im);  
ImageDestroy($im);  
?>