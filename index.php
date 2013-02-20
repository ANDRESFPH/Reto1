<?php
  session_start();
  if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WebPictures</title>


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
<link href="css/style.css" type="text/css" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="container">
    <!--top section start-->
    <div id='top'></div>

    <div id='tutorialHead'>
      <div class="logout"><a href="logout.php" title="logout"><h1>Logout</h1></a></div>

    </div>

    <div id="wrapper">
         <div class="user_intro"><h1>Bienvenido <?php echo $_SESSION['UNAME'];?></h1></div>
      <p><a href="up.php">SUBE TUS IMAGENES</a></p>
      <p><a href="show.php">VER IMAGENES</a></p>
    </div>

    <!--fotter section start-->
    <div id="fotter">
         <p>Andrés Piedrahita - Andrés Rivera.
         </p>
    </div>
</div>
</body>
</html>
