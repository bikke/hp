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

</script>
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
	
					<h2>GAMES</h2>
	<h3>試合のドロー表などはこちらを参照してください</h3>
	<p>・<a href="http://www2.hp-ez.com/hp/kta/page1">京都大学テニス同好会連盟【KTA】</a></p>
	<p>・<a href="http://hccweb6.bai.ne.jp/jtca/">西日本硬式庭球同好会連盟【JTCA】</a></p>
	<p>・<a href="http://star10-11.jimdo.com/">Student Tennis Association for Relief【S.T.A.R】</a>
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