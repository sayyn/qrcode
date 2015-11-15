<?php 
include ('class.qrcode.php');
$qr=new CodeQR();//Here are the available values: UTF-8 [Default] Shift_JIS  ISO-8859-1
$src=$qr->Draw(100,"Hyper Solutions");  // Draw(SIZE,TEXT)
?>
<img src="<?=$src;?>" />
