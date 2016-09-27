<?php
  
  $images = array();  // 画像ファイル名のリストを格納
  $num = 36; // 1ページに表示する画像の枚数

  // 画像フォルダから画像ファイル名を読み込む
  if ($handle = opendir('./album')){
    while ($entry = readdir($handle)){
      if ($entry != "." && $entry != ".." && strpos($entry, 'thumbs_') !== false){
        $images[] = $entry;
      }
    }
    closedir($handle);
  }
?>
<!doctype html>
<html lang="ja">

<head>
<meta http-equiv="Contet-Type" content="text/html; charset=UTF-8">
<title>Album</title>
<meta name="viewport" content="initial-scale=1.0">


<style type="text/css">
a { 
	text-decoration: none; 
	font-size: 20px;
}
</style>
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


</head>


<body >
<div id="header" <?php include("php/bgcolor.php"); ?>>
<p class="sb-toggle-left">
◆</p> 

ALBUM	
<p class="sb-toggle-right">◆</p> 

</div>


<div id="sb-site" >
<div id="click-event">
	<p>
	  皆さんがアップロードしてくださった写真がすべて見れます。
順番はアップロード順に左右されません
	</p>
</div>
<script>
$("#click-event").click(function(){
  $(this).slideUp();
});
</script>
	
	<?php
    if (count($images) > 0){
      $images = array_chunk($images, $num);
      $page = 0;
      // GETでページ数が指定されていた場合
      if (isset($_GET['page']) && is_numeric($_GET['page'])){
        $page = intval($_GET['page']) - 1;
        if (!isset($images[$page])){
          $page = 0;
        }
      }
      echo '<p class="title">';
      for ($i = 1; $i <= count($images); $i++){
        echo '<a href="album2.php?page=' . $i . '">' . $i . '</a>&nbsp;';
      }
      echo '</p>';


      print "<p>";
      foreach ($images[$page] as $img){
        echo '<a href="./album/' . str_replace('thumbs_', '', $img) . '"><img src="./album/' . $img . '" /></a>';
      }
      print "</p><!--thumb-->";
      
    } else {
      echo '<p>There are no photos yet.</p>';
    }
  ?>
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
