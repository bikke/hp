<?php

  $msg = null; 

  $new_width = 120;  // サムネイルの幅


  // アップロード処理
  if (isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])){
   
    $old_name = $_FILES['file']['tmp_name'];

    list ($width, $height) = getimagesize($old_name);

    $rate = $new_width / $width; 
    $new_height = $rate * $height;  // サムネイルの高さ

    $canvas = imagecreatetruecolor($new_width, $new_height);

    $new_name = date("YMdHis"); 
    $new_name .= mt_rand(10,99);

    switch (exif_imagetype($_FILES['file']['tmp_name'])){
      // JPEG
      case IMAGETYPE_JPEG:
        $file = imagecreatefromjpeg($_FILES['file']['tmp_name']);
        imagecopyresampled($canvas, $file, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($canvas, 'album/thumbs_' . $new_name . '.jpg');
        $new_name .= '.jpg';
        break;

      // GIF
      case IMAGETYPE_GIF:
        $file = imagecreatefromgif($_FILES['file']['tmp_name']);
        imagecopyresampled($canvas, $file, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagegif($canvas, 'album/thumbs_' . $new_name . '.gif');
        $new_name .= '.gif';
        break;

      // PNG
      case IMAGETYPE_PNG:
        $file = imagecreatefrompng($_FILES['file']['tmp_name']);
        imagecopyresampled($canvas, $file, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagepng($canvas, 'album/thumbs_' . $new_name . '.png');
        $new_name .= '.png';
        break;

      // 画像以外のファイルのとき
      default:
        header('Location: upload.php');
        exit();
    }
    imagedestroy($file);
    imagedestroy($canvas);

    if (move_uploaded_file($old_name, 'album/' . $new_name)){
      $msg = 'Your photo was uploaded successfully!';
    } else {
      $msg = 'Your photo has failed to upload due to an error.';
    }
   
  }

?>
<!doctype html>
<html lang="ja">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Upload Photos</title>
<meta name="viewport" content="initial-scale=1.0">


<!-- Slidebars CSS -->
<link rel="stylesheet" href="css/slidebars.css">


<!--  Styles -->
<link rel="stylesheet" href="css/style.css">


<!-- jQuery -->
<script src="js/jquery-1.11.0.min.js"></script>

<script src="js/slidebars.js"></script>
<script>
	
(function($) {
	
	$(document).ready(function() {
		
	$.slidebars();
		
	});SS
	
}) (jQuery);

</script>


<script src="http://code.jquery.com/jquery-2.0.0.js"></script>

</head>


<body>
<div id="header" <?php include("php/bgcolor.php"); ?>>	
<p class="sb-toggle-left">
		◆	</p> 

	UPLOAD
<p class="sb-toggle-right">
		◆	</p> 

</div>

<div id="sb-site" >

	<h2>写真のアップロード</h2>
<div id="click-event">
	<p>写真をアップロードして"ALBUM"に送ります。</br>
	PNG,JPEG,GIFファイルがアップロード可能です。動画のアップロードはできません</p>
	<p>一般に、スマホなどで撮影した写真はJPEGファイルのはず！
	また、写真は1枚ずつしかアップロードできません</p>
</div>
<script>
$("h2").click(function(){
  alert("説明文はクリックしたら消えます");
});
$("#click-event").click(function(){
  $(this).slideUp();
});
</script>
	<?php
	  if($msg){
	     echo '<p>' . $msg . '</p>';
	  }
	?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	   <input type="file" name="file"  /><br />
	   <input type="submit" value="upload" >
	</form>
</div>
<!--"sb-site"-->
<div class="sb-slidebar sb-left">
<div id="menu">
<?php include("php/left.php"); ?>
</div><!---menu--->
</div>
<div class="sb-slidebar sb-right">
<div id="menu">
<?php include("php/right.php"); ?>
</div><!---menu--->
</div>
</body>
</html>
