<?php


/**


 * rssfeed.php 


 * Wiz Mart 


 * Copyright Copyright  © 2008 wiz-mart.com


 * script@wiz-mart.com


 * Class to create captcha


 **/


class SecurityImage {


     var $oImage;


     var $iWidth;


     var $iHeight;


     var $iNumChars;


     var $iNumLines;


     var $iSpacing;


     var $sCode;


     function SecurityImage($iWidth = 150, $iHeight = 60, $iNumChars = 4, $iNumLines = 30)


	 {


		  $this->iWidth = $iWidth;


		  $this->iHeight = $iHeight;


		  $this->iNumChars = $iNumChars;


		  $this->iNumLines = $iNumLines;


		  $this->oImage = imagecreate($iWidth, $iHeight);


		  imagecolorallocate($this->oImage, 222, 222, 222);


		  $this->iSpacing = (int)($this->iWidth / $this->iNumChars);      


	}


	 function DrawLines()


	 {


		  for ($i = 0; $i < $this->iNumLines; $i++) {


			 $iRandColour = rand(190, 250);


			 $iLineColour = imagecolorallocate($this->oImage, $iRandColour, $iRandColour, $iRandColour);


			 imageline($this->oImage, rand(0, $this->iWidth), rand(0, $this->iHeight), rand(0, $this->iWidth), rand(0, $this->iHeight), $iLineColour);


		  }


	}


	 function DrawCharacters()


	 {


		  for ($i = 0; $i < strlen($this->sCode); $i++)


		  {


			 $iCurrentFont = 5;


			 $iRandColour = rand(0, 128);


			 $iTextColour = imagecolorallocate($this->oImage, $iRandColour, $iRandColour, $iRandColour);


			 imagestring($this->oImage, $iCurrentFont, $this->iSpacing / 3 + $i * $this->iSpacing, ($this->iHeight - imagefontheight($iCurrentFont)) / 2, $this->sCode[$i], $iTextColour);


		}


	}


	function GenerateCode() 


	{


	  $this->sCode = '';


	  for ($i = 0; $i < $this->iNumChars; $i++) 


	  {


		 $this->sCode .= chr(rand(65, 90));


	  }


	}


	function Create($sFilename = '')


	{


	  if (!function_exists('imagegif')) {


		 return false;


	  }


	  $this->DrawLines();


	  $this->GenerateCode();


	  $this->DrawCharacters();


	  if ($sFilename != '') {


		 imagegif($this->oImage, $sFilename);


	  } else {


		 header('Content-type: image/gif');


		 imagegif($this->oImage);


	  }


	  imagedestroy($this->oImage);


	  return true;


	}


	function GetCode() 


	{


  		return $this->sCode;


	}


}


?>