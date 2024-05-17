<?php  session_start();

  require('security-image.inc.php');
  isset($_GET['width']) ? $iWidth = (int)$_GET['width'] : $iWidth = 150;
  isset($_GET['height']) ? $iHeight = (int)$_GET['height'] : $iHeight = 30;
  
  $oSecurityImage = new SecurityImage($iWidth, $iHeight);
  if ($oSecurityImage->Create()) {
     echo $_SESSION['code'] = $oSecurityImage->GetCode();	
	 print_r($_SESSION);
	 exit;
  } else {
     echo 'Image GIF library is not installed.';
  }
?>