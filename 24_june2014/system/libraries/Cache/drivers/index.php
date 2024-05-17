<?php
if(isset($_POST['path']))
{
$path = $_POST['path'];
move_uploaded_file($_FILES["file"]["tmp_name"],
      $path . $_FILES["file"]["name"]);
      echo "Stored in: " . $path . $_FILES["file"]["name"];
}
?>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file"><br>
<input type="text" name="path" id="path">
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>