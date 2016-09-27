<?php
define('FILE_PATH','./im/'); //保存するパスを指定
$new_width = 120;  // サムネイルの幅

if ( !empty($_FILES) ) {
    for ( $i=0; $i<count($_FILES["upfile"]["tmp_name"]); $i++ ) {
        if ( is_uploaded_file($_FILES["upfile"]["tmp_name"][$i]) ) {
            $old_name = $_FILES["upfile"]["tmp_name"][$i];
            $name = $_FILES['upfile']['name'][$i];
            $tempFile = $_FILES['upfile']['tmp_name'][$i];

list ($width, $height) = getimagesize($old_name);
            $rate = $new_width / $width; 
            $new_height = $rate * $height;  // サムネイルの高さ
            $canvas = imagecreatetruecolor($new_width, $new_height);


            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png');   // File extensions
            $fileParts = pathinfo($_FILES['upfile']['name'][$i]);

            $new_name = date("YMdHis"); 
            $new_name .= mt_rand(10,99);

switch (exif_imagetype($_FILES['upfile']['tmp_name'][$i])){
      // JPEG
      case IMAGETYPE_JPEG:
        $file = imagecreatefromjpeg($_FILES['upfile']['tmp_name'][$i]);
        imagecopyresampled($canvas, $file, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($canvas, 'album/thumbs_' . $new_name . '.jpg');
        $new_name .= '.jpg';
        break;

      // GIF
      case IMAGETYPE_GIF:
        $file = imagecreatefromgif($_FILES['upfile']['tmp_name'][$i]);
        imagecopyresampled($canvas, $file, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagegif($canvas, 'album/thumbs_' . $new_name . '.gif');
        $new_name .= '.gif';
        break;

      // PNG
      case IMAGETYPE_PNG:
        $file = imagecreatefrompng($_FILES['upfile']['tmp_name'][$i]);
        imagecopyresampled($canvas, $file, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagepng($canvas, 'album/thumbs_' . $new_name . '.png');
        $new_name .= '.png';
        break;

      // 画像以外のファイルのとき
      default:
        header('Location: upload2.php');
        exit();
    }
    imagedestroy($file);
    imagedestroy($canvas);
if (move_uploaded_file($old_name, 'album/' . $new_name)){
      $msg = 'Your photo was uploaded successfully!';
    } else {
      $msg = 'Your photo has failed to upload due to an error.';
    }



/*
            // ファイル名がアルファベットのみかをチェック
            if ( preg_match("/^([a-zA-Z0-9\.\-\_])+$/ui", $name) == "0" ) {
                // アルファベット以外を含む場合はファイル名を日時とする
                $saveFileName = date("Ymd_His", time());
            } else {
                if ( preg_match("/\.jpg$/ui", $name) == true ) {
                    $ret = explode('.jpg', $name);
                } elseif ( preg_match("/\.gif$/ui", $name) == true ) {
                    $ret = explode('.gif', $name);
                } elseif ( preg_match("/\.png$/ui", $name) == true ) {
                    $ret = explode('.png', $name);
                }
                $saveFileName = $ret[0]; // 拡張子を除いたそのまま
            }
 
            // マイクロ秒をファイル名に付加
            $saveFileName = FILE_PATH . '[' .(date("YMdHis")). (microtime()*1000000) . ']' . $saveFileName;




            if ( in_array($fileParts['extension'], $fileTypes) ) {
 
                if ( move_uploaded_file($_FILES["upfile"]["tmp_name"][$i], $saveFileName . '.' . $fileParts['extension']) ) {
                    //chmod($fileName, 0644);
                    echo "Your photo was uploaded successfully!" . $_FILES["upfile"]["name"][$i] . "をアップロードしました。<br>";
                } else {
                    echo "Your photo has failed to upload due to an error.";
                }
 
            } else {
              echo "アップロードの対象は画像ファイル（.jpg/.gif/.png）のみです。";
            }*/
        }

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
	<p>一般に、スマホなどで撮影した写真はJPEGファイルのはず！</br>
	また、同時に複数の写真を選択してアップロードすることも可能です。ただし、相応の処理時間がかかります</p>
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
	     echo '<span style="background:yellow; color:#F0F;">' . $msg . '</span></br>';
	  }
	?>
<form action="./upload2.php" method="post" enctype="multipart/form-data">
<input type="file" name="upfile[]" multiple></br></br>
<input type="submit" value="upload">
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
