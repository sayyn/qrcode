<?php 
/* QR Code Class */
/* by Hyper Solutions */
/* @version 1.0  */
/* Public Lisence */
class CodeQR{
	
	/* QR Code Size */
	/* default null */
	private $Size  = 100;
	/* QR Code Text */
	/* default null */
	private $Text =  null;
	/* default UTF8 */
	/* ISO-8859-1 , Shift_JIS , UTF-8 */
	private $Encoding="UTF-8";
	/*  Google Api Url */
	/* Required HTTPS Connection */
	private $RootURL="https://chart.googleapis.com/chart?";
	/* Post Values Do Not Edit */
	private $Query=array();
	
	/*Construct CodeQR Class */
	function __construct($encoding='UTF-8'){
		$this->Encoding=$encoding;
	}
    /* Serialize Array */
	function Post(){
		$Query['cht']='qr';
		$Query['chs']=$this->Size.'x'.$this->Size;
		$Query['chl']=$this->Text;
		$Query['choe']=$this->Encoding;
		$this->RootURL=$this->RootURL.http_build_query($Query);
	}
	/* Call getQRCode */
	function Draw($text,$size=100){
	   $this->Text=$text;
       $this->Size=$size;
       $this->Post();
	   return $this->getQRCode();
	}
	/* Get Google Servers QR code */
	private function getQRCode(){
       $bytes = base64_encode(file_get_contents($this->RootURL));
       return 'data:image/png;base64,'.$bytes;
	}
	
	
	
}
?>
