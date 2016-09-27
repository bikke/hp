<!doctype html>
<html lang="ja">

<head>
<meta charset="UTF-8">

<title>BIKKE会員専用ページ</title>

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


</head>

<body >
<div id="header" <?php include("php/bgcolor.php"); ?>>
<p class="sb-toggle-left">
◆</p> 

HOME	
<p class="sb-toggle-right">◆</p> 

</div>


<div id="sb-site" >

<h2>会員専用のページへようこそ</h2>
<p>コンテンツをこれから追加していきます</p>

</div>

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
