<?php

 //1.Canvas
  $img =ImageCreateFromJpeg("cock.jpg");
  
 //2.Drawing
  $yellow = ImageColorAllocate($img,255,255,0);

  Imagettftext($img,50,-30,40,60,$yellow ,
   'C:\Xampp\htdocs\lab\myfont.ttc',"您好"); 
  Imagettftext($img,60,20,280,230,$yellow ,
   'C:\Xampp\htdocs\lab\myfont.ttc',"早安");
  Imagettftext($img,20,10,40,230,$yellow ,
   'C:\Xampp\htdocs\lab\myfont.ttc',"今天天氣不好");


 //3.output =>file broewrs
   header('Content-Type: image/jpeg');
    Imagejpeg($img);                   //顯示
    Imagejpeg($img,"upload/newcock.jpg");  //存放位置


 //4. release
   Imagedestroy($img);

?>
<!-- from lab47.php -->