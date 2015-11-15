<?php 
include ('class.qrcode.php');
$qr=new CodeQR('UTF-8');//Here are the available values: UTF-8 [Default] Shift_JIS  ISO-8859-1
$src=$qr->Draw("Hyper Solutions",100);  // Draw(SIZE,TEXT)
?>
<img src="<?=$src;?>" />
