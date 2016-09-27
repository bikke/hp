<?php
header('X-FRAME-OPTIONS: DENY');
?>
<!DOCTYPE html>
<html lang="ja"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<title>京都大学テニスサークルびっけ</title>
		
		<link rel="stylesheet" type="text/css" href="css_direct/ver1.css" />
		<link rel="stylesheet" href="js_direct/reset.css" media="all">
		
		<script src="js_direct/jquery.js"></script>
		<script type="text/javascript" src="js_direct/side_menu.js"></script>
		<script type="text/javascript" src="js_direct/side.js"></script>

<!--<[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js_direct/fullslider.js"></script>

	</head>
<!--------------------------------------------------------->


	<body class="">
		<div class="overlay" id="js__overlay"></div>
		<nav class="side-menu" id="js__sideMenu">
			<?php include_once("php_direct/time.php"); ?>	
			<ul class="side-menu__ul">
			<?php include_once("php_direct/side.php"); ?>	
			</ul>
		</nav>

		<div class="side-menu-btn" id="js__sideMenuBtn">
			<div class="ellipsis-v">
				<span class="point top"></span>
				<span class="point mid"></span>
				<span class="point bot"></span>
			</div>
		</div>

		<div class="wrapper">

			<div class="logo">
			  <img src="back/bikke_logo.png" alt="1"  width="35%" />
			</div>
<div class="fixedlogo">
<p id="toPageTop"><a><img src="back/bikke_logo.png" alt="1" width="35%"/></a></p>
</div>
<script src="js_direct/scroll.js"></script>

<div id="container">
<div class="wideslider">
<ul>
<?php include_once("php_direct/backslide.php"); ?>
</ul>
</div><!--/.wideslider-->
</div><!--/#container-->
<div class="menuBox">
	<?php include_once("php_direct/side_menu.php"); ?>
</div>

<div class="logo">
	<img src="back/discription.png" alt="Kyoto University tennis club ===BIKKE=== since 1992" width="60%"/>
</div>

			<main class="contents">
				<section class="contents__inner">
				
	
<div class="bikke"><!--<div style="text-align:right;">--->
	<h2>びっけブログへようこそ　（＾ω＾）ノノノノ</h2>
   

	<h3>ブログ係を筆頭に、サークル会員が毎週交代して書いているブログです＾＾<br>サークルの雰囲気や活動内容がよくわかります</h3>
	<p><a href="http://ameblo.jp/bikkeblo-2016/entrylist.html">びっけブログ２０１６へ</a></p>
	<p style="text-align:center;"><input type="button" value="リンクを開く(別窓で)" onClick="window.open('http://ameblo.jp/bikkeblo-2016/entrylist.html')"></p>
			
			<!--<p><img src="images/ss01.gif" alt="画面" width="200" height="155" /></p>-->
			<hr />
	    <hr />
		
				</section>
			</main>
		<div class="foot">
			<footer class="footer">
				<p>　</p>
			</footer>
		</div>
		</div><!-- /.wrapper -->
</div>

	
</body></html>