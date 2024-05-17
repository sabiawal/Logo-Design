<?php
/*
Uploadify v2.1.4
Release Date: November 8, 2010

Copyright (c) 2010 Ronnie Garcia, Travis Nickels

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
function CroppedThumbnail($imgSrc,$thumbnail_width,$thumbnail_height,$dest) { 
			//$imgSrc is a FILE - Returns an image resource.    //getting the image dimensions 
			list($width_orig, $height_orig,$img_type) = @getimagesize($imgSrc);  
			//echo $width_orig; echo $imgSrc;die();
			if($img_type == 1 || $img_type == 2 || $img_type == 3){
				if($img_type == 1)
					$myImage = imagecreatefromgif($imgSrc);
				elseif($img_type == 2)
					$myImage = imagecreatefromjpeg($imgSrc);
				else
					$myImage = imagecreatefrompng($imgSrc);

			$ratio_orig = $width_orig/$height_orig;
			
			if (($thumbnail_width/$thumbnail_height) < $ratio_orig) {
			   if($thumbnail_width>$width_orig){$new_height = $height_orig;}else{$new_height = $thumbnail_width/$ratio_orig;}
			   
			   if($thumbnail_width>$width_orig){$new_width = $width_orig;}else{$new_width = $thumbnail_width;}
			} else {
			   if($thumbnail_height>$height_orig){$new_width = $width_orig;}else{$new_width = $thumbnail_height*$ratio_orig;}
			   if($thumbnail_height>$height_orig){$new_height = $height_orig;}else{$new_height = $thumbnail_height;}
			}
		   
			$x_mid = $new_width/2;  //horizontal middle
			$y_mid = $new_height/2; //vertical middle
		   
			$process = imagecreatetruecolor(round($new_width), round($new_height));
			
			imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
			$thumb=imagecreatetruecolor($new_width, $new_height);
			
			
		 imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($new_width/2)), ($y_mid-($new_height/2)), $new_width, $new_height, $new_width, $new_height);
		
		switch($img_type)
		{
			  case '1':
				  imagegif($thumb,$dest);
			  break;
			  case '2':
				  imagejpeg($thumb,$dest);
			  break;
			  case '3':
				  imagepng($thumb,$dest);
			  break;
			  default:
			  echo '';//die();
			  break;
		  }
		
			imagedestroy($process);
			imagedestroy($myImage);
			//return $thumb;
			}
		}
if (!empty($_FILES)) {
	$key = '';
	$pattern = "1234567890";
    for($i=0;$i<10;$i++){
   
	 $key .= $pattern{rand(0,9)};
    }
	
	$tempFile = $_FILES['Filedata']['tmp_name'];
	/*if($_REQUEST['folder']=='/new/contents/../uploads/pageImages/')
	{
		$_REQUEST['folder'] = '/new/uploads/pageImages/';		
	}*/
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';
	//$targetFile =  str_replace('//','/',$targetPath) . $key.'_'.$_FILES['Filedata']['name'];
	
	
	$targetFile =  str_replace('//','/',$targetPath) .$key.'_'. $_FILES['Filedata']['name'];	
	$targetthumbFile =  str_replace('//','/',$targetPath) .'thumbs/'.$key.'_'. $_FILES['Filedata']['name'];
	
	//$fileTypes  = str_replace('*.','',$_REQUEST['fileext']);
	
	// $fileTypes  = str_replace(';','|',$fileTypes);
	// $typesArray = split('\|',$fileTypes);
	// $fileParts  = pathinfo($_FILES['Filedata']['name']);
	
	// if (in_array($fileParts['extension'],$typesArray)) {
		// Uncomment the following line if you want to make the directory if it doesn't exist
		// mkdir(str_replace('//','/',$targetPath), 0755, true);
		
		$exts = explode('.',$_REQUEST['Filename']);
		$exts[1] = strtolower($exts[1]);
		if($exts[1]=='js' or $exts[1]=='php' or $exts[1]=='html' or $exts[1]=='htm' or $exts[1]=='exe')
		{
			die('error');	
		}
		move_uploaded_file($tempFile,$targetFile);
		if($exts[1]=='jpg' or $exts[1]=='jpeg' or $exts[1]=='png' or $exts[1]=='gif')
			CroppedThumbnail($targetFile,'100','100',$targetthumbFile);	
			
		//echo str_replace($_SERVER['DOCUMENT_ROOT'],'',$targetFile);
		//print_r($_REQUEST);
		echo $key.'_'.$_FILES['Filedata']['name'];
		//echo $tempFile.'____'.$targetFile.'_____'.$targetthumbFile;
	// } else {
	// 	echo 'Invalid file type.';
	// }
}
?>