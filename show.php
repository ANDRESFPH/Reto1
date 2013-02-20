


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WebPictures - Upload your pictures</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/styleup.css" type="text/css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<style>.clear      { clear:both; }
.photo-link    { padding:5px; margin:5px; border:1px solid #ccc; display:block; width:200px; float:left; }
.photo-link:hover  { border-color:#999; }</style>

</head>
<body>
<div id="container">
    <!--top section start-->
    <div id='top'></div>

  

    
         
         <?php 
		 $handle = opendir(dirname(realpath(__FILE__)).'/uploads/');
		while($file = readdir($handle)){
			if($file !== '.' && $file !== '..'){
				echo '<div class="imagenesf"><div><img src="uploads/'.$file.'" border="0" width="50%" height="50%" /></div>';
				
				echo '<a href="download.php?file=uploads/'.$file.'">download</a></div></div>';
			}
		}
		 
		  ?>





    

    <!--fotter section start-->
    <div id="fotter">
         <p>Andrés Piedrahita - Andrés Rivera. </p>
    </div>
</div>
</body>
</html>
