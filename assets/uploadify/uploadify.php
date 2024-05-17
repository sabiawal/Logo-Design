<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
//$targetFolderx = 'codeRepository/uploads/'; // Relative to the root
//$targetFolder = $_POST['targetFolder']; // Relative to the root
$targetFolder = "/web_images";
$unik =$_POST['timestamp'];

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
    
    // Validate the file type
	$fileTypes = array('jpg','jpeg','JPEG','JPG','gif','png', 'doc','docx','pdf','zip','rar','tar','odt','ppt','pptx','ai','eps','psd'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);

    $filename = preg_replace('/\W/', '', $fileParts['filename']).".".$fileParts['extension'];    
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;    
    $targetFile = rtrim($targetPath,'/') . '/'.$unik.'_'.$filename;
	
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		//
		//echo $unik.'_'.$_FILES['Filedata']['name'];
        echo $unik.'_'.$filename;
	} else {
		echo 'Invalid file type. Upload Failed';
	}
}
?>