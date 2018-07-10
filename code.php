<?php
 header("Content-type:image/jpeg");
 $img = imagecreate(120,40);
 imagecolorallocate($img,100,255,0);
 $w = imagecolorallocate($img,255,0,255); 
    $num = rand(1000,9999);
    session_start();
    $_SESSION['yz'] = $num;
  imagestring($img,15,45,10,$num,$w);
   imagejpeg($img);
   imagedestroy($img);


?>