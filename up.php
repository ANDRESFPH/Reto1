<?php
  session_start();
  if(isset($_SESSION['LOGIN_STATUS']) && !empty($_SESSION['LOGIN_STATUS'])){
      header('');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WebPictures - Upload your pictures</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/styleup.css" type="text/css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="js/multiupload.js"></script>
<script type="text/javascript">
var config = {
	support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",		// Valid file formats
	form: "demoFiler",					// Form ID
	dragArea: "dragAndDropFiles",		// Upload Area ID
	uploadUrl: "upload.php"				// Server side upload url
}
$(document).ready(function(){
	initMultiUploader(config);
});
</script>

</head>
<body>
<div id="container">
    <!--top section start-->
    <div id='top'></div>

  <div id='tutorialHead'><div class="logout"><a href="logout.php" title="logout"><h1>Logout</h1></a></div><?php echo $_SESSION['UNAME'];?></div>

    <div id="wrapper">
         <center><h1 class="title">UPLOAD</h1></center>



<div id="dragAndDropFiles" class="uploadArea">
	<h1></h1>
</div>
<form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
<input type="file" name="multiUpload" id="multiUpload" multiple="">
<input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="buttonUpload">
</form>
<div class="progressBar">
	<div class="status"></div>
</div>
    </div>

    <!--fotter section start-->
    <div id="fotter">
         <p>Andrés Piedrahita - Andrés Rivera. </p>
    </div>
</div>
</body>
</html>
