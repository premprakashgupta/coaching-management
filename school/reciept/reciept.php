<?php
extract($_POST);
header('content-type:image/jpeg');
  $font="consola.TTF";
  $image=imagecreatefromjpeg("cash_memo.jpg"); 
  $color=imagecolorallocate($image,0,112,192);
  $date=Date('d-m-y');
  imagettftext($image,25,0,580,200,$color,$font,$date);
  imagettftext($image,25,0,200,250,$color,$font,$rstudent_name);
  imagettftext($image,25,0,200,300,$color,$font,$rstudent_class);
  imagettftext($image,25,0,580,780,$color,$font,$rstudent_fee." INR");
  imagettftext($image,25,0,200,340,$color,$font,$rstudent_month);
  imagettftext($image,25,30,580,900,$color,$font,"approved");
  imagejpeg($image,"reciept/".$rstudent_name."_".$date.".jpg");

  imagedestroy($image);

echo "collect reciept";








?>